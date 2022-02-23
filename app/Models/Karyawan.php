<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Karyawan extends Model {
    use HasFactory;

    protected $table = "table_karyawan";
    protected $guarded = array();

    public function formatDate($tanggal) {
        return Carbon::createFromFormat('Y-m-d', $this->$tanggal)->format('d-M-y');
    }
}
