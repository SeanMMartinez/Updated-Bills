@extends ('layouts.sidenav')

@section('title', 'Create New Announcement')

@section('content')
    <main>
        <div class="justify-content-between">
            <div class="container-fluid">
                <div class="row my-xl-5 ml-xl-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body mx-4 animated fadeIn">
                                <h2 class="text-center font-weight-bold pt-4 pb-2"><strong>Create New Announcement</strong></h2>
                                <hr>
                                <form class="form-elegant md-form animated fadeIn" action="{{ action('AnnouncementController@store') }}" method="post">
                                    @csrf
                                    <div class="form-group md-form pb-3">
                                        <i class="fa fa-pencil-alt prefix"></i>
                                        <label for="title" data-error="wrong"
                                               data-success="right">Title</label>
                                        <input id="title" type="text"
                                               required="required"
                                               class="form-control validate" name="Announcement_Title" value="{{ old('Announcement_Title') }}">
                                    </div>
                                    <p>Body</p>
                                    <div class="md-form">
                                        <textarea class="form-control" id="announce-message" name="Announcement_Text" value="{{ old('Announcement_Text') }}"></textarea>
                                    </div>
                                    <button class="btn btn-info float-right z-depth-2">Submit</button>
                                    <a class="btn btn-grey float-left z-depth-2" href="{{ route('announcements.index') }}"><i class="fa fa-arrow-left"></i> Go back</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection