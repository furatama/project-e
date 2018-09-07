@extends('layout/base')

@section('title')
  Project-E
@endsection

@section('content')
  
  <section class="hero is-fullheight">
	  <div class="hero-body">
	      <div class="container has-text-left">
	          <div class="column is-4 is-offset-4">
	              <div class="box">
	              	<h3 class="title has-text-grey has-text-centered is-5">Register</h3>
	                  <form>
	                      <div class="field">
	                          <div class="control">
	                              <input class="input" type="email" placeholder="Your Email" autofocus="">
	                          </div>
	                      </div>

	                      <div class="field">
	                          <div class="control">
	                              <input class="input" type="password" placeholder="Your Password">
	                          </div>
	                      </div>
	                      <hr/>
	                      <div class="field">
	                          <div class="control">
	                              <input class="input" type="text" placeholder="Your Name">
	                          </div>
	                      </div>
	                      <div class="field">
	                          <div class="control">
	                              <input class="input" type="text" placeholder="Your Phone">
	                          </div>
	                      </div>
	                      <div class="field">
	                          <div class="control">
	                              <input class="input" type="text" placeholder="Your Address">
	                          </div>
	                      </div>
	                      <!-- <div class="field level">
	                          <label class="checkbox level-left">
									            <input type="checkbox">&nbsp;Ingat Saya
									          </label>
									          <span class="level-right">
									            <a href="../">Lupa Password</a>
									          </span>
	                      </div> -->
	                      <div class="field">
	                      	<button class="button is-block is-info is-fullwidth">Register</button>
	                      </div>
	                      <!-- <div class="field">
	                      	<button class="button is-block is-link is-fullwidth">
	                      		<div class="icon">
	                      			<i class="fa fa-facebook "></i>
	                      		</div>
	                      		Login With Facebook
	                      	</button>
	                      </div>
	                      <div class="field">
	                      	<button class="button is-block is-success is-fullwidth">
		                      	<div class="icon">
	                      			<i class="fa fa-google "></i>
	                      		</div>
	                      		Login With Google
	                      	</button>
	                      </div> -->
	                  </form>
	              </div>
	          </div>
	      </div>
	  </div>
	</section>

@endsection