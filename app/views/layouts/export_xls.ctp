<?php
header ("Expires: Mon, 28 Oct 2008 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/vnd.ms-excel; charset=latin");
header ("Content-Disposition: attachment; filename=\"reporte.xls" );
header ("Content-Description: Generated Report" );
?>
<?php echo utf8_encode($content_for_layout) ?> 
