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
                    <li class="breadcrumb-item active">Categorías</li>
                </ol>
            </div>
            <div class="border-top">
                <div class="container-fluid">
                    <div class="row mb-3 mt-3 p-2">
                        <div class="col-sm-6">

                            <div class="input-group">
                                <input class="form-control py-2 border-right-0 border" type="search"
                                    placeholder="Escriba para filtrar" wire:model="search">
                                <span class="input-group-append">
                                    <div class="input-group-text bg-transparent"><i class="fa fa-search"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-right" id="button-add">
                                <button class="btn bg-primary-400 btn-md rounded" label="Open Modal" data-toggle="modal"
                                    data-target="#modalCategory">
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
            <!--modales-->
            @include('livewire.Categories.view')
            @include('livewire.Categories.create')
            @include('livewire.Categories.update')
        </div>
        <div class="mt-4 mr-4">
            <div class="float-right">
                {{ $categories->links() }}
            </div>

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
        $('[data-bs-toggle="tooltip"]').tooltip();
        Livewire.on('alert', function($message) {
            Swal.fire(
                '¡Correcto!'
                , $message
                , 'success'
            , )
        });

    });

</script>
@endsection
