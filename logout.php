<?php
session_start();
session_destroy();
 
echo '<script language="javascript">alert("session ended"); document.location="index.php";</script>';

?>