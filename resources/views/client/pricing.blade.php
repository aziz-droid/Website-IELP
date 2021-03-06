@extends('layouts.client.main')
@section('client')
  @php
  $i = 1;
  @endphp
  <div class="container md:pt-36 pt-24 pb-6">
    <div class="flex flex-wrap">
      <div class="w-full md:h-96 hidden md:block bg-center bg-no-repeat bg-cover"
        style="background-image: url('{{ asset('img/pricing.jpg') }}')"></div>
      <img src="{{ asset('img/airplane.jpg') }}" alt="" class="w-full md:hidden">
      <h2 class="text-center w-full md:text-2xl font-semibold text-[#02669A] my-4">KURIKULUM ICAO ENGLISH LANGUAGE
        PROFICIENCY
        COURSE
      </h2>
      <div class="my-4 w-full overflow-x-auto">
        <table class="w-full lg:w-2/3 lg:mx-auto">
          <thead class="bg-slate-800 border-b-2">
            <tr>
              <th rowspan="2" class="p-3 text-sm font-semibold tracking-wide text-center text-white">No</th>
              <th rowspan="2" class="p-3 text-sm font-semibold tracking-wide text-center text-white">Mata
                Pelajaran</th>
              <th colspan="2" class="p-3 text-sm font-semibold tracking-wide text-center text-white">Jam
                Pelajaran</th>
            </tr>
            <tr>
              <th class="p-3 text-sm font-semibold tracking-wide text-center text-white">T</th>
              <th class="p-3 text-sm font-semibold tracking-wide text-center text-white">P</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($price as $p)
              <tr class="bg-[#02669A]">
                <td class="p-3 text-sm text-gray-200 whitespace-nowrap">{{ $i++ }}</td>
                <td class="p-3 text-sm text-gray-200 whitespace-nowrap">{{ $p->pelajaran }}</td>
                <td class="p-3 text-sm text-gray-200 whitespace-nowrap">{{ $p->jamT }}</td>
                <td class="p-3 text-sm text-gray-200 whitespace-nowrap">{{ $p->jamP }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="my-4 w-full">
        <div class="w-full my-4">
          <h2 class="mx-auto border-b-2 border-b-[#02669A] w-min whitespace-nowrap font-semibold md:text-2xl">
            Deskripsi Course
          </h2>
        </div>
        <div class="w-full my-4 text-center lg:w-2/3 lg:mx-auto">
          {{ $desc->deskripsi }}<br />
          <a href="{{ asset('uploads/04KURSIL-IELP.pdf') }}" class="text-blue-600">Download kurikulum dan silabus
            pelatihan ICAO English Language Proficiency</a><br />
          Tanggal Mulai : {{ $desc->dateMulai }}<br />
          Tanggal Akhir : {{ $desc->dateAkhir }}<br />
        </div>
        <div class="w-min my-6 whitespace-nowrap mx-auto">
          <a href="/login" class="py-2 px-32 rounded bg-[#02669A] text-white">Daftar Kursus</a>
        </div>
      </div>
      <div class="my-4 w-full">
        <div class="w-full my-4">
          <h2 class="mx-auto border-b-2 border-b-[#02669A] w-min whitespace-nowrap font-semibold md:text-2xl">
            Time of Course
          </h2>
        </div>
        <div class="w-full flex flex-wrap md:w-1/2 mx-auto">
          <div class="w-1/2 p-3 rounded">
            <div class="shadow-lg p-2">
              <img src="{{ asset('img/icons/book.png') }}" alt="" class="w-2/3 mx-auto">
              <p class="text-center font-semibold">Pelajaran Teori</p>
              <p class="text-center font-semibold text-lg">30 JAM</p>
            </div>
          </div>
          <div class="w-1/2 p-3 rounded">
            <div class="shadow-lg p-2">
              <img src="{{ asset('img/icons/book.png') }}" alt="" class="w-2/3 mx-auto">
              <p class="text-center font-semibold">Pelajaran Praktek</p>
              <p class="text-center font-semibold text-lg">68 JAM</p>
            </div>
          </div>

        </div>
      </div>
      <div class="my-4 w-full">
        <div class="w-full my-4">
          <h2 class="mx-auto border-b-2 border-b-[#02669A] w-min whitespace-nowrap font-semibold md:text-2xl">
            Terms and Conditions
          </h2>
        </div>
        <div class="w-full py-5 md:flex md:w-2/3 md:mx-auto">
          <div class="md:w-1/2">
            <h2 class="text-center text-lg font-semibold md:text-2xl">Persyaratan Peserta</h2>
            <img src="{{ asset('img/10492.jpg') }}" alt="" class="w-full md:w-96">
          </div>
          <hr class="border-black my-4">
          <ul class="list-disc list-inside md:w-1/2 md:px-2 md:text-lg md:border-l-[1px] border-black">
            <li>
              Peserta diklat merupakan Personel pilots, air traffic controllers & Aeronautical Communication
              Officer yang memiliki lisensi;
            </li>
            <li>
              Sehat Jasmani dan tidak buta warna (dinyatakan dengan surat keterangan dokter pemerintah);
            </li>
            <li>
              Direkomendasikan dengan surat dari pejabat yang berwenang di tempat bekerja
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
