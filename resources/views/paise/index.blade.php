@extends('layouts.app')

@section('template_title')
    Paises
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Paises') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('paises.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>

									<th >Nombre</th>
									<th >Caducidad del contrato</th>
									<th >Numero de clientes totales en el país</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paises as $paise)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $paise->nombrePais }}</td>
										<td >{{ $paise->caducidadContrato }}</td>
										<td >{{ $paise->nClientesTotales }}</td>

                                            <td>
                                                <form action="{{ route('paises.destroy', $paise->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('paises.show', $paise->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('paises.edit', $paise->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $paises->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
