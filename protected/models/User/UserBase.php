<?php

/**
 * This is the model class for table "vzdb_user".
 *
 * The followings are the available columns in table 'vzdb_user':
 * @property string $ID_user
 * @property string $username
 * @property string $password
 * @property integer $point
 * @property string $nickname
 * @property string $profession
 * @property string $sex
 * @property string $e_mail
 * @property integer $age
 * @property string $regtime
 * @property string $regip
 * @property string $logintime
 * @property string $loginip
 * @property string $login_adress
 */
class UserBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vzdb_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, e_mail, age, regip, logintime, loginip', 'required'),
			array('point, age', 'numerical', 'integerOnly'=>true),
			array('username, password', 'length', 'max'=>32),
			array('nickname, profession, e_mail, login_adress', 'length', 'max'=>55),
			array('sex', 'length', 'max'=>3),
			array('regtime, logintime', 'length', 'max'=>10),
			array('regip, loginip', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_user, username, password, point, nickname, profession, sex, e_mail, age, regtime, regip, logintime, loginip, login_adress', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_user' => '用户id',
			'username' => '用户名',
			'password' => '密码',
			'point' => '会员积分',
			'nickname' => '昵称',
			'profession' => '职业',
			'sex' => '性别',
			'e_mail' => '邮箱',
			'age' => '年龄',
			'regtime' => '注册时间',
			'regip' => '注册IP',
			'logintime' => '登陆时间',
			'loginip' => '登陆IP',
			'login_adress' => 'Login Adress',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID_user',$this->ID_user,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('point',$this->point);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('profession',$this->profession,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('e_mail',$this->e_mail,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('regtime',$this->regtime,true);
		$criteria->compare('regip',$this->regip,true);
		$criteria->compare('logintime',$this->logintime,true);
		$criteria->compare('loginip',$this->loginip,true);
		$criteria->compare('login_adress',$this->login_adress,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
