<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'banners';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'image',    // Banner image path
        'title',    // Banner title
        'description',  // Banner description
        'status',   // Banner active/inactive status
    ];

    // Define the default attributes to be set
    protected $attributes = [
        'status' => 'active', // default status
    ];
}
