<?php 
	header("Content-disposition: attachment; filename=JLTMcv.pdf");
	header("Content-type: MIME");
	readfile("ddCV/JLTMcv.pdf");
?>