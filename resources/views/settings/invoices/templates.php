<script id="defaultTemplate" type="text/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner">
                <div class="row">
                    <div class="d-col-3">
                        <h1 class="d-fancy-title mb5"><?php echo __('messages.common.invoice') ?></h1>
                        <p class="font-color-gray"><?php echo __('messages.invoice.invoice_id') ?> #9CQ5X7</p>
                    </div>
                    <div class="d-col-1" style="padding-left: 10px !important">
                        <img src="<?php echo getLogoUrl() ?>"
                                                class="img-logo">
                    </div>
                </div>

                    <div class="col-md-3 mb-3">
                        <div class="col-66">
                            <small style="font-size: 15px; margin-bottom: 3px"><b><?php echo __('messages.common.from') ?></b></small><br>
                            <p class="p-text mb-0">{{:companyName}}</p>
                            <p class="p-text mb-0">{{:companyAddress}}</p>
                            <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="mb-2"><small class="from-font-size"><b><?php echo __('messages.common.to') ?></b></small><br></div>
                        <p class="p-text mb-3">&lt<?php echo __('messages.invoice.client_name')  ?>&gt</p>
                        <p class="p-text mb-3">&lt<?php echo __('messages.invoice.client_email')  ?>&gt</p>
                        <p class="p-text mb-3">&lt<?php echo __('messages.client_address')  ?>&gt</p>

                        <p class="p-text mb-0"><b><?php echo __('messages.invoice.invoice_date') ?>: </b> 25th Nov, 2020 8:03 AM</p>
                        <p class="p-text mb-0"><b><?php echo __('messages.invoice.due_date') ?>: </b> 26th Nov, 2020</p>
                    </div>
                    <!-- <div class="col-md-3 d-flex align-items-end ">
                        <div class="text-center">
                                <small  style="font-size: 15px; margin-bottom: 3px"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></small><br>
                                <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                        </div>
                    </div> -->
                </div>
                <div class="table d-table">
                    <div class="d-table-tr" style="background:{{:invColor}};color: #fff;">
                        <div class="d-table-th in-w-1" style="border: 1px solid #ccc;padding: 8px">#</div>
                        <div class="d-table-th in-w-2" style="border: 1px solid #ccc;padding: 8px"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3" style="border: 1px solid #ccc;padding: 8px"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right" style="border: 1px solid #ccc;padding: 8px"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="d-table-body">
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1" style="border: 1px solid #ccc;padding: 8px"><span>1</span></div>
                            <div class="d-table-td in-w-2" style="border: 1px solid #ccc;padding: 8px">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3" style="border: 1px solid #ccc;padding: 8px">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right" style="border: 1px solid #ccc;padding: 8px"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1" style="border: 1px solid #ccc;padding: 8px"><span>2</span></div>
                            <div class="d-table-td in-w-2" style="border: 1px solid #ccc;padding: 8px">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3" style="border: 1px solid #ccc;padding: 8px">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right" style="border: 1px solid #ccc;padding: 8px"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1" style="border: 1px solid #ccc;padding: 8px"><span>3</span></div>
                            <div class="d-table-td in-w-2" style="border: 1px solid #ccc;padding: 8px">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3" style="border: 1px solid #ccc;padding: 8px">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right" style="border: 1px solid #ccc;padding: 8px"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                        <div class="d-table-summary">
                            <div class="d-table-summary-item">
                                <div class="d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(300, true); ?></div>
                            </div>
                            <div class="d-table-summary-item">
                                <div class="d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(50, true); ?></div>
                            </div>
                            <div class="d-table-summary-item">
                                <div class="d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                <div class="d-table-value">0%</div>
                            </div>
                            <div class="d-table-summary-item">
                                <div class="d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(250, true); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="break-25"></div>
                 <div class="row">
                    <div class="d-col-3">
                        <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                        <p class="font-color-gray">
                        Paypal , Stripe & manual payment method accept.<br>
                        Net 10 – Payment due in 10 days from invoice date.<br>
                        Net 30 – Payment due in 30 days from invoice date.
                        </p>
                    </div>
                    <div class="d-col-3">
                        <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                        <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script id="newYorkTemplate" type="text/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-header">
                 <div class="ny-header-inner">
                      <div class="d-header-50">
                           <div class="d-header-brand">
                                <img src="<?php echo getLogoUrl() ?>" class="img-logo">
                           </div>
                           <div class="mt-3"></div>
                                <p class="p-text mb-0">{{:companyName}}</p>
                                <p class="p-text mb-0">{{:companyAddress}}</p>
                                <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                           </div>
                           <div class="d-header-50 d-right">
                                <div class="d-title"><?php echo __('messages.common.invoice') ?></div>
                                     <table class="summary-table">
                                          <tbody>
                                              <tr>
                                                  <td><strong><?php echo __('messages.invoice.invoice_id') ?>:</strong></td>
                                                  <td>#9B5QX7</td>
                                              </tr>
                                              <tr>
                                                <td><strong><?php echo __('messages.invoice.invoice_date') ?>:</strong></td>
                                                <td>25th Nov, 2020 8:03 AM</td>
                                              </tr>
                                              <tr>
                                                <td><strong><?php echo __('messages.invoice.due_date') ?>:</strong></td>
                                                <td>25 Nov 2020</td>
                                              </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                           </div>

                           <div class="d-body ">
                                <div class="d-bill">
                                    <div class="row">
                                      <div class="col-md-7">
                                         <strong class="to-font-size"><?php echo __('messages.common.to') ?></strong>
                                            <p class="p-text mb-0">&lt<?php echo __('messages.invoice.client_name')  ?>&gt</p>
                                            <p class="p-text mb-0">&lt<?php echo __('messages.invoice.client_email')  ?>&gt</p>
                                            <p class="p-text mb-0">&lt<?php echo __('messages.client_address')  ?>&gt</p><br>
                                      </div>
                                      <!-- <div class="col-md-5 d-flex align-items-end">
                                        <div>
                                      <strong  style="font-size: ; margin-right: 142px"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?>:</b></strong>
                                     <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                                     </div>
                                      </div> -->
                                    </div><br>
                                    <div class=table" width="100%">
                                         <div class="tu d-table-tr" style="background:{{:invColor}};color: white;padding: 0px 8px 0px 8px;">
                                            <div class="d-table-th in-w-1">#</div>
                                            <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                                            <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                                            <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                                        </div>
                                        <div class="d-table-body">
                                            <div class="d-table-tr" style="border-bottom: 1px solid {{:invColor}};">
                                                <div class="d-table-td in-w-1"><span>1</span></div>
                                                <div class="d-table-td in-w-2">
                                                    <pre><?php echo __('messages.item') ?> 1</pre>
                                                </div>
                                                <div class="d-table-td in-w-3">
                                                    1
                                                </div>
                                                <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                                            </div>
                                            <div class="d-table-tr" style="border-bottom: 1px solid {{:invColor}};">
                                                <div class="d-table-td in-w-1"><span>2</span></div>
                                                <div class="d-table-td in-w-2">
                                                    <pre><?php echo __('messages.item') ?> 2</pre>
                                                </div>
                                                <div class="d-table-td in-w-3">
                                                    1
                                                </div>
                                                <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                                            </div>
                                            <div  class="d-table-tr" style="border-bottom: 1px solid {{:invColor}};">
                                                <div class="d-table-td in-w-1"><span>3</span></div>
                                                <div class="d-table-td in-w-2">
                                                    <pre><?php echo __('messages.item') ?> 3</pre>
                                                </div>
                                                <div class="d-table-td in-w-3">
                                                    1
                                                </div>
                                                <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                                            </div>
                                        <div class="d-table-footer">
                                               <div class="d-table-controls"></div>
                                               <div class="d-table-summary">
                                                   <div class="d-table-summary-item">
                                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                                        <div class="d-table-value"><?php echo getCurrencyAmount(300, true); ?></div>
                                                   </div>
                                                   <div class="d-table-summary-item" style="border-top: 1px solid {{:invColor}}; border-bottom: 1px solid {{:invColor}};">
                                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                                        <div class="d-table-value"><?php echo getCurrencyAmount(50, true); ?></div>
                                                   </div>
                                                   <div class="d-table-summary-item">
                                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                                        <div class="d-table-value">0%</div>
                                                   </div>
                                                   <div class="d-table-summary-item" style="border-top: 1px solid {{:invColor}};border-bottom: 1px solid {{:invColor}};">
                                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                                        <div class="d-table-value"><?php echo getCurrencyAmount(250, true); ?></div>
                                                   </div>
                                               </div>
                                        </div>
                                    </div>
                           </div>
                      </div>
                      <div class="break-25"></div>
                      <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                 <p style="color:{{:invColor}}"><strong class="b"><?php echo __('messages.common.regards') ?>:</strong></p>
                 <span>{{:companyName}}</span>
            </div>
        </div>
    </div>

</script>

<script id="torontoTemplate" type="type/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner">
                <div class="row" style="margin-right: 15px">
                    <div class="t-col-2">
                        <img src="<?php echo getLogoUrl() ?>" class="img-logo">
                    </div>
                    <div class="t-col-2 text-right">
                        <p class="p-text mb-0">{{:companyName}}</p>
                        <p class="p-text mb-0">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                </div>
                <br>
                <div class="row" style="margin-right: 15px">
                    <div class="t-col-66">
                        <strong class="tu mb5 to-font-size" style="color:{{:invColor}}"><?php echo __('messages.common.to') ?></strong>
                        <p class="p-text">
                            &lt<?php echo __('messages.invoice.client_name')  ?>&gt;<br>
                            &lt<?php echo __('messages.invoice.client_email')  ?>&gt;<br>
                            &lt<?php echo __('messages.client_address')  ?>&gt;
                        </p>
                    </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="d-col-66">
                        <strong class="tu mb5" style="color:{{:invColor}};font-size: 18px"><?php echo __('messages.common.invoice') ?></strong>
                        <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="tu"><strong class="mb5"><?php echo __('messages.invoice.invoice_id') ?>:</strong></td>
                                <td class="text-right">#84R41W</td>
                            </tr>
                            <tr >
                                <td class="tu"><strong class="mb5"><?php echo __('messages.invoice.invoice_date') ?>:</strong></td>
                                <td class="text-right">25th Nov, 2020 8:03 AM</td>
                            </tr>
                            <tr>
                                <td class="tu"><strong class="mb5"><?php echo __('messages.invoice.due_date') ?>:</strong></td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                         </table>
                         </div>
                    </div>
                        <!-- <div class="col-lg-4 d-flex align-items-end justify-content-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="table d-table">
                        <div class="tu d-table-tr" style="color: {{:invColor}}; border-bottom: 1px solid {{:invColor}}; border-top: 1px solid {{:invColor}};">
                            <div class="d-table-th in-w-1">#</div>
                            <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                            <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                            <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                        </div>
                        <div class="d-table-body">
                            <div class="d-table-tr" style="border-bottom: 1px solid {{:invColor}};">
                                <div class="d-table-td in-w-1"><span>1</span></div>
                                <div class="d-table-td in-w-2">
                                    <pre><?php echo __('messages.item') ?> 1</pre>
                                </div>
                                <div class="d-table-td in-w-3">
                                    1
                                </div>
                                <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                            </div>
                            <div class="d-table-tr" style="border-bottom: 1px solid {{:invColor}};">
                                <div class="d-table-td in-w-1"><span>2</span></div>
                                <div class="d-table-td in-w-2">
                                    <pre><?php echo __('messages.item') ?> 2</pre>
                                </div>
                                <div class="d-table-td in-w-3">
                                    1
                                </div>
                                <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                            </div>
                            <div class="d-table-tr" style="border-bottom: 1px solid {{:invColor}};">
                                <div class="d-table-td in-w-1"><span>3</span></div>
                                <div class="d-table-td in-w-2">
                                    <pre><?php echo __('messages.item') ?> 3</pre>
                                </div>
                                <div class="d-table-td in-w-3">
                                    1
                                </div>
                                <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                            </div>
                        </div>
                        <div class="d-table-footer">
                            <div class="d-table-controls"></div>
                                <div class="d-table-summary">
                                   <div class="d-table-summary-item" border-top: 1px solid {{:invColor}}; border-bottom: 1px solid {{:invColor}};">
                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                        <div class="d-table-value"><?php echo getCurrencyAmount(300, true); ?></div>
                                   </div>
                                   <div  class="d-table-summary-item" border-top: 1px solid {{:invColor}}; border-bottom: 1px solid {{:invColor}};">
                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                        <div class="d-table-value"><?php echo getCurrencyAmount(50, true); ?></div>
                                   </div>
                                   <div  class="d-table-summary-item" border-top: 1px solid {{:invColor}}; border-bottom: 1px solid {{:invColor}};">
                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                        <div class="d-table-value">0%</div>
                                   </div>
                                   <div class="d-table-summary-item" border-top: 1px solid {{:invColor}};>
                                        <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                        <div class="d-table-value"><?php echo getCurrencyAmount(250, true); ?></div>
                                   </div>
                               </div>
                        </div>
                </div>
                <div class="break-25"></div>
                 <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                <div class="d-header-50">
                    <p style="color:{{:invColor}}"><strong class="b"><?php echo __('messages.common.regards') ?>:</strong></p>
                       <span>{{:companyName}}</span>
                </div>
            </div>
        </div>
    </div>





</script>

<script id="rioTemplate" type="type/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner">
                <div class="row">
                    <div class="r-col-3">
                        <h1 class="fancy-title tu mb5" style="color: {{:invColor}};font-size: 34px"><?php echo __('messages.common.invoice') ?></h1>
                    </div>
                    <div class="r-col-1">
                        <img src="<?php echo getLogoUrl() ?>"
                                              class="img-logo">
                    </div>
                </div>
                <div class="break-50"></div>
                <div class="row" style="margin-right: 15px">
                    <div class="r-col-66">
                        <strong class="tu mb5 from-font-size" style="color: {{:invColor}};"><?php echo __('messages.common.from') ?></strong>
                        <p class="p-text mb-0">{{:companyName}}</p>
                        <p class="p-text mb-0 w-75">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                    <div class="r-col-33">
                        <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="tu fwb" style="color: {{:invColor}};"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                <td class="text-right">#45C2R1</td>
                            </tr>
                            <tr>
                                <td class="tu fwb" style="color: {{:invColor}};"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                <td class="text-right">25th Nov, 2020 8:03 AM</td>
                            </tr>
                            <tr>
                                <td class="tu fwb" style="color: {{:invColor}};"><?php echo __('messages.invoice.due_date') ?>:</td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="col-80">
                         <div class="mb-3"><strong class="tu mb5 to-font-size" style="color: {{:invColor}};"><?php echo __('messages.common.to') ?></strong></div>
                                 <p class="p-text mb-2">&lt<?php echo __('messages.invoice.client_name')  ?>&gt;<br></p>
                                 <p class="p-text mb-2">&lt<?php echo __('messages.invoice.client_email')  ?>&gt;<br></p>
                                 <p class="p-text mb-2">&lt<?php echo __('messages.client_address')  ?>&gt;</p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 d-flex align-items-end">
                        <div class="text-center">
                            <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                             <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                        </div>
                    </div> -->
                </div>
                <div class="table d-table">
                    <div class="tu d-table-tr" style="border-top: 1px solid {{:invColor}};">
                        <div class="d-table-th in-w-1">#</div>
                        <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="d-table-body">
                        <div class="d-table-tr" style="border-top: 1px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>1</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr" style="border-top: 1px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>2</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr" style="border-top: 1px solid {{:invColor}}; border-bottom: 1px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>3</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                            <div class="d-table-summary">
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(300, true); ?></div>
                               </div>
                               <div class="d-table-summary-item" style="border-top: 1px solid {{:invColor}};">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(50, true); ?></div>
                               </div>
                               <div class="d-table-summary-item" style="border-top: 1px solid {{:invColor}};">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                    <div class="d-table-value">0%</div>
                               </div>
                               <div class="d-table-summary-item" style="border-top: 1px solid {{:invColor}}; border-bottom: 1px solid {{:invColor}};">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(250, true); ?></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="break-25"></div>
                     <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                    <div class="d-header-50">
                        <p style="color:{{:invColor}}"><strong class="b"><?php echo __('messages.common.regards') ?>:</strong></p>
                        <span>{{:companyName}}</span>
                </div>
            </div>
        </div>
    </div>





</script>

<script id="londonTemplate" type="type/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner">
                <div class="row">
                    <div class="l-col-3">
                        <h1 class="l-fancy-title tu mb5" style="color:{{:invColor}}"><?php echo __('messages.common.invoice') ?></h1>
                        <p class="p-text mb-0">{{:companyName}}</p>
                        <p class="p-text mb-0 w-75">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                    <div class="l-col-1">
                        <img src="<?php echo getLogoUrl() ?>"
                             class="img-logo">
                    </div>
                </div>
                <br>
                <div class="row" style="margin-right: 15px">
                    <div class="col-lg-9">
                        <strong class="tu mb5 to-font-size" style="color:{{:invColor}}"><?php echo __('messages.common.to') ?></strong>
                        <p class="p-text">
                            &lt<?php echo __('messages.invoice.client_name')  ?>&gt;<br>
                            &lt<?php echo __('messages.invoice.client_email')  ?>&gt;<br>
                            &lt<?php echo __('messages.client_address')  ?>&gt;
                        </p>
                        <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="tu fwb" style="color:{{:invColor}}"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                <td class="text-right">#2E5TS3</td>
                            </tr>
                            <tr>
                                <td class="tu fwb" style="color:{{:invColor}}"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                <td class="text-right">25th Nov, 2020 8:03 AM</td>
                            </tr>
                            <tr>
                                <td class="tu fwb" style="color:{{:invColor}}"><?php echo __('messages.invoice.due_date') ?>:</td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                        <!-- <div class="col-lg-3 d-flex align-items-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                 <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div> -->
                        </div>
                <div class="table d-table">
                    <div class="tu d-table-tr" style="border-top: 2px solid {{:invColor}}; border-bottom: 2px solid {{:invColor}};">
                        <div class="d-table-th in-w-1">#</div>
                        <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="d-table-body">
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>1</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>2</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr" style="border-bottom: 1px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>3</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                            <div class="d-table-summary">
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(300, true); ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(50, true); ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                    <div class="d-table-value">0%</div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="fwb f-b tu d-table-label"><strong style="color:{{:invColor}}"><?php echo __('messages.invoice.total') ?>:</strong></div>
                                    <div class="fwb f-b d-table-value" style="color:{{:invColor}}"><?php echo getCurrencyAmount(250, true); ?></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="break-25"></div>
                     <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                     </div>
                    <div class="break-50"></div>
                    <div class="row">
                        <div class="l-col-33"></div>
                    </div>
                    <div class="d-header-50">
                         <p style="color:{{:invColor}}"><strong class="b"><?php echo __('messages.common.regards') ?> :</strong></p>
                         <span>{{:companyName}}</span>
                    </div>
                </div>
            </div>
        </div>





</script>

<script id="istanbulTemplate" type="type/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner">
                <div class="row">
                    <div class="col-66">
                        <h1 class="i-fancy-title tu mb5" style="background:{{:invColor}};color : white;"><?php echo __('messages.common.invoice') ?></h1>
                    </div>
                    <div class="col-33">
                        <img src="<?php echo getLogoUrl() ?>"
                             class="img-logo">
                        <div class="break-25"></div>
                        <p class="p-text mb-0">{{:companyName}}</p>
                        <p class="p-text mb-0">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                </div>
                <br>
                <div class="row" style="margin-right: 15px">
                    <div class="col-lg-9">
                        <strong class="tu mb5 to-font-size"><?php echo __('messages.common.to') ?></strong>
                        <p class="p-text">
                            &lt<?php echo __('messages.invoice.client_name')  ?>&gt;<br>
                            &lt<?php echo __('messages.invoice.client_email')  ?>&gt;<br>
                            &lt<?php echo __('messages.client_address')  ?>&gt;
                        </p>


                            <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="tu fwb"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                <td class="text-right">#22DA93</td>
                            </tr>
                            <tr>
                                <td class="tu fwb"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                <td class="text-right">25th Nov, 2020 8:03 AM</td>
                            </tr>
                            <tr>
                                <td class="tu fwb"><?php echo __('messages.invoice.due_date') ?>:</td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                            </table>
                            </div>
                        <!-- <div class="col-lg-3 d-flex align-items-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                 <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div> -->
                    </div>

                <div class="table d-table">
                    <div class="tu d-table-tr" style="border-top: 2px solid {{:invColor}};">
                        <div class="d-table-th in-w-1">#</div>
                        <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="d-table-body">
                        <div class="d-table-tr" style="border-bottom: 1px solid #ffffff;">
                            <div class="d-table-td in-w-1"><span>1</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr" style="border-bottom: 1px solid #ffffff;">
                            <div class="d-table-td in-w-1"><span>2</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr" style="border-bottom: 2px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>3</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                            <div class="d-table-summary">
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(300, true); ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(50, true); ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                    <div class="d-table-value">0%</div>
                               </div>
                               <div class="d-table-summary-item" style="border-bottom: 2px solid {{:invColor}};">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(250, true); ?></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="break-25"></div>
                     <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                    <div class="d-header-50">
                        <br><p><strong class="b text-black"><?php echo __('messages.common.regards') ?>:</strong></p>
                        <span>{{:companyName}}</span>
                </div>
            </div>
        </div>
    </div>





</script>

<script id="mumbaiTemplate" type="text/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner" style="border-top: 15px solid {{:invColor}}">
                <div class="row">
                    <div class="d-col-3">
                        <h1 class="fancy-title mb5"><?php echo __('messages.common.invoice') ?></h1>
                    </div>
                    <div class="d-col-1" style="padding-left: 10px !important">
                    <img  src="<?php echo getLogoUrl() ?>"
                                              class="img-logo">
                    </div>
                </div>
                <div class="break-50"></div>
                <div class="row">
                    <div class="d-col-2 mb-2">
                        <strong class="from-font-size"><?php echo __('messages.common.from') ?></strong><br>
                        <p class="p-text mb-0">{{:companyName}}</p>
                        <p class="p-text mb-0">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                    <div class="row">
                    <div class="col-lg-9">
                        <div class="col-66">
                            <strong style="margin-bottom: 3px" class="to-font-size mb-3"><?php echo __('messages.common.to') ?></strong><br>

                            <p class="p-text mb-2"> &lt<?php echo __('messages.invoice.client_name')  ?>&gt;<br></p>
                            <p class="p-text mb-2"> &lt<?php echo __('messages.invoice.client_email')  ?>&gt;<br></p>
                            <p class="p-text mb-2">  &lt<?php echo __('messages.client_address')  ?>&gt;</p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 d-flex align-items-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                 <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div> -->
                    </div>
                </div>

                <hr style="background:{{:invColor}}">
                <div class="row">
                    <div class="d-col-66">
                        <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="fwb"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                <td class="text-right">#5F2I93</td>
                            </tr>
                            <tr>
                                <td class="fwb"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                <td class="text-right">25th Nov, 2020 8:03 AM</td>
                            </tr>
                            <tr>
                                <td class="fwb"><?php echo __('messages.invoice.due_date') ?>:</td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>

                    </div>
                <div class="table d-table">
                    <div class="tu d-table-tr" style="border-bottom: 2px solid {{:invColor}};">
                        <div class="d-table-th in-w-1">#</div>
                        <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="d-table-body">
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>1</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>2</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr" style="border-bottom: 2px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>3</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                            <div class="d-table-summary">
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(300, true); ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(50, true); ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                    <div class="d-table-value">0%</div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(250, true); ?></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="break-25"></div>
                     <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                    <div class="break-25"></div>
                    <div class="d-header-50">
                        <p style="color:{{:invColor}}"><strong class="b"><?php echo __('messages.common.regards') ?>:</strong></p>
                        <span>{{:companyName}}</span>
                </div>
            </div>
        </div>
    </div>







</script>

<script id="hongKongTemplate" type="text/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner d-no-pad">
                <div class="row hk-grey-box1">
                    <div class="col-33">
                    <img src="<?php echo getLogoUrl() ?>"
                                             class="img-logo"  style="max-width: 150px;"><br><br>
                        <p class="p-text mb-o" style="color:{{:invColor}}">{{:companyName}}</p>
                        <p class="p-text mb-0">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                    <div class="col-33">&nbsp;</div>
                    <div class="col-33">
                        <h1 class="fancy-title mb5" style="color:{{:invColor}}"><?php echo __('messages.common.invoice') ?></h1><br><br>
                        <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="fwb"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                <td class="text-right">#51ET78</td>
                            </tr>
                            <tr>
                                <td class="fwb"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                <td class="text-right">25 Nov 2020 8:03 AM</td>
                            </tr>
                            <tr>
                                <td class="fwb"><?php echo __('messages.invoice.due_date') ?>:</td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row hk-grey-box">
                    <div class="col-lg-9">
                        <strong class="to-font-size"><?php echo __('messages.common.to') ?></strong><br>

                            <p class="p-text mb-2"> &lt<?php echo __('messages.invoice.client_name')  ?>&gt;<br></p>
                            <p class="p-text mb-2"> &lt<?php echo __('messages.invoice.client_email')  ?>&gt;<br></p>
                            <p class="p-text mb-2"> &lt<?php echo __('messages.client_address')  ?>&gt;</p>
                        </p>
                    </div>
                        <!-- <div class="col-lg-3 d-flex align-items-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                 <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div> -->
                </div>
                    <div class="table hk-table">
                        <div class="tu d-table-tr">
                            <div class="d-table-th in-w-1" style="border: 1px solid {{:invColor}};padding: 5px;">#</div>
                            <div class="d-table-th in-w-2" style="border: 1px solid {{:invColor}};padding: 5px;"><?php echo __('messages.item') ?></div>
                            <div class="d-table-th in-w-3" style="border: 1px solid {{:invColor}};padding: 5px;"><?php echo __('messages.invoice.qty') ?></div>
                            <div class="d-table-th in-w-4 text-right" style="border: 1px solid {{:invColor}};padding: 5px;"><?php echo __('messages.invoice.amount') ?></div>
                        </div>
                        <div class="<d-table-body">
                            <div class="d-table-tr">
                                <div class="d-table-td in-w-1" style="border: 1px solid {{:invColor}};padding: 5px;"><span>1</span></div>
                                <div class="d-table-td in-w-2" style="border: 1px solid {{:invColor}};padding: 5px;">
                                    <pre><?php echo __('messages.item') ?> 1</pre>
                                </div>
                                <div class="d-table-td in-w-3" style="border: 1px solid {{:invColor}};padding: 5px;">
                                    1
                                </div>
                                <div class="d-table-td in-w-4 text-right" style="border: 1px solid {{:invColor}};padding: 5px;"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                            </div>
                            <div class="d-table-tr">
                                <div class="d-table-td in-w-1" style="border: 1px solid {{:invColor}};padding: 5px;"><span>2</span></div>
                                <div class="d-table-td in-w-2" style="border: 1px solid {{:invColor}};padding: 5px;">
                                    <pre><?php echo __('messages.item') ?> 2</pre>
                                </div>
                                <div class="d-table-td in-w-3" style="border: 1px solid {{:invColor}};padding: 5px;">
                                    1
                                </div>
                                <div class="d-table-td in-w-4 text-right" style="border: 1px solid {{:invColor}};padding: 5px;"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                            </div>
                            <div class="d-table-tr">
                                <div class="d-table-td in-w-1" style="border: 1px solid {{:invColor}};padding: 5px;"><span>3</span></div>
                                <div class="d-table-td in-w-2" style="border: 1px solid {{:invColor}};padding: 5px;">
                                    <pre><?php echo __('messages.item') ?> 3</pre>
                                </div>
                                <div class="d-table-td in-w-3" style="border: 1px solid {{:invColor}};padding: 5px;">
                                    1
                                </div>
                                <div class="d-table-td in-w-4 text-right" style="border: 1px solid {{:invColor}};padding: 5px;"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                            </div>
                        </div>
                        <div class="d-table-footer">
                            <div class="d-table-controls"></div>
                            <div class="d-table-summary">
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(300, true); ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(50, true); ?></div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                    <div class="d-table-value">0%</div>
                               </div>
                               <div class="d-table-summary-item">
                                    <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                    <div class="d-table-value"><?php echo getCurrencyAmount(250, true); ?></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="break-25"></div>
                     <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                    <div class="hk-header-50">
                        <p class="b"><strong><?php echo __('messages.common.regards') ?>:</strong></p>
                        <span style="color:{{:invColor}}">{{:companyName}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>






</script>

<script id="tokyoTemplate" type="text/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner" style="border-top: 15px solid {{:invColor}}; border-bottom: 15px solid {{:invColor}};">
                <div class="row">
                    <div class="col-66">
                        <img  src="<?php echo getLogoUrl() ?>"
                              class="img-logo" style="max-width: 100px;">
                        <br><h6 class="p-text mb-0" style="color:{{:invColor}}">{{:companyName}}</h6>
                        <p class="p-text mb-0 w-75">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                    <div class="col-33">
                        <h1 class="fancy-title mb5" style="color:{{:invColor}}"><?php echo __('messages.common.invoice') ?></h1>
                    </div>
                </div>
                <br>
                <div class="row" style="margin-right: 15px">
                    <div class="col-lg-9">
                        <strong class="mb5 to-font-size" style="color:{{:invColor}}"><?php echo __('messages.common.to') ?></strong>
                        <p class="p-text ">
                            &lt<?php echo __('messages.invoice.client_name')  ?>&gt;<br>
                            &lt<?php echo __('messages.invoice.client_email')  ?>&gt;<br>
                            &lt<?php echo __('messages.client_address')  ?>&gt;
                        </p>
                            <table class="summary-table mt-3">
                                <tbody>
                                <tr>
                                    <td class="fwb mb5"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                    <td class="text-right">#24GD74</td>
                                </tr>
                                <tr>
                                    <td class="fwb mb5"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                    <td class="text-right">25 Nov 2020 8:03 AM</td>
                                </tr>
                                <tr>
                                    <td class="fwb"><?php echo __('messages.invoice.due_date') ?>:</td>
                                    <td class="text-right">26 Nov 2020</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                          <!-- <div class="col-lg-3 d-flex align-items-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                 <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div> -->
                    </div>

                </div>
                <div class="table d-table">
                    <div class="tu d-table-tr" style="border-top: 2px solid {{:invColor}};">
                        <div class="d-table-th in-w-1">#</div>
                        <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="<d-table-body">
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>1</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>2</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr" style="border-bottom: 2px solid {{:invColor}};">
                            <div class="d-table-td in-w-1"><span>3</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                        <div class="d-table-summary">
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(300, true); ?></div>
                           </div>
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(50, true); ?></div>
                           </div>
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                <div class="d-table-value">0%</div>
                           </div>
                           <div class="d-table-summary-item" style="border-bottom: 2px solid {{:invColor}};">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(250, true); ?></div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="break-25"></div>
                 <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                <div class="d-header-50">
                    <p class="b"><strong><?php echo __('messages.common.regards') ?>:</strong></p>
                    <span style="color: {{:invColor}}">{{:companyName}}</span>
                </div>
            </div>
        </div>
    </div>
</script>

<script id="parisTemplate" type="text/x-jsrender">
    <div class="preview-main client-preview">
        <div class="d" id="boxes">
            <div class="d-inner">
                <div class="row">
                    <div class="col-33">
                        <h1 class="p-fancy-title tu mb5" style="border-bottom: 10px solid {{:invColor}};"><?php echo __('messages.common.invoice') ?></h1>
                    </div>
                    <div class="col-33"></div>
                    <div class="col-33">
                        <img src="<?php echo getLogoUrl() ?>"
                                             class="img-logo" style="max-width: 150px;"></div>
                </div>
                <br>
                <div class="row" style="margin-right: 15px">
                    <div class="col-66">
                        <strong class="tu mb5 from-font-size" style="color:{{:invColor}}"><?php echo __('messages.common.from') ?></strong>
                        <p class="p-text mb-0">{{:companyName}}</p>
                        <p class="p-text mb-0 w-75">{{:companyAddress}}</p>
                        <p class="p-text mb-0">Mo: {{:companyPhone}}</p>
                    </div>
                    <div class="col-33">
                        <table class="summary-table">
                            <tbody>
                            <tr>
                                <td class="tu fwb text-black"><?php echo __('messages.invoice.invoice_id') ?>:</td>
                                <td class="text-right">#56PC98</td>
                            </tr>
                            <tr>
                                <td class="tu fwb text-black"><?php echo __('messages.invoice.invoice_date') ?>:</td>
                                <td class="text-right">25 Nov 2020 8:03 AM</td>
                            </tr>
                            <tr>
                                <td class="tu fwb text-black"><?php echo __('messages.invoice.due_date') ?>:</td>
                                <td class="text-right">26 Nov 2020</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="break-25"></div>
                <div class="row ">
                        <div class="col-lg-9 ">
                            <div class="mb-2"><strong class="tu to-font-size" style="color:{{:invColor}}"><?php echo __('messages.common.to') ?></strong></div>

                            <p class="p-text mb-2">&lt<?php echo __('messages.invoice.client_name')  ?>&gt;<br></p>
                            <p class="p-text mb-2">&lt<?php echo __('messages.invoice.client_email')  ?>&gt;<br></p>
                            <p class="p-text mb-2">&lt<?php echo __('messages.client_address')  ?>&gt;</p>
                        </div>
                    <!-- <div class="col-lg-3 d-flex align-items-end">
                            <div class="text-center">
                                <strong  style="font-size:15px ;"><b><?php echo __('messages.payment_qr_codes.payment_qr_code') ?></b></strong><br>
                                 <img class="mt-2" src="<?php echo asset('images/qrcode.png') ?>" height="100" width="100">
                            </div>
                        </div> -->
                </div>
                <div class="table d-table">
                    <div class="tu d-table-tr" style="color: {{:invColor}};border-top: 2px solid {{:invColor}};border-bottom: 2px solid {{:invColor}}">
                        <div class="d-table-th in-w-1">#</div>
                        <div class="d-table-th in-w-2"><?php echo __('messages.item') ?></div>
                        <div class="d-table-th in-w-3"><?php echo __('messages.invoice.qty') ?></div>
                        <div class="d-table-th in-w-4 text-right"><?php echo __('messages.invoice.amount') ?></div>
                    </div>
                    <div class="<d-table-body">
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>1</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 1</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>2</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 2</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                        <div class="d-table-tr">
                            <div class="d-table-td in-w-1"><span>3</span></div>
                            <div class="d-table-td in-w-2">
                                <pre><?php echo __('messages.item') ?> 3</pre>
                            </div>
                            <div class="d-table-td in-w-3">
                                1
                            </div>
                            <div class="d-table-td in-w-4 text-right"><span ><?php echo getCurrencyAmount(100, true); ?></span></div>
                        </div>
                    </div>
                    <div class="d-table-footer">
                        <div class="d-table-controls"></div>
                        <div class="d-table-summary">
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.amount') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(300, true); ?></div>
                           </div>
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.discount') ?>:</strong></div>
                                <div class="d-table-value"><?php echo getCurrencyAmount(50, true); ?></div>
                           </div>
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.tax') ?>:</strong></div>
                                <div class="d-table-value">0%</div>
                           </div>
                           <div class="d-table-summary-item">
                                <div class="tu d-table-label"><strong ><?php echo __('messages.invoice.total') ?>:</strong></div>
                                <div class="d-table-value" style="color: {{:invColor}};"><?php echo getCurrencyAmount(250, true); ?></div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="break-25"></div>
                 <div class="row">
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.client.notes') ?>:</h1>
                                <p class="font-color-gray">
                                Paypal , Stripe & manual payment method accept.<br>
                                Net 10 – Payment due in 10 days from invoice date.<br>
                                Net 30 – Payment due in 30 days from invoice date.
                                </p>
                            </div>
                            <div class="d-col-3">
                                <h4 class="d-fancy-title mb5"><?php echo __('messages.invoice.terms') ?>:</h1>
                                <p class="font-color-gray">Invoice payment terms ; 1% 10 Net 30, 1% discount if payment received within ten days otherwise payment 30 days after invoice date.</p>
                            </div>
                      </div>
                      <br>
                <div class="d-header-50">
                        <p><strong class="b"><?php echo __('messages.common.regards') ?>:</strong></p>
                        <span style="color:{{:invColor}}">{{:companyName}}</span>
                </div>
            </div>
        </div>
    </div>

</script>

<script id="agencyTemplate" type="text/x-jsrender">
    <div class="invoice_wrap agency1">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header start Here -->
				<header class="invoice-header " id="invo_header">
					<div class="invoice-logo-content bg-black ">
						<div class="invoice-logo">
							<div class="agency-logo">
								<a href="#"><img src="assets/images/agency/logo.png" alt="logo"></a>
							</div>
						</div>
						<div class="invo-head-content">
							<div><h1 class="invoice-txt">INVOICE</h1></div>
						</div>
					</div>
					<div class="container">
						<div class="invoice-agency-details">
							<div class="invo-head-wrap">
								<div class="color-light-black font-md wid-40">Invoice No:</div>
								<div class="font-md-grey color-grey wid-20">#DI56789</div>
							</div>
							<div class="invo-head-wrap invoi-date-wrap invoi-date-wrap-agency">
								<div class="color-light-black font-md wid-40">Invoice Date:</div>
								<div class="font-md-grey color-grey wid-20">15/12/2024</div>
							</div>
						</div>
					</div>
				</header>
				<!--Header end Here -->
				<!--Invoice content start here -->
				<section class="agency-service-content" id="agency_service">
					<div class="container">
						<!--Invoice owner name content start -->
						<div class="invoice-owner-conte-wrap pt-40">
							<div class="invo-to-wrap">
								<div class="invoice-to-content">
									<p class="font-md color-light-black">Invoice To:</p>
									<h2 class="font-lg color-blue pt-10">Jordon Smith</h2>
									<p class="font-md-grey color-grey pt-10">121 E Parkview St, IN 45240<br> Toronto, Ontario<br> Canada</p>
								</div>
							</div>
							<div class="invo-pay-to-wrap">
								<div class="invoice-pay-content">
									<p class="font-md color-light-black">Pay To:</p>
									<h2 class="font-lg color-blue pt-10">Digital Invoica</h2>
									<p class="font-md-grey color-grey pt-10">4510 E Dolphine St, IN 3526 <br> Hills Road, New York<br> United States</p>
								</div>
							</div>
						</div>
						<!--Invoice owner name content End -->
						<!--Invoice table data start here -->
						<div class="table-wrapper agency-service-table pt-32">
							<table class="invoice-table agency-table">
								<thead>
									<tr class="invo-tb-header bg-black">
										<th class="serv-wid pl-10 font-md">Service</th>
										<th class="desc-wid font-md">Description</th>
										<th class="qty-wid font-md">Qty</th>
										<th class="pric-wid font-md">Price</th>
										<th class="tota-wid pr-10 font-md text-right ">Total</th>
									</tr>
								</thead>
								<tbody class="invo-tb-body">
									<tr class="invo-tb-row">
										<td class="font-sm pl-10">Marketing</td>
										<td class="font-sm">Digital Marketing & SEO</td>
										<td class="font-sm">2</td>
										<td class="font-sm">$120</td>
										<td class="font-sm text-right pr-10">$240.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="font-sm pl-10">Web Design & Development</td>
										<td class="font-sm">Dektop & Mobile Web App Design</td>
										<td class="font-sm">2</td>
										<td class="font-sm">$250</td>
										<td class="font-sm text-right pr-10">$500.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="font-sm pl-10">UI/UX Design</td>
										<td class="font-sm">Mobile Adroid & iOS App Design</td>
										<td class="font-sm">1</td>
										<td class="font-sm">$80</td>
										<td class="font-sm text-right pr-10">$80.00</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Invoice table data end here -->
						<!--Invoice additional info start here -->
						<div class="invo-addition-wrap pt-20">
							<div class="invo-add-info-content">
								<h3 class="font-md color-light-black">Additional Information:</h3>
								<p class="font-sm pt-10">A ut vitae nullam risus at. Justo enim nisi elementum ac. Massa molestie metus vitae ornare turpis donec odio sollicitudin. Ac ut tellus eu donec dictum risus blandit. Quam diam dictum amet.</p>
							</div>
							<div class="invo-bill-total width-30">
								<table class="invo-total-table">
									<tbody>
										<tr>
											<td class="font-md color-light-black ">Sub Total:</td>
											<td class="font-md-grey color-grey text-right pr-10 ">$820.00</td>
										</tr>
										<tr class="tax-row">
											<td class="font-md color-light-black ">Tax <span class="color-grey">(18%)</span></td>
											<td class="font-md-grey color-grey text-right pr-10 ">$147.60</td>
										</tr>
										<tr class="invo-grand-total bg-blue ">
											<td class="font-18-700 padding">Grand Total:</td>
											<td class="font-18-500 text-right pr-10 ">$967.60</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!--Invoice additional info end here -->
					</div>
					<!--Contact details start here -->
					<div class="agency-contact-sec bg-black">
						<div class="invoice-header-contact">
							<div class="invo-cont-wrap invo-contact-wrap">
								<div class="invo-social-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_94)"><path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 7C15.5304 7 16.0391 7.21071 16.4142 7.58579C16.7893 7.96086 17 8.46957 17 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 3C16.5913 3 18.1174 3.63214 19.2426 4.75736C20.3679 5.88258 21 7.4087 21 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_94"><rect width="24" height="24" fill="white"></rect></clipPath></defs></svg>
								</div>
								<div class="invo-social-name">
									<a href="tel:12345678899" class="font-18">+1 234 567 8899</a>
								</div>
							</div>
							<div class="invo-cont-wrap">
								<div class="invo-social-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_108)"><path d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 7L12 13L21 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_108"><rect width="24" height="24" fill="white"></rect></clipPath></defs></svg>
								</div>
								<div class="invo-social-name">
									<a href="mailto:contact@invoice.com" class="font-18">contact@invoice.com</a>
								</div>
							</div>
						</div>
					</div>
					<!--Contact details end here -->
				</section>
				<!--Invoice content end here -->
			</div>
			<!--Bottom content start here -->
			<section class="agency-bottom-content d-print-none" id="agency_bottom">
				<!--Print-download content start here -->
				<div class="invo-buttons-wrap">
					<div class="invo-print-btn invo-btns">
						<a href="javascript:window.print()" class="print-btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<g clip-path="url(#clip0_10_61)">
									<path d="M17 17H19C19.5304 17 20.0391 16.7893 20.4142 16.4142C20.7893 16.0391 21 15.5304 21 15V11C21 10.4696 20.7893 9.96086 20.4142 9.58579C20.0391 9.21071 19.5304 9 19 9H5C4.46957 9 3.96086 9.21071 3.58579 9.58579C3.21071 9.96086 3 10.4696 3 11V15C3 15.5304 3.21071 16.0391 3.58579 16.4142C3.96086 16.7893 4.46957 17 5 17H7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M17 9V5C17 4.46957 16.7893 3.96086 16.4142 3.58579C16.0391 3.21071 15.5304 3 15 3H9C8.46957 3 7.96086 3.21071 7.58579 3.58579C7.21071 3.96086 7 4.46957 7 5V9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M7 15C7 14.4696 7.21071 13.9609 7.58579 13.5858C7.96086 13.2107 8.46957 13 9 13H15C15.5304 13 16.0391 13.2107 16.4142 13.5858C16.7893 13.9609 17 14.4696 17 15V19C17 19.5304 16.7893 20.0391 16.4142 20.4142C16.0391 20.7893 15.5304 21 15 21H9C8.46957 21 7.96086 20.7893 7.58579 20.4142C7.21071 20.0391 7 19.5304 7 19V15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
								<defs>
									<clipPath id="clip0_10_61">
										<rect width="24" height="24" fill="white"/>
									</clipPath>
								</defs>
							</svg>
							<span class="inter-700 medium-font">Print</span>
						</a>
					</div>
					<div class="invo-down-btn invo-btns">
						<a class="download-btn" id="generatePDF">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_5_246)">
								<path d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11L12 16L17 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 4V16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_5_246"><rect width="24" height="24" fill="white"/></clipPath></defs>
							</svg>
							<span class="inter-700 medium-font">Download</span>
						</a>
					</div>
				</div>
				<!--Print-download content end here -->
				<!--Note content start -->
				<div class="invo-note-wrap">
					<div class="note-title">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_240)"><path d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 7H10" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 13H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 17H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_8_240"><rect width="24" height="24" fill="white"/>
						</clipPath></defs></svg>
						<span class="font-md color-light-black">Note:</span>
					</div>
					<h3 class="font-md-grey color-grey note-desc">This is computer generated receipt and does not require physical signature.</h3>
				</div>
				<!--Note content end -->
			</section> 
			<!--Bottom content end here -->
		</div>
	</div>
</script>

<script id="cleaningTemplate" type="text/x-jsrender">
    <div class="invoice_wrap cleaning-invoice">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header start here -->
				<header class="cleaning-header" id="invo_header">
					<div class="invoice-logo-content">
						<div class="invoice-logo width-30">
							<div>
								<h1 class="cleaning-txt">INVOICE</h1>
							</div>
							<div class="invo-head-wrap invo-head-wrap-clean pt-20">
								<div class="font-md color-light-black">Invoice No:</div>
								<div class="font-md-grey color-light-black">#DI56789</div>
							</div>
							<div class="invo-head-wrap invo-head-wrap-clean pt-10">
								<div class="font-md color-light-black">Invoice Date:</div>
								<div class="font-md-grey color-light-black">15/12/2024</div>
							</div>
						</div>
						<div class="invo-head-content width-70 ">
							<div>
								<svg width="540" class="cleaning-svg" height="183" viewBox="0 0 540 183" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0 0H540V183H96.8182L0 0Z" fill="#12151C"/>
								</svg>
							</div>
						</div>
					</div>
				</header>
				<!--Header end here -->
				<!--Invoice content start here -->
				<section class="hospital-service-content" id="cleaning_invoice">
					<div class="container">
						<!--Invoice owner name content start here -->
						<div class="invoice-owner-conte-wrap">
							<div class="invo-to-wrap">
								<div class="invoice-to-content">
									<p class="font-md color-light-black">Invoice To:</p>
									<h2 class="font-lg color-cleaning pt-10">Jordon Smith</h2>
									<p class="font-md-grey color-grey pt-10">Phone: +1 562 563 8899 <br> Email: jordon123@gmail.com</p>
								</div>
							</div>
							<div class="cleaning-blue-img">
								<div class="blue-img1">
									<a href="cleaning_invoice.html"><img src="assets/images/cleaning/logo.png" alt="logo"></a>
									<div class="blue-img2">	
									</div>
								</div>
							</div>
						</div>
						<!--invoice owner name content end here -->
						<!--Cleaning detail table start here -->
						<div class="payment-table-wrap cleaning-table-wrap mt">
							<table class="invo-payment-table">
								<thead>
									<tr class="invo-tb-header">
										<th class="font-md color-light-black flight-pt ">Area Name</th>
										<th class="font-md color-light-black flight-pt ">Cleaning Type</th>
										<th class="font-md color-light-black flight-pt ">Start Date</th>
										<th class="font-md color-light-black flight-pt ">End Date</th>
									</tr>
								</thead>
								<tbody>
									<tr class="invo-paye-row">
										<td class="font-sm payment-desc text-center">Office</td>
										<td class="font-sm payment-desc text-center">Monthly</td>
										<td class="font-sm payment-desc text-center">15/04/2023</td>
										<td class="font-sm payment-desc text-center">15/05/2023</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Cleaning detail table end here -->
						<!--Cleaning info start here -->
						<div class="table-wrapper pt-40">
							<table class="invoice-table cleaning-table">
								<thead>
									<tr class="invo-tb-header">
										<th class="font-md color-light-black text-left">S. No.</th>
										<th class="font-md color-light-black text-left">Description</th>
										<th class="font-md color-light-black text-left">Price</th>
										<th class="font-md color-light-black text-left">Qty</th>
										<th class="font-md color-light-black text-right">Amount</th>
									</tr>
								</thead>
								<tbody class="invo-tb-body">
									<tr class="invo-tb-row">
										<td class="font-sm">1</td>
										<td class="font-sm">Toilet Cleaning</td>
										<td class="font-sm">$200.00</td>
										<td class="font-sm ">2</td>
										<td class="font-sm text-right">$400.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="font-sm">2</td>
										<td class="font-sm">Windows Cleaning</td>
										<td class="font-sm">$400.00</td>
										<td class="font-sm">4</td>
										<td class="font-sm text-right">$1600.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="font-sm">3</td>
										<td class="font-sm">Floor Cleaning</td>
										<td class="font-sm">$600.00</td>
										<td class="font-sm">1</td>
										<td class="font-sm text-right" >$600.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="font-sm">4</td>
										<td class="font-sm">Table Cleaning</td>
										<td class="font-sm">$250.00</td>
										<td class="font-sm">4</td>
										<td class="font-sm text-right">$1000.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="font-sm">5</td>
										<td class="font-sm ">Indoor Cleaning</td>
										<td class="font-sm ">$500.00</td>
										<td class="font-sm">1</td>
										<td class="font-sm text-right ">$500.00</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Cleaning info end here -->
						<!--Invoice additional info start here -->
						<div class="invo-addition-wrap pt-20">
							<div class="invo-add-info-content bus-term-cond-content">
								<div>
									<h3 class="font-md color-light-black">Pay By:</h3>
									<div class="pt-10">
										<span class="font-sm-500 color-light-black">Credit Card:</span>
										<span class="font-sm color-grey">**** **** **** **23</span>
									</div>
									<div>
										<span class="font-sm-500 color-light-black">Amount:</span>
										<span class="font-sm color-grey">$280</span>
									</div>
									<div>
										<span class="font-sm-500 color-light-black">Date:</span>
										<span class="font-sm color-grey">28 April 2023</span>
									</div>
									<div class="term-condi-list mt-30 pt-40">
										<h3 class="font-md color-light-black ">Terms &amp; Condition:</h3>
										<ul class="term-con-list">
											<li class="font-sm">Libero diam aliquam elementum venenatis</li>
											<li class="font-sm">pellentesque sit egestas.</li>
											<li class="font-sm">Posuere senectus mi aliquet cras elit cum mattis</li>
											<li class="font-sm">Enim eu integer rhoncus venenatis nullam.</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="invo-bill-total bus-invo-total">
								<table class="invo-total-table">
									<tbody>
										<tr>
											<td class="font-md color-light-black">Sub Total:</td>
											<td class="font-md-grey color-grey text-right">$4100.00</td>
										</tr>
										<tr class="tax-row bottom-border">
											<td class="font-md color-light-black ">Tax <span class="color-grey">(18%)</span></td>
											<td class="font-md-grey color-grey text-right">$738.00</td>
										</tr>
										<tr class="invo-grand-total">
											<td class="color-cleaning font-18-500 color-light-black pt-20">Grand Total:</td>
											<td class="font-18-500 color-grey pt-20 text-right ">$4838.00</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!--Invoice additional info end here -->
					</div>
					<!--Invoice bottom image start here -->
					<div class="cleaning-img-bottom-sec">
						<div class="cleaning-img-bottom-sec-wrap">
							<div class="cleaning-blue-img-bottom width-70">
								<div class="blue-img2-bottom">
									<div class="blue-bottom-img1">
										<div class="blue-bottom-img2"></div>
									</div>
								</div>
								<div class="blue-img1-bottom">
									<img src="assets/images/cleaning/cleaning2-img.svg" alt="bg-img">
								</div>
							</div>
							<div class="cleaning-contact">
								<div class="">
									<a href="tel:+12345678899" class="font-18 color-light-black">+1 234 567 8899</a>
								</div>
								<div class="pt-10">
									<div class="invo-social-name">
										<a href="mailto:contact@invoice.com" class="font-18 color-light-black">contact@invoice.com</a>
									</div>
								</div>
								<div class="pt-10">
									<div class="">
										<p class="font-md-grey color-light-black">4510 E Dolphine St, IN 3526 Hills Road, New York, USA</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Invoice bottom image start end -->
				</section>
				<!--Invoice content end here -->
			</div>
			<!--Bottom content start here -->
			<section class="agency-bottom-content agency-bottom-clean d-print-none" id="agency_bottom">
				<!--Print-download content start here -->
				<div class="invo-buttons-wrap">
					<div class="invo-print-btn invo-btns">
						<a href="javascript:window.print()" class="print-btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<g clip-path="url(#clip0_10_61)">
									<path d="M17 17H19C19.5304 17 20.0391 16.7893 20.4142 16.4142C20.7893 16.0391 21 15.5304 21 15V11C21 10.4696 20.7893 9.96086 20.4142 9.58579C20.0391 9.21071 19.5304 9 19 9H5C4.46957 9 3.96086 9.21071 3.58579 9.58579C3.21071 9.96086 3 10.4696 3 11V15C3 15.5304 3.21071 16.0391 3.58579 16.4142C3.96086 16.7893 4.46957 17 5 17H7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M17 9V5C17 4.46957 16.7893 3.96086 16.4142 3.58579C16.0391 3.21071 15.5304 3 15 3H9C8.46957 3 7.96086 3.21071 7.58579 3.58579C7.21071 3.96086 7 4.46957 7 5V9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M7 15C7 14.4696 7.21071 13.9609 7.58579 13.5858C7.96086 13.2107 8.46957 13 9 13H15C15.5304 13 16.0391 13.2107 16.4142 13.5858C16.7893 13.9609 17 14.4696 17 15V19C17 19.5304 16.7893 20.0391 16.4142 20.4142C16.0391 20.7893 15.5304 21 15 21H9C8.46957 21 7.96086 20.7893 7.58579 20.4142C7.21071 20.0391 7 19.5304 7 19V15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
								<defs>
									<clipPath id="clip0_10_61">
										<rect width="24" height="24" fill="white"/>
									</clipPath>
								</defs>
							</svg>
							<span class="inter-700 medium-font">Print</span>
						</a>
					</div>
					<div class="invo-down-btn invo-btns">
						<a class="download-btn" id="generatePDF">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_5_246)">
								<path d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11L12 16L17 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 4V16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_5_246"><rect width="24" height="24" fill="white"/></clipPath></defs>
							</svg>
							<span class="inter-700 medium-font">Download</span>
						</a>
					</div>
				</div>
				<!--Print-download content end here -->
				<!--Note content start -->
				<div class="invo-note-wrap">
					<div class="note-title">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_240)"><path d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 7H10" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 13H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 17H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_8_240"><rect width="24" height="24" fill="white"/>
						</clipPath></defs></svg>
						<span class="font-md color-light-black">Note:</span>
					</div>
					<h3 class="font-md-grey color-grey note-desc">This is computer generated receipt and does not require physical signature.</h3>
				</div>
				<!--Note content end -->
			</section>  
			<!--Bottom content end here -->
		</div>
	</div>
</script>

<script id="domainTemplate" type="text/x-jsrender">
    <div class="preview-main client-preview">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header start here -->
				<header class="domain-header" id="invo_header">
					<div class="invoice-logo-content invoice-logo-content-domain">
						<div class="invoice-logo invoice-logo-domain">
							<a href="domain_invoice.html"><img src="<?php echo getLogoUrl() ?>" alt="logo"></a>
						</div>
						<div class="domain-img">
							<h1 class="domain-txt">INVOICE</h1>
							<div class="invoice-agency-details">
								<div class="invo-head-wrap">
									<div class="color-light-black font-md">Invoice No:</div>
									<div class="font-md-grey color-grey">#DI56789</div>
								</div>
								<div class="invo-head-wrap invoi-date-wrap invoi-date-wrap-agency">
									<div class="color-light-black font-md">Invoice Date:</div>
									<div class="font-md-grey color-grey">15/12/2024</div>
								</div>
							</div> 
						</div>
					</div>
				</header> 
				<!--Header end here -->
				<!--Invoice content start here -->
				<section class="bus-booking-content" id="domain_invoice">
					<div class="container">
						<!--invoice owner name start here -->
						<div class="invoice-owner-conte-wrap domain-owner">
							<div class="invo-to-wrap">
								<div class="invoice-to-content">
									<p class="font-md color-light-black">Bill To:</p>
									<h2 class="font-lg domain-color pt-10 ">Jordon Smith</h2>
									<p class="font-md-grey color-grey pt-10">Phone: +1 562 563 8899 <br> Email: jordon123@mail.com</p>
								</div>
							</div>
							<div class="invo-pay-to-wrap">
								<div class="invoice-pay-content">
									<p class="font-md color-light-black">Host Info:</p>
									<h2 class="font-lg domain-color pt-10">{{:companyName}}</h2>
									<p class="font-md-grey color-grey pt-10">{{:companyAddress}}</p>
								</div>
							</div>
						</div>
						<!--invoice owner name end here -->
						<!--Domain timing content start here -->
						<div class="invoice-timing-wrap domain-mt pt-40">
							<div class="invo-time-col">
								<div class="booking-info column-one">
									<p class="font-sm "><b class="font-sm-700 color-light-black circle">Domain Start Date: </b>24 April 2023</p>
									<p class="font-sm mtb-14 "><b class="font-sm-700 color-light-black circle">Domain End Date: </b>23 April 2024</p>
								</div>
							</div>
							<div class="invo-time-col">
								<div class="booking-info">
									<p class="font-sm"><b class="font-sm-700 color-light-black circle">Hosting Start Date: </b>  24 April 2023</p>
									<p class="font-sm mtb-14"><b class="font-sm-700 color-light-black circle">Hosting End Date </b> 23 April 2025</p>
								</div>
							</div>
						</div>
						<!--Domain timing content end here -->
						<!--Domain detail start here -->
						<div class="bus-detail-wrap domain-detail-wrap">
							<div class="bus-detail-col border-bottom">
								<div class="bus-type font-md color-light-black">Customer ID:</div>
								<div class="font-md-grey color-grey">DI982563</div>
							</div>
							<div class="bus-detail-col border-bottom">
								<div class="bus-type font-md color-light-black">Transaction No:</div>
								<div class="font-md-grey color-grey">TN635241</div>
							</div>
							<div class="bus-detail-col seat-col">
								<div class="bus-type font-md color-light-black">Total Amount:</div>
								<div class="font-md-grey color-grey">A1, A2</div>
							</div>
							<div class="bus-detail-col">
								<div class="bus-type font-md color-light-black">Payment By:</div>
								<div class="font-md-grey color-grey">Visa **** **95</div>
							</div>
						</div>
						<!--Domain detail end here -->
						<!-- Domain invoice table data start here -->
						<div class="table-wrapper pt-40">
							<table class="invoice-table domain-table">
								<thead>
									<tr class="invo-tb-header">
										<th class="font-md color-light-black">Item Details</th>
										<th class="font-md color-light-black">Rate</th>
										<th class="font-md color-light-black">Amount</th>
									</tr>
								</thead>
								<tbody class="invo-tb-body">
									<tr class="invo-tb-row">
										<td class="font-sm">1 Domain - (yourdomain.com Registration with SSL)</td>
										<td class="font-sm">1 Year x $40.00</td>
										<td class="font-sm ">$40.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="font-sm">25 GB Hosting - (Business Package #SHP2564874)</td>
										<td class="font-sm ">2 Years x $100.00</td>
										<td class="font-sm  ">$200.00</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- Domain invoice table data end here -->
						<!--Invoice additional info start here -->
						<div class="invo-addition-wrap pt-20">
							<div class="invo-add-info-content">
								<h3 class="font-md color-light-black">Additional Information:</h3>
								<p class="font-sm pt-10">Ultricies dolor adipiscing ullamcorper quis. Ornare bibendum leo euismod amet convallis tellus. Risus nibh amet pretium ut. Sem lorem sit diam nisl ante leo.</p>
							</div>
							<div class="invo-bill-total width-30">
								<table class="invo-total-table">
									<tbody>
										<tr>
											<td class="font-md color-light-black">Sub Total:</td>
											<td class="font-md-grey color-grey text-right">$240.00</td>
										</tr>
										<tr class="tax-row bottom-border">
											<td class="font-md color-light-black">Tax <span class="color-grey">(18%)</span></td>
											<td class="font-md-grey color-grey text-right">$43.20</td>
										</tr>
										<tr class="invo-grand-total">
											<td class="font-md domain-color pt-20">Grand Total:</td>
											<td class="font-18-500 color-light-black pt-20 text-right">$283.20</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!--Invoice additional info end here -->
						<!--Domain contact us detail start here -->
						<div class="hospital-contact pt-40 domain-footer-image">
							<div class="">
								<div class="invo-cont-wrap invo-contact-wrap">
									<div class="invo-social-icon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_94)"><path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4" stroke="#FF3F34" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 7C15.5304 7 16.0391 7.21071 16.4142 7.58579C16.7893 7.96086 17 8.46957 17 9" stroke="#FF3F34" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 3C16.5913 3 18.1174 3.63214 19.2426 4.75736C20.3679 5.88258 21 7.4087 21 9" stroke="#FF3F34" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_94"><rect width="24" height="24" fill="#12151C"></rect></clipPath></defs></svg>
									</div>
									<div class="invo-social-name">
										<a href="tel:+12345678899" class="font-18 color-grey">+1 234 567 8899</a>
									</div>
								</div>
								<div class="invo-cont-wrap pt-15">
									<div class="invo-social-icon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_108)"><path d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z" stroke="#FF3F34" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 7L12 13L21 7" stroke="#FF3F34" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_108"><rect width="24" height="24" fill="#12151C"></rect></clipPath></defs></svg>
									</div>
									<div class="invo-social-name">
										<a href="mailto:contact@invoice.com" class="font-18 color-grey">contact@invoice.com</a>
									</div>
								</div>
							</div>
						</div>
						<!--Domain contact us detail end here -->
					</div>
				</section>
				<!--Invoice content end here -->
			</div>

		</div>
	</div>
</script>

<script id="ecommerceTemplate" type="text/x-jsrender">

</script>

<script id="fitnessTemplate" type="text/x-jsrender">
</script>


<script id="hospitalTemplate" type="text/x-jsrender">
</script>

<script id="internetTemplate" type="text/x-jsrender">
</script>

<script id="agencyTemplate" type="text/x-jsrender">
</script>

<script id="carbookingTemplate" type="text/x-jsrender">
</script>


<script id="hotelBookingTemplate" type="text/x-jsrender">
</script>



