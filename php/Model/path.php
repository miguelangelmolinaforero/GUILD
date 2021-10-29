<?php 
/**
* 
*/
class Path
{
	private $id;
	private $nombre;
	private $descripcion;

	
	function __construct($id, $nombre, $descripcion)
	{
		$this->setId($id);
		$this->setNombre($nombre);
		$this->setDescripcion($descripcion);
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public static function save($equipo){
		$db=Db::getConnect();
		//var_dump($equipo);
		//die();
		

		$insert=$db->prepare('INSERT INTO equipos VALUES (null, :nombre, :descripcion)');
		$insert->bindValue('nombre',$equipo->getNombre());
		$insert->bindValue('descripcion',$equipo->getDescripcion());
		$insert->execute();
	}

	public static function all(){
		$db=Db::getConnect();
		$listaEquipos=[];

		$select=$db->query('SELECT * FROM equipos ORDER BY id');

		foreach($select->fetchAll() as $equipo){
			$listaEquipos[] = new Equipo($equipo['id'], $equipo['nombre_equipo'], $equipo['descripcion']);
		}
		return $listaEquipos;
	}

	public static function searchById($id){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM equipos WHERE id = :id');
		$select->bindValue('id',$id);
		$select->execute();

		$equipoDb=$select->fetch();


		$equipo = new Equipo ($equipoDb['id'], $equipoDb['nombre_equipo'], $equipoDb['descripcion']);
		//var_dump($equipo);
		//die();
		return $equipo;

	}

	public static function update($equipo){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE equipos SET nombre_equipo = :nombre, descripcion=:descripcion WHERE id = :id');
		$update->bindValue('nombre', $equipo->getNombre());
		$update->bindValue('descripcion',$equipo->getDescripcion());
		$update->bindValue('id',$equipo->getId());
		$update->execute();
	}

	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE FROM equipos WHERE id = :id');
		$delete->bindValue('id',$id);
		$delete->execute();		
	}
}

?>