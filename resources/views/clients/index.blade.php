<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
<link rel="stylesheet" href="{{ URL::asset('css\bootstrap.min.css') }}" />

<style>
    /* Add a black background color to the top navigation */

.topnav {
    overflow: hidden;
    transition: 0.2s;
}


/* Style the links inside the navigation bar */

.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}


/* Add an active class to highlight the current page */

.active {
    background-color: #2150ad;
    color: white;
    transition: 0.2s;
}


/* Hide the link that should open and close the topnav on small screens */

.topnav .icon {
    display: none;
}


/* Dropdown container - needed to position the dropdown content */

.dropdown {
    float: left;
    overflow: hidden;
    transition: 0.2s;
}


/* Style the dropdown button to fit inside the topnav */

.dropdown .dropbtn {
    font-size: 17px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
    transition: 0.2s;
}


/* Style the dropdown content (hidden by default) */

.dropdown-content {
    display: none;
    position: absolute;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    transition: 0.2s;
}


/* Style the links inside the dropdown */

.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    background-color: black;
    opacity: 0.9;
    transition: 0.2s;
}


/* Add a dark background on topnav links and the dropdown button on hover */

.topnav a:hover,
.dropdown:hover .dropbtn {
    background-color: #3869c9;
    transition: 0.2s;
    color: white;
}


/* Add a grey background to dropdown links on hover */

.dropdown-content a:hover {
    background-color: #3869c9;
    transition: 0.2s;
    color: white;
}


/* Show the dropdown menu when the user moves the mouse over the dropdown button */

.dropdown:hover .dropdown-content {
    display: block;
}


/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */

@media screen and (max-width: 600px) {
    .topnav a:not(:first-child),
    .dropdown .dropbtn {
        display: none;
    }
    .topnav a.icon {
        float: right;
        display: block;
    }
}


/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */

@media screen and (max-width: 600px) {
    .topnav.responsive {
        position: relative;
    }
    .topnav.responsive a.icon {
        position: absolute;
        right: 0;
        top: 0;
    }
    .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
    }
    .topnav.responsive .dropdown {
        float: none;
    }
    .topnav.responsive .dropdown-content {
        position: relative;
    }
    .topnav.responsive .dropdown .dropbtn {
        display: block;
        width: 100%;
        text-align: left;
    }
}
</style>

<div class="topnav" id="myTopnav">
<a href="{{ route('rendezvous.index') }}">Rendez-vous</a>
        <a href="{{ route('commercials.index') }}">Commerciaux</a>
        <a href="{{ route('prospects.index') }}">Prospects</a>
        <a href="{{ route('clients.index') }}" class="active">Clients</a>
        <a href="{{ route('achats.index') }}">Achats</a>
        <a href="{{ route('produits.index') }}">Produits</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a><br><br>
    </div>

    <br>

<center>
    <h1>Liste des clients</h1><br>
<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Nom</th>
<th>Prénom</th>
<th>Adresse</th>
<th>Code postal</th>
<th>Ville</th>
<th>Mail</th>
<th>Téléphone</th>
<th width="280px">Action</th>
</tr>

@foreach ($data as $key => $value)
<tr>
<td>{{ $value->IdCli }}</td>
<td>{{ $value->NomCli }}</td>
<td>{{ $value->PreCli }}</td>
<td>{{ $value->AdrCli }}</td>
<td>{{ $value->CpCli }}</td>
<td>{{ $value->VilleCli }}</td>
<td>{{ $value->MailCli }}</td>
<td>{{ $value->TelCli }}</td>
<td>
<form action="{{ route('clients.destroy',$value->IdCli) }}" method="POST">
<a class="btn btn-info button button2 button_action" href="{{ route('clients.show', $value->IdCli) }}"><i class="fas fa-user-tag"></i></a>
<a class="btn btn-primary button button3 button_action" href="{{ route('clients.edit', $value->IdCli) }}"><i class="fas fa-pen"></i></a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger button button1 button_action"><i class="fas fa-trash"></i></button>
</form>
</td>
</tr>
@endforeach
<form action="/search-client" method="get">
<input type="search" id="search" style="border-radius: 4px; margin-right: 6px; width: 30%; background-color: #D1D5E4; padding-top: 3px; padding-bottom: 3px; padding-left: 12px; border: none;" placeholder="Rechercher..." name="search" required>
    <span>
        <button type="Submit" class="button button2" style="border-radius: 4px; padding-top: 7px; padding-bottom: 7px; padding-left: 12px; padding-right: 12px; transition: 0.2s;"><i class="fas fa-search"></i></button>
        @if (isset($search))
            <a href="/clients" class="btn btn-sm btn-default">{{ $search }}<span id="close" style="margin-left: 6px;"><i class="fas fa-times"></i></span></a>
        @endif
    </span>
</form>
<br><br><br>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
</table>
</center>
<div class="d-felx justify-content-center">
{{ $data->links() }}
<a class="btn btn-primary button button3 button_bottom" href="{{ route('clients.create') }}"><i class="fas fa-plus"></i> Ajouter un nouveau client</a>
</div>

<style>
table, th, td {
  font-family: arial;
  color: white;
  text-align: center;
  vertical-align: middle;
}

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

.button_action {width: 30%; margin-left: 5px;}

.button_bottom { margin-left: 5px; padding-left: -5px;}

html {
    font-family: arial;
}

#close {
    width: 25px;
    Height: 25px;
    border-radius:50%;
    color:white;
    background:#ad2121;
    display: inline-block;
    padding-top: 6px;
}

#close:hover {background-color: #cc3b3b;}
</style>