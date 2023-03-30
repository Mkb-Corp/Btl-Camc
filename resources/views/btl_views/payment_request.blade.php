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
                                Demande de Paiement</h4>
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
                                                                    Dossier
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
                                                                    <td class="table-td">{{ $file->file_reference }}</td>
                                                                    <td class="table-td">{{ $file->client }}</td>
                                                                    <td class="table-td">{{ $file->ref_camion }}</td>
                                                                    <td class="table-td">{{ $file->amount }}</td>
                                                                    <td class="table-td">{{ $file->currency }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn inline-flex justify-center btn-success ">
                                            <span class="flex items-center">
                                                <span>Télécharger le fichier    </span>
                                                <iconify-icon class="text-xl ltr:ml-2 rtl:mr-2"
                                                    icon="heroicons-outline:download"></iconify-icon>
                                            </span>
                                        </a>
                                        <a href="#"
                                            class="btn inline-flex justify-center bg-slate-900 text-slate-50 btn-primary"">Valider la demande</a>
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
