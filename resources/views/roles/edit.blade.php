@extends ('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit {{ $role->name }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('roles.update', $role->Role_Id) }}">
                            @csrf

                            <div class="form-group">
                                <label for="Announcement_Title">Role Name</label>
                                <input type="text" name="name" value="{{ $role->name }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="Announcement_Text">Role Description</label>
                                <input type="text" name="Role_Description" value="{{ $role->Role_Description }}"  class="form-control">
                            </div>

                            <h2 class="title">Permissions:</h2>
                            @foreach ($permissions as $permission)
                                <div class="field">
                                    <input type="checkbox" name="permissions[]" value="{{$permission->Permission_Id}}">{{$permission->Permission_Name}}<br>
                                </div>
                            @endforeach
                            <button class="button is-primary">Save Changes to Role</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection