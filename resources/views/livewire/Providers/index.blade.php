<div>
    <div class="card card-outline card-primary-400">
        <div class="card-header p-0">
            <div>
                <ol class="breadcrumb mb-0 bg-white">
                    <li class="breadcrumb-item">
                        <i class="fas fa-home mr-2 text-secondary"></i>
                        <a href="/admin">
                            <span class="font-weight-bold text-blue-400">Inicio</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Proveedores</li>
                </ol>
            </div>
            <div class="border-top">
                <div class="container-fluid">
                    <div class="row mb-3 mt-3 p-2">
                        <div class="col-sm-6">

                            <div class="input-group">
                                <input class="form-control py-2 border-right-0 border" type="search" placeholder="Escriba para filtrar" wire:model="search">
                                <span class="input-group-append">
                                    <div class="input-group-text bg-transparent"><i class="fa fa-search"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-right" id="button-add">
                                <button class="btn bg-primary-400 btn-md rounded" label="Open Modal" data-toggle="modal" data-target="#modalPurple">
                                    <i class="fas fa-user-plus mr-2"></i>
                                    <span>Agregar Nuevo</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            @include('livewire.Providers.view')
        </div>
        <div class="mr-3">
            <div class="float-right">
                {{ $providers->links() }}
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

    @media(max-width: 800px) {
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

    @media (min-width: 576px) {
        .modal-dialog {
            margin: 1.75rem 7rem 1.75rem auto;
        }
    }


</style>
@endsection

@section('footer')
@include('components.footer')
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>
@endsection
