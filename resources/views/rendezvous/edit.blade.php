<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
<link rel="stylesheet" href="{{ URL::asset('css\bootstrap.min.css') }}" />

<br><br>

<center>
<form action="{{ route('rendezvous.update',$rendez_vous->IdRdv) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Date :</strong><br>
<input type="date" name="DateRdv" class="form-control" value="{{ $rende_vous->DateRdv }}" placeholder="Entrez la date" required>
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>ID du client:</strong><br>
        <select name="IdCli">
        @foreach ($datas as $key => $value)
        <option value="{{ $value->IdCli }}">{{ $value->IdCli }}</option>
        @endforeach
        </select>
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>ID du prospect :</strong><br>
        <select name="IdPro">
        @foreach ($datas as $key => $value)
        <option value="{{ $value->IdPro }}">{{ $value->IdPro }}</option>
        @endforeach
        </select>
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>ID du commercial :</strong><br>
        <select name="IdCom">
        @foreach ($datas as $key => $value)
        <option value="{{ $value->IdCom }}">{{ $value->IdCom }}</option>
        @endforeach
        </select>
</div>
<br>
<br><br>
<a class="btn btn-primary button button2 button_botom" href="{{ route('rendezvous.index') }}"><i class="fas fa-reply"></i> Retour</a> <button type="submit" class="btn btn-danger button button3 button_bottom"><i class="fas fa-pen"></i> Modifier</button>
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