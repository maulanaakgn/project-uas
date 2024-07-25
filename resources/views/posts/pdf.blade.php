<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Posts</title>
    <style>
        @page {
            size: A4;
            margin: 20mm;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
            vertical-align: top;
            overflow-wrap: break-word; /* Menangani teks panjang */
            word-break: break-word; /* Menangani teks panjang */
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        .no-image {
            color: #ff0000;
            font-style: italic;
        }

        img {
            max-width: 100px;
            height: auto;
        }

        td {
            max-width: 150px;
        }

        tr {
            page-break-inside: avoid;
        }

        thead th {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <h2>Data Posts</h2>
    <table>
        <thead>
            <tr>
                <th>GAMBAR</th>
                <th>JUDUL</th>
                <th>CONTENT</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td>
                        @if ($post->image)
                            <img src="{{ public_path('storage/' . $post->image) }}" alt="Post Image">
                        @else
                            <span class="no-image">No Image</span>
                        @endif
                    </td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" style="text-align: center;">Data Post belum Tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
