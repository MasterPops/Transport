<!DOCTYPE html>
<html>
	<head>
		<title>Автомобили</title>
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
								<div class="col-auto tile active-tile">
									<a href="/auto">
										<img src="{{asset('images/auto-icon.png')}}" class="img-tile img-fluid"/>
										<h6 class="text-center" style="color: white;">Автомобили</h6>
									</a>
								</div>
								<a role="button" href="/auto" class="btn btn-warning mobile-buttons btn-block">Автомобили</a>
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
					<button class="btn btn-outline-dark btn-block" type="button" data-toggle="collapse" data-target="#collapseAdd" aria-expanded="false" aria-controls="collapseAdd" style="max-width: 850px; margin-bottom: 20px">
    					Добавить
  					</button>
					<div class="collapse mb-4" id="collapseAdd">
 						<div class="card card-body" style="max-width: 850px">
 							<form method="POST" action="/auto/add">
 								@csrf
 								<div class="row">
 									<div class="col-6">
 										<div class="form-group">
    										<input type="text" class="form-control" name="brand" placeholder="Марка автомобиля">
  										</div>
 									</div>
 									<div class="col-6">
 										<div class="form-group">
    										<input type="text" class="form-control" name="model" placeholder="Модель автомобиля">
  										</div>
 									</div>
 								</div>
 								<div class="row">
 									<div class="col-6">
 										<div class="form-group">
    										<input type="text" class="form-control" name="number" placeholder="Гос. номер">
  										</div>
 									</div>
 									<div class="col-6">
 										<div class="form-group">
    										<input type="text" class="form-control" name="year" placeholder="Год выпуска">
  										</div>
 									</div>
 								</div>
 								<div class="row">
 									<div class="col-12">
 										<div class="form-group">
    										<button class="btn btn-primary btn-block" type="submit">Добавить</button>
  										</div>
 									</div>
 								</div>
 							</form>
  						</div>
					</div>
					<div class="row ">
						<div class="col-12 m10 ">
							@foreach($cars as $car)
								<div class="card mb-3" style="max-width: 850px">
  									<div class="row no-gutters">
    									<div class="col-md-4">
      										<img src="{{asset('images/standart-auto-icon.png')}}" class="card-img" alt="...">
    									</div>
    									<div class="col-md-8">
      										<div class="card-body">
        										<h5 class="card-title">{{$car->brand}} {{$car->model}}</h5>
        										<div class="row">
        											<div class="col-5">
        												Гос. номер:
        											</div>
        											<div class="col-7">
        												{{$car->number}}
        											</div>
        										</div>
        										<div class="row">
        											<div class="col-5">
        												Год выпуска:
        											</div>
        											<div class="col-7">
        												{{$car->year}}
        											</div>
        										</div>
        										<div class="row">
        											<div class="col-5">
        												Статус:
        											</div>
        											<div class="col-7">
        												@if($car->status == 1)
        													<p class="text-success">{{$car->getStatus['status']}}</p>
        												@endif
        												@if($car->status == 2)
        													<p class="text-primary">{{$car->getStatus['status']}}</p>
        												@endif
        												@if($car->status == 3)
        													<p class="text-danger">{{$car->getStatus['status']}}</p>
        												@endif
        												@if($car->status == 4)
        													<p class="text-warning">{{$car->getStatus['status']}}</p>
        												@endif
        											</div>
        										</div>
        										<div class="row mt-4 no-gutters">
        											@if($car->status != 1 && $car->status != 2)
        												<div class="col-3 mr-4">
        													<form method="POST" action="/auto/status">
        														@csrf
        														<input type="hidden" name="carid" value="{{$car->id}}">
        														<input type="hidden" name="status" value="1">
        														<button type="submit" class="btn btn-success btn-sm btn-block">Свободна</button>
        													</form>
        												</div>
        											@endif
        											@if($car->status != 3 && $car->status != 2)
        												<div class="col-3 mr-4">
        													<form method="POST" action="/auto/status">
        														@csrf
        														<input type="hidden" name="carid" value="{{$car->id}}">
        														<input type="hidden" name="status" value="3">
        														<button type="submit" class="btn btn-danger btn-sm btn-block">Неисправна</button>
        													</form>
        												</div>
        											@endif
        											@if($car->status != 4 && $car->status != 2)
        												<div class="col-3">
        													<form method="POST" action="/auto/status">
        														@csrf
        														<input type="hidden" name="carid" value="{{$car->id}}">
        														<input type="hidden" name="status" value="4">
        														<button type="submit" class="btn btn-warning btn-sm btn-block">На ремонте</button>
        													</form>
        												</div>
        											@endif	
        										</div>
      										</div>
    									</div>
  									</div>
								</div>
							@endforeach
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
