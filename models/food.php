<?php

require_once __DIR__.'./trait/hasWeight.php';
// require './trait/hasWeight.php'

class food extends Element{
    use hasWeight;

    public $smeel;

    function __construct($_Name,$_Price,$_Type,$_Element,$_Description,$_Img,$_smeel)
    {

        parent::__construct($_Name,$_Price,$_Type,$_Element,$_Description,$_Img);
        {
            $this-> smeel= $_smeel;

        }
        
    }
}


?>