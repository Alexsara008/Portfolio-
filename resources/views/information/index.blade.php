@extends('layouts.app')

@section('template_title')
    Information
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Information') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('information.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
									<th >Id Inf</th>
									<th >Image Inf</th>
									<th >Name Inf</th>
									<th >Description Inf</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($information as $information)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $information->id_inf }}</td>
										<td >{{ $information->image_inf }}</td>
										<td >{{ $information->name_inf }}</td>
										<td >{{ $information->description_inf }}</td>

                                            <td>
                                                <form action="{{ route('information.destroy', $information->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('information.show', $information->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('information.edit', $information->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $information->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
