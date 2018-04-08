<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property int $id
 * @property string $name
 * @property string $img_src
 * @property string $text
 * @property string $img_src_inside
 * @property string $text_inside
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'text_inside'], 'string'],
            [['name', 'img_src', 'img_src_inside'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'img_src' => 'Img Src',
            'text' => 'Text',
            'img_src_inside' => 'Img Src Inside',
            'text_inside' => 'Text Inside',
        ];
    }
}
