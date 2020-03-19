@extends('backend.layout.master')

@section('content-sub')
Cập nhật thể loại
@endsection

@section('content')
<form method="post" action="{{ route('categories.update', ['id' => $cat->cat_id]) }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
    <div class="form-group">
        <label for="cat_name">Tên Loại</label>
        <input type="text" class="form-control" id="cat_name" name="cat_name" aria-describedby="cat_nameHelp" placeholder="Nhập tên thể loại" value="{{  old('cat_name', $cat->cat_name )}}">
        <small id="cat_nameHelp" class="form-text text-muted">Nhập tên thể loại. Giới hạn trong 191 ký tự.</small>
    </div>
    <button class="btn btn-primary">Lưu</button>
</form>
@endsection
