@extends('layouts.app')

@section('content')
    <div class="row gy-4">




        <div class="col-lg-3 col-sm-6 col-12">
            <a href="{{ route('typetreatments.index') }}">
                <div class="card bg-info">
                    <div class="card-header align-items-start pb-3">
                        <div>
                            <h2 class="fw-bolder text-white" style="display: flex; justify-content: space-between">
                                {{ $typeTreat }}
                                <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>

                            </h2>
                            <p class="card-text text-white">Количества тип лечений</p>
                        </div>

                    </div>
                </div>
            </a>
        </div>






        <div class="col-lg-3 col-sm-6 col-12">
            <a href="{{ url('/order') }}">
                <div class="card bg-info">
                    <div class="card-header align-items-start pb-3">
                        <div>
                            <h2 class="fw-bolder text-white" style="display: flex; justify-content: space-between">
                                {{ $order }}
                                <i class="menu-icon tf-icons mdi mdi-format-align-bottom"></i>

                            </h2>
                            <p class="card-text text-white">Ожидающие заявки</p>
                        </div>

                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
