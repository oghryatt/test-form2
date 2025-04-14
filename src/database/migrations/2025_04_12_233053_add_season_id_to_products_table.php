<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSeasonIdToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->string('season')->nullable(); 
    });
}



    /**
     * Reverse the migrations.
     *
     * @return void
     */
   public function down()
{
    Schema::table('products', function (Blueprint $table) {
        if (Schema::hasColumn('products', 'season_id')) {
            $foreignKeys = DB::select("SHOW KEYS FROM products WHERE Key_name = 'products_season_id_foreign'");
            if (!empty($foreignKeys)) {
                $table->dropForeign(['season_id']); 
            }
            $table->dropColumn('season_id'); 
        }

        if (Schema::hasColumn('products', 'season')) {
            $table->dropColumn('season');
        }
    });
}



}
