<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Create a Record - PHP CRUD Tutorial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
          
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="container">
         <div class="page-header">
            <h1>Create Product</h1>
        </div>
    </div> 

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' /></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea name='description' class='form-control'></textarea></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type='Number' name='price' class='form-control' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save' class='btn btn-primary' />
                <a href='index.php' class='btn btn-danger'>Back to read products</a>
            </td>
        </tr>
    </table>
    </form>


    <?php
        if($_POST){
            include"database.php";
            try{
                                                                    ////*** 
                $query = "INSERT INTO products SET name=:name, description=:description, price=:price";
                $result = $con->prepare($query);

                
                // bind the parameters
                $result ->bindParam(':name', $_POST['name']);        ///** 
                $result ->bindParam(':description', $_POST['description']);
                $result ->bindParam(':price', $_POST['price']);
            
                if($result->execute()){
                    echo "<div class='alert alert-success'>Record was saved.</div>";
                }else{
                    echo "<div class='alert alert-danger'>Unable to save record.</div>";
                }
                
            
            }catch(PDOException $exception){
                die('ERROR: ' . $exception->getMessage());
            }

        }



    ?>

</body>
</html>