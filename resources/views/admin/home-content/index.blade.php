<x-layouts.admin.layout>
    <x-admin.container.header :title="__('admin.Home Content')"/>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <form action="{{ route('admin.home-content.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">@lang('admin.Title')</label>
                            <input type="text" class="form-control" name="title" value="{{ $home ? $home->title : '' }}"
                                placeholder="@lang('admin.Title')" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">@lang('admin.Description')</label>
                            <textarea class="form-control ckeditor-textarea" name="description"
                                placeholder="@lang('admin.Description')">{{ $home ? $home->description : '' }}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        @if($home)
                            <img src="{{ url($home->image ?: '') }}" alt="home">
                        @endif
                        <div class="mb-3">
                            <div class="form-label">@lang('admin.Image')</div>
                            <input name="image" type="file" class="form-control" />
                        </div>
                    </div>

                    <div class="col-xl-12">

                        <div class="col-lg-3">
                            <label class="form-label">Num of Years</label>
                            <input type="number" class="form-control" name="num_of_yesrs" value="{{ $home ? $home->num_of_yesrs : '' }}"
                                placeholder="Num of Years" />
                        </div>

                        <div class="col-lg-3">
                            <label class="form-label">Num of Projects</label>
                            <input type="number" class="form-control" name="num_of_projects" value="{{ $home ? $home->num_of_projects : '' }}"
                                placeholder="Num of Projects" />
                        </div>

                        <div class="col-lg-3">
                            <label class="form-label">Num of Units</label>
                            <input type="number" class="form-control" name="num_of_units" value="{{ $home ? $home->num_of_units : '' }}"
                                placeholder="Num of Units" />
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">Contact Us Description</label>
                            <textarea class="form-control ckeditor-textarea" name="contact_us_description"
                                placeholder="Contact Us Discription">{{ $home ? $home->contact_us_description : '' }}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <button class="btn btn-primary ms-auto">@lang('admin.Edit')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin.layout>
