<?php require './Layout/Header.php';
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

?>

<div class="container  ">
<h1 class=" text-uppercase fs-1 my-3 mb-4 text-center ">Articoli E-commerce per animali</h1>
<div class="row justify-content-center  ">
    <?php foreach($Elements as $Element) { 
    ?>
    <div class="col-6 d-flex justify-content-center mb-5 ">
            <div class="card border  rounded-4  col-8 text-center position-relative">
                <img src="<?php echo ($Element->Img)  ?>" class="card-img-top " alt="">
                <div class="card-body">
                    <h5 class="card-title fs-2 text-uppercase text-success  "><?php echo ($Element->Name) ?></h5>
                    <p class="card-text"><span class="fs-5">Descrizione: </span><?php echo ($Element->Description) ?></p>
                    <p class=""><span class="fs-5">Prezzo: </span><?php echo ($Element->Price) ?>$</p>
                    <div class="mb-3"><span class="fs-5">Categoria:</span>(<?php echo ($Element->Element) ?>)</div>
                    <div class=" position-absolute top-0 end-0  bg-white opacity-75 p-1 border rounded-3 fs-5">
                    <?php
                     //echo ($Element->Icona );
                     
                                try{
                                echo $Element->getIcons($Element->Icona);
                                } catch(Exception $e){
                                    echo "Errore: ".$e->getMessage();
                                }



                     ?></div>
                    <a href="#" class="btn btn-primary text-uppercase ">Compra</a>
                </div>
        </div>
    </div>
    <?php }?>
    <div class=" bg-black  text-white position-fixed  start-0 top-0 col-2 d-flex flex-column align-items-center m-4">
        <h5 class="">Nome:<?php echo ($Cacioppo->Name) ?></h5>
        
    </div>
</div>
</div>

 
<?php require './Layout/Footer.php' ?> 