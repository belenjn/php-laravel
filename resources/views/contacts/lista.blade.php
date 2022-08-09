<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet"> 
    <title>Contacts</title> 
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
    <h2>Contacts</h2>
    <a href="/contacts/crear">New contact</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Subject</th>
            <th>Comment</th>
            <th>Viewed</th>
            <th>Archived</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{$contact->contact_id}}</td>
            <td>{{$contact->contact_name}}</td>
            <td>{{$contact->contact_email}}</td>
            <td>{{$contact->contact_phone}}</td>
            <td>{{$contact->contact_date}}</td>
            <td>{{$contact->subject}}</td>
            <td>{{$contact->comment}}</td>
            <td>{{$contact->viewed}}</td>
            <td>{{$contact->archived}}</td>
            <td>
                <a href="/contacts/ver/{{$contact->contact_id}}">Show</a>
                <a href="/contacts/editar/{{$contact->contact_id}}">Edit</a>
                <a href="/contacts/eliminar/{{$contact->contact_id}}" onClick="return deleteContact('Delete Contact')">Delete</a>
            </td>
        </tr> 
        @endforeach
    </table>
    <br>
   
</body>
<script>
    function deleteContact(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
</html>