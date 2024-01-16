<?php

class Company{
    public $name;
    public $location;
    public $tot_employees;
    static public $avg_wage = 1500;
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
        echo $description.PHP_EOL;
    }
    function annual_expense(){
        $annual_expense = $this->tot_employees*self::$avg_wage;
        echo "La spesa annuale per l'azienda $this->name è di $annual_expense euro".PHP_EOL;
    }
    static function companies_total(){
        echo "Il totale di tutte le aziende è".PHP_EOL;
    }
}

$azienda1 = new Company("Ferrari","Italia",300);
$azienda2 = new Company("Renault", "Francia", 500);
$azienda3 = new Company("Ford", "Stati Uniti", 0);
$azienda4 = new Company("Audi", "Germania", 700);
$azienda5 = new Company("Honda", "Giappone", 600);

/*
$azienda1->company_description();
$azienda2->company_description();
$azienda3->company_description();
$azienda4->company_description();
$azienda5->company_description();
*/

$azienda1->annual_expense();
$azienda2->annual_expense();
$azienda3->annual_expense();
$azienda4->annual_expense();
$azienda5->annual_expense();