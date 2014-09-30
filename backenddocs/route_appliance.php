<?php
	include "header.php";
?>

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>Appliance</h1>
				
<div class="panel panel-default">
	<div class="panel-heading"><span class="label label-success">GET</span> <code>/appliance/@id/@lang/@session</code></div>
	<div class="panel-body">
		<p><code>@id : INT</code></p>
		<p><code>@lang : STRING</code><span class="badge">OPTIONAL</span></p>
		<p><code>@session : STRING</code></p>
		<p>Returns: Appliance with id = <code>@id</code></p>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading"><span class="label label-success">GET</span> <code>/appliances/@id/@lang/@session</code></div>
	<div class="panel-body">
		<p><code>@id : INT</code></p>
		<p><code>@lang : STRING</code><span class="badge">OPTIONAL</span></p>
		<p><code>@session : STRING</code></p>
		<p>Returns: All appliances</p>
	</div>
</div>

			</div>
		</div>
	</div>
</div>
<?php
	include "footer.php";
?>