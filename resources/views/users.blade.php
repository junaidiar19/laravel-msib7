<x-app-layout>
    <x-slot:breadcrumbs>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </nav>
    </x-slot:breadcrumbs>
    <h1 class="title-red">List Users</h1>

    <form>
        <select name="gender">
            <option value="">-Choose Gender-</option>
            @foreach (\App\Enums\GenderEnum::asSelectArray() as $key => $item)
                <option value="{{ $key }}">{{ $item }}</option>
            @endforeach
        </select>
        <select name="religion">
            <option value="">-Choose Religion-</option>
            @foreach (\App\Enums\ReligionEnum::asSelectArray() as $key => $item)
                <option value="{{ $key }}">{{ $item }}</option>
            @endforeach
        </select>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Religion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ increment($users, $loop) }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender_description }}</td>
                    <td>{{ hurufBesar($user->religion) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    {{ $users->links() }}

    @push('styles')
        <style>
            .title-red {
                color: red;
            }
        </style>
    @endpush
</x-app-layout>
