<?php
	
	//este archivo trata con todo lo de la base de datos
	require("../modelo/usuariomodelo.php");
	//creamos el objeto	
	$objUsuario= new Usuario();

	//ejecutamos una funcion de la base de datos

	$TodosUsuario=$objUsuario->obtenerTodos();

	//vista 
//var_dump($TodosUsuario);
//exit;
	include("../vista/listadousuario.php");



