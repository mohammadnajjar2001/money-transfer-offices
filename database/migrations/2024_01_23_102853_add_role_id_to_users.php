<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // تحديث السجلات الحالية بناءً على البريد الإلكتروني
       

        // إضافة حقل role_id بعد حقل password
        Schema::table('users', function (Blueprint $table) {
            $table->string('role_id')->after('password')->default('unknown');
          
        });
       
    }
        

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role_id');
        });
    }
};
