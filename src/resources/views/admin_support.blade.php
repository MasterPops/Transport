<!DOCTYPE html>
<html>
	<head>
		<title>Панель управления</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row justify-content-between top-bar">
                <div class="col-auto">
                    <a href="/"><img src="{{asset('images/top-icon.png')}}" class="img-fluid" style="margin-top:30%;"></a>
                </div>
                <div class="col-auto" style="margin-top:10px;">
                    <a href="/support">
                        <div>
                            <center><img src="{{asset('images/support-icon.png')}}" class="img-fluid" ></center>
                            <p class="text-center" style="color: white;">Поддержка</p>
                        </div>
                    </a>
                </div>
            </div>
			<div class="row justify-content-between" style="margin-top: 60px">
				<div class="col-6">
					<div class="row">
						<div class="col-12 fix">
							<div class="row">
								<div class="col-auto tile">
									<a href="/home">
										<img src="{{asset('images/profile-icon.png')}}" class="img-tile img-fluid"/>
										<h6 class="text-center" style="color: white;">Профиль</h6>
									</a>
								</div>
								<a role="button" href="/home" class="btn btn-outline-primary mobile-buttons btn-block">Профиль</a>
								<div class="col-auto tile">
									<a href="/auto">
										<img src="{{asset('images/auto-icon.png')}}" class="img-tile img-fluid"/>
										<h6 class="text-center" style="color: white;">Автомобили</h6>
									</a>
								</div>
								<a role="button" href="/auto" class="btn btn-outline-primary mobile-buttons btn-block">Автомобили</a>
								<div class="col-auto tile">
									<a href="/drivers">
										<img src="{{asset('images/drivers-icon.png')}}" class="img-tile img-fluid"/>
										<h6 class="text-center" style="color: white;">Водители</h6>
									</a>
								</div>
								<a role="button" href="/drivers" class="btn btn-outline-primary mobile-buttons btn-block">Водители</a>
								<div class="col-auto tile">
									<a href="/trip">
										<img src="{{asset('images/trip-icon.png')}}" class="img-tile img-fluid"/>
										<h6 class="text-center" style="color: white;">Поездки</h6>
									</a>
								</div>
								<a role="button" href="/trip" class="btn btn-outline-primary mobile-buttons btn-block">Поездки</a>
                                <div class="col-auto tile">
                                    <a href="/customers">
                                        <img src="{{asset('images/customers.png')}}" class="img-tile img-fluid"/>
                                        <h6 class="text-center" style="color: white;">Заказчики</h6>
                                    </a>
                                </div>
                                <a role="button" href="/customers" class="btn btn btn-outline-primary mobile-buttons btn-block">Заказчики</a>
								<div class="col-auto tile">
									<a href="/statistic">
										<img src="{{asset('images/statistic-icon.png')}}" class="img-tile img-fluid"/>
										<h6 class="text-center" style="color: white;">Статистика</h6>
									</a>
								</div>
								<a role="button" href="/statistic" class="btn btn-outline-primary mobile-buttons btn-block">Статистика</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6" >
                    <div class="card">
  						<div class="card-header">
    						Панель управления
  						</div>
  						<div class="card-body">
  							<ul class="nav justify-content-center nav-tabs">
  								<li class="nav-item">
    								<a class="nav-link" href="/admin/users">Пользователи</a>
  								</li>
  								<li class="nav-item">
    								<a class="nav-link" href="/admin/news">Новости</a>
  								</li>
  								<li class="nav-item">
    								<a class="nav-link active" href="/admin/support">Техническая поддержка</a>
  								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>
