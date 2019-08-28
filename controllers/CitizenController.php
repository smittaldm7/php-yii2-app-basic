<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Citizen;

class CitizenController extends Controller
{

	public function actionIndex()
	{

		//create
		$citizen0 = new Citizen();
		$citizen0->name = "Derek";
		$citizen0	->save();

		

		//read
		$citizens = Citizen::find()->all();

		foreach($citizens as $citizen)
		{
			echo $citizen->name;
		}

		$citizen1 = Citizen::find()->where(['id' => 1])->one(); 
		//returns an active record object
		$citizen2 = Citizen::find()->asArray()->where(['name'=>'Tom'])->one();
		//returns an array

		echo "<pre>";
		print_r($citizen1->name);
		echo "\n\n";
		print_r($citizen2);


		//update
		$citizen3 = Citizen::find()->where(['name'=>'Derek'])->one();
		//returns an array
		$citizen3->name = "Brian";
		$citizen3->save();



		//delete
		$citizen4 = Citizen::find()->where(['name'=>'Brian'])->one();
		$citizen4->delete();


	}
}