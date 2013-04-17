<!-- filter form-->
<div class="row">
	<?=form_open(admin_url('records/get_ajax_list'),'onsubmit="return SendForm(this)" id="filter_form" class="form-search" ')?>
	  <div class="span2">		
	  </div>
	  <div class="span10 text-right">
		<div class="input-append">
			<input type="text"  class="search-query" placeholder="search item..." name="filter_name"  value="<?php echo f('name')?>" />
			<button type="button" id="clear_btn" tabindex="-1" class="btn clear_btn">X</button>
			
		</div>
		<button type="submit" class="btn">Search</button>
	   
	
		<?php $filter_options = array('2'=>'All Items', '1'=>'Transcribed items', '0'=>'Non Transcribed items');?>
		<?php echo form_dropdown('filter_status', $filter_options, f('status'), 'id="filter_status"');?>

		<?php echo form_dropdown('filter_per_page', get_per_page_options(), f('per_page', LIMIT), 'id="per_page" class="input-mini"')?>

		<input type="hidden" name="sort_col" id="sort_col" value="<?php  echo f('sort_col');?>" />
		<input type="hidden" name="sort_dir" id="sort_dir" value="<?php  echo f('sort_dir');?>" />
		<input type="hidden" name="filter" id="filter" value="filter" />
	  </div>
	<?=form_close()?>
</div>
<!-- / filter form-->

<div id="list">
	<?php $this->load->view('admin/records/records_list');?>
</div>



<script type="text/javascript">
<!--

	$(function(){
		$("#filter_status, #per_page").change(function(){SendFilter()});
		$("#clear_btn").click(function(){$("[name=filter_name]").val(''); SendFilter();})
	});

// -->
</script>