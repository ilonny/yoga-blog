<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "widget_iframe".
 *
 * @property int $id
 * @property string $iframe_code
 * @property string $comment
 */
class WidgetIframe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'widget_iframe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iframe_code'], 'required'],
            [['iframe_code', 'comment'], 'string'],
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
            'comment' => 'Comment',
        ];
    }
}
