<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <!Add bootstrap link here-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require_once './models/addressCRUD.php';
        require_once './models/validation.php';
        require_once './models/util.php';
        require_once './models/dbconnect.php';
        
        
        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $addressline1 = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $birthday = filter_input(INPUT_POST, 'birthday');
        
        $errors = [];
        $states = getStates();
       
        
        if ( isPostRequest () ) {
            
            if ( empty($fullname) )
            {
                $errors[] = 'Full name is required.';                
            }
            if ( filter_var($email, FILTER_VALIDATE_EMAIL) == false ) {
            
                $errors[] = 'Invalid Email.';                
            } 
            if ( empty($addressline1) )
            {
                $errors[] = 'Address is required.';                
            } 
            if ( empty($city) )
            {
                $errors[] = 'City is required.';                
            } 
            if ( empty($state) )
            {
                $errors[] = 'State is required.';                
            }
            if ( empty($zip) )
            {
                $errors[] = 'Zip is required.';                
            }
            if ( isDateValid($birthday) === false )
            {
                $errors[] = 'Birthday is required.';                
            }
            if ( count($errors) === 0) {
                if (createAddress($fullname, $addressline1, $email, $city, $state, $zip, $birthday)) {
                    $message = 'Address Added';
                    $addressline1 = '';
                    $email = '';
                    $city = '';
                    $state = '';
                    $zip = '';
                    $birthday = '';
                    
                } else {
                    
                    $errors [] = 'Could not Add to the Database';
                }
                
            }
           }
        
        
        include './templates/errors.html.php';
        include './templates/messages.html.php';
        include './templates/add-address.html.php';
        ?>
    </body>
</html>
