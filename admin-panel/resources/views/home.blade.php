@extends('layouts.master')

@section('content')

<h3 class="panel-heading">All Users</h3>

<div class="form-group" style="float: right;width:300px;">
{{
     html()
            ->select('Application',$application)
            ->class('form-control')
            ->placeholder('All App User')

}}
</div>

<div class="row">
    <div class="col-md-12">
        <div class="grid simple">
            <div class="grid-body no-border"><br>
               <div class="table-responsive">
                    <table class="table">
                         {!! $html->table() !!}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('page-js')
    <script src="{{asset('js/datatable.js')}}"></script>

    {!! $html->scripts() !!}

    <script type="text/javascript">
        $('#Application').change(function()
        {

              LaravelDataTables["dataTableBuilder"].ajax.url('{{ route('home') }}?app_id=' + this.value).load();


        });
    </script>
@stop
