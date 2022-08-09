<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet"> 
    <title>Rooms</title> 
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
    <h2>Rooms</h2>
    <a href="/rooms/crear">New room</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Number</th>
            <th>Bed Type</th>
            <th>Description</th>
            <th>Offer</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Cancellation</th>
            <th>Amenities</th>
        </tr>
        @foreach ($rooms as $room)
        <tr>
            <td>{{$room->room_id}}</td>
            <td>{{$room->room_number}}</td>
            <td>{{$room->bed_type}}</td>
            <td>{{$room->description}}</td>
            <td>{{$room->offer}}</td>
            <td>{{$room->price}}</td>
            <td>{{$room->discount}}</td>
            <td>{{$room->cancellation}}</td>
            <td>{{$room->amenities}}</td>
            <td>
                <a href="/rooms/ver/{{$room->room_id}}">Show</a>
                <a href="/rooms/editar/{{$room->room_id}}">Edit</a>
                <a href="/rooms/eliminar/{{$room->room_id}}" onClick="return deleteRoom('Delete Room')">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
   
</body>
<script>
    function deleteRoom(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
</html>