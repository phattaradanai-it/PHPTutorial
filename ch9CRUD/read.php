<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Read One Record - PHP CRUD Tutorial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>
<body>
 
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    <div class="container">
        <div class="page-header">
            <h1>Read Product</h1>
        </div>
    </div> 
     
<?php
$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
include"database.php";

    try {
        // prepare select query
        $query = "SELECT id, name, description, price FROM products WHERE id = ? LIMIT 0,1";
        $result = $con->prepare( $query );
    
        // ******
        $result->bindParam(1, $id);
    
        // execute our query
        $result->execute();
    
        // store retrieved row to a variable
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
    }catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }

    

?>

<table class='table table-hover table-responsive table-bordered'>
    <tr>
        <td>Name</td>
        <td><?php echo $name;  ?></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><?php echo $description;  ?></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><?php echo $price;  ?></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <a href='index.php' class='btn btn-danger'>Back to read products</a>
        </td>
    </tr>
</table>
</body>
</html>