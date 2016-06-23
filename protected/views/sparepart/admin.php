<?php
/* @var $this SparepartController */
/* @var $model sparepart */

$this->breadcrumbs=array(
	'Spareparts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List sparepart', 'url'=>array('index')),
	array('label'=>'Create sparepart', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sparepart-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Spareparts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sparepart-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
            
		//'id',
		//'office_id',
                'category',
		'series',
		'type',
		'model',
		'aliasname',
		'partno',
		'status',
//                'link'=>array(
//                        'type'=>'raw',
//                        'value'=> 'CHtml::button("detail",array("onclick"=>"document.location.href=\'".Yii::app()->controller->createUrl("serialnumber/admin",array("sparepart_id"=>$data->id))."\'"))',
//		       
//               ),
            array(
            'header' => 'Actions',
            'class' => 'CButtonColumn',
            'template' => '{view}',
            'buttons'=>  array(
              'view' => array(
                    'label' => 'View',
                    //'imageUrl' => Yii::app()->baseUrl . '/images/pinjam.png',
                    'url' => '$this->grid->controller->createUrl("serialnumber/admin",array("id"=>$data->id))',
                    //'click' => 'function(){return confirm("are you sure to borrow this book?");}',
                    //'visible' => '$data->loanable==1'
                ), 
            ),
		),
		
	),
)); ?>
