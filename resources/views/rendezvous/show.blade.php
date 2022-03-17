<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
<link rel="stylesheet" href="{{ URL::asset('css\bootstrap.min.css') }}" />

<br><br>
<center>
<h1>Informations du Rendez-vous</h1><br>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>ID :</strong>
{{ $rendez_vous->IdRdv }}
</div>
<br>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Date :</strong>
{{ $rendez_vous->DateRdv }}
</div>
<br>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>ID Client :</strong>
{{ $rendez_vous->IdCli }}
</div>
<br>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>ID Prospect :</strong>
{{ $rendez_vous->IdPro }}
</div>
<br>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>ID Commercial :</strong>
{{ $rendez_vous->IdCom }}
</div>
<br><br>
<div class="pull-right">
<a class="btn btn-primary button button2" href="{{ route('rendezvous.index') }}"><i class="fas fa-reply"></i> Retour</a>
</div>
</center>

<style>
.button {
  font-family: arial;
  border: none;
  cursor: pointer;
}

.button1 {background-color: #ad2121;}
.button2 {background-color: #2150ad;}
.button3 {background-color: #21ad3d;}

.button1:hover {background-color: #cc3b3b;}
.button2:hover {background-color: #3869c9;}
.button3:hover {background-color: #37bf52;}

html {
    font-family: arial;
}
</style>