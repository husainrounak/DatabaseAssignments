<?php
namespace app\models\ProjectManager;

interface ProjectInterface {
    public function create();
    public function edit($P_id);
    public function delete($P_id);
    public function view($P_id);
    public function index();
}
?>