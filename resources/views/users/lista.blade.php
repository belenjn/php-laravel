<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet"> 
    <title>Users</title> 
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
    <h2>Users</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Occupation</th>
            <th>User_image</th>
            <th>Status</th>
            <th>Password</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->user_id}}</td>
            <td>{{$user->user_name}}</td>
            <td>{{$user->user_email}}</td>
            <td>{{$user->user_phone}}</td>
            <td>{{$user->start_date}}</td>
            <td>{{$user->occupation}}</td>
            <td>{{$user->user_image}}</td>
            <td>{{$user->status}}</td>
            <td>{{$user->password}}</td>
            <!-- <td>
                <a href="/users/show{{$user->id}}">Show</a>
                <a href="/users/edit{{$user->id}}">Edit</a>
                <a href="/users/delete{{$user->id}}">Delete</a>
            </td>
        </tr> -->
        @endforeach
    </table>
    <br>
    <a href="/users/create">New user</a>
   
</body>
</html>