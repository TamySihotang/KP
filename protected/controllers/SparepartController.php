<?php

class SparepartController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'viewSparepart', 'viewOffice', 'viewSerial'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'addSparepart'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionViewOffice($id) {
        $office = new office('search');
        $office->unsetAttributes();
        $test = office::model()->findByPk($id);
//        var_dump($test);
//        $spare = sparepart::model()->findByPk($a->stock);
//        print_r($spare);
//        print_r(die);
//        $spare->unsetAttributes();
       
        if (isset($_GET['office'])) {
            $office->attributes = $_GET['office'];
        }
//        if (isset($_GET['office'])) {
//            $spare->attributes = $_GET['office'];
//        }
        $this->render('viewOffice', array(
//        'model' => sparepart::model()->with(
//                 'offices.spareparts'
//                 )->findByPk($id),
            'office' => $office,
//            'spare' => $spare,
            'test'=>$test,
            'model'=>$this->loadModel($id),
        ));
    }
    public function actionViewSerial($id) {
        $serial = new serialnumber('search');
        $serial->unsetAttributes();
        $test = office::model()->findByPk($id);
       
        if (isset($_GET['serial'])) {
            $office->attributes = $_GET['serial'];
        }

        $this->render('viewSerial', array(
            'serial' => $serial,
            'test'=>$test,
            'model'=>$this->loadModel($id),
        ));
    }

    public function actionViewSparepart() {
        $model = new sparepart('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['sparepart']))
            $model->attributes = $_GET['sparepart'];

        $this->render('viewSparepart', array(
            'model' => $model,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new sparepart;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['sparepart'])) {
            $model->attributes = $_POST['sparepart'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('sparepart');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new sparepart('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['sparepart']))
            $model->attributes = $_GET['sparepart'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return sparepart the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = sparepart::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
    
  

    /**
     * Performs the AJAX validation.
     * @param sparepart $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'sparepart-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
