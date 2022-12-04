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
                    <li class="breadcrumb-item active">Productos</li>
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
                                <button class="rounded btn bg-primary-400 btn-md" label="Open Modal" data-toggle="modal" data-target="#modalProduct">
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
            <!--modales-->
            @include('livewire.Products.view')
            @include('livewire.Products.create')
        </div>

        <div class="mt-3 mr-3">
            <div class="float-right">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>



@section('css')
@vite('resources/css/colors.css')
@vite('resources/css/components.css')

<style>
    @media (max-width: 575.98px) {
        #button-add {
            display: grid;
            margin-top: 10px;
        }
    }

    .tooltip {
        top: 0;
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
