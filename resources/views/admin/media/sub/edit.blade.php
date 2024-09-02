<x-layouts.admin.layout>
    <x-admin.container.header title="Edit {{ ucfirst($type) }}" name="media" :back="true" />

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <form action="{{ route('admin.media.sub.update', $model->id) }}" method="post" enctype="multipart/form-data" class="row">
                    @csrf
                    @method('PUT')
                    <input name="type" value="{{ $type }}" hidden required />


                    <!-- Common Fields -->
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $model->title }}" placeholder="Title" required />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" placeholder="Description">{{ $model->description }}</textarea>
                        </div>
                    </div>

                    <!-- Conditional Fields Based on Type -->
                    @if($type == 'photo')
                        <div class="col-lg-12">
                            @if($model->photo)
                                <div class="mb-3">
                                    <label class="form-label">Current Image</label>
                                    <img src="{{ url($model->photo) }}" alt="{{ $model->title }}" width="150" class="d-block mb-2">
                                </div>
                            @endif

                            <div class="mb-3">
                                <label class="form-label">Upload New Image</label>
                                <input type="file" class="form-control" name="photo" />
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">YouTube URL</label>
                                <input type="text" class="form-control" name="youtube_url" value="{{ $model->youtube_url }}" placeholder="YouTube URL" />
                            </div>
                        </div>
                    @endif

                    <!-- Submit Button -->
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary">Update {{ ucfirst($type) }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin.layout>
