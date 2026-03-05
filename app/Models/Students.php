<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $connections = 'mysql';
    protected $table = 'students';

    const SEX_MALE = 'masculino';
    const SEX_FEMALE = 'feminino';
    const SEX_OTHER = 'outro';


    protected $fillable = [
        "id",
        "name",
        "age",
        "sex",
        "email",
        "phone",
        "active",
        "deleted",
        "created_at",
        "updated_at",
    ];

    public static function getStudents($student_id) 
    {
        return self::where(['id' => $student_id])->first();
    }

    protected $hidden = [];
}
