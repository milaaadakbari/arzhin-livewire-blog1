@extends('admin.layouts.master')
@section('content')
    <main class="main-content">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    @include('admin.layouts.partials.errors')

                    <h4 class="card-title">ایجاد نقش</h4>
                    <form method="POST" action="{{route('store.user.roles',$user->id)}}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">نام و نام خانوادگی</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-left" dir="rtl" name="name"
                                       value="{{$user->name}}">
                            </div>
                        </div>
                        @foreach($roles as $role)
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">{{$role->name}}</label>
                                <div class="col-sm-10">
                                    <input type="checkbox"
                                           @if($user->roles()->where('role_id',$role->id)->first()) checked
                                           @endif class="form-check text-left" value="{{$role->id}}" dir="rtl"
                                           name="roles[]">
                                </div>
                            </div>
                        @endforeach
                        <div class="form-group row">
                            <button type="submit" class="btn btn-success btn-uppercase">
                                <i class="ti-check-box m-r-5"></i> ذخیره
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
