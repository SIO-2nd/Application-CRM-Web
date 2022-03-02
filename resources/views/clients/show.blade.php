<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
<link rel="stylesheet" href="{{ URL::asset('css\bootstrap.min.css') }}" />

<br><br>
<center>
<h1>Informations du client</h1><br>
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
{{ $client->IdCli }}
</div>
<br>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nom :</strong>
{{ $client->NomCli }}
</div>
<br>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Prénom :</strong>
{{ $client->PreCli }}
</div>
<br>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Adresse :</strong>
{{ $client->AdrCli }}
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Code postal :</strong>
{{ $client->CpCli }}
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Ville :</strong>
{{ $client->VilleCli }}
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Mail :</strong>
{{ $client->MailCli }}
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Téléphone :</strong>
{{ $client->TelCli }}
</div>
<br><br>
<div class="pull-right">
<a class="btn btn-primary button button2" href="{{ route('clients.index') }}"><i class="fas fa-reply"></i> Retour</a>
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