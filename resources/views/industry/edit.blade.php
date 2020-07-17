@extends('layouts.app')

@section('content')
<x-multiform-edit :item="$industry" model="industry" />
@endsection