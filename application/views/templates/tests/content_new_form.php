<div class="content"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>            
            <li><?php echo __('Employees') ?> <span class="divider">></span></li>
            <li class="active">
                <?php
                    if(isset($item))
                    {
                        echo __('Edit content');
                    }
                    else
                    {
                        echo __('Add content');
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
                            echo __('Edit content');
                        }
                        else
                        {
                            echo __('Add content');
                        }
                        ?>
                    </h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">                        
                    <?php
                    echo Form::open('content/new', array('method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'content_new'));
                    $selected_content_id = isset($item) ? $item -> id : 0;
                    echo Form::hidden('content_id', $selected_content_id);
                    ?>
                    <div class="row-form">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? $item -> word : null;
                            echo __('Category').'*:'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            if(isset($item))
                            {
                                    $selected = $item -> category_id;
                                    $category_id = $selected;
                            }
                            else
                            {
                                    $selected = $category_id;
                            }
                            echo Form::select('parent', $tree, $selected, array( 'class' => 'input_parent'));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>                    
                    <div class="row-form row-form-content">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? $item -> word : null;
                            $selected_surname = isset($item) ? $item -> translation : null;
                            echo __('Word').'*:<br>';
                            echo __('Translation').'*:'; 
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::input('word[]', $selected_name, array('class' => 'required')).'<br>';
                            echo Form::input('translation[]', $selected_surname, array('class' => 'required'));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php
                    if(!isset($item))
                    {
                    ?>
                    <div class="row-form">
                        <div class="span3">
                        </div>
                        <div class="span9">
                            <?php
                            echo Form::button(NULL, __('Add another'), array('class'=>'add_another btn btn-success'));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>                    
                    <?php
                    }
                    ?>
                    <div class="row-form">
                        <div class="span3"></div>
                        <div class="span9"><a style="height: 18px; padding-top: 1px;" class="btn btn-success" href="<?php echo Kohana::$config->load('globals.base_url') ?>category/index/<?php echo $category_id ?>"><?php echo __('Cancel') ?></a> <?php echo Form::submit(NULL, __('Save'), array('class' => 'btn')); ?></div>
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
    $('.add_another').click(function()
    {
        $.ajax({
            type     : "POST",
            url: '<?php echo Kohana::$config->load('globals.base_url'); ?>check/getNewContent',
            success: function(response) 
            {                    
                if($('.row-form-content').length == 0)
                {
                    $('#diagnostics-examination-list-header').after(response);
                }
                else
                {
                    var last = $('.row-form-content').last();
                    last.after(response);
                }
            }
        });
        return false;
    });
    
    $('.cancel').live('click',function()
    {
        var parent = $(this).closest( '.row-form-content' );
        parent.remove();
        return false;
    });
    
    $('#content_new').submit(function() 
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
    $('#content_new select').each(function(){
        
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
    
    $('#content_new input').each(function(){
        
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
        return false;
    }
    else
    {
        return true;
    }
}
</script>


	
<script>
	$(document).ready(function() 
	{
		$('.add_another').unbind('submit');
		$('.cancel').unbind('submit');
		$('.cancel').live('click',function(){
			var parent = $(this).parent();
			parent.remove();
			return false;
			
		});
		$('.add_another').click(function(){
			var last = $('.formFieldContainer').last();
			var next = parseInt(last.attr('number'))+1;
			last.after('<div class="formFieldContainer required" number="'+next+'"><label>Word:</label><input type="text" automoplete="off" name="word[]"><label>Translation:</label><input type="text" automoplete="off" name="translation[]"><small></small><div class="label">&nbsp;</div><button class="cancel"><?php echo __('Cancel'); ?></button></div>');
			return false;
		});
		
		
	});

	

	
</script>
