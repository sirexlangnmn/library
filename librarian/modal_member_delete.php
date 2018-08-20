<div id="delete_member<?php echo $member_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-danger">Are you Sure you want to Delete this Data?</div>
	</div>
	<div class="modal-footer">   						<!-- Di ko gets bakit ganyan: '?member_id='.$member_id; -->
		<a class="btn btn-danger" href="controller/delete/delete_member.php<?php echo '?member_id='.$member_id; ?>">Yes</a>
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
	</div>
</div>
	
