<?php 
namespace App\Controller;
use \Cake\ORM\TableRegistry ;

class ProdutosController extends AppController{
    public function index(){
        $produtosTable = TableRegistry::get('Produtos') ;
        $produtos = $produtosTable->find('all') ;

        $this->set('produtos', $produtos);
    }

    public function novo(){
        $produtosTable = TableRegistry::get('Produtos') ;
        $produto =  $produtosTable->newEntity();
        $this->set('produto', $produto) ;
    }

    public function salva(){
        $produtosTable = TableRegistry::get('Produtos');
        $produto = $produtosTable->newEntity($this->request->data());
       
        if($produtosTable->save($produto)) {
            $msg = "Produto salvo com sucesso" ;
        }else {
            $msg = "Erro ao salvar o produto" ;
        }

        $this->set('msg', $msg) ;
    }

    public function editar($id){

        $produtosTable = TableRegistry::get('Produtos') ;
        $produto = $produtosTable->get($id);

        $this->set('produto', $produto);

        $this->render('novo');
    }
}

?>