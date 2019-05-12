<h1 class="d-flex justify-content-center border-bottom mt-4 pb-3">Novo Pedido <i class="far fa-bookmark pl-2 pt-2"></i></h1>
<div>
	
<form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNumber">Numero</label>
      <input name="clientCel" type="text" class="telefone form-control" id="inputNumber" placeholder="(11)1234-5678">
    </div>  	
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input name="clientName" value="<?php echo $clientName; ?>" disabled="disabled" type="email" class="form-control" id="inputEmail4" placeholder="">
    </div>
  </div>
  <div class="form-row">
  	<div class="form-group col-md-2">
      <label for="inputZip">Cep</label>
      <input name="clientZip" disabled="disabled" type="text" class="cep form-control" id="inputZip">
    </div>
	<div class="form-group col-md">
	   <label for="inputAddress">Endereço</label>
	   <input name="clientAddress" disabled="disabled" type="text" class="form-control" id="inputAddress" placeholder="">
	  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md">
      <label for="inputCity">Cidade</label>
      <input name="clientCity"  disabled="disabled" type="text" class="form-control" id="inputCity">
    </div>
  	<div class="form-group col-md">
      <label for="inputLastPizza">Última Pizza Pedida</label>
      <input name="clientLastPizza" disabled="disabled" type="text" class="form-control" id="inputLastPizza">
    </div>
  </div>  
  <button type="submit" class="btn btn-primary">Consultar</button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Fazer Pedido</button>
</form>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

</div>

