<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="Sense Quadros" content="" />
        <meta name="Aleff Oliveira" content="" />
      <title>Carrinho</title>
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      <!-- Font Awesome icons (free version)-->
      <script src="http://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
      <!-- Google fonts-->
      <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
      <link href="http://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="css/lightbox.css" rel="stylesheet"/>
      <link href="css/styles.css" rel="stylesheet"/>
      <link href="css/carrinho.css" rel="stylesheet"/>
      <link href="css/paymentForm.css" rel="stylesheet"/>
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link type="text/javascript" href="json/jquery.fancybox.pack.json" type="text/css" media="screen">

</head>

<body>
  <main>
    <div class="basket">
      <div class="basket-module">
        <label for="promo-code">Cupom de desconto</label>
        <input id="promo-code" name="promo-code" maxlength="5" class="promo-code-field">
        <button class="promo-code-cta">Aplicar</button>
      </div>
      <div class="basket-labels">
        <ul>
          <li class="item item-heading">Item</li>
          <li class="price">Preço</li>
          <li class="quantity">Quantidade</li>
          <li class="subtotal">Subtotal</li>
        </ul>
      </div>
      <div class="basket-product">
            <div id="tamanho"></div>
            <div id="cor"></div>
            <div id="selectedImage"></div>
        <div class="item">
          <div class="product-image">
            <div id="placing_select_image"></div>
          </div>

          <div class="product-details">
            <h1><strong><span class="item-quantity">1</span> x Quadro emoldurado</strong> Impressão de alta qualidade</h1>
            <p>
                <strong>Preço Unidade:</strong> <span id="price"></span></br>
                <strong>Moldura:</strong> <span id="selected_frame_color"></span></br>
                <strong>Tamanho:</strong> <span id="selected_frame_size"></span>
            </p>
          </div>
          
        </div>
        <div class="price" id="price-unit"></div>
        <div class="quantity">
          <input type="number" value="1" min="1" class="quantity-field">
        </div>
        <div class="subtotal"><span id="basket-subtotal-unit"></span></div>
        <div class="remove">
          <button>Remover</button>
        </div>
      </div>
    </div>
    <aside style="padding-top:60px;">
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Item no seu carrinho</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="basket-subtotal"></div>
          <div class="promo-title">Frete:</div> <div style="padding-left:85%;">R$10</div>
          <div class="summary-promo hide">
            <div class="promo-title">Cupom</div>
            <div class="promo-value final-value" id="basket-promo"></div>
          </div>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total"></div>
        </div>
        <div class="summary-checkout">
          <button type="button" class="checkout-cta" data-toggle="modal" data-target="#checkoutModalCreditCard">Pagar com cartão de crédito</button></br>
          <button class="checkout-cta" id="checkoutModalPIX">Pagar com PIX</button>
        </div>
      </div>
    </aside>
  </main>

  <footer>
    <div class="container" style="text-align:center;padding:10px 10px;">Copyright © Sense Quadros 2021
    </div>
  </footer>

  <div class="modal fade" id="checkoutModalCreditCard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">Voltar</span>
            </button>
            <div class="container">  
                <form id="submitPayment" name="submitPayment" action="/dist/controller/controllerPedido.php" method="post">

                <input type="hidden" id="tokenCard" name="tokenCard">
                <input type="hidden" id="hashCard" name="hashCard">
                <input type="hidden" id="itemCodeReference" name="itemCodeReference">
                <input type="hidden" id="itemCodeID" name="itemCodeID">
                <input type="hidden" id="itemAmountValue" name="itemAmountValue">

                    <h3>Pagamento</h3>
                    <h4>Identificação</h4>

                    <fieldset>
                          <input placeholder="Nome" type="text" id="customerFirstName" tabindex="1" name="customerFirstName" for="customerFirstName" required autofocus/>
                    </fieldset>

                    <fieldset>
                        <input placeholder="Sobrenome" type="text" id="customerLastName" tabindex="2" name="customerLastName" for="customerLastName" required autofocus/>
                    </fieldset>

                    <fieldset>
                        <input placeholder="E-mail" type="text" id="customerEmailAddress" tabindex="3" name="customerEmailAddress" for="customerEmailAddress" required autofocus/>
                    </fieldset>

                    <fieldset>
                        <input placeholder="DDD" type="text" id="customerCodeArea" tabindex="4"  name="customerCodeArea" maxlength="2" for="customerCodeArea" required autofocus/>
                    </fieldset>

                    <fieldset>
                        <input placeholder="Telefone" type="text" id="customerPhoneNumber" tabindex="5" name="customerPhoneNumber" for="customerPhoneNumber" maxlength="9" required autofocus/>
                    </fieldset>

                    <fieldset>
                        <input placeholder="CPF" type="text" id="customerSSN"  tabindex="6" name="customerSSN" maxlength="11" for="customerSSN" required autofocus/>
                    </fieldset>

                    <fieldset>
                        <input placeholder="Data de Nascimento" type="text" id="customerBirthDate" tabindex="7" name="customerBirthDate" maxlength="10" onkeyup="this.value=this.value.replace(/^(\d\d)(\d)$/g,'$1/$2').replace(/^(\d\d\/\d\d)(\d+)$/g,'$1/$2').replace(/[^\d\/]/g,'')" for="customerBirthDate" required autofocus/>
                    </fieldset>

                    <h4>Endereço de entrega</h4>

                    <fieldset>
                        <input placeholder="Endereço" type="text" id="customerShipAddress" tabindex="8" name="customerShipAddress" for="customerShipAddress" required autofocus/>
                    </fieldset>    

                    <fieldset>
                        <input placeholder="Bairro" type="text" id="customerProvincy" tabindex="12" name="customerProvincy" for="customerProvincy" required autofocus/>
                    </fieldset>    

                    <fieldset>
                        <input placeholder="Número" type="text" id="customerAddressNumber" tabindex="9" name="customerAddressNumber" for="customerAddressNumber" required autofocus/>
                    </fieldset>

                    <fieldset>
                        <input placeholder="Refêrencia" type="text" id="customerReference" tabindex="10" name="customerReference" for="customerReference" required autofocus/>
                    </fieldset>

                    <fieldset>
                        <input placeholder="Cidade" type="text" id="customerCity" tabindex="11" name="customerCity" for="customerCity" required autofocus/>
                    </fieldset>
                    
                    <fieldset>
                        <input placeholder="UF" type="text" id="customerUF" placeholder="DF" tabindex="13" name="customerUF" maxlength="2" for="customerUF" required autofocus/>
                    </fieldset>

                    <fieldset>
                        <input placeholder="CEP" type="text" id="customerZipCode" placeholder="00000-000" tabindex="14" name="customerZipCode" maxlength="9" for="customerZipCode" required autofocus/>
                    </fieldset>

                    <h4>Pagamento</h4>

                    <fieldset>
                        <input placeholder="Titular do cartão" type="text" id="cardholder" tabindex="15" name="cardholder" for="cardholder" required autofocus/>
                    </fieldset>    

                    <fieldset>
                        <input placeholder="CPF do titular" type="text" id="paymentSSN" tabindex="16" name="paymentSSN" maxlength="11" for="paymentSSN" required autofocus/>
                    </fieldset>

                    <fieldset>
                        <input placeholder="Número do cartão" class="bandeiraCartao" type="text" id="cardNumber" tabindex="17" name="cardNumber" maxlength="16" for="cardNumber"  required autofocus></input>
                    </fieldset>

                    <fieldset>
                        <select name="qtdParcelas" class="btn-primary" id="qtdParcelas" tabindex="18"  required>
                            <option value="">Parcelas</option>
                        </select>
                        <input type="hidden" id="valorParcelas" name="valorParcelas">
                    </fieldset>

                    <fieldset>
                        <input placeholder="mês do vencimento (MM)"  type="text" id="validMonth"  tabindex="19" name="validMonth" maxlength="2" for="validMonth" required autofocus/>
                    </fieldset>

                    <fieldset>
                        <input placeholder="Ano do vencimento (AAAA)" type="text" id="validYear" tabindex="20" name="validYear" maxlength="4" for="validYear"  required autofocus/>
                    </fieldset>
                    
                    <fieldset>
                        <input placeholder="CVV" type="password" id="cardVerification" tabindex="21"  name="cardVerification" pattern="[0-9]+" maxlength="3" for="cardVerification" required autofocus/>
                    </fieldset>
                    
                    <fieldset>
                      <input name="confirmar" class="checkout-cta btn-primary" type="submit" id="confirmar" value="Confirmar"/>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script  src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="json/jquery.fancybox.pack.json"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="http://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/carrinho.js"></script>
  <script src="js/zepto.min.js"></script>

  <script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>

<!--<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>  -->
</body>

</html>