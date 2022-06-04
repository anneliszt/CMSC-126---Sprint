<?php
  $msg = "";
  $msg_class = "";
  $conn = mysqli_connect("localhost", "root", "", "addproduct");

  if (isset($_POST['save_profile'])) {
    
    $product_name = stripslashes($_POST['product_name']);
    $price = stripslashes($_POST['price']);
    
    // For the database
    $productImageName = time() . '-' . $_FILES["productImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($productImageName);
    
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['productImage']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // Check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }

    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO upload SET image='$productImageName', product_name='$product_name', price='$price'";
        if(mysqli_query($conn, $sql)){
            header("Location: addProducts.php");
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } else {
        $error = "There was an error uploading the file";
        $msg = "alert-danger";
      }
    }
    
  }
?>