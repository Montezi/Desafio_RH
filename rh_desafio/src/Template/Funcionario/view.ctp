
<div class="content">
<p><h3 class="text-center">Funcionários</h3></p>
<br>
<table class="table">
    <thead>
        <tr>
            <th>Funcionário</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?= '<strong>Id:</strong> '.$funcionario['idfuncionario']; ?></td>
        </tr>
        <tr>
            <td><?='<strong>Nome:</strong> '.$funcionario['nome']; ?></td>
        </tr>
        <tr>
            <td><?= '<strong>CPF: </strong>'.$funcionario['cpf']; ?></td>
        </tr>
        <tr>
            <td><?= '<strong>Data de Nascimento:</strong> '.$funcionario['data_nascimento']->format('d/m/Y');?></td>
        </tr>
    </tbody>
</table>
<div class ="text-center">
 <?= $this->Html->link(__('Voltar'), ['controller' => 'funcionario', 'action'=>'index'],['class'=>'btn btn-primary']) ?>
</div>
</div>


