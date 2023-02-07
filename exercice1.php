<?php 

class Message {

    private $message = 'MyClass class has initialized !';

    public function getMessage(){
        return $this->message;
    }

}

$message = new Message();

echo $message -> getMessage();
?>