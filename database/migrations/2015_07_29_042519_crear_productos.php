<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearProductos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 255);
			$table->integer('precio')->unsigned();
			$table->mediumText('descripcion')->nullable();

			$table->integer('categoria_id')->unsigned();

			$table->foreign('categoria_id')
				->references('id')
				->on('categorias');


			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productos');
	}

}
