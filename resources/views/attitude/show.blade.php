@extends('layouts.app')

@section('content')
<x-details model="attitude" :item="$attitude" />
@endsection