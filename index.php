<?php

    if(isset($_POST['submit'])){

         $file_name = $_FILES['image']['name'];
         $file_type = $_FILES['image']['type'];
         $file_size = $_FILES['image']['size'];
         $temp_name = $_FILES['image']['tmp_name'];

         $uploaded_to = 'uploads/';

         $result = move_uploaded_file($temp_name, $uploaded_to.$file_name);
         

         if(isset($result)){

            echo '<h3> Uploaded Image </h3>';
            echo '<img src="'.$uploaded_to.$file_name.'">';

         }

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Image Uploads</title>
</head>

<body>
    <div class="container">

        <h1>Image Upload</h1>
        <h3>Choose an image and click upload</h3>

        <form action="index.php" method="POST" enctype="multipart/form-data">

            <input type="file" name="image" id="">
            <button type="submit" name="submit">Upload</button>

        </form>
    </div>

    <a href="gallery.php"><h3>go to gallery</h3></a>

</body>

</html>