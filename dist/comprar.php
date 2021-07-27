<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="Sense Quadros" content="" />
        <meta name="Aleff Oliveira" content="" />
      <title>Sense Quadros</title>
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      <!-- Font Awesome icons (free version)-->
      <script src="http://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
      <!-- Google fonts-->
      <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
      <link href="http://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link rel="stylesheet" href="json/fancybox.jquery.json" type="text/css" media="screen">
      <link href="css/styles.css" rel="stylesheet"/>
      <link href="css/lightbox.css" rel="stylesheet"/>
      <link href="css/cart-page.css" rel="stylesheet" />
      <link rel="stylesheet" href="css/magnific-popup.css">

      <link type="text/javascript" href="json/jquery.fancybox.pack.json" type="text/css" media="screen">
    </head>

    <body>

      <header id="site-header">
        <div class="container">
          <h1>Carrinho</h1>
        </div>
      </header>

      <div id="containerSelected">

        <section id="cart">

          <article class="product">
            <header id="site-header"> 
               <div id="tamanho"></div>
               <div id="cor"></div>
               <div id="selectedImage"></div>

               <div id="placing_select_image"></div>
               <div id="sizeAndColorSelected"></div>
            </header>

            
<!--
            <footer class="content">
              <span class="qt-minus">-</span>
              <span class="qt">1</span>
              <span class="qt-plus">+</span>

              <h2 class="full-price">
                350.00
              </h2>
              <h2 class="price">
                350.00
              </h2>
            </footer> -->
          </article>

        </section>

</div>

<footer id="site-footer">
  <div class="container clearfix">

    <div class="left">
      <div id="valorQuadro"></div>
      <h3 class="shipping">Entrega: R$ <span>10.00</span></h3>
    </div>

    <div class="right">
      <div id="totalQuadro"></div>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkoutModal">
        Checkout
      </button>

    </div>
  </div>

</footer>

<footer class="container" style="text-align:center;padding:10px 10%;">

</footer>

<footer>
  <div class="container" style="text-align:center;padding:10px 10px;">Copyright © Sense Quadros 2021
  </div>
</footer>

<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header py-4">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="checkout-panel-page">
        <div class="panel-body-page">
          <h2 class="title-page">Checkout</h2>

          <div class="progress-bar1-page">
            <div class="step1-page active"></div>
            <div class="step1-page active"></div>
            <div class="step1-page "></div>
            <div class="step1-page"></div>
          </div>

          <form id="submitPayment" name="submitPayment" action="controller/controllerPedido.php" method="post">

            <input type="hidden" id="tokenCard" name="tokenCard">
            <input type="hidden" id="hashCard" name="hashCard">
            <input type="hidden" id="itemCodeReference" name="itemCodeReference">
            <input type="hidden" id="itemCodeID" name="itemCodeID">
            <input type="hidden" id="itemAmountValue" name="itemAmountValue">

          <h3>Identificação</h3>

            <div class="input-fields-page">
              <div class="column-1">
                <div class="small-inputs-page">
                  <div>
                    <label for="customerFirstName">Nome</label>
                    <input type="text" id="customerFirstName" name="customerFirstName" required/>
                  </div>

                  <div>
                    <label for="customerLastName">Sobrenome</label>
                    <input type="text" id="customerLastName" name="customerLastName" required/>
                  </div>
                </div>

                <label style="padding-top:20px;" for="customerEmailAddress">E-mail</label>
                <input type="text" id="customerEmailAddress" required/>

              </div>
              <div class="column-2">

                <div class="small-inputs-page">

                  <div style="width:100px;">
                    <label for="customerCodeArea">DDD</label>
                    <input type="text" id="customerCodeArea" placeholder="61" name="customerCodeArea" required/>
                  </div>

                  <div style="width:70%;">
                    <label for="customerPhoneNumber">Telefone</label>
                    <input type="text" id="customerPhoneNumber" placeholder="99999-9999" name="customerPhoneNumber" maxlength="9" required/>
                  </div>

                  </div>

                  <div class="small-inputs-page">

                    <div>
                      <label for="customerSSN">CPF</label>
                      <input type="text" id="customerSSN" placeholder="123.456.789-10" name="customerSSN" maxlength="11" required/>
                    </div>

                    <div>
                      <label for="customerBirthDate">Data de Nascimento</label>
                      <input type="text" id="customerBirthDate" placeholder="dd/mm/aaaa"  name="customerBirthDate" maxlength="10" onkeyup="this.value=this.value.replace(/^(\d\d)(\d)$/g,'$1/$2').replace(/^(\d\d\/\d\d)(\d+)$/g,'$1/$2').replace(/[^\d\/]/g,'')" required/>
                    </div>

                  </div>

                </div>
            </div>

            <h3 style="padding-top:20px;">Endereço de entrega</h3>

              <div class="input-fields-page">
                <div class="column-1">

                  <label for="customerShipAddress">Endereço</label>
                  <input type="text" id="customerShipAddress" name="customerShipAddress"required/>

                  <div class="small-inputs-page">
                    <div>
                      <label for="customerAddressNumber">Número</label>
                      <input type="text" id="customerAddressNumber" name="customerAddressNumber" required/>
                    </div>

                    <div>
                      <label for="customerReference">Referência</label>
                      <input type="text" id="customerReference" name="customerReference" required/>
                    </div>

                  </div>
                </div>

                <div class="column-2">
                  <div class="small-inputs-page-1">
                    <div>
                      <label for="customerCity">Cidade</label>
                      <input type="text" id="customerCity" name="customerCity" required/>
                    </div>

                    <div>
                      <label for="customerProvincy">Bairro</label>
                      <input type="text" id="customerProvincy" name="customerProvincy" required/>
                    </div>
                  </div>

                  <div class="small-inputs-page">
                    <div style="width:100px;">
                      <label for="customerUF">UF</label>
                      <input type="text" id="customerUF" placeholder="DF" name="customerUF" maxlength="2" required/>
                    </div>

                    <div style="width:70%;">
                      <label for="customerZipCode">CEP</label>
                      <input type="text" id="customerZipCode" placeholder="00000-000" name="customerZipCode" maxlength="9" required/>
                    </div>
                  </div>

                </div>
              </div>

            <h3 style="padding-top:20px;">Pagamento</h3>


            <div class="input-fields-page">

              <div class="column-1">

                  <div>
                    <label for="cardholder">Titular</label>
                    <input type="text" id="cardholder" name="cardholder" required/>
                  </div>

                  <div style="padding-top:20px;">
                    <label for="paymentSSN">CPF do Titular</label>
                    <input type="text" id="paymentSSN" name="paymentSSN" maxlength="11" required/>
                  </div>


              </div>

              <div class="column-2">

                <div class="small-inputs-page-1">
                  <div style="width:100%;">
                    <label for="cardNumber">Número do cartão</label>
                    <input class="bandeiraCartao" type="text" id="cardNumber" name="cardNumber" maxlength="16" required></input>

                  </div>

                  <div style="padding-top:45px; padding-left:30px;">
                    <select name="qtdParcelas" class="btn-secondary" id="qtdParcelas" required>
                      <option value="">Parcelas</option>
                    </select>
                    <input type="hidden" id="valorParcelas" name="valorParcelas">
                  </div>

                </div>

                <div class="small-inputs-page">

                  <div style="width:30%;">
                    <label for="validMonth">Mês</label>
                    <input type="text" id="validMonth" placeholder="MM" name="validMonth" maxlength="2" required/>
                  </div>

                  <div style="width:30%;">
                    <label for="validYear">Ano</label>
                    <input type="text" id="validYear" placeholder="AAAA" name="validYear" maxlength="4" required/>
                  </div>

                  <div style="width:30%;">
                    <label for="cardVerification">CVV</label>
                    <input type="password" id="cardVerification" name="cardVerification" pattern="[0-9]+" maxlength="3" required/>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="panel-footer-page">
            <input id="Confirmar" class="btn btn-primary" name="Confirmar" type="submit" value="Confirmar">

          </div>
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
  <script src="js/comprar.js"></script>
  <script src="js/zepto.min.js"></script>
  <script src="js/lightbox-plus-jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>

 <script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>

<!--<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>  -->

    </body>
</html>
