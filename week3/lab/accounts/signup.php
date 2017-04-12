
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head> 
    <body>
        <h1>Sign up</h1>
        <?php
        include './autoload.php';
        
        $util = new Util();
        
        $accounts = new Accounts();
        
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        
        if ( $util->isPostRequest()) {
            
            if ( $accounts->signup($email, $password)) {
                
                $util->redirect("login.php", array("email"=>$email));
                
            } else {
                
                
            }
        }
        include './views/signup.html.php';
        ?>
    </body>
</html>
