<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
    <title>Online exam</title>
</head>
<body>
<?php include 'data.php'?>

<div class='card' style='width: 30rem; padding: 3rem; margin:5rem;'>
<?php foreach($data as $val){


echo "<h5 class='card-header'>Question ". $val['id'] ."</h5>
  <div class='card-body'>
    <h5 class='card-title'>". $val['Question'] ."</h5>
    <p class='card-text'>
    <div class='form-check'>
  <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'>
  <label class='form-check-label' for='flexRadioDefault1'>". $val['Answer1'] ."</label>
   </div>";
echo "<div class='form-check'>
  <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault2'>
  <label class='form-check-label' for='flexRadioDefault2'>". $val['Answer2'] ."</label>
</div>";
echo "<div class='form-check'>
  <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'>
  <label class='form-check-label' for='flexRadioDefault1'>". $val['Answer3'] ."</label>
</div>";
echo "<div class='form-check'>
  <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'>
  <label class='form-check-label' for='flexRadioDefault1'>". $val['Answer4'] ."</label>
</div>";

echo "</p>";
    echo "<a href='#' class='btn btn-primary'>Previous</a>";
   echo "<a href='#' class='btn btn-info'>Next</a>";
  echo "</div>";
} ?>
</div>

</body>
</html>