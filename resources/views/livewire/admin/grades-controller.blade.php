<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h2>
                                Listado de grados.
                            </h2>
                        </div>
                        <div class="col-md-auto">
                            <button class="btn btn-sm btn-secondary" type="button">Añadir registro</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 100%;">Nombre</th>
                                <th>Clases</th>
                                <th>Alumnos matriculados</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($grades as $g)
                                <tr>
                                    <td>{{ $g->nombre_largo }}</td>
                                    <td>{{ $g->subjects_count }}</td>
                                    <td>{{ $g->students_count }}</td>
                                    <td></td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="4"><i>No hay datos que mostrar</i></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- The Master doesn't talk, he acts. --}}
</div>
@push('scripts')

@endpush
