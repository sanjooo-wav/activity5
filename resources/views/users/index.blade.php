@extends('layouts.main')
@section('content')
<h1>User Accounts</h1>
<table><thead><tr><th>Username</th><th>Full name</th><th>Role</th></tr></thead><tbody>
@foreach ($users as $user)
<tr><td>{{ $user['username'] }}</td><td>{{ $user['full_name'] }}</td><td>{{ $user['role'] }}</td></tr>
@endforeach
</tbody></table>
@endsection
