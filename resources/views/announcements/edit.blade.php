@extends ('layouts.sidenav')

@section('title', 'Edit Announcement')

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit Announcement</div>

                        <div class="card-body">

                            <form method="POST" action="{{ route('announcements.update', $announcement->Announcement_Id) }}">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="Announcement_Title">Announcement Title</label>
                                    <input type="text" name="Announcement_Title" value="{{ $announcement->Announcement_Title }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="Announcement_Text">Announcement Body</label>
                                    <input type="text" name="Announcement_Text" value="{{ $announcement->Announcement_Text }}"  class="form-control"></input>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Edit') }}
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