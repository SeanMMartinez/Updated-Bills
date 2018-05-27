@extends ('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Role') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{ action('RoleController@store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Role Name</label>
                                <input type="text" name="name" value="{{ old('name') }}"  class="form-control"></input>
                            </div>

                            <div class="form-group">
                                <label for="Role_Description">Role Description</label>
                                <input type="text" name="Role_Description" value="{{ old('Role_Description') }}"  class="form-control"></input>
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