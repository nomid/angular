<?php

use yii\db\Schema;
use yii\db\Migration;

class m141126_192107_users_table extends Migration
{
    public function up()
    {
        $this->createTable('users', [
            'id' => 'pk',
            'first_name' => Schema::TYPE_STRING . ' NOT NULL',
            'last_name' => Schema::TYPE_STRING . ' NOT NULL',
            'phone_number' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'password' => Schema::TYPE_STRING . ' NOT NULL',
            'auth_key' => Schema::TYPE_STRING . ' NOT NULL',
            'access_token' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
        $this->createIndex('email_i', 'users', 'email', true);
        $this->createIndex('auth_key_i', 'users', 'auth_key');
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
