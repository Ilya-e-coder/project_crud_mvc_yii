<?php

declare(strict_types=1);

namespace app\models;

use yii\db\ActiveRecord;

class Test extends ActiveRecord
{
    public static function tableName(): string
    {
        return 'test';
    }
}
