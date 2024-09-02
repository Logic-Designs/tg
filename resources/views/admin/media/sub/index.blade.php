<x-layouts.admin.layout>
    <x-admin.container.header title="Sub Media for {{ $media->title }}"/>
    <div class="page-body">
        <div class="container-xl">
            <!-- Row for Photos Table -->
            <div class="row row-deck row-cards mb-4">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Photos</h3>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-photo-modal">Add Photo</a>
                        </div>
                        <div class="card-table table-responsive">
                            <table id="photos" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($photos as $photo)
                                        <tr>
                                            <td>{{ $photo->title }}</td>
                                            <td>{{ Str::limit(strip_tags($photo->description), 30, '...') }}</td>
                                            <td>
                                                <img width="100px" src="{{ url($photo->photo) }}" alt="{{ $photo->title }}">
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.media.sub.edit', ['id' => $photo->id, 'type' => 'photo']) }}" class="btn btn-info">Edit</a>
                                                <x-admin.button.delete route="admin.media.sub.delete" :id="$photo->id" />
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row for Videos Table -->
            <div class="row row-deck row-cards">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Videos</h3>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-video-modal">Add Video</a>
                        </div>
                        <div class="card-table table-responsive">
                            <table id="videos" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>YouTube URL</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($videos as $video)
                                        <tr>
                                            <td>{{ $video->title }}</td>
                                            <td>{{ Str::limit(strip_tags($video->description), 30, '...') }}</td>
                                            <td>
                                                <a href="{{ $video->youtube_url }}" target="_blank">{{ $video->youtube_url }}</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.media.sub.edit', ['id' => $video->id, 'type' => 'video']) }}" class="btn btn-info">Edit</a>
                                                <x-admin.button.delete route="admin.media.sub.delete" :id="$video->id" />
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Photo Modal -->
    <div class="modal modal-blur fade" id="create-photo-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Photo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.media.sub.store', $media->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="type" value="photo">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Photo Title" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" placeholder="Description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input type="file" class="form-control" name="photo" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Photo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Create Video Modal -->
    <div class="modal modal-blur fade" id="create-video-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.media.sub.store', $media->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="type" value="video">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Video Title" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" placeholder="Description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">YouTube URL</label>
                            <input type="url" class="form-control" name="youtube_url" placeholder="https://youtube.com/..." required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Video</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-slot name="extra_script">
        <script>
            new DataTable('#photos');
            new DataTable('#videos');
        </script>
    </x-slot>
</x-layouts.admin.layout>
