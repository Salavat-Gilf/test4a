<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('store')}}">
        <label for="name">Название</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="text">Текст объявления</label><br>
        <input type="text" id="text" name="text"><br>
        <label for="pnumber">Номер телефона</label><br>
        <input type="pnumber" id="pnumber" name="pnumber"><br>

        <button type="submit">Отправить</button>
    </form>
</body>
</html>