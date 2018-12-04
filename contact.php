<?php

if($_POST["submit"]) {
    $recipient="shandstanford@gmail.com";
    $subject="New newsletter signup - NewPower Education";
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $zipcode=$_POST["zipcode"];

    $mailBody="First Name: $firstname\nLast Name: $lastname\nEmail: $email\nPhone: $phone\nAddress: $address\nCity: $city\nState: $state\nZip: $zipcode";

    mail($recipient, $subject, $mailBody, "From: $email <$email>");

    $thankYou="<p>Thank you! Your contact information has been submitted.</p>";
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Involved</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap.min.js"></script>
</head>
<body>
    <!--Nav Bar-->
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
                <!--NewPower Education Logo-->
                <a class="navbar-left" href="#">
                    <img id="navbar-logo" src="images/2OPT_6.png" alt="NewPower Education Logo">
                </a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!--Nav items-->
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="resources.html">Resources</a></li>
                <li class="active"><a href="#">Get Involved <span class="sr-only">(current)</span></a></li>
                <li><a href="donate.html" id="donate">Donate</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="header-container">
        <h1 class="header-title">Get Involved</h1>
    </div>
    <div class="container form-container">
        <div class="row">
            <div class="col-sm-12 center">
                <h1 class="subhead">Sign Up for our Email List</h1>
                <p>Sign up to receive news, updates, event notifications, and other ways to get involved. We will never sell your personal information.</p>
            </div>
        </div>
            <form method="post" action="contact.php">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <!--Name input-->
                    <p>First Name</p>
                    <input type="text" name="firstname" required><br>
                    <p>Last Name</p>
                    <input type="text" name="lastname" required><br>

                    <!--Email input-->
                    <p>Email</p>
                    <input type="text" name="email" required>

                    <!--Phone input-->
                    <p>Phone Number</p>
                    <input type="text" name="phone">
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <!--Address input-->
                    <p>Address</p>
                    <input type="text" name="address">

                    <!--City input-->
                    <p>City</p>
                    <input type="text" name="city">

                    <!--State input-->
                    <p>State</p>
                    <input type="text" name="state">

                    <!--Zip input-->
                    <p>Zip Code</p>
                    <input type="text" name="zipcode" required>
                </div>
            </div>
            <div class="row button-center">
                <!--Submit button-->
                <input type="submit" value="Submit" class="submit-button">
            </div>
            </form>
    </div>
    <div class="container secondary-container">
        <h1 class="subhead">Donate</h1>
        <p>Donate to NewPower Education to help women get involved in public service. All donations to NewPower Education are tax deductible.</p>
        <button class="submit-button" onclick="window.location.href='donate.html'">Donate</button>
    </div>
    <div class="container tertiary-container">
        <h1 class="subhead">Contact Us</h1>
        <p>Contact us to learn more about getting a speaker to talk with your organization about how women can get more civically involved.</p>
        <p><a href="mailto:info@newpowereducation.org">info@newpowereducation.org</a></p>
    </div>
    <!--Footer-->
    <div class="navbar-bottom">
        <div class="panel-footer">
            info@newpowereducation.org | P.O. Box 25, Decatur, GA 30031<br>
            © 2018 NewPower Education. All Rights Reserved.
        </div>
    </div>
</body>
</html>