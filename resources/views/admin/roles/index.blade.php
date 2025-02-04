@extends('admin.layouts.master')
@section('content')

<main class="main-content">
    <div class="card">
        <div class="card-body">
            <div class="table overflow-auto" tabindex="8">
                @include('admin.layouts.partials.message')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">عنوان جستجو</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" wire:model="search">
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th class="text-center align-middle text-primary">ردیف</th>
                        <th class="text-center align-middle text-primary">نام نقش</th>
                        <th class="text-center align-middle text-primary">ویرایش</th>
                        <th class="text-center align-middle text-primary">حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $index => $role)
                        <tr>
                            <td class="text-center align-middle">{{$roles->firstItem()+$index}}</td>
                            <td class="text-center align-middle">{{$role->name}}</td>
                            <td class="text-center align-middle">
                                <a class="btn btn-outline-info" href="{{route('roles.edit',$role->id)}}">
                                    ویرایش
                                </a>
                            </td>
                            <td class="text-center align-middle">
                                <form action="{{route('roles.destroy',$role->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-info">
                                        حذف
                                    </button>
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </table>
                <div style="margin: 40px !important;"
                     class="pagination pagination-rounded pagination-sm d-flex justify-content-center">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
