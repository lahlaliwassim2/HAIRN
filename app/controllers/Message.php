<?php
class Message extends controller{
    public function __construct()
    {
        $this->ModelMessage = $this->model('ModelMessage');
    }
    public function SendMessage(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
                 $data = $_POST;
                 $message = $this->ModelMessage->SendMessage($data,$_SESSION['id']);
                 redirect('pages/profil');
        }
    }

    public function deleteMessage($id){
        $this->ModelMessage->deleteMessage($id);
        redirect('pages/profil');

    }

}

