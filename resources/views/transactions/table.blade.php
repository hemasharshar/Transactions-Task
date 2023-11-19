@push('third_party_stylesheets')
    @include('layouts.datatables_css')
@endpush
<!-- Data Filter -->
<div class="card-body p-3">
    <form method="post" action="{!! route('transactions.export') !!}">
        <div class="row">
            @csrf
            <div class="form-group col-sm-4">
                <label>Date From:</label>
                <input type="date" id="from_date" name="from_date" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label>Date To:</label>
                <input type="date" id="to_date" name="to_date" class="form-control">
            </div>
            <div class="form-group col-sm-12">
                <button type="submit" class="btn btn-primary">تصدير</button>
            </div>
        </div>
    </form>
    <div class="">
        <table class="table" id="transactions-table">
            <thead>
            <tr>
                <th>Customer</th>
                <th>Amount</th>
                <th>Due Date</th>
                <th>Vat</th>
                <th>Vat Inclusive</th>
                <th>Status</th>
            </tr>
            </thead>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $transactions])
        </div>
    </div>
</div>


@push('third_party_scripts')
    @include('layouts.datatables_js')
    <script>
        $(function () {
            var dataTableTable = $('#transactions-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "{{ route('transactions.getData') }}",
                    "type": "get"
                },
                columns: [
                    {data: 'user.name', name: 'user.name'},
                    {data: 'amount', name: 'amount'},
                    {data: 'due_date', name: 'due_date'},
                    {data: 'vat', name: 'vat'},
                    {data: 'vat_inclusive', name: 'vat_inclusive'},
                    {data: 'status_format', name: 'status'},
                ]
            });
        });
    </script>
@endpush
