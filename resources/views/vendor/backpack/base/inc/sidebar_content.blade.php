<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
{{--<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>--}}
<li><a href="{{ url(config('backpack.base.route_prefix').'/user') }}"><i class="fa fa-user-o"></i> <span>Users</span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
{{--<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}'><i class='fa fa-cog'></i> <span>Settings</span></a></li>--}}

<li><a href='{{ backpack_url('course') }}'><i class='fa fa-book'></i> <span>Courses</span></a></li>
<li><a href='{{ backpack_url('category') }}'><i class='fa fa-cube'></i> <span>Category</span></a></li>


<li><a href='{{ backpack_url('new') }}'><i class='fa fa-newspaper-o'></i> <span>News</span></a></li>
