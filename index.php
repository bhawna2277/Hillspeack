<?php
 include("./connection.php");
if (isset($_POST['submit'])) {
  $where_to = mysqli_real_escape_string($connection, $_POST['where_to']);
  $how_many = mysqli_real_escape_string($connection, $_POST['how_many']);
  $arrivals = mysqli_real_escape_string($connection, $_POST['arrivals']);
  $leaving = mysqli_real_escape_string($connection, $_POST['leaving']);
  $insertQuery = "INSERT INTO `bookings`(`where_to`, `how_many`, `arrivals`, `leaving`, `timestamp`) VALUES ('$where_to','$how_many','$arrivals','$leaving',current_timestamp())";
  if (mysqli_query($connection, $insertQuery)) {
    echo "<script>alert('Booking succesfully. We will get you soon')</script>";
  } else {
    echo "<script>alert('Error while booking. Try again later..')</script>";
  }
}
if(isset($_POST['submit0'])){
  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $password = md5($password);
  $number = mysqli_real_escape_string($connection, $_POST['number']);
  $message = mysqli_real_escape_string($connection, $_POST['message']);
  $insertQuery = "INSERT INTO `contact`(`name`, `email`, `password`, `number`, `message`, `timestamp`) VALUES ('$name','$email','$password','$number','$message',current_timestamp())";
  if (mysqli_query($connection, $insertQuery)) {
    echo "<script>alert('Succesfully send your message.')</script>";
  } else {
    echo "<script>alert('Error while sending message. Try again later..')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link  rel="stylesheet" href="collage.css" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Font Awesome 5.15.1 CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
  <title>Hillespeack</title>
</head>

<body>
  <header>
     <img src="images2/hillspeak.jpg" style="width:9%;" alt="">
    <a herf="#" class="logo">
      <h3 class="animated-infinite-heartBeat" style="animation: beat .25s infinite alternate"><span>H</span>illes<span>p</span>eak</h3>
    </a>
    <nav class="navbar">
      <a href="#home">Home</a>
      <a href="#book">Book</a>
      <a href="#services">services</a>
      <a href="#Gallery">Gallery</a>
      <a href="#contect">contact</a>
      
    </nav>
    <form action="./dehradun/hillspeak.jpg" class="search-btn-container">
      <input type="search" id="search-bar" placeholder="search here...">
      <lable for="search-bar" class="fas fa-search"></lable>
    </form>
  </header><br><br><br><br><br><br><br>


  <section id="home">
    <div class="card mb-3" id="main-div">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgFbJaBh2T3lHmtIReAOsiwV0-fPMI45zXAQ&usqp=CAU" class="img-fluid rounded-start w-100 my-5" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h1>Dehradun</h1><br>
            <p class="card-text">Dehradun is a capital of Uttarakhand. Dehradun is the getway to the famous hill stations of Mussoorie $ famous tourism place in Dehradun
              Tapkeshwar tample, Sahastradhara, Malsi deer park, Lachhiwala, Guchhu pani, Shiv mandir near by Mussoorie, F.R.I, pacific mall, centrio mall, Clock tower, gurudwara Nanaksar, Asan Barrage,
              santala Devi etc. </p><br>
            <a id="btn" href="./dehradun/dehradun.html">visit now </a>
          </div>
        </div>
      </div>
    </div>
    <section class="book" id="book">
      <h1 class="heading">
        <span>B</span>
        <span>O</span>
        <span>O</span>
        <span>K</span>
        <span class="space"></span>
        <span>N</span>
        <span>O</span>
        <span>W</span>
      </h1>
      <div class="row">
        <div class="image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCWWZJU1TnSm_AF0R61Hzx6hBMbkCI-38edw&usqp=CAU">
        </div>
        <form action="index.php" method="POST">
          <div class="inputBox">
            <h3>Where to</h3>
            <input required name="where_to" type="text" placeholder="Place Name" />
          </div>
          <div class="inputBox">
            <h3>How many</h3>
            <input required name="how_many" type="text" placeholder="Number of guests" />
          </div>
          <div class="inputBox">
            <h3>Arrivals</h3>
            <input required name="arrivals" type="Date" />
          </div>
          <div class="inputBox">
            <h3>Leaving</h3>
            <input required name="leaving" type="Date" />
          </div>
          <input name="submit" type="submit" id="btn" value="Book Now">
        </form>
      </div>
    </section>
    <section class="services" id="services">
      <h1 class="heading">
        <span>S</span>
        <span>E</span>
        <span>R</span>
        <span>V</span>
        <span>I</span>
        <span>C</span>
        <span>E</span>
        <span>S</span><br><br>
      </h1>
      <div class="row row-cols-1 row-cols-md-3 g-4" style="text-align:center;font-size: 2rem;">
        <div class="col">
          <div class="card" style="border:.1rem solid gray; box-shadow:1rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThmLO2ha8H0ty1O79-Yo1XMjtm95Xka26gUQ&usqp=CAU" class="card-img-top" id="ser">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 2.5rem;">Affordable Hotels</h5>
              <p class="card-text"> Clearness,Simple Rooms Standardized Accommadation, Low cost Low Construction, Amentites.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="border:.1rem solid gray; box-shadow:1rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTD_An3h-YpFcIhpBBPPHSrLTR0jNqBTZEYgQ&usqp=CAU" class="card-img-top" id="ser" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 2.5rem;">Food And Drinks</h5>
              <p class="card-text">healthy And Testy Foods which include snakes,juice,tea,coffee Shop, Restaurant,outside catering sevices, .</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="border:.1rem solid gray; box-shadow:1rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKoJmJiVhpu9Vg8OkrBIHAx2v2xgpcDjgX_Q&usqp=CAU" class="card-img-top" id="ser" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 2.5rem;">Safty Guide</h5>
              <p class="card-text">Access centrol,key management video surveillance, Duress Alert System, phone device security.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="border:.1rem solid gray; box-shadow:1rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThNO2duebIho3DPcKEu9rMzNVCoWxALXMMOg&usqp=CAU" class="card-img-top" id="ser" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 2.5rem;">Around The Dehradun</h5>
              <p class="card-text">Massoorie, Lachhiwala, F.R.I, Budha temple, tapkeshwar, Guchhu pani, Daat kali,centrio mall, .</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100" style="border:.1rem solid gray; box-shadow:1rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlCBFe0p1bR3NDIPRCu62sogLnU18EawSO9g&usqp=CAU" class="card-img-top" id="ser" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 2.5rem;">Fastest Travel</h5>
              <p class="card-text">funicuars,Flying,Aerial Trenways,Subways, Beats,Buses,Trains,Cars.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100" style="border:.1rem solid gray; box-shadow:1rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgQYGKHjJ6qNO0YUpJLnYG-u5MMYTN5VmbXA&usqp=CAU" class="card-img-top" id="ser" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 2.5rem;">Adventure</h5>
              <p class="card-text">Backpacking,Camping , Fishing, Riding, Climbing,Surfing, Safaris</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <br><br>
    <section class="Gallery" id="Gallery">
      <h1 class="heading">
        <span>G</span>
        <span>A</span>
        <span>L</span>
        <span>L</span>
        <span>E</span>
        <span>R</span>
        <span>Y</span>
      </h1>
      <div class="card-group" style="gap:3%; background:black;">
        <div class="card">
          <img src="images2/shivmandir.jpg" class="card-img-top" alt="...">
        </div>

        <div class="card">
          <img src="images2/dehradun s.jpg" class="card-img-top" alt="...">
        </div>

        <div class="card">
          <img src="images2/dehradun fri.jpg" class="card-img-top" alt="...">
        </div>
      </div>

        <div class="card-group" style="margin-top:2rem;gap:3%;background:black">
          <div class="card">
            <img src="images2/m1-3.png"class="card-img-top" style="margin-top:2rem"alt="...">
          </div>

          <div class="card" style="margin-top:2rem">
            <img src="images2/places.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card"  style="margin-top:2rem">
            <img src="images2/anandvan.jpg" class="card-img-top" alt="...">
          </div>
        </div>
      
    </section>
    <section class="book" id="contect">
      <h1 class="heading">
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>T</span>
        <span>A</span>
        <span>C</span>
        <span>T</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="images2/contact.jpg">
        </div>
        <form action="index.php" method="POST">
          <div class="inputBox">
            <input required name="name" type="text" placeholder=" Name" />
          </div>
          <div class="inputBox">
            <input required name="email" type="email" placeholder="email" />
          </div>
          <div class="inputBox">
            <input required name="password" type="password" placeholder="password" />
          </div>
          <div class="inputBox">
            <input required name="number" type="number" placeholder="number" />
          </div>
          <div class="inputBox">
            <textarea required name="message" placeholder="message" id="" cols="72" rows="5"></textarea>
          </div>
          <input name="submit0" type="submit" id="btn" value="send message">
        </form>
      </div>
    </section>
    <hr style="border: 3px solid black;">

    <script src="project.js"></script>
</body>

</html>