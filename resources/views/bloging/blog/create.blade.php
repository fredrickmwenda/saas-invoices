@extends('layouts.app')
@section('title')
{{__('messages.client.add_client')}}
@endsection
@push('css')
<!-- <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css"> -->
<style>
   

    .ck-editor__editable[role="textbox"] {
        /* Editing area */
        min-height: 400px;
    }

    .ck-content .image {
        /* Block images */
        max-width: 80%;
        margin: 20px auto;
    }
</style>
@endpush
@section('content')
@php $styleCss = 'style'; @endphp
<div class="container-fluid">
    @include('flash::message')
    <div class="d-flex flex-column">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <h1>Add Blog</h1>
                <a class="btn btn-outline-primary float-end"
                    href="{{ route('blogs.index') }}">{{ __('messages.common.back') }}</a>
            </div>
            <div class="col-12">
                @include('layouts.errors')
            </div>
            <div class="card">
                <div class="card-body">
                    {{ Form::open(['route' => 'blogs.store','files' => 'true','id'=>'blogForm']) }}
                    @include('bloging.blog.fields')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('js')
<script>
    $(document).ready(function() {
        $('#tag_id').select2();
    });
</script>
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script> 
 <script>
    CKEDITOR.replace('editor');
</script>
<!-- Your script for initializing CKEditor -->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js"></script>  -->
<!-- <script>
    ClassicEditor.replace('editor');
</script> -->
<!-- <script>
    // Wait for the DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', (event) => {
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: {
                    items: [
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'superscript', 'subscript', 'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'alignment', '|',
                        'link', 'linkImage', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'code', 'codeBlock', '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'textPartLanguage', 'sourceEditing', '|',
                        'undo', 'redo'
                    ],
                    shouldNotGroupWhenFull: true
                },
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        },
                        {
                            model: 'heading3',
                            view: 'h3',
                            title: 'Heading 3',
                            class: 'ck-heading_heading3'
                        },
                        {
                            model: 'heading4',
                            view: 'h4',
                            title: 'Heading 4',
                            class: 'ck-heading_heading4'
                        },
                        {
                            model: 'heading5',
                            view: 'h5',
                            title: 'Heading 5',
                            class: 'ck-heading_heading5'
                        },
                        {
                            model: 'heading6',
                            view: 'h6',
                            title: 'Heading 6',
                            class: 'ck-heading_heading6'
                        }
                    ]
                },
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                fontSize: {
                    options: [10, 12, 14, 'default', 18, 20, 22],
                    supportAllValues: true
                },
                htmlSupport: {
                    allow: [{
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true
                    }]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [{
                        marker: '@',
                        feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                            '@sugar', '@sweet', '@topping', '@wafer'
                        ],
                        minimumCharacters: 1
                    }]
                },
                removePlugins: [
                    'AIAssistant',
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    'MathType',
                    'SlashCommand',
                    'Template',
                    'DocumentOutline',
                    'FormatPainter',
                    'TableOfContents',
                    'PasteFromOfficeEnhanced',
                    'CaseChange'
                ]
            })
            .catch(error => {
                console.error(error);
            });
    });
</script> -->
<!-- Importmap for CKEditor 5 -->
<!-- <script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
        }
    }
</script> -->

<!-- CKEditor 5 Configuration Script -->
<!-- <script type="module">
    import {
        ClassicEditor,
        Essentials,
        Paragraph,
        Bold,
        Italic,
        Strikethrough,
        Underline,
        Superscript,
        Subscript,
        RemoveFormat,
        Font,
        FontSize,
        FontFamily,
        FontColor,
        FontBackgroundColor,
        Alignment,
        Link,
        Image,
        ImageToolbar,
        ImageUpload,
        MediaEmbed,
        BlockQuote,
        TableToolbar,
        List,
        TodoList,
        Code,
        CodeBlock,
        SpecialCharacters,
        SpecialCharactersEssentials,
        HorizontalLine,
        PageBreak,
        HtmlEmbed,
        TextPartLanguage,
        Heading,
        PasteFromOffice, // Add this line
   
       
    } from 'ckeditor5';

    ClassicEditor
        .create(document.querySelector('#editor'), {
            plugins: [
                Essentials, Paragraph, Bold, Italic, Strikethrough, Underline, Superscript, Subscript,
                RemoveFormat, Font, FontSize, FontFamily, FontColor, FontBackgroundColor, Alignment,
                Link, Image, ImageToolbar, ImageUpload, MediaEmbed, BlockQuote, TableToolbar,
                List, TodoList, Code, CodeBlock, SpecialCharacters, SpecialCharactersEssentials, HorizontalLine,
                PageBreak, HtmlEmbed, TextPartLanguage, Heading, PasteFromOffice,
            ],
            toolbar: [
                'heading', '|',
                'bold', 'italic', 'strikethrough', 'underline', 'superscript', 'subscript', 'removeFormat', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                'alignment', '|',
                'bulletedList', 'numberedList', 'todoList', '|',
                'link', 'uploadImage', 'blockQuote','mediaEmbed', 'code', 'codeBlock', '|',
                'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                'htmlEmbed', 'textPartLanguage'
            ],
            image: {
                toolbar: [
                    'imageTextAlternative', 'linkImage'
                ]
            },
            table: {
                contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
            },
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            }
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
</script> -->

<script>
    phoneNo = "{{ old('region_code').old('contact') }}"
</script>
@endpush