<!DOCTYPE html>
<html>
	<head>
		<title>Поддержка</title>
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
			<div class="row justify-content-center" style="margin-top: 60px">
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
				<div class="col-6" style="max-width: 850px;">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            @if($line == 1)
                                <a role="button" class="btn btn-primary btn-block" href="/support" style="margin-bottom:20px">Активные тикеты</a>
                            @else
                                <a role="button" class="btn btn-outline-primary btn-block" href="/support" style="margin-bottom:20px">Активные тикеты</a>
                            @endif
                        </div>
                        <div class="col-lg-4">
                            @if($line == 2)
                                <a role="button" class="btn btn-success btn-block" href="/support/end" style="margin-bottom:20px">Завершенные тикеты</a>
                            @else
                                <a role="button" class="btn btn-outline-success btn-block" href="/support/end" style="margin-bottom:20px">Завершенные тикеты</a>
                            @endif
                        </div>
                        <div class="col-lg-4">
                            @if($line == 3)
                                <a role="button" class="btn btn-dark btn-block" href="/support/add" style="margin-bottom:20px">Создать тикет</a>
                            @else
                                <a role="button" class="btn btn-outline-dark btn-block" href="/support/add" style="margin-bottom:20px">Создать тикет</a>
                            @endif
                        </div>
                    </div>
                    @if($line < 3)
                        @if(count($tickets) > 0)
                            @foreach($tickets as $ticket)
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row justify-content-between">
                                                    <div class="col-8">
                                                        {{$ticket->title}}
                                                    </div>
                                                    <div class="col-4">
                                                        {{$ticket->created_at}}
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="card-body">{{$ticket->text}}</p>
                                            </div>
                                            <div class="card-footer text-muted">
                                                <div class="row justify-content-end">
                                                    @if(!empty(App\Message::where('ticket', $ticket->id)->orderBy('id', 'desc')->first()))
                                                        <div class="col-md-12 col-lg-9">
                                                            Последнее сообщение: {{substr(App\Message::where('ticket', $ticket->id)->orderBy('id', 'desc')->first()->text, 0, 101)}}
                                                        </div>
                                                    @endif
                                                    <div class="col-md-12 col-lg-3">
                                                        <a href="/support/ticket/{{$ticket->id}}" class="btn btn-primary btn-block">Открыть</a>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="row" style="margin-top: 70px;">
                                <div class="col-12">
                                    @if($line == 1)
                                        <center><h3>Нет активных тикетов</h3></center>
                                    @elseif($line == 2)
                                        <center><h3>Нет завершенных тикетов</h3></center>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @elseif($line == 3)
                        <form method="POST" action="/support/add">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Заголовок тикета">
                                <textarea class="form-control mt-3" rows="6" placeholder="Описание проблемы" name="text"></textarea>
                                <button type="submit" class="btn btn-primary btn-block mt-3">Отправить</button>
                            </div>
                        </form>
                    @else
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row justify-content-between">
                                            <div class="col-8">
                                                {{$ticket->title}}
                                            </div>
                                            <div class="col-4">
                                                {{$ticket->created_at}}
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="card-body">
                                        <p>{{$ticket->text}}</p>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <div class="row justify-content-between">
                                            <div class="col-9">
                                                {{$ticket->getUser['lastname']}} {{$ticket->getUser['name']}}
                                            </div>
                                            <div class="col-3">
                                                @if($ticket->status == 1)
                                                    <form method="post" action="/support/ticket/{{$ticket->id}}/close">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-danger btn-block">Закрыть</button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                        @foreach($messages as $mess)
                        <div class="row mb-3 justify-content-end">
                            <div class="col-11">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-12">
                                                {{$mess->getUser['lastname']}} {{$mess->getUser['name']}}
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="card-body">
                                        <p>{{$mess->text}}</p>
                                    </div>
                                    <div class="card-footer text-muted">
                                        {{$mess->created_at}}
                                    </div>   
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @if($ticket->status == 1)
                            <form method="POST" action="/support/ticket/{{$ticket->id}}/add">
                                @csrf
                                <div class="form-group">
                                    <textarea class="form-control mt-3" rows="3" placeholder="Текст сообщения" name="text"></textarea>
                                    <button type="submit" class="btn btn-primary btn-block mt-3">Отправить</button>
                                </div>
                            </form>
                        @endif
                    @endif
				</div>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>
