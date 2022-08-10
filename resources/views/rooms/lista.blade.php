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

    <title>Ultimate Room</title>
</head>

<div class="navbar__header">

    <nav class="navbar">
        <div class="navbar__container">
            <div class="navbar__container-icon">
                <input src="./assets/nav/hamburger-icon.png" alt="boton hamburguesa" class="navbar__hamburger" />
            </div>
            <div class="navbar__container-logo">
                <img src="./assets/nav/logo-nav.png" alt="logo del hotel" class="navbar__logo" />
            </div>
            <div class="navbar__categories">
                <li>About Us</li>
                <li>Rooms</li>
                <li>Offers</li>
                <li>Contact</li>
            </div>
            <div class="navbar__container-icons-right">
                <img src="./assets/nav/person.png" alt="personal" class="navbar__person" />
                <img src="./assets/nav/lupa.png" alt="lupa" class="navbar__search" />
            </div>
        </div>
</div>
</nav>

<header>
    <div class="header__cover">
        <h4>THE ULTIMATE LUXURY</h4>
        <h1>Ultimate Room</h1>

        <div class="header__cover--choices">
            <a>Home |</a>
            <a class="about">Rooms</a>

        </div>
    </div>

</header>

<body>



<div class="slider__container--bottom">

@foreach ($rooms as $room)

    <div class="rooms">
    <img src="{{asset('assets/rooms/room.jpg')}}" />

            <h3>
            @if ($room->bed_type === 'single_bed') Single bed @endif 
            @if ($room->bed_type === 'double_bed') Double bed @endif
            @if ($room->bed_type === 'double_superior') Double superior @endif
            @if ($room->bed_type === 'suite') Suite @endif
            <h3/>

        <div class="pricing">
            <h3>${{$room->price}}<small>/Night</small></h3>
            <a style="font-size: 12px; margin-top: 20px;" href="/roomDetail/{id}">Book Now</a>
            //TODO: hacer la pagina de room detail y hacer lo del form de inicio para que muestre las disponibles en room list
        </div>
          
    </div>
@endforeach

</div>

</body>


<footer>
    <div class="footer__socials">
  
      <img src="./assets/footer/Logo.png" />
  
      <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
  
      <img src="./assets/footer/Socials.png" class="socials" />
  
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
        <img src="./assets/footer/mobile.png" alt="mobile" />
        <p>Phone Number <br />
          <small>+987 876 765 76 577</small>
        </p>
      </div>
  
      <div class="contact__icon">
        <img src="./assets/footer/message.png" alt="message" />
        <p>Phone Number <br />
          <small>+987 876 765 76 577</small>
        </p>
  
      </div>
  
      <div class="contact__icon">
        <img src="./assets/footer/location.png" alt="location" />
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