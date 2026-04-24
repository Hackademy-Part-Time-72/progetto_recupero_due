<!DOCTYPE html>
<html>

<head>
    <title>MindSpace</title>
</head>

<body>

    <h1 style="text-align:center; margin-bottom:30px;">
        MindSpace
    </h1>

    @auth
    <div style="text-align:center; margin-bottom:20px;">
        <a href="/articles/create">➕ Crea articolo</a>
    </div>
    @endauth

    @forelse ($articles as $article)
    <div style="margin-bottom: 20px;">
        <h2>
            <a href="/articles/{{ $article->id }}">
                {{ $article->title }}
            </a>
        </h2>
        <p>{{ $article->body }}</p>
    </div>
    @empty
    <p style="text-align:center;">Nessun articolo presente</p>
    @endforelse

</body>

</html>