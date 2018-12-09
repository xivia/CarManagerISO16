@extends ('layouts.app')
@section ('content')
<div class="card LRCard">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    <table class="table">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Permissions</th>
            <th scope="col">Update</th>
            <th scope="col">Execute</th>
            <th scope="col">Delete User</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->permission->name}}</td>
            <form method="post" action="/admin/update">
                <input name="user" type="hidden" value="{{$user->id}}">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                <td>
                    <select name=permission class="form-control">
                        @foreach ($permissions = App\permission::all() as $permission)
                        <option value="{{$permission->id}}">{{$permission->name}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <button type="submit" class="btn btn-danger col-lg-8">Update Permissions</button>
                </td>
            </form>
            <td>
                <form method="post" action="/admin/update">
                    <input name="user" type="hidden" value="{{$user->id}}">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger col-lg-12">Delete User</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
