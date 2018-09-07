@extends('layout/base')

@section('title')
  Project-E
@endsection

@section('content')

	@component('layout/navbar')  
  @endcomponent

  <section class="section">
  	<div class="columns">
  		<div class="column">
  			<div class="box">
  				<figure class="image is-4by5">
  					<img src="http://via.placeholder.com/200x300">
  				</figure>
  			</div>
  		</div>
  		<div class="column is-6">
  			<h1 class="title has-text-success is-1">Product X</h1>
  			<p class="subtitle has-text-warning is-7">
  				<i class="fa fa-star"></i>
  				<i class="fa fa-star"></i>
  				<i class="fa fa-star"></i>
  				<i class="fa fa-star"></i>
  				<i class="fa fa-star"></i>
  			</p>
  			<h1 class="title">Rp 50.000</h1>
  			<p>
  				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  			</p>
  			<hr/>
				<h4 class="subtitle is-6">Ketentuan Produk</h4>
				<ul>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Lorem ipsum dolor sit amet</li>
				</ul>
  		</div>
  		<div class="column is-3">
  			<div class="box">
  				<h3 class="title has-text-grey has-text-centered is-6">Order Sekarang</h3>
            <form>
                <div class="field is-horizontal">
                		<div class="field-label is-normal">
                			<label>Qty</label>
                		</div>
                		<div class="field-body">
                			<div class="field">
		                    <div class="control">
		                        <input class="input" type="email" placeholder="Jumlah Barang" autofocus="">
		                    </div>
                			</div>
                		</div>
                </div>
                <div class="field is-horizontal">
                		<div class="field-label is-normal">
                			<label>Opsi A</label>
                		</div>
                		<div class="field-body">
                			<div class="field">
		                    <div class="control">
		                        <input class="input" type="email" placeholder="Jumlah Barang" autofocus="">
		                    </div>
                			</div>
                		</div>
                </div>
                <div class="field is-horizontal">
                		<div class="field-label is-normal">
                			<label>Opsi A</label>
                		</div>
                		<div class="field-body">
                			<div class="field">
		                    <div class="control">
		                        <input class="input" type="email" placeholder="Jumlah Barang" autofocus="">
		                    </div>
                			</div>
                		</div>
                </div>
                <div class="field">
                	<button class="button is-large is-danger is-info is-fullwidth has-text-grey">BELI SEKARANG</button>
                </div>
            </form>
        </div>
  			</div>
  		</div>
  	</div>
  </section>

@endsection