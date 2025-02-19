@extends('admin.layouts.master')
@section('content')

<main class="main-content">
    <div class="card">
        <div class="card-body">
            @include('admin.layouts.partials.message')
            <livewire:users.user-list lazy/>
        </div>
    </div>

</main>
@endsection
