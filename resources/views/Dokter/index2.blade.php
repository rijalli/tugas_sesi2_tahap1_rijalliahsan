<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dokter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <a href="{{ route('dokter.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Daftar Dokter
                </a>

                <table class="table-auto  mt-5">
                    <tr>
                    
                        <th class="border px-4 py-2" width="10%">Nama Dokter</th>
                        <th class="border px-4 py-2" width="10%">Spesialis</th>
                        <th class="border px-4 py-2" width="10%">Alamat</th>
                        <th class="border px-4 py-2" width="10%">Telp</th>
                        
                        <th class="border px-4 py-2" width="10%">Aksi</th>
                    </tr>
                    @forelse ($dokters as $dokter )
                    <tr>
                        
                        <td class="border px-4 py-2">{{ $dokter->nama }}</td>
                        <td class="border px-4 py-2">{{ $dokter->spesialis }}</td>
                        <td class="border px-4 py-2">{{ $dokter->alamat }}</td>
                        <td class="border px-4 py-2">{{ $dokter->telp }}</td>
                       
                        <td class="border px-4 py-2">
                        <a href="{{ route('dokter.edit', $dokter->id) }}">Edit</a>
                               <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" class="inline-block">
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

