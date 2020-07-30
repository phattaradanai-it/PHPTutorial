<?php
include"database.php";
 
try {
    $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
   
    $query = "DELETE FROM products WHERE id = ?";
    $result = $con->prepare($query);
    $result->bindParam(1, $id);
     
    if( $result->execute()){
        header('Location: index.php?action=deleted');
    }else{
        die('Unable to delete record.');
    }
}
 
// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
?>