<?php include('includes/header.php'); ?>



<form role="form" enctype="multipart/form-data" method="post" action="register.php" autocomplete="off">
    <div class="form-group">
        <label for="name">Name*</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name here">
    </div>
    <div class="form-group">
        <label for="email">Email Address*</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email address">
    </div>
    <div class="form-group">
        <label for="username">Choose Username*</label>
        <input type="text" class="form-control" name="username" placeholder="Your desired username">
    </div>
    <div class="form-group">
        <label for="password">Password*</label>
        <input type="password" class="form-control" name="password" placeholder="Enter a password">
    </div>
    <div class="form-group">
        <label for="password2">Confirm Password*</label>
        <input type="password" class="form-control" name="password2" placeholder="Enter password again">
    </div>
    <div class="form-group">
        <label for="avatar">Upload Avatar</label>
        <input type="file" name="avatar">
    </div>
    <div class="form-group">
        <label for="about">About Me</label>
        <textarea name="about" id="about" cols="80" rows="6" placeholder="Tell us about yourself (Optional)" class="form-control"></textarea>
    </div>
   	<input type="submit" name="register" value="Register" class="btn btn-default">
</form>



<?php include('includes/footer.php'); ?>