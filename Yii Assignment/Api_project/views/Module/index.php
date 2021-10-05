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
<h1>Module</h1>
 
<?= Html::a('Create', ['module/create'], ['class' => 'btn btn-outline-primary']); ?>



<table border="2">
    <tr>
        <th>Module Title</th>
        <th>Module Description</th>
        
        
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->M_title; ?></td>
        <td><?= $field->M_desc; ?></td>
        
        

        <td>
            <?= Html::a("View", ['module/view', 'M_id' => $field->M_id],['class' => 'btn btn-outline-success']); ?> |
            <?= Html::a("Edit", ['module/edit', 'M_id' => $field->M_id], ['class' => 'btn btn-outline-warning']); ?> | <?= Html::a("Delete", ['module/delete', 'M_id' => $field->M_id],['class' => 'btn btn-outline-danger','data' => [
                'confirm' => 'Data will be Deleted Permenantly?',
                'method' => 'post',
            ]]); ?></td>
    </tr>

    <?php } ?>
</table>