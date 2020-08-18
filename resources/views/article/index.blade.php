<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articl</title>
</head>
<body>
    
    <table>
        <thead>
            <th>
                <td>Id</td>
                <td>Title </td>
                <td>Desc</td>
                <td>Created At</td>
            </th>
        </thead>

        <tbody>
            
           
            @forelse($articles as $article)
            <tr>
                @if($loop->first)
                <td>{{$loop->iteration}}</td>
                <td><b>{{$article->title}}</b></td>
                <td>{{$article->description}}</td>
                <td>{{$article->created_at}}</td>
                
                @elseif($loop->last)

                <td>{{$loop->iteration}}</td>
                <td><b>{{$article->title}}</b></td>
                <td>{{$article->description}}</td>
                <td>{{$article->created_at}}</td>

                @else
                <td>{{$loop->iteration}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->created_at}}</td>
                @endif
            </tr>

            @empty
                <p>No data found</p>
            @endforelse
         
        </tbody>
    </table>

    <div>
        number of article : {{$article_count}}
    </div>
    
    <div>
    <a href="{{route('article.create')}}">Create Article</a>
    </div>
</body>
</html>