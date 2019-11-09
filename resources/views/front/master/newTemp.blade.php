<div class="col-md-3 home-top-cour">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('news.show',$new)}}"><h3>{{$new->title}}</h3></a>
        </div>
        <div class="col-md-12">
            <img src="{{asset('uploads/'.$new->image)}}" alt="" width="100%">
            <hr>
        </div>
        <div class="col-md-12">
            <p>{{htmlspecialchars(substr($new->content,0,40))}}</p>
        </div>
        <div class="hom-list-share">
            <ul>
                <li class="col-12"><a href="{{route('news.show',$new)}}">{{__('lang.read-more')}}</a> </li>
            </ul>
        </div>
    </div>
</div>
