@extends('backend.layout.master')

@section('content-sub')
Danh mục bài viết
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-body p-0">
        <table class="table table-hover text-nowrap">
            <tr>
                <td colspan="2">
                    @if($data['current_page'] != 1)
                        <a class="btn btn-primary "
                            href="{{ route('backend.theif.page', ['page' => ($data['current_page'] + 1)]) }}">
                            <i class="fa fa-chevron-left"></i> 
                        </a>
                    @endif
                    <a class="btn btn-primary" style="float:right;"
                        href="{{ route('backend.theif.page', ['page' => ($data['current_page'] + 1)]) }}">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </td>
            </tr>
            @foreach($data['art_list'] as $key=> $obj)
            <tr>
                <td style="width: 200px;"><img src="{{$obj['art_avt']}}" style="width: 200px;"/></td>
                <td>
                    <h3 style="margin:0px">
                        <a href="{{ $obj['art_link'] }}">{{ $obj['art_name'] }}</a>
                    </h3>
                    <span style="color: #ccc;margin:8px 0px;">{{ $obj['art_date'] }}</span>
                    <p style="width: 80%;white-space: pre-wrap;">{{ $obj['art_detail'] }}</p>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="2">
                    @if($data['current_page'] != 1)
                        <a class="btn btn-primary pull-right"
                            href="{{ route('backend.theif.page', ['page' => ($data['current_page'] + 1)]) }}">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                    @endif
                    <a class="btn btn-primary" style="float:right;"
                        href="{{ route('backend.theif.page', ['page' => ($data['current_page'] + 1)]) }}">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection

