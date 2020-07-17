@extends('layouts.app')

@section('content')
<x-details model="industry" :item="$industry" />
@endsection