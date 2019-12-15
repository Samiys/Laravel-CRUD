@include('inc.header')

<div class="container">
<div class="row">
<legend>Laravel CRUD Application</legend>
    <div>
            @if(session('info'))
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4 class="alert-heading">Success!</h4>
                    <p class="mb-0">{{session('info')}}</p>
                </div>
            @endif
    </div>
 <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
             @if(count($articles) > 0)
                 @foreach($articles->all() as $article)
            <tr class="table-light">
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->description }}</td>
                <td>
                    <a href="{{ url("/read/{$article->id}") }}" class="badge badge-primary">Read</a> |
                    <a href='{{ url("/update/{$article->id}") }}' class="badge badge-success">Update</a> |
                    <a href="{{ url("/delete/{$article->id}") }}" class="badge badge-danger">Delete</a>

                </td>
            </tr>
                 @endforeach
             @endif
            </tbody>
        </table>
    </div>
</div>

@include('inc.footer')