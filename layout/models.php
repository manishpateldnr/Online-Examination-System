<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Online Exam Portal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>The Online Exam Portal is a web-based platform designed to facilitate seamless and secure online exams. It allows for efficient exam scheduling, question management, real-time monitoring.
                    </p>
                    <p>
                    Project: <strong>Megaminds IT Services</strong>
                    </p>
                    <p>Developed by:</p>
                     
                    <p class="lh-1 text-sm font-monospace">Manish Kumar</p>
                     
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="uploadmcq" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Online Exam Portal (minor project)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./backend/uploadmcq.php" method="post" enctype="multipart/form-data">
                        <select name="subject" id="subject">
                            <option value="CUTM1018">php</option>
                        </select>
                        <br>
                        <input type="file" name="mcqs" accept=".csv">
                        <button type="submit">submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal2">Close</button>
                </div>
            </div>
        </div>
    </div>
