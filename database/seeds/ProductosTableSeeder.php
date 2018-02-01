 <?php
 
use Illuminate\Database\Seeder;
 
class ProductosTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('productos')->delete();
 
        $categorias = array(
            ['id' => 1, 'name' => 'Localizador autoinstalable', 'categoria_id' => 1,'imagen' => '/imagenes/productos/autoinstalable.png','description' => 'Equipo localizador autoinstalable en conector ODB vehículo.','precio' => 50, 'descuento' => 20, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Localizador instalado', 'categoria_id' => 1,'imagen' => '/imagenes/productos/FMB1.png','description' => 'Equipo localización,instalado por instalador, con posibilidad de asociar periférico.','precio' => 100, 'descuento' => 20, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Localizador personal', 'categoria_id' => 1,'imagen' => '/imagenes/productos/GH4000.png','description' => 'Localizador portatil con llamadas y sms.','precio' => 50, 'descuento' => 20, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            
            ['id' => 4, 'name' => 'Router 950', 'categoria_id' => 2,'imagen' => '/imagenes/productos/autoinstalable.png','description' => 'Enrutador LTE altamente fiable y seguro para aplicaciones profesionales','precio' => 150, 'descuento' => 25, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Router 850', 'categoria_id' => 2,'imagen' => '/imagenes/productos/autoinstalable.png','description' => 'Enrutador inalámbrico LTE de diseño compacto y delgado.','precio' => 80, 'descuento' => 25, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            
            ['id' => 6, 'name' => '4GFlota UserConnect', 'categoria_id' => 3,'imagen' => '/imagenes/productos/userconnet.png','description' => 'Permite al conductor del vehículo conectar directamente con las central de su empresa.','precio' => 20, 'descuento' => 10, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'D4Service', 'categoria_id' => 3,'imagen' => '/imagenes/productos/d4service.png','description' => 'El conductor recibirá automáticamente en su móvil las tareas o servicios a realizar. ','precio' => 15, 'descuento' => 10, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'name' => 'D4 en punto', 'categoria_id' => 3,'imagen' => '/imagenes/productos/enPunto.png','description' => 'Permite comunicar al usuario la hora exacta de la llegada del repartidor a su domicilio.','precio' => 100, 'descuento' => 20, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'name' => 'Condusiento', 'categoria_id' => 3,'imagen' => '/imagenes/productos/condisiento.png','description' => 'Condusiento es una aplicación de seguridad pasiva para aquellas personas que ponen todos sus sentidos en la carretera.','precio' => 100, 'descuento' => 20, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            
            ['id' => 10, 'name' => 'Tr-Line', 'categoria_id' => 4,'imagen' => '/imagenes/productos/trline.png','description' => 'Realiza la descarga de datos automáticamente de forma periódica o en el momento que lo necesite.','precio' => 150, 'descuento' => 25, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'name' => 'Tr-WireBT', 'categoria_id' => 4,'imagen' => '/imagenes/productos/wirebt.png','description' => 'Conexión directa al tacógrafo digital,lee los datos de las tarjetas de conductor,conexión bluetooth con el móvil.', 'precio' => 80, 'descuento' => 25, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'name' => 'Tr-Card', 'categoria_id' => 4,'imagen' => '/imagenes/productos/trcard.png','description' => 'Descarga los datos de las tarjetas de conductor y envia todos los datos a través de tu teléfono móvil vía bluetooth.', 'precio' => 20, 'descuento' => 10, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'name' => 'Tr-Central', 'categoria_id' => 4,'imagen' => '/imagenes/productos/trcentral.png','description' => 'Lee y almacena los datos de las tarjetas del conductor y del tacógrafo digital.Envía todos los datos almacenados al sistema TacoRead vía wifi o GPRS', 'precio' => 15, 'descuento' => 10, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        //// Uncomment the below to run the seeder
        DB::table('productos')->insert($categorias);
    }
 
}