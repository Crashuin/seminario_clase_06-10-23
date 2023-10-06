<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de programas</h1>
    <table border='1'>
        <?php foreach($programs as $p): ?>
            <tr>
                <td> <?php echo $p['codigo'] ?> </td>
                <td> <?php echo $p['nombre'] ?> </td>
                <td> <?php echo $p['facultad'] ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <table border='1'>
        <?php foreach($students as $p): ?>
            <tr>
                <td> <?php echo $p['codigo'] ?> </td>
                <td> <?php echo $p['nombre'] ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>