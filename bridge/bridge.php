<?php

interface device
{
        public function setSender(massaging $sender);
        public function send($body);
}




class phone implements device
{
    protected $sender;
    public function setSender(massaging $sender){
		$this->sender = $sender;
	}

	public function send($body)
	{
		$this->sender->send($body." send by phone");
	}
}




class tablet implements device
{
    protected $sender;
    public function setSender(massaging $sender){
		$this->sender = $sender;
	}

	public function send($body)
	{
		$this->sender->send($body." send by tablet");
	}
}





interface massaging {
 	public function send($body);
}




class telegram implements massaging
{
	public function send($body) {
		echo 'telegram : '.$body;
	}
}




class Whatsapp  implements massaging
{
	public function send($body) {
		echo 'Whatsapp : ' .$body;
	}
}




$phone = new phone;
$phone->setSender(new telegram);
$phone->send("hello");