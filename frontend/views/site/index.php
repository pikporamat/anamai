<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'กรมอนามัย';
?>
<?php
$route1=Yii::$app->urlManager->createUrl('test/test1');
?>
<a href="<?=$route1;?>">ไปที่ test1</a>
<br>

<?php
$route2=Yii::$app->urlManager->createUrl(['test/test2','name'=>'poramat','lname'=>'pik']);
?>
<a href="<?=$route2;?>">ไปที่ test2</a>
<br>

<?=Html::a('ลิงค์แบบ 3',['test/test1','a'=>'1']);?>

