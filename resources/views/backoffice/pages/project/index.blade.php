@extends('backoffice.layouts.main')
@php
    $subTitle = 'Kaybolan Yıl İşlemleri';
    $addButtonRoute = route('admin.project.create');
@endphp
@section('content')
    <div class="table-responsive">
 
        <table class="table table-striped gy-7 gs-7 data-table">
            <thead>
                <tr class="fw-bold fs-6 text-gray-800 border-gray-200">
                    <th width="5%">#</th>
                    <th>Resim</th>
                    <th>Başlık</th>
                    <th>Yayın Durumu</th>

                    <th width="13%">İşlemler</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $(function() {

            var table = $('.data-table').DataTable({
                processing: true,
                "oLanguage": {
                    "sUrl": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Turkish.json"
                },
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.project.index') }}",
               

                },

                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                 
                    {
                        data: 'status',
                        name: 'status'
                    },
                 
                    
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
           
        });
    </script>
@endsection
