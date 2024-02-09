@extends('admin.layouts.app')

@section('content')
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card border-0">
            <div class="card-body">
                <h5 class="card-title">All Users</h5>
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
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                        Suspend Account
                                        </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
