<?php 
include ("Conexao.php");
class Pessoa extends Conexao implements JsonSerializable{
	
	private $altura;
	private $idade;
	private $peso;
	
	public function __construct($altura, $idade, $peso){
		$this->altura = $altura;
		$this->idade = $idade;
		$this->peso = $peso;	
	}

	public function __toString(){
		$string = 
			"Peso ".$this->peso."<br>".
			"Altura ".$this->altura."<br>".
			"Idade ".$this->idade."<br>";
		return $string;	

	}

	public function Jsonserialize(){
		return [
				"Idade" => $this->idade,
				"Altura" => $this->altura,
				"Peso" => $this->peso
			];
	}

	public function findAll(){
		$sql = "SELECT * FROM conteudo";
		$consulta =Conexao::prepare ($sql);
		$consulta -> execute();
		return $consulta -> fetchAll();
	}
	
	
	public function getaltura(){
		
		return $this -> altura;
	}
	public function setaltura($altura){
		
		$this -> altura = $altura;
	}
	
	public function setidade(){
		
	 	return $this ->Idade . "<br>";
	}
	public function getIdade(){
		
		return $this -> altura;
	}
	public function setPeso($altura){
		
		$this -> Peso = $altura;
	}

	public function getPeso(){
		
		return $this -> Peso;
	}
	
	
	
	
}
?>
