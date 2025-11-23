@extends('adminlte::page')

@section('content_header')
    <nav aria-label="breadcrumb" style="font-size: 15pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}" style="color:#ff9204">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/purchases') }}" style="color:#ff9204">Purchases</a></li>
            <li class="breadcrumb-item active" aria-current="page">Adding a a new purchase</li>
        </ol>
    </nav>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header bg-orange">
                    <h3 class="card-title"><b>Fill in the details of the purchase | Step 1</b></h3>
                </div>

                <div class="card-body" style="display:block;">
                    <form action="{{ url('/admin/purchases/create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!-- Left section -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="supplier_id">Suppliers</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-users"></i></span>
                                        </div>
                                        <select name="supplier_id" id="supplier_id" class="form-control" required>
                                            <option value="">Select a supplier...</option>
                                            @foreach ($suppliers as $supplier)
                                                <option value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>
                                                    {{ $supplier->name . " | " . $supplier->company  }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('supplier_id')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Date of Purchase</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        </div>
                                        <input type="date" value="{{ old('date') }}" class="form-control" id="date" name="date" placeholder="Enter the date when the purchase was made" required>
                                    </div>
                                    @error('date')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Observations</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen-fancy"></i></span>
                                        </div>
                                        <input type="text" value="{{ old('observations') }}" class="form-control" id="observations" name="observations" placeholder="Enter the observations made during the purchase">
                                    </div>
                                    @error('observations')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/purchases') }}" class="btn btn-default">Cancel</a>
                                    <button type="submit" class="btn bg-orange">Create purchase record</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
<style>
    .editor-wrapper,
    .ck.ck-editor,
    .ck-editor__editable_inline {
        width: 100% !important;
        max-width: 100% !important;
        box-sizing: border-box;
    }

    .input-group .ck.ck-editor {
        flex: 1 1 auto;
        display: block;
    }

    .ck-editor__editable {
        min-height: 300px !important;
        width: 100% !important;
    }
</style>
@stop

@section('js')
<script>
    function previewImage(event) {
        const input = event.target;
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgPreview = document.getElementById('img-preview');
                imgPreview.src = e.target.result;
                imgPreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    }
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
   ClassicEditor.create(document.querySelector('#description'), {
       toolbar: {
           items: [
               'heading', '|',
               'bold', 'italic', 'underline', 'strikethrough', 'subscript', 'superscript', '|',
               'link', 'bulletedList', 'numberedList', '|',
               'outdent', 'indent', '|',
               'alignment', '|',
               'blockQuote', 'insertTable', 'mediaEmbed', '|',
               'undo', 'redo', '|',
               'fontBackgroundColor', 'fontColor', 'fontSize', 'fontFamily', '|',
               'code', 'codeBlock', 'htmlEmbed', '|',
               'sourceEditing'
           ],
           shouldNotGroupWhenFull: true
       },
       language: 'en'
   }).then(editor => {
       const editorEl = editor.ui.view.element;
       editorEl.style.width = '100%';
       editorEl.querySelector('.ck-editor__editable').style.width = '100%';
   }).catch(error => {
       console.error(error);
   });
</script>
@stop
