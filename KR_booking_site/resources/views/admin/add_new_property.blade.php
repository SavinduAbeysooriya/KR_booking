@extends('layouts.admin')

@section('content')
        {{--  <div class="mb-9">
          <h2 class="fs-5 mb-4 mb-xl-5">Add New Property</h2>
          <div class="theme-wizard" data-theme-wizard="data-theme-wizard" data-wizard-modal-disabled="data-wizard-modal-disabled">
            <div class="row gx-0 gx-xl-5">
              <div class="col-xl-4 order-xl-1">
                <div class="scrollbar mb-4">
                  <ul class="nav justify-content-between flex-nowrap nav-wizard nav-wizard-vertical-xl" data-tab-map-container="data-tab-map-container">
                    <li class="nav-item"><a class="nav-link active py-0 py-xl-3" href="#add-property-wizard-tab1" data-bs-toggle="tab" data-wizard-step="1">
                        <div class="text-center d-inline-block d-xl-flex align-items-center gap-3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fa-solid fa-file nav-item-icon"></span><span class="fa-solid fa-check check-icon"></span></span></span><span class="nav-item-title fs-9 fs-xl-8">Info</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-0 py-xl-3" href="#add-property-wizard-tab2" data-bs-toggle="tab" data-wizard-step="2">
                        <div class="text-center d-inline-block d-xl-flex align-items-center gap-3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fa-solid fa-location-dot nav-item-icon"></span><span class="fa-solid fa-check check-icon"></span></span></span><span class="nav-item-title fs-9 fs-xl-8">Location</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-0 py-xl-3" href="#add-property-wizard-tab3" data-bs-toggle="tab" data-wizard-step="3">
                        <div class="text-center d-inline-block d-xl-flex align-items-center gap-3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fa-solid fa-mug-saucer nav-item-icon"></span><span class="fa-solid fa-check check-icon"></span></span></span><span class="nav-item-title fs-9 fs-xl-8">Amenities</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-0 py-xl-3" href="#add-property-wizard-tab4" data-bs-toggle="tab" data-wizard-step="4">
                        <div class="text-center d-inline-block d-xl-flex align-items-center gap-3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fa-solid fa-images nav-item-icon"></span><span class="fa-solid fa-check check-icon"></span></span></span><span class="nav-item-title fs-9 fs-xl-8">Photos</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-0 py-xl-3" href="#add-property-wizard-tab5" data-bs-toggle="tab" data-wizard-step="5">
                        <div class="text-center d-inline-block d-xl-flex align-items-center gap-3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fa-solid fa-usd nav-item-icon"></span><span class="fa-solid fa-check check-icon"></span></span></span><span class="nav-item-title fs-9 fs-xl-8">Finance</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-0 py-xl-3" href="#add-property-wizard-tab6" data-bs-toggle="tab" data-wizard-step="6">
                        <div class="text-center d-inline-block d-xl-flex align-items-center gap-3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fa-solid fa-shield-halved nav-item-icon"></span><span class="fa-solid fa-check check-icon"></span></span></span><span class="nav-item-title fs-9 fs-xl-8">Policies</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-0 py-xl-3" href="#add-property-wizard-tab7" data-bs-toggle="tab" data-wizard-step="7">
                        <div class="text-center d-inline-block d-xl-flex align-items-center gap-3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-check"></span></span></span><span class="nav-item-title fs-9 fs-xl-8">Done</span></div>
                      </a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-8 flex-1">
                <div class="row">
                  <div class="col-xxl-8">
                    <div class="tab-content">
                      <div class="tab-pane active" role="tabpanel" aria-labelledby="add-property-wizard-tab1" id="add-property-wizard-tab1">
                        <form id="addPropertyWizardForm1" data-wizard-form="1">
                          <h3 class="mb-6">Basic information</h3>
                          <h4 class="mb-4">Property Information</h4>
                          <div class="form-floating">
                            <input class="form-control" type="text" name="add-property-wizard-name" id="add-property-wizardwizard-name" placeholder="Property Name" value="With help text" />
                            <label for="add-property-wizardwizard-name">Property Name</label>
                            <h5 class="text-end text-body-quaternary fw-semibold mt-2"><span class="text-primary">15 </span>/ 60</h5>
                          </div>
                          <div class="form-floating my-3">
                            <textarea class="form-control" placeholder="Description" name="add-property-wizard-message" id="add-property-wizard-wizard-des" style="height: 162px"></textarea>
                            <label for="add-property-wizard-wizard-des">DESCRIPTION</label>
                            <h5 class="text-end text-body-quaternary fw-semibold mt-2"><span class="text-primary">0 </span>/ 360</h5>
                          </div>
                          <div class="row g-3">
                            <div class="col-md-8 col-lg-12 col-xl-8">
                              <div class="form-floating">
                                <select class="form-select" name="add-property-wizard-type" id="add-property-wizardproperty-type">
                                  <option selected="selected" value="1">Hotel</option>
                                  <option value="1">Flight</option>
                                  <option value="2">Trip</option>
                                </select>
                                <label for="add-property-wizardproperty-type">Property Type</label>
                              </div>
                            </div>
                            <div class="col-md-4 col-lg-12 col-xl-4">
                              <div class="form-icon-container">
                                <div class="form-floating">
                                  <select class="form-select form-icon-input" name="add-property-wizard-type" id="add-property-wizardrating-type">
                                    <option selected="selected" value="5">5 star</option>
                                    <option value="4">4 star</option>
                                    <option value="3">3 star</option>
                                    <option value="2">2 star</option>
                                    <option value="1">1 star</option>
                                  </select>
                                  <label class="text-body-tertiary form-icon-label" for="add-property-wizardrating-type">Rating</label>
                                </div><span class="fa-solid fa-star text-warning form-icon fs-10"></span>
                              </div>
                            </div>
                          </div>
                          <h4 class="mt-6 mb-3">Contact Information</h4>
                          <div class="row g-3">
                            <div class="col-md-6">
                              <div class="form-floating">
                                <input class="form-control input-spin-none" type="email" name="add-property-wizard-email" id="add-property-wizardwizard-email" placeholder="Email Address" />
                                <label for="add-property-wizardwizard-email">Email Address</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-floating">
                                <input class="form-control input-spin-none" type="number" name="add-property-wizard-phone" id="add-property-wizardwizard-phone" placeholder="Phone number" />
                                <label for="add-property-wizardwizard-phone">Phone number</label>
                              </div>
                            </div>
                          </div>
                          <h4 class="mt-6 mb-3">Is it part of a hotel / property chain?</h4>
                          <div class="row align-items-center g-3">
                            <div class="col-sm-auto">
                              <div class="form-check form-check-inline me-4 me-sm-7 mb-0">
                                <input class="form-check-input" id="no1" type="radio" name="CheckIsHotelRadio" value="no" checked="checked" />
                                <label class="form-check-label" for="no1">No</label>
                              </div>
                              <div class="form-check form-check-inline me-0 mb-0">
                                <input class="form-check-input" id="yes1" type="radio" name="CheckIsHotelRadio" value="yes" />
                                <label class="form-check-label" for="yes1">Yes</label>
                              </div>
                            </div>
                            <div class="col-sm-auto flex-1">
                              <div class="form-floating">
                                <input class="form-control" type="text" name="add-property-wizard-company" id="add-property-wizardwizard-company" placeholder="Name of Company, Group or Chain" value="With help text" disabled="disabled" />
                                <label for="add-property-wizardwizard-company">Name of Company, Group or Chain</label>
                              </div>
                            </div>
                          </div>
                          <h4 class="mt-6 mb-3">Do you use a Channel Management Systems?</h4>
                          <div class="row align-items-center g-3">
                            <div class="col-sm-auto">
                              <div class="form-check form-check-inline me-4 me-sm-7 mb-0">
                                <input class="form-check-input" id="no2" type="radio" name="CheckUseRadio" value="no" />
                                <label class="form-check-label" for="no2">No</label>
                              </div>
                              <div class="form-check form-check-inline me-0 mb-0">
                                <input class="form-check-input" id="yes2" type="radio" name="CheckUseRadio" value="yes" checked="checked" />
                                <label class="form-check-label" for="yes2">Yes</label>
                              </div>
                            </div>
                            <div class="col-sm-auto flex-1">
                              <div class="form-floating">
                                <input class="form-control" type="text" name="add-property-wizard-cms" id="add-property-wizardwizard-cms" placeholder="CMS Provider name" value="" />
                                <label for="add-property-wizardwizard-cms">CMS Provider name</label><span class="fa-solid fa-search position-absolute text-body-quaternary fs-9 end-0 top-0 mt-3 me-3" data-fa-transform="down-2"></span>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane" role="tabpanel" aria-labelledby="add-property-wizard-tab2" id="add-property-wizard-tab2">
                        <form id="addPropertyWizardForm2" novalidate="novalidate" data-wizard-form="2">
                          <h3 class="mb-6">Location</h3>
                          <div class="form-icon-container">
                            <div class="form-floating">
                              <input class="form-control form-icon-input" type="text" name="add-property-wizard-search-address" id="add-property-wizardwizard-search-address" placeholder="Search address..." />
                              <label class="text-body-tertiary form-icon-label" for="add-property-wizardwizard-search-address">Search address...</label>
                            </div><span class="fa-solid fa-location-dot text-body form-icon fs-10"></span><span class="fa-solid fa-location-crosshairs position-absolute text-primary fs-9 end-0 top-0 mt-3 me-3" data-fa-transform="down-2"></span>
                          </div>
                          <div class="mapbox-container rounded-3 border overflow-hidden mt-3 mb-6">
                            <div id="mapbox" data-mapbox='{"attributionControl":false,"center":[-74.0020158,40.7228022],"zoom":14,"scrollZoom":false}' style="height: 250px"></div>
                          </div>
                          <div class="form-floating">
                            <input class="form-control" type="text" name="add-property-wizard-street" id="add-property-wizardwizard-street" placeholder="Apartment / Street" />
                            <label for="add-property-wizardwizard-street">Apartment / Street</label>
                          </div>
                          <div class="row gx-3 my-3">
                            <div class="col-md-6">
                              <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" type="text" name="add-property-wizard-city" id="add-property-wizardwizard-city" placeholder="City" />
                                <label for="add-property-wizardwizard-city">City</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-floating">
                                <input class="form-control" type="text" name="add-property-wizard-state" id="add-property-wizardwizard-state" placeholder="State (Optional)" />
                                <label for="add-property-wizardwizard-state">State (Optional)</label>
                              </div>
                            </div>
                          </div>
                          <div class="row g-3">
                            <div class="col-md-6">
                              <div class="form-floating">
                                <input class="form-control" type="text" name="add-property-wizard-zip-code" id="add-property-wizardwizard-zip-code" placeholder="Zip Code" />
                                <label for="add-property-wizardwizard-zip-code">Zip Code</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-floating">
                                <input class="form-control" type="text" name="add-property-wizard-country" id="add-property-wizardwizard-country" placeholder="Country / Region" />
                                <label for="add-property-wizardwizard-country">Country / Region</label>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex align-items-center gap-3 mt-6">
                            <h4>Show your specific location</h4>
                            <div class="form-check form-switch">
                              <input class="form-check-input" id="locationSwitchCheckChecked" type="checkbox" checked="" />
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane" role="tabpanel" aria-labelledby="add-property-wizard-tab3" id="add-property-wizard-tab3">
                        <form id="addPropertyWizardForm3" novalidate="novalidate" data-wizard-form="3">
                          <div>
                            <h3 class="mb-6">General amenities</h3>
                            <div class="row g-3">
                              <div class="col-sm-auto flex-sm-fill">
                                <div class="form-floating">
                                  <input class="form-control" type="text" name="add-property-wizard-search-amenities" id="add-property-wizardwizard-search-amenities" placeholder="Search amenities" value="" />
                                  <label for="add-property-wizardwizard-search-amenities">Search amenities</label><span class="fa-solid fa-search position-absolute text-body-quaternary fs-9 end-0 top-0 mt-3 me-3" data-fa-transform="down-2"></span>
                                </div>
                              </div>
                              <div class="col-sm-auto">
                                <button class="btn btn-phoenix-primary w-100 h-100 fs-8"><span class="fa-solid fa-plus me-2"></span>Add amenity</button>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-button-arrow-icon accordion mt-2" id="generalAmenitiesAccordion">
                            <div class="accordion-item px-0 py-3">
                              <h5 class="accordion-header">
                                <button class="accordion-button py-0 text-body-highlight" type="button" data-bs-toggle="collapse" data-bs-target="#popularAmenities" aria-expanded="true" aria-controls="popularAmenities"><span class="circle-icon-item border border-primary text-primary me-3"><span class="fa-solid fa-fire"></span></span><span class="flex-1">Popular amenities</span></button>
                              </h5>
                              <div class="accordion-collapse collapse ms-md-9 show" id="popularAmenities" data-bs-parent="#generalAmenitiesAccordion">
                                <div class="form-price-tier border p-3 rounded-2 my-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="wifi" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="wifi">Wifi</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="wifi-free" name="Wifi-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="wifi-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="wifi-paid" name="Wifi-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="wifi-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="wifi-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="wifi-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="wifi-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="wifi-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="wifi-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="wifi-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="breakfast" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="breakfast">Breakfast</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="breakfast-free" name="Breakfast-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="breakfast-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="breakfast-paid" name="Breakfast-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="breakfast-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="breakfast-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="breakfast-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="breakfast-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="breakfast-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="breakfast-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="breakfast-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="gym" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="gym">Gym</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="gym-free" name="Gym-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="gym-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="gym-paid" name="Gym-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="gym-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="gym-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="gym-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="gym-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="gym-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="gym-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="gym-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="swimming" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="swimming">Swimming pool</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="swimming-free" name="Swimming pool-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="swimming-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="swimming-paid" name="Swimming pool-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="swimming-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="swimming-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="swimming-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="swimming-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="swimming-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="swimming-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="swimming-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="in-room" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="in-room">In-room coffee/tea</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="in-room-free" name="In-room coffee/tea-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="in-room-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="in-room-paid" name="In-room coffee/tea-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="in-room-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="in-room-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="in-room-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="in-room-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="in-room-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="in-room-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="in-room-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="daily-housekeeping" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="daily-housekeeping">Daily housekeeping</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="daily-housekeeping-free" name="Daily housekeeping-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="daily-housekeeping-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="daily-housekeeping-paid" name="Daily housekeeping-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="daily-housekeeping-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="daily-housekeeping-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="daily-housekeeping-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="daily-housekeeping-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="daily-housekeeping-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="daily-housekeeping-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="daily-housekeeping-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="bar" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="bar">Bar / Lounge</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="bar-free" name="Bar / Lounge-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="bar-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="bar-paid" name="Bar / Lounge-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="bar-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="bar-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="bar-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="bar-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="bar-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="bar-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="bar-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="laundry" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="laundry">Laundry</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="laundry-free" name="Laundry-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="laundry-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="laundry-paid" name="Laundry-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="laundry-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="laundry-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="laundry-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="laundry-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="laundry-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="laundry-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="laundry-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="newspaper" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="newspaper">Newspaper</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="newspaper-free" name="Newspaper-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="newspaper-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="newspaper-paid" name="Newspaper-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="newspaper-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="newspaper-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="newspaper-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="newspaper-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="newspaper-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="newspaper-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="newspaper-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="bicycle" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="bicycle">Bicycle</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="bicycle-free" name="Bicycle-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="bicycle-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="bicycle-paid" name="Bicycle-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="bicycle-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="bicycle-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="bicycle-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="bicycle-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="bicycle-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="bicycle-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="bicycle-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="air" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="air">Air conditioning</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="air-free" name="Air conditioning-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="air-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="air-paid" name="Air conditioning-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="air-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="air-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="air-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="air-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="air-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="air-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="air-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="games" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="games">Games room</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="games-free" name="Games room-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="games-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="games-paid" name="Games room-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="games-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="games-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="games-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="games-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="games-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="games-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="games-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="beach" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="beach">Beach view</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="beach-free" name="Beach view-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="beach-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="beach-paid" name="Beach view-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="beach-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="beach-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="beach-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="beach-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="beach-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="beach-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="beach-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item px-0 py-3">
                              <h5 class="accordion-header">
                                <button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#foodAndDrink" aria-expanded="false" aria-controls="foodAndDrink"><span class="circle-icon-item border border-primary text-primary me-3"><span class="fa-solid fa-utensils"></span></span><span class="flex-1 me-2">Food & Drink</span></button>
                              </h5>
                              <div class="accordion-collapse collapse ms-md-9" id="foodAndDrink" data-bs-parent="#generalAmenitiesAccordion">
                                <div class="form-price-tier border p-3 rounded-2 my-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="restaurants" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="restaurants">Restaurants</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="restaurants-free" name="Restaurants-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="restaurants-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="restaurants-paid" name="Restaurants-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="restaurants-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="restaurants-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="restaurants-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="restaurants-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="restaurants-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="restaurants-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="restaurants-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="bars" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="bars">Bars</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="bars-free" name="Bars-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="bars-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="bars-paid" name="Bars-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="bars-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="bars-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="bars-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="bars-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="bars-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="bars-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="bars-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="in-room-dining" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="in-room-dining">In-Room Dining</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="in-room-dining-free" name="In-Room Dining-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="in-room-dining-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="in-room-dining-paid" name="In-Room Dining-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="in-room-dining-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="in-room-dining-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="in-room-dining-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="in-room-dining-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="in-room-dining-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="in-room-dining-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="in-room-dining-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="family-friendly-dining" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="family-friendly-dining">Family-Friendly Dining</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="family-friendly-dining-free" name="Family-Friendly Dining-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="family-friendly-dining-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="family-friendly-dining-paid" name="Family-Friendly Dining-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="family-friendly-dining-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="family-friendly-dining-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="family-friendly-dining-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="family-friendly-dining-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="family-friendly-dining-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="family-friendly-dining-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="family-friendly-dining-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="breakfast-buffet" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="breakfast-buffet">Breakfast Buffet</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="breakfast-buffet-free" name="Breakfast Buffet-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="breakfast-buffet-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="breakfast-buffet-paid" name="Breakfast Buffet-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="breakfast-buffet-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="breakfast-buffet-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="breakfast-buffet-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="breakfast-buffet-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="breakfast-buffet-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="breakfast-buffet-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="breakfast-buffet-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item px-0 py-3">
                              <h5 class="accordion-header">
                                <button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#outdoorAndView" aria-expanded="false" aria-controls="outdoorAndView"><span class="circle-icon-item border border-primary text-primary me-3"><span class="fa-solid fa-umbrella-beach"></span></span><span class="flex-1 me-2">Outdoor & View</span></button>
                              </h5>
                              <div class="accordion-collapse collapse ms-md-9" id="outdoorAndView" data-bs-parent="#generalAmenitiesAccordion">
                                <div class="form-price-tier border p-3 rounded-2 my-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="garden-or-courtyard" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="garden-or-courtyard">Garden or Courtyard</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="garden-or-courtyard-free" name="Garden or Courtyard-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="garden-or-courtyard-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="garden-or-courtyard-paid" name="Garden or Courtyard-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="garden-or-courtyard-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="garden-or-courtyard-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="garden-or-courtyard-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="garden-or-courtyard-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="garden-or-courtyard-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="garden-or-courtyard-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="garden-or-courtyard-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="scenic-views" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="scenic-views">Scenic Views</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="scenic-views-free" name="Scenic Views-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="scenic-views-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="scenic-views-paid" name="Scenic Views-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="scenic-views-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="scenic-views-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="scenic-views-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="scenic-views-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="scenic-views-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="scenic-views-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="scenic-views-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="sunbathing-areas" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="sunbathing-areas">Sunbathing Areas</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="sunbathing-areas-free" name="Sunbathing Areas-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="sunbathing-areas-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="sunbathing-areas-paid" name="Sunbathing Areas-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="sunbathing-areas-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="sunbathing-areas-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="sunbathing-areas-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="sunbathing-areas-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="sunbathing-areas-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="sunbathing-areas-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="sunbathing-areas-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="outdoor-lounge-areas" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="outdoor-lounge-areas">Outdoor Lounge Areas</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="outdoor-lounge-areas-free" name="Outdoor Lounge Areas-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="outdoor-lounge-areas-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="outdoor-lounge-areas-paid" name="Outdoor Lounge Areas-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="outdoor-lounge-areas-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="outdoor-lounge-areas-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="outdoor-lounge-areas-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="outdoor-lounge-areas-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="outdoor-lounge-areas-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="outdoor-lounge-areas-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="outdoor-lounge-areas-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item px-0 py-3">
                              <h5 class="accordion-header">
                                <button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intertainment" aria-expanded="false" aria-controls="intertainment"><span class="circle-icon-item border border-primary text-primary me-3"><span class="fa-solid fa-cart-shopping"></span></span><span class="flex-1 me-2">Entertainment & Family Services</span></button>
                              </h5>
                              <div class="accordion-collapse collapse ms-md-9" id="intertainment" data-bs-parent="#generalAmenitiesAccordion">
                                <div class="form-price-tier border p-3 rounded-2 my-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="game-room" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="game-room">Game Room</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="game-room-free" name="Game Room-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="game-room-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="game-room-paid" name="Game Room-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="game-room-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="game-room-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="game-room-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="game-room-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="game-room-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="game-room-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="game-room-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="play-area" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="play-area">Children's Play Area</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="play-area-free" name="Children's Play Area-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="play-area-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="play-area-paid" name="Children's Play Area-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="play-area-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="play-area-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="play-area-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="play-area-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="play-area-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="play-area-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="play-area-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="sports-facilities" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="sports-facilities">Sports Facilities</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="sports-facilities-free" name="Sports Facilities-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="sports-facilities-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="sports-facilities-paid" name="Sports Facilities-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="sports-facilities-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="sports-facilities-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="sports-facilities-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="sports-facilities-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="sports-facilities-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="sports-facilities-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="sports-facilities-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="babysitting-services" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="babysitting-services">Babysitting Services</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="babysitting-services-free" name="Babysitting Services-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="babysitting-services-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="babysitting-services-paid" name="Babysitting Services-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="babysitting-services-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="babysitting-services-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="babysitting-services-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="babysitting-services-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="babysitting-services-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="babysitting-services-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="babysitting-services-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item px-0 py-3">
                              <h5 class="accordion-header">
                                <button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mediaAndTechnology" aria-expanded="false" aria-controls="mediaAndTechnology"><span class="circle-icon-item border border-primary text-primary me-3"><span class="fa-solid fa-video"></span></span><span class="flex-1 me-2">Media & Technology</span></button>
                              </h5>
                              <div class="accordion-collapse collapse ms-md-9" id="mediaAndTechnology" data-bs-parent="#generalAmenitiesAccordion">
                                <div class="form-price-tier border p-3 rounded-2 my-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="high-speed-internet" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="high-speed-internet">High-Speed Internet</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="high-speed-internet-free" name="High-Speed Internet-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="high-speed-internet-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="high-speed-internet-paid" name="High-Speed Internet-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="high-speed-internet-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="high-speed-internet-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="high-speed-internet-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="high-speed-internet-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="high-speed-internet-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="high-speed-internet-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="high-speed-internet-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="business-center" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="business-center">Business Center</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="business-center-free" name="Business Center-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="business-center-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="business-center-paid" name="Business Center-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="business-center-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="business-center-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="business-center-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="business-center-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="business-center-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="business-center-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="business-center-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="video-conferencing" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="video-conferencing">Video Conferencing Facilities</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="video-conferencing-free" name="Video Conferencing Facilities-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="video-conferencing-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="video-conferencing-paid" name="Video Conferencing Facilities-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="video-conferencing-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="video-conferencing-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="video-conferencing-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="video-conferencing-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="video-conferencing-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="video-conferencing-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="video-conferencing-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="vr" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="vr">Virtual Reality (VR) Experiences</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="vr-free" name="Virtual Reality (VR) Experiences-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="vr-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="vr-paid" name="Virtual Reality (VR) Experiences-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="vr-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="vr-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="vr-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="vr-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="vr-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="vr-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="vr-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item px-0 py-3">
                              <h5 class="accordion-header">
                                <button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accessibility" aria-expanded="false" aria-controls="accessibility"><span class="circle-icon-item border border-primary text-primary me-3"><span class="fa-solid fa-universal-access"></span></span><span class="flex-1 me-2">Accessibility</span></button>
                              </h5>
                              <div class="accordion-collapse collapse ms-md-9" id="accessibility" data-bs-parent="#generalAmenitiesAccordion">
                                <div class="form-price-tier border p-3 rounded-2 my-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="accessible-common-areas" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="accessible-common-areas">Accessible Common Areas</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="accessible-common-areas-free" name="Accessible Common Areas-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="accessible-common-areas-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="accessible-common-areas-paid" name="Accessible Common Areas-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="accessible-common-areas-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="accessible-common-areas-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-common-areas-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="accessible-common-areas-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-common-areas-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="accessible-common-areas-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-common-areas-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="accessible-parking-spaces" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="accessible-parking-spaces">Accessible Parking Spaces</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="accessible-parking-spaces-free" name="Accessible Parking Spaces-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="accessible-parking-spaces-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="accessible-parking-spaces-paid" name="Accessible Parking Spaces-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="accessible-parking-spaces-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="accessible-parking-spaces-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-parking-spaces-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="accessible-parking-spaces-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-parking-spaces-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="accessible-parking-spaces-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-parking-spaces-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="accessible-fitness-center" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="accessible-fitness-center">Accessible Fitness Center</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="accessible-fitness-center-free" name="Accessible Fitness Center-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="accessible-fitness-center-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="accessible-fitness-center-paid" name="Accessible Fitness Center-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="accessible-fitness-center-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="accessible-fitness-center-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-fitness-center-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="accessible-fitness-center-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-fitness-center-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="accessible-fitness-center-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-fitness-center-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0">
                                      <input class="form-check-input" id="accessible-swimmings-pool" type="checkbox" data-price-toggle="data-price-toggle" />
                                      <label class="form-check-label fs-8 fw-bold text-body ms-2" for="accessible-swimmings-pool">Accessible Swimming Pool</label>
                                    </div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0">
                                        <input class="form-check-input" type="radio" id="accessible-swimmings-pool-free" name="Accessible Swimming Pool-radio" value="free" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="accessible-swimmings-pool-free">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline me-0 mb-0">
                                        <input class="form-check-input" type="radio" id="accessible-swimmings-pool-paid" name="Accessible Swimming Pool-radio" value="paid" data-pricing="data-pricing" />
                                        <label class="form-check-label" for="accessible-swimmings-pool-paid">Paid</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="accessible-swimmings-pool-option1" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-swimmings-pool-option1">Option 1</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="accessible-swimmings-pool-option2" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-swimmings-pool-option2">Option 2</label>
                                      </div>
                                      <div class="form-check mb-4">
                                        <input class="form-check-input" id="accessible-swimmings-pool-option3" type="checkbox" />
                                        <label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-swimmings-pool-option3">Option 3</label>
                                      </div>
                                      <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane" role="tabpanel" aria-labelledby="add-property-wizard-tab4" id="add-property-wizard-tab4">
                        <form id="addPropertyWizardForm4" novalidate="novalidate" data-wizard-form="4">
                          <h3 class="mb-6">Add property picture</h3>
                          <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                            <div class="fallback">
                              <input name="file" type="file" multiple="multiple" />
                            </div>
                            <div class="dz-message text-body-tertiary text-opacity-85" data-dz-message="data-dz-message">Drag your photo here<span class="text-body-secondary px-1">or</span>
                              <button class="btn btn-link p-0" type="button">Browse from device</button><br /><img class="mt-3 me-2" src="../../../../assets/img/icons/image-icon.png" width="40" alt="" />
                            </div>
                            <div class="dz-preview d-flex flex-wrap mt-3">
                              <div class="rounded-2 overflow-hidden me-2 mb-2 position-relative" style="height:140px;width:200px;"><img class="w-100 h-100 object-fit-cover" src="../../../../assets/img/products/23.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" />
                                <button class="btn dropdown-toggle dropdown-caret-none px-3 text-body bg-body dz-remove w-auto h-auto py-0 border" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="top: 16px; right: 16px"><span class="fa-solid fa-ellipsis"></span></button>
                                <ul class="dropdown-menu dropdown-menu-end py-1">
                                  <li><a class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane" role="tabpanel" aria-labelledby="add-property-wizard-tab5" id="add-property-wizard-tab5">
                        <form id="addPropertyWizardForm5" novalidate="novalidate" data-wizard-form="5">
                          <h3 class="mb-6">Finance</h3>
                          <h4 class="mb-4">Payment from Phoenix Booking Management</h4>
                          <div class="row g-3">
                            <div class="col-md-6">
                              <div class="form-floating">
                                <input class="form-control" type="text" name="add-property-wizard-currency" id="add-property-wizardwizard-currency" placeholder="payment currency" value="$ US Dollar" />
                                <label for="add-property-wizardwizard-currency">payment currency</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-floating">
                                <input class="form-control" type="text" name="add-property-wizard-percentage" id="add-property-wizardwizard-percentage" placeholder="Commission Percentage" value="Flat 10%" disabled="disabled" />
                                <label for="add-property-wizardwizard-percentage">Commission Percentage</label>
                              </div>
                            </div>
                          </div>
                          <div class="form-floating mt-3">
                            <select class="form-select form-icon-input" name="add-property-wizard-type" id="add-property-wizardEFT-type">
                              <option selected="selected">Electronic Funds Transfer (EFT)</option>
                              <option>Option 2</option>
                              <option>Option 3</option>
                            </select>
                            <label class="form-icon-label" for="add-property-wizardEFT-type">Select Payment Method</label>
                          </div>
                          <div class="form-check my-4">
                            <input class="form-check-input" id="invoiceChecked" type="checkbox" checked="checked" />
                            <label class="form-check-label fw-normal fs-8" for="invoiceChecked">Invoice to the name and address of property</label>
                          </div>
                          <div class="form-floating mb-4">
                            <input class="form-control" type="text" name="add-property-wizard-invoice-email" id="add-property-wizardwizard-invoice-email" placeholder="Invoice email" />
                            <label for="add-property-wizardwizard-invoice-email">Invoice email</label><a class="position-absolute d-flex align-items-center px-3 fw-bold fs-9 end-0 top-0 mt-3 me-2">Verify now </a>
                          </div>
                          <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" id="creditCard" type="radio" name="paymentMethod" value="creditCard" checked="checked" />
                            <label class="form-check-label fs-8" for="creditCard">Credit Card</label>
                          </div>
                          <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" id="bankAccount" type="radio" name="paymentMethod" value="bankAccount" />
                            <label class="form-check-label fs-8" for="bankAccount">Bank Account</label>
                          </div>
                          <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" id="online" type="radio" name="paymentMethod" value="online" />
                            <label class="form-check-label fs-8" for="online">Online</label>
                          </div>
                          <div class="row g-3">
                            <div class="col-md-6">
                              <div class="form-floating">
                                <select class="form-select form-icon-input" name="add-property-wizard-type" id="add-property-wizardcard-type">
                                  <option selected="selected">Visa Debit card</option>
                                  <option>Option 2</option>
                                  <option>Option 3</option>
                                </select>
                                <label class="form-icon-label" for="add-property-wizardcard-type">Select card</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-floating">
                                <input class="form-control" type="text" name="add-property-wizard-card-number" id="add-property-wizardwizard-card-number" placeholder="Card number" />
                                <label for="add-property-wizardwizard-card-number">Card number</label>
                              </div>
                            </div>
                          </div>
                          <div class="form-floating mt-3">
                            <input class="form-control" type="text" name="add-property-wizard-card-holder" id="add-property-wizardwizard-card-holder" placeholder="Card Holder name" />
                            <label for="add-property-wizardwizard-card-holder">Card Holder name</label>
                          </div>
                          <h4 class="mt-6 mb-4">Payment from Guests (On property)</h4>
                          <div class="border p-3 rounded-2">
                            <div class="form-check form-switch mb-0">
                              <input class="form-check-input" id="cashPayment" type="checkbox" />
                              <label class="form-check-label fs-8 fw-bold text-body ms-2" for="cashPayment">Cash payment</label>
                            </div>
                          </div>
                          <div class="border p-3 rounded-2 my-3">
                            <div class="form-check form-switch mb-0">
                              <input class="form-check-input" id="cardPayment" type="checkbox" />
                              <label class="form-check-label fs-8 fw-bold text-body ms-2" for="cardPayment">Card Payment</label>
                            </div>
                          </div>
                          <div class="border p-3 rounded-2">
                            <div class="form-check form-switch mb-0">
                              <input class="form-check-input" id="onlinePayment" type="checkbox" />
                              <label class="form-check-label fs-8 fw-bold text-body ms-2" for="onlinePayment">MFS / Online Payment</label>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane" role="tabpanel" aria-labelledby="add-property-wizard-tab6" id="add-property-wizard-tab6">
                        <form id="addPropertyWizardForm6" novalidate="novalidate" data-wizard-form="6">
                          <h3 class="mb-6">Policies</h3>
                          <div class="form-check form-check-inline me-5 mb-3">
                            <input class="form-check-input" id="limitedCheckIn" type="radio" name="checkIn" value="limitedCheckIn" checked="checked" />
                            <label class="form-check-label fs-8" for="limitedCheckIn">Limited Check-in</label>
                          </div>
                          <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" id="24HrCheckIn" type="radio" name="checkIn" value="24HrCheckIn" />
                            <label class="form-check-label fs-8" for="24HrCheckIn">24hr Check-in</label>
                          </div>
                          <div class="row g-3 align-items-center">
                            <div class="col-12 col-sm-6 col-md-auto flex-md-grow-1">
                              <div class="form-floating">
                                <input class="form-control datetimepicker" id="checkInStarts" type="text" placeholder="H:i" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                                <label for="checkInStarts">Check-in Starts</label>
                              </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-auto flex-md-grow-1">
                              <div class="form-floating">
                                <input class="form-control datetimepicker" id="checkInEnds" type="text" placeholder="H:i" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                                <label for="checkInEnds">Check-in Ends</label>
                              </div>
                            </div>
                            <div class="col-12 col-md-auto">
                              <div class="form-check mb-0">
                                <input class="form-check-input" id="lateCheckIn" type="checkbox" checked="checked" />
                                <label class="form-check-label fw-normal fs-8" for="lateCheckIn">Late Check-in</label>
                              </div>
                            </div>
                          </div>
                          <div class="border p-3 rounded-2 mt-3">
                            <div class="form-check form-switch mb-0">
                              <input class="form-check-input" id="ageRestriction" type="checkbox" />
                              <label class="form-check-label fs-8 fw-bold text-body ms-2" for="ageRestriction">Age Restriction</label>
                            </div>
                          </div>
                          <div class="border p-3 rounded-2 my-3">
                            <div class="form-check form-switch mb-0">
                              <input class="form-check-input" id="deposit" type="checkbox" />
                              <label class="form-check-label fs-8 fw-bold text-body ms-2" for="deposit">Deposit at Check-in</label>
                            </div>
                          </div>
                          <div class="border p-3 rounded-2">
                            <div class="form-check form-switch mb-0">
                              <input class="form-check-input" id="documentation" type="checkbox" />
                              <label class="form-check-label fs-8 fw-bold text-body ms-2" for="documentation">Documentation at Check-in</label>
                            </div>
                          </div>
                          <h4 class="mb-4 mt-6">Checkout Policy</h4>
                          <div class="form-floating mb-3">
                            <input class="form-control datetimepicker" id="chcckOutBefore" type="text" placeholder="H:i" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                            <label for="chcckOutBefore">Checkout Before</label>
                          </div>
                          <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                            <div class="d-sm-flex align-items-center gap-3">
                              <div class="form-check form-switch mb-0">
                                <input class="form-check-input" id="flexible-checkout" type="checkbox" data-price-toggle="data-price-toggle" />
                                <label class="form-check-label fs-8 fw-bold text-body ms-2" for="flexible-checkout">Flexible Checkout</label>
                              </div>
                              <div class="pricings ms-auto mt-2 mt-sm-0">
                                <div class="form-check form-check-inline me-3 mb-0">
                                  <input class="form-check-input" type="radio" id="flexible-checkout-free" name="Flexible Checkout-radio" value="free" data-pricing="data-pricing" />
                                  <label class="form-check-label" for="flexible-checkout-free">Free</label>
                                </div>
                                <div class="form-check form-check-inline me-0 mb-0">
                                  <input class="form-check-input" type="radio" id="flexible-checkout-paid" name="Flexible Checkout-radio" value="paid" data-pricing="data-pricing" />
                                  <label class="form-check-label" for="flexible-checkout-paid">Paid</label>
                                </div>
                              </div>
                            </div>
                            <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                              <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="flexible-checkout-option1" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="flexible-checkout-option1">Option 1</label>
                                </div>
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="flexible-checkout-option2" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="flexible-checkout-option2">Option 2</label>
                                </div>
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="flexible-checkout-option3" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="flexible-checkout-option3">Option 3</label>
                                </div>
                                <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                              </div>
                            </div>
                          </div>
                          <h4 class="mb-4 mt-6">Cancellation Policy</h4>
                          <div class="form-check form-check-inline me-5 mb-0">
                            <input class="form-check-input" id="nonRefundable" type="radio" name="refundPolicy" value="nonRefundable" />
                            <label class="form-check-label fs-8" for="nonRefundable">Non Refundable</label>
                          </div>
                          <div class="form-check form-check-inline mb-0">
                            <input class="form-check-input" id="optionalRefund" type="radio" name="refundPolicy" value="optionalRefund" checked="checked" />
                            <label class="form-check-label fs-8" for="optionalRefund">Optional Refund</label>
                          </div>
                          <div class="border p-3 rounded-2 my-3">
                            <div class="form-check form-switch mb-0">
                              <input class="form-check-input" id="fullRefund" type="checkbox" />
                              <label class="form-check-label fs-8 fw-bold text-body ms-2" for="fullRefund">Full Refund</label>
                            </div>
                          </div>
                          <div class="border p-3 rounded-2">
                            <div class="form-check form-switch mb-0">
                              <input class="form-check-input" id="partialRefund" type="checkbox" />
                              <label class="form-check-label fs-8 fw-bold text-body ms-2" for="partialRefund">Partial Refund</label>
                            </div>
                          </div>
                          <h4 class="mb-4 mt-6">Pet Policy</h4>
                          <div class="form-check form-check-inline me-5 mb-0">
                            <input class="form-check-input" id="notAllowed" type="radio" name="petPolicy" value="notAllowed" />
                            <label class="form-check-label fs-8" for="notAllowed">Not allowed</label>
                          </div>
                          <div class="form-check form-check-inline mb-0">
                            <input class="form-check-input" id="allowed" type="radio" name="petPolicy" value="allowed" checked="checked" />
                            <label class="form-check-label fs-8" for="allowed">Allowed</label>
                          </div>
                          <div class="border p-3 rounded-2 my-3">
                            <div class="form-check form-switch mb-0">
                              <input class="form-check-input" id="petRestrickedZone" type="checkbox" />
                              <label class="form-check-label fs-8 fw-bold text-body ms-2" for="petRestrickedZone">Pet Restricted Zones</label>
                            </div>
                          </div>
                          <div class="border p-3 rounded-2">
                            <div class="form-check form-switch mb-0">
                              <input class="form-check-input" id="AdditionalCharges" type="checkbox" />
                              <label class="form-check-label fs-8 fw-bold text-body ms-2" for="AdditionalCharges">Additional Charges</label>
                            </div>
                          </div>
                          <h4 class="mb-4 mt-6">Child Policy</h4>
                          <h5 class="mb-2 text-body">Age Segment 1</h5>
                          <div class="row align-items-center g-3">
                            <div class="col-6 col-sm-auto">
                              <div class="form-floating age-segment-input">
                                <input class="form-control input-spin-none" type="number" name="add-property-wizard-from1" id="add-property-wizardwizard-from1" placeholder="From (Yrs)" value="0" disabled="disabled" />
                                <label for="add-property-wizardwizard-from1">From (Yrs)</label>
                              </div>
                            </div>
                            <div class="col-12 col-sm-auto flex-1 order-1 order-sm-0">
                              <div class="noUi-target-primary noUi-handle-primary noUi-slider-slim noUi-handle-circle px-2" data-nouislider='{"range":{"min":0,"max":18},"start":[0,7],"connect":true}'></div>
                            </div>
                            <div class="col-6 col-sm-auto">
                              <div class="form-floating age-segment-input">
                                <input class="form-control input-spin-none" type="number" name="add-property-wizard-to1" id="add-property-wizardwizard-to1" placeholder="To (Yrs)" value="7" />
                                <label for="add-property-wizardwizard-to1">To (Yrs)</label>
                              </div>
                            </div>
                          </div>
                          <h5 class="mb-2 mt-4 text-body">Age Segment 2</h5>
                          <div class="row align-items-center g-3">
                            <div class="col-6 col-sm-auto">
                              <div class="form-floating age-segment-input">
                                <input class="form-control input-spin-none" type="number" name="add-property-wizard-from2" id="add-property-wizardwizard-from2" placeholder="From (Yrs)" value="8" />
                                <label for="add-property-wizardwizard-from2">From (Yrs)</label>
                              </div>
                            </div>
                            <div class="col-auto flex-1 order-1 order-sm-0">
                              <div class="noUi-target-primary noUi-handle-primary noUi-slider-slim noUi-handle-circle px-2" data-nouislider='{"range":{"min":0,"max":18},"start":[8,12],"connect":true}'></div>
                            </div>
                            <div class="col-6 col-sm-auto">
                              <div class="form-floating age-segment-input">
                                <input class="form-control input-spin-none" type="number" name="add-property-wizard-to2" id="add-property-wizardwizard-to2" placeholder="To (Yrs)" value="12" />
                                <label for="add-property-wizardwizard-to2">To (Yrs)</label>
                              </div>
                            </div>
                          </div>
                          <h5 class="mb-2 mt-4 text-body"> <span>Age Segment 3</span>
                            <button class="btn btn-link p-0 ms-1">Remove</button>
                          </h5>
                          <div class="row align-items-center g-3">
                            <div class="col-6 col-sm-auto">
                              <div class="form-floating age-segment-input">
                                <input class="form-control input-spin-none" type="number" name="add-property-wizard-from3" id="add-property-wizardwizard-from3" placeholder="From (Yrs)" value="13" />
                                <label for="add-property-wizardwizard-from3">From (Yrs)</label>
                              </div>
                            </div>
                            <div class="col-auto flex-1 order-1 order-sm-0">
                              <div class="noUi-target-primary noUi-handle-primary noUi-slider-slim noUi-handle-circle px-2" data-nouislider='{"range":{"min":0,"max":18},"start":[13,18],"connect":true}'></div>
                            </div>
                            <div class="col-6 col-sm-auto">
                              <div class="form-floating age-segment-input">
                                <input class="form-control input-spin-none" type="number" name="add-property-wizard-to3" id="add-property-wizardwizard-to3" placeholder="To (Yrs)" value="18" disabled="disabled" />
                                <label for="add-property-wizardwizard-to3">To (Yrs)</label>
                              </div>
                            </div>
                          </div>
                          <button class="btn btn-link p-0 mt-3 fs-8"><span class="fa-solid fa-plus me-2"></span>Add Segment</button>
                          <div class="border px-3 py-2 rounded-2 mt-4">
                            <div class="form-check form-switch mb-0 py-1">
                              <input class="form-check-input" id="documentation-requirement" type="checkbox" />
                              <label class="form-check-label fs-8 fw-bold text-body ms-2" for="documentation-requirement">Documentation Requirement</label>
                            </div>
                          </div>
                          <h4 class="mb-4 mt-6">Included Taxes in your rate</h4>
                          <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                            <div class="d-sm-flex align-items-center gap-3">
                              <div class="form-check form-switch mb-0">
                                <input class="form-check-input" id="vat" type="checkbox" data-price-toggle="data-price-toggle" />
                                <label class="form-check-label fs-8 fw-bold text-body ms-2" for="vat">VAT</label>
                              </div>
                              <div class="pricings ms-auto mt-2 mt-sm-0">
                                <div class="form-check form-check-inline me-3 mb-0">
                                  <input class="form-check-input" type="radio" id="vat-free" name="VAT-radio" value="free" data-pricing="data-pricing" />
                                  <label class="form-check-label" for="vat-free">Free</label>
                                </div>
                                <div class="form-check form-check-inline me-0 mb-0">
                                  <input class="form-check-input" type="radio" id="vat-paid" name="VAT-radio" value="paid" data-pricing="data-pricing" />
                                  <label class="form-check-label" for="vat-paid">Paid</label>
                                </div>
                              </div>
                            </div>
                            <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                              <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="vat-option1" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="vat-option1">Option 1</label>
                                </div>
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="vat-option2" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="vat-option2">Option 2</label>
                                </div>
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="vat-option3" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="vat-option3">Option 3</label>
                                </div>
                                <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                              </div>
                            </div>
                          </div>
                          <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                            <div class="d-sm-flex align-items-center gap-3">
                              <div class="form-check form-switch mb-0">
                                <input class="form-check-input" id="gst" type="checkbox" data-price-toggle="data-price-toggle" />
                                <label class="form-check-label fs-8 fw-bold text-body ms-2" for="gst">GST</label>
                              </div>
                              <div class="pricings ms-auto mt-2 mt-sm-0">
                                <div class="form-check form-check-inline me-3 mb-0">
                                  <input class="form-check-input" type="radio" id="gst-free" name="GST-radio" value="free" data-pricing="data-pricing" />
                                  <label class="form-check-label" for="gst-free">Free</label>
                                </div>
                                <div class="form-check form-check-inline me-0 mb-0">
                                  <input class="form-check-input" type="radio" id="gst-paid" name="GST-radio" value="paid" data-pricing="data-pricing" />
                                  <label class="form-check-label" for="gst-paid">Paid</label>
                                </div>
                              </div>
                            </div>
                            <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                              <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="gst-option1" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="gst-option1">Option 1</label>
                                </div>
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="gst-option2" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="gst-option2">Option 2</label>
                                </div>
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="gst-option3" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="gst-option3">Option 3</label>
                                </div>
                                <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                              </div>
                            </div>
                          </div>
                          <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                            <div class="d-sm-flex align-items-center gap-3">
                              <div class="form-check form-switch mb-0">
                                <input class="form-check-input" id="holet-tax" type="checkbox" data-price-toggle="data-price-toggle" />
                                <label class="form-check-label fs-8 fw-bold text-body ms-2" for="holet-tax">Hotel tax</label>
                              </div>
                              <div class="pricings ms-auto mt-2 mt-sm-0">
                                <div class="form-check form-check-inline me-3 mb-0">
                                  <input class="form-check-input" type="radio" id="holet-tax-free" name="Hotel tax-radio" value="free" data-pricing="data-pricing" />
                                  <label class="form-check-label" for="holet-tax-free">Free</label>
                                </div>
                                <div class="form-check form-check-inline me-0 mb-0">
                                  <input class="form-check-input" type="radio" id="holet-tax-paid" name="Hotel tax-radio" value="paid" data-pricing="data-pricing" />
                                  <label class="form-check-label" for="holet-tax-paid">Paid</label>
                                </div>
                              </div>
                            </div>
                            <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                              <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="holet-tax-option1" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="holet-tax-option1">Option 1</label>
                                </div>
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="holet-tax-option2" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="holet-tax-option2">Option 2</label>
                                </div>
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="holet-tax-option3" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="holet-tax-option3">Option 3</label>
                                </div>
                                <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                              </div>
                            </div>
                          </div>
                          <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                            <div class="d-sm-flex align-items-center gap-3">
                              <div class="form-check form-switch mb-0">
                                <input class="form-check-input" id="city-tax" type="checkbox" data-price-toggle="data-price-toggle" />
                                <label class="form-check-label fs-8 fw-bold text-body ms-2" for="city-tax">City / District tax</label>
                              </div>
                              <div class="pricings ms-auto mt-2 mt-sm-0">
                                <div class="form-check form-check-inline me-3 mb-0">
                                  <input class="form-check-input" type="radio" id="city-tax-free" name="City / District tax-radio" value="free" data-pricing="data-pricing" />
                                  <label class="form-check-label" for="city-tax-free">Free</label>
                                </div>
                                <div class="form-check form-check-inline me-0 mb-0">
                                  <input class="form-check-input" type="radio" id="city-tax-paid" name="City / District tax-radio" value="paid" data-pricing="data-pricing" />
                                  <label class="form-check-label" for="city-tax-paid">Paid</label>
                                </div>
                              </div>
                            </div>
                            <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                              <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="city-tax-option1" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="city-tax-option1">Option 1</label>
                                </div>
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="city-tax-option2" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="city-tax-option2">Option 2</label>
                                </div>
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="city-tax-option3" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="city-tax-option3">Option 3</label>
                                </div>
                                <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                              </div>
                            </div>
                          </div>
                          <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                            <div class="d-sm-flex align-items-center gap-3">
                              <div class="form-check form-switch mb-0">
                                <input class="form-check-input" id="tourist-tax" type="checkbox" data-price-toggle="data-price-toggle" />
                                <label class="form-check-label fs-8 fw-bold text-body ms-2" for="tourist-tax">Tourist tax</label>
                              </div>
                              <div class="pricings ms-auto mt-2 mt-sm-0">
                                <div class="form-check form-check-inline me-3 mb-0">
                                  <input class="form-check-input" type="radio" id="tourist-tax-free" name="Tourist tax-radio" value="free" data-pricing="data-pricing" />
                                  <label class="form-check-label" for="tourist-tax-free">Free</label>
                                </div>
                                <div class="form-check form-check-inline me-0 mb-0">
                                  <input class="form-check-input" type="radio" id="tourist-tax-paid" name="Tourist tax-radio" value="paid" data-pricing="data-pricing" />
                                  <label class="form-check-label" for="tourist-tax-paid">Paid</label>
                                </div>
                              </div>
                            </div>
                            <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                              <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="tourist-tax-option1" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="tourist-tax-option1">Option 1</label>
                                </div>
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="tourist-tax-option2" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="tourist-tax-option2">Option 2</label>
                                </div>
                                <div class="form-check mb-4">
                                  <input class="form-check-input" id="tourist-tax-option3" type="checkbox" />
                                  <label class="form-check-label fw-normal fs-8 fw-semibold" for="tourist-tax-option3">Option 3</label>
                                </div>
                                <button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                              </div>
                            </div>
                          </div>
                          <h4 class="mb-4 mt-6">Your Documentations</h4>
                          <div class="form-floating">
                            <input class="form-control input-spin-none" type="number" name="add-property-wizard-property-registrations" id="add-property-wizardwizard-property-registrations" placeholder="Property Registration No. (OPTIONAL)" />
                            <label for="add-property-wizardwizard-property-registrations">Property Registration No. (OPTIONAL)</label>
                          </div>
                          <div class="form-floating my-3">
                            <input class="form-control input-spin-none" type="number" name="add-property-wizard-business-registration" id="add-property-wizardwizard-business-registration" placeholder="Business Registration No." />
                            <label for="add-property-wizardwizard-business-registration">Business Registration No.</label>
                          </div>
                          <div class="form-floating">
                            <input class="form-control input-spin-none" type="number" name="add-property-wizard-taxpaper" id="add-property-wizardwizard-taxpaper" placeholder="Taxpayer Indentification No." />
                            <label for="add-property-wizardwizard-taxpaper">Taxpayer Indentification No.</label>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane" role="tabpanel" aria-labelledby="add-property-wizard-tab7" id="add-property-wizard-tab7">
                        <h3 class="mb-2">We’re building your property</h3>
                        <p class="mb-5 text-body-tertiary">We're working on getting your property set up and ready for guests. Stay tuned for updates and start accepting bookings soon!</p>
                        <div class="alert alert-subtle-success alert-dismissible fade show mb-5" role="alert">
                          <p class="mb-0 flex-1 fw-semibold fs-9 fs-sm-8">Congratulations on your successful listing! Join a community of hospitality professionals as a host. Your hard work will turn your home into a sought-after destination. We anticipate hearing about your achievements.</p>
                          <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="accordion-button-arrow-icon accordion mt-2" id="previewAccordion">
                          <div class="accordion-item border rounded-3 bg-body-emphasis p-3 p-sm-4 mb-5">
                            <h5 class="accordion-header">
                              <button class="accordion-button py-0 text-body-highlight" type="button" data-bs-toggle="collapse" data-bs-target="#basicInfo" aria-expanded="true" aria-controls="basicInfo"><img class="me-2 d-dark-none" src="../../../../assets/img/icons/info.svg" alt="" /><img class="me-2 d-light-none" src="../../../../assets/img/icons/info_dark.svg" alt="" /><span class="fs-sm-7">Basic Information</span></button>
                            </h5>
                            <div class="accordion-collapse collapse show" id="basicInfo" data-bs-parent="#previewAccordion">
                              <div class="mt-4 scrollbar"><a class="fs-9 fw-semibold mb-2 d-inline-block" href="#!">Edit info</a>
                                <table class="w-100">
                                  <tr>
                                    <th style="width: 176px"></th>
                                    <th style="width: 32px"></th>
                                    <th style="min-width: 300px"></th>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Property name</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Phoenix Oasis</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Property Information</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 ">
                                      <p class="mb-0 text-body-secondary">Welcome to Phoenix Oasis, where luxury meets tranquility. Our hotel offers lavish accommodations, exquisite dining, rejuvenating spa experiences, and stunning views. Experience opulence redefined in a haven of serenity.</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Property type</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Hotel</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Rating</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">5 Star</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Email address</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">phoenix.oasis@email.com</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Mobile number</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">(934) 907-3716</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Property chain</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Not-available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">CMS</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap">
                                      <h5 class="fw-semibold text-body-highlight mb-0">CMS provider name</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  text-nowrap">
                                      <p class="mb-0 text-body-secondary">Eagle Eye</p>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item border rounded-3 bg-body-emphasis p-3 p-sm-4 mb-5">
                            <h5 class="accordion-header">
                              <button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#location" aria-expanded="true" aria-controls="location"><img class="me-2 d-dark-none" src="../../../../assets/img/icons/location.svg" alt="" /><img class="me-2 d-light-none" src="../../../../assets/img/icons/location_dark.svg" alt="" /><span class="fs-sm-7">Location</span></button>
                            </h5>
                            <div class="accordion-collapse collapse" id="location" data-bs-parent="#previewAccordion">
                              <div class="mt-4 scrollbar"><a class="fs-9 fw-semibold mb-2 d-inline-block" href="#!">Edit location</a>
                                <table class="w-100">
                                  <tr>
                                    <th style="width: 176px"></th>
                                    <th style="width: 32px"></th>
                                    <th></th>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Apartment / Street</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">123 Luxe Boulevard</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">State</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Suite 567</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Country / Region</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">United States</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">City</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Sunshine City</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Zip code</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  text-nowrap">
                                      <p class="mb-0 text-body-secondary">AZ 85001</p>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item border rounded-3 bg-body-emphasis p-3 p-sm-4 mb-5">
                            <h5 class="accordion-header">
                              <button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#generalAmenities" aria-expanded="true" aria-controls="generalAmenities"><img class="me-2 d-dark-none" src="../../../../assets/img/icons/bed-double.svg" alt="" /><img class="me-2 d-light-none" src="../../../../assets/img/icons/bed-double_dark.svg" alt="" /><span class="fs-sm-7">General Amenities</span></button>
                            </h5>
                            <div class="accordion-collapse collapse" id="generalAmenities" data-bs-parent="#previewAccordion">
                              <div class="mt-4 scrollbar"><a class="fs-9 fw-semibold mb-2 d-inline-block" href="#!">Edit amenities</a>
                                <table class="w-100">
                                  <tr>
                                    <th style="width: 176px"></th>
                                    <th style="width: 32px"></th>
                                    <th></th>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Wifi</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Hotel Bar</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Restaurant</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Common Areas</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Pool</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Tennis Courts</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">No Smoking</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Air Conditioning</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Parking</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Bathtub</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Beach View</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap  pb-3">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Flat-screen TV</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  pb-3 text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border-top pt-3 text-nowrap">
                                      <h5 class="fw-semibold text-body-highlight mb-0">Balcony</h5>
                                    </td>
                                    <td class="border-top px-3 pt-3 w-max-content">
                                      <p class="mb-0 w-max-content">:</p>
                                    </td>
                                    <td class="border-top pt-3  text-nowrap">
                                      <p class="mb-0 text-body-secondary">Available</p>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item border rounded-3 bg-body-emphasis p-3 p-sm-4 mb-5">
                            <h5 class="accordion-header">
                              <button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pictures" aria-expanded="true" aria-controls="pictures"><img class="me-2 d-dark-none" src="../../../../assets/img/icons/picture.svg" alt="" /><img class="me-2 d-light-none" src="../../../../assets/img/icons/picture_dark.svg" alt="" /><span class="fs-sm-7">Picture</span></button>
                            </h5>
                            <div class="accordion-collapse collapse" id="pictures" data-bs-parent="#previewAccordion">
                              <div class="mt-4"><a class="fs-9 fw-semibold mb-2 d-inline-block" href="#!">Edit pictures</a>
                                <div class="row g-2 g-sm-3">
                                  <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="../../../../assets/img/gallery/59.png" alt="" height="160" /></div>
                                  <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="../../../../assets/img/gallery/60.png" alt="" height="160" /></div>
                                  <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="../../../../assets/img/gallery/61.png" alt="" height="160" /></div>
                                  <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="../../../../assets/img/gallery/62.png" alt="" height="160" /></div>
                                  <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="../../../../assets/img/gallery/63.png" alt="" height="160" /></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item border rounded-3 bg-body-emphasis p-3 p-sm-4 mb-5">
                            <h5 class="accordion-header">
                              <button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#finance" aria-expanded="true" aria-controls="finance"><img class="me-2 d-dark-none" src="../../../../assets/img/icons/dollar-alt.svg" alt="" /><img class="me-2 d-light-none" src="../../../../assets/img/icons/dollar-alt_dark.svg" alt="" /><span class="fs-sm-7">Finance</span></button>
                            </h5>
                            <div class="accordion-collapse collapse" id="finance" data-bs-parent="#previewAccordion">
                              <div class="mt-4"><a class="fs-9 fw-semibold mb-2 d-inline-block" href="#!">Edit finance</a>
                                <h5 class="fw-bolder mb-3">Payment from PBM</h5>
                                <div class="scrollbar">
                                  <table class="w-100">
                                    <tr>
                                      <th style="width: 176px"></th>
                                      <th style="width: 32px"></th>
                                      <th></th>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Payment currency</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">US Dollar</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Payment method</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Electronic Funds Transfer (EFT)</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Received payment</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Credit Card</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Card type</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Visa Debit Card</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Card number</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">123 456 7890</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Card holder name</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Phoenix Oasis </p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Commission Percentage</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Flat 10%</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Invoice email</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  text-nowrap">
                                        <p class="mb-0 text-body-secondary">Not-Available</p>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                <h5 class="fw-bolder mb-3 mt-4">Payment from Guests (On property)</h5>
                                <div class="scrollbar">
                                  <table class="w-100">
                                    <tr>
                                      <th style="width: 176px"></th>
                                      <th style="width: 32px"></th>
                                      <th></th>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Cash payment</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Card Payment</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap">
                                        <h5 class="fw-semibold text-body-highlight mb-0">MFS / Online Payment</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item border rounded-3 bg-body-emphasis p-3 p-sm-4 mb-5">
                            <h5 class="accordion-header">
                              <button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#policy" aria-expanded="true" aria-controls="policy"><img class="me-2 d-dark-none" src="../../../../assets/img/icons/file-check-alt.svg" alt="" /><img class="me-2 d-light-none" src="../../../../assets/img/icons/file-check-alt_dark.svg" alt="" /><span class="fs-sm-7">Policy</span></button>
                            </h5>
                            <div class="accordion-collapse collapse" id="policy" data-bs-parent="#previewAccordion">
                              <div class="mt-4"><a class="fs-9 fw-semibold mb-2 d-inline-block" href="#!">Edit policies</a>
                                <h5 class="mb-3 fw-bolder">Check-in-Policy</h5>
                                <div class="scrollbar">
                                  <table class="w-100">
                                    <tr>
                                      <th style="width: 176px"></th>
                                      <th style="width: 32px"></th>
                                      <th></th>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Check-in type</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Limited Check-in</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Check-in start</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">09:00 AM</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Age Restriction</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Deposit at Check-in</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Documentation at Check-in</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Late check-in</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Flat 10%</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Check-in end</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  text-nowrap">
                                        <p class="mb-0 text-body-secondary">12:00 PM</p>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                <h5 class="mb-3 fw-bolder mt-4">Checkout Policy</h5>
                                <div class="scrollbar">
                                  <table class="w-100">
                                    <tr>
                                      <th style="width: 176px"></th>
                                      <th style="width: 32px"></th>
                                      <th></th>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Checkout before</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">11:00 AM</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Flexible Checkout</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Available</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Type</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Amount per night</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Amount</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  text-nowrap">
                                        <p class="mb-0 text-body-secondary">$100.00</p>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                <h5 class="mb-3 fw-bolder mt-4">Cancellation Policy</h5>
                                <div class="scrollbar">
                                  <table class="w-100">
                                    <tr>
                                      <th style="width: 176px"></th>
                                      <th style="width: 32px"></th>
                                      <th></th>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Type</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Optimal refund</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Full refund</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Partial refund</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                <h5 class="mb-3 fw-bolder mt-4">Pet Policy</h5>
                                <div class="scrollbar">
                                  <table class="w-100">
                                    <tr>
                                      <th style="width: 176px"></th>
                                      <th style="width: 32px"></th>
                                      <th></th>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Type</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Allowed</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Pet Restricted Zones</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Not-Available</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Additional Charges</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                <h5 class="mb-3 fw-bolder mt-4">Child Policy</h5>
                                <div class="scrollbar">
                                  <table class="w-100">
                                    <tr>
                                      <th style="width: 176px"></th>
                                      <th style="width: 32px"></th>
                                      <th></th>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Age Segment 1</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">0 - 7 Years</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Age Segment 2</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">7 -12 Years</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Age Segment 3</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">12 -18 Years</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Documentation Requirement</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  text-nowrap">
                                        <p class="mb-0 text-body-secondary">Not-Available</p>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                <h5 class="mb-3 fw-bolder mt-4">Included Taxes in your rate</h5>
                                <div class="scrollbar">
                                  <table class="w-100">
                                    <tr>
                                      <th style="width: 176px"></th>
                                      <th style="width: 32px"></th>
                                      <th></th>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Vat</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Available</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Type</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Amount per night</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Amount</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">$100.00</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Deposit at Check-in</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">GST</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Hotel tax</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">City / District tax</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Tourist tax</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  text-nowrap">
                                        <p class="mb-0 text-body-secondary">No</p>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                <h5 class="mb-3 fw-bolder mt-4">Your Documentations</h5>
                                <div class="scrollbar">
                                  <table class="w-100">
                                    <tr>
                                      <th style="width: 176px"></th>
                                      <th style="width: 32px"></th>
                                      <th></th>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Property Registration No.</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Null</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap  pb-3">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Business Registration No.</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content  pb-3">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  pb-3 text-nowrap">
                                        <p class="mb-0 text-body-secondary">Null</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="border-top pt-3 text-nowrap">
                                        <h5 class="fw-semibold text-body-highlight mb-0">Taxpayer Identification No.</h5>
                                      </td>
                                      <td class="border-top px-3 pt-3 w-max-content">
                                        <p class="mb-0 w-max-content">:</p>
                                      </td>
                                      <td class="border-top pt-3  text-nowrap">
                                        <p class="mb-0 text-body-secondary">Null</p>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mt-6">
                          <button class="btn btn-primary px-6 px-sm-11" type="submit">Done</button>
                        </div>
                      </div>
                    </div>
                    <div class="mt-6" data-wizard-footer="data-wizard-footer">
                      <div class="d-none" data-wizard-prev-btn="data-wizard-prev-btn"></div>
                      <button class="btn btn-primary px-6 px-sm-11" type="submit" data-wizard-next-btn="data-wizard-next-btn">Next</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  --}}

        <livewire:create-property />
@endsection
