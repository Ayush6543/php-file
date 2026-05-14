<?php

namespace App\Models;

use App\Http\Controllers\CompanyController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class employee extends Model
{
    use HasFactory;
    protected $table='employee';

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(role::class,);
    }
    
    
}
