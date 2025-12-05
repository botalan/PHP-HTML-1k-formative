<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
    <a href="/index.html">Home</a>
    <a href="/contact.php">Contact</a>
    </nav>
    <?php
    $indexArray = ["Lorem ipsum dolor sit amet.","Lorem ipsum dolor sit amet, consectetur adipisicing.","Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto."];
    foreach($indexArray as $arr){
        echo "<p>".$arr."</p>";
    }
    ?>
</body>
</html>