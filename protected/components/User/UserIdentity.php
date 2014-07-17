<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	protected $_id;
	protected $VL_errorMessage;	
	protected $Usertype;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

	public function authenticate()
	{

		$record = UserBase::model()->findByAttributes(array('username'=>$this->username));  
 $this->Usertype='user';
		
		if($record===null)
		{
			$this->VL_errorMessage = 'You enter the username does not exist!--VZ';
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else if($record->password!==$this->password)
		{
			$this->VL_errorMessage = ' Password is incorrect!--VZ';
			$this->errorCode=self::ERROR_PASSWORD_INVALID;			
		}       
		else
		{         
			$this->_id=$record->ID_user;          
			$this->setState('title', $record->username);
			$this->errorCode=self::ERROR_NONE;			
		}
		return !$this->errorCode;
		
	}	
	public function getId()
	{
		return $this->_id;
	}
	public function getUsertype()
	{
		return $this->Usertype;
	}
}