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
                        <td>
                            <ol>
                                <li><?php echo $fileInfo->getFilename(); ?></li>
                            </ol>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?> 
                    </thead>
        </table>
            </div>
        
    </body>
