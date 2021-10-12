<?php
namespace app\models\ModuleManager;

interface ModuleInterface {
    public function create();
    public function edit($M_id);
    public function delete($M_id);
    public function view($M_id);
    public function index();
}
?>