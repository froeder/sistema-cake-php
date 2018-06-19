<?php 
namespace App\Controller ;
use App\Form\ContatoForm ;


class  contatoController extends AppController{
    public function index(){
        $contato = new ContatoForm() ;

        $this->set('contato', $contato);
    }
}
?>