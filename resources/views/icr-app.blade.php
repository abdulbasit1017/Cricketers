@extends('layout.app')


@section('content')
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid w-75"
                    src="https://plus.unsplash.com/premium_photo-1672115680958-54438df0ab82?q=80&w=1784&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D  "
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-75"
                    src="https://images.unsplash.com/photo-1439853949127-fa647821eba0?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-75"
                    src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="https://media.istockphoto.com/id/615807740/photo/sunrise-over-moraine-lake.jpg?s=1024x1024&w=is&k=20&c=fx_WpQRgyWr1FsKDmsBXJuG8OYZO6chPxlBvtfguyVE="
            class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="https://media.istockphoto.com/id/615807740/photo/sunrise-over-moraine-lake.jpg?s=1024x1024&w=is&k=20&c=fx_WpQRgyWr1FsKDmsBXJuG8OYZO6chPxlBvtfguyVE="
            class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="https://media.istockphoto.com/id/615807740/photo/sunrise-over-moraine-lake.jpg?s=1024x1024&w=is&k=20&c=fx_WpQRgyWr1FsKDmsBXJuG8OYZO6chPxlBvtfguyVE="
            class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <!-- Comentário de teste -->
    <footer class="br-footer">
        <div class="divider-top col-12 text-center py-2" style="background-color: #061734;">
          <a href="#">Voltar ao topo</a>
        </div>
        <!-- <div class="col-3 text-center" style="background-color: pink;">
          <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Gov.br_logo.svg/1200px-Gov.br_logo.svg.png" alt="Imagem" />
          </div>
        </div> -->

        <!--obrigatório no padrão, mas no protótipo não-->
        <div class="br-list horizontal" data-toggle="data-toggle" data-sub="data-sub">
          <!--div da logo do gov-->
          <div class="col-3">
            <a class="br-item header" href="javascript:void(0)">
              <div class="img-define">
                <img src="assets/images/govbr -svg.svg" alt="Imagem" />
              </div>

              <!-- <div class="br-list"></div> -->
            </a>
          </div>

          <!--div da logo do sinajuve-->
          <div class="col-3">
            <a class="br-item header" href="javascript:void(0)">
              <div class="img-define">
                <img src="assets/images/sinajuve-svg.svg" alt="Imagem" />
              </div>
            </a>
          </div>

        </div>

      <span class="br-divider my-3"></span>

        <div class="container-lg">
          <div class="info">
            <div class="text-down-01 text-medium pb-3"><strong>SINAJUVE 2024</strong> | Site desenvolvido com software livre e
              mantido pelo IFG&nbsp;
            </div>
          </div>
        </div>
      </footer>
  
@endsection
