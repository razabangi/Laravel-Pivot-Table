<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Post</title>
</head>
<body>
    <div class="container">
        <h2>Posts | Many to Many</h2>
        <div class="d-block mt-4">
        @foreach ($posts as $post)
                <div class="card bg-dark text-white mt-3">
                    <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->status }}</p>
                    </div>
                    <ul class="list-group list-group-flush text-dark">
                        @foreach ($post->tags as $tags)
                            <li class="list-group-item">{{ $tags->name }} <span class="float-right">{{ $tags->pivot->created_at }}</span></li>
                        @endforeach
                    </ul>
                </div>
        @endforeach
        </div>

        <h2>Tags | Many to Many</h2>
        <div class="d-block mt-4">
        @foreach ($postTags as $tag)
                <div class="card bg-dark text-white mt-3">
                    <div class="card-body">
                    <h5 class="card-title">{{ $tag->name }}</h5>
                    </div>
                    <ul class="list-group list-group-flush text-dark">
                        @foreach ($tag->posts as $post)
                            <li class="list-group-item">{{ $post->title }} <span class="float-right"><span class="badge {{ ($post->pivot->status == "approved") ? "badge-info" : "badge-success" }}">{{ $post->pivot->status }}</span> {{ $post->pivot->created_at }}</span></li>
                        @endforeach
                    </ul>
                </div>
        @endforeach
        </div>
    </div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</html>
