<div class="container mx-auto">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    {{-- @if($updateMode)
    @include('livewire.paket.paket-update')
    @else
    @include('livewire.paket.paket-create')
    @endif --}}
    {{-- <div>
        <div class="py-2 px-10 right-0 md:w-5/12">
            <input wire:model.debounce.500ms="search" type="text"
                class="bg-gray-200 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
                placeholder="Search...">

            <div class="mt-0 top-0">
                <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24">
                    <path class="heroicon-ui"
                        d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" />
                </svg>
            </div>
        </div>
    </div> --}}
    {{-- <livewire:paket.paket-create /> --}}

    <div class="py-0">
        <h1 class="capitalize text-lg text-cool-gray-700 mb-5 font-bold text-center">DAFTAR PAKET WILAYAH 3
        </h1>
        <div class="flex justify-end pb-2">
            <a type="button" href="#"
                class="flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                Tambah Paket
            </a>
        </div>

        <table class="shadow-lg bg-white">
            <thead>
                <tr>
                    <th class="bg-gray-300 border border-black px-4 py-2">No</th>
                    <th class="bg-gray-300 border border-black px-4 py-2">Nama Paket</th>
                    <th class="bg-gray-300 border border-black px-4 py-2">Pagu</th>
                    <th class="bg-gray-300 border border-black px-4 py-2">Keuangan</th>
                    <th class="bg-gray-300 border border-black px-4 py-2">Progres Keuangan</th>
                    <th class="bg-gray-300 border border-black px-4 py-2">Progres Fisik</th>
                    <th class="bg-gray-300 border border-black px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datapaket as $no => $row)
                <tr>
                    <td class="border px-4 py-2">
                        {{ ($datapaket->currentPage()-1) * $datapaket->perPage() + $loop->index + 1 }}</td>
                    <td class="border px-4 py-2">{{$row->nmpaket}}</td>
                    <td class="border px-4 py-2 text-right">{{number_format($row->pagurmp)}}</td>
                    <td class="border px-4 py-2 text-right">
                        {{$row->progres->keuangan == 0 ? 0 : number_format($row->progres->keuangan)}}
                    </td>
                    <td class="border px-4 py-2 text-right">
                        {{$row->pagurmp == 0 ? 0 : number_format((($row->progres->keuangan)/($row->pagurmp)*100),2)}}
                    </td>
                    <td class="border px-4 py-2 text-right">{{number_format(($row->progres->fisik),2)}}</td>
                    <td class="border px-4 py-2"><a type="button" href="#" class="flex justify-center h-6 px-4 py-0 text-sm font-medium text-white bg-indigo-600 border
                    border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700
                    focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Edit
                        </a>
                        <button
                            onclick="return confirm('Apakah anda yakin akan hapus?') || event.stopImmediatePropagation()"
                            type="button" wire:click="delete({{ $row->id }})"
                            class="flex justify-center h-6 px-2 py-0 text-sm font-medium text-white bg-red-500 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Delete
                        </button></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <td></td>
                <td class="border px-4 py-2 text-right">Jumlah</td>
                <td class="border px-4 py-2 text-right">{{number_format($datapaket->sum('pagurmp'))}}
                </td>
                <td class="border px-4 py-2 text-right">{{number_format($datapaket->sum('keuangan'))}}
                </td>
                <td class="border px-4 py-2 text-right">
                    {{number_format((($datapaket->sum('keuangan'))/($datapaket->sum('pagurmp'))*100),2)}}
                </td>
                <td class="border px-4 py-2 text-right">
                    {{number_format(($datapaket->avg('fisik')),2)}}
                </td>
            </tfoot>
        </table>
        {{ $datapaket->links() }}
    </div>
</div>