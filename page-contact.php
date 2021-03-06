<!DOCTYPE html>
<html lang="en">

  <head>
    <title>whacked</title>
    <!-- Meta  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/wp-content/themes/whacked/code/assets/images/logo.png">
    <!-- Responsive Website -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel= "stylesheet" href="/wp-content/themes/whacked/code/assets/css/contact.css">
    <!-- <link rel= "stylesheet" href="assets/css/contact.css"> -->
    <!-- Button -->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">
    <!-- Contact Form -->
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet' type='text/css'>
  <link href="https://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
</head>

  <body>
    
    <header> 
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="/"><img src="/wp-content/themes/whacked/code/assets/images/logo.png" alt="logo" width="55px" height="55px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-lg-auto ">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/team">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li> 
            <li class="nav-item active" id="free-consultation">
              <a class="nav-link" href="https://calendly.com/whacked/book">Free consultation<span class="sr-only">(current)</span></a>
            </li> 
          </ul>
        </div>
      </nav>
    </header>
    
    <main>

      <section class="contact">
        <div class="contact-container" width="normal">
          <div class="contact-row">
            <div class="contact-col" direction="column">
              <h1 class="contact-h1">Get in touch</h1>
              <p font-weight="medium" class="contact-p">Have questions? Drop us a quick message!<br> We don???t bite, promise ????</p>
              <div class="icons">
                <div class="icon-1" id="1" width="20px" height="20px"><a href="https://discord.gg/8QxRWuA9"><img src="/wp-content/themes/whacked/code/assets/images/discord.png" alt="discord" width="100%"></a></div>
                <div class="icon-1" id="3" width="20px" height="20px"><a href="https://www.instagram.com/whack.co/"><img src="/wp-content/themes/whacked/code/assets/images/insta.png" alt="instagram"  width="100%"></a></div>
                <div class="icon-1" id="4" width="20px" height="20px"><a href="https://www.linkedin.com/company/whackedco/"><img src="/wp-content/themes/whacked/code/assets/images/linkedin.png" width="100%" alt="linkedin"></a></div>
              </div>
            </div>

            <div class="contact-form">
              <div class="contact-form-container">
                <h2>Contact Us</h2>
                <div class="form">
                  <form method="post" action="contact.php" class="form">
                    <label for="fname">Name</label>
                    <input type="text" id="fname" name="name" placeholder="Your name..">
  
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your email..">
  
                    <label for="subject">Message</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  
                    <button class = "bttn-pill bttn-md bttn-warning"><input type="submit" name="email" value="Submit"></button>
                    
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- <form method="POST" action="send.php" class="left" enctype="text/plain">
        <input type="hidden" name="form-name" value="contact" />
        <fieldset>
            <label for="your_name">YOUR NAME *</label><input type="text"  id="your_name" name="your_name" class="required" /><br/>
            <label for="your_email">YOUR email *</label><input type="text" id="your_email" name="your_email" class="required email" /><br/>
            <label for="current_site">current site</label><input type="text" id="current_site" name="current_site" /><br/>
            <label for="estimated_budget">estimated budget</label><input type="text" id="estimated_budget" name="estimated_budget" /><br/>
            <label for="project_description">project description</label> <textarea id="project_description" name="project_description"></textarea><br/>
            <input type="submit" name="email" value="send" id="sendbutton">
        </fieldset> -->
      
      </main>

      <footer class="footer">
        <div class="footer-container">
          <p>&copy; 2021 whacked, a kaya studio brand</p>
        </div>
      </footer>

  <script defer src="/wp-content/themes/whacked/code/assets/js/main.js"></script>

  <!-- Navigation -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>