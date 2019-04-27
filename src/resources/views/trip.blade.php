<!DOCTYPE html>
<html>
	<head>
		<title>Поездки</title>
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
								<div class="col-auto tile active-tile">
									<a href="trip.html">
										<img src="{{asset('images/trip-icon.png')}}" class="img-tile img-fluid"/>
										<h6 class="text-center" style="color: white;">Поездки</h6>
									</a>
								</div>
								<a role="button" href="/trip" class="btn btn-warning mobile-buttons btn-block">Поездки</a>
								<div class="col-auto tile">
									<a href="statistic.html">
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
                    <a role="button" href="#" class="btn btn-outline-dark btn-block" style="max-width: 850px; margin-bottom: 20px">Добавить</a>
                    <div class="row">
                    	<div class="col-12">
                    		<div class="accordion" id="accordionExample" style="margin-bottom: 10px">
        						<button class="btn btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="max-width: 850px;">
          							Поиск
        						</button>
      							<div class="card" style="max-width: 850px;">
							    	<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      									<div class="card-body">
        									<form>
  												<div class="form-group">
    												<label for="exampleFormControlInput1">Значение</label>
    												<input type="email" class="form-control" id="exampleFormControlInput1">
  												</div>
  												<div class="form-group">
    												<label for="exampleFormControlSelect1">Поиск по:</label>
    												<select class="form-control" id="exampleFormControlSelect1">
      													<option>Автомобиль</option>
      													<option>Направление</option>
      													<option>Водитель</option>
      													<option>Дата начала</option>
      													<option>Дата завершения</option>
    												</select>
  												</div>
  												<input class="btn btn-secondary btn-block" type="submit" value="Искать">
  											</form>
      									</div>
    								</div>
  								</div>
    						</div>
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="col-12" style="margin-bottom: 20px">
                    		<button class="btn btn-primary" type="submit">Все</button>
                    		<button class="btn btn-outline-success" type="submit">Активные</button>
                    		<button class="btn btn-outline-danger" type="submit">Завершенные</button>
                    	</div>
                    </div>
                    
					<div class="row ">
						<div class="col-12 m10 ">

							<!--Карточка-->
                            <div class="card mb-3" style="max-width: 850px">
                                <div class="row no-gutters">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <h5 class="card-title">Автомобиль:</h5>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <h5 class="card-title">К623РР58</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    Водитель:
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p>ФИО</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    Направление:
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p>Ульяновск</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    Заказчик:
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p>ТехноСнаб</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    Пробег перед поездкой:
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p>244588 км</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    Цена за км:
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p>24 руб</p>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-12">
                                                    <a role="button" href="#" class="btn btn-outline-danger btn-block">Завершить</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Карточка-->							
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
