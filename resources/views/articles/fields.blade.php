<!-- User Id Field -->
{!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control']) !!}


<!-- Writed By Field -->
{!! Form::hidden('writed_by', Auth::user()->name, ['class' => 'form-control']) !!}
</div>
<!-- title Pic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<!-- Subject Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('subject', 'Subject:') !!}
    {!! Form::textarea('subject', null, ['class' => 'form-control']) !!}
</div>

<!-- Article Pic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('article_pic', 'Article Pic:') !!}
    {!! Form::file('article_pic', null,['class' => 'form-control'] ) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('articles.index') }}" class="btn btn-default">Cancel</a>
</div>
