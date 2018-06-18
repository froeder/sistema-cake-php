<div class="container clearfix">
    <div class="content">
        <table class="table">
            <thead style="background-color: #88c9b7">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach($users as $user){
            ?>
                <tr bgcolor="#d9f9f1">
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td>
                        <?php echo $this->html->Link('Editar' , ['controller' => 'users', 'action' => 'editar', $user['id']]) ?>
                        <?php echo $this->Form->postLink('Apagar' , ['controller' => 'users', 'action' => 'apagar', $user['id']],['confirm' => 'Tem certeza que deseja apagar o usuário ' .$user['username']. '?']) ?>
                    </td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
                    
        <?php 
            echo $this->html->Link('Novo Usuário' , ['controller' => 'users', 'action' => 'adicionar'])
        ?>
        <br>
        <?php 
            echo $this->html->Link('Voltar para Home' , ['controller' => 'paginas' , 'action' => 'index'])
        ?>
    </div>
</div>