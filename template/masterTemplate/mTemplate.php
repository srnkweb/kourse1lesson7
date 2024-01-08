<!doctype html>
<html lang="ru">
<head>
    <meta  charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Курс №1, уклк №2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
          crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,
    300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $this->data[0][0]['body']; ?>">
    <link rel="stylesheet" href="<?php echo $this->data[0][0]['head']; ?>">
    <link rel="stylesheet" href="<?php echo $this->data[0][0]['content']; ?>">
    <link rel="stylesheet" href="<?php echo $this->data[0][0]['footer']; ?>">
    <link rel="stylesheet" href="<?php echo $this->data[0][0]['subHead']; ?>">
    <link rel="stylesheet" href="<?php echo $this->data[0][0]['subContent']; ?>">
    <link rel="stylesheet" href="<?php echo $this->data[0][0]['subFooter']; ?>">
</head>
<body>
<div class="wrapper">
<?php include_once(__DIR__ . $this->data[1][1]['head']);?>
<?php include_once(__DIR__ . $this->data[1][1]['content']);?>
<?php include_once(__DIR__ . $this->data[1][1]['footer']);?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>