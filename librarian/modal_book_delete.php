<div id="delete_book<?php echo $book_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-danger">Are you Sure you want to Delete this Data?</div>
	</div>
	<div class="modal-footer">                       <!--  Di ko gets bakit ganyan: '?book_id='.$book_id;  -->
		<a class="btn btn-danger" href="controller/delete/delete_book.php<?php echo '?book_id='.$book_id; ?>">Yes</a>
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
	</div>
</div>
	
