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
                            <div class="lg:col-span-8 col-span-12">
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
                                                            @foreach($files as $file)
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
                                        <a href="{{ route("payment_request") }}"
                                            class="btn inline-flex justify-center bg-slate-900 text-slate-50 dark:bg-slate-900 dark:text-slate-300"">Voir
                                            et Valider</a>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-4 col-span-12">
                                <div class="card">
                                    <div class="card-body flex flex-col p-6">
                                        <header
                                            class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                                            <div class="flex-1">
                                                <div class="card-title text-slate-900 dark:text-white">Ajouter un dossier
                                                </div>
                                            </div>
                                        </header>
                                        <div class="card-text h-full space-y-4">
                                            <form action="{{ route("file.create") }}" method="post">
                                                @csrf
                                                <div class="input-area">
                                                    <label for="name" class="form-label">Dossier</label>
                                                    <input required id="name" name="file_reference" type="text" class="form-control"
                                                        placeholder="Dossier">
                                                </div>
                                                <div class="input-area">
                                                    <label for="name" class="form-label">Client</label>
                                                    <input required id="name" name="client" type="text" class="form-control"
                                                        placeholder="Client">
                                                </div>
                                                <div class="input-area">
                                                    <label for="name" class="form-label">Ref Camion</label>
                                                    <input required id="name" name="ref_camion" type="text" class="form-control"
                                                        placeholder="Ref Camion">
                                                </div>
                                                <div class="input-area">
                                                    <label for="name" class="form-label">Montant</label>
                                                    <input required id="name" name="amount" type="number" class="form-control"
                                                        placeholder="Montant">
                                                </div>
                                                <div class="input-area">
                                                    <label for="select" class="form-label">Devise</label>
                                                    <select required id="select" name="currency" class="form-control">
                                                        <option value="USF" class="dark:bg-slate-700">USD</option>
                                                        <option value="FC" class="dark:bg-slate-700">FC</option>
                                                    </select>
                                                </div>
                                                <button type="submit"
                                                    class="btn block-btn inline-flex justify-center btn-primary">Ajouter</button>
                                            </form>
                                        </div>
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
