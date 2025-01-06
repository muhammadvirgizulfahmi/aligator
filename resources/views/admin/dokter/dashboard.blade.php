<x-layout>
  <x-slot name='judul_halaman'>Dokter</x-slot>
  <x-slot name='nama_halaman'>Data Dokter</x-slot>
  <x-slot name='konten_halaman'>
    <a href="{{ route('dokter.create') }}" class="btn btn-primary btn-sm"> Tambah data </a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Foto Sertifikat</th>
            <th>Jenis Kelamin</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($user as $users)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->fotoSertifikat }}</td>
            <td>{{ $users->jenisKelamin }}</td>
            <td>
            <!-- Actions: View, Edit, Delete -->
              <a href="{{ route('dokter.show', $users->id) }}" class="btn btn-info btn-sm"><i class="far fa-eye"></i> View</a>
              <a href="{{ route('dokter.edit', $users->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a>
                <form action="{{ route('dokter.destroy', $users->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete {{ $users->name }}?')"><i class="far fa-trash-alt"></i> Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </x-slot>
</x-layout>