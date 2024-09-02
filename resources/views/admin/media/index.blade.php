<x-layouts.admin.layout>
    <x-admin.container.header title="Media" name="media" model="create-media-model"/>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Medias</h3>
                        </div>
                        <div class="card-table table-responsive">
                            <table id="medias" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($medias as $media)
                                        <tr>
                                            <td class="ms-1">{{ $media->title }}</td>

                                            <td>
                                                {{ Str::limit(strip_tags($media->description), 30, '...') }}
                                                @if($media->description)
                                                    <x-admin.model.description :id="$media->id" :description="$media->description"/>
                                                @endif
                                            </td>
                                            <td class="ms-1">
                                                <img width="100px" src="{{ url($media->image) }}" alt="{{ $media->name }}">
                                            </td>

                                            <td class="text-muted">
                                                <a href="{{ route('admin.media.sub.index', $media->id) }}" class="btn btn-success" role="button">Sub Data</a>
                                                <a href="{{ route('admin.media.edit', $media->id) }}" class="btn btn-info" role="button">@lang('admin.Edit')</a>
                                                <x-admin.button.delete route="admin.media.destroy" :id="$media->id" />
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

    <div class="modal modal-blur fade" id="create-media-model" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Media</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="@lang('admin.Close')"></button>
                </div>
                <form action="{{ route('admin.media.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="@lang('admin.Name')" required/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">@lang('admin.Description')</label>
                            <textarea class="form-control ckeditor-textarea" name="description" placeholder="@lang('admin.Description')"></textarea>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <div class="form-label">@lang('admin.Image')</div>
                                    <input name="image" type="file" class="form-control" required/>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">@lang('admin.Cancel')</a>
                        <button class="btn btn-primary ms-auto" type="submit">@lang('admin.Create')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-slot name="extra_script">
        <script>
            new DataTable('#medias');
        </script>
    </x-slot>

</x-layouts.admin.layout>
