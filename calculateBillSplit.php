<?php
require('Bill.php');
require('Form.php');

use Billsplitter\Bill;
use DWA\Form;

$form = new Form($_GET);

$bill = new Bill();

#Retrieve date from the form
$tabAmount  = $form->get('Total_Tab','');
$splitCount = $form->get('Split_How_Many_Way?','');
$discount   = $form->get('Discount','');
$tip        = $form->get('radioValue','');

#validtion
if($form->isSubmitted()){
  $errors = $form->validate([
    'Total_Tab'=>'required',
    'Total_Tab'=>'min:0',
    'Split_How_Many_Way?' => 'required',
    'Split_How_Many_Way?'=>'min:0'
  ]);

  #Do calculation only if there are no errors
if(empty($errors)){

#apply discount to tab amount
$tabAmount = $tabAmount - ($tabAmount * $discount);

#get tip value from method
    if (isset($tip)) {
      $tipAmount= $bill->getTip($_GET['radios'], $tip,$tabAmount);
    }

//calculate final result
$tabTotal = $tabAmount+$tipAmount;
$tabForEachWay = $tabTotal/$splitCount;
}
}
