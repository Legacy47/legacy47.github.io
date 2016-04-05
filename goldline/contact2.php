<?php
if (isset($_POST['action'])) {
    //who to send the email to  
    
    $email_to = "justinivip@gmail.com";
     
    //Get data from form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_from = $_POST['email'];
    $phone = $_POST['phone'];
    $email_subject = $_POST['subject'];
    $message = $_POST['message'];


    //Create Email Content
    $email_message = "";
    $email_message .= "First Name: ".$first_name."\n";
    $email_message .= "Last Name: ".$last_name."\n";
    $email_message .= "Email: ".$email_from."\n";
    $email_message .= "Telephone: ".$phone."\n";
    $email_message .= "Subject: ".$email_subject."\n";
    $email_message .= "Details: ".$message."\n";
    

    //Make headers
    $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();

    //Send Email
    @mail($email_to, $email_subject, $email_message, $headers); 
    
    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Goldline IT</title>
      
    <!--Icon for Goldline-->
    <link rel="shortcut icon" href="images/favicon.png">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Custom CSS-->
    <link href="css/custom.css" rel="stylesheet">
      
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
    <!--Materialize JS-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--Bootstrap-->
    <script src="js/bootstrap.min.js"></script>
    <!--Materialize-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--Validate-->
    <script type="text/javascript"> 
        $(document).ready(function(){
            
            $('.scrollspy').scrollSpy();
            
            $('#message').trigger('autoresize'); 
            
        });
    </script>
    <style>
    </style>
  </head>
  <body class="Site">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.html" class="contact"><img alt="Brand" src="images/logo.png" height="60"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html" class="glyphicon glyphicon-home"  style="font-size: 16px; padding-top: 20px"><span class="sr-only">(current)</span></a></li>
            <li><a href="about.html" style="font-size: 16px; padding-top: 20px">About</a></li>
            <li class="active"><a href="contact.html"  style="font-size: 16px; padding-top: 20px">Contact</a></li>
            <li><a href="products.html"  style="font-size: 16px; padding-top: 20px">Products</a></li>
            <li><a href="services.html"  style="font-size: 16px; padding-top: 20px">Services</a></li>
            <li><a href="contact.html"  style="font-size: 16px; padding-top: 20px"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 03 9816 8377</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <br class="hide-on-small-only">
    <main class="Site-content">
    <div class="container">
    <div class="row">
        <div class="col s12 m12 l11 hide-on-small-only">
        <div class="well well-sm" style="border-bottom: 0px; border-radius: 3px 3px 0px 0px; margin-bottom: 0px;">
        <ul class="nav nav-tabs nav-justified">
          <li role="presentation"><a href="about.html" style="color: black;">About</a></li>
          <li role="presentation" class="active"><a href="contact.html" style="color: black;">Contact</a></li>
          <li role="presentation"><a href="products.html" style="color: black;">Products</a></li>
          <li role="presentation"><a href="solutions.html" style="color: black;">Solutions</a></li>
          <li role="presentation"><a href="services.html" style="color: black;">Services</a></li>
        </ul>
        </div>
        <div class="panel panel-default" style="border-top: 0px; border-radius: 0px 0px">
          <div class="panel-heading section scrollspy" id="Contact">
              <div class="media">
                <div class="media-left media-middle">
                    <img class="media-object" src="images/server.png" height="65px">
                </div>
                <div class="media-body">
                  <h2>Contact</h2>
                </div>
              </div>
          </div>
          <div class="panel-body flow-text" style="padding-left: 0px; padding-right: 0px;">
                <div class="row">
                <div class="container">
                <h1 class="black-text center-align hide-on-small-only">Contact Details</h1>
                <div class="col s12 m10 l8 offset-l2 offset-m1 hide-on-small-only">
                    <div class="well well-sm">
                    <div class="scrollspy" id="Details">
                    <div class="card grey lighten-3 hoverable">
                        <div class="card-image">
                            <div class="center-align">
                                <div class="google-maps">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.065158771983!2d145.0741393158676!3d-37.81194274171332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6413e704c1fe7%3A0x2d59bf2c1e5e334b!2s243+Whitehorse+Rd%2C+Balwyn+VIC+3103!5e0!3m2!1sen!2sau!4v1459667126844" width="500" height="400" frameborder="0" style="border: 0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="card-content black-text center-align">
                        <span class="card-title" style="font-size: 25px">Goldline IT</span>
                        <br>
                        <p class="flow-text">
                            243 Whitehorse Road
                            <br>
                            Balwyn 3103
                            <br>
                            www.GoldlineIT.com.au
                            <br>
                            support@goldlineit.com.au
                            <br>
                            Ph: 03 9816 8377
                            <br>
                            Fax: 03 9816 8344
                            <br><br>
                            Open From: Monday to Friday
                            <br>
                            Opening Hours: 9am to 6pm
                            <br>
                            Weekends: Open by appointment
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                </div>
              </div>
              <form class="col s12 m12 l12 section scrollspy" id="contact" method="POST" action="/contact.php" name="contactForm">
                  <br>
                  <h3 class="black-text" style="margin-left: 30px">Submit a Form</h3>
                  <br><br>
                  <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">account_circle</i>
                        <input placeholder="Justin" id="first_name" type="text" class="validate" name="first_name" required>
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">account_circle</i>
                        <input placeholder="Lee" id="last_name" type="text" class="validate" name="last_name" required>
                        <label for="last_name">Last Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12 m6 l6">
                      <i class="material-icons prefix">email</i>
                      <input placeholder="justinlee@exmaple.com" id="email" type="email" class="validate" name="email" required>
                      <label for="email" data-error="wrong" data-succes="right">Email</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                      <i class="material-icons prefix">phone</i>
                      <input placeholder="0411-111-111" id="phone" type="tel" class="validate" name="phone" required>
                      <label for="phone">Telephone</label>
                    </div>
                    </div>
                  <div class="row">
                    <div class="input-field col s12 m12 l12">
                      <i class="material-icons prefix">label</i>
                      <input placeholder="Disaster Recovery" id="subject" type="text" class="validate" name="subject" required>
                      <label for="subject">Subject</label>
                    </div>
                    </div>
                    <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">mode_edit</i>
                      <textarea id="message" class="materialize-textarea" length="250" name="message" required></textarea>
                      <label for="message" style="font-size: 1.5rem;">Message</label>
                    </div>
                    <div class="input-field col s12">
                        <button class="waves-effect waves-light btn orange accent-3 right" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>    
                        </button> 
                    </div>
                    </div>
                </form>
              <?=$thankYou ?>
        </div>
        </div>
    </div>
    <div class="col m4 l1 hide-on-med-and-down" id="myScrollspy" style="margin-top: 55px;">
        <ul class="table-of-contents" data-spy="affix">
            <li class="active"><a href="#Contact" style="color: black;">Contact</a></li>
            <li><a href="#Details" style="color: black;">Contact Details</a></li>
            <li><a href="#Form" style="color: black;">Submit a Form</a></li>
        </ul>
    </div>   
    </div>
    </div>
    <div class="row">
    <div class="col s12 m12 l11 hide-on-med-and-up">
        <div class="well well-sm" style="border-bottom: 0px; border-radius: 3px 3px 0px 0px; margin-bottom: 0px;">
        <ul class="nav nav-tabs">
          <li role="presentation"><a href="about.html" style="color: black;">About</a></li>
          <li role="presentation" class="active"><a href="contact.html" style="color: black;">Contact</a></li>
          <li role="presentation"><a href="products.html" style="color: black;">Products</a></li>
          <li role="presentation"><a href="solutions.html" style="color: black;">Solutions</a></li>
          <li role="presentation"><a href="services.html" style="color: black;">Services</a></li>
        </ul>
        </div>
        <div class="panel panel-default" style="border-top: 0px; border-radius: 0px 0px">
          <div class="panel-heading section scrollspy" id="Contact">
              <div class="media">
                <div class="media-left media-middle">
                    <img class="media-object" src="images/server.png" height="65px">
                </div>
                <div class="media-body">
                  <h2>Contact</h2>
                </div>
              </div>
          </div>
          <div class="panel-body flow-text" style="padding-left: 5px; padding-right: 10px;">
                <div class="row">
                <div class="container">
                <h1 class="black-text center-align hide-on-small-only">Contact Details</h1>
                <div class="col s12 m10 l8 offset-l2 offset-m1 hide-on-small-only">
                    <div class="well well-sm">
                    <div class="scrollspy" id="Details">
                    <div class="card grey lighten-3 hoverable">
                        <div class="card-image">
                            <div class="center-align">
                                <div class="google-maps">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.065158771983!2d145.0741393158676!3d-37.81194274171332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6413e704c1fe7%3A0x2d59bf2c1e5e334b!2s243+Whitehorse+Rd%2C+Balwyn+VIC+3103!5e0!3m2!1sen!2sau!4v1459667126844" width="500" height="400" frameborder="0" style="border: 0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="card-content black-text center-align">
                        <span class="card-title" style="font-size: 25px">Goldline IT</span>
                        <br>
                        <p class="flow-text">
                            243 Whitehorse Road
                            <br>
                            Balwyn 3103
                            <br>
                            www.GoldlineIT.com.au
                            <br>
                            support@goldlineit.com.au
                            <br>
                            Ph: 03 9816 8377
                            <br>
                            Fax: 03 9816 8344
                            <br><br>
                            Open From: Monday to Friday
                            <br>
                            Opening Hours: 9am to 6pm
                            <br>
                            Weekends: Open by appointment
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                </div>
              </div>
              <div class="container" style="padding-right: 0px; padding-left: 0px; margin-left: 0px; margin-right: 0px; width: auto">
                <h3 class="black-text center-align hide-on-med-and-up">Contact Details</h3>
                <div class="col s12 m10 l8 offset-l2 offset-m1 hide-on-med-and-up" style="padding-left: 5px; padding-right: 0px;">
                <div class="card grey lighten-3" style="margin: 0px; padding: 0px; width: auto; ">
                        <div class="card-image">
                                <div class="google-maps">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.065158771983!2d145.0741393158676!3d-37.81194274171332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6413e704c1fe7%3A0x2d59bf2c1e5e334b!2s243+Whitehorse+Rd%2C+Balwyn+VIC+3103!5e0!3m2!1sen!2sau!4v1459667126844" width="400" height="300" frameborder="0" style="border: 0" allowfullscreen></iframe>
                                </div>
                        </div>
                        <div class="card-content black-text center-align">
                        <span class="card-title" style="font-size: 18px">Goldline IT</span>
                        <br>
                        <p class="flow-text">
                            243 Whitehorse Road
                            <br>
                            Balwyn 3103
                            <br>
                            www.GoldlineIT.com.au
                            <br>
                            support@goldlineit.com.au
                            <br>
                            Ph: 03 9816 8377
                            <br>
                            Fax: 03 9816 8344
                            <br><br>
                            Open From: Monday to Friday
                            <br>
                            Opening Hours: 9am to 6pm
                            <br>
                            Weekends: Open by appointment
                        </p>
                        </div>
                </div>
                </div>
              </div>
              <form class="col s12 m12 l12 section scrollspy" id="contact" method="POST" action="/contact.php" name="contactForm">
                  <br>
                  <h3 class="black-text" style="margin-left: 30px">Submit a Form</h3>
                  <br><br>
                  <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">account_circle</i>
                        <input placeholder="Justin" id="first_name" type="text" class="validate" name="first_name" required>
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">account_circle</i>
                        <input placeholder="Lee" id="last_name" type="text" class="validate" name="last_name" required>
                        <label for="last_name">Last Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12 m6 l6">
                      <i class="material-icons prefix">email</i>
                      <input placeholder="justinlee@exmaple.com" id="email" type="email" class="validate" name="email" required>
                      <label for="email" data-error="wrong" data-succes="right">Email</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                      <i class="material-icons prefix">phone</i>
                      <input placeholder="0411-111-111" id="phone" type="tel" class="validate" name="phone" required>
                      <label for="phone">Telephone</label>
                    </div>
                    </div>
                  <div class="row">
                    <div class="input-field col s12 m12 l12">
                      <i class="material-icons prefix">label</i>
                      <input placeholder="Disaster Recovery" id="subject" type="text" class="validate" name="subject" required>
                      <label for="subject">Subject</label>
                    </div>
                    </div>
                    <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">mode_edit</i>
                      <textarea id="message" class="materialize-textarea" length="250" name="message" required></textarea>
                      <label for="message" style="font-size: 1.5rem;">Message</label>
                    </div>
                    <div class="input-field col s12">
                        <button class="waves-effect waves-light btn orange accent-3 right" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>    
                        </button> 
                    </div>
                    </div>
                </form>
        </div>
        </div>
    </div>
    </div>
    </main>
    <footer class="page-footer grey lighten-3">
          <div class="container">
            <div class="row">
                <div class="col s12 m4 l4">
                <a href="index.html"><img src="images/logo.png"></a>
                </div>
                <div class="col s12 m4 l4">
                  <li><a class="black-text text-lighten-3" href="about.html">About Goldline IT</a></li>
                  <li><a class="black-text text-lighten-3" href="contact.html">Contact</a></li>
                  <li><a class="black-text text-lighten-3" href="http://get.teamviewer.com/goldlineit">Remote Support</a></li>
                </div>
                <div class="col s12 m4 l4">
                  <li><a class="black-text text-lighten-3" href="services.html">Our Services</a></li>
                  <li><a class="black-text text-lighten-3" href="products.html">Our Products</a></li>
                  <li><a class="black-text text-lighten-3" href="http://get.teamviewer.com/goldline">Remote Support Install</a></li>
                </div>
            </div>
          </div>
          <div class="footer-copyright grey lighten-2">
            <div class="container black-text">Copyright © 2016 Goldline IT Pty. Ltd. All rights reserved
            </div>
          </div>
        </footer>
    </body>
</html>