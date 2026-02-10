<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts UI Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .posts-container {
            margin-top: 100px;
            display: grid;     
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .post-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
            padding: 10px;
        }

        .post-card:hover {
            transform: translateY(-5px);
        }

        /* .post-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        } */

        .post-content {
            padding: 15px;
        }

        .post-title {
            font-size: 1.2rem;
            margin: 0 0 10px;
            color: #333;
            font-weight: bold;
        }

        .post-meta {
            font-size: 0.85rem;
            color: #777;
            margin-bottom: 10px;
        }

        .post-text {
            font-size: 0.95rem;
            color: #555;
            line-height: 1.5;

            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            text-overflow: ellipsis;

        }

        .read-more {
            display: inline-block;
            margin-top: 10px;
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        .read-more:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">All Posts</a> 
                </div>
            </div>
        </div>
    </nav>

    <h1 style="text-align:center;">Posts</h1>

    <div class="posts-container">
        @foreach ($AllPosts as $post)
            <div class="post-card">
                <div class="post-content">
                    {{-- Do not use the syntax {{$post->title}} because we only have static data in the controller as an array; use $post['title'] instead.  --}}
                    <h2 class="post-title">{{ $post['title'] }}</h2>
                    <div class="post-meta">By <u>{{ $post['posted_by'] }} </u>• {{ $post['created_at'] }}</div>
                    <p class="post-text">{{ $post['description'] }}</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
        @endforeach

    </div>

</body>

</html>
