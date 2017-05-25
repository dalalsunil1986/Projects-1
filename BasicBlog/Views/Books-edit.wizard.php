@@Form::open():
<table class="table table-bordered table-hover table-striped">
    <tbody>
        <tr><td>Name</td><td>@@Form::required()->class('form-control')->text('name', $book->name):</td></tr>
        <tr><td>Author</td><td>@@Form::required()->class('form-control')->text('author', $book->author):</td></tr>
        <tr><td colspan="2">@@Form::class('btn btn-info pull-right')->submit('edit', 'EDIT BOOK'):</td></tr>
        @if( isset($success) ):
        <tr>
            <td colspan="2">
                <div class="alert alert-success">
                    {{$success}}
                </div>
            </td>
        </tr>
        @endif:
    </tbody>
</table>
@@Form::close():