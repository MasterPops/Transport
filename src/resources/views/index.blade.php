<!DOCTYPE html>
<html>
  	<head>
        <title>Система ТРАНСПОРТ</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
  	</head>
	<body data-spy="scroll" data-target="#navbar-1" data-offset="100">
		<div class="container">
			<div class="row justify-content-between menu sticky-top nav-bar">
				<div class="col-auto">
					<a href=""><img src="{{asset('images/logo.png')}}" class="img-fluid center-block"></a>
				</div>
				<div class="col-auto" style="margin-top: 10px">
					<div class="row justify-content-between">
						<div class="col-auto">
							<nav class="nav nav-pills" id="navbar-1">
  								<a class="nav-item nav-link active" href="#section1">Главная</a>
  								<a class="nav-item nav-link" href="#section2">О сервисе</a>
								<a class="nav-item nav-link" href="#section3">Новости</a>
							</nav>
						</div>
						<div class="col-auto" style="margin-left: 60px">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/home') }}" role="button" class="btn btn-outline-primary">Кабинет</a>
                                    @else
                                        <a href="{{ route('login') }}" role="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#login">Войти</a>
                                    @endauth
                                </div>
                            @endif
							<div class="modal fade" id="login" tabindex="-9999" role="dialog" aria-hidden="true" data-backdrop="false">
  								<div class="modal-dialog modal-sm" role="document">
    								<div class="modal-content">
      									<div class="modal-header">
      										<div class="container-fluid">
        										<div class="row justify-content-between">
        											<div class="col-1"></div>
        											<div class="col-auto">
        												<h5>Авторизация</h5>
        											</div>
        											<div class="col-1">
        												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          													<span aria-hidden="true">&times;</span>
        												</button>
        											</div>
        										</div>
        									</div>
      									</div>
      									<div class="modal-body">
        									<div class="container-fluid">
        										<div class="row justify-content-center">
        											<div class="col-auto">
        												<form method="POST" action="{{ route('login') }}">
                                                            @csrf
                                                            <div class="row form-group justify-content-center">
                                                                <label for="email" class="col-auto col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                                                <div class="col-10">
                                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                                    @if ($errors->has('email'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row form-group justify-content-center">
                                                                <label for="password" class="col-auto col-form-label text-md-right">{{ __('Пароль') }}</label>
                                                                <div class="col-10">
                                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                                    @if ($errors->has('password'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <div class="col-8 offset-1">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="remember">
                                                                            {{ __('Запомнить') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <div class="col-9"> 
                                                                    <button type="submit" class="btn btn-success btn-block">
                                                                        {{ __('Войти') }}
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <div class="col-auto">
                                                                    @if (Route::has('password.request'))
                                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                            {{ __('Забыли пароль?') }}
                                                                        </a>
                                                                    @endif
                                                                </div>
                                                            </div>  
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="container-fluid">
                                                <div class="row justify-content-center">
                                                    <div class="col-12">
                                                        @if (Route::has('login'))                             
                                                            @if (Route::has('register'))
                                                                <a role="button" class="btn btn-primary btn-block" href="{{ route('register') }}">Зарегистрироваться</a>
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
			</div>
			<div class="row" id="section1">
				<div class="col-12">
					<img src="{{asset('images/head.png')}}" class="img-fluid center-block">
				</div>
			</div>
			<div class="row justify-content-between" id="section2" style="margin-top: 15px">
				<div class="col-12">
					<div class="card-deck">
 						<div class="card">
    						<img src="{{asset('images/card1.png')}}" class="card-img-top" alt="...">
    						<div class="card-body">
      							<h5 class="card-title">Учитываем все необходимое</h5>
      							<p class="card-text">Перевозки, водители, автомобили. Сервис позволяет вести учет всего, что нужно для Вашей работы.</p>
    						</div>
  						</div>
  						<div class="card">
    						<img src="{{asset('images/card2.png')}}" class="card-img-top" alt="...">
    						<div class="card-body">
	      						<h5 class="card-title">Легко пользоваться</h5>
      							<p class="card-text">Один раз внесите информацию о себе, сотрудниках и автомобилях, а потом просто добавляйте информацию о поездках. Все просто!</p>
    						</div>
  						</div>
  						<div class="card">
    						<img src="{{asset('images/card3.png')}}" class="card-img-top" alt="...">
    						<div class="card-body">
      							<h5 class="card-title">Все на виду</h5>
      							<p class="card-text">Получите возможность проанализировать ваши доходы и расходы. Все отображается в понятном формате.</p>
    						</div>
  						</div>
					</div>
				</div>				
			</div>
			<div class="row justify-content-center" id="section3" style="margin-top: 35px">
				<div class="col-auto">
					<h4>Новости</h4>
				</div>				
			</div>
			<div class="row justify-content-center" style="margin-top: 35px">
				<div class="col-12">
                    @foreach($news as $new)
					<!-- Один блок-->
					<div class="row" style="margin-top: 15px">
						<div class="col-12">
							<div class="card">
 								<div class="row no-gutters">
    								<div class="col-md-12">
      									<div class="card-body">
      										<div class="row">
      											<div class="col-12">
      												<h5 class="card-title">{{$new->title}}</h5>
        											<p class="card-text">{{$new->text}}</p>
      											</div>
      										</div>
        									<div class="row justify-content-between">
        										<div class="col-auto">
        											<p class="card-text"><small class="text-muted">Опубликовано {{$new->created_at}}</small></p>
        										</div>
        									</div>
      									</div>
    								</div>
  								</div>
							</div>
						</div>
					</div>
					<!-- Один блок-->
                    @endforeach
				</div>				
			</div>
		</div>
	</body>
	<footer>
		<div class="container">
			<div class="row justify-content-between align-items-end">
				<div class="col-auto">
					<div class="row justify-content-center">
						<div class="col-auto">
							<h5>Контактная информация</h5>
							<div class="row justify-content-between">
								<div class="col-auto">
									<h6>E-mail:</h6>
									<a href="mailto:masterpops.96@gmail.com"><p>masterpops.96@gmail.com</p></a>
								</div>
								<div class="col-auto">
									<h6>Телефон:</h6>
									<p>8-800-555-35-35</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-auto">
					<!-- uSocial -->
					<script async src="https://usocial.pro/usocial/usocial.js?v=6.1.4" data-script="usocial" charset="utf-8"></script>
					<div class="uSocial-Share" data-pid="fc1e2a4ca60904dc0e4e9b731d038b23" data-uscl-host="https://usocial.pro" data-type="share" data-options="round-rect,style2,default,absolute,horizontal,size32,eachCounter1,counter0,upArrow-right" data-social="vk,ok,telegram,twi" data-mobile="vi,wa,sms"></div>
					<!-- /uSocial -->
				</div>
			</div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>