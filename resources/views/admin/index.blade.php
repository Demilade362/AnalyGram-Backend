@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card border-0">
            <div class="card-body">
                <h3 class="card-title">
                    Users</h3>
                <p class="card-text text-sm">
                    Check All the users registered on your site
                </p>
                <a href="{{ route('user.index') }}" class="btn btn-success">View Users
                    <i class="bi bi-person"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card border-0">
            <div class="card-body">
                <h3 class="card-title placeholder-glow">Check Main Website</h3>
                <p class="card-text placeholder-glow">Check Main website to enusre smooth running</p>
                <a href="https://analygram-6d0a5.web.app/" class="btn btn-success">Check website
                    <i class="bi bi-eye"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card border-0">
            <div class="card-body">
                <h5 class="card-title">View Users</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col" align="end"></th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($users as $user)
                                <tr class="">
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td align="end">
                                        <div class="d-flex-justify-content-between">
                                            <a href="/admin/customers" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                                Suspend Account
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                       @endforeach
                    </tbody>
                </table>
                <a href="{{ route('user.index') }}" class="btn btn-success">View All Users
                    <i class="bi bi-eye"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection