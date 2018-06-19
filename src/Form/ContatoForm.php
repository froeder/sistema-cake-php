<?php 
namespace App\Form ;
use Cake\Form\Form ;
use Cake\Form\Schema ;
use Cake\Validation\Validator ;
use Cake\Network\Email\Email ;

class ContatoForm  extends Form{
    public function __buildSchema(Schema $schema){
        $schema->addField('nome', 'string');
        $schema->addField('email', 'string');
        $schema->addField('msg', 'text');
    }

    public function __buildValidator(Validator $validator){
        $validator->add('msg',[
            'minLength' => [
                'rule' => ['minLength',10],
                'message' => 'A mensagem precisa ter no minímo 10 caracteres'
            ]
        ]);
        $validator->notEmpty('nome');
        $validator->notEmpty('email');

        return $validator ;
    }

    public function _execute(array $data){

        $email = new Email('gmail');
        $email->to('froeder.jhonatan@gmail.com');
        $email->subject('Contato feito pelo site');

        $msg = 'Contato feito pelo site Nome: teste' ;
    
    }

}


?>