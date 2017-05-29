<?php 
class Postagens extends model
{
	public function addPostagens($msg, $foto, $file, $id_grupo = '0'){
			
		$tipo = 'texto';
		$url = '';
		if(count($foto) > 0) {
			$tipos = array('image/jpeg', 'image/jpg', 'image/png');
			if(in_array($foto['type'], $tipos)) {
				$tipo = 'foto';

				$url = md5(time().rand(0,999));
				switch($foto['type']) {
					case 'image/jpeg':
					case 'image/jpg':
						$url .= '.jpg';
						break;
					case 'image/png':
						$url .= '.png';
						break;
					
				}

				move_uploaded_file($foto['tmp_name'], 'assets/img/postagens/'.$url);
			}
		}
		if(count($file) > 0) {
			$tipos = array('application/pdf', 'application/msword', 'text/plain');
			if(in_array($file['type'], $tipos)) {
				$tipo = 'file';
				

				$url = md5(time().rand(0,999));
				switch($file['type']) {
					case 'application/pdf':
						$url .= '.pdf';
						break;
					case 'application/msword':
						$url .= '.doc';
						break;
					case 'text/plain':
						$url .= '.txt';
						break;
				}
				
   			   move_uploaded_file($file['tmp_name'], 'assets/img/postagens/files/'.$url);
				
				
			}
		}
		
		$sql = "INSERT INTO postagens SET  data_criacao = NOW(), tipo = '$tipo', texto = '$msg', url = '$url', id_grupo = '$id_grupo'";
	
		$this->db->query($sql);
	}
	public function getAcervo($id_grupo = '0') {
		$array = array();

		$sql = "SELECT 
		*
		FROM postagens 
		ORDER BY data_criacao DESC";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
	  
}

?>