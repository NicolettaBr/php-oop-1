<?php

    class User {
        public $name;
        public $lastname;
        public $nickname;
        public $email;
        public $age;
        public $password;

        public function __construct($nickname, $password){
            $this->nickname = $nickname;
            $this->password = $password;
        }

        public static function generatePassword(){
            return 'default_password';
        }
    }

    $password = User::generatePassword();
    //var_dump($password);

    //Istanza Mickey Mouse
    $MickeyMouse = new User('Topolino', $password);
    
    $MickeyMouse->name = "Mickey";
    $MickeyMouse->lastname = "Mouse";
    $MickeyMouse->nickname = "Topolino";
    $MickeyMouse->email = "mickeymouse@gmail.com";
    $MickeyMouse->age = "100";


    //Istanza Mario Rossi
    $MarioRossi = new User('Mario', $password);
    
    $MarioRossi->name = "Mario";
    $MarioRossi->lastname = "Rossi";
    $MarioRossi->nickname = "MrRed";
    $MarioRossi->email = "mariorossi@gmail.com";
    $MarioRossi->age = "37";
    

    $utenti= [];

    $utenti[] = $MickeyMouse;
    $utenti[] = $MarioRossi;
    //var_dump($utenti);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop</title>
</head>
<body>
    
    <h1>Utenti</h1>

    <ul>
        <?php foreach($utenti as $user){ ?>

            <li>
                Nome: <?php echo $user->name; ?> <br>
                Cognome: <?php echo $user->lastname; ?> <br>
                Nickname: <?php echo $user->nickname; ?> <br>
                Email: <?php echo $user->email; ?> <br>
                Età: <?php echo $user->age; ?>
            </li>

        <?php } ?>

    </ul>
</body>
</html>

