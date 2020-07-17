@extends('layouts.app')

@section('content')
<x-multiform-edit :item="$attitude" model="attitude" />
@endsection