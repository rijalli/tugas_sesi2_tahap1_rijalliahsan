<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dokter') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
           

<form class="w-full max-w-lg" action="{{ route('dokter.update', $dokter->id) }}" method="POST">
@csrf
 @method('put')   
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Nama
      </label>
      <input value="{{ $dokter->nama }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="nama" type="text" placeholder="Nama Lengkap">
    </div>

    <div class="w-full md:w-1/2 px-3">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
         Spesialis
      </label>
      <input value="{{ $dokter->spesialis }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="nama" type="text" placeholder="Spesialis">
</div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
         Alamat
      </label>
      <textarea value="{{ $pasien->alamat }}" class="resize appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="alamat" type="text" placeholder="Alamat"></textarea>
      
    </div>

    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Telp
      </label>
      <input value="{{ $dokter->telp }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="telp" type="text" placeholder="tanggallahir">
    </div>
  </div>

  

    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
    <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4" type="submit">
                  Save
    </button>
    </div>
  </div>


  </div>
</form>
                
            </div>
        </div>
    </div>
</x-app-layout>

