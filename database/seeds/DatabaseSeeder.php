<?php

use Illuminate\Database\Seeder;
use App\Estancia;
use App\Reserva;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Estancia::class)->create([ 'id'=>1,'name'=>'Puigraciós', 'price'=>'48']);
        factory(Estancia::class)->create([ 'id'=>2,'name'=>'Estança de Sant Cristofol', 'price'=>'48']);
        factory(Estancia::class)->create([ 'id'=>3,'name'=>'Estança de la Roca Centella', 'price'=>'48']);
        factory(Reserva::class)->create(['estancias_id'=>1]);
        factory(Reserva::class)->create(['estancias_id'=>2]);
        factory(Reserva::class)->create(['estancias_id'=>3]);
        $this->call(EstanciaSeeder::class);
        $this->call(ReservaSeeder::class);
        
    }
}
