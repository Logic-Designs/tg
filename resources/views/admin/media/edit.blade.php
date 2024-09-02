<x-layouts.admin.layout>
    <x-admin.container.header title="Edit Media" name="media" :back="true" />

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <form action="{{ route('admin.media.update', $media->id) }}" method="post" enctype="multipart/form-data" class="row">
                    @csrf
                    @method('PUT')

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $media->title }}" placeholder="Title" required />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control ckeditor-textarea" name="description" placeholder="Description">{{ $media->description }}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        @if($media->image)
                            <div class="mb-3">
                                <img src="{{ url($media->image) }}" alt="{{ $media->name }}" width="150" class="d-block mb-2">
                            </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" />
                        </div>

                    </div>

                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin.layout>
