@extends('layouts.app')
@section('content')
@include('products.product', ['product', $product])	
@endsection