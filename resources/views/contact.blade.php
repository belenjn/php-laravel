<!DOCTYPE html>
<html lang="en">

@include('head')

@include('navbar')


<header>
    <div class="header__cover">
        <h4>THE ULTIMATE LUXURY</h4>
        <h1>New Details</h1>

        <div class="header__cover--choices">
            <a href="/" style="text-decoration: none; color: black;">Home |</a>
            <a class="about">Contact</a>

        </div>
    </div>

</header>

<body>
   
    <div id="map" class="map"></div>
    <div class="buttons">

        <div class="input__container">
            <input type=”text” id="input__text" />
            <button id="button__input">Send</button>

        </div>

        <div class="select__container">
             <button id="button__location">Find my nearest location</button>

        <select class="selector" id="selector__comunidades" name="select">
            
        </select>
        </div>
       

    </div>
    <div id="locations"></div>



    @include('footer')
<?php
   $environment =  env("API_KEY_MAPS", 1)
?>

<script type="text/javascript" src="{{asset('js/contact.js')}}"></script>
<script async defer
    src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyA9Y7Af9prP4lE5-AncFsKvuNxvO8-b8ak&callback=initMap')}}"></script>
</body>

</html>