<?php
class User {

    private $name = 'Wanda';
    private $address = 'Sukabumi';
    
    public function showBio()
    {
        echo "Nama saya $this->name dan saya berasal dari $this->address";
    }

    // destructor
    public function __destruct()
    {
        echo ' Ini dari destruktor.';
    }

    // constructor
    public function __construct()
    {
    	echo 'Ini dari konstruktor. ';
    }

}

// membuat object $eliff
$Wanda = new User();

// panggil method dari object $eliff
echo $Wanda->showBio();
?>