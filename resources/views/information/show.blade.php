@extends('layouts.app')

@section('template_title')
    {{ $information->name ?? __('Show') . " " . __('Information') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Information</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('information.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Inf:</strong>
                                    {{ $information->id_inf }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Image Inf:</strong>
                                    {{ $information->image_inf }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name Inf:</strong>
                                    {{ $information->name_inf }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description Inf:</strong>
                                    {{ $information->description_inf }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
