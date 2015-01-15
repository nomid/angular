<?php

use yii\db\Schema;
use yii\db\Migration;

class m150115_094713_products_table extends Migration
{
    public function up()
    {
		$this->createTable('products', [
            'id' => 'pk',
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'price' => Schema::TYPE_BOOLEAN . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('products');
    }
}
