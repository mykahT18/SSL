<? echo $data['style'];?>
<div class="row panel">
	<div class="col-md-12 col-xs-12">
		<img src="/assets/img/profile.svg" alt="" class="img-thumbnail picture hidden-xs" />

		<form id="profile-form" action="/profile/update" method="POST" enctype="multipart/form-data">
			<label class="btn btn-default btn-file" style="width: 110px;">Browse
			<input name="img" type="file" style="display: none;">
			</label>
			<input type="submit" value="Update" class="btn btn-primary">
		</form>

		<div class="header">
			<h1><?echo $_SESSION['user']['username']?></h1>
			<h4>Web Developer</h4>
			<p></p>
			<span><?echo $_SESSION['user']['userInfo']?></span>
		</div>		
	</div>
</div>
