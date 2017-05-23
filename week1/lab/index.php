<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css">
    </head> <body>
        <?php
         include './models/dbconnect.php';
         include './models/addressCRUD.php';
         
         $addresses = readAllAddress();
          
         include './templates/view-address.html.php';
         
        ?>
        
    </body>
</html>
