<x-layouts.admin.layout>
    <x-admin.container.header title="Edit Development" name="developments" :back="true" />

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <form action="{{ route('admin.developments.update', $development->id) }}" method="post" enctype="multipart/form-data" class="row">
                    @csrf
                    @method('PUT')

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $development->name }}" placeholder="Name" required />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-control" name="category" required>
                                <option value="Residential" {{ $development->category == 'Residential' ? 'selected' : '' }}>Residential</option>
                                <option value="Commercial" {{ $development->category == 'Commercial' ? 'selected' : '' }}>Commercial</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control ckeditor-textarea" name="description" placeholder="Description">{{ $development->description }}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        @if($development->image)
                            <div class="mb-3">
                                <img src="{{ url($development->image) }}" alt="{{ $development->name }}" width="150" class="d-block mb-2">
                            </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" />
                        </div>

                        <!-- Display Gallery Images with Delete Button -->


                        <div class="mb-3">
                            <label class="form-label">Gallery Photos (you can select multiple images)</label>
                            <input type="file" class="form-control" name="gallery_photos[]" multiple />
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </form>
                <div class="mb-3">
                    <label class="form-label">Current Gallery Images</label>
                    <div class="row">
                        @foreach($development->photos as $photo)
                            <div class="col-md-4 mb-3">
                                <img src="{{ url($photo->photo) }}" alt="Gallery Image" width="100%" class="d-block mb-2">
                                <!-- Delete Button for Each Image -->
                                <x-admin.button.delete route="admin.developments.photos.destroy" :id="$photo->id" />

                                
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.layout>
