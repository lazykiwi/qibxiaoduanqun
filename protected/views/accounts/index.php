<?php
#导航栏
$this->breadcrumbs=array(
	'Accounts',
);

#右侧菜单栏
$this->menu=array(
	array('label'=>'Create Accounts', 'url'=>array('create')),
	array('label'=>'Manage Accounts', 'url'=>array('admin')),
);
?>

<h1>Accounts</h1>

<?php 
#数据列表
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
?>
