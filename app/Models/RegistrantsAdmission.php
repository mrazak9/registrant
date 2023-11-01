<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistrantsAdmission extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'registrants_admissions';

    protected $fillable = [
        'date', 'year', 'phase', 'registrantId', 'price',
        'note', 'scholarshipId', 'employee_id', 'method', 'createdBy', 'updatedBy',
    ];

    public function registrant()
    {
        return $this->belongsTo(Registrant::class, 'registrantId');
    }

    public function registrantMajors()
    {
        return $this->hasMany(RegistrantsMajor::class, 'registrantAdmissionId');
    }
}
