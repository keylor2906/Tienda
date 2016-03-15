@extends('templates.website')

@section('content')

<section id="section-ingresar">

  <div class="row">

  <form class="col s12">

  <div class="row">
    <div class="input-field col s6 push-s3">
      <i class="material-icons prefix fa fa-user"></i>
      <input  id="user_name" type="text" class="validate">
      <label class="active" for="user_name">Usuario</label>
    </div>
  </div>


  <div class="row">
    <div class="input-field col s6 push-s3">
    <i class="material-icons prefix fa fa-key"></i>
      <input id="password" type="password" class="validate">
      <label class="active" for="password">Password</label>
    </div>
  </div>
        
      <div class="row">
        <div class="col s2 push-s5">
        <button id="btn-ingresar" class="btn waves-effect waves-light" type="submit" name="btn-ingresar">Ingresar
          <i class="material-icons right fa fa-sign-in"></i>
        </button>
        </div>
      </div>   
  </form>
  </div> 
</section>

@stop