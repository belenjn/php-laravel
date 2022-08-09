<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
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
<a href="/users">See all users</a>
   <h2>Edit user:</h2> 
   <div>
       <form action="/users/editar/{{$user->user_id}}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    <label>Name:</label>
    <input type="text" name="user_name" placeholder="Name" value="{{ $user->user_name}}">
    <label>Email:</label>
    <input type="text" name="user_email" placeholder="Email" value="{{ $user->user_email}}">
    <label>Phone:</label>
    <input type="text" name="user_phone" placeholder="Phone" value="{{ $user->user_phone}}">
    <label>Date:</label>
    <input type="date" name="start_date" placeholder="Start Date" value="{{ $user->start_date}}">
    <label>Occupation:</label>
    <input type="text" name="occupation" placeholder="Occupation" value="{{ $user->occupation}}">
    <label>User Image:</label>
    <input type="text" name="user_image" placeholder="Image" value="{{ $user->user_image}}">
    <label>Status:</label>
    <input type="boolean" name="status" placeholder="Status" value="{{ $user->status}}">
    <label>Password:</label>
    <input type="text" name="password" placeholder="Password" value="{{ $user->password}}">
    <input class="button" type="submit" value="Save">
</form>
</div>

</body>
</html>