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
    <title>Products   </title>
    <style>
        h3{
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
            margin-top:20px ;

        }
        .card{
            float:left;
            margin-top:20px ;
            margin-left:35px ;
            margin-right:20px ;
        
        }
        .card img{
            width: 100%;
            height: 200px;
        }
        main{
            width: 100%;
        }
        .navbar-brand{
    margin-left:70px;
}
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark py-3">
        <a class="navbar-brand">Admin Control</a>

    </nav> 
    <center>
        <h3> Admin Control </h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM products");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
            <div class='card' style='width: 18rem;'>
                <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>$row[price]</p>
                    <a href='delete.php? id=$row[id]' class='btn btn-danger '> Delete Product</a>
                  <P>   </p>
                    <a href='update.php? id=$row[id]' class='btn btn-primary '>update product </a>
                </div>
            </div>
        </main>
        <center>
        ";
    }
    ?>
</body>
</html>