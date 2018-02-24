<?php include('includes/header.php'); ?>


<form role="form" method="post" action="create.php">

    <div class="form-group">
        <label for="title">Topic Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter post title">
    </div>
                  
    <div class="form-group">
        <label for="category">Category</label>
        <select name="category" class="form-control">
            <?php foreach(getCategories() as $category) : ?>
            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
                  
    <div class="form-group">
        <label for="body">Topic Body</label>
        <textarea name="body" id="body" cols="80" rows="10" class="form-control"></textarea>
        <script>CKEDITOR.replace("body");</script>
    </div>
    <button name="do_create" type="submit" class="btn btn-default">Submit</button>
                  
</form>

<?php include('includes/footer.php'); ?>