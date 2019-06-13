<?php

/**
 * 
 */
class addProdutosController extends controller{
		
			//Meu metódo index que não vai ser preciso ser chamado
			public function index(){

			}

			//Meu metódo addProd para passar um array
			public function addProd(){
				//Iniciando um array
				$dados = array( 'error' => '');

				//Caso apresente error na URL apresento uma mensagem para o usuário
				if(!empty($_GET['error'])){
					$dados['error'] = $_GET['error'];
				}

				//Chamando o tamplete e passando um array com os dados se não estiver vázio
				$this->loadTemplate('addProd', $dados);
			}


			//Esse é o metodo que vai salvar os dados no BD
			public function add_save(){
				//Vericando seu código foi enviado
				if(!empty($_POST['codigo'])){
					$nome 	   = $_POST['nome'];
					$codigo	   = $_POST['codigo'];
					$preco 	   = $_POST['preco'];
					$descricao = $_POST['descricao'];

					//Instanciando o objeto Produtos
					$produtos = new Produtos();
					//Se ocorrer a inserção mandamos o usuario de volta pra tela inicial, 
					//caso contrario mostrando o erro pra ele
					if($produtos->add($nome, $codigo, $preco, $descricao)){
					header("Location: ".BASE_URL);
					}else{
						header("Location: ".BASE_URL.'addProdutos/addProd?error=exist');
					}

				}else{
					header("Location: ".BASE_URL.'addProdutos/addProd');
				}
			}

			//Esse metodo é a função de editar o produto
			public function edit($id){
				//Iniciando um array vazio
				$dados = array();

				//Aqui eu verifico se o ID foi passado por parâmtro
				if(!empty($id)){
					//Instanciando o objeto Produtos
					$produtos = new Produtos();

					//Vericando se o formulario não enviou vázio
					if(!empty($_POST['codigo'])){
						$codigo = $_POST['codigo'];
						$nome = $_POST['nome'];
						$preco = $_POST['preco'];
						$descricao = $_POST['descricao'];
						//Chamo a função editar no segundo carremento da página 
						//chamando a class Produtos
						 $produtos->edit($nome, $preco, $descricao, $id);
					}else{
						//Esse else é carregando o formulário preenchido no primeiro carregamento da página 
						$dados['info'] = $produtos->get($id);
						if(!isset($dados['info']['id'])){
							$this->loadTemplate('edit', $dados);
							exit;
						}

					}		

				}
				//Depois de tudo feito mando o usuário de volta para pagina inicial
				header("Location: ".BASE_URL);

			}

			//Metodo de deletar o produto selecionado a partir do id
			public function del($id){
				//Verifico se o ID foi passado por parâmetro
				if(!empty($id)){
					//Instanciando o objeto Produtos e mandando 
					//para a classe delete o id que vai ser deletado
					$produtos = new Produtos();
					$produtos->delete($id);

				}
				//Depois de execultado mando o usuário de volta para página inicial
				header("Location: ".BASE_URL);

			}

			//Metodo que enviar o arquivo XML para o BD
			public function xmlProd(){


					/* PEGA O ARQUIVO XML */
			        //if (isset($_POST['arquivo'])) {          
			        if (is_uploaded_file($_FILES['arquivo']['tmp_name'])) {
			        	// Lê o arquivo XML e recebe um objeto com as informações  
			      	$xml = simplexml_load_file($_FILES['arquivo']['tmp_name']); 

			      		//Instancio o objeto Produtos
				      	$produtos = new Produtos();
				      	//Verifico se foi tudo gravado para mandar de volta pra tela inicial
						if($produtos->xml($xml)){
							header("Location: ".BASE_URL);
					
					}
			}
		//}

		}

}
