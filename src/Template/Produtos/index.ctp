<div class="container clearfix">
    <div class="content">
        <table class="table">
            <thead style="background-color: #88c9b7">
                <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach($produtos as $produto){
            ?>
                <tr bgcolor="#d9f9f1">
                    <td><?= $produto['id'] ?></td>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $this->Money->format($produto['preco']) ?></td>
                    <td><?= $produto['descricao'] ?></td>
                    <td><?= $produto['quantidade'] ?></td>
                    <td>
                        <?php echo $this->html->Link('Editar' , ['controller' => 'produtos', 'action' => 'editar', $produto['id']]) ?>
                        <?php echo $this->Form->postLink('Apagar' , ['controller' => 'produtos', 'action' => 'apagar', $produto['id']],['confirm' => 'Tem certeza que deseja apagar o produto' .$produto['nome']. '?']) ?>
                    </td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
                    
        <?php 
            echo $this->html->Link('Novo Produto' , ['controller' => 'produtos', 'action' => 'novo'])
        ?>
        <br>
        <?php 
            echo $this->html->Link('Voltar para Home' , ['controller' => 'paginas' , 'action' => 'index'])
        ?>
    </div>
</div>