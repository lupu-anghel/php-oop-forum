<?php include('includes/header.php'); ?>

	<ul id="topics">

	    <li id="main-topic" class="topic topic">
	      <div class="row">

	        <div class="col-md-2">
	          <div class="user-info">
	            <img src="<?php echo BASE_URI; ?>images/avatars/<?php echo $topic->avatar; ?>" class="avatar pull-left img-responsive">
	            <ul>
	              <li><strong><?php echo $topic->username; ?></strong></li>
	              <li><?php echo userPostCount($topic->user_id); ?> Posts</li>
	              <li><a href="<?php echo BASE_URI; ?>topics.php?user=<?php echo $topic->user_id; ?>">View topics</a></li>
	            </ul>
	          </div>
	        </div> <!-- /col-md-2 -->

	        <div class="col-md-10">
	          <div class="topic-content pull-right">
	            <p>
	            	<?php echo $topic->body; ?>
	            </p>
	          </div>
	        </div>
	      </div>
	    </li> <!-- / topic li -->
		
		<?php foreach($replies as $reply) : ?>
	    <li class="topic topic">
	      <div class="row">

	        <div class="col-md-2">
	          <div class="user-info">
	            <img src="<?php echo BASE_URI; ?>images/avatars/<?php echo $reply->avatar; ?>" class="avatar pull-left img-responsive">
	            <ul>
	              <li><strong><?php echo $reply->username; ?></strong></li>
	              <li><?php echo userPostCount($reply->user_id)?> Posts</li>
	              <li><a href="<?php echo BASE_URI; ?>topics.php?user=<?php echo $reply->user_id; ?>">View Topics</a></li>
	            </ul>
	          </div>
	        </div> <!-- /col-md-2 -->

	        <div class="col-md-10">
	          <div class="topic-content pull-right">
	            <p>
	            	<?php echo $reply->body; ?>
	            </p>
	          </div>
	        </div>
	      </div>
	    </li> <!-- / topic li -->
	<?php endforeach; ?>

	    
	    
	</ul> <!-- / topics list -->

  	<h3>Reply To Topic</h3>

  	<?php if(isLoggedIn()) : ?>

  	<form role="form" action="topic.php?id=<?php echo $topic->id; ?>" method="post">
	    <div class="form-group">
	      <textarea name="body" id="body" cols="80" rows="10" class="form-control"></textarea>
	      <script>CKEDITOR.replace("body");</script>
	    </div>
	    <button class="btn btn-defaul" type="submit" name="do_reply">Submit</button>
  	</form>
  	<?php else : ?>

  	<div class="row">
  		<br><br>
  		<p style="text-align: center;"><em>You must be logged in to reply to posts. If you don't have an account yet, you can go to <a href="register.php">register</a> to create one.</em></p>
  	</div>

  	<?php endif; ?>


<?php include('includes/footer.php'); ?>