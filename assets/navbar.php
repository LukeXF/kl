<div class="wrapper" id="top">

<nav class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand animate" href="http://klpolestudio.co.uk"><img src="assets/img/KL-Logo.png"></a>
		</div>

		<div class="collapse navbar-collapse dashboardnav" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right dashnav">

			<?php
				foreach($navbar2 as $x => $x_value) {

					if (!empty($x_value["active"])) {
						$class = $x_value["active"];
					} else {
						$class = "";
					}

					if (!empty($x_value["url"])) {
						$url = $x_value["url"];
					} else {
						$url = $x;
					}

					if ($x == $activeTab) {
						$class = "active";
					}
					if (!empty($x_value["submenu"])) {
						echo "<li class='dropdown animate" . $class . "'>";

					

							//echo "<a class='animate'>" . $x . " <i class='fa fa-caret-down'></i></a>";
							echo "	<a href='#' class='dropdown-toggle animate' data-toggle='dropdown' role='button' aria-expanded='false'>" . $x . " 		<i class='fa fa-caret-down'></i>
									</a>
									<ul class='dropdown-menu' role='menu'><li>";

									foreach ($x_value['submenu'] as $key => $value) {
										echo "<a href='$value'>$key</a>";
									}  

								//echo "<li><a href='#''>Action</a></li>";
							echo "</li></ul>";
						echo "</li>";
						
					} else {
						echo "<li class='" . $class . "'><a class='animate' href='$url'>";
						echo $x;
						echo "</a></li>";
					}
				}
			?>	
			</ul>
		</div>
	</div>
</nav>