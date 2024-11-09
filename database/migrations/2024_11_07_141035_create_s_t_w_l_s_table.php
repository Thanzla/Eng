<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('s_t_w_l_s', function (Blueprint $table) {
            $table->bigIncrements('id');  // Auto-incrementing primary key
            $table->string('WhName', 100);
            $table->string('WhCode', 50);
            $table->date('date');
            $table->time('time');  // Removed unique() to allow duplicate times if needed
            $table->string('conducted_by', 30);
            $table->integer('no_of_labour');
            $table->string('hc_present', 3);
            $table->string('topic', 100);
            $table->string('remarks', 20);
            $table->timestamps();  // This automatically adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_t_w_l_s');
    }
};
