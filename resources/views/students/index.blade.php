    @extends('students.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Warteg</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('warteg.create') }}"> Create</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No </th>
            <th>Nama Makanan</th>
            <th>No Meja</th>
            <th>Nasi</th>
            <th>Lauk</th>
            <th>Minuman</th>
            <th width="280px">Ganti Batal</th>
        </tr>
        @foreach ($wartegs as $warteg)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $warteg->nama }}</td>
            <td>{{ $warteg->nis }}</td>
            <td>{{ $warteg->rombel }}</td>
            <td>{{ $warteg->rayon }}</td>
            <td>{{ $warteg->ket}}</td>
            <td>
                <form action="{{ route('warteg.destroy',$warteg->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('warteg.edit',$warteg->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection
