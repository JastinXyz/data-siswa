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
    <div class="py-10 px-16">
        <h1 class="text-3xl font-bold">Update Data Siswa</h1>
        <form action="/siswa/update/{{ $data[0]->id }}" method="POST" class="space-y-4">
            @method('PUT')
            @csrf
            <div class="form-control">
                <label class="label">
                    <span class="label-text text-lg">NIS <span class="text-red-500 required-dot">*</span></span>
                </label>
                <input name="nis" type="number" placeholder="xxxxxx" class="input input-bordered" value="{{ $data[0]->nis }}" required/>
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text text-lg">Nama <span class="text-red-500 required-dot">*</span></span>
                </label>
                <input name="nama" type="text" placeholder="Budi" class="input input-bordered" value="{{ $data[0]->nama }}" required/>
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text text-lg">Tempat, Tanggal Lahir <span class="text-red-500 required-dot">*</span></span>
                </label>
                <input name="ttl" type="text" placeholder="Banyumas, 32 Desember 2000" class="input input-bordered" value="{{ $data[0]->ttl }}" required/>
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text text-lg">Kelas <span class="text-red-500 required-dot">*</span></span>
                </label>
                <input name="kelas" type="text" placeholder="XI RPL" class="input input-bordered" value="{{ $data[0]->kelas }}" required/>
            </div>
            <div class="mt-6">
                <button class="btn btn-primary">Update Data</button>
                <a href="/" class="btn">Ke Halaman Utama</a>
            </div>
        </form>
    </div>
</body>
</html>