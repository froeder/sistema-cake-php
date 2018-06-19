<?php 
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use \Cake\ORM\TableRegistry ;

class UsersController extends AppController
{

  public function index()
  {
    $this->set('users', $this->Users->find('all'));
  }

  public function view($id)
  {
    $user = $this->Users->get($id);
    $this->set(compact('user'));
  }

  public function add()
  {
    $user = $this->Users->newEntity();
    if ($this->request->is('post')) {
      $user = $this->Users->patchEntity($user, $this->request->getData());
      if ($this->Users->save($user)) {
        $this->Flash->success(__('O usuário foi salvo.'));
        return $this->redirect(['action' => 'add']);
      }
      $this->Flash->error(__('Não é possível adicionar o usuário.'));
    }
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
            $this->Flash->set('Usuário cadastrador com sucesso!');
        }else {
            $this->Flash->set('Erro ao cadastrar usuário !');
        }

        $this->redirect('Users/index') ;
    }

  
    


}
?>