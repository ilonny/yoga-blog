<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
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
 * @property int $popular
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
            [['category_id', 'index_page', 'popular'], 'integer'],
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
            'popular' => 'Popular',
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

    public function getMostComments()
    {
        $posts = Post::find()->all();
        $arr = [];
        foreach ($posts as $key => $value) {
            array_push($arr, [
                'id' => $value->id,
                'count' => count($value->getReviews()),
            ]);
        }
        ArrayHelper::multisort($arr, 'count', SORT_DESC);
        $arr = array_slice($arr, 0, 4);
        $ids = array_column($arr, 'id');
        $posts = [];
        foreach ($arr as $key => $value) {
            array_push($posts, Post::findOne($value['id']));
        }
        return $posts;
        // return Post::find()->andWhere(['id' => $ids])->all();
    }

    public function formatPostDate()
    {
        $formatter = \Yii::$app->formatter;
        return $formatter->asDatetime($this->create_at, "php:d-m-Y");
    }

    public function getCategoryLink()
    {
        return Url::to(['/site/category', 'id' => $this->category_id]);
    }

    public function getDetailLink()
    {
        return Url::to(['/site/detailview', 'id' => $this->id]);
    }
}
