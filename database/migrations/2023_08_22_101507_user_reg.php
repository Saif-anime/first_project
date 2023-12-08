<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * SQL
     * ORM
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('user_reg', function(Blueprint $t){
            $t -> id('user_id');
            $t -> string("name");
            $t -> string('email');
            $t -> string("phone");
            $t -> string("password");
            $t->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
