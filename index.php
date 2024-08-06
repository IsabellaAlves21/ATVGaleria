<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imagens</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .gallery{
            display: flex;
            flex-wrap: wrap;
        }
        .gallery img{
            width: 19%;
            margin: 0.5%;
            transition: transform 0.2s;
        }
        .gallery img:hover{
            transform: scale(1.5);
        }
    </style>
    <body>
        <h1>Galeria de Imagens</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">  
        </form>
        <div class="gallery">
            <?php
            $files = glob("uploads/*.*");
            foreach($files as $file) {
                echo '<img scr="' . $file . '" alt=Imagem"';
            }
            ?>
        </div>
        
    </body>
</head>

</html>