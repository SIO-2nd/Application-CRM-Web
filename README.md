# Application CRM Web

<h3>Sommaire :</h3>
<li><a href="#presentation">Présentation de l'application</a></li>
<li><a href="#docs">Documentation développeur</a></li>
<li><a href="#credits">Crédits</a></li>

<h2 id="presentation">Présentation de l'application</h2>

<p>L'application CRM Web est un site internet en tant qu'interface web permettant l’ajout,<br>
la modification et la Suppression des clients, des prospects, des rendez-vous et des factures.</p>

<p>Voici son interface principale</p>

<img src="img\Interface.png"/>

<p>Elle a plusieurs menus</p>

<img src="img\Menus.png"/>

<p>Une zone d'affichage des différentes données</p>

<img src="img\Table.png"/>

<p>Ainsi que des boutons pour altérer ces données ou en ajouter de nouvelles</p>

<img src="img\Buttons.png"/>

<h2 id="docs">Documentation développeur</h2>

<p>Le site internet a été développé en langage PHP utilisant le framework Laravel<br>
à l'aide du logiciel Visual Studio Code développé par Microsoft.</p>
<p>Il possède plusieurs fichiers utilisant cette arborescence.</p>

```
📁
├─app
|   ├─Http
|   |  └─Controllers
|   |     └─ExempleController.php
|   └─Models
|      └─Exemple.php
└─database
     ├─factories
     |    └─ExempleFactory.php
     ├─migrations
     |    └─20XX_XX_XX_XXXXXX_create_exemple_table.php
     └─seeders
        └─ExempleSeeder.php
```

<p>Il récupère les informations de la base de données depuis le controller en utilisant cette méthode</p>

```
    public function index()
    {
        $data = Exemple::latest()->paginate(5);

        return view('exemple.index', compact('data'))
            ->with('i', (request()->input('page', 1) -1) *5);
    }
```

<p>Il ajoute des données dans la base de données depuis le controller en utilisant cette méthode</p>

```
    public function store(Request $request)
    {
        $request->validate([
            'Number',
            'Text',
        ]);

        Exemple::create($request->all());

        return redirect()->route('exemple.index')
                        ->with('success','Exemple ajouté avec succès');
    }
```

<p>Il modifie des données dans la base de données depuis le controller en utilisant cette méthode</p>

```
    public function update(Request $request, Exemple $exemple)
    {
        $request->validate([
            'Number',
            'Text',
        ]);


        $exemple->update($request->all());

        return redirect()->route('exemple.index')
                        ->with('success','Exemple modifié avec succès');
    }
```

<p>Il supprime des données dans la base de données depuis le controller en utilisant cette méthode</p>

```
    public function destroy(Exemple $exemple)
    {
        $exemple->delete();

        return redirect()->route('exemple.index')
                        ->with('success','Exemple supprimé avec succès');
    }
```

<h2 id="credits">Crédits</h2>

<p>L'application CRM Web a été développée par <a href="https://github.com/Str4ky">REQUISTON Timothé</a>,<br>
<a href="https://github.com/Goupil117">PEYRONNET Philippe</a> et <a href="https://github.com/mateocarciu">CARCIU Mateo</a> dans le cadre du BTS.</p>
