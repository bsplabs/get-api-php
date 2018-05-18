<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello</title>
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


    <style>
      img{
        width: 95%;
      }
      .row {
        padding-left: 4px;
      }
      .cols-g {
        width: 14.2%;
        text-align: center;
        border: 1px solid #F8F8FF;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand" href="#">TEST Volume.2</a>
    </nav>

<?php

$content =     file_get_contents("http://uinames.com/api/?ext&amount=25");
$result  = json_decode($content);

date_default_timezone_set('Asia/Bangkok');

$sunName = array();
$sunPhoto = array();
$sunGroup = array();

$monName = array();
$monPhoto = array();
$monGroup = array();

$tueName = array();
$tuePhoto = array();
$tueGroup = array();

$wedName = array();
$wedPhoto = array();
$wedGroup = array();

$thuName = array();
$thuPhoto = array();
$thuGroup = array();

$friName = array();
$friPhoto = array();
$friGroup = array();

$satName = array();
$satPhoto = array();
$satGroup = array();
foreach($result as $obj)
{
  $tstamp = strtotime($obj->birthday->mdy);

  $days = array("SUN","MON","TUE","WED","THU","FRI","SAT");
  $d = date('w',$tstamp);
  $day = $days[$d];

  // echo "ลำดับที่ $i => " . $tstamp . " => $day <br/>";
  // $i++;

  if($day == "SUN")
  {
    array_push($sunName ,$obj->name);
    array_push($sunPhoto ,$obj->photo);
  }
  else if($day == "MON")
  {
    array_push($monName ,$obj->name);
    array_push($monPhoto ,$obj->photo);
  }
  else if($day == "TUE")
  {
    array_push($tueName ,$obj->name);
    array_push($tuePhoto ,$obj->photo);
  }
  else if($day == "WED")
  {
    array_push($wedName ,$obj->name);
    array_push($wedPhoto ,$obj->photo);
  }
  else if($day == "THU")
  {
    array_push($thuName ,$obj->name);
    array_push($thuPhoto ,$obj->photo);
  }
  else if($day == "FRI")
  {
    array_push($friName ,$obj->name);
    array_push($friPhoto ,$obj->photo);
  }
  else if($day == "SAT")
  {
    array_push($satName ,$obj->name);
    array_push($satPhoto ,$obj->photo);
  }
}
$sunGroup = array_combine($sunName,$sunPhoto);
$monGroup = array_combine($monName,$monPhoto);
$tueGroup = array_combine($tueName,$tuePhoto);
$wedGroup = array_combine($wedName,$wedPhoto);
$thuGroup = array_combine($thuName,$thuPhoto);
$friGroup = array_combine($friName,$friPhoto);
$satGroup = array_combine($satName,$satPhoto);
?>


<div class="container-fluid" style="margin-top: 3%;">
  <div class="row">
    <div class="cols-g">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">SUN</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($sunGroup as $k => $v) { ?>
          <tr>
            <th><img src="<?php echo $v; ?>"><?php echo $k; ?></th>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="cols-g">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">MON</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($monGroup as $k => $v) { ?>
          <tr>
            <th scope="row"><img src="<?php echo $v; ?>"><?php echo $k; ?></th>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="cols-g">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">TUE</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tueGroup as $k => $v) { ?>
          <tr>
            <th scope="row"><img src="<?php echo $v; ?>"><?php echo $k; ?></th>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="cols-g">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">WED</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($wedGroup as $k => $v) { ?>
          <tr>
            <th scope="row"><img src="<?php echo $v; ?>"><?php echo $k; ?></th>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="cols-g">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">THU</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($thuGroup as $k => $v) { ?>
          <tr>
            <th scope="row"><img src="<?php echo $v; ?>"><?php echo $k; ?></th>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="cols-g">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">FRI</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($friGroup as $k => $v) { ?>
          <tr>
            <th scope="row"><img src="<?php echo $v; ?>"><?php echo $k; ?></th>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="cols-g">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">SAT</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($satGroup as $k => $v) { ?>
          <tr>
            <th scope="row"><img src="<?php echo $v; ?>"><?php echo $k; ?></th>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
