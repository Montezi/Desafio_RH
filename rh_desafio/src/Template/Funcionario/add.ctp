<div class="content">
<p><h3 class="text-center">Cadastro  de Funcionário</h3></p>
<!-- <form class="form-horizontal"  method="post" action="/funcionario/novo" > -->
<?php echo $this->Form->create($funcionario);?>
  <div class="form-group">
    <label for="nome" class="control-label col-xs-2">Nome</label>
    <div class="col-xs-10">
      <input id="nome" name="nome"  required ="required" type="text" class="form-control form-error">
    </div>
  </div>
  <div class="form-group">
    <label for="data_nascimento" required ="required" class="control-label col-xs-2">Data Nascimento</label>
    <div class="col-xs-10">
      <input id="data_nascimento" name="data_nascimento" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="cpf" class="control-label col-xs-2">CPF</label>
    <div class="col-xs-10">
      <input id="cpf" name="cpf" required ="required" placeholder="99999999999" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row align-center">
    <div class="col-xs-offset-2 col-xs-10">
      <button name="submit" type="submit" class="btn btn-primary">Gravar</button>
    </div>
  </div>
</form>

</div>


