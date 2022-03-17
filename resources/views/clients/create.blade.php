<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
<link rel="stylesheet" href="{{ URL::asset('css\bootstrap.min.css') }}" />

<br><br>

<center>
<form action="{{ route('clients.store') }}" method="POST">
@csrf
<h1>Ajouter un nouveau client</h1><br>
<div class="row">
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nom :</strong><br>
<input type="text" name="nomcli" class="form-control" placeholder="Entrez le nom du client" required>
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Prénom :</strong><br>
<input type="text" name="precli" class="form-control" placeholder="Entrez le prénom du client" required>
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Adresse :</strong><br>
<input type="text" name="adrcli" class="form-control" placeholder="Entrez l'adresse du client" required>
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Code postal :</strong><br>
<input type="text" name="cpcli" class="form-control" placeholder="Entrez le code postal du client" required>
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Ville :</strong><br>
<input type="text" name="villecli" class="form-control" placeholder="Entrez la ville du client" required>
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Mail :</strong><br>
<input type="email" name="mailcli" class="form-control" placeholder="Entrez le mail du client" required>
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Téléphone :</strong><br>
<input type="text" name="telcli" class="form-control" placeholder="Entrez le téléphone du client" required>
</div>
<br><br>
<a class="btn btn-primary button button2 button_bottom" href="{{ route('clients.index') }}"><i class="fas fa-reply"></i> Retour</a> <button type="submit" class="btn btn-danger button button3 button_bottom"><i class="fas fa-plus"></i> Ajouter</button>
</form>
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

.button_bottom { margin-left: 5px; padding-left: -5px;}

html {
    font-family: arial;
}

input[type="text"],[type="email"],[type="date"],[type="number"] {
    background-color: #D1D5E4;
    width: 20%;
    border: none;
}

select {
    background-color: #D1D5E4;
    border: none;
    border-radius: 8px;
    width: 20%;
    padding-top: 6px;
    padding-bottom: 6px;
}
</style>