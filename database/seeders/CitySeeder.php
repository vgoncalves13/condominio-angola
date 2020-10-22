<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = array(
            array('city' => 'Ambriz'),
            array('city' => 'Benguela'),
            array('city' => 'Cabinda'),
            array('city' => 'Cacolo'),
            array('city' => 'Calenga'),
            array('city' => 'Calulo'),
            array('city' => 'Camabatela'),
            array('city' => 'Camacupa'),
            array('city' => 'Cangamba'),
            array('city' => 'Capenda Camulemba'),
            array('city' => 'Caxito'),
            array('city' => 'Cazombo'),
            array('city' => 'Chibemba'),
            array('city' => 'Chibia'),
            array('city' => 'Chitado'),
            array('city' => 'Cubal'),
            array('city' => 'Cuito'),
            array('city' => 'Cuito Cuanavale'),
            array('city' => 'Dondo'),
            array('city' => 'Dundo'),
            array('city' => 'Huambo'),
            array('city' => 'Lobito'),
            array('city' => 'Luanda'),
            array('city' => 'Luau'),
            array('city' => 'Lubango'),
            array('city' => 'Lubango'),
            array('city' => 'Lucapa'),
            array('city' => 'Luena'),
            array('city' => 'Luiana'),
            array('city' => 'Malanje'),
            array('city' => 'Mavinga'),
            array('city' => 'Mbanza Congo'),
            array('city' => 'Menongue'),
            array('city' => 'Muconda'),
            array('city' => 'Mucusso'),
            array('city' => 'Ndalatando'),
            array('city' => 'Namibe'),
            array('city' => 'Nzeto'),
            array('city' => 'Ondjiva'),
            array('city' => 'Quibala'),
            array('city' => 'Quipungo'),
            array('city' => 'Saurimo'),
            array('city' => 'Soio'),
            array('city' => 'Songo'),
            array('city' => 'Sumbe'),
            array('city' => 'Tômbua'),
            array('city' => 'Uacu Cungo'),
            array('city' => 'Uíge'),
            array('city' => 'Xangongo'),
        );

        DB::table('cities')->insert($cities);
    }
}
