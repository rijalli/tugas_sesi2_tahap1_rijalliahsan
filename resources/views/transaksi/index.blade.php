
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rekam') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <a href="{{ route('pasien.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Daftar Rekam
                </a>

                <table class="table-auto  mt-5">
                    <tr>
                    
                        <th class="border px-4 py-2" width="10%">Id Rekam</th>
                        <th class="border px-4 py-2" width="10%">Id Pasien</th>
                        <th class="border px-4 py-2" width="10%">Nama Pasien</th>
                        <th class="border px-4 py-2" width="10%">Keluhan</th>
                        <th class="border px-4 py-2" width="10%">Diagnosa</th>
                        <th class="border px-4 py-2" width="10%">Resep obat</th>
                        <th class="border px-4 py-2" width="10%">Tanggal Periksa</th>
                        <th class="border px-4 py-2" width="10%">Id Dokter</th>
                        <th class="border px-4 py-2" width="10%">Nama Dokter</th>
                        <th class="border px-4 py-2" width="10%">Aksi</th>
                    </tr>
                    @forelse ($rekams as $rekam )
                    <tr>
                        <td class="border px-4 py-2">{{ $rekam->id }}</td>
                        <td class="border px-4 py-2">{{ $rekam->id_pasien }}</td>
                        <td class="border px-4 py-2">{{ $rekam->nama_pasien }}</td>
                        <td class="border px-4 py-2">{{ $rekam->keluhan }}</td>
                        <td class="border px-4 py-2">{{ $rekam->diagnosa }}</td>
                        <td class="border px-4 py-2">{{ $rekam->resep }}</td>
                        <td class="border px-4 py-2">{{ $rekam->tanggal_periksa }}</td>
                        <td class="border px-4 py-2">{{ $rekam->id_dokter }}</td>
                        <td class="border px-4 py-2">{{ $rekam->nama_dokter }}</td>
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

