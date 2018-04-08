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
        $query = Post::find()->andWhere(['category_id' => $id])->orderBy('create_at DESC');
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
        
        return $this->render('detailview');
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
}
