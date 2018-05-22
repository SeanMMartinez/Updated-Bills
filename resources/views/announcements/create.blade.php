@extends ('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Announcement') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{ action('AnnouncementController@store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="Announcement_Title">Announcement Title</label>
                                <input type="text" name="Announcement_Title" value="{{ old('Announcement_Title') }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="Announcement_Text">Announcement Body</label>
                                <textarea type="text" name="Announcement_Text" value="{{ old('Announcement_Text') }}"  class="form-control"></textarea>
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
@endsection