<?php

class Company{
    public $name;
    public $location;
    public $tot_employees;
    public function __construct($_name, $_location, $_tot_employees){
        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
    }
    function company_description(){
        $description = "L'azienda $this->name con sede in $this->location";
        if($this->tot_employees>0){
            $description = $description." ha ben $this->tot_employees dipendenti";
        }
        else{
            $description = $description." non ha dipendenti";
        }
        echo $description;
    }
}

$azienda1 = new Company("Ferrari","Italia",300);
$azienda2 = new Company("Renault", "Francia", 500);
$azienda3 = new Company("Forda", "Stati Uniti", 100);
$azienda4 = new Company("Audi", "Germania", 700);
$azienda5 = new Company("Honda", "Giappone", 600);

$azienda1->company_description();