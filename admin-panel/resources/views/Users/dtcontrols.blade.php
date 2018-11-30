@if(isset($deleteUrl))

 
    {{ html()->form('DELETE', $deleteUrl)->class('dt-delete-form')->open()}}
        {!!
            html()->submit('<i class="fa fa-trash-o"></i>')
                ->class('btn btn-danger btn-xs')
                ->attribute('data-id', $id)
                ->attribute('onclick', "return confirm('Are you sure you want to delete this record?');" );
        !!}
@else
    {{ html()->form()->open() }}
@endif

@if(isset($editUrl))
    <a href="{!! $editUrl !!}" class="btn btn-primary btn-xs" title="Edit">
        <i class="fa fa-edit"></i>
    </a>
@endif

{{ html()->form()->close() }}
