<x-layout>
  <x-slot name='judul_halaman'>Parameter</x-slot>
  <x-slot name='nama_halaman'>Data Parameter</x-slot>
  <x-slot name='konten_halaman'>
    <a href="{{ route('parameter.create') }}" class="btn btn-primary btn-sm"> Tambah data </a>
      <table class="table table-bordered">
        <thead>
          <tr>
            {{-- <th>#</th> --}}
            <th>Umur</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>Lingkar Kepala</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($parameter as $parameters)
          <tr>
            {{-- <td>{{ $loop->iteration }}</td> --}}
            <td>{{ $parameters->umur }}</td>
            <td>{{ $parameters->tinggiBadan }}</td>
            <td>{{ $parameters->beratBadan }}</td>
            <td>{{ $parameters->lingkarKepala }}</td>
            <td>
            <!-- Actions: View, Edit, Delete -->
              {{-- <a href="{{ route('parameter.show', $parameters->id) }}" class="btn btn-info btn-sm"><i class="far fa-eye"></i> View</a> --}}
              <a href="{{ route('parameter.edit', $parameters->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a>
                <form action="{{ route('parameter.destroy', $parameters->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete {{ $parameters->name }}?')"><i class="far fa-trash-alt"></i> Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </x-slot>
</x-layout>