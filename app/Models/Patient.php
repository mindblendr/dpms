<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes, HasTimestamps;
    protected $fillable = [
        'dentist_id',
        'firstname',
        'middlename',
        'lastname',
        'birthdate',
        'sex',
        'religion',
        'nationality',
        'nickname',
        'home_address',
        'home_no',
        'office_no',
        'occupation',
        'fax_no',
        'mobile_no',
        'email',
        'dental_insurance',
        'effective_date',
        'guardian',
        'guardian_occupation',
        'referrer',
        'consultation_reason',
        'previous_dentist',
        'last_visit_date',
    ];
}
