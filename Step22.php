<?php

class Logger {
	
	public function log($message)
	{
		echo"Logiing Message: $message";
	}
}
// $logger = new Logger();
// $logger->log("this is a message");

class UserProfile {

	private $logger;

	public function createUser()
	{
		
		$this->logger->log("User Created.");
	}
	public function updateUser()
	{
		
		$this->logger->log("User Update.");
	}
	public function deleteUser()
	{
		
		$this->logger->log("User Delete.");
	}

	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}
}

$logger =new Logger();

$profile = new UserProfile($logger);

$profile->createUser();

$profile->updateUser();
?>