<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <center>
        <h1>Contact Us</h1>
        <form action="{{url('/contact')}}" method="post">
            @csrf
            <input type="text" name="name"><br><br>
            <input type="text" name="email"><br><br>
            <textarea name="message"></textarea><br><br>
            <input type="submit" value="submit">
        </form>
    </center>
</body>
</html>