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
<h1>USER</h1>
 
<?= Html::a('Create', ['user/create'], ['class' => 'btn btn-outline-primary']); ?>



<table border="2">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Email ID</th>
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->firstname; ?></td>
        <td><?= $field->lastname; ?></td>
        <td><?= $field->gender; ?></td>
        <td><?= $field->email_id; ?></td>

        <td><?= Html::a("View", ['user/view', 'User_id' => $field->User_id],['class' => 'btn btn-outline-success']); ?> |

            <?= Html::a("Edit", ['user/edit', 'User_id' => $field->User_id], ['class' => 'btn btn-outline-warning']); ?> | <?= Html::a("Delete", ['user/delete', 'User_id' => $field->User_id],['class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Data will be Deleted Permenantly?',
                'method' => 'post',
            ]]); ?></td>
    </tr>

    <?php } ?>
</table>