<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";
  if(!empty($_SESSION['POST_DATA'])){
  //user posted variables
        $_POST=$_SESSION['POST_DATA'];
        $name     = $_POST['message_name'];
        $email    = $_POST['message_email'];
        $message  = $_POST['message_text'];
        $human    = $_POST['message_human'];

        //php mailer variables
        $to = get_option('admin_email');
        $subject = "Someone sent a message from ".get_bloginfo('name');
        $headers = 'From: '. $email . "\r\n" .
          'Reply-To: ' . $email . "\r\n";

  
        
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          
         
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      
  }
  
  // if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
print_r($_SESSION);
if($_GET['message' == 'success']) my_contact_form_generate_response("success", $message_sent);
?>

<?php get_header(); ?>

 <div class="content">
     <div class="container">
	<div class=" row">
                  <div class=" col-lg-12">
                      <div class=" col-lg-12 content-list">
                          <?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
                                <style type="text/css">
                                .error{
                                  padding: 5px 9px;
                                  border: 1px solid red;
                                  color: red;
                                  border-radius: 3px;
                                }

                                .success{
                                  padding: 5px 9px;
                                  border: 1px solid green;
                                  color: green;
                                  border-radius: 3px;
                                }

                                form span{
                                  color: red;
                                }
                              </style>
                                <div id="respond">
                                <?php echo $response; ?>
                                <form action="http://internationalmachinery.eu/processsendblue.php<?php //the_permalink(); ?>" method="post">
                                  <p><label for="name">Name: <span>*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
                                  <p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
                                  <p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text" ><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
                                 
                                  <input type="hidden" name="submitted" value="1">
                                  <p><input type="submit" value="Send"></p>
                                </form>
                              </div>
				<?php //comments_template( '', true ); ?>
                          <?php endwhile; // end of the loop. ?>
                           
                          
                         
                          
                      </div>
                  </div>
                  
              </div>
</div>


			

		

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
</div>

