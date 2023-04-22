<?php

	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Clientes;
	
	class ClientesController extends Controller
	{
		
		public function index(){
			//Clientes::find(1)->delete();
			//$obj = Clientes::find(2);
			//$obj->nome = "Fernando atualizado";
			//$obj->save();
			$data['clientes'] = Clientes::all();
			return view('clientes',$data);
		}

		public function getCliente($id){
			$info = Clientes::find($id);
			$data['nome'] = $info['nome'];
			$data['email'] = $info['email'];
			return view('cliente_single',$data);
		}

		public function inserir(Request $req){
			if($req->has('nome')){
				//Existe um post, apenas inserir!
				$nome = $req->input('nome');
				$email = $req->input('email');
				$clientes = new Clientes();
				$clientes->nome = $nome;
				$clientes->email = $email;
				$clientes->save();
				echo '<script>alert("Inserido com sucesso!")</script>';
				echo '<script>location.href="'.BASE_URL.'"</script>';
				die();
			//	return redirect('/');
			}
		}
	}
?>