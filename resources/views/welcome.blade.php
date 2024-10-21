<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKEditor 5 - Quick start CDN</title>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.2.0/ckeditor5.css">
    <style>
        .main-container {
            width: 795px;
            margin-left: auto;
            margin-right: auto;
        }

        .editor {
            height: 400px;
            /* Điều chỉnh chiều cao ở đây */
            margin-bottom: 20px;
            /* Khoảng cách giữa các editor */
        }
    </style>
</head>

<body>
    <div class="main-container">
        <form action="{{ route('ckeditor.store') }}" method="post">
            @csrf

            <textarea name="content" id="editor1" cols="30" rows="10"></textarea>

            <button type="submit">Save</button>
        </form>
    </div>
    
    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.2.0/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.2.0/"
            }
        }
    </script>
    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Paragraph,
            Bold,
            Italic,
            Font,
            Image,
            ImageToolbar,
            ImageUpload,
            ImageResize,
            ImageStyle,
            LinkImage,
            Alignment,
            SimpleUploadAdapter,
            Heading
        } from 'ckeditor5';

        const editors = ['editor1']; // Danh sách các editor

        editors.forEach(editorId => {
            ClassicEditor
                .create(document.querySelector(`#${editorId}`), {
                    plugins: [
                        Essentials, Paragraph, Bold, Italic, Font,
                        Image, ImageToolbar, ImageUpload, ImageResize, LinkImage, Alignment, ImageStyle,
                        SimpleUploadAdapter, Heading
                    ],
                    toolbar: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                        'link', 'bulletedList', 'numberedList', '|', 'indent', 'outdent', '|',
                        'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', '|',
                        'alignment', '|',
                        'heading', '|',
                        'highlight', '|',
                        'htmlEmbed', '|',
                        'sourceEditing', '|',
                    ],
                    image: {
                        toolbar: [
                            'imageTextAlternative', '|',
                            'imageStyle:full', 'imageStyle:side', '|',
                            'imageStyle:alignLeft', 'imageStyle:alignCenter',
                            'imageStyle:alignRight'
                        ],
                        styles: [
                            'full', 'side', 'alignLeft', 'alignCenter', 'alignRight'
                        ]
                    },
                    imageResize: {
                        displayStyles: {
                            backgroundColor: 'black',
                            border: 'none',
                            color: 'white'
                        }
                    },
                    simpleUpload: {
                        uploadUrl: '{{ route('upload') }}',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    }
                })
                .then(editor => {
                    window[editorId] = editor; // Lưu editor vào biến toàn cục
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
    <script>
        window.onload = function() {
            if (window.location.protocol === "file:") {
                alert("This sample requires an HTTP server. Please serve this file with a web server.");
            }
        };
    </script>
</body>

</html>
