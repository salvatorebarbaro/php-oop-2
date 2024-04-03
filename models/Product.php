<?php

/**
 * definizione della classe prodotto
 */
class Product{
    
    /**
     * Name
     *
     * @var string
     */
    public $Name;    
    /**
     * Price
     *
     * @var int
     */
    public $Price;

    //funzione che vogliamo che venga eseguita all'avvio
    function __construct($_Name,$_Price)
    {
        //associazione dal valore inserito con la proprietà dell Product
        $this->Name = $_Name;
        $this->Price = $_Price;
        
    }


}

?>