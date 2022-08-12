<!DOCTYPE html>
<html lang="en">

@include('head')


@include('navbar')


<header>
    <div class="header__cover">
        <h4>THE ULTIMATE LUXURY</h4>
        <h1>Ultimate Room</h1>

        <div class="header__cover--choices">
        <a href="/" style="text-decoration: none; color: black;">Home |</a>
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
            <a style="font-size: 12px; margin-top: 20px;" href="/rooms/ver/{{$room->room_id}}">Book Now</a>
        </div>
          
    </div>
@endforeach

</div>


</body>



@include('footer')

</html>