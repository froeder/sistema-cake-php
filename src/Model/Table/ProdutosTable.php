<?php
    namespace App\Model\Table ;
    use Cake\ORM\Table ;
    use Cake\Validation\Validator ;

    class ProdutosTable extends Table{
        public function validationDefault(Validator $validator){
            $validator->requirePresence('nome', true)->notEmpty('nome');
            $validator->add('descricao', [
                'minLength' => [
                    'rule' => ['minLength' , 10],
                    'message' => 'A descrição deve conter ao menos 10 caractres'
                ]
            ]);
            $validator->requirePresence('preco', true)->notEmpty('preco');
            $validator->requirePresence('quantidade', true)->notEmpty('quantidade');
            return $validator ;
        }
    }
?>