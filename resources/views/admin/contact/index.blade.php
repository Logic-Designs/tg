<x-layouts.admin.layout>
    <x-admin.container.header title="Contacts"/>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contacts</h3>
                        </div>
                        <div class="card-table table-responsive">
                            <table id="contacts" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>@lang('admin.Action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td class="ms-1">{{ $contact->first_name }}</td>
                                            <td>{{ $contact->last_name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td class="text-muted">
                                                <x-admin.button.delete route="admin.contacts.destroy" :id="$contact->id" />
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
            new DataTable('#contacts');
        </script>
    </x-slot>
</x-layouts.admin.layout>
