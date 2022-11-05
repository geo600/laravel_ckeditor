@unless(count($articles)==0)


@foreach($articles as $article_id)
    <x-article-card :article="$article_id"/>
@endforeach

@else
<p>No articles found</p>
@endunless

<div class="mt-6 p-4">
    {{$articles->links()}}
</div>