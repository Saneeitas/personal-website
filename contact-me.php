<!-- @format -->
<?php

include("connection.php"); 
include("process.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sanee Itas</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap"
        rel="stylesheet" />
</head>

<body>
    <?php include("header.php"); ?>

    <div class="middle-container">
        
        <div class="skills">
            <h2>My Contacts</h2>
            
            <div class="skill-row">
                <img class="code-image" src="images/phone.png" alt="" />
                <h3>Socials</h3>
                <table cellspacing="10">
                    <thead>
                        <tr>
                            <td>WhatsApp:</td>
                            <td>+2347033415593</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>Saneeitas@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Twitter:</td>
                            <td>Sanee_itas</td>
                        </tr>
                        <tr>
                            <td>Instagram:</td>
                            <td>Saneeitas_</td>
                        </tr>
                        <tr>
                            <td>Facebook:</td>
                            <td>Sanee Itas</td>
                        </tr>
                    </thead>
                </table>
            </div>
            </div>
        <hr />
        <div class="contact-me">
            <h2>Send me a message.</h2>
            <div class="skill-row">
                 <?php 
              if(isset($error)) {
                  ?>
                  <div class="error-msg">
                      <em>*<strong><?php echo $error ?></strong></em>
                  </div>
                  <?php
              }elseif (isset($success)) {
                  ?>
                <div class="success-msg">
                <strong><?php echo $success ?></strong>
               </div>
               <?php
              }
          ?>
  <form action="" method="post">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="fname" placeholder="Your name.." >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="lname" placeholder="Your last name.." >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Message</label>
    </div>
    <div class="col-75">
      <textarea  name="message" placeholder="Write your message.." style="height:200px" ></textarea>
    </div>
      <input class="btn" type="submit" name="send_message" value="SEND MESSAGE">
  </div>
  </form>
</div>       
</div>
</div>
    <?php include("footer.php"); ?>
</body>

</html>