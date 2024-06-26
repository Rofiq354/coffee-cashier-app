<table class="table table-striped" id="tbl-category">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal Dibuat</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($category as $c)
            <tr>
                <td>{{ $i = (!isset($i)?1:++$i) }}</td>
                <td class="py-1">{{ $c->nama }}</td>
                <td class="py-1">{{ $c->created_at->format('d-M-Y') }}</td>
                <td class="py-1">
                    {{-- Edit --}}
                    <button type="button" class="btn btn-success mr-2 p-2 ti-pencil" data-toggle="modal" data-target="#modal" data-mode="edit" data-id="{{ $c->id }}" data-nama="{{ $c->nama }}">
                    </button>
                    <form action="category/{{ $c->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-delete p-2 ti-trash">
                            
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>