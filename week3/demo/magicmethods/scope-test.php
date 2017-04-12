<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include './Scope.php';
        
        try {
            $scope = new week3\gforti\Scope();
        
            $scope->test = 'hello';
            
            $scope->hello = ' World';
            echo $scope->test. $scope->hello;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
        
        ?>
    </body>
</html>
