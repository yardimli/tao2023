<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    //Create the table
        Schema::create('categories', function (Blueprint $table) {
	        $table->increments('catID');
	        $table->integer('parentID')->default(NULL);
	        $table->integer('text_count')->default(0);
	        $table->integer('new_texts')->default(0);
	        $table->integer('read_count')->default(0);
	        $table->string('category_name',255)->default('NULL')->nullable();
	        $table->string('picture',255)->default('NULL')->nullable();
	        $table->string('slug_en',255)->default('NULL')->nullable();
        });

	    // Insert some stuff
//	    $data = [
//		    ['parentID'=> 0, 'text_count'=> 36241, 'new_texts'=> 497, 'read_count'=> 0, 'category_name'=> 'Poetry', 'picture'=> NULL, 'slug_en'=> 'poetry'],
//		    ['parentID'=> 0, 'text_count'=> 4638, 'new_texts'=> 80, 'read_count'=> 0, 'category_name'=> 'Story', 'picture'=> NULL, 'slug_en'=> 'Story'],
//	    ];
//	    DB::table('categories')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
