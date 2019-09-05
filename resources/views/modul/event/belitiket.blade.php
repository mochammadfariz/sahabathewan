@extends('master')
@section('content')

<div class="container">
<div class="row">
  <div class="col-md-12 " style="margin-top:160px;">
  <h4 class="font-weight-bold text-center" >Form Pemesanan Tiket</h4>
  <center><hr style="height:3px;border:none;color:#333;background-color:#666;" width="200" class="text-center"></center>
   
   <br>
  <form>
			<div class="form-group">
				<label for="inputAddress">Nama Lengkap</label>
				<input type="text" class="form-control" id="inputAddress" placeholder="Nama Lengkap">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Email address</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			</div>
			<div class="form-group">
				<label for="inputAddress">Nomor Telepon</label>
				<input type="text" class="form-control" id="inputAddress" placeholder="+62878880000">
			</div>
		

        <div class=" mt-3"><p>Jumlah Tiket</p> 
      
        
       
            <!-- mulai code plus minus -->
              <div class="quantity buttons_added">
                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
              </div>
        




    
       
		</form>
  </div>
  </div>
   </div>

   <!-- Pembayaran -->
 <div class="container mt-4">
    <div class="row">
        <div class="col-xs-12 col-md-4 offset-md-4">
            <div class="card ">
                <div class="card-header">
                  <h3 class="text-xs-center">Detail Pembayaran </h3>
                    <div class="row">
                        
                        <br>
                        <img height="30px" width ="auto"class=" ml-3" src="asset/img/event/bank/bca.png">
                        <img height="30px" width ="auto"class=" ml-2" src="asset/img/event/bank/mandiri.png">
                        <img height="30px" width ="auto"class=" ml-2" src="asset/img/event/bank/permata.png">
                        <img height="30px" width ="auto"class=" ml-2" src="asset/img/event/bank/bnisyariah.png">
                    </div>
                </div>
                <div class="card-block">
                    <form role="form">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group ml-4">
                                    <label>CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Valid Card Number" />
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-1 mr-1">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="tel" class="form-control" placeholder="MM / YY" />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 float-xs-right">
                                <div class="form-group">
                                    <label>CV CODE</label>
                                    <input type="tel" class="form-control" placeholder="CVC" />
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD OWNER</label>
                                    <input type="text" class="form-control" placeholder="Card Owner Names" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                  <div class="mt-2">
 <!-- form persetujuan syyarat dan ketentuan -->
			<form class="mt-4"action="" class="typecast-form simple-register">
    <p class="simple-reg-terms">
    <label>
      <span class="checkbox"><input title="Please tick" name="accept_terms" type="checkbox" class="required" id="js-accept-terms" /></span> <span title="Please tick">Saya menyetujui </span> <a target="_blank" href="#syaratevent" data-toggle="modal" title="Opens in a new tab">syarat&ketentuan</a> 
  </p>
  </form>
  <!-- Akhir form persetujuan syyarat dan ketentuan -->

</div>
                    <div class="row ml-3">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block">Proses Pembayaran</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	

   <!-- Akhir pembayaran -->




<!-- Modal syarat & ketentuan -->
<!-- Modal license-->
<div class="modal fade" id="syaratevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Purbasari memiliki enam orang kakak perempuan yaitu Purbararang, Purbadewata, Purbaendah, Purbakancana, Purbamanik dan Purbaleuih.

Purbasari sangat baik sifat dan kelakuannya. Dia lembut, manis budi, ddan suka menolong.

Siapapun juga yang membutuhkan pertolongan dengan senang hati dibantunya.

Selain hatinya yang elok, Purbasari juga memiliki paras yang cantik dan rupawan, setiap orang yang melihatnya pasti jatuh hati pada pandangan pertama.

Sayangnya kecantikan dan kebaikan hati purbasari tidak menurun dari kakak sulungnya Purbararang yang berperangai sangat buruk.

Walaupun cantik Purbararang sangat kasar, sombong, kejam dan iri hati terhadap siapapun juga.
 Purbasari memiliki enam orang kakak perempuan yaitu Purbararang, Purbadewata, Purbaendah, Purbakancana, Purbamanik dan Purbaleuih.

Purbasari sangat baik sifat dan kelakuannya. Dia lembut, manis budi, ddan suka menolong.

Siapapun juga yang membutuhkan pertolongan dengan senang hati dibantunya.

Selain hatinya yang elok, Purbasari juga memiliki paras yang cantik dan rupawan, setiap orang yang melihatnya pasti jatuh hati pada pandangan pertama.

Sayangnya kecantikan dan kebaikan hati purbasari tidak menurun dari kakak sulungnya Purbararang yang berperangai sangat buruk.

Walaupun cantik Purbararang sangat kasar, sombong, kejam dan iri hati terhadap siapapun juga.
 Purbasari memiliki enam orang kakak perempuan yaitu Purbararang, Purbadewata, Purbaendah, Purbakancana, Purbamanik dan Purbaleuih.

Purbasari sangat baik sifat dan kelakuannya. Dia lembut, manis budi, ddan suka menolong.

Siapapun juga yang membutuhkan pertolongan dengan senang hati dibantunya.

Selain hatinya yang elok, Purbasari juga memiliki paras yang cantik dan rupawan, setiap orang yang melihatnya pasti jatuh hati pada pandangan pertama.

Sayangnya kecantikan dan kebaikan hati purbasari tidak menurun dari kakak sulungnya Purbararang yang berperangai sangat buruk.

Walaupun cantik Purbararang sangat kasar, sombong, kejam dan iri hati terhadap siapapun juga.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- akhir Modal license-->
<!-- Akhir modal -->

<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script>
	function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}
String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});
  
</script>

<!-- java script pembayaran -->
<script >
var $form = $('#payment-form');
$form.on('submit', payWithStripe);

/* If you're using Stripe for payments */
function payWithStripe(e) {
    e.preventDefault();

    /* Visual feedback */
    $form.find('[type=submit]').html('Validating <i class="fa fa-spinner fa-pulse"></i>');

    var PublishableKey = 'pk_test_b1qXXwATmiaA1VDJ1mOVVO1p'; // Replace with your API publishable key
    Stripe.setPublishableKey(PublishableKey);
    
    /* Create token */
    var expiry = $form.find('[name=cardExpiry]').payment('cardExpiryVal');
    var ccData = {
        number: $form.find('[name=cardNumber]').val().replace(/\s/g,''),
        cvc: $form.find('[name=cardCVC]').val(),
        exp_month: expiry.month, 
        exp_year: expiry.year
    };
    
    Stripe.card.createToken(ccData, function stripeResponseHandler(status, response) {
        if (response.error) {
            /* Visual feedback */
            $form.find('[type=submit]').html('Try again');
            /* Show Stripe errors on the form */
            $form.find('.payment-errors').text(response.error.message);
            $form.find('.payment-errors').closest('.row').show();
        } else {
            /* Visual feedback */
            $form.find('[type=submit]').html('Processing <i class="fa fa-spinner fa-pulse"></i>');
            /* Hide Stripe errors on the form */
            $form.find('.payment-errors').closest('.row').hide();
            $form.find('.payment-errors').text("");
            // response contains id and card, which contains additional card details            
            console.log(response.id);
            console.log(response.card);
            var token = response.id;
            // AJAX - you would send 'token' to your server here.
            $.post('/account/stripe_card_token', {
                    token: token
                })
                // Assign handlers immediately after making the request,
                .done(function(data, textStatus, jqXHR) {
                    $form.find('[type=submit]').html('Payment successful <i class="fa fa-check"></i>').prop('disabled', true);
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    $form.find('[type=submit]').html('There was a problem').removeClass('success').addClass('error');
                    /* Show Stripe errors on the form */
                    $form.find('.payment-errors').text('Try refreshing the page and trying again.');
                    $form.find('.payment-errors').closest('.row').show();
                });
        }
    });
}
/* Fancy restrictive input formatting via jQuery.payment library*/
$('input[name=cardNumber]').payment('formatCardNumber');
$('input[name=cardCVC]').payment('formatCardCVC');
$('input[name=cardExpiry').payment('formatCardExpiry');

/* Form validation using Stripe client-side validation helpers */
jQuery.validator.addMethod("cardNumber", function(value, element) {
    return this.optional(element) || Stripe.card.validateCardNumber(value);
}, "Please specify a valid credit card number.");

jQuery.validator.addMethod("cardExpiry", function(value, element) {    
    /* Parsing month/year uses jQuery.payment library */
    value = $.payment.cardExpiryVal(value);
    return this.optional(element) || Stripe.card.validateExpiry(value.month, value.year);
}, "Invalid expiration date.");

jQuery.validator.addMethod("cardCVC", function(value, element) {
    return this.optional(element) || Stripe.card.validateCVC(value);
}, "Invalid CVC.");

validator = $form.validate({
    rules: {
        cardNumber: {
            required: true,
            cardNumber: true            
        },
        cardExpiry: {
            required: true,
            cardExpiry: true
        },
        cardCVC: {
            required: true,
            cardCVC: true
        }
    },
    highlight: function(element) {
        $(element).closest('.form-control').removeClass('success').addClass('error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-control').removeClass('error').addClass('success');
    },
    errorPlacement: function(error, element) {
        $(element).closest('.form-group').append(error);
    }
});

paymentFormReady = function() {
    if ($form.find('[name=cardNumber]').hasClass("success") &&
        $form.find('[name=cardExpiry]').hasClass("success") &&
        $form.find('[name=cardCVC]').val().length > 1) {
        return true;
    } else {
        return false;
    }
}

$form.find('[type=submit]').prop('disabled', true);
var readyInterval = setInterval(function() {
    if (paymentFormReady()) {
        $form.find('[type=submit]').prop('disabled', false);
        clearInterval(readyInterval);
    }
}, 250);


/*
https://goo.gl/PLbrBK
*/
</script>
<!-- Akhir js pembayaran -->

@endsection
