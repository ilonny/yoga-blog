<?php

namespace app\models;

use Yii;
use app\models\Menu;
use app\models\Review;
/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $create_at
 * @property string $text_short
 * @property string $text
 * @property string $img_src_short
 * @property string $img_src
 * @property int $category_id
 * @property int $index_page
 *
 * @property Menu $category
 * @property Review[] $reviews
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category_id'], 'required'],
            [['create_at'], 'safe'],
            [['text_short', 'text'], 'string'],
            [['category_id', 'index_page'], 'integer'],
            [['title', 'img_src_short', 'img_src'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'create_at' => 'Create At',
            'text_short' => 'Text Short',
            'text' => 'Text',
            'img_src_short' => 'Img Src Short',
            'img_src' => 'Img Src',
            'category_id' => 'Category ID',
            'index_page' => 'Index Page',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Menu::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return Review::find()->andWhere(['post_id' => $this->id, 'showing' => 1])->all();
    }

    public function getCategoryName()
    {
        $cat = Menu::findOne($this->category_id);
        return $cat->name;
    }
}
