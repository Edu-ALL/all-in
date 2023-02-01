@extends('layout.admin.app')
@section('css')
<style>
    .alert-warning {
        font-size: 14px;
    }
    .fs-12 {
        font-size: 12px;
    }
</style>
@endsection
@section('content')
@include('layout.admin.header')
@include('layout.admin.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Success Stories</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/success-stories">Success Stories</a></li>
                <li class="breadcrumb-item active">Update</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="col d-flex flex-column gap-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row align-items-center justify-content-between">
                                <h5 class="card-title">Update Success Stories <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/success-stories">
                                    <i class="fa-solid fa-arrow-left me-1"></i><span class="d-md-inline d-none"> Back to List</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="english-tab" data-bs-toggle="tab" data-bs-target="#bordered-english" type="button" role="tab" aria-controls="english" aria-selected="true">English</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="indo-tab" data-bs-toggle="tab" data-bs-target="#bordered-indo" type="button" role="tab" aria-controls="indo" aria-selected="false" onclick="checkInput()">Indonesia</button>
                                </li>
                            </ul>
                            <form action="{{ route('update-success-stories', ['group' => $success_stories[0]->group]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content" id="borderedTabContent">
                                    {{-- Tab English --}}
                                    <div class="tab-pane fade show active" id="bordered-english" role="tabpanel" aria-labelledby="english-tab">
                                        <div class="col py-2">
                                            <h5 class="card-title">Form English</h5>
                                            @if($errors->any())
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <strong>Failed Update Success Stories!</strong> You have to check some fields in English and Indonesian.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Name <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="name_en" name="story_name_en" value="{{ $success_stories[0]->name }}">
                                                </div>
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            Badge 1 <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="badge1_en" name="story_badge1_en" value="{{ $success_stories[0]->badge_1 }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            Badge 2
                                                        </label>
                                                        <input type="text" class="form-control" id="badge2_en" name="story_badge2_en" value="{{ $success_stories[0]->badge_2 }}">
                                                    </div>
                                                </div>
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            Badge 3
                                                        </label>
                                                        <input type="text" class="form-control" id="badge3_en" name="story_badge3_en" value="{{ $success_stories[0]->badge_3 }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            Badge 4
                                                        </label>
                                                        <input type="text" class="form-control" id="badge4_en" name="story_badge4_en" value="{{ $success_stories[0]->badge_4 }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Description <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="story_description_en" id="description_en">
                                                        {{ $success_stories[0]->description }}
                                                    </textarea>
                                                </div>
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col-md-2 col">
                                                        <label for="" class="form-label">Thumbnail Preview</label>
                                                        <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                            <img class="img-preview img-fluid" id="img_preview_en" src="{{ asset('uploaded_files/success-stories/'.$success_stories[0]->thumbnail) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Thumbnail
                                                            </label>
                                                            <input type="file" class="form-control" id="thumbnail_en" onchange="previewImage_en()" name="story_thumbnail_en">
                                                            @error('story_thumbnail_en')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Alt <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="alt_en" name="story_alt_en" value="{{ $success_stories[0]->thumbnail_alt }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col-md-2 col">
                                                        <label for="" class="form-label">Achievement Preview</label>
                                                        <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                            <img class="img-preview img-fluid" id="achievement_preview_en" src="{{ asset('uploaded_files/success-stories/'.$success_stories[0]->achievement_image) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Achievement Image
                                                            </label>
                                                            <input type="file" class="form-control" id="achievement_img_en" onchange="previewAchievement_en()" name="story_achievement_img_en">
                                                            @error('story_achievement_img_en')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Achievement Alt <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="achievement_alt_en" name="story_achievement_alt_en" value="{{ $success_stories[0]->achievement_alt }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Link Video <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="video_link_en" name="story_video_link_en" value="{{ $success_stories[0]->video_link }}">
                                                    @error('story_video_link_en')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Tab Indonesia --}}
                                    <div class="tab-pane fade" id="bordered-indo" role="tabpanel" aria-labelledby="indo-tab">
                                        <div class="col py-2">
                                            <h5 class="card-title">Form Indonesia</h5>
                                            @if($errors->any())
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <strong>Failed Create Success Stories!</strong> You have to check some fields in English and Indonesian.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Name <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="name_id" name="story_name_id" value="{{ $success_stories[1]->name }}">
                                                    @error('story_name_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            Badge 1 <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="badge1_id" name="story_badge1_id" value="{{ $success_stories[1]->badge_1 }}">
                                                        @error('story_badge1_id')
                                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            Badge 2
                                                        </label>
                                                        <input type="text" class="form-control" id="badge2_id" name="story_badge2_id" value="{{ $success_stories[1]->badge_2 }}">
                                                        @error('story_badge2_id')
                                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            Badge 3
                                                        </label>
                                                        <input type="text" class="form-control" id="badge3_id" name="story_badge3_id" value="{{ $success_stories[1]->badge_3 }}">
                                                        @error('story_badge3_id')
                                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            Badge 4
                                                        </label>
                                                        <input type="text" class="form-control" id="badge4_id" name="story_badge4_id" value="{{ $success_stories[1]->badge_4 }}">
                                                        @error('story_badge4_id')
                                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Description <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="story_description_id" id="description_id">
                                                        {{ $success_stories[1]->description }}
                                                    </textarea>
                                                    @error('story_description_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col-md-2 col">
                                                        <label for="" class="form-label">Thumbnail Preview</label>
                                                        <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                            <img class="img-preview img-fluid" id="img_preview_id" src="{{ asset('uploaded_files/success-stories/'.$success_stories[1]->thumbnail) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Thumbnail
                                                            </label>
                                                            <input type="file" class="form-control" id="thumbnail_id" onchange="previewImage_id()" name="story_thumbnail_id">
                                                            @error('story_thumbnail_id')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Alt <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="alt_id" name="story_alt_id" value="{{ $success_stories[1]->thumbnail_alt }}">
                                                            @error('story_alt_id')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col-md-2 col">
                                                        <label for="" class="form-label">Achievement Preview</label>
                                                        <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                            <img class="img-preview img-fluid" id="achievement_preview_id" src="{{ asset('uploaded_files/success-stories/'.$success_stories[1]->achievement_image) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Achievement Image
                                                            </label>
                                                            <input type="file" class="form-control" id="achievement_img_id" onchange="previewAchievement_id()" name="story_achievement_img_id">
                                                            @error('story_achievement_img_id')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Achievement Alt <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="achievement_alt_id" name="story_achievement_alt_id" value="{{ $success_stories[1]->achievement_alt }}">
                                                            @error('story_achievement_alt_id')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Link Video <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="video_link_id" name="story_video_link_id" value="{{ $success_stories[1]->video_link }}">
                                                    @error('story_video_link_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-primary" id="submit">
                                                    <i class="fa-solid fa-pen-to-square me-1"></i> Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('js')
<script>
    function previewImage_en(){
        const image = document.querySelector('#thumbnail_en')
        const imgPreview = document.querySelector('#img_preview_en')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
    function previewAchievement_en(){
        const image = document.querySelector('#achievement_img_en')
        const imgPreview = document.querySelector('#achievement_preview_en')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
    function previewImage_id(){
        const image = document.querySelector('#thumbnail_id')
        const imgPreview = document.querySelector('#img_preview_id')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
    function previewAchievement_id(){
        const image = document.querySelector('#achievement_img_id')
        const imgPreview = document.querySelector('#achievement_preview_id')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
    function checkInput(){
        const name_en = document.getElementById('name_en').value;
        const badge1_en = document.getElementById('badge1_en').value;
        const description_en = tinymce.get('description_en').getContent();
        const thumbnail_en = document.getElementById('thumbnail_en').value;
        const alt_en = document.getElementById('alt_en').value;
        const achievement_img_en = document.getElementById('achievement_img_en').value;
        const achievement_alt_en = document.getElementById('achievement_alt_en').value;
        const video_link_en = document.getElementById('video_link_en').value;
        const submit = document.getElementById('submit');
        if (name_en == "" || badge1_en == "" || description_en == "" || alt_en == "" || achievement_alt_en == "" || video_link_en == "") {
            submit.disabled = true;
        } else {
            submit.disabled = false;
        }
    };

</script>
@endsection