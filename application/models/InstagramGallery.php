<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instagram_gallery".
 *
 * @property int $id
 * @property string $img_src
 * @property string $link
 */
class InstagramGallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instagram_gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img_src', 'link'], 'required'],
            [['img_src', 'link'], 'string', 'max' => 255],
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
