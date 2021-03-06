<?php

class SerialnumberController extends Controller {

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
                'actions' => array('index', 'view', 'viewSpare'),
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

    public function actionViewSpare() {
        $model = new serialnumber('search');
//                $model2 = new serialnumber('searchWithSparepart');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['serialnumber']))
            $model->attributes = $_GET['serialnumber'];

        $this->render('viewSpare', array(
            'model' => $model,
//			'model2'=>$model2,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new serialnumber;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['serialnumber'])) {
            $model->attributes = $_POST['serialnumber'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionAddSparepart() {
        $add = new AddSparePart;

// collect user input data
        if (isset($_POST['AddSparePart'])) {
            $add->attributes = $_POST['AddSparePart'];
            $add->attributes = $_POST['AddSparePart'];
// validate user input and redirect to the previous page if valid
            if ($add->validate()) {
// create an account model
                $spare = new sparepart;
                $history = new history;
                $spare->office_id = Yii::app()->user->id;
                $spare->category = $add->category;
                $spare->series = $add->series;
                $spare->type = $add->type;
                $spare->model = $add->model;
                $spare->aliasname = $add->aliasname;
                $spare->partno = $add->partno;
                $spare->status = $add->status;
                $spare->stock = $add->stock;
                $history->history = $add->history;
              
//                $history->sparepart_id = $spare->id;
//                print_r($spare->office_id);
//                print_r(die);
//                $account->password = $registration->password;
//                $account->email = $registration->email;
//                $account->joinDate = new CDbExpression('NOW()');
//                $account->level_id = 1;
//                print_r($history->sparepart_id);
//                print_r(die);
//                   print_r('YES');
//print_r(die);
                if ($spare->save()) {
//                   print_r('YES');
//                    print_r($spare);
//                print_r(die);
                    $serial = new serialnumber;
                    $serial->attributes = $add->attributes;
                    $history->attributes = $add->attributes;

                    $serial->sparepart_id = $spare->id;
                    $history->sparepart_id = $spare->id;
                   

                  
                    if ($serial->save()) {
// redirects to index page
                         $history->serialnumber_id = $serial->id;
//                           print_r($history->serialnumber_id);
//                    print_r(die);
                    if($history->save()){
                        $this->redirect(array('sparepart/viewSparepart'));
                        
                    }
                    } else {
// what's wrong? get the error message
                        $add->addErrors($serial->getErrors());
                    }
                } else {
// what's wrong? get the error message
                    $add->addErrors($spare->getErrors());
                }
            }
        }
// display the registration form
        $this->render('addSparepart', array('model' => $add));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['sparepart'])) {
            $model->attributes = $_POST['sparepart'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
//	public function actionUpdate($id)
//                {
//		$model=$this->loadModel($id);
//
//		// Uncomment the following line if AJAX validation is needed
//		// $this->performAjaxValidation($model);
//
//		if(isset($_POST['serialnumber']))
//		{
//			$model->attributes=$_POST['serialnumber'];
//			if($model->save())
//				$this->redirect(array('view','id'=>$model->id));
//		}
//
//		$this->render('update',array(
//			'model'=>$model,
//		));
//	}

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
        $dataProvider = new CActiveDataProvider('serialnumber');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new serialnumber('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['serialnumber']))
            $model->attributes = $_GET['serialnumber'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return serialnumber the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = serialnumber::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param serialnumber $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'serialnumber-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
