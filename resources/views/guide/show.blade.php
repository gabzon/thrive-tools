@extends('layouts.app')

@section('content')
<x-details model="guide" :item="$guide" />
@endsection