<x-layouts.admin.layout>
    <x-admin.container.header title="Development" name="developments" model="create-development-model"/>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Developments</h3>
                        </div>
                        <div class="card-table table-responsive">
                            <table id="developments" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($developments as $development)
                                        <tr>
                                            <td class="ms-1">{{ $development->name }}</td>
                                            <td class="ms-1">{{ $development->category }}</td>

                                            <td>
                                                {{ Str::limit(strip_tags($development->description), 30, '...') }}
                                                @if($development->description)
                                                    <x-admin.model.description :id="$development->id" :description="$development->description"/>
                                                @endif
                                            </td>
                                            <td class="ms-1">
                                                <img width="100px" src="{{ url($development->image) }}" alt="{{ $development->name }}">
                                            </td>

                                            <td class="text-muted">
                                                <a href="{{ route('admin.developments.edit', $development->id) }}" class="btn btn-info" role="button">@lang('admin.Edit')</a>
                                                <x-admin.button.delete route="admin.developments.destroy" :id="$development->id" />
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

    <div class="modal modal-blur fade" id="create-development-model" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Development</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="@lang('admin.Close')"></button>
                </div>
                <form action="{{ route('admin.developments.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">@lang('admin.Name')</label>
                            <input type="text" class="form-control" name="name" placeholder="@lang('admin.Name')" required/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Categoty</label>
                            <select type="text" class="form-control" name="category" placeholder="Categoty" required>
                                <option value="Residential">Residential</option>
                                <option value="Commercial">Commercial</option>
                            </select>
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

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <div class="form-label">Images (you can select multiple images)</div>
                                    <input name="gallery_photos[]" type="file" class="form-control" multiple/>
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
            new DataTable('#developments');
        </script>
    </x-slot>

</x-layouts.admin.layout>
