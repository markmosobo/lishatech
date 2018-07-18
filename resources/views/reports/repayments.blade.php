@extends('layouts.app')
@section("pageTitle",'Expected Repayments Report')
{{--@section("pageSubtitle",'create, edit, delete Claims')--}}
@section("breadcrumbs")
    <li>Reports</li>
    <li class="active">Expected Repayments</li>
@endsection
@section('content')
    <section class="invoice no-print">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3">
                    <label >Search By</label>
                    <div class="form-group">
                        <input type="radio" checked name="filter" class="i-check-line filter" value="pre-defined"><label>Pre Defined</label>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="filter" class="i-check-line filter" value="date-range"><label> Date Range</label>
                    </div>
                </div>
                <div class="col-md-9">
                        <div class="form-group" id="pre-defined-div" style="margin-top: 18px;">
                            <label>Select Period</label>
                            <select name="period" class="form-control select2" id="pre-defined-select">
                                <option value="today">Today</option>
                                <option value="tomorrow">Tomorrow</option>
                                <option value="this-week">This Week</option>
                                <option value="this-month">This Month</option>
                            </select>
                        </div>
                    <div class="form-group" id="date-range-div" style="margin-top: 18px;display: none;">
                        <form action="{{ url('getExpectedRepayments') }}" id="policies-form" method="post">
                            {{ csrf_field() }}
                            <div class="col-md-5">
                                <label>From</label>
                                <input type="date" required class="form-control" id="date-from" name="from">
                            </div>
                            <div class="col-md-5">
                                <label>To</label>
                                <input type="date" required class="form-control" id="date-to" name="from">
                            </div>
                            <div class="col-md-2 ">
                                <button type="submit" class="btn btn-primary " style="margin-top: 25px;">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="invoice">
        <!-- title row -->

        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">

            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col text-center">

                <address>
                    <strong>Expected Repayments</strong><br>
                    {{--795 Folsom Ave, Suite 600<br>--}}
                    {{--San Francisco, CA 94107<br>--}}
                    {{--Phone: (555) 539-1037<br>--}}
                    {{--Email: john.doe@example.com--}}
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">

            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info no-print">

            <div class="col-sm-4 text-center col-md-offset-8 invoice-col">
                <p> <h3 class="total-amount inline"></h3></p>
            </div>
            <!-- /.col -->
        </div>

        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Phone Number</th>
                        <th>Repayment Date</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody id="tbody">
                        @if(count($repayments))
                            @foreach($repayments as $repayment)
                                <tr>
                                    <td>{{ $repayment->full_name }}</td>
                                    <td>{{ $repayment->phone_number }}</td>
                                    <td>{{ \Carbon\Carbon::parse($repayment->due_date)->toFormattedDateString() }}</td>
                                    <td>{{ $repayment->balance }}</td>
                                </tr>
                                @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td><h3>Total</h3></td>
                                <td><h3>{{ number_format($repayments->sum('balance')) }} Ksh</h3></td>
                            </tr>
                            @else
                            <tr>
                                <td colspan="4" class="text-center">No records </td>
                            </tr>
                    @endif
                    </tbody>
                    <tfoot id="total-foot" style="display: none">
                    <tr>
                        <td></td>
                        <td></td>
                        <td id="total"><h3>Total</h3></td>
                        <td ><h3 class="total-amount"></h3></td>
                    </tr>
                    </tfoot>
                </table>
                <div class="col-md-4 col-md-offset-8">


                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->


        <!-- this row will not appear when printing -->
        <br>
        <br>
        <div class="row no-print">
            <div class="col-xs-12">

                <a onclick="window.print()" target="_blank" class="btn btn-default pull-right"><i class="fa fa-print"></i> Print</a>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
@endsection

@push('js')
    <script>

        $('.filter').on('ifChecked',function(){
            var value = $(this).val()
            if(value === 'date-range'){
                $('#date-range-div').show();
                $('#pre-defined-div').hide();
            }else{
                $('#date-range-div').hide();
                $('#pre-defined-div').show();
            }
        });

        $("#pre-defined-select").on('change',function(){
            let val = $(this).val();
            let data = {
                'filter':'pre-defined',
                'value':val
            };

            $.ajax({
                url: '{{ url('getExpectedRepayments') }}',
                type:'POST',
                dateType: 'json',
                data: data,
                success:function(data){
                    loadTable(data);
                }
            })
        });

        function loadTable(data){
            let html = '';
            if(data.repayments.length){
                for(var i=0; i<data.repayments.length;i++){
                    var dueDate = new Date(data.repayments[i].due_date);
                    html += '<tr>' +
                        '<td>'+ data.repayments[i].full_name+'</td>'+
                        '<td>'+ data.repayments[i].phone_number+'</td>'+
                        '<td>'+ dueDate.toDateString() +'</td>'+
                        '<td style="text-align: left">'+ data.repayments[i].balance+'</td>' +
                        '</tr>';
                }
                $('.total-amount').html( Number(data.total).toLocaleString('en')+ ' Ksh');
                $('#total-foot').show();
            }else{
                html += '<tr><td colspan="4" class="text-center">No records </td></tr>'
                $('#total-foot').hide();
                $('.total-amount').html("");
            }

            $('#tbody').html(html);
        }

        $("#policies-form").on('submit',function(e){
            e.preventDefault();
            var data = {
                'filter':'date-range',
                "date_from": $('#date-from').val(),
                "date_to": $('#date-to').val(),
            };
            console.log(data);
            $.ajax({
                url: $(this).attr('action'),
                type:'POST',
                dateType: 'json',
                data: data,
                success:function(data){
                    loadTable(data);
                }
            })
        })
    </script>
@endpush