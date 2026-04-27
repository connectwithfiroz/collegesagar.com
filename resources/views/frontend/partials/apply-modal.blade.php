<div class="modal fade" id="applyModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5>Apply Now</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <form id="applyForm">

                    <input type="hidden" name="college_id" id="college_id">
                    <input type="hidden" name="course_id" id="course_id">
                    <input type="hidden" name="specialization_id" id="spec_id">

                    <input type="text" name="name" class="form-control mb-2" placeholder="Your Name" required>

                    <input type="text" name="phone" class="form-control mb-2" placeholder="Phone Number" required>

                    <input type="email" name="email" class="form-control mb-2" placeholder="Email (optional)">

                    <button class="btn btn-success w-100">Submit</button>

                </form>

                <div id="successMsg" class="text-success mt-2 d-none">
                    ✅ Submitted successfully
                </div>

            </div>

        </div>
    </div>
</div>