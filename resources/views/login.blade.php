<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'Example title'}}</title>
</head>
<body>
    <form action="../../app/Http/Controllers/authentication.php" method="post">
        <label for="">E-mail:</label>
        <input type="text" >

        <label for="">Senha:</label>
        <input type="text">
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>