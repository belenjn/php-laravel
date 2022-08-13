<!DOCTYPE html>
<html lang="en">


@include('head')

@include('navbar')

<header>
    <div class="header__cover">
        <h4>THE ULTIMATE LUXURY</h4>
        <h1>Our Offers</h1>

        <div class="header__cover--choices">
            <a href="/" style="text-decoration: none; color: black;">Home |</a>
            <a class="about" >Offers</a>

        </div>
    </div>

</header>

<body>


@foreach ($rooms as $room)

@if ($room->offer === 1)

    <div class="rooms">
    <img src="{{asset('assets/rooms/room2.jpg')}}" style='
    display: flex;
    margin: auto;
    margin-top: 20px;
    width: 770px;
    height: 490px;'/>
          
    </div>
    <div class="room__name">
          <h2>
            @if ($room->bed_type === 'single_bed') Single bed @endif 
            @if ($room->bed_type === 'double_bed') Double bed @endif
            @if ($room->bed_type === 'double_superior') Double superior @endif
            @if ($room->bed_type === 'suite') Suite @endif
        </h2>

       
</div>
<div>
    
</div>
    <h3 style='
    color: #BDAC8D;  
    margin: auto;
    margin-top: 20px;
    font-weight: 700;
    font-family: "Archivo", sans-serif;
    text-align: center;
    text-decoration: line-through;
    font-size: 35px;
    '>
    ${{$room->price}}
    <small style='font-size: 15px;'>/Night</small>
</h3>
 
    <h3 style='
    color: red;  
    margin: auto;
    margin-top: 20px;
    font-weight: 700;
    font-family: "Archivo", sans-serif;
    text-align: center;
    font-size: 35px;
    '>
    $45
    <small style='font-size: 15px;'>/Night</small>
</h3> 

<div class="room__amenities">
    <hr>
    <p>{{$room->description}}</p>

</div>

              
@endif

@endforeach
</body>

@include('footer')

    
</html>