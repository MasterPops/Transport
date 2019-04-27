<!DOCTYPE html>
<html>
	<head>
		<title>Водители</title>
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
								<div class="col-auto tile active-tile">
									<a href="/drivers">
										<img src="{{asset('images/drivers-icon.png')}}" class="img-tile img-fluid"/>
										<h6 class="text-center" style="color: white;">Водители</h6>
									</a>
								</div>
								<a role="button" href="/drivers" class="btn btn-warning mobile-buttons btn-block">Водители</a>
								<div class="col-auto tile">
									<a href="/trip">
										<img src="{{asset('images/trip-icon.png')}}" class="img-tile img-fluid"/>
										<h6 class="text-center" style="color: white;">Поездки</h6>
									</a>
								</div>
								<a role="button" href="/trip" class="btn btn-outline-primary mobile-buttons btn-block">Поездки</a>
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
 							<form method="POST" action="/drivers/add">
 								@csrf
 								<div class="row">
 									<div class="col-6">
 										<div class="form-group">
    										<input type="text" class="form-control" name="lastname" placeholder="Фамилия">
  										</div>
 									</div>
 									<div class="col-6">
 										<div class="form-group">
    										<input type="text" class="form-control" name="name" placeholder="Имя">
  										</div>
 									</div>
 								</div>
 								<div class="row">
 									<div class="col-12">
 										<div class="form-group">
    										<input type="text" class="form-control" name="patronymic" placeholder="Отчество">
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
							@foreach($drivers as $driver)
                            	<div class="card mb-3" style="max-width: 850px">
                                	<div class="row no-gutters">
                                    	<div class="col-md-4">
                                        	<img src="{{asset('images/standart-driver-icon.png')}}" class="card-img" alt="...">
                                    	</div>
                                    	<div class="col-md-8">
                                        	<div class="card-body">
                                            	<h5 class="card-title">{{$driver->lastname}} {{$driver->name}} {{$driver->patronymic}}</h5>
                                            	<div class="row">
                                                	<div class="col-5">
                                                    	Принят на работу
                                                	</div>
                                                	<div class="col-7">
                                                    	{{$driver->created_at}}
                                                	</div>
                                            	</div>
                                            	<div class="row">
                                                	<div class="col-5">
                                                    	Статус:
                                                	</div>
                                                	<div class="col-7">
                                                		@if($driver->status == 1)
        													<p class="text-success">{{$driver->getStatus['status']}}</p>
        												@endif
        												@if($driver->status == 2)
        													<p class="text-primary">{{$driver->getStatus['status']}}</p>
        												@endif
        												@if($driver->status == 3)
        													<p class="text-warning">{{$driver->getStatus['status']}}</p>
        												@endif
        												@if($driver->status == 4)
        													<p class="text-danger">{{$driver->getStatus['status']}}</p>
        												@endif
                                                	</div>
                                            	</div>
                                            	<div class="row justify-content-between">
                                                	<div class="col-6">
                                                		@if($driver->status != 2)
                                                			<form method="POST" action="/drivers/status">
                                                				<input type="hidden" name="driverid" value="{{$driver->id}}">
                                                				@csrf
                                                				<div class="form-group">
    																<label>Сменить статус</label>
    																<select class="form-control" name="status" onchange="this.form.submit()">
    																	<option>{{$driver->getStatus['status']}}</option>
    																	@foreach($statuses as $status)
    																		@if($driver->status != $status->id && $status->id != 2)
      																			<option>{{$status->status}}</option>
        																	@endif
    																	@endforeach
    																</select>
  																</div>
                                                			</form>	
                                                		@endif
                                                	</div>
                                                	<div class="col-2 mr-5 mt-4">
                                                		@if($driver->status != 2)
                                                			<form method="POST" action="drivers/del">
                                                				@csrf
                                                				<button class="btn btn-danger" type="submit" name="driverid" value="{{$driver->id}}">Уволить</button>
                                                			</form>
                                                		@endif
                                                	</div>
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
