@csrf
<div>
  <label for="title">タイトル:</label>
  <input type="text" id="title" name="title" value="{{ old('title', $article->title) }}">
</div>
<div>
  <label for="body">本文:</label>
  <textarea id="body" name="body">{{ old('body', $article->body) }}</textarea>
</div>