
<?php
error_reporting(-1);
ini_set('display_errors', true);

include ('client.php');
$user = $_POST['user'];
$pass = $_POST['password'];

$response = connection($user,$pass);
if($response == false)
  {
    echo "Unthorized";
  }
  else
  {
  echo "Authorized";
  }
?>
