<!-- Bootstrap CSS -->


<!-- Modal -->
<div class="modal fade" id="contact-1" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content " style="border-radius:30px;background-color: rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(30px); ">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title text-white" id="contactModalLabel">Contact Now</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="mail.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control" style="border-radius:20px;" id="name" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" style="border-radius:20px;" id="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" style="border-radius:20px;" id="phone" placeholder="Phone" required>
                    </div>
                    <div class="text-center">
                        <button name="submit" type="submit" class="btn cta-color">Submit Form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
