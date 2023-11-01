<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistrantsMajor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'registrants_majors';

    protected $fillable = [
        'registrantId', 'majorId', 'type', 'graduated', 'registered',
        'registrantAdmissionId', 'cost', 'createdBy', 'updatedBy',
    ];

    public function registrant()
    {
        return $this->belongsTo(Registrant::class, 'registrantId');
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'majorId');
    }

    public function admission()
    {
        return $this->belongsTo(RegistrantsAdmission::class, 'registrantAdmissionId');
    }
}
