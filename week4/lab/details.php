<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $fileLoc = filter_input(INPUT_GET, "file");
         $file = new SplFileObject($fileLoc, "r");
         $contents = $file->fread($file->getSize());   
        ?>
    </body>
</html>
