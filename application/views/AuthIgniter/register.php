<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration form</title>
</head>
<body>
    <?php echo form_open('user/register'); ?>
        <p><label for="mail">Mail adress </label><?php echo form_input(array('name' => 'mail', 'placeholder' => 'Mail adress', 'value' => set_value('mail'))); ?><?php echo form_error('mail'); ?></p>

        <p>
            <label for="password">Password </label>
            <?php echo form_password(array('name' =>'password', 'placeholder' => 'Password', 'value' => set_value('password'))); ?><?php echo form_error('password'); ?>
        </p>

        <p>
            <label for="passwordConfirmation">Password confirmation </label>
            <?php echo form_password(array('name' => 'passwordConfirmation', 'placeholder' => 'Password confirmation', 'value' => set_value('passwordConfirmation'))); ?><?php echo form_error('passwordConfirmation'); ?>
        </p>
        
        <p>
            <?php echo form_submit(array('value' => 'Register me, foo!')); ?>
        </p>
    <?php echo form_close(); ?>
</body>
</html>