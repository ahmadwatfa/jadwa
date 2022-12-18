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
        Schema::create('project_bp_channel_resources', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->enum('type',['sale_channel','marketing_channel','income_sources','expensis_modal','main_activity']);
            $table->unsignedBigInteger('project_id')->nullable();
            
            $table->foreign('project_id')->references('id')->on('projects')->cascadeOnDelete();           
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_bp_channel_resources');
    }
};
