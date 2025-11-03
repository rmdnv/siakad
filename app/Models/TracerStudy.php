<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TracerStudy extends Model
{
    use HasFactory;

    protected $table = 'tracer_study';

    protected $fillable = [
        'nis', 'nisn', 'nama', 'kompetensi_keahlian',
        'no_hp', 'status', 'status_supervisor', 'updated_at',
    ];
    
    public function answers()
    {
        return $this->hasMany(Answer::class, 'user_id');
    }
}
