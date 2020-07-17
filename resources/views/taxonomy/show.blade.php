@extends('layouts.app')

@section('content')
<x-details model="taxonomy" :item="$taxonomy" />
@endsection