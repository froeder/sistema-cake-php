<<<<<<< HEAD
<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Por favor informe seu usuário e senha') ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
=======
<div class="content">
    <h4>Login</h4>

    <?php
        echo $this->Form->create();
        echo $this->Form->input('username') ;
        echo $this->Form->input('password') ;
        echo $this->Form->button('Acessar') ;
        echo $this->Form->end();
    ?>
>>>>>>> parent of 54259da... inclusao logica para hash
</div>