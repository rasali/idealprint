<?php namespace Nova\Idealprint\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNovaIdealprintBanner extends Migration
{
    public function up()
    {
        Schema::create('nova_idealprint_banner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string(' link')->nullable();
            $table->text('content')->nullable();
            $table->string('btn_text')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nova_idealprint_banner');
    }
}
