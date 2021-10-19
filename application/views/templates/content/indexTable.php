<?php foreach($scripts as $file) { echo HTML::script($file), "\n"; }?>
<p>
	<a href="<?php echo Kohana::$config->load('globals.base_url'); ?>content/new" class="dialogboxlink"><?php echo __('Add words'); ?></a>
</p>

<div class="left">

<table>
	<thead>

		<th>
			<?php
				echo __('Category');
			?>
		</th>	
		<th>
			<?php
				echo __('Word');
			?>
		</th>
		<th>
			<?php
				echo __('Translation');
			?>
		</th>
		<th>
			<?php
				echo __('Actions');
			?>
		</th>		
	</thead>

<?php
if(isset($table))
{
	foreach($table as $item)
	{
		echo '<tr>';
		
		echo '<td>';
		echo $item->title;
		echo '</td>';
		
		echo '<td>';
		echo $item->word;
		echo '</td>';
		echo '<td>';
		echo $item->translation;
		echo '</td>';

		echo '<td>';
                
		echo '<a href="'.Kohana::$config->load('globals.base_url').'content/delete/'.$item->id.'" class="del dialogboxlink">'.__('Delete').'</a>';
                if($admin || $deleting || $user_id == $item -> owner)
                {
                    echo '<a href="'.Kohana::$config->load('globals.base_url').'content/new/'.$item->id.'" class="edit dialogboxlink">'.__('Edit').'</a>';
                }
		echo '</td>';		
		echo '</tr>';
	}
}
?>

</table>

</div>

<div class="right">
	<div class="message ui-state-highlight ui-corner-all" style="padding: 0 .7em; display: none; ">
		<p>
			<span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
			<strong></strong>
		</p>
	</div>

	<button id="button" style="display: none;">
		<span id="saveTree"><?php echo __('Save');?></span>
	</button>
</div>

