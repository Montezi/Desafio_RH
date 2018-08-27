<div class="content">

<p><h3 class="text-center">Cadastro  de Vaga</h3></p>

<?php echo $this->Form->create($vaga);?>
  <div class="form-group">
    <label for="titulo" class="control-label col-xs-2">Título</label>
    <div class="col-xs-10">
      <input id="titulo" name="titulo"  required ="required" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="nome_cliente" class="control-label col-xs-2">Cliente</label>
    <div class="col-xs-10">
      <input id="nome_cliente" name="nome_cliente" required ="required" placeholder="Informe o nome do Cliente" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="data_criação" class="control-label col-xs-2">Data Criação</label>
    <div class="col-xs-10">
      <input id="data_criacao" name="data_criacao" type="text"  value="<?= date('d/m/Y')?>" readonly="readonly" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="prazo_fechamento" class="control-label col-xs-2">Prazo Fechamento</label>
    <div class="col-xs-10">
      <input id="prazo_fechamento" required ="required"name="prazo_fechamento" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="responsaveis" class="control-label col-xs-4">Responsável pela vaga:</label>
    <div class="col-xs-8">

      <select  class="custom-select" required ="required" id="responsaveis" multiple="multiple" name="responsaveis[]">
      <?php foreach($funcionarios as $funcionario) {?>
       <option value="<?php echo $funcionario['idfuncionario']; ?>"><?=$funcionario['nome'];?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row align-center">
    <div class="col-xs-offset-2 col-xs-10">
      <button name="submit" type="submit" class="btn btn-primary">Gravar</button>
    </div>
  </div>
</form>

</div>


<script>
    $(document).ready(function() {

       $('#responsaveis').multiselect({
            buttonWidth: '600px',
            dropRight: true

       });

    });
</script>
