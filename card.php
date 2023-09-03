<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My card | My products</title>
<style>

h3{
    font-family: 'Playfair Display', serif;
    font-weight: bold;
}
main{
    width:40%;
    margin-top:30px;
}
.table{
box-shadow:1px 1px 10px gray;
}
thead{
    background-color:#3498db;
    color:#fff;
    text-align:center;
}
tbody{
    text-align:center;
}
</style>


</head>
<body>
<center><h3>Your reserved products</h3></center>
<?php
include('config.php');
$result=mysqli_query($con, " SELECT * FROM cart ");
while($row=mysqli_fetch_array($result)){
    echo "
    

    <center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Prodact Name</th>
                        <th scope='col'>Prodact Price</th>
                        <th scope='col'>Delete Prodact</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td> <a href='del_card.php? id=$row[id]' class='btn btn-danger'>Delete</a> </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </center>
    ";
}


?>
<center>  <a href="index.php">Back to products page</a></center>


    
</body>
</html>