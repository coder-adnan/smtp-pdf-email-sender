<!-- resources/views/mail.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $sub }}</title> <!-- Use dynamic subject -->
</head>
<body>
    <p>{{ $msg }}</p> <!-- Use dynamic message -->
</body>
</html>
