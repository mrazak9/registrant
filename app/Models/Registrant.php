<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registrant extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'registrants';

    protected $fillable = [
        'code', 'peopleId', 'year', 'phase', 'donation',
        'createdBy', 'updatedBy', 'admitted', 'admittedDate',
        'status', 'route', 'type', 'registrationDueDate',
        'referalId', 'source', 'eagerProceed', 'virtualAccount',
        'isAlumniSibling', 'isPartisipantTraining', 'pu', 'isPmdk',
    ];

    public function people()
    {
        return $this->belongsTo(People::class, 'peopleId');
    }

    public function admissions()
    {
        return $this->hasMany(RegistrantsAdmission::class, 'registrantId');
    }

    public function grades()
    {
        return $this->hasMany(RegistrantsGrade::class, 'registrantId');
    }

    public function majors()
    {
        return $this->hasMany(RegistrantsMajor::class, 'registrantId');
    }

    public function tests()
    {
        return $this->hasMany(RegistrantsTest::class, 'registrantId');
    }
}
