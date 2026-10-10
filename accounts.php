<?php include 'includes/header.php'; ?>

    <section class="account-page">
        <div class="account-top container">
            <span class="purple-bg">Your account</span>
            <h1 class="ac-top-h1" id="welcomeHeading">Welcome back, John.</h1>
        </div>
        <div class="tab-wrapper container">

            <!-- LEFT SIDE TABS -->
            <div class="ac-tab-buttons">

                <button
                    class="tab-button active"
                    data-tab="Orders">
                    Orders
                </button>

                <button
                    class="tab-button"
                    data-tab="Details">
                    Details
                </button>

                <button
                    class="signout">
                    Sign out
                </button>

            </div>


            <!-- RIGHT SIDE CONTENT -->
            <div class="tab-content w-100">

                <!-- Orders -->
                <div class="tab-panel active w-100 order-det" id="panel-Orders">
                    <h2 class="tab-h1">All orders</h2>
                    
                    <!-- desktop table -->
                     <div class="acc-table w-100 d-none d-md-block">
                        <div class="acc-table-head w-100">
                            <p style="width:10%;">Order</p>
                            <p style="width:15%;">Date</p>
                            <p style="flex: 1 0 0;">Services</p>
                            <p style="width:10%;">Amount</p>
                            <p style="width:10%;">Status</p>
                            <p style="text-align:right;width:180px;">Invoice</p>
                        </div>
                        <div class="acc-table-cont w-100">
                            <p style="width:10%;">BZ-2039</p>
                            <p style="width:15%;">1 September 2026</p>
                            <div class="serv-data" style="flex: 1 0 0;">
                                <span>Added separately</span>
                                <p>Paid Search, Essential, 3 months</p>
                            </div>
                            <p style="width:10%;">$6,191</p>
                            <p style="width:10%;">Status</p>
                            <p style="display:flex;justify-content:flex-end;width:180px;">
                                <a href="#" class="inv-btn">Invoice</a>
                            </p>
                        </div>
                     </div>
                     <!-- desktop table end-->

                     <!-- mobile table -->
                      <div class="acc-table-mob d-flex d-md-none">
                        <div class="acc-mb-line">
                            <p>BZ-2039</p>
                            <span class="purple-bgg">Active</span>
                        </div>
                        <div class="acc-mb-line">
                            <span class="tab-date">1 September 2026</span>
                        </div>
                        <div class="be-found-goal-serv">
                            <div class="serv-data">
                                <label class="purp-acc">Be Found goal</label>
                                <p>Search Engine Optimisation, Essential, 3 months</p>
                                <p>Social Media, Essential, 3 months</p>
                            </div>
                            <div class="serv-data">
                                <span>Added separately</span>
                                <p>Email Marketing, Essential, 3 months</p>
                            </div>
                        </div>
                        <div class="acc-mb-line">
                            <p>$6,191</p>
                            <a href="#" class="inv-btn">Invoice</a>
                        </div>
                      </div>
                     <!-- mobile table end-->
                </div>


                 <!-- empty order-->
                <!-- <div class="tab-panel active w-100 order-det" id="panel-Orders">
                    <div class="empty-box-inner">
                        <h2 class="tab-h1">All orders</h2>
                        <span>
                            Every goal or service you buy shows here with its term and invoice.
                        </span>
                    </div>
                    
                    <div class="empty-sec">
                        <h1>
                            No orders yet
                        </h1>
                        <p>
                            Pick a goal or choose services and it will show here.
                        </p>
                        <a href="">
                            See the goals
                        </a>
                    </div>
                </div> -->
                <!-- emoty order end-->

                <!-- Profile -->
                <div
                    class="tab-panel prof-detail w-100"
                    id="panel-Details">

                    <div class="detail-inner w-100">
                        <h2 class="tab-h1">Personal details</h2>
                        <div class="details-line">
                            <div class="details-box w-100">
                                <label for="" class="det-label">First name</label>
                                <input type="text" placeholder="John" class="det-input">
                            </div>
                            <div class="details-box w-100">
                                <label for="" class="det-label">Last name</label>
                                <input type="text" placeholder="Smith" class="det-input">
                            </div>
                        </div>
                        <div class="details-line">
                            <div class="details-box w-100">
                                <label for="" class="det-label">Email address</label>
                                <input type="text" placeholder="john@example.com" class="det-input">
                            </div>
                            <div class="details-box w-100">
                                <label for="" class="det-label">Phone number</label>
                                <input type="text" placeholder="+44 7000 000000" class="det-input">
                            </div>
                        </div>
                        <div class="details-line">
                            <div class="details-box w-100">
                                <label for="" class="det-label">Password</label>
                                <input type="text" placeholder="••••••••••" class="det-input">
                            </div>
                            <div class="details-box w-100">
                                <label for="" class="det-label">New password</label>
                                <input type="text" placeholder="New password" class="det-input">
                            </div>
                        </div>
                    </div>

                    <div class="detail-inner w-100">
                        <h2 class="tab-h1">Billing address</h2>
                        <div class="details-box w-100">
                            <label for="" class="det-label">Address line 1</label>
                            <input type="text" placeholder="1 Example Street" class="det-input">
                        </div>
                        <div class="details-box w-100">
                            <label for="" class="det-label">Address line 2</label>
                            <input type="text" placeholder="Suite 4" class="det-input">
                        </div>
                        <div class="details-line">
                            <div class="details-box w-100">
                                <label for="" class="det-label">City</label>
                                <input type="text" placeholder="London" class="det-input">
                            </div>
                            <div class="details-box w-100">
                                <label for="" class="det-label">Country</label>
                                <select name="" id="" class="det-input form-select">
                                    <option value="">UK</option>
                                    <option value="">India</option>
                                    <option value="">China</option>
                                </select>
                            </div>
                        </div>
                        <div class="details-line">
                            <div class="details-box w-100">
                                <label for="" class="det-label">County</label>
                                <input type="text" placeholder="County" class="det-input">
                            </div>
                            <div class="details-box w-100">
                                <label for="" class="det-label">Postcode</label>
                                <input type="text" placeholder="EC1A 1AA" class="det-input">
                            </div>
                        </div>
                        <a href="" class="save-change-btn">
                            Save changes
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>


<script>

        const tabButtons =
            document.querySelectorAll(".tab-button");

        const tabPanels =
            document.querySelectorAll(".tab-panel");


        tabButtons.forEach(function(button) {

            button.addEventListener("click", function() {

                const selectedTab =
                    this.getAttribute("data-tab");


                // Remove active from all buttons
                tabButtons.forEach(function(btn) {

                    btn.classList.remove("active");

                });


                // Hide all panels
                tabPanels.forEach(function(panel) {

                    panel.classList.remove("active");

                });


                // Activate clicked button
                this.classList.add("active");


                // Show matching content
                document
                    .getElementById("panel-" + selectedTab)
                    .classList.add("active");

            });

        });

    </script>

<script>
    document.querySelectorAll(".tab-button").forEach((button) => {
    button.addEventListener("click", function () {
        const tab = this.dataset.tab;
        const heading = document.getElementById("welcomeHeading");

        if (tab === "Orders") {
            heading.textContent = "Welcome back, John.";
        } else if (tab === "Details") {
            heading.textContent = "Your details.";
        }
    });
});
</script>


<?php include 'includes/footer.php'; ?>