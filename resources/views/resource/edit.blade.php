@extends('layouts.app')

@section('content')
<x-multiform-edit :item="$resource" model="resource" />
@endsection