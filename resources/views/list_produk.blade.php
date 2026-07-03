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
                    <th class="py-3 px-4">Action</th>
                </tr>
                </thead>
                    @foreach ($produk as $index => $item)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4 text-center">{{ $index + 1 }}</td>
                        <td class="py-2 px-4">{{ $item->nama }}</td>
                        <td class="py-2 px-4">{{ $item->deskripsi }}</td>
                        <td class="py-2 px-4">{{ $item->harga }}</td>
                        <td>
                            <form action="{{ route('produk.delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"onclick="return confirm('Are you sure you want to delete {{ $item->nama }}?')">Delete</button>
                            </form>
                        </td>
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