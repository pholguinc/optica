<div class="row">
    <div class="col-sm-6 col-md-3">
        <div class="panel panel-body bg-primary-300 text-white shadow-lg p-3 mb-5 rounded border">
            <div class="media no-margin">
                <div class="media-body">
                    <h3 class="no-margin">$ 0.00</h3>
                    <span class="info-box-text">CAJA</span>
                </div>

                <div class="media-right media-middle">
                    <i class="fas fa-money-bill icon-3x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="panel panel-body bg-danger-300 text-white shadow-lg p-3 mb-5 rounded border">
            <div class="media no-margin">
                <div class="media-body">
                    <h3 class="no-margin">$ 0.00</h3>
                    <span class="info-box-text">COMPRAS</span>
                </div>

                <div class="media-right media-middle">
                    <i class="fas fa-shopping-bag icon-3x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="panel panel-body bg-success-300 text-white shadow-lg p-3 mb-5 rounded border">
            <div class="media no-margin">
                <div class="media-body">
                    <h3 class="no-margin">$ 0.00</h3>
                    <span class="info-box-text">VENTAS</span>
                </div>

                <div class="media-right media-middle">
                    <i class="fas fa-money-bill-wave icon-3x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="panel panel-body bg-teal-400 text-white shadow-lg p-3 mb-5 rounded border">
            <div class="media no-margin">
                <div class="media-body">
                    @php
                        use App\Models\Provider;
                        $cant_providers = Provider::count();
                    @endphp
                    <h3 class="no-margin">{{ $cant_providers }}</h3>
                    <span class="info-box-text">PROVEEDORES</span>
                </div>

                <div class="media-right media-middle">
                    <i class="fas  fa-shipping-fast icon-3x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="panel panel-body bg-green-400 text-white shadow-lg p-3 mb-5 rounded border">
            <div class="media no-margin">
                <div class="media-body">
                    @php
                        use App\Models\Category;
                        $cant_categories = Category::count();
                    @endphp
                    <h3 class="no-margin">{{ $cant_categories }}</h3>
                    <span class="info-box-text">Categorías</span>
                </div>

                <div class="media-right media-middle">
                    <i class="fas fa-tags icon-3x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="panel panel-body bg-slate-400 text-white shadow-lg p-3 mb-5 rounded border">
            <div class="media no-margin">
                <div class="media-body">
                    @php
                        use App\Models\Product;
                        $cant_products = Product::count();
                    @endphp
                    <h3 class="no-margin">{{ $cant_products }}</h3>
                    <span class="info-box-text">Prod. Ingresados</span>
                </div>

                <div class="media-right media-middle">
                    <i class="fas fa-glasses icon-3x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="panel panel-body bg-pink-300 text-white shadow-lg p-3 mb-5 rounded border">
            <div class="media no-margin">
                <div class="media-body">
                    @php
                        use App\Models\User;
                        $cant_users = User::count();
                    @endphp
                    <h3 class="no-margin">{{ $cant_users }}</h3>
                    <span class="info-box-text">Clientes</span>
                </div>

                <div class="media-right media-middle">
                    <i class="fas fa-users icon-3x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="panel panel-body bg-orange-300 text-white shadow-lg p-3 mb-5 rounded border">
            <div class="media no-margin">
                <div class="media-body">
                    <h3 class="no-margin">$ 0.00</h3>
                    <span class="info-box-text">Empleados</span>
                </div>

                <div class="media-right media-middle">
                    <i class="fas fa-user-tie icon-3x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>



</div>
@section('css')
@vite('resources/css/colors.css')
@vite('resources/css/components.css')
<style>
    .icon-3x {
    font-size: 48px;
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
