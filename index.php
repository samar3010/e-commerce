<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope online </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2></h2>
                <img src="logo.png" alt="logo" width="450px">
                <input type="text" name='name' placeholder="name"  class="form-control">
                <br>
                <input type="text" name='price' placeholder="price" class="form-control">
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">  Choose a product picture </label>
                <button name='upload'>product lift✅</button>
                <br><br>
                <a href="products.php"> View all products </a>
            </form>
        </div>
        <p>Developer By Samar, Nada, Ibrahim</p>
    </center>
</body>
</html>