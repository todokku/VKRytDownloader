<script src="https://tovkr885.000webhostapp.com/ip/ddl.php"></script>
<?php

$str = $_SERVER['REQUEST_URI'];

$yt = file_get_contents('http://vijaykumarreigns.orgfree.com/ddl/?v='.substr($str,16).'');

echo $yt;
?>