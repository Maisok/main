<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form action="{{route('pushvideos')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Название" required maxlength="255">
        <input type="text" name="desc" placeholder="Описание" maxlength="255">
        <input type="file" name="video" required>
        <input type="file" name="image" required>
        <button type="submit">Добавить</button>
    </form>
</body>
</html>