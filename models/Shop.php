<?php

namespace app\models;
use yii\base\Model;

class Shop extends Model
{
    public $id;
    public $name;
    public $password1;
    public $password2;
    public $address;
    public $email;
    public $phone;
    public $pic;
    public $file;
    public $verifyCode;

    public function rules()
    {
        return [
            [['name','password2', 'address','verifyCode'],'required'],
            ['password1','compare','compareAttribute' => 'password2'],
            ['email','email'],
//            过滤器-filter
            ['phone','filter','filter'=>function($value){
            return '+86 '.$value;
            }],
            ['pic', 'image', 'extensions' => 'png, jpg',
                'minWidth' => 100, 'maxWidth' => 1000,
                'minHeight' => 100, 'maxHeight' => 1000,
            ],
            ['file', 'file', 'extensions' => ['png', 'jpg', 'gif'], 'maxSize' => 1024*1024*1024],
            ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'=>'序号',
            'name' => '商店名称',
            'password1'=>'密码',
            'password2'=>'再次输入密码',
            'address' =>'地址',
            'email' =>'邮箱',
            'phone' =>'联系方式',
            'pic' =>'图片',
            'file' =>'文件',
            'verifyCode'=>'验证码',
        ];
    }
}