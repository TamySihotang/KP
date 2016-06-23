
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<?php
class SNForm extends CFormModel {
 // attributes
 // for bio
 public $sparepart_id;
 public $serial;

 // applied rules for validation
 public function rules() {
 return array(
 // safe attributes are assigned-able in all scenario types
 array('sparepart_id, serial', 'safe'),
 );
 }

 // sets attribute labels for view labeling
 public function attributeLabels() {
 return array(
 'sparepart_id' => 'Sparepart',
 'serial' => 'SN',
 
 );
 }
}
?>

