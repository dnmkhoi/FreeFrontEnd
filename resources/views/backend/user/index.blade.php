@extends('backend.layout.master')

@section('content-sub')
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
