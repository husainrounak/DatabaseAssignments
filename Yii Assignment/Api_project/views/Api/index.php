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
<h1>Api</h1>
 
<?= Html::a('Create', ['api/create'], ['class' => 'btn btn-outline-primary']); ?>



<table border="2">
    <tr>
        <th>Api Title</th>
        <th>Api Description</th>
        <th>Api Url</th>
        <th>Api Method</th>
        <th>Api Request</th>
        <th>Api Response</th>

        
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->A_title; ?></td>
        <td><?= $field->A_desc; ?></td>
        <td><?= $field->A_url; ?></td>
        <td><?= $field->A_method; ?></td>
        <td><?= $field->A_request; ?></td>
        <td><?= $field->A_response; ?></td>
        

        <td><?= Html::a("View", ['api/view', 'A_id' => $field->A_id],['class' => 'btn btn-outline-success']); ?> |

            <?= Html::a("Edit", ['api/edit', 'A_id' => $field->A_id], ['class' => 'btn btn-outline-warning']); ?> | <?= Html::a("Delete", ['api/delete', 'A_id' => $field->A_id],['class' => 'btn btn-outline-danger','data' => [
                'confirm' => 'Data will be Deleted Permenantly?',
                'method' => 'post',
            ]]); ?></td>
    </tr>

    <?php } ?>
</table>