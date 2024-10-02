<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemBerkas extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'template_berkas_id'
    ];

    public function templateBerkas(): BelongsTo
    {
        return $this->belongsTo(TemplateBerkas::class);
    }
    public function mahasiswas(): BelongsToMany
    {
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_berkas');
    }

    public function berkas_mahasiswa(): HasMany
    {
        return $this->hasMany(MahasiswaBerkas::class);
    }
}
