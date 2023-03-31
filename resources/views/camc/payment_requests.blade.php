@extends('layouts.master')
@section('content')
    <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
        <div class="page-content">
            <div class="transition-all duration-150 container-fluid" id="page_layout">
                <div id="content_layout">
                    <div>
                        <div class="flex justify-between flex-wrap items-center mb-6">
                            <h4
                                class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">
                                Demandes de Paiement</h4>
                        </div>
                        <div class="grid grid-cols-12 gap-5">
                            <div class="lg:col-span-12 col-span-12">
                                <div class="card">
                                    <div class="card-body p-6">
                                        <div class="overflow-x-auto -mx-6">
                                            <div class="inline-block min-w-full align-middle">
                                                <div class="overflow-hidden ">
                                                    <table
                                                        class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                                        <thead class="  bg-slate-200 dark:bg-slate-700">
                                                            <tr>
                                                                <th scope="col" class=" table-th ">

                                                                </th>
                                                                <th scope="col" class=" table-th ">
                                                                    Ref. Dossier
                                                                </th>
                                                                <th scope="col" class=" table-th ">
                                                                    Client
                                                                </th>
                                                                <th scope="col" class=" table-th ">
                                                                    Ref. Camion
                                                                </th>
                                                                <th scope="col" class=" table-th ">
                                                                    Montant
                                                                </th>
                                                                <th scope="col" class=" table-th ">
                                                                    Devise
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody
                                                            class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                                            @foreach ($files as $file)
                                                                <tr>
                                                                    <td class="table-td">
                                                                        <div class="checkbox-area primary-checkbox mr-2 sm:mr-4 mt-2">
                                                                            <label class="inline-flex items-center cursor-pointer">
                                                                              <input type="checkbox" class="hidden" name="checkbox" value="{{ $file->id }}" >
                                                                              <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                                                        <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                                                            </label>
                                                                          </div>
                                                                    </td>
                                                                    <td class="table-td">{{ $file->file_reference }}</td>
                                                                    <td class="table-td">{{ $file->client }}</td>
                                                                    <td class="table-td">{{ $file->ref_camion }}</td>
                                                                    <td class="table-td">{{ $file->amount }}</td>
                                                                    <td class="table-td">{{ $file->currency }}</td>
                                                                    {{-- <td class="table-td">
                                                                        @if ($request->state == 'SUBMITTED')
                                                                            <div
                                                                                class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">
                                                                                Soumis
                                                                            </div>
                                                                        @else
                                                                            <div
                                                                                class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                                                                        bg-danger-500">
                                                                                Validé
                                                                            </div>
                                                                        @endif
                                                                    </td> --}}
                                                                    {{-- <td class="table-td ">
                                                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                                                            <button class="action-btn" type="button">
                                                                                <iconify-icon icon="heroicons:eye">
                                                                                </iconify-icon>
                                                                            </button>
                                                                        </div>
                                                                    </td> --}}
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-success inline-flex justify-center bg-slate-900 text-slate-50 dark:bg-slate-900 dark:text-slate-300">Valider</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
