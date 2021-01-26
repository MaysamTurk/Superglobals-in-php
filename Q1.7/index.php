
<!-- make a website counter on refresh -->
<?PHP
  session_start();
 
  if(isset($_SESSION['x'])){
     $_SESSION['x'] = $_SESSION['x']+ 1;
  }else{
     $_SESSION['x'] = 1;
  }
  echo "Total page views = ". $_SESSION['x'];
?>
