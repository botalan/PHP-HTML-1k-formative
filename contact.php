<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="/about.php">About</a>
        <a href="/index.html">Home</a>
    </nav>
    <form action="/contact-sent.php" method="post">
        <label for="Name">Vārds</label><br>
        <input type="text" name="Name"><br>
        <label for="e-pastu" >e-pasts</label><br>
        <input type="text" name="e-pastu"><br>
        <label for="ziņa">Atsauksme</label><br>
        <input type="text" name="ziņa"><br>
        <input type="submit">
    </form>
</body>
</html>