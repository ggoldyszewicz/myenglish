<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <title><?php echo Kohana::$config->load('globals.title') ?></title>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js'></script>
    
    <?php foreach($styles as $file => $type) { echo HTML::style($file, array('media' => $type), NULL, TRUE), "\n"; }?>
 
    <?php foreach($scripts as $file) { echo HTML::script($file), "\n"; }?> 
</head>
<body>
    
    <div class="loginBox"> 
        
        <?php
        if(isset($errors))
        {
            echo '<div class="alert alert-error">'.$errors.'</div>';
        }
        ?>
        <div class="loginHead">
            <?php echo Kohana::$config->load('globals.title') ?>
        </div>
        <?php echo Form::open('login', array('method' => 'post', 'class' => 'form-horizontal')); ?>
            <div class="control-group">
                <label for="inputEmail"><?php echo __('Login') ?></label>
                <?php echo Form::input('inputEmail', ''); ?>
            </div>
            <div class="control-group">
                <label for="inputPassword"><?php echo __('Password') ?></label>   
                <?php echo Form::password('inputPassword', null); ?>              
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-block"><?php echo __('Sign in') ?></button>
            </div>
        <?php echo Form::close(); ?>
    </div>   

<?php
echo Auth::instance()->hash_password('rory/prdl63v');
?>	
    
</body>
</html>
