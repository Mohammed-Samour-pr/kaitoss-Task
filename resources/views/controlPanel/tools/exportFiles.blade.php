{{-- tools button --}}

@if(config('main.toolsButton'))
<div class="dropdown dropdown-inline" >
    <button type="button" class="btn btn-light btn-hover-primary btn-sm btn-icon mr-2" data-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">
        <i class="flaticon2-settings text-muted"></i>
    </button>

    <div class="dropdown-menu dropdown-menu-right" style="">
        <!--begin::Navigation-->
        <ul class="navi flex-column navi-hover py-2 ">

            @if(config('main.exportPrint'))
                <li class="navi-item">

                    <a href="#" class="navi-link" id="export_print">
                                    <span class="navi-icon">
                                        <i class="la la-print"></i>
                                    </span>
                        <span class="navi-text">Print</span>
                    </a>
                </li>

            @endif
            @if(config('main.exportCopy'))
                <li class="navi-item">
                    <a href="#" class="navi-link" id="export_copy">
                                    <span class="navi-icon">
                                        <i class="la la-copy"></i>
                                    </span>
                        <span class="navi-text">Copy</span>
                    </a>
                </li>
            @endif

            @if(config('main.exportExcel'))
                <li class="navi-item">
                    <a href="#" class="navi-link" id="export_excel">
                                    <span class="navi-icon">
                                        <i class="la la-file-excel-o"></i>
                                    </span>
                        <span class="navi-text">Excel</span>
                    </a>
                </li>
            @endif

            @if(config('main.exportCSV'))
                <li class="navi-item">
                    <a href="#" class="navi-link" id="export_csv">
                        <span class="navi-icon">
                            <i class="la la-file-text-o"></i>
                        </span>
                        <span class="navi-text">CSV</span>
                    </a>
                </li>
            @endif

            @if(config('main.exportPDF'))
                <li class="navi-item">
                    <a href="#" class="navi-link" id="export_pdf">
                        <span class="navi-icon">
                            <i class="la la-file-pdf-o"></i>
                        </span>
                        <span class="navi-text">PDF</span>
                    </a>
                </li>
            @endif
        </ul>
        <!--end::Navigation-->
    </div>
</div>
@endif
{{-- end tools button --}}
