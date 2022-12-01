<x-adminlte-modal wire:ignore.self id="EditQuery" title="{{ $componentName }} | {{ $pageTitle }}" theme="blue-400" icon="fas fa-bolt" size='xl'>
    <div class="text-blue-800 alert alert-info alert-styled-left content-group">
        <span class="text-semibold">Estimado usuario</span>
        Los campos remarcados con <span class="text-danger"> * </span> son necesarios.
    </div>
    <form wire:ignore>
        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Optómetro(a)<span class="text-danger">*</span></label>
                    {{-- <input type="text" wire:model="user_id" class="text-center form-control text-secomdary"> --}}
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Paciente <span class="text-danger">*</span></label>
                    {{-- <input type="text" wire:model="patient_id" class="text-center form-control text-secomdary"> --}}
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
                        <input type="date" class="text-center form-control">
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

        <button wire:click="updateQuery()" wire:loading.attr="disabled" class="btn btn-md btn-outline-blue">
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


