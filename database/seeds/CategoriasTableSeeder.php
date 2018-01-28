<?php
 
use Illuminate\Database\Seeder;
 
class CategoriasTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('categorias')->delete();
 
        $categorias = array(
            ['id' => 1, 'name' => 'Localizacion', 'slug' => 'localizacion','imagen' => '/imagenes/localizacion.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Routers', 'slug' => 'routers','imagen' => '/imagenes/router.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Aplicaciones', 'slug' => 'aplicaciones','imagen' => '/imagenes/app.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('categorias')->insert($categorias);
    }
 
}