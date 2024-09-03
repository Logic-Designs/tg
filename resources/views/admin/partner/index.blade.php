<x-layouts.admin.layout>
    <x-admin.container.header title="Partner" name="partners" model="create-partner-model"/>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Partners</h3>
                        </div>
                        <div class="card-table table-responsive">
                            <table id="partners" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <!-- <th>@lang('admin.Partner Title')</th>
                                        <th>@lang('admin.Description')</th> -->
                                        <th>@lang('admin.Image')</th>
                                        <th>@lang('admin.Action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($partners as $partner)
                                        <tr>

                                            <td class="ms-1">
                                                <img width="100px" src="{{ url($partner->photo) }}" alt="{{ __('admin.Partner') }}">
                                            </td>

                                            <td class="text-muted">
                                                <a href="{{ route('admin.partners.edit', $partner->id) }}" class="btn btn-info" role="button">@lang('admin.Edit')</a>
                                                <x-admin.button.delete route="admin.partners.destroy" :id="$partner->id" />
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <x-slot name="extra_script">
                                <script>
                                    new DataTable('#partners');
                                </script>
                            </x-slot>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
    class="modal modal-blur fade"
    id="create-partner-model"
    tabindex="-1"
    role="dialog"
    aria-hidden="true"
>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('admin.Create Partner')</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="@lang('admin.Close')"
                ></button>
            </div>
            <form action="{{ route('admin.partners.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <div class="form-label">@lang('admin.Image')</div>
                                <input name="photo" type="file" class="form-control" required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a
                        href="#"
                        class="btn btn-link link-secondary"
                        data-bs-dismiss="modal"
                    >
                        @lang('admin.Cancel')
                    </a>
                    <button class="btn btn-primary ms-auto" type="submit">
                        @lang('admin.Create')
                    </button>
                </div>
            </form>


        </div>
    </div>
</div>

</x-layouts.admin.layout>
