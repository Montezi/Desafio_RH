<div class="content">
<p><h3 class="text-center">Vagas</h3></p>
<?=  $this->Flash->render() ?>
<div class ="text-right">
 <?= $this->Html->link(__('Nova Vaga'), ['controller' => 'vagas', 'action'=>'add'],['class'=>'btn btn-primary']) ?>
</div>


<br>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Cliente</th>
            <th>Data Criação</th>
            <th>Prazo Fechamento</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach($vagas as $vaga) {?>
        <tr>
            <td><?= $vaga['idvagas']; ?></td>
            <td><?= $vaga['titulo']; ?></td>
            <td><?= $vaga['nome_cliente']; ?></td>
            <td><?= $vaga['data_criacao']->format('d/m/Y'); ?></td>
            <td><?= $vaga['prazo_fechamento']." dias (".date('d/m/Y', strtotime('+'.$vaga['prazo_fechamento'].' days', strtotime($vaga['data_criacao']))).")"; ?></td>
            <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $vaga['idvagas']],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $vaga['idvagas']], ['confirm' => __('Você tem certeza que deseja excluir a Vaga {0}?', $vaga['titulo']),'class'=>'btn btn-danger btn-sm']) ?>
                </td>
        </tr>
    <?php  } ?>
    </tbody>
</table>

</div>

