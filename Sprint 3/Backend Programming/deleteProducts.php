<?php
    // $_POST[“id”] is used to access the ID of the product
    include 'processForm.php';

    $delete = $_POST["id"];

    // Deletes product from the database
    $sql = "DELETE FROM upload 
            WHERE id = '$delete'";

    if($conn -> query($sql) == TRUE){
        header("Location: products.php"); // Redirects to products.php
        exit();
    }

    $conn->close();
?>