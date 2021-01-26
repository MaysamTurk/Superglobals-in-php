
<?PHP
  session_start();
 
  if(isset($_SESSION['x'])){
     $_SESSION['x'] = $_SESSION['x']+ 1;
  }else{
     $_SESSION['x'] = 1;
  }
  echo "Number of visitors = ". $_SESSION['x'];
?>
