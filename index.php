<?php require('calculateBillSplit.php'); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>BillSplit v0</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <link href='/css/styles.css' rel='stylesheet'>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

   </head>
   <body>
      <div class="text-center">

         <h1 class="text-center">Bill Split</h1>
         </div>
         <form  class="form-horizontal" method="post">
            <div class ='text-center'>
              <label for="tabAmount">Total Tab </label>
              <input type="text" id="tabAmount" name="tabAmountTotal">
            </div>
            <br />
            <div class ='text-center'>
               <label for="numberOfSplits" >Split How Many Ways</label>
               <input type="text" id="numberOfSplits" name="numberOfDivids" class="text-right">
            </div>
            <br />
            <div class ='text-center'>
               <label for="tip">Tip For Service </label>

         <input type="radio" name="tipBy" value="By %">By %
         <input type="radio" name="tipBy" value="By Amount" checked>By Amount
         <input type="text" id="tip" name="tip">

         </div >
         <div class='text-center'>
           <label for="discount">Discount</label>
           <select class="text-center" id="discount" style="width: 300px;">
          <option>Does Not Apply</option>
           <option>EmployeeDiscount - 10%</option>
           <option>StudentDiscount - 5%</option>
           <option>SeniorCitizenDiscount - 7%</option>

         </select>

         </div>
         <div class ='text-center'>
         <input type='submit' class ='btn btn-primary btn-small' value='Calculate'>

        </div>
         <br />
        <hr  />
         <div class ='text-center'>
            <h4 >Total Each Way </h4>
         </div>
     </form>

   </body>
</html>
