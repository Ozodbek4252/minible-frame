@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center pb-3">
                    <h4 class="card-title">{{ __('body.Logo') }}</h4>
                </div>

                <div class="table-responsive mb-3">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>{{ __('body.Main logo') }}</th>
                                <th>{{ __('body.Secondary logo') }}</th>
                                <th>{{ __('body.Small logo') }}</th>
                                <th>{{ __('body.Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="{{ asset('/' . $logo->main_logo) }}" style="width: 200px; height: auto;"
                                        alt="main logo">
                                </td>
                                <td>
                                    <img src="{{ asset('/' . $logo->secondary_logo) }}" style="width: 120px; height: auto;"
                                        alt="secondary logo">
                                </td>
                                <td>
                                    <img src="{{ asset('/' . $logo->small_logo) }}" style="width: 120px; height: auto;"
                                        alt="small logo">
                                </td>
                                <td style="width: 250px;">
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".edit-logo-modal-{{ $logo->id }}"
                                        class="btn btn-warning waves-effect waves-light my-2">
                                        <i class="fas fa-pen"></i>
                                        {{ __('body.Edit') }}
                                    </button>
                                </td>
                            </tr>

                            {{--  Edit Modal Beginning  --}}
                            <div class="modal fade edit-logo-modal-{{ $logo->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="editLogoModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editLogoModalLabel">{{ __('body.Update Logo') }}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <form action="{{ Route('logos.update', $logo->id) }}" enctype="multipart/form-data"
                                            method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3 d-flex flex-column-reverse">
                                                            <img src="{{ asset('/' . $logo->main_logo) }}"
                                                                style="width: 100px; height: auto;" alt="main logo">
                                                            <label class="form-label" for="logo-icon">
                                                                {{ __('body.Main Logo Preview') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 d-flex flex-column-reverse">
                                                            <img src="{{ asset('/' . $logo->secondary_logo) }}"
                                                                style="width: 100px; height: auto;" alt="main logo">
                                                            <label class="form-label" for="logo-icon">
                                                                {{ __('body.Secondary Logo Preview') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 d-flex flex-column-reverse">
                                                            <img src="{{ asset('/' . $logo->small_logo) }}"
                                                                style="width: 100px; height: auto;" alt="main logo">
                                                            <label class="form-label" for="logo-icon">
                                                                {{ __('body.Small Logo Preview') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="main-logo">
                                                                {{ __('body.Main Logo') }}
                                                            </label>
                                                            <input name="main_logo" type="file" class="form-control"
                                                                id="main-logo">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="secondary-logo">
                                                                {{ __('body.Secondary Logo') }}
                                                            </label>
                                                            <input name="secondary_logo" type="file" class="form-control"
                                                                id="secondary-logo">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="small-logo">
                                                                {{ __('body.Small logo') }}
                                                            </label>
                                                            <input name="small_logo" type="file" class="form-control"
                                                                id="small-logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">{{ __('body.Close') }}</button>
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ __('body.Update') }}</button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{--  Edit Modal End  --}}

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
