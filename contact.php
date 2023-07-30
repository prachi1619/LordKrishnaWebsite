<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap' rel='stylesheet'>
    <title>Radhe Radhe</title>
</head>
<body>

    <!-- HOME -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="https://m.media-amazon.com/images/I/61ntuXQjDlL._SL1380_.jpg" width="50" height="70" class="d-inline-block align-top" alt="">
    <a class="navbar-brand" href="#" style="font-size:25px; text-shadow: 2px 2px 7px rgb(0, 226, 238); text-decoration-line: underline;" >_hail_lord_krishna_</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto"  >
        <li class="nav-item active" >
            <a class="nav-link" href="index.php" onMouseOver="this.style.color='pink'" onMouseOut="this.style.color='blue'" style="font-size:25px;">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php" onMouseOver="this.style.color='pink'" onMouseOut="this.style.color='blue'" style="font-size:25px;">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="lordkrishna.php" onMouseOver="this.style.color='pink'" onMouseOut="this.style.color='blue'" style="font-size:25px;">Lord Krishna</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="places.php" onMouseOver="this.style.color='pink'" onMouseOut="this.style.color='blue'" style="font-size:25px;">Places</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="gallery.php" onMouseOver="this.style.color='pink'" onMouseOut="this.style.color='blue'" style="font-size:25px;">Gallery</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="contact.php" onMouseOver="this.style.color='pink'" onMouseOut="this.style.color='blue'" style="font-size:25px;">Contact</a>
        </li>
        </ul>
    </div>
    </nav>

    <!-- CONTACT US -->

    <section class="my-4">
        <div class="py-4">
            <h1 class="text-center" style="font-size:60px; text-shadow: 2px 2px 7px rgb(0, 226, 238); text-decoration-line: underline;">Contact Us</h1>
        </div> 
        <div class="w-50 m-auto">
          <form action="userinfo.php" method="post">
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="user" autocomplete="off" class="form-control">
            </div> 
            <div class="form-group">
              <label>Email Id</label>
              <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
              <label>Mobile</label>
              <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
              <label>Comments</label>
              <textarea class="form-control" name="comments"></textarea>
            </div> 
            <button type="submit" class="btn btn-primary" style="font-size:20px;">Submit</button> 
          </form>
        </div>
    </section>   
    
    <!-- FOOTER --> 
    <section class="footer">

    <div class="box-container">

        <div class="box">
            <h3 style="font-size:25px; text-shadow: 2px 2px 7px rgb(250, 17, 95); text-decoration-line: underline;">Quick links</h3>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="lordkrishna.php">Lord Krishna</a>
            <a href="places.php">Places</a>
            <a href="gallery.php">Gallery</a>
            <a href="contact.php">Contact</a>
        </div>


        <div class="box">
            <h3 style="font-size:25px; text-shadow: 2px 2px 7px rgb(250, 17, 95); text-decoration-line: underline;">Contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 7845612345 </a>
            <a href="#"> <i class="fas fa-phone"></i> 8954632178 </a>
            <a href="mailto:priyaprachi905@example.com"> <i class="fas fa-envelope"></i> priyaprachi905@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Uttarpradesh, India - 400104 </a>
        </div>

        <div class="box">
            <h3 style="font-size:25px; text-shadow: 2px 2px 7px rgb(250, 17, 95); text-decoration-line: underline;">Follow us</h3>
            <a href="https://www.facebook.com"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="https://twitter.com/home"> <i class="fab fa-twitter"></i> Twitter </a>
            <a href="https://instagram.com/_hail_lord_krishna_?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="https://www.linkedin.com/in/prachigupta1904"> <i class="fab fa-linkedin"></i> Linkedin </a>
            <a href="https://github.com"> <i class="fab fa-github"></i> Github </a>
        </div>

    </div>

    <div class="credit">created by <span>Prachi Gupta</span> | all rights reserved!</div>

</section>
    

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>