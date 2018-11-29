<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "logo".
 *
 * @property int $id
 * @property string $img_src
 * @property string $text
 */
class Logo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'logo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img_src'], 'required'],
            [['text'], 'string'],
            [['img_src'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img_src' => 'Img Src',
            'text' => 'Text',
        ];
    }
}
