<div class="js_box_actions">
	<div>
		Import File
		<span>
			<input type="file" name="file" class="ajax_upload" data-url="{url link='admincp.app.add'}">
		</span>
	</div>
</div>
<form method="post" action="{url link='admincp.app.add'}" class="ajax_post">
	<div class="table">
		<div class="table_right">
			<input type="text" name="val[vendor]" placeholder="Vendor">
		</div>
	</div>
	<div class="table">
		<div class="table_right">
			<input type="text" name="val[name]" placeholder="Name">
		</div>
	</div>
	<div class="table_clear">
		<input type="submit" value="Submit" class="button" />
	</div>
</form>
