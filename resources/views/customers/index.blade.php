@extends('layouts.main')
@section('content')
<h1>Customer Accounts</h1>
<table><thead><tr><th>Full name</th><th>Email</th><th>Phone</th></tr></thead><tbody>
@foreach ($customers as $customer)
<tr><td>{{ $customer['full_name'] }}</td><td><a href="mailto:{{ $customer['email'] }}">{{ $customer['email'] }}</a></td><td>{{ $customer['phone'] }}</td></tr>
@endforeach
</tbody></table>
@endsection
