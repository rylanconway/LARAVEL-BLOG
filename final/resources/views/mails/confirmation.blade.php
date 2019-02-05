<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hi {{ $name }}!</h1>

<p>
    Thank you so much for signing up! We look forward to sharing all our great content with you!
</p>
<p>
</p>

{{ route('confirmation', $token) }}
</body>
</html>
