<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr><td width="20%">ID</td><td>Name</td><td>Author</td><td>@@Html::anchor('add-book', 'Add'):</td></tr>
    </thead>
    <tbody>
        @foreach( $books as $book ):
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->name}}</td>
            <td>{{$book->author}}</td>
            <td>
                @@Html::anchor('edit-book/' . $book->id, 'Edit'):
                @@Html::anchor('Books/delete/' . $book->id, 'Delete'):
            </td>
        </tr>
        @endforeach:
    </tbody>
</table>