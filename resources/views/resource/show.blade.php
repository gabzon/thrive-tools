@extends('layouts.app')

@section('content')
<x-details model="resource" :item="$resource" />
@endsection