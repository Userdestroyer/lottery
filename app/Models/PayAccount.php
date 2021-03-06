<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayAccount extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function drawType() {
        return $this->belongsTo(DrawType::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

    protected $fillable = [
        'user_id',
        'draw_type_id',
        'company_id',
        'description',
        'balance',
    ];
}
