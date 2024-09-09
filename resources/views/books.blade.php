<h1>List Buku</h1>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Nama Author</th>
            <th>Email Author</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ increment($books, $loop) }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->name }}</td>
                <td>{{ $book->author->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<br>
{{ $books->links() }}
