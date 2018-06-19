<div class="content">
    <h4>Teste de formulário de contato</h4>
    <?php 
        echo $this->Form->create($contato);
        echo $this->Form->input('nome');
        echo $this->Form->input('email');
        echo $this->Form->input('msg');
        echo $this->Form->button('Enviar');
        echo $this->Form->end();
    ?>
</div>