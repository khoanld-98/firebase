<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('toan');
            $table->string('ly');
            $table->string('hoa');
        });
    }
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
