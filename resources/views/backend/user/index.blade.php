@extends('backend.layout.master')

@section('title')
Danh sách người dùng
@endsection

@section('feature-title')
Danh sách người dùng
@endsection

@section('feature-description')
Danh sách người dùng
@endsection

@section('content')
<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Tìm kiếm tên User">
<div class="form-group">
</div>
<table id="myTable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Người dùng</th>
            <th>Email</th>
            <th>Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = 1;
        ?>
        @foreach($danhsachUser as $user)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="text-center">
                <form id="action-active" name="action-active" method="post" action="{{ route('user.active',['id' => $user->id]) }}">
                    @csrf
                    @if ( $user->active == 0)
                        <button class="btn-flat btn btn-sm btn-secondary">
                            <i class="fa fa-check-circle"></i>
                        </button>
                    @else
                        <button class="btn-flat btn btn-sm btn-success">
                            <i class="fa fa-check-circle"></i>
                        </button>
                    @endif
                </form>
            </td>
        </tr>
        <?php
        $stt++;
        ?>
        @endforeach
    </tbody>
</table>
{{ $danhsachUser->links() }}
@endsection
<script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
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
