<?php

if (isset($_GET['submit']) and ! empty($_GET['submit'])) {
$tabAmount =$_GET['tabAmount'];
$splitCount =$_GET['numberOfSplits'];
$tip =$_GET['tip'];

//calculate discount
$discountType=$_GET['discount'];
if ($discountType == 'EmployeeDiscount - 10%'){
  $tabAmount = $tabAmount - ($tabAmount * 0.10);
} elseif ($discountType== 'StudentDiscount - 5%'){
  $tabAmount = $tabAmount - ($tabAmount * 0.05);
}elseif ($discountType=='SeniorCitizenDiscount - 7%'){
  $tabAmount = $tabAmount - ($tabAmount * 0.07);
}
//check the tip method and convert to dollor amount if its by %
//if (isset($_GET['submit']) and ! empty($_GET['submit'])) {
    if (isset($_GET['tipBy'])) {
        $tip = $_GET['tipBy'];
        if ($tip =='By %'){
        $tipAmount=  ($tabAmount * $tip)/100;

      }else {
        $tipAmount = $tip;
      };
    }else {
      $tipAmount = 0;
    }

/*} else {

}
*/
$tabTotal = tabAmount+tipAmount;
$tabForEachWay = $tabTotal/$splitCount;
}
