<?php
//
class RegistrationForm extends CFormModel {
// attributes
// for bio
public $name_office;
public $email_office;
public $address_office;
public $phone_office;
public $username;
public $password;
public $repassword;
// applied rules for validation
public function rules() {
    return array(
    // safe attributes are assigned-able in all scenario types
        array('name_office, email_office, address_office, phone_office 
        username, password, repassword', 'safe'),
    );
}
// sets attribute labels for view labeling
public function attributeLabels() {
return array(
'name_office' => 'Office Name',
'email_office' => 'Email',
'address_office' => 'Address',
'phone_office' => 'Phone',
'username' => 'Username',
'password' => 'Password',
'repassword' => 'Retype password',
);
}
}
?>