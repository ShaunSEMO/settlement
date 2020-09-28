<a class="btn btn-primary std-btn" href="{{ url('/$d_bu$!n3$$_d@$h/gallery/create') }}">Add Gallery</a>


<div class="images-container col-md-8">

    <div class="row">
        @foreach($pictures as $picture)
            
            <div class="col-4 col-md-4">
                <br>
                <a href="{{ url('/gallery/'.$picture->id) }}">
                    <img class="gallery-image img-fluid each-image" src="{{ url($picture->image) }}" alt="">
                    <br>
                    {!! Form::open(['action' => ['DashboardController@deletePicture', $picture->id], 'method' => 'POST']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                    {!!Form::close()!!}
                </a>
            </div>
            
        @endforeach
    </div>

    <br><br>
</div>