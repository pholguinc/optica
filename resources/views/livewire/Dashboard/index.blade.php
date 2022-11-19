<div>
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
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-chart-pie mr-1"></i>
                        Stock de Productos
                    </h3>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-chart-pie mr-1"></i>
                        Productos más vendidos
                    </h3>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="myChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-chart-pie mr-1"></i>
                        Compras Mensuales
                    </h3>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="myChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-chart-pie mr-1"></i>
                        Ventas Mensuales
                    </h3>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="myChart4" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('myChart');
    var myChart2 = document.getElementById('myChart2');
    var myChart3 = document.getElementById('myChart3');
    var myChart4 = document.getElementById('myChart4');

    var myChart = new Chart(ctx, {
        type: 'pie'
        , data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange']
            , datasets: [{
                label: '# of Votes'
                , data: [12, 19, 3, 5, 2, 3]
                , borderWidth: 0
            }]
        }
        , options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }

    });

    var myChart2 = new Chart(myChart2, {
        type: 'line'
        , data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange']
            , datasets: [{
                label: '# of Votes'
                , data: [12, 19, 3, 5, 2, 3]
                , borderWidth: 1
            }]
        }
        , options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var myChart3 = new Chart(myChart3, {
        type: 'line'
        , data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange']
            , datasets: [{
                label: '# of Votes'
                , data: [12, 19, 3, 5, 2, 3]
                , borderWidth: 1
            }]
        }
        , options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var myChart4 = new Chart(myChart4, {
        type: 'line'
        , data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange']
            , datasets: [{
                label: '# of Votes'
                , data: [12, 19, 3, 5, 2, 3]
                , borderWidth: 1
            }]
        }
        , options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

</script>



@endsection
