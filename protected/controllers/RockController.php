<?php

class RockController extends Controller
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
				'actions'=>array('index','view','showseries','showcolors'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$model=new Rock;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Rock']))
		{
                        $dir = Yii::getPathOfAlias('webroot.uploads');
			$model->attributes=$_POST['Rock'];
                        $model->image=CUploadedFile::getInstance($model,'image');
                        $model->image2=CUploadedFile::getInstance($model,'image2');
                        
			if($model->save()){
                            //image name save to database
                            //modelId + image name save as image name on host
                            //$nameSaveToFile = $model->modelId ."_". $model->image->getName();
                            $model->image->saveAs($this->getImageUploadDirectory($model->modelId, $model->image->getName(), false));
                            //$nameSaveToFile = $model->modelId ."_". $model->image2->getName();
                            $model->image2->saveAs($this->getImageUploadDirectory($model->modelId, $model->image2->getName(), true));
                            $this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Rock']))
		{
                        
			$model->attributes=$_POST['Rock'];
                        $model->image=CUploadedFile::getInstance($model,'image');
                        $model->image2=CUploadedFile::getInstance($model,'image2');
			if($model->save()){
                            //image name save to database
                            //modelId + image name save as image name on host
                            //$nameSaveToFile = $model->modelId ."_". $model->image->getName();
                            $model->image->saveAs($this->getImageUploadDirectory($model->modelId, $model->image->getName(), false));
                            //$nameSaveToFile = $model->modelId ."_". $model->image2->getName();
                            $model->image2->saveAs($this->getImageUploadDirectory($model->modelId, $model->image2->getName(), true));
                            $this->redirect(array('view','id'=>$model->id));
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
        public function getImageUploadDirectory($modelId, $filename, $is_large){
            $dir = "";
            if($is_large){
                $dir = Yii::getPathOfAlias('webroot.uploads') .'/'.'large_'.$modelId . '_'. $filename;
            }else{
                $dir = Yii::getPathOfAlias('webroot.uploads') .'/'.$modelId . '_'. $filename;
            }
            return $dir;
        }
        
	public function actionDelete($id)
	{
                $model = Rock::model()->findByPk($id);
                $dir = $this->getImageUploadDirectory($model->modelId, $model->image, false);
                if (file_exists($dir) && strlen($model->image) > 0){
                    unlink($dir);
                }
                $dir = $this->getImageUploadDirectory($model->modelId, $model->image2, true);
                if (file_exists($dir) && strlen($model->image2) > 0){
                    unlink($dir);
                }
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
		$dataProvider=new CActiveDataProvider('Rock');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Rock('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Rock']))
			$model->attributes=$_GET['Rock'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Rock the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Rock::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Rock $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='rock-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionShowSeries($type_id){
            
            $rock_list = Rock::model()->findAll(array("condition"=>"series = $type_id"));
            $this->render('show_series',array(
			'model'=>$rock_list,
		));
        }
        
        public function actionShowColors(){
            
//            $rock_list = Rock::model()->findAll();
//            $this->render('show_colors',array(
//			'model'=>$rock_list,
//		));
            $this->render('show_colors');
        }
}
