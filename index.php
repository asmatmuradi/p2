<?php require('calculateBillSplit.php') ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>BillSplit v0</title>
      <meta charset='utf-8'>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <link href='/css/styles.css' rel='stylesheet'>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   </head>
   <body>
      <div class='bill' >
         <h1>
         Bill Split</h>
         <form class="form-horizontal" action="/examples/actions/confirmation.php" method="post">
            <div class ='btn btn-secondary btn-small'>
               <label for="tabAmount">Total Tab </label>
               <input type="text" id="tabAmount" name="tabAmountTotal">
            </div>
            <br />
            <div class ='btn btn-secondary btn-small'>
               <label for="numberOfSplits" >Split How Many Ways</label>
               <input type="text" id="numberOfSplits" name="numberOfDivids">
            </div>
            <br />
            <div class ='btn btn-secondary btn-small'>
               <label for="tip">Tip For Service </label>
         <form action="">
         <input type="radio" name="tipBy" value="By %">By %
         <input type="radio" name="tipBy" name="By Amount">By Amount
         <input type="text" id="tip" name="tip">
         </form>
         </div>
         <input type='submit' class ='btn btn-primary btn-small' value='Calculate'>
         <div class ='btn btn-secondary btn-small'>
            <h4>Grand Total</h4>
         </div>
         </form>
      </div>
   </body>
</html>
