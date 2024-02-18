@extends('layouts.app')

@push('body')
    <style>
        .form-hand {
            display: flex !important;
            gap: 15px !important;
        }
    </style>
@endpush

@section('content')
    <h4 class="py-3 m-0"><span class="text-muted fw-light">Тип лечений /</span> Изменить тип лечений</h4>
    <h6 class="text-muted">Тип лечений</h6>
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header p-0 col-lg">
                    <div class="nav-align-top">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link waves-effect active" role="tab"
                                    data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home"
                                    aria-selected="true">O'zbekcha</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link waves-effect" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-profile" aria-controls="navs-top-profile"
                                    aria-selected="false" tabindex="-1">Русский</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link waves-effect" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-profile1" aria-controls="navs-top-profile1"
                                    aria-selected="false" tabindex="-1">Qaraqalpaqsha</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link waves-effect" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-profile2" aria-controls="navs-top-profile2"
                                    aria-selected="false" tabindex="-1">English</button>
                            </li>
                            <span class="tab-slider" style="left: 0px; width: 91.1719px; bottom: 0px;"></span>
                        </ul>
                    </div>
                </div>
                <div class="card-body">

                    <form action="{{ route('typetreatments.update', ['typetreatment' => $slide]) }}"
                        class="browser-default-validation needs-validation row form-hand" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="tab-content col-xl-12">
                            <div class="tab-pane fade active   show" id="navs-top-home" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-floating col-xl-6 form-floating-outline mb-4">
                                                <input type="text" class="form-control" name='uz.[title]'
                                                    id="basic-default-fullname" placeholder="Mavzu"
                                                    value="{{ old('uz' . '.title') ? old('uz' . '.title') : ($slide->translate('uz') != null ? $slide->translate('uz')->title : '') }}">
                                                <label for="basic-default-fullname">Mavzu</label>
                                            </div>


                                        </div>
                                        <div>
                                            <textarea class="form-control ckeditor" id="post_content" cols='30' name={{ 'uz.[body]' }} placeholder="Kontent"
                                                rows="10">
                                                {{ old('uz' . '.body') ? old('uz' . '.body') : ($slide->translate('uz') != null ? $slide->translate('uz')->body : '') }}

                                            </textarea>
                                            <label for="basic-default-bio">Kontent</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-floating col-xl-6 form-floating-outline mb-4">
                                                <input type="text" class="form-control" name='ru.[title]'
                                                    id="basic-default-fullname" placeholder="Тема"
                                                    value="{{ old('ru' . '.title') ? old('ru' . '.title') : ($slide->translate('ru') != null ? $slide->translate('ru')->title : '') }}">

                                                <label for="basic-default-fullname">Тема</label>
                                            </div>

                                        </div>
                                        <div>
                                            <textarea class="form-control ckeditor" id="post_content2" cols='30' name='ru.[body]' placeholder="Контент"
                                                rows="10">
                                                {{ old('ru' . '.body') ? old('ru' . '.body') : ($slide->translate('ru') != null ? $slide->translate('ru')->body : '') }}
                                            </textarea>
                                            <label for="basic-default-bio">Контент</label>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-top-profile1" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-floating col-xl-6 form-floating-outline mb-4">
                                                <input type="text" class="form-control" name='qr.[title]'
                                                value="{{ old('qr' . '.title') ? old('qr' . '.title') : ($slide->translate('qr') != null ? $slide->translate('qr')->title : '') }}" id="basic-default-fullname" placeholder="Tema">

                                                    
                                                @error('qr_.title')
                                                    <p class="help-block text-danger">{{ $message }}</p>
                                                @enderror
                                                <label for="basic-default-fullname">Tema</label>
                                            </div>


                                        </div>
                                        <div>
                                            <textarea class="form-control ckeditor" id="post_content2" cols='30' name='qr.[body]' placeholder="Kontent"
                                                rows="10">                                                {{ old('qr' . '.body') ? old('qr' . '.body') : ($slide->translate('qr') != null ? $slide->translate('qr')->body : '') }}
                                            </textarea>
                                            @error('qr_.body')
                                                <p class="help-block text-danger">{{ $message }}</p>
                                            @enderror
                                            <label for="basic-default-bio">Kontent</label>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-top-profile2" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-floating col-xl-6 form-floating-outline mb-4">
                                                <input type="text" class="form-control" name='en.[title]'
                                                value="{{ old('en' . '.title') ? old('en' . '.title') : ($slide->translate('en') != null ? $slide->translate('en')->title : '') }}"
                                                    id="basic-default-fullname" placeholder="Тема">
                                                @error('en_.title')
                                                    <p class="help-block text-danger">{{ $message }}</p>
                                                @enderror
                                                <label for="basic-default-fullname">Тема</label>
                                            </div>


                                        </div>
                                        <div>
                                            <textarea class="form-control ckeditor" id="post_content2" cols='30' name='en.[body]' placeholder="Контент"
                                                rows="10">
                                                {{ old('en' . '.body') ? old('en' . '.body') : ($slide->translate('en') != null ? $slide->translate('en')->body : '') }}</textarea>
                                            @error('en_.body')
                                                <p class="help-block text-danger">{{ $message }}</p>
                                            @enderror
                                            <label for="basic-default-bio">Контент</label>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-light">Изменть</button>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection


@push('body')
    <script>
        $('.slide2').addClass('active');
    </script>
@endpush
