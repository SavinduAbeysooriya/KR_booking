      <nav class="navbar navbar-vertical navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <!-- scrollbar removed-->
          <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
              <li class="nav-item">
              <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{ route('Home') }}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="monitor"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Dashboard</span></span>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">Options
                </p>
                <hr class="navbar-vertical-line" />
                <!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-e-commerce">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="home"></span></span><span class="nav-link-text">Properties</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-e-commerce">
                      <li class="collapsed-nav-item-title d-none">Properties
                      </li>

                        <!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent show" data-bs-parent="#e-commerce" id="nv-admin">
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/add-product.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">All Properties</span>
                                </div>
                              </a>
                              <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/products.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Add new Property</span>
                                </div>
                              </a>
                              <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/customers.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Availability & Calender</span>
                                </div>
                              </a>
                              <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/customer-details.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Bathroom Facilities</span>
                                </div>
                              </a>
                              <!-- more inner pages-->
                            </li>

                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.amenity-types') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Property Amenities</span>
                                </div>
                              </a>
                              <!-- more inner pages-->
                            </li>
                          </ul>
                        </div>


                    </ul>
                  </div>
                </div>
                <!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-CRM" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-CRM">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="users"></span></span><span class="nav-link-text">Users</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-CRM">
                      <li class="collapsed-nav-item-title d-none">Users
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/crm/analytics.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Admins</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/crm/deals.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Vendors</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/crm/deal-details.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Customers</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>

                    </ul>
                  </div>
                </div>
                <!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-project-management" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-project-management">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="clipboard"></span></span><span class="nav-link-text">Bookings</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-project-management">
                      <li class="collapsed-nav-item-title d-none">Bookings
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/project-management/create-new.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">All Bookings</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>

                      <li class="nav-item"><a class="nav-link" href="../apps/project-management/project-card-view.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Cancellation Requests</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/project-management/project-board-view.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Booking Reports</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/project-management/todo-list.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Monitor Bookings</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/project-management/project-details.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Manual Booking Entry</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-travel-agency" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-travel-agency">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="credit-card"></span></span><span class="nav-link-text">Payments</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-travel-agency">
                      <li class="collapsed-nav-item-title d-none">Payments
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/landing.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Commissions</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>

                         <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/landing.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Transaction History</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>

                         <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/landing.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Invoices & Billing</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>

                         <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/landing.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Revenue Report</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>


                    </ul>
                  </div>
                </div>
                <!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-stock" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-stock">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="message-circle"></span></span><span class="nav-link-text">Reviews & Messages</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-stock">
                      <li class="collapsed-nav-item-title d-none">Reviews & Messages
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/stock/stock-details.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Customer Messages</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                       <li class="nav-item"><a class="nav-link" href="../apps/stock/stock-details.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Vendor Messages</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/stock/portfolio.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Support Center</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/stock/watchlist.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Customer Reviews</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                    </ul>
                  </div>

                </div>

                <!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-email">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="file"></span></span><span class="nav-link-text">Reports</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-email">
                      <li class="collapsed-nav-item-title d-none">Reports
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/email/inbox.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Booking Reports</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/email/email-detail.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Financial Reports</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/email/email-detail.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Vendor Performance Reports</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/email/compose.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">System Usage Logs</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-events">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="trending-up"></span></span><span class="nav-link-text">Marketing</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-events">
                      <li class="collapsed-nav-item-title d-none">Marketing
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/events/create-an-event.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Property Boostings</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/events/event-detail.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Promotions</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-kanban" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-kanban">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text">Settings</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-kanban">
                      <li class="collapsed-nav-item-title d-none">Settings
                      </li>

                      <li class="nav-item"><a class="nav-link" href="../apps/kanban/boards.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Languages</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                             <li class="nav-item"><a class="nav-link" href="../apps/kanban/boards.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Curencies</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                       <li class="nav-item"><a class="nav-link" href="../apps/kanban/boards.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Commission & Fee Rules</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/kanban/create-kanban-board.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Announcements</span>
                          </div>
                        </a>
                        <!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div>


        <div class="navbar-vertical-footer">
          <button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button>
        </div>
      </nav>
