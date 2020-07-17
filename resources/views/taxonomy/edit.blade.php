@extends('layouts.app')

@section('content')
<x-multiform-edit :item="$taxonomy" model="taxonomy" />
@endsection