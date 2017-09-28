<?php require('calculateBillSplit.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>BillSplit v0</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link href='/css/styles.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/master.css">

</head>

<body>
  <div class="container">


    <form class="form-horizontal">
      <fieldset>

        <!-- Form Name -->
        <legend class="text-center "><b>Bill Splitter</b></legend>

        <!-- tabAmount input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Total_Tab">Total Tab</label>
          <div class="col-md-10">
            <input id="Total_Tab" name="Total_Tab" type="number" class="form-control input-md">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Split_How_Many_Way?">Split How Many Way?</label>
          <div class="col-md-10">
            <input id="Split_How_Many_Way?" name="Split_How_Many_Way?" type="number" class="form-control input-md">

          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4" for="radios-0">Service Tip</label>
          <div class="col-md-4">
            <div class="radio">
              <label for="radios-0">
           <input type="radio" name="radios" id="radios-0" value=1 checked="checked">
           By %
         </label>
            </div>
            <div class="radio">
              <label for="radios-1">
           <input type="radio" name="radios" id="radios-1" value=2>
           By $
         </label>
            </div>
          </div>
          <div class="col-md-10">
            <input id="radioValue" name="radioValue" type="number" class="form-control input-md">
          </div>
        </div>

        <!-- Select Discount -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Discount">Discount</label>
          <div class="col-md-10">
            <select id="Discount" name="Discount" class="form-control">
           <option value=0>Does Not Apply</option>
           <option value =0.10>EmployeeDiscount - 10%</option>
           <option value =0.05>StudentDiscount - 5%</option>
           <option value=0.07>SeniorCitizenDiscount - 7%</option>
         </select>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="form-group">
          <div class="col-md-4">
            <button id="submit" name="submit" class="btn btn-primary">Calculate</button>
          </div>
        </div>

      </fieldset>
    </form>
    <?php if (!empty($errors)) : ?>
      <div class="alert alert-danger">
        <ul>
          <?php foreach ($errors as $error) : ?>
            <li><?=$form->sanitize($error)?> </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <!--?php endif ?-->

  <?php elseif (!empty($tabForEachWay)) :?>
    <div class="alert alert-success text-center col-md-10">
      <h4>  $<?=number_format($form->sanitize($tabForEachWay), 2)?> Each Way</h4>
    </div>
      <?php endif; ?>
    </div>

</body>

</html>
