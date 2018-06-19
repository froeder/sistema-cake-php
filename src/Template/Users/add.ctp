<div class="users form content">
    <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Add User') ?></legend>
            <?= $this->Form->input('username') ?>
            <?= $this->Form->input('password') ?>
            <?= $this->Form->input('role', [
                'options' => ['admin' => 'Admin', 'cliente' => 'Cliente', 'funcionario' => 'Funcionario']
            ]) ?>
    </fieldset>
    <div class="content">
    <?= $this->Form->button(__('Submit')); ?>
    <?= $this->Form->end() ?>

    
        <?= $this->Html->Link('Voltar' , ['controller' => 'users' , 'action' => 'index']) ?>
    </div>
</div>