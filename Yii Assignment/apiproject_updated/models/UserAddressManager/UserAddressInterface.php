<?php
namespace app\models\UserAddressManager;

interface UserAddressInterface {
    public function create();
    public function edit($Add_id);
    public function delete($Add_id);
    public function view($Add_id);
}
?>