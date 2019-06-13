<?php

/**
 * A QUI É A CLASSE DO MEU MODEL A CLASS PRODUTO
 */
class Produtos extends model{

			//Metodo que vai pegar todos os dados do BD
			public function getAll(){
				
				//Iniciando um array vazio
				$array = array();
				//Query que vai trazer todos os produtos
				$sql = "SELECT * FROM produtos";
				$sql = $this->db->query($sql);
				//Caso tenha retorno no banco montar um array com todos os usuários
				if($sql->rowCount() > 0){
					$array = $sql->fetchAll();
				}
				//retorno o array preenchido
				return $array;

			}

			//Metodo que vai selecionar o produto que foi clicado.
			//Passo o ID como parametro
			public function get($id){
				$array = array();
				$sql = "SELECT * FROM produtos WHERE et_id = :et_id";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(':et_id', $id);
				$sql->execute();

				if($sql->rowCount() > 0 ){
					$array = $sql->fetch();
				}
				return $array;
			}

			//Metodo que vai adiocnar um novo produdo que vem la do controller
			public function add($nome, $codigo, $preco, $descricao){
				//Verifico se o código que o usuario esta tentando cadastrar já existe
				if($this->codigoExiste($codigo) == false){

					$sql = "INSERT INTO produtos (et_codigo, et_nome, et_preco, et_descricao) 
							VALUES (:et_codigo, :et_nome, :et_preco, :et_descricao)";
					$sql = $this->db->prepare($sql);
					$sql->bindValue(':et_codigo', $codigo);
					$sql->bindValue(':et_nome', $nome);	
					$sql->bindValue(':et_preco', $preco);	
					$sql->bindValue(':et_descricao', $descricao);
					$sql->execute();

					return true;			
				}else{

					return false;
				}


			}

			//Metodo que edito o produto que vai ser enviado por parâmentro os dados que vem do controller
			public function edit($nome, $preco, $descricao, $id){
				$sql = "UPDATE produtos SET et_nome = :et_nome, et_preco = :et_preco,
				        et_descricao = :et_descricao WHERE et_id = :et_id";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(':et_nome', $nome);
				$sql->bindValue(':et_preco', $preco);
				$sql->bindValue(':et_descricao', $descricao);
				$sql->bindValue(':et_id', $id);
				$sql->execute();
			}

			//Medoto que deleto o produto conforme o ID passado por parâmentro 
			public function delete($id){
				$sql = "DELETE FROM produtos WHERE et_id = :et_id";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(':et_id', $id);
				$sql->execute();
			}

			//Uso esse metodo privado (ele só vai ser usado dentro da minha classe Produtos) 
			//para verificar se o codigo já existe para o medoto add não adicione um código que
			//ja tem no BD
			private function codigoExiste($codigo){
				$sql = "SELECT * FROM produtos WHERE et_codigo = :et_codigo";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(':et_codigo', $codigo);
				$sql->execute();

				if($sql->rowCount() > 0){
					return true;
				} else{
					return false;
				}
			}

			//Metodo que vai inserir os dados do arquivo XML
			public function xml($xml){
					//Contatos de dados que foi inserido inicnando com 0
					$x = 0;
					foreach ($xml as $produto){
			   		 $sql = "INSERT INTO produtos (et_codigo, et_nome, et_preco, et_descricao) 
								VALUES (:et_codigo, :et_nome, :et_preco, :et_descricao)";
						$sql = $this->db->prepare($sql);
						$sql->bindValue(':et_codigo', $produto->codigo);
						$sql->bindValue(':et_nome', $produto->nome);	
						$sql->bindValue(':et_preco', $produto->preco);	
						$sql->bindValue(':et_descricao', $produto->descricao);
						$sql->execute();

				   		 if($sql->rowCount() != -1){
				   		 	//Incrementando a variável
				       		$x++;
				    	}
					}
				//echo "$x contatos importados com sucesso!";
				return true;
			} 
		
	
}