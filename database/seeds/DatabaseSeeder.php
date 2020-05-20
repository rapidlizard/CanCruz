<?php

use Illuminate\Database\Seeder;
use App\Estancia;
use App\Reserva;
use App\Calculadora;
use App\User;
use App\Services;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create(['id' => 1, 'name' => 'Admin', 'email' => 'admin@cancruz.com']);

        factory(Estancia::class)->create(['id' => 1, 'name' => 'Puigraciós', 'price' => '48']);
        factory(Estancia::class)->create(['id' => 2, 'name' => 'Sant Cristofol', 'price' => '48']);
        factory(Estancia::class)->create(['id' => 3, 'name' => 'Roca Centella', 'price' => '48']);

        factory(Reserva::class)->create(['id' => 1, 'name' => 'Ramona', 'mail' => 'axelcayuela@hotmail.com', 'phone' => '936759232',
            'check_in' => '2020-06-15', 'check_out' => '2020-06-18', 'persons' => '3', 'pet' => '1', 'breakfast' => '1', 'total_price' => '101', 'estancia_id' => 1]);

        factory(Services::class)->create(['id' => 1, 'name' => 'Desayuno', 'price' => '12']);
        factory(Services::class)->create(['id' => 2, 'name' => 'Mascota', 'price' => '5']);
        factory(Services::class)->create(['id' => 3, 'name' => 'Habitacion', 'price' => '48']);

        $this->call(ServicesSeeder::class);
        $this->call(EstanciaSeeder::class);
        $this->call(ReservaSeeder::class);
    }
}
