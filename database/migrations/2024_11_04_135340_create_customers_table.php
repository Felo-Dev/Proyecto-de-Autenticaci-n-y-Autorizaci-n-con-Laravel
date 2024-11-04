<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_customers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->string('dni', 45);
            $table->foreignId('id_reg')->constrained('regions', 'id_reg');
            $table->foreignId('id_com')->constrained('communes', 'id_com');
            $table->string('email', 120)->unique();
            $table->string('name', 45);
            $table->string('last_name', 45);
            $table->string('address', 255)->nullable();
            $table->dateTime('date_reg');
            $table->enum('status', ['A', 'I', 'trash'])->default('A');
            $table->primary(['dni', 'id_reg', 'id_com']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
