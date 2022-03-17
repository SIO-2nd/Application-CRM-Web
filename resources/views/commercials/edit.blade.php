<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
<link rel="stylesheet" href="{{ URL::asset('css\bootstrap.min.css') }}" />

<br><br>

<center>
<form action="{{ route('commercials.update',$commercial->IdCom) }}" method="POST">
@csrf
@method('PUT')
<h1>Modifier le commercial</h1><br>
<div class="row">
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nom :</strong><br>
<input type="text" name="NomCom" class="form-control" value="{{ $commercial->NomCom }}" placeholder="Entrez le nom du commercial" required>
</div>
<br>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Prénom :</strong><br>
<input type="text" name="PreCom" class="form-control" value="{{ $commercial->PreCom }}" placeholder="Entrez le prénom du commercial" required>
</div>
<br>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Mail :</strong><br>
<input type="email" name="MailCom" class="form-control" value="{{ $commercial->MailCom }}" placeholder="Entrez l'adresse mail du commercial" required>
</div>
<br>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tel :</strong><br>
<input type="text" name="TelCom" class="form-control" value="{{ $commercial->TelCom }}" placeholder="Entrez le téléphone du commercial" required>
</div>
<br>
<br><br>
<a class="btn btn-primary button button2 button_botom" href="{{ route('commercials.index') }}"><i class="fas fa-reply"></i> Retour</a> <button type="submit" class="btn btn-danger button button3 button_bottom"><i class="fas fa-pen"></i> Modifier</button>
</form>
<br><br>
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