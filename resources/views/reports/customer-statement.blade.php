@extends('layouts.app')
@section("pageTitle",'Customer Repayments Report')
{{--@section("pageSubtitle",'create, edit, delete Claims')--}}
@section("breadcrumbs")
    <li>Reports</li>
    <li>Repayment Report</li>
@endsection
@section('content')
    {{--<div class="col-md-12">--}}
    {{--<div class="box">--}}
    {{----}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<section class="content-header">--}}
    {{--<h1 class="pull-right">--}}
    {{--<a href="{{ url('claims/create') }}" class="btn btn-primary btn-sm" style="margin-top: -10px;margin-bottom: 5px" >Create New</a>--}}
    {{--</h1>--}}
    {{--</section>--}}
    <section class="invoice no-print">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('getCustomerStatement') }}" id="policies-form" method="post">
                    {{ csrf_field() }}
                    <div class="col-md-5 col-md-offset-2">
                        <label>Tenant</label>
                        <select name="mf_id" class="form-control select2" required>
                            <option value="">Select tenant</option>
                            @if(count($customers))
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->full_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-2 ">
                        <button type="submit" class="btn btn-primary " style="margin-top: 25px;">Search</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
    @if(isset($statements))
        <section class="invoice">
            <!-- title row -->

            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">

                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col text-center">
                    {{--<address>--}}
                        {{--<h3>Marite Enterprises Limited</h3>--}}
                        {{--Lentile House, 2<sup>nd</sup> Floor Rm 213<br>--}}
                        {{--P.O Box 1440 - 10400 Nanyuki<br>--}}
                        {{--<br>--}}
                        {{--Phone number: 0700634000<br>--}}
                        {{--Email: info@mariteenterprises.co.ke--}}
                    {{--</address>--}}
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">

                </div>
                <!-- /.col -->
            </div>

            <div class="row">
                <div class="col-md-12 table-responsive">
                    <h4 class=""> Statement for: <strong>{{ $client->full_name }}</strong></h4>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Amount</th>
                            <th>Repayment</th>
                            <th>Expected Date</th>
                            <th>Date Payed</th>
                            <th>Days late</th>
                            <th>Loan Balance</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($statements))
                            @foreach($statements as $statement)
                                <?php  ?>
                                <tr>
                                    <td>{{ number_format($statement->amount) }}</td>
                                    <td>{{ toNumber($statement->schedule)}}</td>
                                    <td>{{ \Carbon\Carbon::parse($statement->due_date)->toFormattedDateString()}}</td>
                                    <td>{{ ($statement->balance < $statement->amount)?\Carbon\Carbon::parse($statement->updated_at)->toFormattedDateString(): '-'}}</td>
                                    <td>{{ (\Carbon\Carbon::parse($statement->due_date) < \Carbon\Carbon::parse($statement->updated_at))? \Carbon\Carbon::parse($statement->due_date)->diffInDays(\Carbon\Carbon::parse($statement->updated_at)) : '0' }}</td>
                                    <td><?php echo ($statement->balance == 0)? '<label class="label label-success">Fully Paid</label>':number_format($statement->balance) ?></td>
                                    {{--<td >{{ \Carbon\Carbon::parse($statement['date'])->toFormattedDateString() }}</td>--}}
                                    {{--<td>{{ $statement['bill_type'] }}</td>--}}
                                    {{--<td style="text-align: right">{{ number_format($statement['credit'],2) }}</td>--}}
                                    {{--<td style="text-align: right">{{ number_format($statement['debit'],2) }}</td>--}}
                                    {{--<td style="text-align: right">{{ number_format($statement['debit'],2) }}</td>--}}
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="4">No records found</td>
                            </tr>
                        @endif

                        </tbody>
                    </table>
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
    @endif
    <!-- /.content -->
    <div class="clearfix"></div>
@endsection

@push('js')
    <script>
        // $("#policies-form").on('submit',function(e){
        //     e.preventDefault();
        //     var data = {
        //         "date_from": $('#date-from').val(),
        //         "date_to": $('#date-to').val(),
        //     };
        //     $.ajax({
        //         url: $(this).attr('action'),
        //         type:'POST',
        //         dateType: 'json',
        //         data: data,
        //         success:function(data){
        //             var html = '';
        //             if(data.length > 0){
        //                 for(var i=0; i<data.length; i++){
        //                     html += '<tr>' +
        //                         '<td>'+ data[i].policy_number+'</td>' +
        //                         '<td>'+ data[i].payment_mode+'</td>' +
        //                         '<td>'+ data[i].reference+'</td>' +
        //                         '<td>'+ data[i].amount_paid+'</td>'
        //                 }
        //                 $('#tbody').html(html)
        //             }else{
        //                 $('#tbody').html('<tr><td colspan="4" class="text-center">No records available</td></tr>');
        //             }
        //
        //
        //         }
        //     })
        // })
        $('a#customerStatement').parent('li').addClass('active').parent('ul').parent().addClass('active');

    </script>
@endpush