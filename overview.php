<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs Tube</title>
</head>
<body>

<h1>Here are your previous blogs</h1>

<ul>
    <?php foreach ($blogs as $blog): ?>
            <li><?= $blog['name'] ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>