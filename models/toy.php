<?php 

require_once __DIR__.'./trait/hasWeight.php';



class toy extends Element{
    
    use hasWeight;
    public $durability;

    function __construct($_Name,$_Price,$_Type,$_Element,$_Description,$_Img,$_durability)
    {
        parent::__construct($_Name,$_Price,$_Type,$_Element,$_Description,$_Img);
        {
            $this->durability= $_durability;

        }
        
    }

}


?>