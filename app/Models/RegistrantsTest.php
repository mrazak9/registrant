<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistrantsTest extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'registrants_tests';

    protected $fillable = [
        'registrantId', 'price', 'method', 'note', 'employee_id', 'date', 'createdBy', 'updatedBy',
    ];

    public function registrant()
    {
        return $this->belongsTo(Registrant::class, 'registrantId');
    }
}
