<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "youtube_iframe".
 *
 * @property int $id
 * @property string $iframe_code
 */
class YoutubeIframe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'youtube_iframe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iframe_code'], 'required'],
            [['iframe_code'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'iframe_code' => 'Iframe Code',
        ];
    }
}
