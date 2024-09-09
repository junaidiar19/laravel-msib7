<h1>List Users</h1>

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
<table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Religion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->gender_description }}</td>
                <td>{{ str()->upper($user->religion) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
