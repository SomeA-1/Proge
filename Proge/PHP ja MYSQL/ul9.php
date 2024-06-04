<?php
class auto{
    var $tootja;
    var $mudel;
    var $värv;
    var $kiirus = 0;
    function kiirendus(){
        if ($this->kiirus < 100){
            echo "Minu $this->tootja $this->mudel kiirus on: ".$this->kiirus;
            $this->kiirus += 10;
        }
        else{
            echo "Kiirus on liiga suur!";
        }
    }
}

$auto1 = new auto;
$auto1->tootja = "Audi";
$auto1->mudel = "A-1";
$auto1->värv = "hall";


$auto1->kiirendus();
