@extends('admin.layouts.master')

@section('title')
    Dealer list
@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb', ['lists' => ['Dealers' => route('dealers.index')]])
        @slot('title')
            Dealer list
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        @can('dealers.create')
                            <a href="{{ route('dealers.create') }}" onclick="showSaveModel(event)" class="btn btn-primary"><i
                                    class="mdi mdi-plus"></i>&nbsp;Add dealer</a>
                        @endcan
                    </div>
                    <div class="float-start">
                        {!! Form::open([
                            'url' => route('dealers.index'),
                            'id' => 'form-search',
                            'class' => 'row row-cols-lg-auto g-3 align-items-center',
                            'method' => 'get',
                        ]) !!}
                        <div class="form-group">
                            {!! Form::text('query_str', request()->query('query_str'), [
                                'class' => 'form-control',
                                'placeholder' => 'Search...',
                                'style="width: 300px;"',
                            ]) !!}
                        </div>
                        <div class="form-group mt-0 mb-1">
                            {{ Form::bsSelect('', 'is_active', request()->query('is_active'), '', ['class' => '', 'placeholder' => 'Select status'], $status, false) }}
                        </div>
                        <button type="submit" name="type" value="submit"
                            class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>
                        &nbsp;
                        <a href="{{ route('dealers.index') }}" class="btn btn-secondary waves-effect waves-light">
                            Reset
                        </a>
                        {!! Form::close() !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="divtable">
                        {!! $table !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="divOffcanvas">

        </div>
    </div>
@endsection
@section('script-bottom')
    <script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dealer.js') }}"></script>
@endsection
