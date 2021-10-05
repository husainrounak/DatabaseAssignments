<?php
use yii\helpers\Html;
?>
 
<style>
table{
     border-radius: 50;
}
table th,td{
    padding: 10px;

}
</style>
<h1>Project</h1>
 
<?= Html::a('Create', ['project/create'], ['class' => 'btn btn-outline-primary']); ?>



<table border="2">
    <tr>
        <th>Project Title</th>
        <th>Project Description</th>
        <th>Project Logo</th>
        
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->P_title; ?></td>
        <td><?= $field->P_desc; ?></td>
        <td><?= $field->P_logo; ?></td>
        

        <td>
            <?= Html::a("View", ['project/view', 'P_id' => $field->P_id],['class' => 'btn btn-outline-success']); ?> |
            <?= Html::a("Edit", ['project/edit', 'P_id' => $field->P_id], ['class' => 'btn btn-outline-warning']); ?> | <?= Html::a("Delete", ['project/delete', 'P_id' => $field->P_id],['class' => 'btn btn-outline-danger','data' => [
                'confirm' => 'Data will be Deleted Permenantly?',
                'method' => 'post',
            ]]); ?></td>
    </tr>

    <?php } ?>
</table>