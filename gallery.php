<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
</head>

<body>
    <div class="container">

        <h1>Gallery</h1>

    <div class="gallery">

        <?php

            $file_list = scandir('uploads/');

            foreach($file_list as $file){

                if(substr($file, strlen($file) - 3) == 'png'){
                    //echo substr($file, strlen($file) - 3) . "<br>";
                    echo '<img src="uplaods/' . $file . '">';

                }

            }

        ?>

    </div>

    </div>

</body>

</html>