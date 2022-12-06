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
                    <li class="breadcrumb-item active">Proveedores</li>
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
                                <button class="rounded btn bg-primary-400 btn-md" label="Open Modal" data-toggle="modal" data-target="#modalProvider">
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
            @include('livewire.Providers.view')
            @include('livewire.Providers.create')
            @include('livewire.Providers.updated')
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



</style>
@endsection

@section('footer')
@include('components.footer')
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        Livewire.on('alert', function($message) {
            Swal.fire(
                '¡Correcto!'
                , $message
                , 'success'
            , )
        });

        Livewire.on('render', () => {
            $('#modalProvider').modal('hide');
            $('#EditProvider').modal('hide');
        });

        Livewire.on('deleteProvider', ProviderId => {
            Swal.fire({
                title: '¿Está seguro de querer eliminarlo?',
                text: "¡Al eliminarlo no hay opción a recuperarlo!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, quiero eliminarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('delete', ProviderId);
                    Swal.fire(
                        'Eliminado!'
                        , '¡¡Tu registro fue eliminado con éxito!!'
                        , 'success'
                    )
                }
            })
        })

    });

</script>
@endsection

