
<?php 

class Model
{
	//atributos
	private $host;
	private $user;
	private $pass;
	private $bd;

	
	public function __construct()
	{
		# code...
		$this->host = "localhost";
		$this->user = "root";
		$this->pass = "";
		$this->bd = "joyeria";		
	}

	function getConexion(){
		return $con = new mysqli($this->host,$this->user, $this->pass,$this->bd);
	}


	public function ingresar($sql)
	{
		# code...		
		mysqli_query(self::getConexion(),$sql);
	}

	public function eliminar($sql){

		mysqli_query(self::getConexion(),$sql);

	}
	public function modificar($sql){

		mysqli_query(self::getConexion(),$sql);

	}

	
}
?>