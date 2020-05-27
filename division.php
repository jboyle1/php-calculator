<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="./static/css/reset.css">
        <link rel="stylesheet" typr="text/css" href="./static/css/styles.css">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto&family=Share+Tech+Mono&display=swap"
            rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
        <header>
            <div id="title">PHP Calculator</div>
        </header>
        <main>
            <div id="calculator_area">
                <section>
                <div id="answer_text">
                    <h3><?="Dividing ${_GET['div_num']} by ${_GET['div_den']} equals:"?></h3>
                </div>
                <div id="answer">
                    <h3><?=$_GET['div_num']/$_GET['div_den'];?></h3>
                </div>
                </section>
                <section>
                    <a href="index.php"><h3>Reset</h3></a>
                    <section></div>
                </main>
            </body>
        </html>