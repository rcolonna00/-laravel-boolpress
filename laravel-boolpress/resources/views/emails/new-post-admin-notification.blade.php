<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Ciao</h1>

    <p>un nuovo post è stato creato it titolo è {{ $new_post->title }}, <a href="{{ route('admin.posts.show', ['post' => $new_post->id]) }}">clicca qui</a> per vedere il post</p>

</body>
</html>