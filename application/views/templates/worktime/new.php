<div class="content"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>            
            <li><?php echo __('Worktime') ?> <span class="divider">></span></li>
            <li class="active"><?php echo __('Add worktime') ?></li>
        </ul>
    </div>
    
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-documents"></div>
                    <h1><?php echo __('Add worktime') ?></h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">                        
                    <?php
                    echo Form::open('worktime/new', array('method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'worktime_new'));
                    $selected_worktime_id = isset($item) ? $item -> id : 0;
                    echo Form::hidden('worktime_id', $selected_worktime_id);
                    ?>
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_year = isset($item) ? $item -> year : 0;
                            echo __('Year');
                            if($selected_year == 0)
                            {
                                echo '*:';
                            }
                            else
                            {
                                echo ':';
                            }
                             
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            if($selected_year == 0)
                            {
                                echo Form::select('year', $years, $selected_year, array('class' => 'required'));
                            }
                            else
                            {
                                echo $selected_year;
                            }
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_month = isset($item) ? $item -> month : 0;
                            echo __('Month');
                            if($selected_month == 0)
                            {
                                echo '*:';
                            }
                            else
                            {
                                echo ':';
                            }   
                        ?>
                        </div>
                        <div class="span9">
                        <?php 
                            if($selected_month == 0)
                            {
                                echo Form::select('month', $months, $selected_month, array('class' => 'required'));
                            }
                            else
                            {
                                echo Time::getMonthName($selected_month);
                            }
                             
                        ?>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="row-form">
                        <div class="span3"><?php echo __('Hours of operation') ?>*:</div>
                        <?php
                        $selected_worktime = isset($item) ? $item -> workdays : null;
                        ?>
                        <div class="span9"><?php echo Form::select('workdays', $worktimes, $selected_worktime, array('class' => 'required')); ?></div>
                        <div class="clear"></div>
                    </div> 

                    <div class="row-form">
                        <div class="span3"></div>
                        <div class="span9"><a style="height: 18px; padding-top: 1px;" class="btn btn-success" href="<?php echo Kohana::$config->load('globals.base_url') ?>worktime"><?php echo __('Cancel') ?></a> <?php echo Form::submit(NULL, __('Save'), array('class' => 'btn')); ?></div>
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
    $('#worktime_new').submit(function() 
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

    $('#brand').change(function(){
        
        $.ajax({
            type     : "POST",
            url: '<?php echo Kohana::$config->load('globals.base_url'); ?>check/getModels',
            data     : {
                id : $('#brand').val()
            },
            success: function(response) {

                $('.select-model').html(response);
                $('.select-version').html('<select id="version" name="version_id"></select>');
            }
        });    
    });
});

function validate() 
{
    var error = false;
    $('#worktime_new select').each(function(){
        
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


