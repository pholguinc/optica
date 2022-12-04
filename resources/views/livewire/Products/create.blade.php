<x-adminlte-modal wire:ignore.self id="modalProduct" title="Registrar Nuevo Producto" theme="blue-400" icon="fas fa-bolt" size='lg'>
    <div class="text-blue-800 alert alert-info alert-styled-left content-group">
        <span class="text-semibold">Estimado usuario</span>
        Los campos remarcados con <span class="text-danger"> * </span> son necesarios.
    </div>
    <form>
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="form-group">
                    <label>Nombre</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-box"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre del producto">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <label>Código</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Código del producto">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <label>Costo</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Costo del producto">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <label>Precio</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Precio del producto">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <label>Stock</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Stock del producto">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <label>Alertas</label>
                    <div class="mb-3 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Alertas">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <label>Categoría</label>
                    <select wire:model='categoryId' class="custom-select rounded-0">
                        <option value="Elegir" disabled>Elegir</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-sm-12 col-md-8">
                <div class="form-group custom-file">
                    <input type="file" class="custom-file-input" wire:model='image' accept="image/x-png, image/jpeg">
                    <label class="custom-file-label">Imagen {{$image}}</label>
                </div>
            </div>
        </div>

    </form>
    <x-slot name="footerSlot">
        <x-adminlte-button class="bg-primary-400" icon="fas fa-save mr-1" label="Registrar" />
        <x-adminlte-button theme="danger" icon="fas fa-window-close mr-1" label="Cerrar" data-dismiss="modal" />
    </x-slot>
</x-adminlte-modal>

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
