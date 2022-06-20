<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();
ob_clean();
ob_end_clean();

header("Location: index.php");
exit;

?>