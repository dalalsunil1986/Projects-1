@@Form::open():
<table class="table table-bordered table-hover table-striped">
    <tbody>
        <tr><td>Name</td><td>@@Form::required()->class('form-control')->text('name'):</td></tr>
        <tr><td>Author</td><td>@@Form::required()->class('form-control')->text('author'):</td></tr>
        <tr><td colspan="2">
            
            @@Html::class('btn btn-warning')->anchor('', 'RETURN LIST'):
            @@Form::class('btn btn-info pull-right')->submit('add', 'ADD BOOK'):
        
        </td></tr>
        @if( isset($success) ):
        <tr>
            <td colspan="2">
                <div class="alert alert-success">
                    {{$success}}
                </div>
            </td>
        </tr>
        @endif:
        
         @if( isset($error) ):
        <tr>
            <td colspan="2">
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            </td>
        </tr>
        @endif:
    </tbody>
</table>
@@Form::close():