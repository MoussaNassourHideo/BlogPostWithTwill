@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Title',
        'maxlength' => 200,
        'required' => true,
    ])

    @formField('tags' ,[
    ])

    @formField('input', [
    'name' => 'excerpt',
    'label' => 'Excerpt',
    'maxlength' => 200,
    
   ])
    
    @formField('wysiwyg', [
    'name' => 'content',
    'label' => 'Content',
    'toolbarOptions' => ['list-ordered', 'list-unordered'],
    'placeholder' => 'Content of the Blog Post',
    'required' => true,
     ] )

   @formField('medias', [
    'name' => 'image',
    'label' => 'Photo for blog post',
    'max'=> 1 ,
    
     ])

    
@stop
