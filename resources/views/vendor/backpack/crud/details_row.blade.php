<div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10  w-100 overflow-auto">
	<div class="row">
		<div class="col-md-12">
            <table class="table table-responsive">

                @foreach ($data as $key=> $val)
                    @if ($key!='id' && $key!='created_at' && $key!='updated_at' && $key!='image')
                        <tr>
                            <th>
                                <td>{{str_replace('_',' ',$key)}} : </td>
                                <td>{{$val}}</td>
                            </th>
                        </tr>
                    @endif
                @endforeach

            </table>
		</div>
	</div>
</div>
<div class="clearfix"></div>
