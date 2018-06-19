<?php 
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{

  public function beforeFilter(Event $event)
  {
    parent::beforeFilter($event);
      // Permitir aos usuários se registrarem e efetuar logout.
      // Você não deve adicionar a ação de "login" a lista de permissões.
      // Isto pode causar problemas com o funcionamento normal do AuthComponent.
    $this->Auth->allow(['add', 'logout']);
  }

  public function logout()
  {
    return $this->redirect($this->Auth->logout());
  }

  public function index()
  {
    $this->set('users', $this->Users->find('all'));
  }

  public function view($id)
  {
    $user = $this->Users->get($id);
    $this->set(compact('user'));
  }

  public function adicionar()
  {
    $user = $this->Users->newEntity();
    if ($this->request->is('post')) {
      $user = $this->Users->patchEntity($user, $this->request->getData());
      if ($this->Users->save($user)) {
        $this->Flash->success(__('O usuário foi salvo.'));
        return $this->redirect(['action' => 'adicionar']);
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