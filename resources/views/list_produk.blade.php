<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <h1 class="text-2xl font-bold mb-6 text-center">Daftar Produk Toko</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-xl shadow">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="py-3 px-4">No</th>
                    <th class="py-3 px-4">Nama Produk</th>
                    <th class="py-3 px-4">Deskripsi</th>
                    <th class="py-3 px-4">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-2 px-4 text-center">{{ $index + 1 }}</td>
                    <td class="py-2 px-4">{{ $item }}</td>
                    <td class="py-2 px-4">{{ $desc[$index] }}</td>
                    <td class="py-2 px-4">Rp {{ number_format($harga[$index], 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div> <h1>Input Produk</h1></div>
        <form method="POST" action="{{ route('produk.simpan') }}">
            @csrf
            <table class="table">
                <tr>
                    <td>Nama:</td>
                    <td colspan="3"><input type="text" class="form-control" id="nama" name="nama"></td>
                </tr>
                <tr>
                    <td>Deskripsi:</td>
                    <td colspan="3"><textarea class="form-control" id="deskripsi" name="deskripsi"></textarea></td>
                </tr>
                <tr>
                    <td>Harga:</td>
                    <td><input type="number" class="form-control" id="harga" name="harga"></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
</body>
</html>