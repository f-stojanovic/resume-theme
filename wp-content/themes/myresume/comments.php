<?php
if (post_password_required()) {
	return;
}
?>
<!--COMMENTS FORM-->
<div>
	<?php
	comment_form(array(

		'fields' => array(
			'author' => '<div class="form-group">
				<input type="text" class="form-control" placeholder="Your Name" name="author" id="author" required>
			</div>',
			'email' => '<div class="form-group">
				<input type="email" class="form-control" placeholder="Your Email" name="email"  id="email" required>
			</div>',
			'url' => '<div class="form-group">
				<input type="url" class="form-control" placeholder="Your Website" name="url"  id="url" required>
			</div>'
		),
		'comment_field' => '<div class="form-group">
				<textarea class="form-control" rows="5" placeholder="Your Comment" name="comment" required></textarea>
			</div>',
		'class_submit' => 'btn',
		'title_reply'  => '<h5>Leave a Comment</h5><hr>'
	));
	?>
</div>