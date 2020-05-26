<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="./static/css/reset.css">
        <link rel="stylesheet" typr="text/css" href="./static/css/styles.css">
        <title>Document</title>
    </head>
    <body>
        <h3>Addition</h3>
        <form method="get" action="addition.php">
            <label>First Number:</label>
            <input type="number" name="add_first"><br>
            <label>Second Number:</label>
            <input type="number" name="add_second"><br>
            <button type="submit">Add</button><br>
        </form>
        <h3>Division</h3>
        <form method="get" action="division.php">
            <label>Numerator:</label>
            <input type="number" name="div_num"><br>
            <label>Denominator:</label>
            <input type="number" name="div_den"><br>
            <button type="submit">Divide</button><br>
        </form>
    </body>
</html>