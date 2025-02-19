@extends('admin.layouts.master')
@section('content')
	<main class="main-content">
		<div class="card">
            @include('admin.layouts.partials.errors')
            <livewire:users.edit-user :id="$id" />
        </div>
	</main>
@endsection
