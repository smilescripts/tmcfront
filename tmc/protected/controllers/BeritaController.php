<?php

class BeritaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
					'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Berita;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Berita']))
		{
			$model->attributes=$_POST['Berita'];
			$uploadedFile=CUploadedFile::getInstance($model,'foto');
			if(!empty($uploadedFile))  // check if uploaded file is set or not
					{
						$model->foto='1.'.$uploadedFile->getExtensionName();
					}
			
			if($model->save()){
			
				if(!empty($uploadedFile))  // check if uploaded file is set or not
					{
							if (!file_exists(Yii::app()->basePath.'/../foto/berita/'.$model->kode_berita)) {
								mkdir(Yii::app()->basePath.'/../foto/berita/'.$model->kode_berita);
							}
						$formatName1='1.'.$uploadedFile->getExtensionName();
						$uploadedFile->saveAs(Yii::app()->basePath.'/../foto/berita/'.$model->kode_berita.'/'.$formatName1);
						
						
						
						
						
						
					}
					/*
						// twitter
				
						require_once('codebird/src/codebird.php');
 
						\Codebird\Codebird::setConsumerKey("zHeBf5vVYSSLq07cXYUXJv0iB", "QZ7md9kjmjyJDIzplYSbqWPIMm8F3umI8HW8QIVS7Ove2iZOvy");
						$cb = \Codebird\Codebird::getInstance();
						$cb->setToken("296609812-gD029s4U6UoZqnEd4OSrLBNO3HFGk5yAbUKILSbT", "2y1kw6cedbLKiXmfCJhSK9jiwR6QAhgpTYKaRBjYJHV2l");
						 
						
						$link='http://localhost/tmcfront/index.php?r=berita/view&id='.$model->kode_berita.'';
						$foto='foto/berita/'.$model->kode_berita.'/'.$model->foto.'';
						
						$isi=$model->isi_berita;
						$params = array(
						  
						  'status' => "$link",
						  'media[]' => "$foto"
						);
						$reply = $cb->statuses_updateWithMedia($params);
						// end of twitter
						
						//facebook
						include_once("config.php");

							$userPageId 	= "";
							$userMessage 	= strip_tags($isi, '');
							
							if(strlen($userMessage)<1) 
							{

								$userMessage = 'No message was entered!';
							}
							
							
								$post_url = '/'.$userPageId.'/feed';

							
								$msg_body = array(
								'message' => $userMessage,
								'caption' => "TMC",
								'link' => $link,
								);
							
							if ($fbuser) {
							  try {
									$postResult = $facebook->api($post_url, 'post', $msg_body );
								} catch (FacebookApiException $e) {
								echo $e->getMessage();
							  }
							}else{
							 $loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
							 header('Location: ' . $loginUrl);
							}
						
						
						//end of facebook
						
				*/
				$this->redirect(array('view','id'=>$model->kode_berita));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Berita']))
		{
			$model->attributes=$_POST['Berita'];
			$uploadedFile=CUploadedFile::getInstance($model,'foto');
			if(!empty($uploadedFile))  // check if uploaded file is set or not
					{
						$model->foto='1.'.$uploadedFile->getExtensionName();
					}
			if($model->save())
				{
				if(!empty($uploadedFile))  // check if uploaded file is set or not
					{
							if (!file_exists(Yii::app()->basePath.'/../foto/berita/'.$model->kode_berita)) {
								mkdir(Yii::app()->basePath.'/../foto/berita/'.$model->kode_berita);
							}
						$formatName1='1.'.$uploadedFile->getExtensionName();
						$uploadedFile->saveAs(Yii::app()->basePath.'/../foto/berita/'.$model->kode_berita.'/'.$formatName1);
					}
				
				$this->redirect(array('view','id'=>$model->kode_berita));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Berita');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
	
		$kategoriberita=new KategoriBerita('search');
		$kategoriberita->unsetAttributes();  // clear any default values
		if(isset($_GET['KategoriBerita']))
			$kategoriberita->attributes=$_GET['KategoriBerita'];
		
		$model=new Berita('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Berita']))
			$model->attributes=$_GET['Berita'];

		$this->render('admin',array(
			'model'=>$model,
			'kategoriberita'=>$kategoriberita,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Berita the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Berita::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Berita $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='berita-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
