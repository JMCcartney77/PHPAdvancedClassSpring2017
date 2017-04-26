<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css">
    </head>
    <body>
        <?php
        /* ****************UPDATE FILE**************** */        
        $file = '.'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'img_dd2e4b18f173f424be6d9180a63c68de4d8133f3.jpg';
        
        //http://php.net/manual/en/fileinfo.constants.php
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $type = $finfo->file($file);
        
        var_dump($type, '<br /><br />');
        
        //http://php.net/manual/en/function.filesize.php
        var_dump(filesize($file), '<br /><br />');
        
        /*
         * To delete a file use unlink
         */
        
        
        // http://php.net/manual/en/class.splfileinfo.php
        $finfo = new SplFileInfo($file);
        
        if ( $finfo->isFile() ) {
            var_dump($finfo->getRealPath(), '<br /><br />');
            var_dump($finfo->getFilename(), '<br /><br />');
            var_dump(date("l F j, Y, g:i a", $finfo->getMTime()), '<br /><br />');
            var_dump($finfo->getSize(), '<br /><br />');
            var_dump($finfo->getPathname(), '<br /><br />');
            
        }
        
        
        ?>
    </body>
</html>