<!DOCTYPE html>
<html lang="en">

@include('head')

@include('navbar')

<header>
    <div class="header__cover">
        <h4>THE ULTIMATE LUXURY</h4>
        <h1>About Us</h1>

        <div class="header__cover--choices">
            <a href="/" style="text-decoration: none; color: black;">Home |</a>
            <a class="about">About</a>

        </div>
    </div>

</header>

<body>
    <div class="body__container--video">
        <img src="./assets/page 2/about-us/Video.png" />

        <h1>Hello. Our hotel has been present for over 20 years.
            We make the best for all our customers.
        </h1>

    </div>

    <div class="four__sections">
        <img src="./assets/page 2/about-us/Breakfast.png" />

        <img src="./assets/page 2/about-us/Airport pickup.png" />

        <img src="./assets/page 2/about-us/City Guide.png" />

        <img src="./assets/page 2/about-us/Luxury room.png" />
    </div>

    <div class="restaurant__container">
        <img src="./assets/about-us/fake-photo.png" class="fake-photo" alt="fake photo" />

        <div class="text__container">
            <h4>RESTAURANT</h4>
            <h1>Get Restaurant Facilities & Many Other More</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
            </p>
            <button class="button__primary">TAKE A TOUR</button>

        </div>

    </div>

    <div class="about__container--facilities">

        <h4>FACILITIES</h4>
        <h1>Core Features</h1>

        <div class="facilities__container--images">

            <img src="./assets/page 2/about-us/facilities/1.png" />

            <img src="./assets/page 2/about-us/facilities/2.png" />

            <img src="./assets/page 2/about-us/facilities/3.png" />

            <img src="./assets/page 2/about-us/facilities/4.png" />

            <img src="./assets/page 2/about-us/facilities/5.png" />

            <img src="./assets/page 2/about-us/facilities/6.png" />
        </div>


    </div>

    <div class="counter__container">
        <h4>COUNTER</h4>
        <h1>Some Fun Facts</h1>

        <div class="facts__container--images">
            <img
            src="./assets/page 2/about-us/counter/happy-user.png"
            />

            <img
            src="./assets/page 2/about-us/counter/likes.png"
            />

            <img
            src="./assets/page 2/about-us/counter/world.png"
            />

        </div>

        <div class="little-slider__container">
            <img src="./assets/about-us/fake-photo.png" alt="fake photo" class="fake-photo" />
        
            <img src="./assets/menu/little-slider.png" alt="little slider" class="little-slider" />
        
          </div>
    </div>
</body>

@include('footer')


</html>