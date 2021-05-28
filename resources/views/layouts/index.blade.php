@extends('layouts.adminlayout')

@section('content')
<a href=" {{route('customers.create')}} ">
    <button tyoe="button" class="btn btn-sm btn-outline-primary float-right">
        <i class="fas fa-user-plus"></i>ajout customer
    </button>
    <h3><i class="fas fa-users">Customers List</h3>
        
</a>