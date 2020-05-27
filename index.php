<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="./static/css/reset.css">
        <link rel="stylesheet" typr="text/css" href="./static/css/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Share+Tech+Mono&display=swap" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
        <header>
            <div id="title">PHP Calculator</div>
        </header>
        <main>
            <div id="calculator_area">
                <section>
                    <h3>Addition</h3>
                    <form method="get" action="addition.php" id="form_add">
                        <input type="number" placeholder="Add First Number" name="add_first"><br>
                        <input type="number" placeholder="Add Second Number" name="add_second"><br>
                        <button type="submit">Add</button><br>
                    </form>
                </section>
                <hr>
                <section>
                    <h3>Division</h3>
                    <form method="get" action="division.php" id="form_divide">
                        <input type="number" placeholder="Add Numerator" name="div_num"><br>
                        <input type="number" placeholder="Add Denominator" name="div_den"><br>
                        <button type="submit">Divide</button><br>
                    </form>
                </section>
            </div>
        </main>
    </body>
</html>