<?php
$link = mysqli_connect("mysql", "testuser", "testpwd");

if (!$link) {
  echo "Error: unable to connect to MySQL" . PHP_EOL;
  echo "Debuging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

echo "Success: a proper connection to MySQL was made!" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);

phpinfo(); 
?>
