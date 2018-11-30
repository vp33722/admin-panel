@extends('layouts.master')

@section('content')

<h3 class="panel-heading">All Applications</h3>
<a href="{{route('application.create')}}" class="btn btn-primary" style="float: right; margin-left: 30px;">ADD NEW</a>
<div class="form-group" style="float: right;width:300px; margin-left: 20px;">
    {{
         html()
            ->select('plateform',$plateform)
            ->class('form-control')
            ->placeholder('All Plateform')
    }}
</div>

@if(session()->has('create'))
<script type="text/javascript">alert('Application Created Successfully');</script>
@endif

<div class="row">
        <div class="col-md-12">
            <div class="grid simple">
                <div class="grid-body no-border">
                   <br>
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
        $('#plateform').change(function()
        {
               LaravelDataTables["dataTableBuilder"].ajax.url('{{ route('application.index') }}?app_platform_id=' + this.value).load();


        });
    </script>

@stop
