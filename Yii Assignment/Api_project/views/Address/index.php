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
<h1>User Address</h1>
 
<?= Html::a('Create', ['address/create'], ['class' => 'btn btn-outline-primary']); ?>



<table border="2">
    <tr>
        <th>Address One</th>
        <th>Address Two</th>
        <th>City</th>
        <th>State</th>
        <th>Pincode</th>
        <th>Coountry</th>

        
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->addressone; ?></td>
        <td><?= $field->addresstwo; ?></td>
        <td><?= $field->city; ?></td>
        <td><?= $field->state; ?></td>
        <td><?= $field->pincode; ?></td>
        <td><?= $field->country; ?></td>
        

        <td>
            <?= Html::a("View", ['address/view', 'Add_id' => $field->Add_id],['class' => 'btn btn-outline-success']); ?> |
            <?= Html::a("Edit", ['address/edit', 'Add_id' => $field->Add_id], ['class' => 'btn btn-outline-warning']); ?> | <?= Html::a("Delete", ['address/delete', 'Add_id' => $field->Add_id],['class' => 'btn btn-outline-danger',
        'data' => [
                'confirm' => 'Data will be Deleted Permenantly?',
                'method' => 'post',
            ]]); ?></td>
    </tr>

    <?php } ?>
</table>