<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Akun - Nyanyian Hujan</title>

    <link rel="stylesheet" href="{{ asset('css/admin-users.css') }}">

</head>

<body>

<div class="container">

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert-error">
            {{ $errors->first() }}
        </div>
    @endif

    <div class="header">

        <div>
            <h1>Kelola Akun</h1>
            <p>Daftar akun pengguna Nyanyian Hujan</p>
        </div>

        <div class="header-buttons">

            <a href="{{ route('admin.users.create') }}" class="btn btn-add">
                + Tambah Akun
            </a>

            <a href="{{ route('admin.dashboard') }}" class="btn btn-back">
                ← Kembali
            </a>

        </div>

    </div>

    <div class="card">

    <form
    action="{{ route('admin.users.index') }}"
    method="GET"
    class="search-form"
>

    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Cari nama atau email..."
    >

    <select name="role">

        <option
            value=""
            {{ request('role') === null || request('role') === '' ? 'selected' : '' }}
        >
            Semua Role
        </option>

        <option
            value="admin"
            {{ request('role') === 'admin' ? 'selected' : '' }}
        >
            Admin
        </option>

        <option
            value="karyawan"
            {{ request('role') === 'karyawan' ? 'selected' : '' }}
        >
            Karyawan
        </option>

    </select>

    <button type="submit">
        Cari
    </button>

    <a
        href="{{ route('admin.users.index') }}"
        class="reset-btn"
    >
        Reset
    </a>

</form>
    <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($users as $user)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $user->name }}
                        </td>

                        <td>
                            {{ $user->email }}
                        </td>

                        <td>
                            <span class="role {{ $user->role }}">
                                {{ $user->role }}
                            </span>
                        </td>

                        <td>
                            {{ $user->created_at->format('d-m-Y') }}
                        </td>

                        <td>

                            <div class="action">

                                <a href="{{ route('admin.users.edit', $user) }}"
                                   class="edit-btn">
                                    Edit
                                </a>

                                <form action="{{ route('admin.users.destroy', $user) }}"
                                      method="POST"
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus akun ini?');">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="delete-btn">
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="6" class="empty">
                            Belum ada akun.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>