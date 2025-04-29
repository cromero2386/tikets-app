<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use App\Models\Provincia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://apis.datos.gob.ar/georef/api/provincias');
        collect($response->object()->provincias)->map(function (object $provincia) {
            $provincia = Provincia::updateOrCreate([
                'codigo' => $provincia->id,
            ], [
                'nombre' => $provincia->nombre
            ]);
        });
    }
}
