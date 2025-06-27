@php $page = "places" @endphp

@extends('master')

@section('content')

<div class="content-banner p-4">
	<h1 class="text-xl">Places</h1>
</div>
<hr>
<div class="m-4 flex">
	<a href="https://nekoweb.org/" class="m-2"><img src="https://nekoweb.org/assets/buttons/button11.gif" class="h-[50px]"></a>
	<a href="https://liquone.neocities.org" class="m-2"><img src="{{ asset('images-persistent/liquone.png') }}" class="h-[50px]"></a>
	<a href="https://saffrith.neocities.org/" class="m-2"><img src="{{ asset('images-persistent/saffrith.png') }}" class="h-[50px]"></a>
</div>

@endsection