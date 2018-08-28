<div class="content">
<p><h3 class="text-center">Vagas</h3></p>
<br>
<table class="table">
    <thead>
        <tr>
            <th>Vaga</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?= '<strong>Id:</strong> '.$vaga['idvagas']; ?></td>
        </tr>
        <tr>
            <td><?='<strong>Título:</strong> '.$vaga['titulo']; ?></td>
        </tr>
        <tr>
            <td><?='<strong>Cliente:</strong> '.$vaga['nome_cliente']; ?></td>
        </tr>
        <tr>
            <td><?= '<strong>Data Criação: </strong>'.$vaga['data_criacao']->format('d/m/Y'); ?></td>
        </tr>
        <tr>
            <td><?= '<strong>Prazo Fechamento:</strong> '.$vaga['prazo_fechamento']." dias (".date('d/m/Y', strtotime('+'.$vaga['prazo_fechamento'].' days', strtotime($vaga['data_criacao']))).")";?></td>
        </tr>
        <?php
            $resp="";

            foreach($responsaveis as $responsavel){

                $resp .= trim($responsavel['nome']).",";

             }
             $resp = substr($resp,0,-1);

        ?>
        <tr>
            <td><?= '<strong>Responsável(eis) pela vaga:</strong> '.$resp;?></td>
        </tr>

    </tbody>
</table>
<div class ="text-center">
 <?= $this->Html->link(__('Voltar'), ['controller' => 'vagas', 'action'=>'index'],['class'=>'btn btn-primary']) ?>
</div>
</div>
