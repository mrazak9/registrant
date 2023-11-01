<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistrantsGrade extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'registrants_grades';

    protected $fillable = [
        'registrantId', 'name', 'value', 'createdBy', 'updatedBy',
    ];

    public function registrant()
    {
        return $this->belongsTo(Registrant::class, 'registrantId');
    }
}
