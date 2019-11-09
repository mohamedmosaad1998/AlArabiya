<!-- FOOTER -->
<section class="wed-hom-footer" style="padding: 0;">
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">

@if (\Backpack\PageManager\app\Models\Page::count()>0)
            <div class="row wed-foot-link ">
                <div class="col-md-12 col-sm-12 foot-tc-mar-t-o">
                    <h4>{{trans('lang.links')}}</h4>
                    <ul>
                        @foreach (\Backpack\PageManager\app\Models\Page::all() as $page)
                            <li><a href="{{url('/'.$page->slug)}}">{{$page->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif

            <div class="col-sm-12 wed-foot-link-1 social-links" style="border-top:1px solid #444;text-align: center">
                <div class="col-md-12">
                    <ul class="text-center" style="padding: 15px;">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    <div class="clearfix"></div>
</section>

<!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
<section>

    <!-- FORGOT SECTION -->
    <div id="modal3" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello... </h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Forgot password</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name3" class="validate">
                            <label>User name or email id</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

