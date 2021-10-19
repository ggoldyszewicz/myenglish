<div class="content"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>
            <li><?php echo __('Links') ?> <span class="divider">></span></li>
            <li class="active"><?php echo __('Add link') ?></li>
        </ul>
    </div>
    
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-documents"></div>
                    <h1><?php echo __('Add link') ?></h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">                        
                    <?php
                    echo Form::open('links/new', array('method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'link_new'));
                    $selected_brand = isset($item) ? $item -> id : 0;
                    echo Form::hidden('link_id', $selected_brand);
                    ?>
                    <div class="row-form">
                        <div class="span3"><?php echo __('Name') ?>*:</div>
                        <?php
                        $selected_name = isset($item) ? $item -> name : null;
                        ?>
                        <div class="span9"><?php echo Form::input('name', $selected_name, array('class' => 'required')); ?></div>
                        <div class="clear"></div>
                    </div> 
                    <div class="row-form">
                        <div class="span3"><?php echo __('Href') ?>*:</div>
                        <?php
                        $selected_href = isset($item) ? $item -> href : null;
                        ?>
                        <div class="span9">Np.: www.webpro.pl (bez http://)<br><?php echo Form::input('href', $selected_href, array('class' => 'required')); ?></div>
                        <div class="clear"></div>
                    </div> 
                    <div class="row-form">
                        <div class="span3"><?php echo __('Position') ?>:</div>
                        <?php
                        $selected_pos = isset($item) ? $item -> position : 0;
                        ?>
                        <div class="span9"><?php echo Form::select('position', $range_array, $selected_pos); ?></div>
                        <div class="clear"></div>
                    </div> 

                    <div class="row-form">
                        <div class="span3"></div>
                        <div class="span9"><a style="height: 18px; padding-top: 1px;" class="btn btn-success" href="<?php echo Kohana::$config->load('globals.base_url') ?>links"><?php echo __('Cancel') ?></a> <?php echo Form::submit(NULL, __('Save'), array('class' => 'btn')); ?></div>
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
    $('#link_new').submit(function() 
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
    
    $('input').each(function(){
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
    
    $('textarea').each(function(){
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
    
    if(error == true)
    {
        $('.error-message').css('display','block');
        return false;
    }
    else
    {
        return true;
    }
}
</script>