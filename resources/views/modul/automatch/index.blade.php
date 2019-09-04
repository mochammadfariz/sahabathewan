@extends('master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-7">
      
      <div style="text-align: center;">
      <img width = "80%" height ="auto" class="mt-5 " src="asset/img/automatch/connect.png" alt="">
      <form action="">
      <input class="form-control mt-4" type="text" placeholder="Masukan alamatmu disini">
          <a href="/automatch" class="btn btn-success mt-4">Cari teman ! <i class="fas fa-search-location ml-2"></i></a>
        </div>
      </form>
    </div>
    <div class="col-md-5 mt-4">
     <h4 style="margin-top:60px;"class="font-weight-bold" style="font-family:Segoe UI Symbol " style="padding-top"> Ayo temukan teman terdekatmu sekarang juga ! </h4>
     <hr style="height:3px;border:none;color:#333;background-color:#333;">
     <p class="font-weight-light">Sahabat Hewan memberikan fitur auto match owner pet untuk pecinta hewan yang ingin bermain bersama hewan peliharaanya dekat dengan orang-orang sekitarnya .Jadikan hewan mu pandai bersosialisasi  dengan hewan lainnya. Jika hewan mu masuk kategori hewan agresif jangan terlalu ambil resiko ya, please be careful with other people !


     
   
     
    
    
    </div>
  </div>
  
  
  <div class="row">
  <div class="col-md-8 offset-2" style="margin-top:160px;">
  
  </div>
  </div>

  <!-- modal cari dokter -->
  <!-- Modal -->
<div class="modal fade" id="cariteman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dokter Hewan Terdekatmu </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <div id="googleMap" style="width:100%;height:400px;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
@endsection