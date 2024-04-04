<?php
class Premium extends Ospite{
    protected $Discount;

    function __construct($Name,$Surname,$Address,$Region,$Country,$Tipo)
    {
        parent::__construct($Name,$Surname,$Address,$Region,$Country,$Tipo);
        {
            $this->Discount = 20 ;

        }
        
    }
}
?>