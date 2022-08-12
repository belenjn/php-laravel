<!DOCTYPE html>
<html lang="en">


@include('head')

@include('navbar')


<body>
 @include('header')
 
  <main class="main__container">
    <div class="main__container--text">
      <h4>ABOUT US</h4>
      <h1>Discover Our Underground.</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.
      </p>
      <button class="button__primary">BOOK NOW</button>

    </div>
    <div class="main__container--photos">


      <div class="fake-photo" id="first-photo">
        <img src="./assets/about-us/fake-photo.png" alt="photo"></img>
      </div>
      <div class="strong__team">
        <img src="./assets/team/team.png" alt="team" class="logo" />
        <h2>Strong Team</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
      </div>

      <div class="fake-photo">
        <img src="./assets/about-us/fake-photo.png" alt="photo"></img>
      </div>
      <div class="luxury__room">
        <img src="./assets/team/luxury-room.png" alt="team" class="logo" />
        <h2>Luxury Room</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
      </div>
    </div>
  </main>

  <div class="main__rooms">
    <h4>ROOMS</h4>
    <h1>Hand Picked Rooms</h1>

    <div class="slider">
      <div class="rooms__navbar">
        <img src="./assets/rooms/navbar_rooms/bed.png" />
        <img src="./assets/rooms/navbar_rooms/wifi.png" />
        <img src="./assets/rooms/navbar_rooms/car.png" />
        <img src="./assets/rooms/navbar_rooms/snow.png" />
        <img src="./assets/rooms/navbar_rooms/gym.png" />
        <img src="./assets/rooms/navbar_rooms/smoke.png" />
        <img src="./assets/rooms/navbar_rooms/cocktel.png" />
      </div>
      <img src="./assets/about-us/fake-photo.png" />

    </div>
    <div class="slider__container--bottom">
      <h3>Minimal Duplex Room</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
      </p>
      <div class="pricing">
        <h3>$345<small>/Night</small></h3>
      </div>
    </div>
  </div>


  <div class="video__container">
    <div class="text__container">
      <h4>INTRO VIDEO</h4>
      <h1>Meet With Our Luxury Place.</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat you have to understand this.
      </p>

      <button class="button__primary">BOOK NOW</button>

    </div>
    <div class="image__container">
      <img src="./assets/about-us/fake-photo.png" class="fake-photo" alt="fake photo" />
    </div>

  </div>

  <div class="facilities__container">

    <!-- Hay que cambiar en la vista de ordenador, por un slider  -->
    <h4>FACILITIES</h4>
    <h1>Core Features</h1>
    <div>
      <img src="./assets/facilities/finger.png" class="finger" alt="finger with stars" />
      <img src="./assets/facilities/01.png" class="number" alt="number 01" />
    </div>


    <div class="donut__container">
      <!-- Hay que añadir el slider en la vista de ordenador  -->
      <h3>Have High Rating</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna..</p>
      <img src="./assets/facilities/slider-buttons.png" class="slider-buttons" alt="mini slider with buttons" />

      <img src="./assets/facilities/donut.png" class="donut" alt="donut" />
    </div>

  </div>


  <div class="menu__container">
    <h4>MENU</h4>
    <h1>Our Foods Menu</h1>
    <div class="menu__list">
      <div class="menu__list--photo">
        <img src="./assets/about-us/fake-photo.png" />

      </div>
      <div class="menu__list--text">
        <h4>
          Eggs & Bacon
        </h4>

        <p>
          Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
        </p>
      </div>
    </div>

    <div class="menu__list">
      <div class="menu__list--photo">
        <img src="./assets/about-us/fake-photo.png" />

      </div>
      <div class="menu__list--text">
        <h4>
          Tea or Coffee
        </h4>

        <p>
          Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
        </p>
      </div>
    </div>
    <div class="menu__list">
      <div class="menu__list--photo">
        <img src="./assets/about-us/fake-photo.png" />

      </div>
      <div class="menu__list--text">
        <h4>
          Chia Oatmeal
        </h4>

        <p>
          Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
        </p>
      </div>
    </div>

  </div>

  <div class="menu__container--buttons">
    <div class="right">
      <h6>
        >
      </h6>
    </div>

    <div class="left">
      <h6>
        < </h6>
    </div>


  </div>

  <div class="little-slider__container">
    <img src="./assets/about-us/fake-photo.png" alt="fake photo" class="fake-photo" />

    <img src="./assets/menu/little-slider.png" alt="little slider" class="little-slider" />

  </div>

  <div class="pre-footer__container">

    <div class="pre-footer__container--images">

      <img src="./assets/pre-footer/rocket.png" alt="rocket" />

      <h2>84k<small>+</small></h2>
      <p>Projects are Completed</p>


    </div>
    <div class="pre-footer__container--images">

      <img src="./assets/pre-footer/people.png" alt="rocket" />

      <h2>10M<small>+</small></h2>
      <p>Active Backers Around World</p>


    </div>
    <div class="pre-footer__container--images">

      <img src="./assets/pre-footer/person-money.png" alt="rocket" />

      <h2>02k<small>+</small></h2>
      <p>Categories Served</p>


    </div>
    <div class="pre-footer__container--images">

      <img src="./assets/pre-footer/book.png" alt="rocket" />

      <h2>100M<small>+</small></h2>
      <p>Idea Raised Funds</p>


    </div>
  </div>

</body>

@include('footer')

</html>