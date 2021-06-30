<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <p>Ciao amministratore hai un nuovo messaggio</p>

    <ul>
        <li>Da: {{ $contact_data['email'] }}</li>
        <li>Nome: {{ $contact_data['name'] }}</li>
        <li>Messaggio: {{ $contact_data['message'] }}</li>
    </ul>

</body>
</html>