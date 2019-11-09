<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('name');
            $table->date('bdate')->nullable();
            $table->string('image')->nullable();
            $table->text('des')->nullable();
            $table->boolean('isActive')->default(true);
            $table->boolean('is_admin')->default(false);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::insert('insert into users (id, name,bdate,title,image,des,is_admin,email,password) values (?,?,?,?,?,?,?,?,?)', [
        1,
        'Habib',
        now(),
        'Std.',
        '1562318099.png',
        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam blanditiis delectus dignissimos dolorum illo impedit in minus, nulla numquam praesentium provident quo quos recusandae repellat rerum suscipit unde vel.',
        true,
        'habib@gmail.com',
        \Illuminate\Support\Facades\Hash::make('123456')
    ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

