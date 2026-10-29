@extends('layouts.app')
@section('content')
<div class="panel"><h1>User Accounts</h1><p>Temporary data from a static PHP array.</p><table><thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Status</th></tr></thead><tbody>@foreach ($users as $user)<tr><td>{{ $user['id'] }}</td><td>{{ $user['name'] }}</td><td>{{ $user['email'] }}</td><td>{{ $user['role'] }}</td><td class="badge">{{ $user['status'] }}</td></tr>@endforeach</tbody></table></div>
@endsection
