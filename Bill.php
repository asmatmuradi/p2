<?php

namespace Billsplitter;

class Bill{

  #Properties
  private $bill;

  #methods
  public function __construct(){

  }

  public function getTip($tipType = 2, $tipValue,$tabValue){

    if (!empty($tipValue)){
      if ($tipType ==1){
        return (($tabValue * $tipValue)/100);
      }else {
        return ($tipValue);
      }
    }else{
        return 0;
      }


  }

}
