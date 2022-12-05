<x-adminlte-modal wire:ignore.self id="EditUser" title="Registrar Nuevo Rol" theme="blue-400" icon="fas fa-bolt" size='lg'>
    <div class="text-blue-800 alert alert-info alert-styled-left content-group">
        <span class="text-semibold">Estimado usuario</span>
        Los campos remarcados con <span class="text-danger"> * </span> son necesarios.

    </div>
    <form autocomplete="off">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Nombres:<span class="text-danger">*</span></label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" wire:model.lazy="name" class="form-control" placeholder="Ingrese su nombre de usuario...">

                    </div>
                    @error('name')
                    <label class="ml-3 validation-error-label" style="margin-top: -5px">
                        {{ $message }}
                    </label>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Apellidos<span class="text-danger">*</span></label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-plus"></i></span>
                        </div>
                        <input type="text" wire:model.lazy="lastname" class="form-control" placeholder="Ingrese el apellido del usuario...">

                    </div>
                    @error('lastname')
                    <label class="ml-3 validation-error-label" style="margin-top: -5px">
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
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                        </div>
                        <input type="text" wire:model.lazy="dni" class="form-control" placeholder="Ingrese sel dni del usuario...">

                    </div>
                    @error('dni')
                    <label class="ml-3 validation-error-label" style="margin-top: -5px">
                        {{ $message }}
                    </label>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Teléfono<span class="text-danger">*</span></label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                        </div>
                        <input type="text" wire:model.lazy="phone" class="form-control" placeholder="Ingrese el teléfono del usuario...">

                    </div>
                    @error('phone')
                    <label class="ml-3 validation-error-label" style="margin-top: -5px">
                        {{ $message }}
                    </label>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Email<span class="text-danger">*</span></label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" wire:model.lazy="email" class="form-control" placeholder="Ingrese sel dni del usuario...">

                    </div>
                    @error('email')
                    <label class="ml-3 validation-error-label" style="margin-top: -5px">
                        {{ $message }}
                    </label>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Password<span class="text-danger">*</span></label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="password" wire:model.lazy="password" class="form-control" placeholder="Ingrese una contraseña para el usuario...">

                    </div>
                    @error('password')
                    <label class="ml-3 validation-error-label" style="margin-top: -5px">
                        {{ $message }}
                    </label>
                    @enderror
                </div>
            </div>
        </div>

    </form>
    <x-slot name="footerSlot">

        <button wire:click="CreateUser()" wire:loading.attr="disabled" class="btn btn-md btn-outline-blue">
            <div wire:loading>
                <span class="spinner-border spinner-border-sm"></span>
                Cargando...
            </div>
            <span wire:loading.remove>
                <i class="mr-1 fas fa-save"></i>
                Guardar
            </span>
        </button>
        <button class="btn btn-md btn-default" data-dismiss="modal" wire:click.prevent="resetUI()">
            <i class="mr-1 fas fa-window-close"></i>
            Cerrar
        </button>

    </x-slot>
</x-adminlte-modal>
