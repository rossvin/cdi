

<table border='1' cellpadding='4' style="position: absolute; top:30%; left:45%">
<tr>
    <td><strong>№</strong></td>
    <td><strong>Фамилия</strong></td>
    <td><strong>Имя</strong></td>
    <td><strong>Отчество</strong></td>
    <td><strong><a href="<?php echo site_url('admin/form/create/'); ?>">Добавить</a></td>
</tr>
<?php foreach ($user as $user_item): ?>
    <tr>
        <td><?php echo $user_item['id']; ?></td>
        <td><?php echo $user_item['fam']; ?></td>
        <td><?php echo $user_item['im']; ?></td>
        <td><?php echo $user_item['otch']; ?></td>
        <td>

            <a href="<?php echo site_url('admin/form/edit/'.$user_item['id']); ?>">Edit</a> |
            <a href="<?php echo site_url('admin/form/delete/'.$user_item['id']); ?>" onClick="return confirm('Вы точно хотите удалить?')">Delete</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>






</body>
</html>