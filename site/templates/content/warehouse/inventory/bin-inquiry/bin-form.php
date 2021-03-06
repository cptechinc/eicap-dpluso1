<?php include "{$config->paths->content}warehouse/session.js.php"; ?>
<div class="form-group">
	<a href="<?= $page->parent->url; ?>" class="btn btn-primary not-round">
		<i class="fa fa-arrow-left" aria-hidden="true"></i> Return to Inventory Menu
	</a>
</div>
<form action="<?= $page->parent->child('name=redir')->url; ?>" method="post" class="select-bin-form allow-enterkey-submit">
	<input type="hidden" name="action" value="bin-inquiry">
	<input type="hidden" name="page" value="<?= $page->fullURL->getUrl(); ?>">
    <div class="form-group">
        <label for="binID">Bin ID</label>
        <div class="input-group">
            <input type="text" class="form-control" id="binID" name="binID">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default show-possible-bins" data-input="binID"> <span class="fa fa-search" aria-hidden="true"></span> </button>
            </span>
        </div>
    </div>
	<button type="submit" class="btn btn-emerald not-round">Submit</button>
</form>
