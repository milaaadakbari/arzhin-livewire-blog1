<div class="navigation">
    <div class="navigation-icon-menu">
        <ul>
            <li data-toggle="tooltip" title="کاربران">
                <a href="" title=" کاربران">
                    <i class="icon ti-user"></i>
                </a>
            </li>
        </ul>
        <ul>
            <li data-toggle="tooltip" title="ویرایش پروفایل">
                <a href="#" class="go-to-page">
                    <i class="icon ti-settings"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="خروج">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="icon ti-power-off"></i>
                    </button>
                </form>
            </li>
        </ul>
    </div>
    <div class="navigation-menu-body">
        <ul id="users">
            <li>
                <a href="#">کاربران</a>
                <ul>
                    <li><a href="{{route('users.create')}}">ایجاد کاربر</a></li>
                    <li><a href="{{route('users.index')}}">لیست کاربران</a></li>
                </ul>
            </li>
            <li>
                <a href="#">نقش ها</a>
                <ul>
                    <li><a href="{{route('roles.create')}}">ایجاد نقش</a></li>
                    <li><a href="{{route('roles.index')}}">لیست نقش ها</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
