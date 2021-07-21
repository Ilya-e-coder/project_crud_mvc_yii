<?php

use yii\db\Migration;

class m210721_145137_create_table_test extends Migration
{
    private string $tableName = 'test';

    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id'   => $this->primaryKey(),
            'name' => $this->string()
        ]);

        \Yii::$app->db->createCommand()->batchInsert(
            $this->tableName, ['name'],
            [
                ['some'],
                ['way'],
                ['out']
            ]
        )->execute();
    }

    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
