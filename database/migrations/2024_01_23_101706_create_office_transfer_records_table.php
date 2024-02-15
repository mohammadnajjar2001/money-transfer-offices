<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_transfer_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_office_id')->constrained('offices')->onDelete('cascade');
            $table->foreignId('receiver_office_id')->constrained('offices')->onDelete('cascade');
            $table->integer('quantity');
            $table->date('transfer_date');
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
        Schema::dropIfExists('office_transfer_records');
    }
};
