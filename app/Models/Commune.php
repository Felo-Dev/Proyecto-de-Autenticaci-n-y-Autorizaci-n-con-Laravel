<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_com';
    protected $fillable = ['id_reg', 'id_com', 'description'];

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customers_communes', 'id_com', 'dni')->withPivot('id_reg', 'status');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'id_reg', 'id_reg');
    }
}