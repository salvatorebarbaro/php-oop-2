<?php
//Race è figlio di product
class Race extends Product{
    //definizione della razza    
    /**
     * Type
     *
     * @var string
     */
    public $Type;
    
    /**
     * Breed
     *
     * @var string
     * 
     */
    public $Breed;

    //funzione per inizializzare cosa vogliamo all'avvio
    function __construct($_Name,$_Price,$_Type)
    {
        //ci riprendiamo i valori inizializzati dal padre ovvero product
        parent::__construct($_Name,$_Price);
        {
            //dichiariamo la variabile mancante che aggiungiamo con la classe Race
            $this->Type = $_Type;
        }
        
    }

}

?>