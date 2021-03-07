@extends("layouts/manager")

@section("content")
<!-- ========== MAIN CONTENT ========== -->
<!-- Navbar Vertical -->



<!-- End Navbar Vertical -->

<main id="content" role="main" class="main pointer-event">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Dashboard</h1>
                </div>

                <div class="col-sm-auto">
                    <a class="btn btn-primary" href="javascript:;"
                        data-toggle="modal" data-target="#inviteUserModal">
                        <i class="tio-user-add mr-1"></i> Invite users
                    </a>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Stats -->
        <div class="row gx-2 gx-lg-3">
        	<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        		<!-- Card -->
        		<a class="card card-hover-shadow h-100" href="#">
        			<div class="card-body">
        				<h6 class="card-subtitle">Total Customers</h6>

        				<div class="row align-items-center gx-2 mb-1">
        					<div class="col-6">
        						<span class="card-title h2">{{ count(App\Customers::all()) }}</span>
        					</div>

        					<div class="col-6">

        					</div>
        				</div>
        				<!-- End Row -->

        				<span class="badge badge-soft-success">
        					<i class="tio-trending-up"></i> 12.5%
        				</span>
        				<span class="text-body font-size-sm ml-1">from 70,104</span>
        			</div>
        		</a>
        		<!-- End Card -->
        	</div>

        	<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        		<!-- Card -->
        		<a class="card card-hover-shadow h-100" href="#">
        			<div class="card-body">
        				<h6 class="card-subtitle">Total Orders</h6>

        				<div class="row align-items-center gx-2 mb-1">
        					<div class="col-6">
        						<span class="card-title h2">{{ count(App\DispatchOrders::all()) }}</span>
        					</div>

        					<div class="col-6">

        					</div>
        				</div>
        				<!-- End Row -->

        				<span class="badge badge-soft-success">
        					<i class="tio-trending-up"></i> 12.5%
        				</span>
        				<span class="text-body font-size-sm ml-1">from 70,104</span>
        			</div>
        		</a>
        		<!-- End Card -->
        	</div>


        </div>
        <!-- End Stats -->

        <div class="row gx-2 gx-lg-3">
        	<div class="col-md-12">
        		<!-- Card -->
		        <div class="card mb-3 mb-lg-5">
		          <!-- Header -->
		          <div class="card-header">
		            <div class="row justify-content-between align-items-center flex-grow-1">
		            	<div class="col-12 col-md">
		            		<div class="d-flex justify-content-between align-items-center">
		            			<h5 class="card-header-title">Pending Paid Orders</h5>
		            			

		            			<!-- Datatable Info -->
		            			<div id="datatableCounterInfo" style="display: none;">
		            				<div class="d-flex align-items-center">
		            					<span class="font-size-sm mr-3">
		            						<span id="datatableCounter">0</span>
		            						Selected
		            					</span>
		            					<a class="btn btn-sm btn-outline-danger" href="javascript:;">
		            						<i class="tio-delete-outlined"></i> Delete
		            					</a>
		            				</div>
		            			</div>
		            			<!-- End Datatable Info -->
		            		</div>
		            	</div>

		              <div class="col-auto">
		                <!-- Filter -->
		                <div class="row align-items-sm-center">
		                  <div class="col-sm-auto">
		                    <div class="d-flex align-items-center mr-2">
		                      <span class="text-secondary mr-2">Status:</span>

		                      <!-- Select -->
		                      <select class="js-select2-custom js-datatable-filter custom-select-sm" size="1" style="opacity: 0;"
		                              data-target-column-index="2"
		                              data-hs-select2-options='{
		                                "minimumResultsForSearch": "Infinity",
		                                "customClass": "custom-select custom-select-sm custom-select-borderless",
		                                "dropdownAutoWidth": true,
		                                "width": true
		                              }'>
		                        <option value="">All</option>
		                        <option value="awaiting rider">Awaiting Rider </option>
		                        <option value="in-transit">In-transit</option>
		                        <option value="completed">Completed</option>
		                      </select>
		                      <!-- End Select -->
		                    </div>
		                  </div>

		                 

		                  <div class="col-md">
		                    <form>
		                      <!-- Search -->
		                      <div class="input-group input-group-merge input-group-flush">
		                        <div class="input-group-prepend">
		                          <div class="input-group-text">
		                            <i class="tio-search"></i>
		                          </div>
		                        </div>
		                        <input id="datatableSearch" type="search" class="form-control" placeholder="Search" aria-label="Search">
		                      </div>
		                      <!-- End Search -->
		                    </form>
		                  </div>
		                </div>
		                <!-- End Filter -->
		              </div>
		            </div>
		          </div>
		          <!-- End Header -->

		          <!-- Table -->
		          <div class="table-responsive datatable-custom">
		            <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
		                   data-hs-datatables-options='{
		                     "columnDefs": [{
		                        "targets": [0],
		                        "orderable": false
		                      }],
		                     "order": [],
		                     "info": {
		                       "totalQty": "#datatableWithPaginationInfoTotalQty"
		                     },
		                     "search": "#datatableSearch",
		                     "entries": "#datatableEntries",
		                     "pageLength": {{count(App\DispatchOrders::orderBy("id", "DESC")->get())}},
		                     "isResponsive": false,
		                     "isShowPaging": false,
		                     "pagination": "datatablePagination"
		                   }'>
		              <thead class="thead-dark">
		                <tr>
		                  <th>
		                    S/N
		                  </th>
		                  <th>Ref</th>
		                  <th>Status</th>
		                  <th>Customer</th>
		                  <th>Pick Up</th>
		                  <th>Delivery</th>
		                  <th>Schedule</th>
		                  <th>Date</th>
		                  <th>Action</th>
		                </tr>
		              </thead>

		              <tbody>
		            	@php
                            $q = App\DispatchOrders::orderBy("id", "DESC")->get();
                        @endphp
                            @forelse($q as $r)
	                            @php
	                            	$x['id'] = $r->id;
	                            	$pickup_info = App\Site::convert_db_json_to_array($r->pickup_info);
	                            	$delivery_info = App\Site::convert_db_json_to_array($r->delivery_info);
	                            	$schedule = App\Site::convert_db_json_to_array($r->schedule);
	                            @endphp
	                            <tr>
	                            	<td>
	                            		{{ $loop->iteration }}
	                            	</td>
	                            	<td>
	                            		{{$r->ref}}
	                            	</td>
	                            	<td>
	                            		<span class="legend-indicator bg-success"></span>{{$r->status}}
	                            	</td>
	                            	<td>{{$r->user_id}}</td>
	                            	<td>{{$pickup_info['region']}}</td>
	                            	<td>{{$delivery_info['region']}}</td>
	                            	<td>
	                            		{{$schedule['type'] ?? '-'}}
	                            		<br/>
	                            		{{$schedule['time'] ?? ''}}
	                            		<br>
	                            		{{date("D M, d Y", strtotime($r->created_at))}}
	                            	</td>
	                            	<td>{{ App\Site::time_ago($r->created_at) }}</td>
	                            	<td>
	                            		<!-- Unfold -->
	                            		<div class="hs-unfold">
	                            			<a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;"
	                            			data-hs-unfold-options='{
	                            			"target": "#reportsOverviewDropdown{{ $loop->iteration }}",
	                            			"type": "css-animation"
	                            		}'>
	                            		<i class="tio-more-vertical"></i>
	                            	</a>

	                            	<div id="reportsOverviewDropdown{{ $loop->iteration }}" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
	                            		<span class="dropdown-header">Settings</span>

	                            		<a class="dropdown-item" href="#">
	                            			<i class="tio-share dropdown-item-icon"></i> Share reports
	                            		</a>
	                            		<a class="dropdown-item" href="#">
	                            			<i class="tio-download-to dropdown-item-icon"></i> Download
	                            		</a>
	                            		<a class="dropdown-item" href="#">
	                            			<i class="tio-alt dropdown-item-icon"></i> Connect other apps
	                            		</a>

	                            		<div class="dropdown-divider"></div>

	                            		<span class="dropdown-header">Feedback</span>

	                            		<a class="dropdown-item" href="#">
	                            			<i class="tio-chat-outlined dropdown-item-icon"></i> Report
	                            		</a>
	                            	</div>
	                            </div>
	                            <!-- End Unfold -->
	                            	</td>
	                            </tr>

	                        @empty

	                        @endforelse
		                
		              </tbody>
		            </table>
		          </div>
		          <!-- End Table -->

		          <!-- Footer -->
		          <div class="card-footer">
		            <!-- Pagination -->
		            <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
		              <div class="col-sm mb-2 mb-sm-0">
		                <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
		                  <span class="mr-2">Showing:</span>

		                  <!-- Select -->
		                  <select id="datatableEntries" class="js-select2-custom"
		                          data-hs-select2-options='{
		                            "minimumResultsForSearch": "Infinity",
		                            "customClass": "custom-select custom-select-sm custom-select-borderless",
		                            "dropdownAutoWidth": true,
		                            "width": true
		                          }'>
		                    <option value="2">2</option>
		                    <option value="5">5</option>
		                    <option value="10" selected="10">10</option>
		                    <option value="50">50</option>
		                  </select>
		                  <!-- End Select -->

		                  <span class="text-secondary mr-2">of</span>

		                  <!-- Pagination Quantity -->
		                  <span id="datatableWithPaginationInfoTotalQty">{{count(App\DispatchOrders::orderBy("id", "DESC")->get())}}</span>
		                </div>
		              </div>

		              <div class="col-sm-auto">
		                <div class="d-flex justify-content-center justify-content-sm-end">
		                  <!-- Pagination -->
		                  <nav id="datatablePagination" aria-label="Activity pagination"></nav>
		                </div>
		              </div>
		            </div>
		            <!-- End Pagination -->
		          </div>
		          <!-- End Footer -->
		        </div>
		        <!-- End Card -->
        	</div>
        </div>

    </div>
    <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
        <div class="row justify-content-between align-items-center">
            <div class="col">
                <p class="font-size-sm mb-0">&copy; <span class="d-none
                        d-sm-inline-block">2020 Astratech NG.</span></p>
            </div>
            
        </div>
    </div>



    <!-- End Footer -->
</main>
<!-- ========== END MAIN CONTENT ========== -->
@endsection