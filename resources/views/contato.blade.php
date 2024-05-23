@extends('layout')

@section('content')
                <br>
                <p class="h1">Contatos - Fale conosco:</p>
                <br><br> <br><br>


                <div class="container text-center">
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="card text-bg-dark">
                                <img src="/img/foto-contato.jpg" class="card-img" alt="..." width="500" height="500">
                                <div class="card-img-overlay">
                                    <h1 class="card-title">Telefone:</h1>
                                    <p class="card-text">(11) 2045-4000</p>
                                    <p class="card-text"><small></small></p>
                                </div>
                            </div>



                        </div>
                        <div class="col text-start">
                            <p class="h1">Deixe sua mensagem:</p>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Seu Email:</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Digite sua mensagem:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br><br>
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-success">&nbsp;&nbsp;Enviar&nbsp;&nbsp;</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                </div>

                <br><br><br>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Voltar ao topo.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home">Retornar ao inicio.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato">Contato.</a>
                    </li><br>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Feito por Lucas Marçal</a>
                    </li>
                </ul>
            </div>
            <div class="col-1">
                &nbsp;
                <br>
            </div>
        </div>
    </div>
    @endsection