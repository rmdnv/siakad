<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class TracerStudyEncrypted extends Model
{
    use HasFactory;

    protected $table    = 'tracer_study';
    protected $fillable = [
        'nis', 'nisn', 'nama', 'kompetensi_keahlian',
        'no_hp', 'status', 'status_supervisor', 'updated_at',
    ];

    public function setNisAttribute($value)
    {
        $this->attributes['nis']      = Crypt::encryptString($value);
        $this->attributes['nis_hash'] = hash_hmac('sha256', $value, config('app.key'));
    }

    public function setNisnAttribute($value)
    {
        $this->attributes['nisn']      = Crypt::encryptString($value);
        $this->attributes['nisn_hash'] = hash_hmac('sha256', $value, config('app.key'));
    }

    public function setNoHpAttribute($value)
    {
        $this->attributes['no_hp'] = Crypt::encryptString($value);
    }

    public function getNisAttribute($value)
    {
        try {
            return $value ? Crypt::decryptString($value) : null;
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return $value;
        }
    }

    public function getNisnAttribute($value)
    {
        try {
            return $value ? Crypt::decryptString($value) : null;
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return $value;
        }
    }

    public function getNoHpAttribute($value)
    {
        try {
            return $value ? Crypt::decryptString($value) : null;
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return $value;
        }
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'user_id');
    }
}
