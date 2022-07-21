@extends('layouts.bootstrap')

<style type="text/css">
	.list-style-none{
		list-style: none;
	}
</style>

<ul class="list-style-none">
	<li>
		<strong>ID</strong>
		{{ $profile->id }}
	</li>
	<li>
		<strong>Photo</strong>
		{{ $profile->photo }}
	</li>
	<li>
		<strong>Photo</strong>
		{{ $profile->social }}
	</li>
	<li>
		<strong>Photo</strong>
		{{ $profile->languages }}
	</li>
	<li>
		<strong>Photo</strong>
		{{ $profile->technologies }}
	</li>
	<li>
		<strong>Photo</strong>
		{{ $profile->description }}
	</li>
</ul>

