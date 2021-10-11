<?php
namespace app\models\UserManager;

interface UserInterface {
    public function create();
    public function edit($User_id);
    public function delete($User_id);
    public function view($User_id);
    
}
?>