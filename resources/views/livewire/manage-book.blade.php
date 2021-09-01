<div>
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-transparent">
            <div class="d-flex">
                <span class=""><h4>Manage Books</h4></span>
                <div class="col-4 ms-auto btn-group">
                    <input type="search" name="search" placeholder=" search here ..." wire:model="search" class="form-control">
                    <button class="btn btn-white"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover table-borderless">
                <tr>
                    <th>#id</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>ISBN</th>
                    <th>Price</th>
                    <th>Edition</th>
                    <th>Language</th>
                    <th>Action</th>
                </tr>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->rent_price }}</td>
                        <td>{{ $book->edition }}</td>
                        <td>{{ $book->language }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
