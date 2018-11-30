    <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Plateform;
class CreatePlateformTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plateform', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50)->unique();
            $table->timestamps();
        });

       Plateform::insert([

        ['name'=>'iOS'],
        ['name'=>'Android'],
        ['name'=>'Game'],

       ]); 
    
    }

   /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plateform');
    }
}
