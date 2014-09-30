<?php
	include "header.php";
?>

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>User</h1>
				
<div class="panel panel-default">
	<div class="panel-heading"><span class="label label-success">GET</span> <code>/user/@username/@password/@session</code></div>
	<div class="panel-body">
		<p><code>@username : STRING</code></p>
		<p><code>@password : STRING</code></p>
		<p><code>@session : STRING</code></p>
		<p>Returns: User with given credentials if they match a user in the DB</p>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading"><span class="label label-warning">PUT</span> <code>/user</code></div>
	<div class="panel-body">
		<p><code>@username : STRING</code></p>
		<p><code>@password : STRING</code></p>
		<p><code>@firstname : STRING</code></p>
		<p><code>@lastname : STRING</code></p>
		<p><code>@email : STRING</code></p>
		<p>Returns: User object</p>
	</div>
</div>

			</div>
		</div>
	</div>
</div>
<?php
	include "footer.php";
?>