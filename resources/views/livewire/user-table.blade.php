<div>

    @include('backend/admins/users/header')

    <table class="table mb-0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>
                        @foreach ($user->getRoleNames() as $role)
                            {{ Str::ucfirst(str_replace('-', ' ', $role)) }}
                        @endforeach
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
