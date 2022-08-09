<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet"> 
    <title>Bookings</title> 
    <style>
        body {
            margin: auto;
            padding: 30px;
            font-family: 'Roboto', sans-serif;
        }

         th,td {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin: auto;
            margin-top: 20px;
        }

        th {
            height: 80px;
            background-color: #135846;
            color: white;
            padding: 15px;
        }

        td {
            padding: 5px;
            text-align: center;
            font-size: 14px;
        }

        h2 {
            text-align: center;
        }
        

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h2>Bookings</h2>
    <a href="/bookings/crear">New booking</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Guest name</th>
            <th>Order Date</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Special Request</th>
            <th>Room Id</th>
            <th>Status</th>
        </tr>
        @foreach ($bookings as $booking)
        <tr>
            <td>{{$booking->booking_id}}</td>
            <td>{{$booking->guest_name}}</td>
            <td>{{$booking->order_date}}</td>
            <td>{{$booking->checkin}}</td>
            <td>{{$booking->checkout}}</td>
            <td>{{$booking->special_request}}</td>
            <td>{{$booking->room_id}}</td>
            <td>{{$booking->status}}</td>
            <td>
                <a href="/bookings/ver/{{$booking->booking_id}}">Show</a>
                <a href="/bookings/editar/{{$booking->booking_id}}">Edit</a>
                <a href="/bookings/eliminar/{{$booking->booking_id}}" onClick="return deleteBooking('Delete Booking')">Delete</a>
            </td>
        </tr> 
        @endforeach
    </table>
    <br>
   
</body>
<script>
    function deleteBooking(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
</html>