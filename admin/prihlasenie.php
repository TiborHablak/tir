<?php 
var_dump($_POST);

if($_SERVER['REQUEST_METHOD'] === 'POST'){

     $uzivatelia = file('uzivatelia.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
     $prihlasenie = [];
        foreach ($uzivatelia as $uzivatel) {
            list($k,$h) = explode('::', $uzivatel);
            $prihlasenie[$k] = $h;
                   }    

        if($_POST['heslo'] === $prihlasenie[$_POST['meno']])   
        {
        	
        }        
}

 ?>
