<div class="content"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>            
            <li><?php echo __('Employees') ?> <span class="divider">></span></li>
            <li class="active">
                <?php
                    if(isset($item))
                    {
                        echo __('Edit employee');
                    }
                    else
                    {
                        echo __('Add employee');
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
                            echo __('Edit employee');
                        }
                        else
                        {
                            echo __('Add employee');
                        }
                        ?>
                    </h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">                        
                    <?php
                    echo Form::open('employees/new', array('method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'employee_new'));
                    $selected_user_id = isset($item) ? $item -> id : 0;
                    echo Form::hidden('employee_id', $selected_user_id);
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
                            $selected_surname = isset($item) ? $item -> surname : null;
                            echo __('Surname').'*:'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::input('surname', $selected_surname, array('class' => 'required'));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_username = isset($item) ? $item -> username : null;
                            echo __('Login').'*:'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::input('username', $selected_username, array('class' => 'required'));
                            ?>
                            <small class="username_error"></small>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_email = isset($item) ? $item -> email : null;
                            echo __('Email').'*:'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::input('email', $selected_email, array('class' => 'required'));
                            ?>
                            <small class="email_error"></small>
                        </div>
                        <div class="clear"></div>
                    </div>  
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            echo __('Password');
                            if(isset($item))
                            {
                                echo ':';
                            }
                            else
                            {
                                '*:';
                            }
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            if(isset($item))
                            {
                                echo Form::password('password', null);
                            }
                            else
                            {
                                echo Form::password('password', null, array('class' => 'required'));
                            }
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>  
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            echo __('Repeat password');
                            if(isset($item))
                            {
                                echo ':';
                            }
                            else
                            {
                                '*:';
                            }
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            if(isset($item))
                            {
                                echo Form::password('repeat_password', null);
                            }
                            else
                            {
                                echo Form::password('repeat_password', null, array('class' => 'required'));
                            }
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div> 
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            echo __('Roles').':'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            $checked_manager = isset($is_manager) && $is_manager == true ? true : false;
                            $checked_administrator = isset($is_administrator) && $is_administrator == true ? true : false;
                            echo Form::checkbox('manager', 1, $checked_manager).' '.__('Manager').' ';
                            echo Form::checkbox('administrator', 1, $checked_administrator).' '.__('Administrator').' ';
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="row-form row-form-manager" <?php if($checked_manager == true) { echo 'style="display: none;"'; } ?>>
                        <div class="span3">
                        <?php 
                            echo __('Manager').':'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            $selected_manager_id = isset($item) ? $item -> manager_id : 0;
                            echo Form::select('manager_id', $user_managers, $selected_manager_id);
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>                      
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_from = isset($item) ? $item -> from : null;
                            echo __('The employment contract of').'*:'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::input('from', $selected_from, array('class' => 'required', 'id' => 'from'));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>  
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_to = isset($item) ? $item -> to : null;
                            echo __('The employment contract to').':'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::input('to', $selected_to, array('id' => 'to'));
                            ?>
                            <small><?php echo __('Field blank or a value of \'0000-00-00 \'is a contract of indefinite duration.'); ?></small>
                        </div>
                        <div class="clear"></div>
                    </div>  
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_type = isset($item) ? $item -> worktime_part : '1.000';
                            echo __('Type of contract').':'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::select('contract_type', $types_of_contract, $selected_type, array('style' => 'width: 150px; '));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="row-form">
                        <div class="span3"></div>
                        <div class="span9"><a style="height: 18px; padding-top: 1px;" class="btn btn-success" href="<?php echo Kohana::$config->load('globals.base_url') ?>employees"><?php echo __('Cancel') ?></a> <?php echo Form::submit(NULL, __('Save'), array('class' => 'btn')); ?></div>
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
    $("input[name=manager]").click(function(){
        $('.row-form-manager').slideToggle();
    });
    
    $( "#from" ).datepicker(        
    {
        
        changeMonth: true,
        numberOfMonths: 3,
        dateFormat: "yy-mm-dd",
        onClose: function( selectedDate ) 
        {
            $( "#to" ).datepicker( "option", "minDate", selectedDate );
        }
        });
        
    $( "#to" ).datepicker(        
    {
        
        changeMonth: true,
        numberOfMonths: 3,
        dateFormat: "yy-mm-dd",
        onClose: function( selectedDate ) 
        {
            $( "#from" ).datepicker( "option", "maxDate", selectedDate );
        }
    });
    
    $('#employee_new').submit(function() 
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
    
    $("input[name=username]").blur(function(){
        $.post("<?php echo Kohana::$config->load('globals.base_url'); ?>check/checkUniqueUsername", { json_string:JSON.stringify({"name": $(this).val(), 'id': $('input[name=employee_id]').val()}) } , function(res){
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
        $.post("<?php echo Kohana::$config->load('globals.base_url'); ?>check/checkUniqueEmail", { json_string:JSON.stringify({"email": $(this).val(), 'id': $('input[name=employee_id]').val()}) } , function(res){
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
});

function validate() 
{
    var error = false;
    $('#employee_new select').each(function(){
        
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
    
    $('#employee_new input').each(function(){
        
        if($(this).hasClass('required') && $(this).val() == '')
        {
            $(this).addClass('error');
            error = true;
        }
        else
        {
            $(this).removeClass('error');
        }
    }); 
    
    if($('input[name=email]').val() != '')
    {
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test($('input[name=email]').val()))
        {
            $('input[name=email]').addClass('error');
            error = true;
        }
        else
        {
            $('.email_error').html('');
            $('input[name=email]').removeClass('error');
        }
    }
    
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


