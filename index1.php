<?php
    $jsonJFA = file_get_contents("./assets/src/acf.json");
    $data = json_decode($jsonJFA, true);

    if($data === null){
  	    echo "erro ao decodificar o JSON";
  	    exit;
    }
 
    $livros = array_filter($data, function($cap){
  	    return isset($cap['abbrev']) && !empty($cap['abbrev']);
    });

    foreach ($livros as $livro) {
    	echo "Livro: ". htmlspecialchars($livro['abbrev']) . "<br>";
    	foreach ($livro['chapters'] as $index => $chapter) {
    		$versoCount = count($chapter);
    		echo "Capitulo " . ($index + 1) . " - Quatidade de Versiculos: " . $versoCount . "<br>";
    	}
    }
