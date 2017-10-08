<?php
include 'Include/header.php'; ?>

<div class="container">
	<div class="row">

	    <div class="col-md-8 col-md-offset-2">

    		<h1>Create post</h1>

    		<form action="" method="POST">

    		    <div class="form-group has-error">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" />
    		    </div>

    		    <div class="form-group">
    		        <label for="description">Blog Body</label>
    		        <textarea rows="5" class="form-control" name="description" ></textarea>
    		    </div>

            <div class="form-group">
                <label for="description">Blog Image</label>
                <input type="file" name="" value="" class="form-control">

    		    </div>



    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Create
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>

    		</form>
		</div>

	</div>
</div>

 <?php Include 'Include/footer.php'; ?>
