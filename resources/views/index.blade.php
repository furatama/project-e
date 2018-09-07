@extends('layout/base')

@section('title')
  Project-E
@endsection

@section('content')
  
  @component('layout/navbar')  
  @endcomponent

  <section id="promo" class="section">
	  <div class="container is-fullhd">
	  	<h1 class="title">Produk List (Promoted)</h1>
      
      <div class="columns">

      	@for ($i = 1; $i <= 6; $i++)
      	<div class="column is-2">    		
			  	<div class="card">
					  <div class="card-image">
					    <figure class="image is-4by3">
					      <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
					    </figure>
					  </div>
					  <div class="card-content">
					    <div class="media">
					      <div class="media-content">
					        <p class="title is-6">Produk {{$i}}</p>
					      </div>
					    </div>
					    <div class="content">
					      Rp {{$i}}0.000
					    </div>
					  </div>
					</div>
      	</div>
      	@endfor

      </div>

	  </div>
  </section>
  <section id="promo" class="section">
	  <div class="container is-fullhd">
	  	<h1 class="title">Produk List (Promoted)</h1>
      
      <div class="columns">

      	@for ($i = 1; $i <= 6; $i++)
      	<div class="column is-2">    		
			  	<div class="card">
					  <div class="card-image">
					    <figure class="image is-4by3">
					      <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
					    </figure>
					  </div>
					  <div class="card-content">
					    <div class="media">
					      <div class="media-content">
					        <p class="title is-6">Produk {{$i}}</p>
					      </div>
					    </div>
					    <div class="content">
					      Rp {{$i}}0.000
					    </div>
					  </div>
					</div>
      	</div>
      	@endfor

      </div>

	  </div>
  </section>

  <footer class="footer has-background-primary">
	  <div class="tile is-ancestor">
		  <div class="tile is-vertical is-8">
		    <div class="tile">
		      <div class="tile is-parent is-vertical">
		        <article class="tile is-child notification is-primary">
		          <p class="title">Vertical...</p>
		          <p class="subtitle">Top tile</p>
		        </article>
		        <article class="tile is-child notification is-warning">
		          <p class="title">...tiles</p>
		          <p class="subtitle">Bottom tile</p>
		        </article>
		      </div>
		      <div class="tile is-parent">
		        <article class="tile is-child notification is-info">
		          <p class="title">Middle tile</p>
		          <p class="subtitle">With an image</p>
		          <figure class="image is-4by3">
		            <img src="https://bulma.io/images/placeholders/640x480.png">
		          </figure>
		        </article>
		      </div>
		    </div>
		    <div class="tile is-parent">
		      <article class="tile is-child notification is-danger">
		        <p class="title">Wide tile</p>
		        <p class="subtitle">Aligned with the right tile</p>
		        <div class="content">
		          <!-- Content -->
		        </div>
		      </article>
		    </div>
		  </div>
		  <div class="tile is-parent">
		    <article class="tile is-child notification is-success">
		      <div class="content">
		        <p class="title">Tall tile</p>
		        <p class="subtitle">With even more content</p>
		        <div class="content">
		          <!-- Content -->
		        </div>
		      </div>
		    </article>
		  </div>
		</div>
	</footer>

@endsection