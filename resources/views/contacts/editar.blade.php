<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
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
<a href="/contacts">See all contacts</a>
   <h2>Edit contacts:</h2> 
   <div>
       <form action="/contacts/editar/{{$contact->contact_id}}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    <label>Name:</label>
    <input type="text" name="contact_name" placeholder="Name" value="{{ $contact->contact_name}}">
    <label>Email:</label>
    <input type="text" name="contact_email" placeholder="Email" value="{{ $contact->contact_email}}">
    <label>Phone:</label>
    <input type="text" name="contact_phone" placeholder="Phone" value="{{ $contact->contact_phone}}">
    <label>Date:</label>
    <input type="date" name="contact_date" placeholder="Date" value="{{ $contact->contact_date}}">
    <label>Subject:</label>
    <input type="text" name="subject" placeholder="Subject" value="{{ $contact->subject}}">
    <label>Viewed:</label>
    <input type="boolean" name="viewed" placeholder="Viewed" value="{{ $contact->viewed}}">
    <label>Archived:</label>
    <input type="text" name="archived" placeholder="Archived" value="{{ $contact->archived}}">
    <input class="button" type="submit" value="Save">
</form>
</div>

</body>
</html>