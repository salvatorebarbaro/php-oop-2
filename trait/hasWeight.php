<?php

trait hasWeight{
    
    /**
     * weight
     *
     * @var int
     */
    protected $weight;

   

    //funzione pubblica
    public function setWeight($_weight)
    {
        //impostiamo il peso
        $this-> weight = $_weight ;

    }
     
    //funzione per ottenere il peso dell'oggetto
    public function getWeight()
    {
        //ci ritorna il valore setatto come peso
        return $this->weight;
    }

}

?>