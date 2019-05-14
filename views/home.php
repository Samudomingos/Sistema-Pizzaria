<?php  
$client = new Client();
$consult = $client->consult();
$menu = $client->getMenu();

?>
<h1 class="d-flex justify-content-center border-bottom mt-4 pb-3">Novo Pedido <i class="far fa-bookmark pl-2 pt-2"></i></h1>
<div>
	
<form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNumber">Numero</label>
      <input name="clientCel" value="<?php echo $consult['clientCel'] ?>" type="text" class="telefone form-control" id="inputNumber" placeholder="(11)1234-5678">
    </div>  	
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input name="clientName" value="<?php echo $consult['clientName'] ?>" disabled="disabled" type="email" class="form-control" id="inputEmail4" placeholder="">
    </div>
  </div>
  <div class="form-row">
  	<div class="form-group col-md-2">
      <label for="inputZip">Cep</label>
      <input name="clientZip" value="<?php echo $consult['clientZip'] ?>" disabled="disabled" type="text" class="cep form-control" id="inputZip">
    </div>
	<div class="form-group col-md">
	   <label for="inputAddress">Endereço</label>
	   <input name="clientAddress" value="<?php echo $consult['clientAddress'] ?>" disabled="disabled" type="text" class="form-control" id="inputAddress" placeholder="">
	  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md">
      <label for="inputCity">Cidade</label>
      <input name="clientCity"   value="<?php echo utf8_encode($consult['clientCity']) ?>" disabled="disabled" type="text" class="form-control" id="inputCity">
    </div>
  	<div class="form-group col-md">
      <label for="inputLastPizza">Última Pizza Pedida</label>
      <input name="clientLastPizza" value="<?php echo $consult['lastPizza'] ?>" disabled="disabled" type="text" class="form-control" id="inputLastPizza">
    </div>
  </div>  
  <button type="submit" class="btn btn-primary">Consultar</button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Fazer Pedido</button>
</form>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Concluir Pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <select name="requestPizza" class="form-control">
              <?php foreach ($menu as $value): ?>
              <option value="<?php echo $value['pizzaId']; ?>"><?php echo $value['pizzaName']; ?></option>

            <?php $preco = $value['pizzaPrice']; endforeach; ?>
            </select>
          </div>
           <div class="form-group">
            <label for="amount" class="col-form-label">Quantidade:</label>
            <input type="number" value="" name="amount" class="form-control" id="amount" />
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Adicionais:</label>
            <textarea name="additional" class="form-control" id="message-text"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" />
          </div>
        </form>
      </div>
      <h5>
    </div>
  </div>
</div>

</div>

