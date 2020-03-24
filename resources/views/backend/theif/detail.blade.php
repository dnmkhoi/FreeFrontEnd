@extends('backend.layout.master')

@section('content-sub')
Danh mục bài viết
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-body p-0">
        <table class="table table-hover text-nowrap">
            @foreach($data['art_list'] as $key=> $obj)
            <tr>
                <td style="width: 200px;">
                    @if($obj['art_isimg'])
                        <img src="{{$obj['art_src']}}" style="width: 200px;"/>
                    @else
                        <video src="{{$obj['art_src']}}" style="width: 200px;" loop="" autoplay muted></video>
                    @endif
                </td>
                <td>
                    <h3 style="margin:0px">
                        {{ $obj['art_name'] }}
                    </h3>
                    <span class="badge badge-info">{{ $obj['art_author'] }} {{ $obj['art_date'] }}</span>
                    <p style="width: 80%;white-space: pre-wrap;">{{ $obj['art_detail'] }}</p>       
                    <div>
                        @foreach($obj['links'] as $key_link=> $obj_link)
                            <a class="btn btn-block btn-outline-primary btn-xs" 
                                href="{{$obj_link['link']}}" 
                                style="width: auto;display: inline-block;margin-top:0px" target="_blank">
                                {{$obj_link['name']}}
                            </a>
                        @endforeach
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection

