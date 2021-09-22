<?php 
include '../admin/assets/hlavickaAdmin.php';
include '../admin/assets/navAdmin.php';

 ?>


<?php 

     $uzivatelia = file('uzivatelia.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                    foreach ($uzivatelia as $uzivatel) {
                        list($meno,$heslo) = explode('::', $uzivatel);
                        $prihlasenie[$meno] = $heslo;
                    }    

             

           

 ?>

<?php 

$chyba ="";
$meno = "";
$sprava ="";

    



if($_SERVER['REQUEST_METHOD'] == 'POST'){


    if($_POST['meno'] === $meno)   
        {
          echo "spravne meno";
        }    
}



 ?>

<?php  
if(!empty($chyba)){

?>	

<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong> Ups! </strong> <?php echo $chyba; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php }    ?>

<?php  
if(empty($chyba)){

?>	

<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong> Výborne </strong> <?php echo "Uspešne sme  vas prihlasili" ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php } 


 ?>



<section class=" p-5">
	<div class="container-sm border">
		 <h4 class="text-sm-center font-weight-bold p-3 bg-light border"> Prihlasenie </h4>
		<form action="index.php"  method="post" class="p-4">
			
			<div class="form-group was-validated">
				<strong class=""> Meno </strong>
				
				<input type="text" placeholder="Meno autora" class="form-control" required autocomplete="" name="meno"  value=""> 
				<div class="invalid-feedback">
					Zadajte prosím  meno
				</div>

			</div>
			<div class="form-group was-validated">
				<strong> Heslo </strong>
				<input type="text" placeholder="Meno autora" class="form-control" required autocomplete="" 	 name="heslo"  value=""> 
				<div class="invalid-feedback">
					Zadajte prosím správne  heslo
				</div>
			</div>
				
	  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label text-secondary" for="exampleCheck1"> Pamätať si prihlasenie</label>
  </div>

  	<div class="row justify-content-md-center">
  		 <button type="submit" class="btn btn-light border"> Prihlasiť sa </button>
  	</div>
  	<br><br>
  	 	<div class="row justify-content-md-center">
  		<span>  <a href="#">Zaregistruj sa </a></span>
  	</div>
  	 	<div class="row justify-content-md-center">
   			<span class="">Zabudol si <a href="#">heslo?</a></span>
  	</div>


				
		</div>	
	</form>
	</div>







<?php 
/*

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
}*/

 ?>


 <?php 
include '../admin/assets/paticka.php';
 ?>