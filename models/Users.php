<?php
class Ospite{
    public $Name;
    public $Surname;
    public $Address;
    public $Region;
    public $Country;
    public $Tipo;

    function __construct($Name,$Surname,$Address,$Region,$Country,$Tipo)
    {
        $this->Name = $Name;
        $this->Surname = $Surname;
        $this->Address = $Address;
        $this->Region = $Region;
        $this->Country = $Country;
        $this->Tipo = $Tipo;
    
    }
}
?>