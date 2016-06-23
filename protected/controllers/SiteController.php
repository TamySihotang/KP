<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
//	public function actionLogin()
//	{
//		$model=new LoginForm;
//
//		// if it is ajax validation request
//		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
//		{
//			echo CActiveForm::validate($model);
//			Yii::app()->end();
//		}
//
//		// collect user input data
//		if(isset($_POST['LoginForm']))
//		{
//			$model->attributes=$_POST['LoginForm'];
//			// validate user input and redirect to the previous page if valid
//			if($model->validate() && $model->login())
//				$this->redirect(Yii::app()->user->returnUrl);
//		}
//		// display the login form
//		$this->render('login',array('model'=>$model));
//	}
//
//	/**
//	 * Logs out the current user and redirect to homepage.
//	 */
//	public function actionLogout()
//	{
//		Yii::app()->user->logout();
//		$this->redirect(Yii::app()->homeUrl);
//	}
//        
//        // an action designed to handle the registration process
//
        public function actionSN()
        {
            $sn = new SNForm;
            // collect user input data
            if (isset($_POST['SNForm'])) {
                $sn->attributes = $_POST['SNForm'];
                $sn->attributes = $_POST['SNForm'];
            // validate user input and redirect to the previous page

            if ($sn->validate()) {
            // create an account model
            $serialnumber = new Serialnumber;
            $serialnumber->sparepart_id = $sn->sparepart_id;
            $serialnumber->serial_number = $sn->serial;
                       // print_r($serial_number);

            if ($serialnumber->save()) {
            // create an account model
            $serialnumber = new Serialnumber;
           // print_r($serial_number);
//            $serialnumber->attributes = $sn->attributes;
//            $serialnumber->id = $serialnumber->id;
            $serialnumber->createCommand('INSERT INTO `t_serialnumber` (`serialnumber`) VALUES (:serialnumber)', [
    ':serialnumber' => '123',
])->execute();
                 if ($serialnumber->save()) {
                 // redirects to index page
                 $this->redirect(array('index'));
                  }
       
            
            
//            if ($account->save()) {
//            $member = new Member;
//            $member->attributes = $registration->attributes;
//            $member->user_id = $account->id;
//            if ($member->save()) {
//            // redirects to index page
//            $this->redirect(array('index'));
//            } else {
//                // what's wrong? get the error message
//                $registration->addErrors($member->getErrors());
//            }
//            } else {
//                // what's wrong? get the error message
//                $registration->addErrors($account->getErrors());
//            }
}
 }
 
 // display the registration form
 $this->render('sn', array('model' => $sn));}
        
        
        
//         public function actionSN()  //insert 50000 records using createCommand method
//        {
//                $sn = new SNForm(true); 
//                //echo $sn;
//                $sql = 'INSERT into t_serialnumber (`id`, `sparepart_number`, `serial_number`)';
//                for($i=0;$i<50000;$i++)
//                 $sql .= ',(NULL, \'Ravi\', \'9999999999\')';
//                
//                $connection = Yii::app() -> db;
//                $command = $connection -> createCommand($sql);
//                $command -> execute();
//                echo "</br>";
//                $execution_time = sprintf('It took %.5f sec', SNForm(true)-$sn);
//                echo $execution_time;
//                exit; 
//        }
}