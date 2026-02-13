<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .posts-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 50px auto;
        }

        .post-card {
            background: #ffffff;
            border: 2px solid rgba(0, 0, 0, 0.634);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
            padding: 10px;
        }

        .post-card:hover {
            transform: translateY(-5px);
        }

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

        .bi-trash {
            color: red;
        }

        .icon {
            cursor: pointer;
            opacity: 0.7;
            font-size: 20px;
        }

        .icon:hover {
            opacity: 1;
        }

        .Detail-Post {
            display: flex;
            width: 70%;
            margin: 50px auto;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid black;
            box-shadow: 1px 10px 20px rgba(75, 75, 75, 0.731);
            margin-top: 50px;
        }

        .post-meta-detail {
            font-size: 17px;
            color: rgb(141, 207, 131)
        }

        .description-show {
            color: #555;
            line-height: 1.5;
        }
        .form-container { 
            padding: 7px;
            border-radius: 20px;
            width: 80%;
            border: 1px solid black;
            box-shadow: 1px 10px 20px rgba(75, 75, 75, 0.731);
            margin:70px auto;
        }
        .form { 
            padding: 20px; 
            margin: auto;
        }
        .form-label{
            width: 50%;
        }
        .delete{ 
            background: none;
            border: none;
            padding: 0;
            margin: 0;
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
                    <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">All Posts</a>
                </div>
            </div>
        </div>
    </nav>

    <div>@yield('content')</div>

</body>

</html>
