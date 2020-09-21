<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=" https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>WSL 2</title>
</head>

<body class="p-12">
    <table class="w-full table-auto">
        <thead class="font-bold">
            <tr>
                <td class="px-4 py-2"><a href="?sort=title&order={{ $order }}">Pealkiri</td>
                <td class="px-4 py-2">Autor</td>
                <td class="px-4 py-2">Aasta</td>
                <td class="px-4 py-2">Keel</td>
                <td class="px-4 py-2">Lehekülgi</td>
                <td class="px-4 py-2">Hind</td>
                <td class="px-4 py-2">Laoseis</td>
                <td class="px-4 py-2">Tüüp</td>
            </tr>
        </thead>
        <tbody class="text-sm">
            @foreach($books as $book)
            <tr>
                <td class="border px-4 py-2">{{ $book->title }}</td>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2">{{ $book->release_date }}</td>
                <td class="border px-4 py-2">{{ $book->language }}</td>
                <td class="border px-4 py-2">{{ $book->pages }}</td>
                <td class="border px-4 py-2">{{ $book->price }}</td>
                <td class="border px-4 py-2">{{ $book->stock_saldo }}</td>
                <td class="border px-4 py-2">{{ $book->type }}</td>
            </tr>
            @endforeach
    </table>
    <div class="mt-4">
        {{ $books->links() }}
    </div>
</body>

</html>
