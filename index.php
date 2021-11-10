<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/82caeb0ea4.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="styles.css" />
    <title>Home</title>
  </head>
  <body>
    <div class="nav--bar">
      <div class="logo">
        <a href="#">
          <h2 class="logo--1">A</h2>
          <h2 class="logo--2">Basic</h2>
          <h2 class="logo--3">Blog.</h2>
        </a>
      </div>
      <div class="nav--pages">
        <a href=""><h2>about.</h2></a>
        <a href="/abasicblog/blogs/"><h2>blogs.</h2></a>
        <a href=""><h2 class="newsletter--button--open">newsletter.</h2></a>
      </div>
    </div>
    <div class="outside--flex">
      <div class="newsletter--container">
        <form class="newsletter" action="/index.php" method="post">
        <?php 
$receiver = "davidtro2017@icloud.com";
$subject = "Thank you for joining our newsletter.";
$body = "A new blog will be emailed to you every sunday.
:)";
$sender = 'From:noahsolomon2003@gmail.com';

if(mail($receiver, $subject, $body, $sender)) { //php function send mail
    echo "Email sent successfully to $receiver!";
}
else {
    echo "Sorry, mail could not be sent";
}
?>
          <div class="title">
            <h2>Join Our Newsletter.</h2>
            <div class="newsletter--close"><i class="fas fa-times"></i></div>
          </div>
          <div class="email--box">
            <i class="fas fa-envelope-open-text fa-3x"></i>
            <input
              type="email"
              name="email"
              spellcheck="false"
              placeholder="Enter your email..."
            />
            <button type="submit" name="subscribe">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
    <div class="content--container">
      <div class="content">
        <h1 class="think">Think.</h1>
        <h1 class="basic">&nbsp; Basic.</h1>
      </div>
    </div>
    <script src="/script.js"></script>
  </body>
</html>