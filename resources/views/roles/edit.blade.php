@extends ('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit {{ $role->name }}</div>

                        <div class="card-body">

                            <form method="POST" action="{{ route('roles.update', $role->Role_Id) }}">
                                @csrf
                                {{ method_field('PUT') }}
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
                                        <input type="checkbox" name="permissions[]" id="{{$permission->Permission_Name}}" value="{{$permission->Permission_Id}}"
                                               @if ($role->permissions->contains($permission->Permission_Id)) checked='checked' @endif>
                                        <label class="form-check-label" for="{{$permission->Permission_Name}}">{{$permission->Permission_Name}}</label>
                                    </div>
                                @endforeach
                                <button class="button is-primary">Save Changes to Role</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection