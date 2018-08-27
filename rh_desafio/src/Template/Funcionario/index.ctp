<div class="content">
<p><h3 class="text-center">Funcionários</h3></p>
<?= $this->Flash->render() ?>
<div class ="text-right">
 <?= $this->Html->link(__('Novo Funcionário'), ['controller' => 'funcionario', 'action'=>'add'],['class'=>'btn btn-primary']) ?>
</div>


<br>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach($funcionarios as $funcionario) {?>
        <tr>
            <td><?= $funcionario['idfuncionario']; ?></td>
            <td><?= $funcionario['nome']; ?></td>
            <td><?= $funcionario['cpf']; ?></td>
            <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $funcionario['idfuncionario']],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $funcionario['idfuncionario']], ['confirm' => __('Você tem certeza que deseja excluir o Funcionário {0}?', $funcionario['nome']),'class'=>'btn btn-danger btn-sm']) ?>
                </td>
        </tr>
    <?php  } ?>
    </tbody>
</table>
</div>


