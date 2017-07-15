<?php
require("config.php");

	class Conectar{
		public $db="";
		function __construct(){
		try {
			$this->db = new PDO(
			"pgsql:dbname=inamujer;host=localhost user=postgres password=123456");

			$this->db->setAttribute(
				PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION
			);

			} catch (Exception $e) {
				echo $e-> getMessage ();

			}
		}
	}





?>
