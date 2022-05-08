<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $article->user_id }}</p>
</div>

<!-- Writed By Field -->
<div class="form-group">
    {!! Form::label('writed_by', 'Writed By:') !!}
    <p>{{ $article->writed_by }}</p>
</div>

<!-- Subject Field -->
<div class="form-group">
    {!! Form::label('subject', 'Subject:') !!}
    <p>{{ $article->subject }}</p>
</div>

<!-- Article Pic Field -->
<div class="form-group">
    {!! Form::label('article_pic', 'Article Pic:') !!}
    <p>{{ $article->article_pic }}</p>
</div>

