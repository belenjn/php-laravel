<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>
    <style>

 /* TODO: do the responsive */

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


        .image {
            background-image: url({{$user->user_image}});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border: none;
            height: 100px;
            width: 100px;
            margin: auto;
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

        .image_div {
            display: grid;
            grid-column: 2;
        }
        

        .image {
            background-image: url({{$user->user_image}});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border: none;
            height: 150px;
            width: 150px;
            margin: auto;
            margin-bottom: 220px;
        }
        
    }
        
    </style>
</head>
<body>
    <a href="/users">See all users</a>
   <h2>User Detail:</h2> 
   <div class="grid">
   <div class="text">
       <p><b>Id: </b>{{$user->user_id}}</p>
       <p><b>Name: </b>{{$user->user_name}}</p>
       <p><b>Email: </b>{{$user->user_email}}</p>
       <p><b>Phone: </b>{{$user->user_phone}}</p>
       <p><b>Date: </b>{{$user->start_date}}</p>
       <p><b>Occupation: </b>{{$user->occupation}}</p>
       <p><b>Image: </b>{{$user->user_image}}</p>
       <p><b>Status: </b>{{$user->status}}</p>
       <p><b>Password: </b>{{$user->password}}</p>
   </div>
   <div class="image_div">
   <div class="image"/>

   </div>

   </div>
   
</body>
</html>