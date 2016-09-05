<?php

namespace app\modules\forum\controllers;

use yii\web\Controller;

/**
 * Default controller for the `forum` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        echo 123123;die;
        return $this->render('index');
    }
}
