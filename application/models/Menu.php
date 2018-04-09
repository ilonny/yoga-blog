<?php

namespace app\models;

use Yii;
use app\models\Post;
/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property int $parent_category
 *
 * @property Menu $parentCategory
 * @property Menu[] $menus
 * @property Post[] $posts
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['parent_category'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['parent_category'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['parent_category' => 'id']],
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
            'parent_category' => 'Parent Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParentCategory()
    {
        return $this->hasOne(Menu::className(), ['id' => 'parent_category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenus()
    {
        return $this->hasMany(Menu::className(), ['parent_category' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['category_id' => 'id']);
    }

    public function getSubs($id){
        return Menu::find()->andWhere(['parent_category' => $id])->all();
    }
    public function getPostsCount(){
        $count = count(Post::find()->andWhere(['category_id' => $this->id])->all());
        return $count;
    }
}
