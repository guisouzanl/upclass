<?php
class Amizades extends model{

public function addAmigo($id1, $id2){
			$sql = "INSERT INTO amizades SET usuario_de = '$id1', usuario_para = '$id2', status = '0'";
			$this->db->query($sql);
		}

public function aceitarAmigo($id1, $id2){

	$sql = "UPDATE amizades SET status = '1' WHERE usuario_de = '$id2' AND usuario_para = '$id1'";
	$this->db->query($sql);

}
public function getSugestoes($limit = 5){
		$array = array();
		$meuid = $_SESSION['lgclass'];
		$sql = 
		"SELECT 
			usuarios.id,
			usuarios.nome
		FROM 
			usuarios
			
		WHERE 
			usuarios.id != '$meuid' 
			ORDER BY RAND()
			LIMIT $limit
			" ;

			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {
				$array= $sql->fetchAll();
			}
			return $array;
		}
public function getRequisicoes(){
	$array = array();
	$meuid = $_SESSION['lgclass'];

	$sql = "SELECT usuarios.id, usuarios.nome FROM amizades LEFT JOIN usuarios ON usuarios.id = amizades.usuario_de WHERE amizades.usuario_para = '".$meuid."' AND amizades.status = '0'";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;
		}

		public function getTotalAmigos($id) {

		$sql = "SELECT COUNT(*) as c FROM amizades WHERE (usuario_de = '$id' OR usuario_para = '$id') AND status = '1'";
		$sql = $this->db->query($sql);
		$sql = $sql->fetch();
		
		return $sql['c'];
	}

	public function getIdsFriends($id) {
		$array = array();

		$sql = "SELECT * FROM amizades WHERE (usuario_de = '$id' OR usuario_para = '$id') AND status = '1'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			foreach($sql->fetchAll() as $aitem) {
				$array[] = $aitem['usuario_de'];
				$array[] = $aitem['usuario_para'];
			}
		}

		return $array;
	}


	}


?>