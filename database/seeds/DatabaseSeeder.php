<?php

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
        $this->call(OcupacionSeeder::class);
        $this->call(EstadoCivilSeeder::class);
        $this->call(EscolaridadSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(IdentificacionSeeder::class);
        $this->call(RazonSeeder::class);         
        $this->call(ColoniasChiapasSeeder::class);
        $this->call(ColoniasCDMXSeeder::class);
        $this->call(ColoniasHidalgoSeeder::class);
        $this->call(ColoniasOaxacaSeeder::class);
        $this->call(ColoniasPueblaSeeder::class);
        $this->call(ColoniasSanLuisPotosiSeeder::class);
        $this->call(ColoniasTabascoSeeder::class);
        $this->call(ColoniasTamaulipasSeeder::class);
        $this->call(ColoniasVeracruzSeeder::class);    
        $this->call(ColoniasCampecheSeeder::class);
        $this->call(ColoniasMexicoSeeder::class);
        $this->call(ColoniasGuerreroSeeder::class);
        $this->call(ColoniasTlaxcalaSeeder::class);
        $this->call(ColoniasNuevoLeonSeeder::class);
        $this->call(ColoniasMorelosSeeder::class);
        $this->call(ColoniasQueretaroSeeder::class);
        $this->call(ColoniasMichoacanSeeder::class);
        $this->call(ColoniasGuanajuatoSeeder::class);
        $this->call(LocalidadesChiapasSeeder::class);
        $this->call(LocalidadesCDMXSeeder::class);
        $this->call(LocalidadesHidalgoSeeder::class);
        $this->call(LocalidadesOaxacaSeeder::class);
        $this->call(LocalidadesPueblaSeeder::class);
        $this->call(LocalidadesSanLuisPotosiSeeder::class);
        $this->call(LocalidadesTabascoSeeder::class);
        $this->call(LocalidadesTamaulipasSeeder::class);
        $this->call(LocalidadesVeracruzSeeder::class);        
        $this->call(LocalidadesCampecheSeeder::class);
        $this->call(LocalidadesGuanajuatoSeeder::class);
        $this->call(LocalidadesGuerreroSeeder::class);
        $this->call(LocalidadesMexicoSeeder::class);
        $this->call(LocalidadesMichoacanSeeder::class);
        $this->call(LocalidadesMorelosSeeder::class);
        $this->call(LocalidadesNuevoLeonSeeder::class);
        $this->call(LocalidadesQueretaroSeeder::class);
        $this->call(LocalidadesTlaxcalaSeeder::class);        
    }
}
