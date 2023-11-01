<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'people';

    protected $fillable = [
        'name',
        'nickname',
        'preTitle',
        'postTitle',
        'gender',
        'birthDate',
        'birthPlace',
        'nationality',
        'religion',
        'matrimony',
        'bornSequence',
        'siblingTotal',
        'createdBy',
        'updatedBy',
        'identity_number',
    ];

    public function registrants()
    {
        return $this->hasMany(Registrant::class, 'peopleId');
    }

    public function addresses()
    {
        return $this->hasMany(PeopleAddress::class, 'peopleId');
    }

    public function educations()
    {
        return $this->hasMany(PeopleEducation::class, 'peopleId');
    }
}
