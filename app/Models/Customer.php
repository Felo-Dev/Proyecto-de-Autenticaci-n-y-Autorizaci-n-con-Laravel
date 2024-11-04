<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = ['dni', 'id_reg', 'id_com'];
    protected $fillable = ['dni', 'id_reg', 'id_com', 'email', 'name', 'last_name', 'address', 'date_reg', 'status'];

    public function region()
    {
        return $this->belongsTo(Region::class, 'id_reg', 'id_reg');
    }

    public function communes()
    {
        return $this->belongsToMany(Commune::class, 'customers_communes', 'dni', 'id_com')->withPivot('id_reg');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'A');
    }

    public function scopeDeleted($query)
    {
        return $query->where('status', 'trash');
    }
}