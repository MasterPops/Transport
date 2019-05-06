<!DOCTYPE html>
<html>
	<head>
		<title>Редактировать профиль</title>
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
                                <a role="button" href="trip.html" class="btn btn-outline-primary mobile-buttons btn-block">Заказчики</a>
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
				<div class="col-6">
					<div class="row">
						<div class="col-12">
							<div class="card mb-3" style="max-width: 1100px;">
  								<div class="row no-gutters">
    									<div class="col-md-3">
    										<div class="row">
    											<div class="col-12">
    												<img src="{{urldecode(Auth::user()->img)}}" class="card-img">
    											</div>
    										</div>
    									</div>
    									<div class="card-body">
    										<div class="col-md-9">
    											<form method="POST" action="/profile/photo" enctype="multipart/form-data">
  													<div class="form-group">
    													<label>Загрузить фото</label>
    													<input type="file" class="form-control-file" name="photo" onchange="this.form.submit()">
    													{{ csrf_field() }}
  													</div>
												</form>
      										</div>
    									</div>
    								</div>
    								<div class="card-body">
    									<div class="row">
    										<div class="col-12 col-md-8">
    											<form method="POST" action="/profile/rename">
													<p>Фамилия Имя Отчество</p>
													<input class="form-control form-control-sm" type="text" value="{{ Auth::user()->lastname }}" name="lastname">
													<input class="form-control form-control-sm" type="text" value="{{ Auth::user()->name }}" name="name" style="margin-top: 10px">
													<input class="form-control form-control-sm" type="text" value="{{ Auth::user()->patronymic }}" name="patronymic" style="margin-top: 10px">
													{{ csrf_field() }}
													<button type="submit" class="btn btn-primary float-right" style="margin-top: 10px">Применить изменения</button>
												</form>
												
    										</div>
    										<div class="col-12 col-md-8">
                                                @if(isset($fioStatus))
                                                    @if($fioStatus == 'succes')
                                                        <div class="alert alert-success" role="alert" style="margin-top: 10px">Изменения выполнены успешно</div>
                                                    @endif
                                                @endif
											</div>
    									</div>
    									<div class="row" style="margin-top: 20px">
    										<div class="col-12 col-md-8">
    											<form method="POST" action="/profile/repass">
													<p>Сменить пароль</p>
													<input class="form-control form-control-sm" type="password" name="oldpass" placeholder="Старый пароль">
													<input class="form-control form-control-sm" type="password" name="newpass" placeholder="Новый пароль" style="margin-top: 10px">
													<input class="form-control form-control-sm" type="password" name="newpassrepeat" placeholder="Повторите новый пароль" style="margin-top: 10px">
													{{ csrf_field() }}
													<button type="submit" class="btn btn-primary float-right" style="margin-top: 10px">Сменить пароль</button>
												</form>
    										</div>
    										<div class="col-12 col-md-8">
                                                @if(isset($passStatus))
                                                    @if($passStatus == 'empty')
                                                        <div class="alert alert-danger" role="alert" style="margin-top: 10px">Не все поля заполнены!</div>
                                                    @endif
                                                    @if($passStatus == 'oldFalse')
                                                        <div class="alert alert-danger" role="alert" style="margin-top: 10px">Старый пароль введен неверно!</div>
                                                    @endif
                                                    @if($passStatus == 'newFalse')
                                                        <div class="alert alert-danger" role="alert" style="margin-top: 10px">Пароли не совпадают!</div>
                                                    @endif
                                                    @if($passStatus == 'true')
                                                        <div class="alert alert-success" role="alert" style="margin-top: 10px">Пароль успешно изменен!</div>
                                                    @endif
                                                @endif
											</div>
    									</div>
    								</div>
  								</div>
							</div>
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
