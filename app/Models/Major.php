<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Major extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'majors';

    protected $fillable = [
        'name', 'abbreviation', 'level', 'lastStudentCode', 'facultyId',
        'registrantCode', 'studentCode', 'type', 'color', 'status',
        'cost', 'imprest', 'lastRegistrantOnlineCode', 'lastProfessionalStudentCode',
        'createdBy', 'updatedBy',
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'facultyId');
    }

    public function registrantMajor()
    {
        return $this->hasMany(RegistrantsMajor::class, 'majorId');
    }
}
