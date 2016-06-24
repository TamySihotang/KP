<?php

class AddSparePart extends CFormModel {
// attributes
// for bio
public $category;
public $series;
public $type;
public $model;
public $aliasname;
public $partno;
public $status;
public $serial_number;
// applied rules for validation
public function rules() {
    return array(
    // safe attributes are assigned-able in all scenario types
        array('category, series, type, model,
        aliasname, partno, status, serial_number', 'safe'),
    );
}
// sets attribute labels for view labeling
public function attributeLabels() {
return array(
'category' => 'Category',
'series' => 'Series',
'type' => 'Type',
'model' => 'Model',
'aliasname' => 'Aliasname',
'status' => 'Status',
'serial_number' => 'Serial Number',
);
}
}
?>