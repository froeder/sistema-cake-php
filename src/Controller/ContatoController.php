<?php 
namespace App\Controller ;
use App\Form\ContatoForm ;


class  contatoController extends AppController{
    public function index(){
        $contato = new ContatoForm() ;

        if($this->request->is('post')){
            if($contato->execute($this->request->data())){
                $this->Flash->set('Email enviado com sucesso' , ['element' => 'success']);
            }else{
                $this->Flash->set('Falha ao enviar o e-mail' , ['element' => 'error']);
            }
        }
        $this->set('contato', $contato);
        echo 'teste'
    }
}
?>