@extends('default')

@section('content')
    <div class="container pt-4 pb-5">
        <div class="row" style="justify-content:space-evenly">
            <form class="d-flex ">
                <input name="search" class="form-control me-2" type="search" placeholder="Search for Products"
                    aria-label="search">
                <button class="btn btn-secondary" type="submit">Search</button>
            </form>
        </div>
    </div>

    <div class="row px-3">
        <div class="col-sm-6">
            <div class="card bg-light mb-3" style="justify-content:space-evenly">
                <div class="card-header" style="justify-content-md-between">
                    <h5><b>Beauty</b></h5>
                    <a href="/category/beauty" class="card-link pull-right" style="text-decoration:none">View all</a>
                </div>
                <div class="card-body">
                    <div>
                        @foreach ($beautys as $beauty)
                            <div class="btn">
                                <a href="productDetail/{{ $beauty->id }}" class="text-black" style="text-decoration:none;">
                                    <div class="card" style="width: 18rem">
                                        <img class="card-img-top" src="{{ asset($beauty->image) }}" alt="Beauty Image">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $beauty->name }}</h5>
                                            <p class="card-text">{{ $beauty->detail }}</p>
                                            <p class="card-text-center"><b>Rp.{{ $beauty->price }}</b></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row px-3">
            <div class="col-sm-6">
                <div class="card bg-light mb-3" style="justify-content:space-evenly">
                    <div class="card-header" style="justify-content-md-between">
                        <b>Camera</b> <a href="/category/camera" class="card-link pull-right">View all</a>
                    </div>
                    <div class="card-body">
                        <div>
                            @foreach ($cameras as $camera)
                                <div class="btn">
                                    <a href="productDetail/{{ $camera->id }}" class="text-black" style="text-decoration:none;">
                                        <div class="card" style="width: 18rem;margin-top:20px">
                                            <img class="card-img-top" src="{{ asset($camera->image) }}" alt="Camera Image">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $camera->name }}</h5>
                                                <p class="card-text">{{ $camera->detail }}</p>
                                                <p class="card-text-center"><b>Rp.{{ $camera->price }}</b></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> --}}

        {{-- <div class="row px-3">
                <div class="col-sm-6">
                    <div class="card bg-light mb-3" style="justify-content:space-evenly">
                        <div class="card-header" style="justify-content-md-between">
                            <b>Food</b> <a href="/category/food" class="card-link pull-right">View all</a>
                        </div>
                        <div class="card-body">
                            <div>
                                @foreach ($foods as $food)
                                    <div class="btn">
                                        <a href="productDetail/{{ $food->id }}" class="text-black" style="text-decoration:none;">
                                            <div class="card" style="width: 18rem;margin-top:20px">
                                                <img class="card-img-top" src="{{ asset($food->image) }}" alt="Food Image">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $food->name }}</h5>
                                                    <p class="card-text">{{ $food->detail }}</p>
                                                    <p class="card-text-center"><b>Rp.{{ $food->price }}</b></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}




        {{-- <div class="container" style="padding-bottom: 100px">
            <div class="row" style="justify-content-md-between">
                @foreach ($beauty as $p)
                    <div class="col-3">
                        <div class="card" style="width: 18rem;margin-top:25px; padding: 10px">
                            <img class="card-img-top" src="{{ asset($p->image) }}" alt="prod-image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $p->name }}</h5>
                                <p class="card-text">Rp.{{ $p->price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> --}}
    @endsection
