<?php

require_once "User.php";
class Admin extends User{
    public static $count = 0;
    
    public function __construct($name, $email)
    {
        parent::__construct($name,$email);

        self::$count++;
    }

    public static function compter(){
        return self::$count . "\n";
    }

}

$admin1 = new Admin("younes","younes@gmail.com");

echo $admin1::compter();
$admin2 = new Admin("safaa","safaa@gmail.com");
echo $admin2::compter()
?>
