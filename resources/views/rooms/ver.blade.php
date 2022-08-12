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
    <link rel="stylesheet" href="{{asset('css/room-details.css')}}" />

    <title>Room</title>
</head>

@include('navbar')


<header>
    <div class="header__cover">
        <h4>THE ULTIMATE LUXURY</h4>
        <h1>Ultimate Room</h1>

        <div class="header__cover--choices">
       
            <a href="/" style="text-decoration: none; color:black;">Home |</a>
            <a class="about" >Rooms</a>

        </div>
    </div>

</header>
<body>
   
<div class="room__name">
          <h2>
            @if ($room->bed_type === 'single_bed') Single bed @endif 
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

   
</body>
@include('footer')

</html>