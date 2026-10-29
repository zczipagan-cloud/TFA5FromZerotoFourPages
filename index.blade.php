@extends('layouts.app')
@section('content')
<div class="panel"><h1>Customer Accounts</h1><p>Temporary data from a static PHP array.</p><table><thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Status</th></tr></thead><tbody>@foreach ($customers as $customer)<tr><td>{{ $customer['id'] }}</td><td>{{ $customer['name'] }}</td><td>{{ $customer['email'] }}</td><td>{{ $customer['phone'] }}</td><td class="badge">{{ $customer['status'] }}</td></tr>@endforeach</tbody></table></div>
@endsection
