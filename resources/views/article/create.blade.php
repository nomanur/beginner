<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>


<form action="{{route('article.store')}}" method="POST">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title">
        <br>
        <label for="desciption">Desc</label>
        <input type="text" name="description">
        <br>

        <input type="submit">
    </form>
    
</body>
</html>