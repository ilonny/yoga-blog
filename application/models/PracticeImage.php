<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "practice_image".
 *
 * @property int $id
 * @property string $img_src
 * @property string $link
 */
class PracticeImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'practice_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img_src'], 'required'],
            [['link'], 'string'],
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
            'link' => 'Link',
        ];
    }
}
