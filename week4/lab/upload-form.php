<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css">
    </head>
    <body>
        
        <!-- The data encoding type, enctype (Encode Type, MUST be specified as below -->
        <form enctype="multipart/form-data" action="upload.php" method="POST">
            
            <!-- MAX_FILE_SIZE must precede the file input field -->
            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
            <!-- Name of input element determines name in $_FILES array -->
            Send this file: <input name="upfile" value="Select File" type="file" class="btn btn-secondary"/>
            <input type="submit" value="Send File" class="btn btn-secondary" />
        </form>

        <!-- display imaged
        <img src="uploads/img_30420d1a9afb2bcb60335812569af4435a59ce17.jpg" /> -->
    </body>
   
</html>