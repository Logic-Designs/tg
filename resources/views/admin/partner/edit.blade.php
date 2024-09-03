<x-layouts.admin.layout>
    <x-admin.container.header title="Partner" name="partners" :back="true" />
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <form action="{{ route('admin.partners.update', $partner->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <div class="col-lg-6">
                        @if($partner->photo)
                            <img src="{{ url($partner->photo) }}" alt="partner">
                        @endif
                        <div class="mb-3">
                            <label class="form-label">@lang('admin.Image')</label>
                            <input name="photo" type="file" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button class="btn btn-primary ms-auto">
                            @lang('admin.Edit')
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin.layout>
