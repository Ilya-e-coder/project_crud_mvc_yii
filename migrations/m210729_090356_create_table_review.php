<?php

use yii\db\Migration;


class m210729_090356_create_table_review extends Migration
{
    public string $tablename = 'review';

    public function safeUp()
    {
        $this->createTable($this->tablename,[
            'id'=>$this->primaryKey(),
            'name'=>$this->string(100)->notNull()->comment('Имя'),
            'email'=>$this->string(150)->notNull()->comment('Почта'),
            'text'=>$this->text(150)->notNull()->comment('Текст сообщения'),
        ]);
       $this->addCommentOnTable($this->tablename, 'Таблица обратной связи');
    }

    public function safeDown()
    {
        $this->dropTable($this->tablename);
    }
}
