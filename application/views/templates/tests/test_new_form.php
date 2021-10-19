<div class="content" style="<?php if(isset($_COOKIE['menu-width'])) { echo 'margin-left:'.$_COOKIE['menu-width'].'px;'; } ?>">  
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>            
            <li class="active">
                <?php
                echo __('Edit test');
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
                        echo __('Edit test');
                        ?>
                    </h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">                        
                    <?php
                    echo Form::open('tests/new', array('method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'new_test'));
                    $selected_test_id = isset($item) ? $item -> id : 0;
                    echo Form::hidden('test_id', $selected_test_id);
                    ?>
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? $item -> name : null;
                            echo __('Name').'*:'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::input('name', $selected_name, array('class' => 'required'));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="row-form row-form-content">
                        <div class="span3">
                        <?php 
                            echo __('Description').':<br>';
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            if(isset($item))
                            {
                                    $desc = $item -> description;
                            }
                            else
                            {
                                    $desc = null;
                            }		
                            echo Form:: textarea('description', $desc,  array('rows' => 3));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div> 
                    <div class="row-form">
                        <div class="span3"></div>
                        <div class="span9"><a style="height: 18px; padding-top: 1px;" class="btn btn-success cancel" href="<?php echo Kohana::$config->load('globals.base_url') ?>tests"><?php echo __('Cancel') ?></a> <?php echo Form::submit(NULL, __('Save'), array('class' => 'btn')); ?></div>
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
    $('#generateTest').submit(function() 
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
    $('#generateTest select').each(function(){
        
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
    
    $('#generateTest input').each(function(){
        
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
    var count_all = 0;
    $('select.words').each(function(){
        var value = $(this).val();
        count_all += value;
    });
    if(count_all == 0)
    {
        error = true;
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