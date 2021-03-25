<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="card card-custom card-transparent">
            <div class="card-body p-0">
                <!--begin: Wizard-->
                <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
                    <!--begin: Wizard Nav-->
                    <div class="wizard-nav">
                        <div class="wizard-steps">
                            <!--begin::Wizard Step 1 Nav-->
                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                <div class="wizard-wrapper">
                                    <div class="wizard-number">1</div>
                                    <div class="wizard-label">
                                        <div class="wizard-title">Add Service</div>
                                        <div class="wizard-desc">Service Details Tab</div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Step 1 Nav-->
                            <!--begin::Wizard Step 2 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-number">2</div>
                                    <div class="wizard-label">
                                        <div class="wizard-title">Your Address</div>
                                        <div class="wizard-desc">Setup Your Address</div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Step 2 Nav-->
                            <!--begin::Wizard Step 3 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-number">3</div>
                                    <div class="wizard-label">
                                        <div class="wizard-title">Make Payment</div>
                                        <div class="wizard-desc">Add Payment Options</div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Step 3 Nav-->
                            <!--begin::Wizard Step 4 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-number">4</div>
                                    <div class="wizard-label">
                                        <div class="wizard-title">Completed</div>
                                        <div class="wizard-desc">Review and Submit</div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Step 4 Nav-->
                        </div>
                    </div>
                    <!--end: Wizard Nav-->
                    <!--begin: Wizard Body-->
                    <div class="card card-custom card-shadowless rounded-top-0">
                        <div class="card-body p-0">
                            <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                <div class="col-xl-12 col-xxl-7">
                                    <!--begin: Wizard Form-->
                                    <form class="form mt-0 mt-lg-10" id="kt_form">
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <div class="mb-10 font-weight-bold text-dark">Enter Service Details</div>
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Service Title</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="title" placeholder="Enter service title" value="" />
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Service Description</label>
                                                <textarea class="form-control form-control-solid form-control-lg" name="description" placeholder="Enter service description"/></textarea>
                                            </div>
                                            <!--end::Input-->
                                            <div class="row">
                                                <div class="col-xl-8">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Image Type</label>
                                                        <select class="form-control form-control-solid form-control-lg" name="image_type"/>
                                                            <option value="icon">Icon</option>
                                                            <option value="image">Image</option>
                                                        </select>
                                                        <span class="form-text text-muted">Please enter your phone number.</span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Select Icon</label>


                                                        
<!-- Button trigger modal-->
<button type="button" class=" form-control btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Select Icon
</button>

<!-- Modal-->
<div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title">Select Service Icon</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
			<div class="row">
			    <div class="col-md-6">
				    <form>
					    <div class="form-group">
						<input type="search" class="iconSearchInput form-control" placeholder="Search for icons">
						</div>
					</form>
				</div>
			</div>
												
												<div class="row iconSearchResult">
												</div>
												<div class="row">

													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-email-black-circular-button"></i>
															</div>
														</div>
													</div>

													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-map"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-alert-off"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-alert"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-computer"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-responsive"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-presentation"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-arrows"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-rocket"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-reply"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-gift"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-confetti"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-piggy-bank"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-support"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-delete"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-eye"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-multimedia"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-whatsapp"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-multimedia-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-email"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-presentation-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-trophy"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-psd"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-layer"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-doc"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-file"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-network"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-bus-stop"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-globe"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-upload"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-squares"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-technology"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-up-arrow"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-browser"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-speech-bubble"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-coins"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-open-box"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-speech-bubble-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-attachment"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-photo-camera"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-skype-logo"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-linkedin-logo"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-twitter-logo"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-facebook-letter-logo"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-calendar-with-a-clock-time-tools"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-youtube"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-add-circular-button"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-more-v2"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-search"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-search-magnifier-interface-symbol"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-questions-circular-button"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-refresh"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-logout"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-event-calendar-symbol"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-laptop"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-tool"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-graphic"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-symbol"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-graphic-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-clock"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-squares-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-black"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-book"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-cogwheel"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-exclamation"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-add-label-button"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-delete-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-interface"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-more"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-warning-sign"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-calendar"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-instagram-logo"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-linkedin"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-facebook-logo-button"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-twitter-logo-button"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-cancel"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-exclamation-square"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-buildings"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-danger"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-technology-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-letter-g"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-interface-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-circle"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-pin"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-close"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-clock-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-apps"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-user"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-menu-button"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-settings"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-home"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-clock-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-lifebuoy"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-cogwheel-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-paper-plane"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-statistics"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-diagram"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-line-graph"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-customer"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-visible"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-shopping-basket"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-price-tag"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-businesswoman"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-medal"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-like"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-edit"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-avatar"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-download"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-home-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-mail"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-mail-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-warning"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-cart"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-bag"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-pie-chart"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-graph"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-interface-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-chat"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-envelope"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-chat-1"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-interface-3"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-background"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-file-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-interface-4"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-multimedia-3"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-list"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-time"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-profile"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-imac"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-medical"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-music"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-plus"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-exclamation-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-info"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-menu-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-menu-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-share"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-interface-5"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-signs"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-tabs"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-multimedia-4"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-upload-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-web"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-placeholder"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-placeholder-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-layers"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-interface-6"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-interface-7"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-interface-8"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-tool-1"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-settings-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-alarm"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-search-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-time-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-stopwatch"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-folder"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-folder-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-folder-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-folder-3"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-file-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-list-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-list-2"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-calendar-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-time-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-interface-9"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-app"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-suitcase"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-grid-menu-v2"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-more-v6"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-more-v5"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-add"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-multimedia-5"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-more-v4"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-placeholder-2"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-map-location"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-users"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-profile-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-lock"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-sound"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-star"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-placeholder-3"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-bell"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-paper-plane-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-users-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-more-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-up-arrow-1"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-grid-menu"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-alarm-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-earth-globe"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-alert-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-internet"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-user-ok"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-user-add"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-user-settings"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-truck"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-analytics"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-notes"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-tea-cup"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-exclamation-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-technology-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-location"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-edit-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-home-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-dashboard"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-information"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-light"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-car"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-business"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-squares-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-signs-1"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-mark"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-squares-3"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-comment"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-shapes"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-clipboard"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-squares-4"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-delete-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-bell-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-list-3"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-infinity"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-chat-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-calendar-2"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-signs-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-time-3"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-calendar-3"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-interface-10"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-interface-11"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-folder-4"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-alert-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-cogwheel-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-graphic-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-rotate"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-feed"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-safe-shield-protection"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-security"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-download-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-pie-chart-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon-notepad"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-notification"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-settings"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-search"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-delete"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-psd"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-list"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-box"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-download"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-shield"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-paperplane"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-avatar"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-bell"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-fax"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-chart2"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-supermarket"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-phone"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-envelope"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-pin"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-chat"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-chart"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-infographic"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-grids"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-menu"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-plus"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-list-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-talk"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-file"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-user"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-line-chart"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-percentage"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-menu-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-paper-plane"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-menu-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-shopping-cart"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-pie-chart"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-box-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-map"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-favourite"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-checking"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-safe"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-heart-rate-monitor"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-layers"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-delivery-package"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-sms"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-image-file"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-plus-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-send"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-graphic-design"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-cup"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-website"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-gift"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-chronometer"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-browser"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-digital-marketing"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-calendar"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-calendar-1"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-rocket"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-analytics"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-pie-chart-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-pie-chart-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-analytics-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-google-drive-file"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-pie-chart-3"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-poll-symbol"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-gear"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-magnifier-tool"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-add"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-cube"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-gift-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-list-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-shopping-cart-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-calendar-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-laptop"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-cube-1"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-layers-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-chat-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-copy"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-paper"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-hospital"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-calendar-3"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-speaker"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-pie-chart-4"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-schedule"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-expand"></i>
															</div>

														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-menu-3"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-download-1"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-help"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-list-3"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-notepad"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-graph"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-browser-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-photograph"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-browser-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-hourglass"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-mail"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-cardiogram"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-document"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-contract"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-graph-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-graphic"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-position"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-soft-icons"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-circle-vol-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-rocket-1"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-lorry"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-cd"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-file-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-reload"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-placeholder"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-refresh"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-medical-records"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-rectangular"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-medical-records-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-indent-dots"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-search-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-edit"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-new-email"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-calendar-4"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-console"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-open-text-book"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-download-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-zig-zag-line-sign"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-tools-and-utensils"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-crisp-icons"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-trash"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-lock"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-bell-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-setup"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-menu-4"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-architecture-and-city"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-shelter"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-add-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-checkmark"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-circular-arrow"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-user-outline-symbol"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-rhombus"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-crisp-icons-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-soft-icons-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-hexagonal"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-time"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-contrast"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-telegram-logo"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-hangouts-logo"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-analytics-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-wifi"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-protected"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-drop"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-mail-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-delivery-truck"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-writing"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-calendar-5"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-protection"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-calendar-6"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-calendar-7"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-calendar-8"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-bell-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-hourglass-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-next"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-chat-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-correct"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-photo-camera"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-fast-next"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-fast-back"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-down"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-back"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-up"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-arrow-down"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-arrow-up"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-accept"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-sort"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-arrow"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-back-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-add-square"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-quotation-mark"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-clip-symbol"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-check-mark"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-folder"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-cancel-music"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-cross"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-pen"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-email"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-graph-2"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-open-box"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-files-and-folders"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-ui"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-sheet"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-dashboard"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-user-1"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-group"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-black-back-closed-envelope-shape"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-left-arrow"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-sort-alphabetically"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-sort-down"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-rubbish-bin"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-rubbish-bin-delete-button"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-calendar-9"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-tag"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-refresh-button"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-refresh-arrow"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-reload-1"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-refresh-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-left-arrow-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-reply"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-reply-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-printer"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-print"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-shrink"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-resize"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-arrow-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-size"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-arrow-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-cancel"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-exclamation"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-line"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-warning"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-information"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-layers-2"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-file-2"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-bell-3"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-bell-4"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-bell-5"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-bell-alarm-symbol"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-world"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-graphic-1"></i>
															</div>
														</div>
													</div>
												<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-send-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-location"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-pin-1"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-start-up"></i>
															</div>
														</div>
													</div>
													<div class="col-md-2 align-items-stretch">
														<div class="flex-grow-1 align-items-center bg-hover-light p-4 rounded">
															<div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
																<i class="icon-2x text-dark-50 searchIconElement flaticon2-right-arrow"></i>
															</div>
														</div>
													</div>
												</div>
											
            </div>
        </div>
    </div>
</div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 1-->
                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div class="mb-10 font-weight-bold text-dark">Setup Your Address</div>
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Address Line 1</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="address1" placeholder="Address Line 1" value="Address Line 1" />
                                                <span class="form-text text-muted">Please enter your Address.</span>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Address Line 2</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="address2" placeholder="Address Line 2" value="Address Line 2" />
                                                <span class="form-text text-muted">Please enter your Address.</span>
                                            </div>
                                            <!--end::Input-->
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Postcode</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="postcode" placeholder="Postcode" value="3000" />
                                                        <span class="form-text text-muted">Please enter your Postcode.</span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="state" placeholder="City" value="Melbourne" />
                                                        <span class="form-text text-muted">Please enter your City.</span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>State</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="state" placeholder="State" value="VIC" />
                                                        <span class="form-text text-muted">Please enter your State.</span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select name="country" class="form-control form-control-solid form-control-lg">
                                                            <option value="">Select</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">Åland Islands</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU" selected="selected">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia, Plurinational State of</option>
                                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="BN">Brunei Darussalam</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Côte d'Ivoire</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Island and McDonald Islands</option>
                                                            <option value="VA">Holy See (Vatican City State)</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran, Islamic Republic of</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                                            <option value="KR">Korea, Republic of</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Lao People's Democratic Republic</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao</option>
                                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia, Federated States of</option>
                                                            <option value="MD">Moldova, Republic of</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PS">Palestinian Territory, Occupied</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Réunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russian Federation</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="BL">Saint Barthélemy</option>
                                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="MF">Saint Martin (French part)</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">Sao Tome and Principe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syrian Arab Republic</option>
                                                            <option value="TW">Taiwan, Province of China</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UM">United States Minor Outlying Islands</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                            <option value="VN">Viet Nam</option>
                                                            <option value="VG">Virgin Islands, British</option>
                                                            <option value="VI">Virgin Islands, U.S.</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Select-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 2-->
                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div class="mb-10 font-weight-bold text-dark">Enter your Payment Details</div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Name on Card</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="ccname" placeholder="Card Name" value="John Wick" />
                                                        <span class="form-text text-muted">Please enter your Card Name.</span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Card Number</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="ccnumber" placeholder="Card Number" value="4444 3333 2222 1111" />
                                                        <span class="form-text text-muted">Please enter your Address.</span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Card Expiry Month</label>
                                                        <input type="number" class="form-control form-control-solid form-control-lg" name="ccmonth" placeholder="Card Expiry Month" value="01" />
                                                        <span class="form-text text-muted">Please enter your Card Expiry Month.</span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Card Expiry Year</label>
                                                        <input type="number" class="form-control form-control-solid form-control-lg" name="ccyear" placeholder="Card Expire Year" value="21" />
                                                        <span class="form-text text-muted">Please enter your Card Expiry Year.</span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Card CVV Number</label>
                                                        <input type="password" class="form-control form-control-solid form-control-lg" name="cccvv" placeholder="Card CVV Number" value="123" />
                                                        <span class="form-text text-muted">Please enter your Card CVV Number.</span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 3-->
                                        <!--begin: Wizard Step 4-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Section-->
                                            <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>
                                            <h6 class="font-weight-bolder mb-3">Current Address:</h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div>Address Line 1</div>
                                                <div>Address Line 2</div>
                                                <div>Melbourne 3000, VIC, Australia</div>
                                            </div>
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <h6 class="font-weight-bolder mb-3">Delivery Details:</h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div>Package: Complete Workstation (Monitor, Computer, Keyboard &amp; Mouse)</div>
                                                <div>Weight: 25kg</div>
                                                <div>Dimensions: 110cm (w) x 90cm (h) x 150cm (L)</div>
                                            </div>
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <h6 class="font-weight-bolder mb-3">Delivery Service Type:</h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div>Overnight Delivery with Regular Packaging</div>
                                                <div>Preferred Morning (8:00AM - 11:00AM) Delivery</div>
                                            </div>
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <h6 class="font-weight-bolder mb-3">Delivery Address:</h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div>Address Line 1</div>
                                                <div>Address Line 2</div>
                                                <div>Preston 3072, VIC, Australia</div>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end: Wizard Step 4-->
                                        <!--begin: Wizard Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                                <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next</button>
                                            </div>
                                        </div>
                                        <!--end: Wizard Actions-->
                                    </form>
                                    <!--end: Wizard Form-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Wizard Bpdy-->
                </div>
                <!--end: Wizard-->
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->