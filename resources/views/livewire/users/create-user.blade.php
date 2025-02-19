<div class="card-body">
    <div class="container">
        @include('admin.layouts.partials.errors')

        <h4 class="card-title">ایجاد کاربر</h4>
        <form wire:submit="createUser">
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">نام و نام خانوادگی</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-left"  dir="rtl" wire:model="name">
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">ایمیل</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control text-left" dir="rtl" wire:model="email" >
                </div>
            </div>
            <div class="form-group row">

                <label  class="col-sm-2 col-form-label">پسورد</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control text-left" dir="rtl" wire:model="password">
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
