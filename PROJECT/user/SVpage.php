<!-- headerlogo -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
	<div class="container">
		<div class="col-2">
			<div class="row">
				<a href="GVpage.php" class=" text-white">Trường ĐH Thủy Lợi-TLU</a>

			</div>
		</div>
		<div class="col-6">
			<div class="row">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<span class="text-white">Ngôn ngữ:</span>
						<a href="GVpage.php"><img src="../images/vi.jpg"></a>
						<a href="#"><img src="../images/en.jpg"></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col">
			<div class="row">
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
					<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Tìm kiếm</button>
				</form>
			</div>
		</div>
	</div>
</nav>
<!--// headerlogo -->
<?php
include("../include/header/header.php");
?>

<!--Facebook-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="yuPhUa1q">
</script>
<!--//Facebook-->

<div class="container">
	<div class="row">
		<div class="col-9">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="../images/banner.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../images/bannertq4.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../images/hoi-thao.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../images/inra1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../images/sanh-t54.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="card" style="width: 15rem;">
							<img width="5" height="150" src="../images/cse-hallthumb.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<a href="#" class="stretched-link">Lời chào mừng</a>
							</div>
						</div>
						<div class="card" style="width: 15rem;">
							<img width="10" height="150" src="../images/cse-tlu-narathumb.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<a href="#" class="stretched-link">Nghiên cứu khoa học</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card" style="width: 15rem;">
							<img width="10" height="150" src="../images/gv-khoa-cnttthumb.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<a href="#" class="stretched-link">Giảng viên</a>
							</div>
						</div>
						<div class="card" style="width: 15rem;">
							<img width="10" height="150" src="../images/k54th-tot-nghiep-1thumb.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<a href="#" class="stretched-link">Đào tạo</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card" style="width: 15rem;">
							<img width="5" height="370" src="../images/khoa43th.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<a href="#" class="stretched-link">Ảnh khoa CNTT</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="fb-page" data-href="https://www.facebook.com/CodingPremium-115831256931511/" data-tabs="" data-width="200" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
				<blockquote cite="https://www.facebook.com/CodingPremium-115831256931511/" class="fb-xfbml-parse-ignore">
					<a href="https://www.facebook.com/CodingPremium-115831256931511/">CodingPremium</a></blockquote>
			</div>
			
		</div>
	</div>
</div>

<?php
include("../include/footer/footer.php");
?>