<div class="table-responsive" id="no-more-tables">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th rowspan="1" colspan="1">#</th>
                <th rowspan="1" colspan="1">Nombres</th>
                <th rowspan="1" colspan="1">Dirección</th>
                <th rowspan="1" colspan="1">Representante</th>
                <th rowspan="1" colspan="1">Contacto</th>
                <th rowspan="1" colspan="1">Estado</th>
                <th rowspan="1" colspan="1">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($providers as $provider)
                <tr>
                    <td width="10px">
                        {{ $loop->iteration }}
                    </td>
                    <td width="200px">
                        {{ $provider->name }}
                    </td>
                    <td width="400px">
                        {{ $provider->address }}
                    </td>
                    <td width="200px">
                        {{ $provider->representative }}
                    </td>
                    <td width="300px">
                        <div class="col-12">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <a>
                                        <i class="fas fa-phone-alt text-secondary"></i>
                                        <br>
                                        <span>{{ $provider->phone }}</span>
                                    </a>

                                </div>
                                <div class="col-md-6">
                                    <a>
                                        <i class="fab fa-whatsapp text-secondary"></i>
                                        <span>{{ $provider->whatsapp }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td width="200px" class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td width="200px">
                        <div class="d-block">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

</div>
