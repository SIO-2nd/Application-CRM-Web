<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendez_vous extends Model
{
    use HasFactory;

    public function Client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function Commercial()
    {
        return $this->belongsTo('App\Models\Commercial');
    }

    public function Prospect() {
        return $this->belongsTo('App\Models\Prospect');        
    }

    protected $fillable = [
        'DateRdv', 'IdCli', 'IdPro', 'IdCom'
    ];

    protected $primaryKey = 'IdRdv';

    protected $table = 'rendez_vous';

}
