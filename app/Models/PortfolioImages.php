<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PortfolioImages extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='portfolios_images';
    protected $primaryKey='id';
    protected $guarded=[];
}
