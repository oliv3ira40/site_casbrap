<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Model;

class RegistrationUpdate extends Model
{
    protected $table = 'registration_update';
    protected $fillable = [
        "user_id",
        "cpf",
        "registration",
        "zip_code",
        "country",
        "uf",
        "city",
        "district",
        "street_type",
        "public_place",
        "number",
        "complement",
        "phone",
        "cell_phone",
        "commercial_phone",
        "email",
    ];
}
