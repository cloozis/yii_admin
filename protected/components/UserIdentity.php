<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	public $email;

	public function __construct($email, $password)
	{
		$this->email = $email;
		$this->password = $password;
	}

	public function authenticate()
	{
		$record = Users::model()->findByAttributes(array('email' => $this->email));
		if ($record === null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		else if ($record->password !== crypt($this->password, $record->password))
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		else {
			$this->_id = $record->id;
			$this->setState('name', $record->name);
			$this->setState('email', $record->email);
			$this->errorCode = self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

	public function getId()
	{
		return $this->_id;
	}
}