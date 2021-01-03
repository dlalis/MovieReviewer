<?php
//Start a session If is not started
if (session_status() == PHP_SESSION_NONE) 
	session_start();
?>

<link rel="stylesheet" href="css/userpanel.css">


<div class="container">
    <div class="row profile">
		<div class="col-md-3 sizingPanel">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<!-- <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Circle-icons-profile.svg" class="img-responsive" alt="" style="height:200px;">-->
				
					<img src="https://www.searchpng.com/wp-content/uploads/2019/02/Profile-ICon.png" " class="img-responsive" alt="" style="height:150px;">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
					<?php 
					if(isset($_SESSION['user']))
						echo "Hello " . $_SESSION['user'];
					else
						echo "Hello Admin"
					?>
					</div>
					<div class="profile-usertitle-job">
						Role: Administrator
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->

				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="btnn active">
							<a href="#">
							<i class="glyphicon glyphicon glyphicon-film"></i>
							Overview </a>
						</li>
						<li class="btnn">
							<a href="#">
							<i class="glyphicon glyphicon glyphicon-heart"></i>
							To Watch List </a>
						</li>
						<li class="btnn">
							<a href="#" >
							<i class="glyphicon glyphicon-ok"></i>
							Watched List </a>
						</li>
						<li class="btnn">
							<a href="includes/logout_inc.php">
							<i class="glyphicon glyphicon glyphicon-log-out"></i>
							Log Out </a>

			
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9 sizingContent">
            <div class="profile-content">
			  	
            </div>
		</div>
	</div>
</div>

<br>
<br>








<!--  Load JS Scripts (TODO: Move them to .js)-->


<script type="text/javascript">
//	var header = document.getElementsByClassName("nav");
	var btns = document.getElementsByClassName("btnn");
	for (var i = 0; i < btns.length; i++) {
		btns[i].addEventListener("click", function() {
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	});
	}
</script>