<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\Slider;
use app\models\Author;
use app\models\Question;
use app\models\Post;
use app\models\Menu;
use app\models\Review;
use yii\data\Pagination;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $query = Post::find()->orderBy('create_at DESC');
        $countPosts = clone $query;
        $pages = new Pagination([
            'totalCount' => $countPosts->count(),
            'pageSize' => 9,
        ]);
        $posts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $slides = Slider::find()->all();
        return $this->render('index', [
            'slides' => $slides,
            'posts' => $posts,
            'pages' => $pages,
        ]);
    }

    public function actionCategory($id)
    {
        $category = Menu::findOne($id);
        //если родительская категория - искать еще и в подкатегориях, иначе только в одной категории.
        if ($category->parent_category == 1){
            $category_ids = Menu::find()->select('id')->andWhere(['or', ['parent_category' => $category->id], ['id' => $category->id]]);
            $query = Post::find()->andWhere(['category_id' => $category_ids])->orderBy('create_at DESC');
            //тут запрос который отбирает посты со всех подкатегорий которые относятся к категории, включая и саму категорию
        } else {
            $query = Post::find()->andWhere(['category_id' => $id])->orderBy('create_at DESC');            
        }
        $countPosts = clone $query;
        $pages = new Pagination([
            'totalCount' => $countPosts->count(),
            'pageSize' => 9,
        ]);
        $posts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $slides = Slider::find()->all();
        return $this->render('category', [
            'posts' => $posts,
            'pages' => $pages,
            'category' => $category,
        ]);   
    }

    public function actionDetailview($id)
    {
        $post = Post::findOne($id);
        $related_posts = Post::find()
            ->andWhere(['<>', 'id', $post->id])
            ->andWhere(['category_id' => $post->category_id])
            ->orderBy('id DESC')
            ->limit(3)
            ->all();
        return $this->render('detailview', [
            'post' => $post,
            'related_posts' => $related_posts,
        ]);
    }

    public function actionAbout()
    {
        $model = Author::findOne(1);
        return $this->render('about', [
            'model' => $model,
        ]);
    }

    public function actionContact()
    {
        $questions = Question::find()->andWhere(['showing' => 1])->all();
        return $this->render('contact', [
            'questions' => $questions,
        ]);
    }

    public function actionQuestionAdd()
    {
        $data = Yii::$app->request->post();
        $model = new Question;
        $model->topic = $data['topic'];
        $model->content = $data['question'];
        $model->name = $data['name'];
        $model->email = $data['email'];
        if ($model->save()) {
            return json_encode([
                'status' => 'success',
                'message' => 'Спасибо! Ваш вопрос будет обработан в ближайшее время',
            ]);
        } else {
            return json_encode([
                'status' => 'error',
                'message' => 'Возникла ошибка при добавлении вопрос, пожалуйста, свяжитесь с администрацией.',
            ]);
        }
    }

    public function actionQuestion($id)
    {
        $model = Question::findOne($id);
        return $this->render('question', [
            'model' => $model,
        ]);
    }

    public function actionReviewAdd()
    {
        $data = Yii::$app->request->post();        
        $model = new Review;
        $model->title = $data['title'];
        $model->text = $data['text'];
        $model->name = $data['name'];
        $model->email = $data['email'];
        $model->post_id = $data['post_id'];
        if ($model->save()) {
            return json_encode([
                'status' => 'success',
                'message' => 'Спасибо за комментарий! Он будет виден на сайте после проверки модератором.',
            ]);
        } else {
            return json_encode([
                'status' => 'error',
                'message' => 'Возникла ошибка при добавлении комментария, пожалуйста, свяжитесь с администрацией.',
            ]);
        }   
    }

    // public function actionFillCats()
    // {
    //     $arr = [
    //         'Разминки и Асаны',
    //         'Пранаямы',
    //         'Бандхи, мудры и медитации',
    //         'Йога для здоровья',
    //         'Начинающим',
    //         'Продолжающим и преподавателям',
    //         'Развлекательное, интерьвью и промоушены',
    //     ];
    //     foreach ($arr as $key => $value) {
    //         $model = new Menu;
    //         $model->name = $value;
    //         $model->parent_category = 3;
    //         $model->save();
    //     }
    //     return true;
    // }
}
