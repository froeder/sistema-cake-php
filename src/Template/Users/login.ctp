<div class="content">
    <h4>Login</h4>

    <?php
        echo $this->Form->create();
        echo $this->Form->input('username') ;
        echo $this->Form->input('password') ;
        echo $this->Form->button('Acessar') ;
        echo $this->Form->end();
    ?>

    <?php
        echo $this->Html->Link('Cadastrar novo', ['controller' => 'users' , 'action' => 'adicionar']);
    ?>
</div>