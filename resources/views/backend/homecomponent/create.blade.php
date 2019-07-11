@extends('backend.layout')

@section('content')

<div class="br-section-wrapper">
    <h6 class="br-section-label">@lang('Add') مكون</h6>
<!--    <p class="br-section-text">@lang('Description')</p>-->

    <div class="table-wrapper">

        {{Form::open(['route'=>['backend.homecomponent.store'],'method'=>'POST' , 'files' => true])}}
        <div class="form-layout form-layout-1">
            <div class="row mg-b-25">

                @include('backend.homecomponent.fields')
            </div>
        </div>
        {{Form::close()}}
    </div>
</div>
@endsection