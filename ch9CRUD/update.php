<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Update a Record - PHP CRUD Tutorial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
         
</head>
<body>
 
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="container">
        <div class="page-header">
            <h1>Update Product</h1>
        </div>
    </div> 
     
<?php
$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
include"database.php";

try {

    $query = "SELECT id, name, description, price FROM products WHERE id = ? LIMIT 0,1";
    $result = $con->prepare( $query );
     
    $result->bindParam(1, $id);
    $result->execute();
     
  
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];
    
}catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}


?>
 
 <form action="<?php $_SERVER["PHP_SELF"] . "?id={$id}";?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' value="<?php echo $name ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea name='description' class='form-control'><?php  echo $description;  ?></textarea></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type='text' name='price' value="<?php echo $price; ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save Changes' class='btn btn-primary' />
                <a href='index.php' class='btn btn-danger'>Back to read products</a>
            </td>
        </tr>
    </table>
</form>

<?php
if($_POST){
     
    try{
     
        $query = "UPDATE products SET name=:name, description=:description, price=:price WHERE id = :id";
        
        $result = $con->prepare($query);
       
        $result ->bindParam(':name', $_POST['name']);
        $result ->bindParam(':description', $_POST['description']);
        $result ->bindParam(':price', $_POST['price']);
        $result ->bindParam(':id', $id);
         
        if($result->execute()){
           
            header("Refresh:0");
            //header("Location:update.php");
        }else{
            echo "<div class='alert alert-danger'>Unable to update record. Please try again.</div>";
        }
         
    }catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>


 
</body>
</html>