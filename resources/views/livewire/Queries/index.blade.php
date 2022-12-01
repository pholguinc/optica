<div>
    <div class="card card-outline card-primary-400">
        <div class="p-0 card-header">
            <div>
                <ol class="mb-0 bg-white breadcrumb">
                    <li class="breadcrumb-item">
                        <i class="mr-2 fas fa-home text-secondary"></i>
                        <a href="/admin">
                            <span class="text-blue-400 font-weight-bold">Inicio</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item ">Pacientes</li>
                    <li class="breadcrumb-item active">Consultas</li>
                </ol>
            </div>
            <div class="border-top">
                <div class="container-fluid">
                    <div class="p-2 mt-3 mb-3 row">
                        <div class="col-sm-6">

                            <div class="input-group">
                                <input class="py-2 border form-control border-right-0" type="search" placeholder="Escriba para filtrar" wire:model="search">
                                <span class="input-group-append">
                                    <div class="bg-transparent input-group-text"><i class="fa fa-search"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-right" id="button-add">
                                <button class="rounded btn bg-primary-400 btn-md" label="Open Modal" data-toggle="modal" data-target="#modalQuery">
                                    <i class="mr-2 fas fa-user-plus"></i>
                                    <span>Agregar Nuevo</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-0 card-body">
            @include('livewire.Queries.view')
            @include('livewire.Queries.create')
            @include('livewire.Queries.updated')

        </div>
        <div class="mr-3">
            <div class="float-right">
                {{ $queries->links() }}
            </div>
        </div>
    </div>

</div>



@section('css')
@vite('resources/css/colors.css')
@vite('resources/css/components.css')

<style>
    @media (max-width: 576px) {
        #button-add {
            display: grid;
            margin-top: 10px;
        }
    }

    .tooltip {
        top: 0;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table td,
    .table th {
        border: 1px solid #ddd;
        text-align: center;
        font-size: 16px;
    }


    .table tbody tr:nth-child(even) {
        background-color: #f5f5f5;
    }

    /*responsive*/

    @media(max-width: 700px) {
        .table thead {
            display: none;
        }

        .table,
        .table tbody,
        .table tr,
        .table td {
            display: block;
            width: 100%;
        }

        .table tr {
            text-align: center;
            margin-bottom: 15px;
        }

        .table td {
            text-align: center;
            position: relative;
        }

        .table td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 15px;
            font-size: 15px;
            font-weight: bold;
            text-align: left;
        }
    }

</style>
@endsection

@section('footer')
@include('components.footer')
@endsection


