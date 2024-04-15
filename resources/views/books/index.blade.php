<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="text-4xl text-center py-4">Books List</h1>
    </header>

    <main>
        <table class="w-full text-center">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">ISBN</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Author</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Date Published</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td class="border px-4 py-2">{{ $book->id }}</td>
                        <td class="border px-4 py-2">{{ $book->isbn }}</td>
                        <td class="border px-4 py-2">{{ $book->title }}</td>
                        <td class="border px-4 py-2">{{ $book->author }}</td>
                        <td class="border px-4 py-2">{{ $book->description }}</td>
                        <td class="border px-4 py-2">{{ $book->date_published }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <footer>
        <p class="text-center py-4">Copyright © 2023</p>
    </footer>
</body>
</html>