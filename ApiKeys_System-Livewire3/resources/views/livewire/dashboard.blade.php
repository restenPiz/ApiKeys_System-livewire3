<div>

    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Account</a></li>
                            <li class="breadcrumb-item active" aria-current="page">API Keys</li>
                        </ol>
                    </nav>

                    <h1 class="page-header-title">API Keys</h1>
                </div>
                <!-- End Col -->

                <div class="col-sm-auto">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#createAKIKeyModal">
                        <i class="bi-plus me-1"></i> Create key
                    </button>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card">
                    <div class="card-body text-center">
                        <small class="text-cap">Projects</small>
                        <span class="js-counter d-block display-3 text-dark mb-2">150</span>

                        <div class="row col-divider">
                            <div class="col text-end">
                                <span class="d-block fw-semibold text-success">
                                    <i class="bi-graph-up"></i> 12%
                                </span>
                                <span class="d-block">change</span>
                            </div>

                            <div class="col text-start">
                                <span class="d-block fw-semibold text-dark">5</span>
                                <span class="d-block">last week</span>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-md-6 col-lg-4 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card">
                    <div class="card-body text-center">
                        <small class="text-cap"><span class="legend-indicator bg-success"></span> Successful
                            conversions</small>
                        <span class="js-counter d-block display-3 text-dark mb-2">25</span>

                        <div class="row col-divider">
                            <div class="col text-end">
                                <span class="d-block fw-semibold text-success">
                                    <i class="bi-graph-up"></i> 5.6%
                                </span>
                                <span class="d-block">change</span>
                            </div>

                            <div class="col text-start">
                                <span class="d-block fw-semibold text-dark">7</span>
                                <span class="d-block">last week</span>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-md-6 col-lg-4 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card">
                    <div class="card-body text-center">
                        <small class="text-cap"><span class="legend-indicator bg-danger"></span> Failed
                            conversions</small>
                        <span class="js-counter d-block display-3 text-dark mb-2">4</span>

                        <div class="row col-divider">
                            <div class="col text-end">
                                <span class="d-block fw-semibold text-danger">
                                    <i class="bi-graph-down"></i> 2.3%
                                </span>
                                <span class="d-block">change</span>
                            </div>

                            <div class="col text-start">
                                <span class="d-block fw-semibold text-dark">1</span>
                                <span class="d-block">last week</span>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- Card -->
        <div class="card">
            <!-- Header -->
            <div class="card-header card-header-content-sm-between">
                <div class="mb-2 mb-sm-0">
                    <h4 class="card-header-title">API Keys</h4>
                    <p class="card-text fs-5">Keys you have generated to connect with third-party clients or access the
                        <a class="link" href="#">Front API.</a>
                    </p>
                </div>

                <div class="d-grid d-sm-flex justify-content-sm-between align-items-sm-center gap-2">
                    <!-- Datatable Info -->
                    <div id="datatableCounterInfo" style="display: none;">
                        <div class="d-flex align-items-center">
                            <span class="fs-6 me-3">
                                <span id="datatableCounter">0</span>
                                Selected
                            </span>
                            <a class="btn btn-outline-danger btn-sm" href="javascript:;"><i class="bi-trash"></i>
                                Delete</a>
                        </div>
                    </div>
                    <!-- End Datatable Info -->

                    <!-- Dropdown -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-white btn-sm dropdown-toggle w-100"
                            id="usersExportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-download me-2"></i> Export
                        </button>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="usersExportDropdown">
                            <span class="dropdown-header">Select option:</span>
                            <a id="export-copy" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                                Copy
                            </a>
                            <a id="export-print" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="assets/svg/illustrations/print-icon.svg" alt="Image Description">
                                Print
                            </a>
                            <div class="dropdown-divider"></div>
                            <span class="dropdown-header">Download options</span>
                            <a id="export-excel" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2" src="assets/svg/brands/excel-icon.svg"
                                    alt="Image Description">
                                Excel
                            </a>
                            <a id="export-csv" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                                .CSV
                            </a>
                            <a id="export-pdf" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2" src="assets/svg/brands/pdf-icon.svg"
                                    alt="Image Description">
                                PDF
                            </a>
                        </div>
                    </div>
                    <!-- End Dropdown -->
                </div>
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable"
                    class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                    data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 1, 2, 3, 6],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 6,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
                    <thead class="thead-light">
                        <tr>
                            <th class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="datatableCheckAll">
                                    <label class="form-check-label" for="datatableCheckAll"></label>
                                </div>
                            </th>
                            <th class="table-column-ps-0">Name</th>
                            <th>Created by</th>
                            <th>API Key</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="apiKeyCheck3">
                                    <label class="form-check-label" for="apiKeyCheck3"></label>
                                </div>
                            </td>
                            <td class="table-column-ps-0">FrontMail</td>
                            <td>
                                <a class="d-flex align-items-center text-dark" href="#">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-xs avatar-soft-primary avatar-circle">
                                            <span class="avatar-initials">A</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="text-inherit">Anne Richard</span>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <div class="input-group input-group-sm input-group-merge table-input-group">
                                    <input id="apiKeyCode3" type="text" class="form-control" readonly
                                        value="X291ZNO1Z29BE12YZ1Z12">
                                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;"
                                        data-bs-toggle="tooltip" title="Copy to clipboard"
                                        data-hs-clipboard-options='{
                          "type": "tooltip",
                          "successText": "Copied!",
                          "contentTarget": "#apiKeyCode3",
                          "classChangeTarget": "#apiKeyCodeIcon3",
                          "defaultClass": "bi-clipboard",
                          "successClass": "bi-check"
                         }'>
                                        <i id="apiKeyCodeIcon3" class="bi-clipboard"></i>
                                    </a>
                                </div>
                            </td>
                            <td><span class="legend-indicator bg-success"></span> Successful</td>
                            <td>February 20, 2020</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-white btn-sm" id="apiKeyDropdown3"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        More <i class="bi-chevron-down ms-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="apiKeyDropdown3">
                                        <a class="dropdown-item" href="#">Rename</a>
                                        <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#createAKIKeyModal">Regenerate Key</a>
                                        <a class="dropdown-item" href="#">Disable</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Table -->

            <!-- Footer -->
            <div class="card-footer">
                <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                            <span class="me-2">Showing:</span>

                            <!-- Select -->
                            <div class="tom-select-custom">
                                <select id="datatableEntries"
                                    class="js-select form-select form-select-borderless w-auto" autocomplete="off"
                                    data-hs-tom-select-options='{
                              "searchInDropdown": false,
                              "hideSearch": true
                            }'>
                                    <option value="4">4</option>
                                    <option value="6" selected>6</option>
                                    <option value="8" disabled>8</option>
                                    <option value="12" disabled>12</option>
                                </select>
                            </div>
                            <!-- End Select -->

                            <span class="text-secondary me-2">of</span>

                            <!-- Pagination Quantity -->
                            <span id="datatableWithPaginationInfoTotalQty"></span>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                            <!-- Pagination -->
                            <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Card -->
    </div>
    <!-- End Content -->

    {{-- Inicio do modal de adicionar --}}

    <!-- Create New API Key Modal -->
    <div class="modal fade" id="createAKIKeyModal" tabindex="-1" aria-labelledby="createAKIKeyModalLabel"
        role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="createAKIKeyModalLabel">Create API Key</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="modal-body">
                    <!-- Form -->
                    <form>
                        <input type="text" class="form-control" placeholder="API Key name">
                    </form>
                    <!-- End Form -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="modal-footer">
                    <div class="row align-items-sm-center flex-grow-1 mx-n2">
                        <div class="col-sm mb-2 mb-sm-0">
                            <p class="modal-footer-text">What is an API? <i class="bi-question-circle"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="API stands for application programming interface. It can be helpful to think of the API as a way for different apps to talk to one another."></i>
                            </p>
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-auto">
                            <div class="d-flex gap-3">
                                <button type="button" class="btn btn-white" data-bs-dismiss="modal"
                                    aria-label="Close">Cancel</button>
                                <button type="button" class="btn btn-primary">Generate</button>
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Footer -->
            </div>
        </div>
    </div>

    {{-- Fim do modal de adicionar --}}

</div>
