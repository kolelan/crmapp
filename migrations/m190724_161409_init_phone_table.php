<?php

use yii\db\Migration;

/**
 * Class m190724_161409_init_phone_table
 */
class m190724_161409_init_phone_table extends Migration
{
    private $table = 'phone';
    public function up()
    {
        $this->createTable($this->table,[
            'id'=>'pk',
            'customer_id'=>'int',
            'number'=>'string',
        ],
            'ENGINE=InnoDB');
        $this->addForeignKey('customer_phone_number','phone','customer_id','customer','id');
    }

    public function down()
    {
        $this->dropForeignKey('customer_phone_number','phone');
        $this->dropTable($this->table);
    }

}
