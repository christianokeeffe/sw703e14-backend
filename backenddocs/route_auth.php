<?php
	include "header.php";
?>

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>Auth</h1>
				
<div class="panel panel-default">
	<div class="panel-heading"><span class="label label-info">POST</span> <code>/auth</code></div>
	<div class="panel-body">
		<p>Parameters in request body:</p>
		<p><code>@publicKey : INT</code></p>
		<p><code>@request : STRING</code></p>
		<p><code>@requestHash : STRING</code></p>
		<p>Returns: sessionkey</p>
	</div>
</div>

			</div>
		</div>
	</div>
</div>
<?php
	include "footer.php";
?>