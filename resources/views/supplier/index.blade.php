@extends('supplier.base')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="">suppliers list </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('create') }}"> Create New Supplier</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif



    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone No</th>
            <th>Email</th>
            <th>Adress</th>
            <th>Pin Code</th>
            <th>Statu</th>
            <th >Action</th>
        </tr>

        @foreach ($da as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->supplier_name }}</td>
                <td>{{ $value->supplier_phone_no }}</td>
                <td>{{ $value->supplier_email_no }}</td>
                <td>{{ $value->supplier_address }}</td>
                <td>{{ $value->supplier_pincode }}</td>
                <td>{{ $value->status }}</td>
                <td>
                    <form action="{{ route('destroy',$value->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('show',$value->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('editView',$value->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
