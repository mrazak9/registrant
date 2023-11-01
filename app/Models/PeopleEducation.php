<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PeopleEducation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'people_educations';

    protected $fillable = [
        'peopleId', 'level', 'name', 'year', 'status',
        'gradeTotal', 'gradeDivider', 'major', 'city', 'postalCode',
        'patron', 'note', 'certificate', 'skhun', 'createdBy', 'updatedBy',
    ];

    public function people()
    {
        return $this->belongsTo(People::class, 'peopleId');
    }
}
