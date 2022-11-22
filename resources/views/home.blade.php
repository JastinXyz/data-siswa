<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Crud</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.41.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="py-20 px-10">
        <h1 class="text-3xl font-bold mb-4">Data Siswa</h1>
        <div class="overflow-x-auto">
            <table class="table table-zebra w-full">
                <!-- head -->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIS</th>
                        <th>NAMA</th>
                        <th>TTL</th>
                        <th>KELAS</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                        <tr>
                            <th>{{ $siswa->id }}</th>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->ttl }}</td>
                            <td>{{ $siswa->kelas }}</td>
                            <td>
                                <div class="flex space-x-2">
                                    <form action="/siswa/delete/{{ $siswa->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-outline btn-error" type="submit">🗑</button>
                                    </form>
                                    <a href="/edit/{{ $siswa-> id }}">
                                        <button class="btn btn-outline btn-success">✏</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a href="/create">
            <button class="btn btn-primary mt-10">Tambah Data</button>
        </a>
    </div>
</body>
</html>