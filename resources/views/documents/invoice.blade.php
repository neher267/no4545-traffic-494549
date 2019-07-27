<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('css/invoice/generator.min.css')}}" media="all">
    <meta charset="utf-8">
    <title>Invoice</title>

    <link rel="stylesheet" href="{{asset('css/invoice/template.css')}}">
</head>

<body>
    <div id="container">

        <section id="memo">
            <div class="logo">
                <img src="{{asset('frontend/img/logo/logo.png')}}" style="display: block;">
            </div>

            <div class="company-info">
                <span data-ibcl-id="company_name" class="ibcl_company_name" title="Enter your company name">{{config('app.name')}}</span>

                <div class="separator less"></div>

                <span data-ibcl-id="company_address" class="ibcl_company_address" title="Enter company's address">House-278 (2nd Floor), Road-19, New DOHS, Mohakhali, Dhaka-1212, Bangladesh</span>

                <br>

                <span data-ibcl-id="company_email_web" class="ibcl_company_email_web" title="Enter company's web and email address">http://eclsystem.com | info@eclsystem.com</span>
                <span data-ibcl-id="company_phone_fax" class="ibcl_company_phone_fax" title="Enter company's contact phones">+880-9611222888</span>
            </div>
        </section>

        <section id="invoice-title-number">

            <span id="title" data-ibcl-id="invoice_title" class="ibcl_invoice_title" title="" data-original-title="Enter invoice title">INVOICE</span>
            <div class="separator"></div>
            <!-- <span id="number" data-ibcl-id="invoice_number" class="ibcl_invoice_number" title="Enter invoice number">#1</span> -->

        </section>

        <div class="clearfix"></div>

        <section id="invoice-info">
            <div>
                <span data-ibcl-id="issue_date_label" class="ibcl_issue_date_label" title="" data-original-title="Enter issue date label">Issue Date:</span>
               <!--  <span data-ibcl-id="due_date_label" class="ibcl_due_date_label" title="Enter invoice due date label">Due Date:</span> -->
                <!-- <span data-ibcl-id="net_term_label" class="ibcl_net_term_label" title="Enter net days label">Net:</span> -->
                <span data-ibcl-id="currency_label" class="ibcl_currency_label" title="Enter invoice currency label">Currency:</span>
            </div>

            <div>
                <span data-ibcl-id="issue_date" class="ibcl_issue_date" title="Select invoice issue date" data-date="11/07/2018">{{date('M d, Y')}}</span>
                <!-- <span data-ibcl-id="due_date" class="ibcl_due_date" title="Select invoice due date" data-date="11/28/2018">11/28/2018</span> -->
                <!-- <span data-ibcl-id="net_term" class="ibcl_net_term" title="Enter invoice net days">21</span> -->
                <span data-ibcl-id="currency" class="ibcl_currency" title="" data-original-title="Enter invoice currency">BDT</span>
            </div>
        </section>

        <section id="client-info">
            <br>
            <span data-ibcl-id="bill_to_label" class="ibcl_bill_to_label" title="Enter bill to label">Bill to:</span>
            <div>
                <span class="client-name ibcl_client_name" data-ibcl-id="client_name" title="Enter client name">
                    {{$student->name}}
                </span>
            </div>

            <div>
                <span data-ibcl-id="client_city_zip_state" class="ibcl_client_city_zip_state" title="Enter client city, zip, country">{{$student->address}}</span>
            </div>

            <div>
                <span data-ibcl-id="client_phone_fax" class="ibcl_client_phone_fax" title="Enter client pnone &amp; fax">{{$student->email}}</span>
            </div>

            <!-- <div>
                <span data-ibcl-id="client_email" class="ibcl_client_email" title="Enter client email">raduan.cse@gmail.com</span>
            </div> -->
        </section>

        <div class="clearfix"></div>

        <section id="items">

            <table cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <th data-ibcl-id="item_row_number_label" class="ibcl_item_row_number_label" title=""></th>
                        <th data-ibcl-id="item_description_label" class="ibcl_item_description_label" title="Enter item header">Course</th>
                        <th data-ibcl-id="item_quantity_label" class="ibcl_item_quantity_label" title="Enter quantity header">Duraton</th>
                        <th data-ibcl-id="item_price_label" class="ibcl_item_price_label" title="Enter price header">Course Fee</th>
                        <th data-ibcl-id="item_discount_label" class="ibcl_item_discount_label" title="Enter discount header">Discount</th>
                        <th data-ibcl-id="item_tax_label" class="ibcl_item_tax_label" title="Enter tax header">Tax</th>
                        <th data-ibcl-id="item_line_total_label" class="ibcl_item_line_total_label" title="Enter line total header">Linetotal</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>{{$course->name}}</td>
                        <td>{{$course->duration}} Hrs</td>
                        <td>{{$course->pivot->course_fee}}</td>
                        <td>{{(int)$course->pivot->course_fee - (int)$course->pivot->after_discunt}}.00</td>
                        <td>0.00</td>
                        <td>{{$course->pivot->after_discunt}}</td>
                    </tr>
                </tbody>
            </table>

        </section>

        <section id="sums">
            <table cellpadding="0" cellspacing="0">
                <tbody>
                    <!-- <tr>
                        <th data-ibcl-id="amount_subtotal_label" class="ibcl_amount_subtotal_label" title="Enter subtotal label">Subtotal:</th>
                        <td data-ibcl-id="amount_subtotal" class="ibcl_amount_subtotal" title="">{{$course->pivot->after_discunt}}</td>
                    </tr>

                    <tr data-iterate="tax" style="display: table-row;">
                        <th data-ibcl-id="tax_name" class="ibcl_tax_name" title="Enter tax label">Tax :</th>
                        <td data-ibcl-id="tax_value" class="ibcl_tax_value" title="" data-ib-value="0">0.00</td>
                    </tr> -->
                    

                    <tr>
                        <th data-ibcl-id="amount_total_label" class="ibcl_amount_total_label" title="Enter total label">Total:</th>
                        <td data-ibcl-id="amount_total" class="ibcl_amount_total" title="">{{$course->pivot->after_discunt}}</td>
                    </tr>
                    @if($tran_amount-$student_transaction->amount>0)
                    <tr data-hide-on-quote="true">
                        <th data-ibcl-id="amount_paid_label" class="ibcl_amount_paid_label" title="Enter amount paid label">Previous Payment Amount:</th>
                        <td data-ibcl-id="amount_paid" class="ibcl_amount_paid add_currency_left" title="Enter amount paid" data-currency="">{{$tran_amount-$student_transaction->amount}}.00</td>
                    </tr>
                    @endif

                    <tr data-hide-on-quote="true">
                        <th data-ibcl-id="amount_paid_label" class="ibcl_amount_paid_label" title="Enter amount paid label">Payment Amount:</th>
                        <td data-ibcl-id="amount_paid" class="ibcl_amount_paid add_currency_left" title="Enter amount paid" data-currency="">{{$student_transaction->amount}}</td>
                    </tr>

                    <tr class="amount-total">
                        <th data-ibcl-id="amount_total_label" class="ibcl_amount_total_label" title="Enter total label">Due:</th>
                        <td data-ibcl-id="amount_total" class="ibcl_amount_total" title="">{{$course->pivot->after_discunt - $tran_amount}}.00</td>
                    </tr>

                    <tr data-hide-on-quote="true">
                        <th data-ibcl-id="amount_due_label" class="ibcl_amount_due_label" title="Enter amount due label">Payment Status</th>
                        <td data-ibcl-id="amount_due" class="ibcl_amount_due" title="">
                            <?php 
                                $due = $course->pivot->after_discunt - $tran_amount;
                                if($course->pivot->payment_status){
                                    if ($due>0) {
                                     echo "Due";
                                    }
                                    else{
                                        echo "Paid";
                                    }
                                }
                                else{
                                    echo "Due";
                                }
                                
                            ?>
                        </td>
                    </tr>

                </tbody>
            </table>

        </section>

        <div class="clearfix"></div>

        <section id="terms">
            <span class="hidden ibcl_terms_label" data-ibcl-id="terms_label" title="Enter terms and notes label">Terms &amp; Notes</span>
            <div data-ibcl-id="terms" class="ibcl_terms" title="Enter invoice terms and notes">{{$student->name}}, thank you very much. We really appreciate your decision.

                <br>{{$course->pivot->payment_status ? '':'Please give payments in time.'}}</div>
        </section>

        <div class="bottom-circles">
            <section>
                <div>
                    <div></div>
                </div>
                <div>
                    <div>
                        <div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>