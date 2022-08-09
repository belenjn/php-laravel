<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Room</title>
    <style>


 body {
            margin: auto;
            padding: 10px;
            font-family: 'Roboto', sans-serif;
            font-size: 13px;
            word-break: break-word;
        }


        h2 {
            text-align: center;
        }

        .grid {
            border: 1px solid #135846;
            border-radius: 10px;
            padding: 20px;
            width: 80%;
            margin: auto;
            display: flex;
            flex-direction: column-reverse;
        }

        .text {
            display: flex;
            flex-direction: column;
        }


@media only screen and (min-width: 1000px) {
        
        body {
            margin: auto;
            padding: 30px;
            font-family: 'Roboto', sans-serif;
        }

        h2 {
            text-align: center;
        }

        .grid {
            border: 1px solid #135846;
            border-radius: 10px;
            padding: 20px;
            width: 80%;
            margin: auto;
            display: grid;
            grid-template-columns: 60% 20%;
            gap: 150px;
        }

        .text {
            display: grid;
            grid-column: 1;
            margin-left: 45px;


        }

        
    }
        
    </style>
</head>
<body>
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
       <p><b>Cancellation: </b>{{ $room->cancellation}}p>
       <p><b>Amenities: </b>{{ $room->amenities}}</p>
   </div>

   </div>
   
</body>
</html>