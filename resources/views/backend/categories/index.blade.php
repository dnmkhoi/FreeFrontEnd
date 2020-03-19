@extends('backend.layout.master')

@section('content-sub')
Danh sách thể loại
@endsection

@section('content')
<div>
<a href="{{ route('categories.create') }}" class="btn btn-primary">Thêm mới</a>
</div>
<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Tìm kiếm tên thể loại">
<div class="form-group">
</div>
<table id="myTable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th >Tên thể loại</th>
            <th class="w-10px text-center">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = 1;
        ?>
        @foreach($dsCate as $cate)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $cate->cat_name }}</td>
            <td>
                <a href="{{ route('categories.edit', ['id' => $cate->cat_id]) }}" class="btn btn-xs btn-flat btn-success">Sửa</a>
                <form class="d-inline" method="post" action="{{ route('categories.destroy', ['id' => $cate->cat_id]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE" />
                    <button class="btn btn-xs btn-flat btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        <?php
        $stt++;
        ?>
        @endforeach
    </tbody>
</table>
{{ $dsCate->links() }}
@endsection
<script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];

        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
</script>
<style>
    table th{
        text-align: center;
    }
    .w-10px{
        width: 3%;
        text-align: center;
    }
</style>
