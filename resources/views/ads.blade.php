<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>

<body>
    <h1>Объявления</h1>
    <ul>
        @foreach($ads as $ad)
            <li><a href="/ads/{id}">{{$ad->id}}</a></li>
            <li><strong>Название:</strong>{{$ad->name}}</li>
            <li><strong>Текст объявления:</strong>{{$ad->text}}</li>
            <li><strong>Номер телефона:</strong>{{$ad->pnumber}}</li><br>
        @endforeach
    </ul>
</body>

</html>