@extends('backend.layout.master')

@section('content-sub')
Danh sách Avatars
@endsection

@section('content')
<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Tìm kiếm tên avatar">
<div class="form-group">
</div>
<table id="myTable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tiêu đề avatar</th>
            <th>Loại avatar</th>
            <th>Src avatar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = 1;
        ?>
        @foreach($dsAvatar as $avartar)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $avartar->avt_title }}</td>
            <td>{{ $avartar->avt_type }}</td>
            <td>{{ $avartar->avt_src }}</td>
        </tr>
        <?php
        $stt++;
        ?>
        @endforeach
    </tbody>
</table>
{{ $dsAvatar->links() }}
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
</style>
