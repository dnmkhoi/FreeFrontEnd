@extends('backend.layout.master')

@section('content-sub')
Thêm mới thể loại
@endsection
@section('content')
<form id="frmtheLoai" name="frmtheLoai" method="post" action="{{ route('categories.store') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="l_ten">Tên thể loại</label>
        <input type="text" class="form-control" id="cat_name" name="cat_name" aria-describedby="cat_nameHelp" placeholder="Nhập tên thể loại" value="{{ old('cat_name') }}">
    </div>
    <button class="btn btn-primary">Lưu</button>
</form>
@endsection

@section('custom-scripts')
<script>
    $(document).ready(function () {
        $("#frmtheLoai").validate({
            rules: {
                cat_name: {
                    required: true,
                    minlength: 3,
                    maxlength: 191
                }
            },
            messages: {
                cat_name: {
                    required: "Vui lòng nhập tên Loại",
                    minlength: "Tên Loại phải có ít nhất 3 ký tự",
                    maxlength: "Tên Loại không được vượt quá 191 ký tự"
                },
            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                // Thêm class `invalid-feedback` vanchuyeno field đang có lỗi
                error.addClass("invalid-feedback");
                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                } else {
                    error.insertAfter(element);
                }
                // Thêm icon "Kiểm tra không Hợp lệ"
                if (!element.next("span")[0]) {
                    $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>")
                        .insertAfter(element);
                }
            },
            success: function (label, element) {
                // Thêm icon "Kiểm tra Hợp lệ"
                if (!$(element).next("span")[0]) {
                    $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>")
                        .insertAfter($(element));
                }
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        });
    });
</script>
@endsection
