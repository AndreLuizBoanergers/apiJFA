<?php

require "./classes/prefacio.php";


try{
	$JfaARC = new JfaARC("./assets/src/acf.json");
	$prefacio = $JfaARC->getPrefacio();
	//echo "<pre>";
	var_dump($prefacio);
}catch(Exception $e){
	echo "Erro: " . $e->getMessage();
}