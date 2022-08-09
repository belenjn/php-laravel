<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Bookings</title>
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
    <a href="/bookings">See all bookings</a>
   <h2>Booking Detail:</h2> 
   <div class="grid">
   <div class="text">
       <p><b>Id: </b>{{$booking->booking_id}}</p>
       <p><b>Guest Name: </b>{{$booking->guest_name}}</p>
       <p><b>Order Date: </b>{{$booking->order_date}}</p>
       <p><b>Check In: </b>{{$booking->checkin}}</p>
       <p><b>Check Out: </b>{{$booking->checkout}}</p>
       <p><b>Special Request: </b>{{$booking->special_request}}</p>
       <p><b>Room Id: </b>{{$booking->room_id}}</p>
       <p><b>Status: </b>{{$booking->status}}</p>
   </div>

   </div>
   
</body>
</html>