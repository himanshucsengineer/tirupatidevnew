
<?php
$mysqli = new mysqli("13.233.17.47","navneet","@Navneet1","insurance");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
echo 'connected';
}
?>