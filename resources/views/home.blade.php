<!DOCTYPE html>
<html>

<head>
    <title>MindSpace</title>
</head>

<body>

    <h1 style="text-align:center; margin-bottom:30px;">
        MindSpace
    </h1>

    @forelse ($articles as $article)
    <div style="margin-bottom: 20px;">
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->body }}</p>
    </div>
    @empty
    <p style="text-align:center;">Nessun articolo presente</p>
    @endforelse

</body>

</html>