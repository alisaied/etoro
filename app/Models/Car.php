<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    
    protected $primaryKey='id';

    protected $fillable=['name','description','founded'];

    //protected $hidden = ['created_at'];

    //protected $visible = ['name','description','founded']; // only these columns will be shown

    public $timestamps= true;

    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    public function engines()
    {
        return $this->hasManyThrough(
             Engine::class,
             CarModel::class,
             'car_id', // f.k on carModel table
             'model_id' // f.k on engine table
            );
    }

    // Define has one relationship 
    public function productionDate()
    {
        return $this->HasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',   // foreign CarModels
            'model_id'  // foreign CarProductionDates
        );

    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
