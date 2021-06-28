@extends('supplier.base')

@section('content')






    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Supplier's details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
            </div>
        </div>
    </div>



    <div class="row text-center mt-4">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Supplier Name:</strong>
                {{ $supplier->supplier_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Supplier Phone:</strong>
                {{ $supplier->supplier_phone_no }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Supplier Email:</strong>
                {{ $supplier->supplier_email_no }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Supplier Adress:</strong>
                {{ $supplier->supplier_address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Supplier PinCode:</strong>
                {{ $supplier->supplier_pincode }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Supplier Status:</strong>
                <span class="badge badge-secondary">
                    {{ $supplier->status }}
                </span>

            </div>
        </div>
    </div>
@endsection
