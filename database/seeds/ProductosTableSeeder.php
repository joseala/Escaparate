 <?php
 
use Illuminate\Database\Seeder;
 
class ProductosTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('productos')->delete();
 
        $categorias = array(
            ['id' => 1, 'name' => 'Autoinstalable', 'slug' => 'auto', 'categoria_id' => 1,'description' => 'Equipo autoinstalable','precio' => 50, 'descuento' => 20, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Con instalacion', 'slug' => 'intalacion', 'categoria_id' => 1,'description' => 'Equipo instalado instalador','precio' => 100, 'descuento' => 20, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Router 850', 'slug' => '850', 'categoria_id' => 2,'description' => 'Router profesional','precio' => 150, 'descuento' => 25, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Router 500', 'slug' => '500', 'categoria_id' => 2,'description' => 'Router basico','precio' => 80, 'descuento' => 25, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'UserConnect', 'slug' => 'userConnect', 'categoria_id' => 3,'description' => 'App conexion trabjadores','precio' => 20, 'descuento' => 10, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Docuvi', 'slug' => 'docuvi', 'categoria_id' => 3,'description' => 'App documentacion de flota','precio' => 15, 'descuento' => 10, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        //// Uncomment the below to run the seeder
        DB::table('productos')->insert($categorias);
    }
 
}