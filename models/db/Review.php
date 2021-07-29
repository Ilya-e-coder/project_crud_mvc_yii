<?php

namespace app\models\db;

use yii\db\ActiveRecord as ActiveRecordAlias;

/**
 * @property int $id
 * @property string $name Имя
 * @property string $email Почта
 * @property string $text Текст сообщения
 */
class Review extends ActiveRecordAlias
{
    public bool $isAgree = false;

    public static function tableName(): string
    {
        return 'review';
    }

    public function rules(): array
    {
        return [
            [['name', 'email', 'text'], 'required'],
            [['text'], 'string'],
            [['isAgree'], 'validateIsAgree'],
            [['email'], 'email'],
            [['name'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 150],
            [['isAgree'], 'safe'],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'Email',
            'text' => 'Текст',
            'isAgree' => 'Согласие на обработку персональных данных',
        ];
    }

    public function validateIsAgree(){
        if ($this->isNewRecord && !$this->isAgree){
            $this->addError('isAgree','Подтвердите согласие на обработку данных');
        }

    }


}
