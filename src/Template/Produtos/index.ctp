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
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
                    
        <?php 
            echo $this->html->Link('Novo Produto' , ['controller' => 'produtos', 'action' => 'novo'])
        ?>
    </div>
</div>