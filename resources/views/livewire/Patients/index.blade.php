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
                    <li class="breadcrumb-item active">Pacientes</li>
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
                            <div class="float-sm-right">
                                <button class="btn bg-primary-400 btn-md rounded" label="Open Modal" data-toggle="modal"
                                    data-target="#modalPurple">
                                    <i class="fas fa-user-plus mr-2"></i>
                                    <span>Registrar Paciente</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            @include('livewire.Patients.create')
            @include('livewire.Patients.view')
        </div>
        <div class="mt-4 mr-4">
            <div class="d-flex float-left ml-4">
                <button class="btn btn-md bg-success-400 text-white" wire:click="generateReport">
                    <i class="fas fa-file-excel"></i>
                    <span>Reportes Excel</span>
                </button>
                <a class="btn btn-md bg-danger-400 text-white ml-2" href="#">
                    <i class="fas fa-file-pdf"></i>
                    <span>Reportes PDF</span>
                </a>
                <button class="btn btn-md bg-grey-400 text-white ml-2">
                    <i class="fas fa-print"></i>
                    <span>Imprimir</span>
                </button>
            </div>
            <div class="float-right">

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
