<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de facultades</h1>
    <ul>
        <?php foreach ($faculty as $i): ?>
        <li> <?php echo $i ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
