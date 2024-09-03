<x-layouts.admin.layout>
    <x-admin.container.header title="Careers"/>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Careers</h3>
                        </div>
                        <div class="card-table table-responsive">
                            <table id="careers" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>CV</th>
                                        <th>@lang('admin.Action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($careers as $career)
                                        <tr>
                                            <td class="ms-1">{{ $career->first_name }}</td>
                                            <td>{{ $career->last_name }}</td>
                                            <td>{{ $career->email }}</td>
                                            <td>{{ $career->phone_number }}</td>
                                            <td><a href="{{ url($career->cv) }}">CV</a></td>
                                            <td class="text-muted">
                                                <x-admin.button.delete route="admin.careers.destroy" :id="$career->id" />
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

    <x-slot name="extra_script">
        <script>
            new DataTable('#careers');
        </script>
    </x-slot>
</x-layouts.admin.layout>
