<?php
class komputer{
  public $prosesor,
          $memory;

    public function getcetak(){
        return "$this->prosesor, $this->memory";
    }
      
    public function __construct($prosesor,$memory="12 Gb"){
        $this->prosesor = $prosesor;
        $this->memory = $memory;

    }
  }

  class cetakinfokomputer{
      public function cetakinfo(komputer  $komputer){
            $str="{$komputer->getcetak()}";
            return $str;
      }
  }

  class Kgaming extends cetakinfokomputer {
      public $game = false;

      public function jalankangame(){
          $this->game = true;
          return "Game dijalankan";
      }
  }
  
  $komputerSaya = new komputer("Core i7","8 Gb");
  $infokomputer = new cetakinfokomputer();
  echo $infokomputer->cetakinfo($komputerSaya); 
  echo "<br>"; 
  $komputer1 = new Kgaming();
  echo $komputer1->jalankangame();

?>