<html>
<head>
    <title>Добавить</title>
</head>
<body>
<div style="position: absolute; top:30%; left:45%">
<?php echo validation_errors(); ?>
<?php echo form_open('admin/form/edit/'.$user_item['id']); ?>


    <h5>Имя пользователя</h5>
    <input type="text" name="im" value="" size="50" />

    <h5>Фамилия</h5>
    <input type="text" name="fam" value="" size="50" />

<h5>Отчество</h5>
<input type="text" name="otch" value="" size="50" />


<div><input type="submit" value="изменить" /></div>

</form>
</div>
</body>
</html>