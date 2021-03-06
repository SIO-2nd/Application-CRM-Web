<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    use HasFactory;

    public function rendezvous() {
        return $this->belongsTo(App\Commercial);
        return $this->belongsTo(App\Prospect);
    }

    protected $fillable = [
        'DateRdv', 'IdCli', 'IdPro', 'IdCommercial'
    ];
}
