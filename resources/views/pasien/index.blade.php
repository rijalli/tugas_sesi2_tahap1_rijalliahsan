<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pasien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <a href="{{ route('pasien.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Daftar Pasien
                </a>

                <table class="table-auto  mt-5">
                    <tr>
                    
                        <th class="border px-4 py-2" width="10%">Nik</th>
                        <th class="border px-4 py-2" width="10%">Nama</th>
                        <th class="border px-4 py-2" width="10%">Tanggal Lahir</th>
                        <th class="border px-4 py-2" width="10%">Alamat</th>
                        <th class="border px-4 py-2" width="10%">Telp</th>
                        <th class="border px-4 py-2" width="10%">Pekerjaan</th>
                        <th class="border px-4 py-2" width="10%">Jenis Kelamin</th>
                        <th class="border px-4 py-2" width="10%">Nama Orang Tua</th>
                        <th class="border px-4 py-2" width="10%">Tanggal Daftar</th>
                        <th class="border px-4 py-2" width="10%">Aksi</th>
                    </tr>
                    @forelse ($pasiens as $pasien )
                    <tr>
                        <td class="border px-4 py-2">{{ $pasien->nik }}</td>
                        <td class="border px-4 py-2">{{ $pasien->nama }}</td>
                        <td class="border px-4 py-2">{{ $pasien->tanggal_lahir }}</td>
                        <td class="border px-4 py-2">{{ $pasien->alamat }}</td>
                        <td class="border px-4 py-2">{{ $pasien->telp }}</td>
                        <td class="border px-4 py-2">{{ $pasien->pekerjaan }}</td>
                        <td class="border px-4 py-2">{{ $pasien->jenis_kelamin }}</td>
                        <td class="border px-4 py-2">{{ $pasien->nama_orangtua }}</td>
                        <td class="border px-4 py-2">{{ $pasien->tanggal_daftar }}</td>
                        <td class="border px-4 py-2">
                        <a href="{{ route('pasien.edit', $pasien->id) }}">Edit</a>
                               <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST" class="inline-block">
                               @csrf
                               @method('delete')
                               <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="border px-4 py-2 text-center"></td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

