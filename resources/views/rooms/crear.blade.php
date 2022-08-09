<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
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
<a href="/rooms">See all rooms</a>
   <h2>New room:</h2> 
   <div>
       <form action="/rooms/crear" method="POST">
    @csrf
    <label>Room Number:</label>
    <input type="text" name="room_number" placeholder="Number">
    <label>Bed Type:</label>
    <input type="text" name="bed_type" placeholder="Bed Type">
    <label>Description:</label>
    <input type="text" name="description" placeholder="Description">
    <label>Offer:</label>
    <input type="date" name="offer" placeholder="Offer">
    <label>Price:</label>
    <input type="number" name="price" placeholder="Price">
    <label>Discount:</label>
    <input type="number" name="discount" placeholder="Discount">
    <label>Cancellation:</label>
    <input type="text" name="cancellation" placeholder="Cancellation">
    <label>Amenities:</label>
    <input type="text" name="amenities" placeholder="Amenities">
    <input class="button" type="submit" value="Save">
</form>
</div>

</body>
</html>