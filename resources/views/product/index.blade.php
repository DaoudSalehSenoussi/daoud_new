@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                        <tr>
                            <th>photo</th>
                            <th>name</th>
                            <th class="text-right">price</th>
                            <th class="text-right">created_by</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><img src="{{asset('/uploads/products/').'/'.$product->photo}}" alt="{{$product->name}}" width="200px" height="200px"/></td>
                                <td>{{$product->name}}</td>
                                <td class="text-right">{{$product->price}}</td>
                                <td class="text-right">{{$product->user[0]->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-3">
                
@endsection