<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&family=Roboto:wght@100&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300&family=Old+Standard+TT&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home.css')}}" />
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="{{asset('css/room-details.css')}}" />
>>>>>>> 58a25ccf22c7530789f2362f94fbfcf5f77d13b0

    <title>Room</title>
</head>

<div class="navbar__header">

    <nav class="navbar">
        <div class="navbar__container">
            <div class="navbar__container-icon">
                <input src="../../assets/nav/hamburger-icon.png" alt="boton hamburguesa" class="navbar__hamburger" />
            </div>
            <div class="navbar__container-logo">
                <img src="../../assets/nav/logo-nav.png" alt="logo del hotel" class="navbar__logo" />
            </div>
            <div class="navbar__categories">
            <a href="/about" style="text-decoration: none; color: black;"><li>About us</li>
        <a href="/rooms" style="text-decoration: none; color: black;"><li>Rooms</li></a>
        <a href="/offers" style="text-decoration: none; color: black;"><li>Offers</li></a>
        <a href="/contact" style="text-decoration: none; color: black;"><li>Contact</li></a>
            </div>
            <div class="navbar__container-icons-right">
                <img src="../../assets/nav/person.png" alt="personal" class="navbar__person" />
                <img src="../../assets/nav/lupa.png" alt="lupa" class="navbar__search" />
            </div>
        </div>
</div>
</nav>

<header>
    <div class="header__cover">
        <h4>THE ULTIMATE LUXURY</h4>
        <h1>Ultimate Room</h1>

        <div class="header__cover--choices">
<<<<<<< HEAD
            <a>Home |</a>
            <a class="about">Rooms</a>
=======
            <a href="/" style="text-decoration: none; color:black;">Home |</a>
            <a class="about" >Rooms</a>
>>>>>>> 58a25ccf22c7530789f2362f94fbfcf5f77d13b0

        </div>
    </div>

</header>
<body>
<<<<<<< HEAD
    <a href="/rooms">See all rooms</a>
   <h2>Room Detail:</h2> 
   <div class="grid">
   <div class="text">
       <p><b>Id: </b>{{ $room->room_id}}</p>
       <p><b>Number: </b>{{ $room->room_number}}</p>
       <p><b>Bed Type: </b>{{ $room->bed_type}}</p>
       <p><b>Description: </b>{{ $room->description}}</p>
       <p><b>Offer: </b>{{ $room->offer}}</p>
       <p><b>Price: </b>{{ $room->price}}</p>
       <p><b>Discount: </b>{{ $room->discount}}</p>
       <p><b>Cancellation: </b>{{ $room->cancellation}}</p>
       <p><b>Amenities: </b>{{ $room->amenities}}</p>
   </div>

   </div>
=======

<div class="room__name">
          <h2>   @if ($room->bed_type === 'single_bed') Single bed @endif 
            @if ($room->bed_type === 'double_bed') Double bed @endif
            @if ($room->bed_type === 'double_superior') Double superior @endif
            @if ($room->bed_type === 'suite') Suite @endif
        </h2>
       
        <div class="pricing">
            <h3>${{$room->price}}<small>/Night</small></h3>
        </div>

       
</div>


<img src="{{asset('assets/rooms/room.jpg')}}" class="room__image" />

<div class="room__description">
<p>{{$room->description}}</p>

</div>

<div class="room__amenities">
    <h2>Amenities</h2>
    <hr>
    <p>{{$room->amenities}}</p>

</div>

<div class="room__amenities">
    <h2>Cancellation</h2>
    <hr>
    <p class="cancellation">{{$room->cancellation}}</p>

</div>

>>>>>>> 58a25ccf22c7530789f2362f94fbfcf5f77d13b0
   
</body>
<footer>
    <div class="footer__socials">
  
      <img src="../../assets/footer/Logo.png" />
  
      <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
  
      <img src="../../assets/footer/Socials.png" class="socials" />
  
    </div>
  
  
  
    <div class="footer__services">
    <h4>Services.</h4> <br/>
  
      <ul>
        <li>+ Resturent & Bar</li>
        <li>+ Swimming Pool</li>
        <li>+ Wellness & Spa</li>
        <li>+ Restaurant</li>
        <li>+ Coference Room</li>
        <li>+ Coctail Party House</li>
  
      </ul>
  
      <ul>
        <li>+ Gaming Zone</li>
        <li>+ Marriage Party</li>
        <li>+ Party Planning</li>
        <li>+ Tour Consultancy</li>
      </ul>
    </div>
  
  
    <div class="footer__contact">
    <h4 class="contact">Contact Us.</h4><br/>
  
      <div class="contact__icon">
        <img src="../../assets/footer/mobile.png" alt="mobile" />
        <p>Phone Number <br />
          <small>+987 876 765 76 577</small>
        </p>
      </div>
  
      <div class="contact__icon">
        <img src="../../assets/footer/message.png" alt="message" />
        <p>Phone Number <br />
          <small>+987 876 765 76 577</small>
        </p>
  
      </div>
  
      <div class="contact__icon">
        <img src="../../assets/footer/location.png" alt="location" />
        <p>Phone Number <br />
          <small>+987 876 765 76 577</small>
        </p>
      </div>
  
    </div>
  
  
  </footer>
  <div class="footer__policy">
    <h4>Copyright By@Example - 2020</h4>
    <h4>Terms of use | Privacy Environmental Policy</h4>
  </div>
</html>