<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniModel extends Model
{
    use HasFactory;

    protected $table = 'data_alumni';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'no_hp',
        'departemen',
        'prodi',
        'angkatan',
        'pekerjaan_saat_ini',
    ];

    public function store(array $payload){

        return $this->create($payload);
    }
}
