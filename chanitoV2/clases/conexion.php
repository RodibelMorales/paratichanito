<?php 
$conex = new conexion($config['server'],$config['user'],$config['pass'],$config['DB']);
	class conexion{
		public $link;

		function __construct($server, $user, $pass, $DB){
			$this->link= mysql_connect($server, $user, $pass);
			mysql_select_db($DB) or die(mysql_error());
		}
		function __destruct(){
			mysql_close($this->link);
		}
	}
?>