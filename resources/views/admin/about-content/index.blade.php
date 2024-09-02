<x-layouts.admin.layout>
    <x-admin.container.header :title="__('admin.About Content')"/>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <form action="{{ route('admin.about-content.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">@lang('admin.About')</label>
                            <textarea class="form-control ckeditor-textarea" name="about" placeholder="@lang('admin.About')">
                                {{ $about ? $about->about : '' }}
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mission</label>
                            <textarea class="form-control ckeditor-textarea" name="mission" placeholder="Mission">
                                {{ $about ? $about->mission : '' }}
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Vission</label>
                            <textarea class="form-control ckeditor-textarea" name="vission" placeholder="Vission">
                                {{ $about ? $about->vission : '' }}
                            </textarea>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">Career Title</label>
                            <input type="text" name="career_title" class="form-control" value="{{ $about ?$about->career_title: '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Career Content</label>
                            <textarea class="form-control ckeditor-textarea" name="career_content" placeholder="Career Content">
                                {{ $about ? $about->career_content : '' }}
                            </textarea>
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <button class="btn btn-primary ms-auto">@lang('admin.Edit')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin.layout>
