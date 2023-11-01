<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PeopleAddress extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'people_addresses';

    protected $fillable = [
        'peopleId', 'name', 'street', 'city', 'postalCode',
        'province', 'village', 'district', 'createdBy', 'updatedBy',
    ];

    public function people()
    {
        return $this->belongsTo(People::class, 'peopleId');
    }
}
