@extends ('layouts.sidenav')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Add Room') }}</div>

                        <div class="card-body">

                            <form method="POST" action="{{ route('rooms.update', $room->TenantRoom_Id) }}">
                                {{method_field('PUT')}}
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Room') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('Room') ? ' is-invalid' : '' }}" name="Room" value="{{ $room->Room }}" required autofocus>

                                        @if ($errors->has('Room'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Room') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Floor') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('Floor') ? ' is-invalid' : '' }}" name="Floor" value="{{ $room->Floor }}" required autofocus>

                                        @if ($errors->has('Floor'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Floor') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Room Type') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('RoomType') ? ' is-invalid' : '' }}" name="RoomType" value="{{ $room->RoomType }}" required autofocus>

                                        @if ($errors->has('RoomType'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('RoomType') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Create') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection