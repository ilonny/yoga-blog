<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_social".
 *
 * @property int $id
 * @property string $link
 * @property int $social_id
 * @property int $sorting
 *
 * @property Social $social
 */
class UserSocial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_social';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link', 'social_id'], 'required'],
            [['social_id', 'sorting'], 'integer'],
            [['link'], 'string', 'max' => 255],
            [['social_id'], 'exist', 'skipOnError' => true, 'targetClass' => Social::className(), 'targetAttribute' => ['social_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link' => 'Link',
            'social_id' => 'Social ID',
            'sorting' => 'Sorting',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSocial()
    {
        return $this->hasOne(Social::className(), ['id' => 'social_id']);
    }

    public function getSocialIcon(){
        $social = Social::findOne($this->social_id);
        return $social->icon;
    }
}
