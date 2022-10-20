<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = htmlentities(strip_tags(isset($_POST["to"]) ? $_POST["to"] : $_GET["to"]));
         $subject = htmlentities(strip_tags($_POST["subjet"] ?? $_GET["subjet"]));
         $message = htmlentities(strip_tags($_POST["message"] ?? $_GET["message"]));
         $name = htmlentities(strip_tags($_POST["name"] ?? $_GET["name"]));
         $email = htmlentities(strip_tags($_POST["email"] ?? $_GET["email"]));
         
         $header = "From:$name <$email> \r\n";
         $header .= "Cc:services.djopa@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>
