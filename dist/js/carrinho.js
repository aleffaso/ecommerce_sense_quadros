/* Get the item from previous page */

function showCart(){
    var parameters = location.search.substring(1).split("&");
    var temp = parameters[0].split("=");

    l = unescape(temp[1]);
    temp = parameters[1].split("=");
    p = unescape(temp[1]);
    temp = parameters[2].split("=");
    m = unescape(temp[1]);

    document.getElementById("tamanho").value = l;
    document.getElementById("cor").value = p;
    document.getElementById("selectedImage").value = m;

    getItemDescription(l,p,m);

    window.globalSize = l;
    window.globalColor  = p;
    window.globalImageSelected = m;

  }
  showCart();

  /* Get the item description code */
  function getItemDescription(l,p,m){
    var subCode = 'SQ-CGS-';
    var sizeCode = l.charAt(0).toUpperCase();
    var colorCode = p.charAt(0).toUpperCase();
    var selectedCode = '0';
    var sumNumber = parseInt(m,10);
    var resultNumber = sumNumber + 1;

    window.globalSelectedCodeFrame = subCode+sizeCode+colorCode+selectedCode+resultNumber;
    $("#itemCodeReference").val(subCode+sizeCode+colorCode+selectedCode+resultNumber);
    $("#itemCodeID").val(subCode+sizeCode+colorCode+selectedCode+resultNumber);
  };

  var num1 = parseInt(m,10);
  var num2 = 1;
  var result = num1 + num2;

    /* Put the right value at the card */

  var placeSelectImage= function(x) {
    var img_select = "";
    var selected_frame_size = "";
    var selected_frame_color = "";
    var frame_price = "";
    var frame_total_price = "";

    if (p === 'preta'){
        selected_frame_color = 'product-frame-black';
    }else{
        selected_frame_color = 'product-frame-white';
    }

    if (l === 'pequeno'){
        frame_price = 257.00;
        frame_total_price = 267.00;
        selected_frame_size = '</br> (30cm x 40cm)';
    }
    if (l === 'medio'){
        frame_price = 397.00;
        frame_total_price = 407.00;
        selected_frame_size = '</br> (50cm x 70cm)';
    }
    if (l === 'grande'){
        frame_price = 437.00;
        frame_total_price = 447.00;
        selected_frame_size = '</br> (50cm x 80cm)';
    }
    
    for (var counter = result; counter <= x; counter++ ) {
      img_select += '<img src="assets/img/pics/All/0'+counter+'.jpg" class="'+selected_frame_color+'"/>';
    }

    getAmountValue(frame_total_price);

    document.getElementById("price").innerText = frame_price.toFixed(2);
    document.getElementById("price-unit").innerText = frame_price;
    document.getElementById("basket-subtotal").innerText = frame_price;
    document.getElementById("basket-subtotal-unit").innerText = frame_price;
    document.getElementById("basket-total").innerText = frame_total_price;
    document.getElementById("selected_frame_size").innerHTML = l+selected_frame_size;
    document.getElementById("selected_frame_color").innerHTML = p;
    document.getElementById("placing_select_image").innerHTML = img_select;

};
placeSelectImage(result);

/* Set values + misc */
var promoCode;
var promoPrice;
var fadeTime = 300;

/* Assign actions */
$('.quantity input').change(function() {
  updateQuantity(this);
});

$('.remove button').click(function() {
  removeItem(this);
});

$(document).ready(function() {
  updateSumItems();
});

$('.promo-code-cta').click(function() {

  promoCode = $('#promo-code').val();

  if (promoCode == '10off' || promoCode == '10OFF') {
    //If promoPrice has no value, set it as 10 for the 10OFF promocode
    if (!promoPrice) {
      promoPrice = 10;
    } else if (promoCode) {
      promoPrice = promoPrice * 1;
    }
  } else if (promoCode != '') {
    alert("Invalid Promo Code");
    promoPrice = 0;
  }
  //If there is a promoPrice that has been set (it means there is a valid promoCode input) show promo
  if (promoPrice) {
    $('.summary-promo').removeClass('hide');
    $('.promo-value').text(promoPrice.toFixed(2));
    recalculateCart(true);
  }
});

/* Recalculate cart */
function recalculateCart(onlyTotal) {
  var subtotal = 0;

  /* Sum up row totals */
  $('.basket-product').each(function() {
    subtotal += parseFloat($(this).children('.subtotal').text());
  });

  /* Calculate totals */
  var shipp = 10.00;
  var total = subtotal + shipp;


  //If there is a valid promoCode, and subtotal < 10 subtract from total
  var promoPrice = parseFloat($('.promo-value').text());
  if (promoPrice) {
    if (subtotal >= 10) {
      total -= promoPrice;
    } else {
      alert('O pedido deve ser maior que R$ 10,00 para aplicar o cupom!');
      $('.summary-promo').addClass('hide');
    }
  }

  /*If switch for update only total, update only total display*/
  if (onlyTotal) {
    /* Update total display */
    $('.total-value').fadeOut(fadeTime, function() {
      $('#basket-total').html(total.toFixed(2));
      $('.total-value').fadeIn(fadeTime);
    });
  } else {
    /* Update summary display. */
    $('.final-value').fadeOut(fadeTime, function() {
      $('#basket-subtotal').html(subtotal.toFixed(2));
      $('#basket-total').html(total.toFixed(2));
      if (total == 0) {
        $('.checkout-cta').fadeOut(fadeTime);
      } else {
        $('.checkout-cta').fadeIn(fadeTime);
      }
      $('.final-value').fadeIn(fadeTime);
    });
  }
}

/* Update quantity */
function updateQuantity(quantityInput) {
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;

  /* Update line price display and recalc cart totals */
  productRow.children('.subtotal').each(function() {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });

  productRow.find('.item-quantity').text(quantity);
  updateSumItems();
}

function updateSumItems() {
  var sumItems = 0;
  $('.quantity input').each(function() {
    sumItems += parseInt($(this).val());
  });
  $('.total-items').text(sumItems);
}

/* Remove item from cart */
function removeItem(removeButton) {
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
    updateSumItems();
  });
}

function getAmountValue(valorSelecao){

  var root = "http://"+window.location.host+"/dist/";
  var amount = valorSelecao.toFixed(2);
  $("#itemAmountValue").val(amount);
  
  
  // Start credentials section
  function iniciarSessao(){
      $.ajax({
        url: root+"controller/controllerId.php",
        type: 'POST',
        dataType: 'json',
        success:function(data){
          PagSeguroDirectPayment.setSessionId(data.id);
        },
        complete: function(){
          listaMeiosPagamento();
        }
      });
  }
  iniciarSessao();
  
  // Payment available on PagSeguro
  function listaMeiosPagamento(){
    PagSeguroDirectPayment.getPaymentMethods({
        amount: amount,
        success: function(data) {
            $.each(data.paymentMethods.CREDIT_CARD.options, function(i, obj){
                $('.CartaoCredito').append(""+obj.name+"");
            });

            $('.Boleto').append(""+data.paymentMethods.BOLETO.name+"");

            $.each(data.paymentMethods.ONLINE_DEBIT.options, function(i, obj){
                $('.Debito').append(""+obj.name+"");
            });
        },
        complete: function(data) {
          getTokenCard()
        }
    });
  }
  
  $('#cardNumber').on('keyup',function(){
    var numeroCartao=$(this).val();
    var qtdCaracteres=numeroCartao.length;

    if(qtdCaracteres == 6){
        PagSeguroDirectPayment.getBrand({
            cardBin: numeroCartao,
            success: function(response){
                var bandeiraImg=response.brand.name;
          //     $('.bandeiraCartao').html("<img src=https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/42x20/"+bandeiraImg+".png>")
                getParcelas(bandeiraImg);
            },
            error: function (response) {
                alert('Cartão não reconhecido');
                $('.bandeiraCartao').empty();
            }
        });
      }
  });
  
  //Amount and installments value
  function getParcelas(bandeira) {
    PagSeguroDirectPayment.getInstallments({
        amount: amount,
        maxInstallmentNoInterest: 3,
        brand: bandeira,
        success: function(response) {
            $.each(response.installments,function(i,obj){
                $.each(obj,function(i2,obj2){
                  var numberValue=obj2.installmentAmount;
                  var number= "R$ "+ numberValue.toFixed(2).replace(".",",");
                  var numberParcelas= numberValue.toFixed(2);
                  $('#qtdParcelas').show().append("<option value='"+obj2.quantity+"'>"+numberValue+"</option>");
                });
            });
        }
    });
  }
  
  //Get the installment amount
  $("#qtdParcelas").on('change',function(){
    var valueSelected=document.getElementById('qtdParcelas');
    $("#valorParcelas").val(valueSelected.options[valueSelected.selectedIndex].label);
  });

    var globalTokenCardValue;
  //Get the token
  $('#cardVerification').on('blur',function(){
      getTokenCard();
      window.globalTokenCardValue = globalTokenCardValue;
  });
  
  
  //Get credit card token
  function getTokenCard() {
      PagSeguroDirectPayment.createCardToken({
          cardNumber: $('#cardNumber').val(),
          brand: $('#cardBrand').val(),
          cvv: $('#cardVerification').val(),
          expirationMonth: $('#validMonth').val(),
          expirationYear: $('#validYear').val(),
          success: function(response)
          {
            $('#tokenCard').val(response.card.token);
            globalTokenCardValue = response.card.token;

          }
      });
  }
  
  //Get card hash
  $("#submitPayment").on('submit',function(event){
      event.preventDefault();

      PagSeguroDirectPayment.onSenderHashReady(function(response){
        $("#hashCard").val(response.senderHash);

        itemUrl = "checkout_response.php?tamanho="+globalSize+"&cor="+globalColor+"&selectedImage="+globalImageSelected+"&codigo="+value;

        if(response.status=='success'){
            $("#submitPayment").trigger('submit');
            //window.open(itemUrl,'_blank');
        }
     });
  });
};