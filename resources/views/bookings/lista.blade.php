<!DOCTYPE html>
<html lang="en">

@include('head')


@include('navbar')


<header>
    <div class="header__cover">
        <h4>THE ULTIMATE LUXURY</h4>
        <h1>Booked Rooms</h1>

        <div class="header__cover--choices">
        <a href="/" style="text-decoration: none; color: black;">Home |</a>
            <a class="about">Rooms</a>

        </div>
    </div>

</header>

<body>


<div class="slider__container--bottom">

@foreach ($bookings as $booking)
<img src="{{asset('assets/rooms/room3.jpg')}}" style='
    display: flex;
    margin: auto;
    margin-top: 20px;
    width: 770px;
    height: 490px;'/>

    <div class="rooms">

            <h3>
                {{$booking->checkin}}
            <h3/>

        <div class="pricing">
        </div>
          
    </div>
@endforeach

</div>


</body>



@include('footer')

</html>