@extends('twill::layouts.form')

@section('contentFields')
    @formField('wysiwyg', [
        'name' => 'content',
        'label' => 'content',
        'toolbarOptions' => [
        ['header' => [2, 3, 4, 5, 6, false]],
        'bold',
        'italic',
        'underline',
        'strike',
        ["script" => "super"],
        ["script" => "sub"],
        "blockquote",
        "code-block",
        ['list' => 'ordered'],
        ['list' => 'bullet'],
        ['indent' => '-1'],
        ['indent' => '+1'],
        ["align" => []],
        ["direction" => "rtl"],
        'link',
        "clean",
        ],
        'placeholder' => 'content',
        'maxlength' => 500,
        'editSource' => true,
        //'note' => 'Hint message`',
    ])

    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100
    ])
{{-- @formField('block_editor', [
        'blocks' => ['title', 'quote', 'text', 'image', 'grid', 'test', 'publications', 'news']
    ]) --}}

{{-- @formField('wysiwyg', [
        'name' => 'content',
        'label' => 'content',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
        'placeholder' => 'content',
        'maxlength' => 200,
        'editSource' => true,
        'note' => 'Hint message',
    ]) --}}


{{-- @formField('input', [
        'name' => 'url',
        'label' => 'url',
        'maxlength' => 200
    ]) --}}
@stop