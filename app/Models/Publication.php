<?php

namespace App\Models;

use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publication extends Model
{
    use HasFactory;
    const   ID                    = "id";
    const   IDCAT                 = "idcat";
    const   TITRE                 = "titre";
    const   DATE_PUBLICATION      = "datePublication";
    const   ACTIFYN               = "actifYN";
    protected $guarded = [] ;
    public function evenement()
    {
        return $this->hasOne(Evenement::class, 'idPub');
    }
}
