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
                    <li class="breadcrumb-item">Usuarios</li>
                    <li class="breadcrumb-item active">Usuarios del Sistema</li>
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
                                <button class="rounded btn bg-primary-400 btn-md" label="Open Modal" data-toggle="modal" data-target="#modalPermission">
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
           @include('livewire.Permission.view')
           @include('livewire.Permission.create')
           @include('livewire.Permission.updated')
        </div>
    </div>
</div>



@section('css')
@vite('resources/css/colors.css')
@vite('resources/css/components.css')

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
            $('#modalRole').modal('hide');
            $('#EditRole').modal('hide');
        });

        Livewire.on('deletePermission', PermissionId => {
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
                    Livewire.emit('delete', PermissionId);
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


