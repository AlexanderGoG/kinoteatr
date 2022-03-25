@extends('layout')
@section('title')
    Афиша кинотеатра
@endsection
@section('main_content')


    <div class="container-fluid row">
        <div class="col-4 ">
            <img class="img-fluid"
                 src="{{$img[0]->img}}" alt="">
            <h2>{{$img[0]->title}}</h2>

            <p>{{$img[0]->caption}}</p>
            <button type="button" class="btn-sm btn-primary fs-5 mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal1" >
                <span>10:05</span> <br>Билет 200р
            </button>
        </div>
        <div class="col-4">
            <img class="img-fluid"
                 src=" {{$img[1]->img}} " alt="">
            <h2>{{$img[1]->title}}</h2>

            <p>{{$img[1]->caption}}</p>
            <button type="button" class="btn-sm btn-primary fs-5" data-bs-toggle="modal" data-bs-target="#exampleModal2" >
                <span>15:25</span> <br>Билет 250р
            </button>
        </div>
        <div class="col-4">
            <img class="img-fluid"
                 src="{{$img[2]->img}}" alt="">
            <h2>{{$img[2]->title}}</h2>

            <p>{{$img[2]->caption}}</p>
            <button type="button" class="btn-sm btn-primary fs-5" data-bs-toggle="modal" data-bs-target="#exampleModal3" >
                <span>23:00</span> <br>Билет 300р
            </button>
        </div>
    </div>
    <div class="container row pt-5 mr-3 pb-2">
        <div class="col-4">
            <img class="img-fluid" style="height: 512px; width: 359px"
                 src="{{$img[3]->img}}"
                 alt="">
            <h2>{{$img[3]->title}}</h2>

            <p>{{$img[3]->caption}}</p>
            <button type="button" class="btn-sm btn-primary fs-5" data-bs-toggle="modal" data-bs-target="#exampleModal4" >
                <span>19:05</span> <br>Билет 350р
            </button>
        </div>
    </div>



    <form method="post" action="/check">
        @csrf
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-info bg-gradient ">
                <div class="modal-body ">
                    <div class="">
                        <h4 class="mb-3 "> Покупка билета {{$img[0]->title}}</h4>
                        <form class="needs-validation" novalidate="">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Ряд</label>
                                    <select name="row" class="form-select" aria-label="Default select example">
                                        @for($i = 1;$i<21;$i++){
                                        <option value="{{$i}}">{{$i}}</option>}
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Место</label>
                                    <select name="place" class="form-select" aria-label="Default select example">
                                        <option value=""></option>
                                        @for($i = 1;$i<11;$i++)
                                            {
                                        <option value="{{$i}}">{{$i}}</option>

                                        }
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="you@example.com">
                                </div>
                            </div>
                            <hr class="my-4 ">
                            <button class="bg-dark bg-gradient w-100 btn btn-primary btn-lg" type="submit">Забронировать
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-info bg-gradient ">
                <div class="modal-body ">
                    <div class="">
                        <h4 class="mb-3 "> Покупка билета {{$img[1]->title}}</h4>
                        <form class="needs-validation" novalidate="">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Ряд</label>
                                    <select name="row" class="form-select" aria-label="Default select example">
                                        <option value=""></option>
                                        @for($i = 1;$i<21;$i++){
                                        <option value="{{$i}}">{{$i}}</option>}
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Место</label>
                                    <select name="place" class="form-select" aria-label="Default select example">
                                        <option value=""></option>
                                        @for($i = 1;$i<11;$i++){
                                        <option value="{{$i}}">{{$i}}</option>}
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
                                </div>
                            </div>
                            <hr class="my-4 ">
                            <button class="bg-dark bg-gradient w-100 btn btn-primary btn-lg" type="submit">Забронировать
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-info bg-gradient ">
                <div class="modal-body ">
                    <div class="">
                        <h4 class="mb-3 "> Покупка билета {{$img[2]->title}}</h4>
                        <form class="needs-validation" novalidate="">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Ряд</label>
                                    <select name="row" class="form-select" aria-label="Default select example">
                                        <option value=""></option>
                                        @for($i = 1;$i<21;$i++){
                                        <option value="{{$i}}">{{$i}}</option>}
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Место</label>
                                    <select name="place" class="form-select" aria-label="Default select example">
                                        <option value=""></option>
                                        @for($i = 1;$i<11;$i++){
                                        <option value="{{$i}}">{{$i}}</option>}
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
                                </div>
                            </div>
                            <hr class="my-4 ">
                            <button class="bg-dark bg-gradient w-100 btn btn-primary btn-lg" type="submit">Забронировать
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-info bg-gradient ">
                <div class="modal-body ">
                    <div class="">
                        <h4 class="mb-3 "> Покупка билета {{$img[3]->title}}</h4>
                        <form class="needs-validation" novalidate="">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Ряд</label>
                                    <select name="row" class="form-select" aria-label="Default select example">
                                        <option value=""></option>
                                        @for($i = 1;$i<21;$i++){
                                        <option value="{{$i}}">{{$i}}</option>}
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Место</label>
                                    <select name="place" class="form-select" aria-label="Default select example">
                                        <option value=""></option>
                                        @for($i = 1;$i<11;$i++){
                                        <option value="{{$i}}">{{$i}}</option>}
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
                                </div>
                            </div>
                            <hr class="my-4 ">
                            <button class="bg-dark bg-gradient w-100 btn btn-primary btn-lg" type="submit">Забронировать
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </form>


@endsection
