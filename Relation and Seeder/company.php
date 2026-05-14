<?php

namespace App\Models;

use App\Http\Controllers\EmployeeController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class company extends Model
{
    use HasFactory;
    protected $table='company';

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class);

    }
}
