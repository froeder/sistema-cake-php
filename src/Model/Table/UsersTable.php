<?php 
    namespace App\Model\Table;

    use Cake\ORM\Table;
    use Cake\Validation\Validator;

    class UsersTable extends Table
    {

        public function validationDefault(Validator $validator)
        {
            return $validator
                ->notEmpty('username', 'Usuário é necessário')
                ->notEmpty('password', 'Senha é necessária')
                ->notEmpty('role', 'Função é necessária')
                ->add('role', 'inList', [
                    'rule' => ['inList', ['admin', 'cliente' , 'funcionario']],
                    'message' => 'Por favor informe uma função válida'
                ]);
        }

    }
?>