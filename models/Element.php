<?php

use function PHPSTORM_META\type;

/**
 * figlio della classe Race
 */
class Element extends Race{
    
    /**
     * parametro usato per il tipo di elemento , cibo , cuccia, ecc
     *
     * @var string
     */
    public $Element;

    public $Description;

    public $Img;

    public $Icona;

    //Funzione per inizializzare i valori che dobbiamo inserire
    function __construct($_Name,$_Price,$_Type,$_Element,$_Description,$_Img)
    {
        //valori della classe padre ovvero Race
        parent::__construct($_Name,$_Price,$_Type);
        {
            //dichiarazione
            $this->Element = $_Element;

            $this->Description = $_Description;

            $this->Img = $_Img;

            $this->icons($_Type);
        }
        
    }

    public function icons($Type){
        if( strtolower($Type)  === "cane"){
            $this->Icona  = '<i class="fa-solid fa-dog"></i>';
        }
        elseif(strtolower($Type)  === "gatto"){
            $this->Icona  = '<i class="fa-solid fa-cat"></i>';
        }
    }

}

?>