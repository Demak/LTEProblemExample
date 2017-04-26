<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public $layout = 'backend';

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }
    
	public function mainMenu()
    {
        return [
            ['label' => '', 'options' => ['class' => 'header']],
            [
                'label' => 'Test group',
                'icon' => 'shopping-bag',
                'url' => '#',
                'items' => [
                    ['label' => 'Test page1', 'icon' => 'list', 'url' => ['test']],
                ]
            ],
            [
                'label' => 'Test group',
                'icon' => 'shopping-cart',
                'url' => '#',
                'items' => [
                    ['label' => 'Test page2', 'icon' => 'gift', 'url' => ['test2']],
                    ['label' => 'Test page3', 'icon' => 'money', 'url' => ['/site/test3']],
                ]
            ]
        ];
    }

    public function actionIndex()
    {
    	return $this->renderContent('Hello, this page is not in menu, go to some other page.');
    }

    public function actionTest()
    {
    	return $this->renderContent('I am inactive');
    }

    public function actionTest2()
    {
    	return $this->renderContent('I am inactive too');
    }

    public function actionTest3()
    {
    	return $this->renderContent('I am active');
    }
}
