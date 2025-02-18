@extends('admin.layouts.master')
@section('content')

<main class="main-content">
    <div class="card">
        <div class="card-body">
            <livewire:users.user-list/>
        </div>
    </div>
</main>
@endsection
