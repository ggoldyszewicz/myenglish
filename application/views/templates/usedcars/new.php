<div class="content"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>            
            <li><?php echo __('Used cars') ?> <span class="divider">></span></li>
            <li class="active"><?php echo __('Add used car') ?></li>
        </ul>
    </div>
    
    <div class="workplace">

        
        <div class="row-fluid">
                
            <div class="span12">
                <div class="head">
                    <div class="isw-documents"></div>
                    <h1><?php echo __('Add used car') ?></h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">                        
                    <?php
                    echo Form::open('usedcars/new', array('method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'usedcars_new'));
                    $selected_usedcar_id = isset($item) ? $item -> id : 0;
                    echo Form::hidden('usedcar_id', $selected_usedcar_id);
                    ?>
                    
                    <div class="row-form">
                        <div class="span3"><?php echo __('Header') ?>*:</div>
                        <?php
                        $selected_header = isset($item) ? $item -> header : null;
                        ?>
                        <div class="span9"><?php echo Form::input('header', $selected_header, array('class' => 'required')); ?></div>
                        <div class="clear"></div>
                    </div> 
                    
                    <div class="row-form">
                        <div class="span3"><?php echo __('Content') ?>:</div>
                        <?php
                        $selected_content = isset($item) ? $item -> content : null;
                        ?>
                        <div class="span9">
                        
                            <div class="block-fluid" id="wysiwyg_container">
                                <?php echo Form::textarea('content', $selected_content, array('id' => 'wysiwyg', 'class' => 'ckeditor')) ?>
                                
                        
                            </div>
                            
                        </div>
                        <div class="clear"></div>
                    </div> 

                    <div class="row-form">
                        <div class="span3"></div>
                        <div class="span9"><a style="height: 18px; padding-top: 1px;" class="btn btn-success" href="<?php echo Kohana::$config->load('globals.base_url') ?>usedcars"><?php echo __('Cancel') ?></a> <?php echo Form::submit(NULL, __('Save'), array('class' => 'btn')); ?></div>
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
<script type="text/javascript">
    CKEDITOR.on( 'instanceReady', function( evt ) {
			var editor = evt.editor;
			

			// Apply focus class name.
			editor.on( 'focus', function() {
				editor.container.addClass( 'cke_focused' );
			});
			editor.on( 'blur', function() {
				editor.container.removeClass( 'cke_focused' );
			});

			// Put startup focus on the first editor in tab order.
			if ( editor.tabIndex == 1 )
				editor.focus();
		});
</script>
<script>
$(document).ready(function() 
{
    $('#usedcars_new').submit(function() 
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


