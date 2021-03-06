<table class="table table-striped">
<tr>
	<th><a href="javascript:;" onclick="Sort('id')">Id</a></th>
	<th><a href="javascript:;" onclick="Sort('content')">Content</a></th>
	<th><a href="javascript:;" onclick="Sort('type')">Type</a></th>
	<th><a href="javascript:;" onclick="Sort('created_time')">Created Time</a></th>
	<th><a href="javascript:;" onclick="Sort('is_active')">Active</a></th>
</tr>
<?php foreach($items as $i=> $item):?>
<tr>
	<td><?php echo $item->id?></td>
	<td><?php echo anchor(admin_url('diary_entries/edit/'.$item->id), substr($item->content, 0, 100)."...")?></td>
	<td><?php echo $item->type?></td>	
	<td><?php echo $item->created_time?></td>	
	<td><i	class="<?php echo $item->is_active ? 'icon-ok':'icon-off'?>"></i></td>
</tr>
<?php endforeach;?>
<?php if(count($items)==0):?>
	<tr>
    	<td colspan="5" class="no_data">No data defined</td>
	</tr>
<?php endif?>
</table>

<div class="row">
	<div class="span10">		
		<?php echo $this->pagination->create_links();?>		
	</div>
	<div class="span2">Total rows: <? echo ($this->pagination->total_rows)?></div>
</div>