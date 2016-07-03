<?php
class User
{
	private $user_name;
	private $user_pass;
	private $user_id;

	public function __construct($user_name,$user_pass,$user_id){
		$this->user_name = $user_name;
		$this->user_pass = $user_pass;
		$this->user_id = $user_id;
	}

	/**
	 * @return mixed
	 */
	public function getUserName()
	{
		return $this->user_name;
	}

	/**
	 * @param mixed $user_name
	 */
	public function setUserName($user_name)
	{
		$this->user_name = $user_name;
	}

	/**
	 * @return mixed
	 */
	public function getUserPass()
	{
		return $this->user_pass;
	}

	/**
	 * @param mixed $user_pass
	 */
	public function setUserPass($user_pass)
	{
		$this->user_pass = $user_pass;
	}

	/**
	 * @return mixed
	 */
	public function getUserId()
	{
		return $this->user_id;
	}

	/**
	 * @param mixed $user_id
	 */
	public function setUserId($user_id)
	{
		$this->user_id = $user_id;
	}

}
?>
