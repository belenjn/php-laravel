<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Contact</title>
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


        .image {
            background-image: url({{$contact->contact_image}});
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
        
    }
        
    </style>
</head>
<body>
    <a href="/contacts">See all contacts</a>
   <h2>Contact Detail:</h2> 
   <div class="grid">
   <div class="text">
       <p><b>Id: </b>{{$contact->contact_id}}</p>
       <p><b>Name: </b>{{$contact->contact_name}}</p>
       <p><b>Email: </b>{{$contact->contact_email}}</p>
       <p><b>Phone: </b>{{$contact->contact_phone}}</p>
       <p><b>Date: </b>{{$contact->contact_date}}</p>
       <p><b>Subject: </b>{{$contact->subject}}</p>
       <p><b>Comment: </b>{{$contact->comment}}</p>
       <p><b>Viewed: </b>{{$contact->viewed}}</p>
       <p><b>Archived: </b>{{$contact->archived}}</p>
   </div>

   </div>
   
</body>
</html>