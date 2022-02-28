<?php

namespace Database\Seeders;

use App\Models\Editorial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editorials = [

            [
                'name' => 'Alianza Distribuidora de Colombia',
                'campus' =>'Bogotá',
                'slug' =>Str::slug('Alianza Distribuidora de Colombia')
            ],

            [
                'name' => 'Asociación de Editoriales Universitarias de Colombia ASEUC',
                'campus' =>'Medellin',
                'slug' =>Str::slug('Asociación de Editoriales Universitarias de Colombia ASEUC')
            ],

            [
                'name' => 'Babel Libros',
                'campus' =>'Cali',
                'slug' =>Str::slug('Babel Libros')
            ],
            [
                'name' => 'Cangrejo Editores',
                'campus' =>'Manizales',
                'slug' =>Str::slug('Cangrejo Editores')
            ],
            
            [
                'name' => 'Carvajal Ediciones',
                'campus' =>'Popayan',
                'slug' =>Str::slug('Carvajal Ediciones')
            ],
            [
                'name' => 'Círculo de Lectores',
                'campus' =>'Pereira',
                'slug' =>Str::slug('Círculo de Lectores')
            ],
            [
                'name' => 'Cooperativa Editorial Magisterio',
                'campus' =>'Ibague',
                'slug' =>Str::slug('Cooperativa Editorial Magisterio')
            ],
            [
                'name' => 'Difusora Larousse de Colombia Ltda',
                'campus' =>'Santa Marta',
                'slug' =>Str::slug('Difusora Larousse de Colombia Ltda')
            ],
            [
                'name' => 'Ediciones Fondo de Cultura Económica',
                'campus' =>'Barranquilla',
                'slug' =>Str::slug('Ediciones Fondo de Cultura Económica')
            ],
           
        ];

        foreach ($editorials as $editorial) {
            Editorial::factory(1)->create($editorial);
        }
    }
}
