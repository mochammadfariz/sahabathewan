@extends('master')
@section('content')
<section class="header-main shadow">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-3 col-sm-4">
	<div class="brand-wrap">
	
	</div> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg-6 col-sm-8">
			<form action="#" class="search-wrap">
				<div class="input-group w-100">
				    <input type="text" class="form-control" style="width:40%;" placeholder="Search">
				    <select class="custom-select" name="category_name">
							<option value="">Semua Hewan</option><option value="codex">Anjing</option>
							<option value="comments">Kucing</option>
					</select>
				    <div class="input-group-append">
				      <button class="btn btn-primary" type="submit">
				        <i class="fas fa-search"></i>
				      </button>
				    </div>
			    </div>
			</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
	<div class="col-lg-3 col-md-12">
		
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section>


<section class="section-content bg padding-y">
<div class="container">

<div class="row">
	<aside class="col-sm-3">

<div class="card card-filter">

<article class="card-group-item">
		<header class="card-header">
			<a class="" >
				<h6 class="title">Komunitas of the Month  <img width="15%" height="auto" src="asset/img/fotokomunitas/piala2.png" alt=""></h6>
				
			</a>
		</header>
		<div >
			<div class="card-body">
				
				<ul class="list-unstyled list-lg">
					<li> <img width="10%" height="auto" src="asset/img/fotokomunitas/emas.png" alt=""><a class="ml-3" href="/detailkomunitas">Djaboers Cat <span class="float-right badge badge-light round">42</span> </a></li>
					<li><img width="10%" height="auto" src="asset/img/fotokomunitas/perak.png" alt=""> <a class="ml-3" href="#">Anggora Bekasi  <span class="float-right badge badge-light round">30</span>  </a></li>
					<li><img width="10%" height="auto" src="asset/img/fotokomunitas/perunggu.png" alt=""> <a class="ml-3" href="#">Rottweiler Depok <span class="float-right badge badge-light round">12</span>  </a></li>
				</ul>  
			</div> <!-- card-body.// -->
		</div> <!-- collapse .// -->
	</article> <!-- card-group-item.// -->

	<article class="card-group-item">
		<header class="card-header">
			<a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapse22">
				<i class="icon-action fa fa-chevron-down"></i>
				<h6 class="title">Berdasarkan Jenis Hewan</h6>
			</a>
		</header>
		<div style="" class="filter-content collapse show" id="collapse22">
			<div class="card-body">
				<form class="pb-3">
				<div class="input-group">
				  <input class="form-control" placeholder="Search" type="text">
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
				  </div>
				</div>
				</form>

				<ul class="list-unstyled list-lg">
					<li><a href="#">Pudel <span class="float-right badge badge-light round">142</span> </a></li>
					<li><a href="#">Anggora  <span class="float-right badge badge-light round">3</span>  </a></li>
					<li><a href="#">Rottweiler <span class="float-right badge badge-light round">32</span>  </a></li>
					<li><a href="#">Kucing Singapura <span class="float-right badge badge-light round">12</span>  </a></li>
				</ul>  
			</div> <!-- card-body.// -->
		</div> <!-- collapse .// -->
	</article> <!-- card-group-item.// -->
	
	<article class="card-group-item">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse44">
				<i class="icon-action fa fa-chevron-down"></i>
				<h6 class="title">Berdasarkan Lokasi </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse44">
			<div class="card-body">
			<form>
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">5</span>
				    Jakarta Utara
				  </span>
				</label>  <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">13</span>
				    Jakarta Timur
				  </span>
				</label> <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">12</span>
				    Jakarta Selatan
				  </span>
				</label>  <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">32</span>
				    Jakarta Barat
				  </span>
				</label>  <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">32</span>
				    Jakarta Pusat
				  </span>
				</label>  <!-- form-check.// -->
			</form>
			</div> <!-- card-body.// -->
		</div> <!-- collapse .// -->
	</article> <!-- card-group-item.// -->
</div> <!-- card.// -->


	</aside> <!-- col.// -->
	<main class="col-sm-9">


<article class="card card-product">
	<div class="card-body">
	<div class="row">
		<aside class="col-sm-3">
			<div class="img-wrap"><img src="asset/img/fotokomunitas/komunitassemua.jpg"></div>
		</aside> <!-- col.// -->
		<article class="col-sm-6">
				<h4 class="title"> AnimalRescue </h4>
				<div class="rating-wrap  mb-2">
					<ul class="rating-stars">
						<li style="width:80%" class="stars-active"> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> 
						</li>
						<li>
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> 
						</li>
					</ul>
					<div class="label-rating">132 reviews</div>
					<div class="label-rating">154 selesai ditangani </div>
				</div> <!-- rating-wrap.// -->
				<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
				<dl class="dlist-align">
				  <dt>Lokasi</dt>
				  <dd>Jakrta Utara</dd>
				</dl>  <!-- item-property-hor .// -->
				<dl class="dlist-align">
				  <dt>Jenis</dt>
				  <dd>Pitbull, Kucing Persia, Rottweiler</dd>
				</dl>  <!-- item-property-hor .// -->
				<dl class="dlist-align">
				  <dt>Komunitas</dt>
				  <dd>Semua Hewan</dd>
				</dl>  <!-- item-property-hor .// -->
				
			
		</article> <!-- col.// -->
		<aside class="col-sm-3 border-left">
			<div class="action-wrap">
				<div class="price-wrap h4">
					
				</div> <!-- info-price-detail // -->
			
				<br>
				<p>
					<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#gabung"> Gabung </a>
					<a href="#" class="btn btn-secondary"> Detail  </a>
				</p>
				<a href="#"><i class="fa fa-heart"></i> Beri Rating</a>
			</div> <!-- action-wrap.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</article> <!-- card product .// -->

<article class="card card-product">
	<div class="card-body">
	<div class="row">
		<aside class="col-sm-3">
			<div class="img-wrap"><img src="asset/img/fotokomunitas/defaultuser.jpg"></div>
		</aside> <!-- col.// -->
		<article class="col-sm-6">
				<h4 class="title"> Cat Lover Cimanggis </h4>
				<div class="rating-wrap  mb-2">
					<ul class="rating-stars">
						<li style="width:80%" class="stars-active"> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> 
						</li>
						<li>
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> 
						</li>
					</ul>
					<div class="label-rating">32 reviews</div>
					<div class="label-rating">12 selesai ditangani </div>
				</div> <!-- rating-wrap.// -->
				<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
				<dl class="dlist-align">
				  <dt>Lokasi</dt>
				  <dd>Jakrta Timur</dd>
				</dl>  <!-- item-property-hor .// -->
				<dl class="dlist-align">
				  <dt>Jenis</dt>
				  <dd>Kucing Singapura, Kucing Persia, Anggora</dd>
				</dl>  <!-- item-property-hor .// -->
				<dl class="dlist-align">
				  <dt>Komunitas</dt>
				  <dd>Semua Hewan</dd>
				</dl>  <!-- item-property-hor .// -->
				
			
		</article> <!-- col.// -->
		<aside class="col-sm-3 border-left">
			<div class="action-wrap">
				<div class="price-wrap h4">
					
				</div> <!-- info-price-detail // -->
			
				<br>
				<p>
					<a href="#" class="btn btn-primary"> Gabung </a>
					<a href="#" class="btn btn-secondary"> Detail  </a>
				</p>
				<a href="#"><i class="fa fa-heart"></i> Beri Rating</a>
			</div> <!-- action-wrap.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</article> <!-- card product .// -->

	</main> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>

<!-- Modal Gabung -->
<!-- Modal -->
<div class="modal fade" id="gabung" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form gabung komunitas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="inputAddress">Nomor Telepon</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Alasan ingin bergabung dengan komunitas ini</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection