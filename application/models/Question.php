<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property int $id
 * @property string $topic
 * @property string $content
 * @property string $name
 * @property string $email
 * @property int $showing
 * @property string $answer
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'answer'], 'string'],
            [['showing'], 'integer'],
            [['topic', 'name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'topic' => 'Topic',
            'content' => 'Content',
            'name' => 'Name',
            'email' => 'Email',
            'showing' => 'Showing',
            'answer' => 'Answer',
        ];
    }
}
