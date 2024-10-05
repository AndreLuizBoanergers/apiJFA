<?php
//JOAO FERREIRA DE ALMEIDA ATUALIZADA E CORRIGIDA
class JfaARC
{
	public function __construct($jsonJFA){
		$jsonJFAContent = file_get_contents($jsonJFA);
		$this->data = json_decode($jsonJFAContent, true);

		if($this->data === null){
			throw new Exception("Erro ao decodificar o JSON");
		}
	}

	public function getPrefacio(){
		foreach ($this->data as $livro) {
			if(isset($livro['abbrev']) && isset($livro['chapters'])){
				$abbrev = $livro['abbrev'];
				$totalCapitulos = count($livro['chapters']);

				$resumo[] = [
                    'abreviadura' => $abbrev,
                    "total_capitulos" => $totalCapitulos
				];

			}
		}

		return json_encode($resumo, JSON_PRETTY_PRINT);
	}
}
