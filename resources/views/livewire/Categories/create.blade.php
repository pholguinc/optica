<x-adminlte-modal wire:ignore.self id="modalCategory" title="Registrar Nueva Categoría" theme="blue-400" icon="fas fa-bolt" size='lg'>
    <div class="alert alert-info alert-styled-left text-blue-800 content-group">
        <span class="text-semibold">Estimado usuario</span>
        Los campos remarcados con <span class="text-danger"> * </span> son necesarios.
        <input type="hidden" id="txtID" name="txtID" class="form-control" value="">
        <input type="hidden" id="txtProceso" name="txtProceso" class="form-control" value="Registro">
    </div>
    <form>
        <div class="row">
            <div class="col-sm-12">

                <div class="form-group">
                    <label>Nombre <span class="text-danger">*</span></label>
                    <input type="text" wire:model.defer="name" id="" class="form-control" placeholder="Ingrese el nombre de la categoría">
                </div>
                <div class="form-group">
                    <label>Descripción <span class="text-danger">*</span></label>
                    <input type="text" wire:model.defer="description" class="form-control" placeholder="Ingrese descripción de la categoría">
                </div>
            </div>
        </div>

    </form>
    <x-slot name="footerSlot">

        <button wire:click="CreateCategory()" wire:loading.attr="disabled" class="btn btn-md btn-outline-blue">
            <div wire:loading>
                <span class="spinner-border spinner-border-sm"></span>
                Cargando...
            </div>
            <span wire:loading.remove>
                <i class="fas fa-save mr-1"></i>
                Guardar
            </span>
        </button>
        <button class="btn btn-md btn-default" data-dismiss="modal" wire:click.prevent="resetUI()">
            <i class="fas fa-window-close mr-1"></i>
            Cerrar
        </button>

    </x-slot>
</x-adminlte-modal>

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('[data-bs-toggle="tooltip"]').tooltip();
        Livewire.on('alert', function($message) {
            Swal.fire(
                '¡Correcto!'
                , $message
                , 'success'
            , )
        });

        Livewire.on('render', () => {
            $('#modalCategory').modal('hide');
            $('#EditCategory').modal('hide');
        });

        Livewire.on('deleteCategory', CategoryId => {
            Swal.fire({
                title: '¿Está seguro de querer eliminarlo?',
                text: "¡Al eliminarlo no hay opción a recuperarlo!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, quiero eliminarlo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('delete', CategoryId);
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
