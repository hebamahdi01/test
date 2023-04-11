<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <h1>Welcome, <?php echo $name; ?></h1>

    <form action="/store" method="post">
        @csrf
        <label for="username"> name : <input type="text" name="name"></label>
        <br>
        <input type="submit" value="get name">
    </form>
</body>
</html>
