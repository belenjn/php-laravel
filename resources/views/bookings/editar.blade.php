<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <style>

        body {
            margin: auto;
            padding: 20px;
            font-family: 'Roboto', sans-serif;
            font-size: 13px;
            word-break: break-word;
        }

        label {
            font-weight: 700;
            font-size: 16px;
            margin: 5px;
        }

        input {
            margin: 5px;
            padding: 5px;

        }

        div, form {
            display: flex;
            flex-direction: column;
            width: 85%;
            margin: auto;
        }

        h2 {
            text-align: center;
        }

        .button {
            background-color: #135846;
            color: white;
            border-radius: 10px;
            border: none;
        }

        .button:hover {
            cursor: pointer;
            background-color: #5AD07A;
            transition: 0.6s ease;
            padding: 5px;
        }
        
    </style>
</head>
<body>
<a href="/bookings">See all bookings</a>
   <h2>Edit bookings:</h2> 
   <div>
       <form action="/bookings/editar/{{$booking->booking_id}}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    <label>Guest Name:</label>
    <input type="text" name="guest_name" placeholder="Guest Name" value="{{$booking->guest_name}}">
    <label>Order Date:</label>
    <input type="date" name="order_date" placeholder="Order Date" value="{{$booking->order_date}}">
    <label>Check In:</label>
    <input type="date" name="checkin" placeholder="Check In" value="{{$booking->checkin}}">
    <label>Check Out:</label>
    <input type="date" name="checkout" placeholder="Check Out" value="{{$booking->checkout}}">
    <label>Special Request:</label>
    <input type="text" name="special_request" placeholder="Special Request" value="{{$booking->special_request}}">
    <label>Room Id:</label>
    <input type="number" name="room_id" placeholder="Room Id" value="{{$booking->room_id}}">
    <label>Status:</label>
    <input type="text" name="status" placeholder="status" value="{{$booking->status}}">
    <input class="button" type="submit" value="Save">
</form>
</div>

</body>
</html>