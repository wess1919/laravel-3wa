@extends('layouts.adminlayout')

@section('content')
  
<h3>customers List</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
            <tr>
                <th scope="row"> {{$customer->id}} </th>
                <td scope="row">{{$customer->firstname.''.$customer->lastname}} </td>
                <td scope="row">{{$customer->phone}} </td>
                <td scope="row">{{$customer->email}} </td>
                <td>
                    <a href="{{route('customers.show',['customer'=>$customer->id])}}" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="{{route('customers.edit',['customer'=>$customer->id])}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    <div class="float-right mr-3">
        {{$customers->links()}}
    </div>

@endsection