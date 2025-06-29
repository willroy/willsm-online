@php $page = "places" @endphp

@extends('master')

@section('content')

<div class="content-banner p-4">
	<h1 class="text-xl">Places</h1>
</div>
<hr>
<div class="m-4 flex flex-row flex-wrap">
	<a href="https://liquone.neocities.org" class="m-2"><img src="{{ asset('images-persistent/buttons/liquone.png') }}" class="h-[40px] awe-button"></a>
	<a href="https://saffrith.neocities.org/" class="m-2"><img src="{{ asset('images-persistent/buttons/saffrith.png') }}" class="h-[40px] awe-button"></a>
	<a href="https://www.youtube.com/@willsm111" class="m-2"><img src="{{ asset('images-persistent/buttons/willsm111.png') }}" class="h-[40px] awe-button"></a>
	<a href="https://neocities.org/" class="m-2"><img src="{{ asset('images-persistent/buttons/neocities.png') }}" class="h-[40px] awe-button"></a>
	<a href="https://nekoweb.org/" class="m-2"><img src="https://nekoweb.org/assets/buttons/button11.gif" class="h-[40px] awe-button"></a>
</div>

@endsection