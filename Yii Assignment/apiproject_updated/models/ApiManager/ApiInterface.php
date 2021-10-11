<?php
namespace app\models\ApiManager;

interface ApiInterface {
    public function create();
    public function edit($A_id);
    public function delete($A_id);
    public function view($A_id);
}
?>