@extends('admin.layouts.master')
@section('content')
	<main class="main-content">
		<div class="card">
            <div class="card-body">
                <div class="container">
                    @include('admin.layouts.partials.errors')

                    <h4 class="card-title">ویرایش کاربر</h4>
                    <form method="POST" action="{{route('articles.update',$article->id)}}" >
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">عنوان</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-left"  dir="rtl" name="name" value="{{$article->title}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">دسته بندی</label>
                            <div class="col-sm-10">
                                <select name="category_id" class="form-control">
                                    <option value="{{null}}">انتخاب کنید</option>
                                    @foreach($categories as $key=>$value)
                                        @if($article->category_id == $key)
                                            <option selected value="{{$key}}" >{{$value}}</option>
                                        @else
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">متن مقاله</label>
                            <div class="col-sm-10">
                                <textarea name="body" class="form-control text-left" rows="5" >{{$article->body}}</textarea>
                            </div>
                        </div>
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
