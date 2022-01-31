<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designations', function (Blueprint $table) {
            $table->id('d_id');
            $table->string('d_name');
            $table->timestamp('created_at')->useCurrent();
            
        });

        DB::table('designations')->insert(
            array(
                [
                    'd_name' => 'Manager',
                ],
                [
                    'd_name' => 'HR Manager',
                ],
                [
                    'd_name' => 'Supervisor',
                ],
                [
                    'd_name' => 'Asst. Manager'
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designations');
    }
}
