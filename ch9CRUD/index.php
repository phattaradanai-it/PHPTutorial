<!DOCTYPE HTML>
<html>
<head>
<title>PDO - Read Records - PHP CRUD Tutorial</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    .mt0{ margin-top:0; }
    </style>
</head>
<body>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="container">
  
  <div class="page-header">
      <h1>Read Products</h1>
  </div>

</div> 

<?php
    include"database.php";
    // select all data
    $query = "SELECT id, name, description, price FROM products ORDER BY id DESC";
    $result = $con->prepare($query);
    $result->execute();

    echo "<a href='create.php' class='btn btn-primary m-b-1em'>Create New Product</a>";

        
        echo "<table class='table table-hover table-responsive table-bordered'>";//start table
        //creating our table heading
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Description</th>";
            echo "<th>Price</th>";
            echo "<th>Action</th>";
        echo "</tr>"; 
        
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
         extract($row);
        // creating new table row per record
        echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$name}</td>";
            echo "<td>{$description}</td>";
            echo "<td>{$price}</td>";
            echo "<td>";
            echo "<a href='read.php?id={$id}' class='btn btn-info m-r-1em'>Read</a>";
            echo "<a href='update.php?id={$id}' class='btn btn-primary m-r-1em'>Edit</a>";
            echo "<a href='#'onclick='delete_user({$id});' class='btn btn-danger'>Delete</a>";
            echo "</td>";
         echo "</tr>";
        }
        echo "</table>";
?>

<script type='text/javascript'>
function delete_user( id ){
     
    var answer = confirm('Are you sure?');
    if (answer){
        window.location = 'delete.php?id=' + id;
    } 
}
</script>


</body>
</html>