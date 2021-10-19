<div class="content" style="<?php if(isset($_COOKIE['menu-width'])) { echo 'margin-left:'.$_COOKIE['menu-width'].'px;'; } ?>"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>            
            <li class="active">
                <?php
                    if(isset($item))
                    {
                        echo __('Edit');
                    }
                    else
                    {
                        echo __('Add');
                    }
                ?>
            </li>
        </ul>
    </div>
    
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-documents"></div>
                    <h1>
                        <?php
                            if(isset($item))
                            {
                                echo __('Edit');
                            }
                            else
                            {
                                echo __('Add');
                            }
                        ?>
                    </h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">                        
                    <?php
                    echo Form::open('users/new', array('method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'new_user'));
                    $selected_test_id = isset($item) ? $item -> id : 0;
                    echo Form::hidden('user_id', $selected_test_id);
                    ?>
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? $item -> name : null;
                            echo __('Name (person)').'*:'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::input('name', $selected_name, array('class' => 'required'));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? $item -> surname : null;
                            echo __('Surname').'*:'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::input('surname', $selected_name, array('class' => 'required'));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>                    
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? $item -> username : null;
                            echo __('Login').'*:'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::input('login', $selected_name, array('class' => 'required'));
                            ?>
                            <small class="username_error"></small>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? $item -> email : null;
                            echo __('Email').'*:'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::input('email', $selected_name, array('class' => 'required'));
                            ?>
                            <small class="email_error"></small>
                        </div>
                        <div class="clear"></div>
                    </div>                    
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? $item -> username : null;
                            echo __('Password').':'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::password('password', null);
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? $item -> username : null;
                            echo __('Repeat password').':'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::password('repeat_password', null);
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? $item -> username : null;
                            echo __('Roles').':'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            $checked = (isset($is_administrator) && $is_administrator == true) ? true : false;
                            echo Form::checkbox('is_administrator', 1, $checked).' '.__('Administrator');
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>   
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? $item -> username : null;
                            echo __('Permissions').':'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php   
                            $check = isset($reading) && $reading == true ? true : false;
                            echo Form::checkbox('reading', 1, $check).' '.__('Reading').'<br>';

                            $check = isset($adding) && $adding == true ? true : false;
                            echo Form::checkbox('adding', 1, $check).' '.__('Adding').'<br>';

                            $check = isset($editing) && $editing == true ? true : false;
                            echo Form::checkbox('editing', 1, $check).' '.__('Editing').'<br>';

                            $check = isset($deleting) && $deleting == true ? true : false;
                            echo Form::checkbox('deleting', 1, $check).' '.__('Deleting').'<br>';

                            $check = isset($haveprivate) && $haveprivate == true ? true : false;
                            echo Form::checkbox('haveprivate', 1, $check).' '.__('The ability to create private');
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>                     

                    
                    <div class="row-form">
                        <div class="span3"></div>
                        <div class="span9"><a style="height: 18px; padding-top: 1px;" class="btn btn-success cancel" href="<?php echo Kohana::$config->load('globals.base_url') ?>users"><?php echo __('Cancel') ?></a> <?php echo Form::submit(NULL, __('Save'), array('class' => 'btn')); ?></div>
                        <div class="clear"></div>
                    </div>                         
                    <?php
                    echo Form::close();
                    ?>
                </div>
            </div>

        </div>

    </div>

</div>
<script>
$(document).ready(function() 
{   
    $("input[name=login]").blur(function(){
        $.post("<?php echo Kohana::$config->load('globals.base_url'); ?>check/checkUniqueUsername", { json_string:JSON.stringify({"name": $(this).val(), 'id': $('input[name=user_id]').val()}) } , function(res){
            if(res)
            {
                $('.username_error').html('<?php echo __('Name exists in the database. Select a different.'); ?>');
            }
            else
            {
                $('.username_error').html('');
            }

        }, "json");
    });
    
    $("input[name=email]").blur(function(){
        $.post("<?php echo Kohana::$config->load('globals.base_url'); ?>check/checkUniqueEmail", { json_string:JSON.stringify({"email": $(this).val(), 'id': $('input[name=user_id]').val()}) } , function(res){
            if(res)
            {
                $('.email_error').html('<?php echo __('Email exists in the database. Select a different.'); ?>');
            }
            else
            {
                $('.email_error').html('');
            }

        }, "json");
    });
    
    $('#new_user').submit(function() 
    { 
        if(validate() == false)
        {
            alert("<?php echo __('Please fill in all fields') ?>");
            return false;
        }
        else
        {        
            return true;
        }
        
    });
});

function validate() 
{
    var error = false;

    
    $('#new_user input').each(function(){
        
        if($(this).hasClass('required') && $(this).val() == 0)
        {
            $(this).addClass('error');
            error = true;
        }
        else
        {
            $(this).removeClass('error');
        }
    }); 

    
    if($('input[name=password]').val() != '')
    {
        if($('input[name=password]').val() != $('input[name=repeat_password]').val())
        {
            $('input[name=repeat_password]').addClass('error');
            error = true;
        }
        else
        {
            $('input[name=repeat_password]').removeClass('error');
        }
    }
    
    if(error == true)
    {
        return false;
    }
    else
    {
        return true;
    }
}
</script>