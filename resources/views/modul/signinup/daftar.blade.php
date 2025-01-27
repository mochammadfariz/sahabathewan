<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/daftar.css">

    <title>Hello, world!</title>
  </head>
  <body>
   <!-- MultiStep Form -->
   <form method="post" novalidate>
  <div id="msform">
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Personal Detail</li>
      <li>Buat Akun</li>
      <li>Selesai</li>
    </ul>
    <!-- fieldsets -->
      <fieldset>
      <h2 class="fs-title">Personal Detail</h2>
      <h3 class="fs-subtitle"></h3>
      <input type="text" name="flname" placeholder="Nama Lengkap" />
       <label class="" for="birthday"><p class="font-weight-light">Tanggal Lahir</p></label>
    <div class="container">
      <div class="row">
                <div class="col-4">
                   <select class="custom-select custom-select-sm">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    </select>
                </div>
                 <div class="col-4">
                   <select class="custom-select custom-select-sm">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>

                    
                    </select>
                </div>
                 <div class="col-4">
                   <select class="custom-select custom-select-sm">
                    <option selected>1990</option>
                    <option value="1">1991</option>
                    <option value="2">1992</option>
                    <option value="3">1993</option>
                    </select>
                </div>
     </div>
    </div>
    <br>
      <div class="container">
      <div class="row">
                <div class="col-6">
                    <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1"><p class="font-weight-light">Pria</p></label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2"><p class="font-weight-light">Wanita</p></label>
                    </div>
                 </div>
     </div>
    </div>
    
      <input type="text" name="phone" placeholder="+628780000000" />
     
      <input type="text" name="email" placeholder="email" />
       <input type="button" style="border-radius: 30px;" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">BUAT AKUN</h2>
      <h3 class="fs-subtitle">Buat username dan passwordmu</h3>
      <input type="text" name="username" placeholder="@username" />
      <input type="password" name="pass" placeholder="Password" />
      <input type="password" name="cpass" placeholder="Confirm Password" />
       <input type="button" style="border-radius: 30px;" name="previous" class="previous action-button" value="Previous" />
      <input type="button" style="border-radius: 30px;" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Selesai</h2>
      <h3 class="fs-subtitle">Selesaikan akunmu sekarang juga!</h3>
    <p class="font-weight-lighter">hai <b>@mochammadfariz</b> pastikan anda membaca poin-poin pada license agreement & Term of Service sebelum melakukan submit!  </p>
    <div>
    <form action="" class="typecast-form simple-register">
    <p class="simple-reg-terms">
    <label>
      <span class="checkbox"><input title="Please tick" name="accept_terms" type="checkbox" class="required" id="js-accept-terms" /></span> <span title="Please tick">Saya menyetujui </span> <a target="_blank" href="#license" data-toggle="modal" title="Opens in a new tab">end-user license agreement</a> &amp; <a target="_blank" href="#tof" data-toggle="modal" title="Opens in a new tab">terms of service</a>
    </label>
  </p>
  </form>
  </div>
      <input type="button" style="border-radius: 30px;" name="previous" class="previous action-button" value="Previous" />
      <input type="submit" style="border-radius: 30px;" name="submit" class="submit action-button" value="Submit" />
    </fieldset>
  
  </div>
</form>

<!-- /.MultiStep Form -->

<!-- Modal license-->
<div class="modal fade" id="license" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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

<!-- Modal tof-->
<div class="modal fade" id="tof" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- akhir Modal tof-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/daftar.js" type="text/javascript"></script>
  </body>
</html>