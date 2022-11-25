<x-adminlte-modal wire:ignore.self id="EditPatient" title="Registrar Nuevo Paciente" theme="blue-400" icon="fas fa-bolt" size='lg'>
    <div class="text-blue-800 alert alert-info alert-styled-left content-group">
        <span class="text-semibold">Estimado usuario</span>
        Los campos remarcados con <span class="text-danger"> * </span> son necesarios.
    </div>
    <form>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nombres <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                        </div>
                        <input type="text" wire:model.defer="name" class="form-control @error('name') is-invalid @enderror" placeholder="Ingrese su nombres..." >
                    </div>

                    @error('name')
                    <label class="ml-3 validation-error-label">
                        {{ $message }}
                    </label>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Apellidos <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" wire:model.defer="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="Ingrese sus apellidos...">
                    </div>
                    @error('lastname')
                    <label class="ml-3 validation-error-label">
                        {{ $message }}
                    </label>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Teléfono <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                        </div>
                        <input type="text" wire:model.defer="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Ingrese sus teléfono...">
                    </div>
                    @error('phone')
                    <label class="ml-3 validation-error-label">
                        {{ $message }}
                    </label>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Email <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" wire:model.defer="email" class="form-control @error('email') is-invalid @enderror" placeholder="Ingrese su e-mail...">
                    </div>
                    @error('email')
                    <label class="ml-3 validation-error-label">
                        {{ $message }}
                    </label>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>DNI<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                        </div>
                        <input type="text" wire:model.defer="dni" class="form-control @error('dni') is-invalid @enderror" placeholder="Ingrese su DNI...">
                    </div>
                    @error('dni')
                    <label class="ml-3 validation-error-label">
                        {{ $message }}
                    </label>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Fecha de Naciemiento <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                        </div>
                        <input type="date" wire:model.defer="date" class="form-control @error('date') is-invalid @enderror" placeholder="Ingrese sus nombres...">
                    </div>
                    @error('date')
                    <label class="ml-3 validation-error-label">
                        {{ $message }}
                    </label>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Dirección <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                        </div>
                        <input type="text" wire:model.defer="address" class="form-control @error('address') is-invalid @enderror" placeholder="Ingrese sus nombres...">
                    </div>
                    @error('address')
                    <label class="ml-3 validation-error-label">
                        {{ $message }}
                    </label>
                    @enderror
                </div>
            </div>
        </div>
    </form>
    <x-slot name="footerSlot">

        <button wire:click="UpdatePatient()" wire:loading.attr="disabled" class="btn btn-md btn-outline-blue">
            <div wire:loading>
                <span class="spinner-border spinner-border-sm"></span>
                Cargando...
            </div>
            <span wire:loading.remove>
                <i class="mr-1 fas fa-save"></i>
                Actualizar
            </span>
        </button>
        <button class="btn btn-md btn-default" data-dismiss="modal" wire:click.prevent="resetUI()">
            <i class="mr-1 fas fa-window-close"></i>
            Cerrar
        </button>

    </x-slot>
</x-adminlte-modal>


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


