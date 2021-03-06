<?php
include_once("header.php");
?>

<div class="container">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputNome">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail">
  </div>
  <div class="col-4">
    <label for="inputFone" class="form-label">Fone</label>
    <input type="text" class="form-control" id="inputFone" placeholder="(55) -- 91234-5678">
  </div>
  <div class="col-4">
    <label for="inputCPF" class="form-label">CPF</label>
    <input type="text" class="form-control" id="inputCPF" placeholder="123.456.789-01">
  </div>
  <div class="col-md-4">
    <label for="inputTipo" class="form-label">Tipo de Usuário</label>
    <select id="inputTipo" class="form-select">
      <option selected>Escolha...</option>
      <option value="1">Funcionário</option>
      <option value="2">Cliente</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputCEP" class="form-label">CEP</label>
    <input type="text" class="form-control" id="inputCity" placeholder="12345-678">
  </div>
  <div class="col-md-2">
    <label for="inputNum" class="form-label">Nº da Casa</label>
    <input type="text" class="form-control" id="inputNum">
  </div>
  <div class="col-md-8">
    <label for="inputComple" class="form-label">Complemento</label>
    <input type="text" class="form-control" id="inputComple">
  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Aceite os termos de uso do sistema de jogos
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>

</div>
<?php
include_once("footer.php");
?>
