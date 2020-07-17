@extends('layouts.app')

@section('content')
<x-multiform-edit :item="$guide" model="guide" />
@endsection