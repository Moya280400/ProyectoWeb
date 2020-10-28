<?php

namespace Database\Seeders;

use App\Http\Controllers\VideojuegoController;
use App\Models\Cliente;
use App\Models\Tipo_entrega;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();}
        $this->call(MarcaVehiculoSeeder::class);
        $this->call(TipoVehiculoSeeder::class);
        $this->call(VehiculoSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(TipoEntregaSeeder::class);
        $this->call(DesarrolladorSeeder::class);
        $this->call(DistribuidorSeeder::class);
        $this->call(PlataformaSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(VideoJuegoSeeder::class);
        $this->call(RepartidorSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(PedidoSeeder::class);

    }
}
