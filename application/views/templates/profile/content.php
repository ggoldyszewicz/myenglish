<div class="content" style="<?php if(isset($_COOKIE['menu-width'])) { echo 'margin-left:'.$_COOKIE['menu-width'].'px;'; } ?>"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>
            <li class="active"><?php echo __('Change password') ?></li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-documents"></div>
                    <h1>
                        <?php
                        echo __('Change password');
                        ?>
                    </h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">                        
                    <?php
                    echo Form::open('profile', array('method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'change_password'));
                    ?>
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                        echo __('Password').'*:';
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::password('password', null, array('class' => 'required'));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>  
                    
                    <div class="row-form">
                        <div class="span3">
                            <?php 
                            echo __('Repeat password').'*:';
                            ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::password('repeat_password', null, array('class' => 'required'));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div> 
                    
                    

                    <div class="row-form">
                        <div class="span3"></div>
                        <div class="span9"> <?php echo Form::submit(NULL, __('Save'), array('class' => 'btn')); ?></div>
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
    $('#change_password').submit(function() 
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
    
    $('#change_password input').each(function(){
        
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