<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class db{	
	protected function connect(){
		try {
			$connect = new PDO('mysql:host=localhost;port=8889;dbname=crud_mvc_pdo;charset=utf8;','root','root');
			$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $connect;	
		} catch (Exception $e) {
			die('Error db(connect) '.$e->getMessage());
		}
	}
}
?>