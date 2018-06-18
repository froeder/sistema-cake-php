<?php
namespace App\Controller ;
use Cake\ORM\TableRegistry ;
use Cake\Event\Event ;

class UsersController extends AppController {

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);

        $this->Auth->allow(['adicionar', 'salvar']);
    }

    public function index(){
        $userTable = TableRegistry::get('Users');
        $users = $userTable->find('all') ;

        $this->set('users', $users);
    }

    public function adicionar(){
        $userTable = TableRegistry::get('Users');
        $user = $userTable->newEntity();

        $this->set('user', $user);
    }

    public function apagar($id){
        $userTable = TableRegistry::get('Users') ;
        $user = $userTable->get($id) ;

        if($userTable->delete($user)){
            $this->Flash->set('Usuário deletado com sucesso!');
        }else{
            $this->Flash->set('Erro ao deletar usuário');
        }

        $this->redirect('Users/index') ;
    }

    public function salvar(){
        $userTable = TableRegistry::get('Users');

        $user = $userTable->newEntity($this->request->data()) ;

        if($userTable->save($user)){
            $this->Flash->set('Usuário cadastrado com sucesso!');
        }else {
            $this->Flash->set('Erro ao cadastrar usuário !');
        }

        $this->redirect('Users/index') ;
    }

    public function login(){
        if($this->request->is('post')){
            $user = $this->Auth->identify();

            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Flash->set('Usuário ou senha inválidos' , ['element' => 'error']);
            }

        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

}

?>