<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pasien') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
           

<form class="w-full max-w-lg" action="{{ route('pasien.update', $pasien->id) }}" method="POST">
@csrf
 @method('put')   
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        NIK
      </label>
      <input value="{{ $pasien->nik }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="nik" type="text" placeholder="Nomor Induk Kependudukan">
      
    </div>

    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Nama
      </label>
      <input value="{{ $pasien->nama }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="nama" type="text" placeholder="Nama Lengkap">
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Jenis Kelamin
      </label>
      <select value="{{ $pasien->jenis_kelamin }}" name="jenis_kelamin" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
          <option>Jenis Kelamin</option>
          <option value="Laki - Laki">Laki - Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Tanggal Lahir
      </label>
      <input value="{{ $pasien->tanggal_lahir }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="tanggal_lahir" type="date" placeholder="tanggallahir">
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
        Pekerjaan
      </label>
      <input value="{{ $pasien->pekerjaan }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="pekerjaan" type="text" placeholder="Pekerjaan">
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Telp
      </label>
      <input value="{{ $pasien->telp }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="telp" type="text" placeholder="Telpon">
      
    </div>

    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Nama Orang Tua
      </label>
      <input value="{{ $pasien->nama_orangtua }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="nama_orangtua" type="text" placeholder="Nama Orang Tua">
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Tanggal Pendaftaran
      </label>
      <input value="{{ $pasien->tanggal_daftar }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="tanggal_daftar" type="date" placeholder="Tanggal_pendaftaran">
      
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

