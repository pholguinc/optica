<x-adminlte-modal wire:ignore.self id="modalQuery" title="{{ $componentName }} | {{ $pageTitle }}" theme="blue-400" icon="fas fa-bolt" size='xl'>
    <div class="text-blue-800 alert alert-info alert-styled-left content-group">
        <span class="text-semibold">Estimado usuario</span>
        Los campos remarcados con <span class="text-danger"> * </span> son necesarios.
    </div>
    <form wire:ignore>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Paciente <span class="text-danger">*</span></label>
                    <select wire:model.lazy="patientId" class="custom-select rounded-0" id="exampleSelectRounded0">
                        <option value="Elegir" disabled>Seleccionar Paciente</option>
                        @foreach($patients as $patient)
                        <option value="{{ $patient->id }}">{{$patient->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Optómetro(a)<span class="text-danger">*</span></label>
                    <select wire:model.lazy="userId" class="custom-select rounded-0" id="exampleSelectRounded0">
                        <option value="Elegir" disabled>Seleccionar Optómetro(a)</option>
                            @foreach($users as $user)
                            <option value="{{ $user->id }}">{{$user->name }}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Fecha Actual</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </div>
                        <input type="text" class="text-center form-control text-secondary" value="{{ date('d-m-Y') }}" disabled>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Control <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                        </div>
                        <input type="date" wire:model.lazy="control" class="text-center form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="table-responsive">
                    <h5 class="mt-2 mb-3 text-center font-weight-bold">Visión de Lejos</h5>
                    <table id="detalles" style="width: 100%;" class="table text-center table-sm table-bordered table-hover">
                        <thead class="bg-blue-400">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ESFERA</th>
                                <th scope="col">CILINDRO</th>
                                <th scope="col">EJE</th>
                                <th scope="col">DIP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="10px" class="bg-blue-400">
                                    <p class="mt-3 mr-3">OD</p>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center input-group">
                                        <input type="text" wire:model="sphereRf" class="text-center form-control" style="height:30px;">
                                    </div>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center input-group">
                                        <input type="text" wire:model="cylinderRf" class="text-center form-control" style="height:30px;">
                                    </div>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center input-group">
                                        <input type="text" wire:model="axisRf" class="text-center form-control" style="height:30px;">
                                    </div>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center">
                                        <input type="text" wire:model="dipRf" class="ml-2 text-center form-control" style="height:30px;">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="bg-blue-400">
                                    <p class="mt-3 mr-3">OI</p>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center input-group">
                                        <input type="text" wire:model="sphereLf" class="text-center form-control" style="height:30px;">
                                    </div>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center input-group">
                                        <input type="text" wire:model="cylinderLf" class="text-center form-control" style="height:30px;">
                                    </div>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center input-group">
                                        <input type="text" wire:model="axisLf" class="text-center form-control" style="height:30px;">
                                    </div>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center">
                                        <input type="text" wire:model="dipLf" class="ml-2 text-center form-control" style="height:30px;">
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="table-responsive">
                    <h5 class="mt-2 mb-3 text-center font-weight-bold">Visión de Cerca</h5>
                    <table id="detalles" style="width: 100%;" class="table text-center table-sm table-bordered table-hover">
                        <thead class="bg-blue-400">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ESFERA</th>
                                <th scope="col">CILINDRO</th>
                                <th scope="col">EJE</th>
                                <th scope="col">DIP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="10px" class="bg-blue-400">
                                    <p class="mt-3 mr-3">OD</p>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center input-group">
                                        <input type="text" wire:model="sphereRn" class="text-center form-control" style="height:30px;">
                                    </div>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center input-group">
                                        <input type="text" wire:model="cylinderRn" class="text-center form-control" style="height:30px;">
                                    </div>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center input-group">
                                        <input type="text" wire:model="axisRn" class="text-center form-control" style="height:30px;">
                                    </div>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center">
                                        <input type="text" wire:model="dipRn" class="ml-2 text-center form-control" style="height:30px;">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="bg-blue-400">
                                    <p class="mt-3 mr-3">OI</p>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center input-group">
                                        <input type="text" wire:model="sphereLn" class="text-center form-control" style="height:30px;">
                                    </div>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center input-group">
                                        <input type="text" wire:model="cylinderLn" class="text-center form-control" style="height:30px;">
                                    </div>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center input-group">
                                        <input type="text" wire:model="axisLn" class="text-center form-control" style="height:30px;">
                                    </div>
                                </td>
                                <td width="130px">
                                    <div class="mt-3 text-center">
                                        <input type="text" wire:model="dipLn" class="ml-2 text-center form-control" style="height:30px;">
                                    </div>
                                </td>

                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Diagnóstico <span class="text-danger">*</span></label>
                    <textarea wire:model.defer="diagnosis" class="form-control" rows="4"></textarea>
                </div>
            </div>
        </div>

    </form>
    <x-slot name="footerSlot">

        <button wire:click="CreateQuery()" wire:loading.attr="disabled" class="btn btn-md btn-outline-blue">
            <span>
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
@section('css')
@vite('resources/css/colors.css')
@vite('resources/css/components.css')
<style>
</style>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.select-form').select2({
        placeholder: "Seleccione una opción"
        , width: 'resolve'
        , dropdownParent: "#modalQuery",

        "language": {
            "noResults": function() {
                return "No hay resultados con su búsqueda";
            }
        }
        , escapeMarkup: function(markup) {
            return markup;
        }
    }).prepend('<option selected=""></option>');

    $('#select2-form').on('change', function(e) {
        @this.set('patientSelectedId', e.target.value);
    });

    $('#select2-edit').select2({
        placeholder: "Seleccione una opción"
        , width: 'resolve'
        , dropdownParent: "#EditQuery",

        "language": {
            "noResults": function() {
                return "No hay resultados con su búsqueda";
            }
        }
        , escapeMarkup: function(markup) {
            return markup;
        }
    }).prepend('<option selected=""></option>');


    $('select[name]')


    $('.select-form').on('change', function() {
        var uId = $('.select-form').select2('val')
        var uName = $('.select-form option:selected').text()
        var patId = $('.select-form').select2('val')
        var patName = $('.select-form option:selected').text()
        @this.set('userSelectedId', uId)
        @this.set('userSelectedName', uName)
        @this.set('patientSelectedId', patId)
        @this.set('patientSelectedName', patName)
    });

</script>
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
            $('#modalQuery').modal('hide');
            $('#EditPatient').modal('hide');
        });

        Livewire.on('deleteQuery', QueryId => {
            Swal.fire({
                title: '¿Está seguro de querer eliminarlo?'
                , text: "¡Al eliminarlo no hay opción a recuperarlo!"
                , icon: 'warning'
                , showCancelButton: true
                , confirmButtonColor: '#3085d6'
                , cancelButtonColor: '#d33'
                , confirmButtonText: 'Sí, quiero eliminarlo!'
                , cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('delete', QueryId);
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
