<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css">
    </head>
    <body>
        
        <?php
        //VIEW ALL PAGE///      //VIEW ALL PAGE///
        
        $folder = './uploads';

        $directory = new DirectoryIterator($folder);
        ?>

        <H1>Files</H1>
        <div class="table-responsive">
        <table class="table">
            <thead>
            <?php foreach ($directory as $fileInfo) : ?>        
                <?php if ($fileInfo->isFile()) : ?>
                    <tr>
                        <td><?php echo $fileInfo->getFilename(); ?></td>
                        <td><a href ="details.php?file=<?php echo $fileInfo->getPathname(); ?>">View</a></td>
                        <td><a href ="delete.php">Delete</a></td>
                        <td><?php echo $fileInfo->getType(); ?></td>
                        <td><?php echo $fileInfo->getMTime(); ?></td>
                        <td><?php echo $fileInfo->getPathname(); ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?> 
                    </thead>
        </table>
            </div>
        <div class="nav">Click <a href="./upload-form.php">here</a> to add files.</div>
        
    </body>
