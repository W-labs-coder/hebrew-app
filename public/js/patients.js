function deletePatient(id) {
    $("#deletePatientInput").val(id);
    $("#deletePatientBtn").click();
}

async function fetchPatient(id) {
    const response = await fetch(`/emr/patients/fetch-patient/${id}`);
    const data = await response.json();
    let patient = data.patient;

    $("#p_serial_id").text(patient.serial_id);
    $("#p_first_name").text(patient.first_name);
    $("#p_last_name").text(patient.last_name);
    $("#p_gender").text(patient.gender);
    $("#p_phone").text(patient.phone);
    $("#p_employment_status").text(patient.employment_status);
    $("#p_dob").text(patient.dob);
    $("#p_marital_status").text(patient.marital_status);
    $("#p_address1").text(patient.address1);
    $("#p_address2").text(patient.address2);
    $("#p_payer_type").text(patient.has_insurance ? "Insurance" : "N/A");
    $("#p_fam_full_name").text(
        patient.family_member
            ? `${patient.first_name} ${patient.family_member.last_name}`
            : "N/A"
    );
    $("#p_fam_relationship").text(
        patient.family_member ? patient.family_member.relationship : "N/A"
    );

    $("#viewPatientDetailsModal").modal("show");
}


async function callPatient(queueNum, roomName, room_id, caller_room) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    // $(".patient_caller").text("Call Patient");
    // $(`#patient_caller${queueNum}`).text("Call Again");
    const data = { queue: queueNum, to: roomName, room_id, caller_room };
    $.ajax({
        type: "POST",
        url: "/emr/patients/call-patient",
        data: data,
        success: function (response) {
            toastr.success(response.message);
        },
        error: function (xhr, status, error) {
            // returnRealButton('submitEnquiries')

            var errorMessage = "An error occurred"; // Default message
            if (
                xhr.responseJSON &&
                xhr.responseJSON.errors &&
                xhr.responseJSON.errors.email
            ) {
                errorMessage = xhr.responseJSON.errors.email[0]; // Extracting the error message for email field
            } else if (xhr.responseJSON && xhr.responseJSON.error) {
                errorMessage = xhr.responseJSON.error; // Using the general error message
            }
            toastr.error(errorMessage);
        },
    });
}

async function sendToRoomFuncOld(btnID) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    var patient_id = $(`#${btnID}`).data("patient_id");
    var room = $(`#${btnID}`).data("room");

    spinMe(btnID);

    const data = { patient_id, room };
    $.ajax({
        type: "POST",
        url: "/emr/patients/send-to-room",
        data: data,
        success: function (response) {
            toastr.success(response.message);
            returnRealButton(btnID);
            $("#viewPatientDetailsModal2").modal("hide");
            window.location.reload();
        },
        error: function (xhr, status, error) {
            var errorMessage = "An error occurred";
            toastr.error(errorMessage);
            returnRealButton(btnID);
        },
    });
}

async function checkPatientByNumber(phone, queue_id) {
    const response = await fetch(
        `/emr/patients/fetch-patient-by-number/${phone}`
    );
    const data = await response.json();

    let patient = data.patient;

    if (patient) {
        $("#sendToVitalRoomBtn").data("patient_id", patient.id);
        $("#sendToVitalRoomBtn").data("room", 2); //2 is the room_id for vital and that's the next place for patient to go
        $("#p_first_name2").text(patient.first_name);
        $("#p_last_name2").text(patient.last_name);
        $("#p_gender2").text(patient.gender);
        $("#p_phone2").text(patient.phone);
        $("#p_employment_status2").text(patient.employment_status);
        $("#p_dob2").text(patient.dob);
        $("#p_marital_status2").text(patient.marital_status);
        $("#p_address12").text(patient.address1);
        $("#p_address22").text(patient.address2);
        $("#p_payer_type2").text(patient.has_insurance ? "Insurance" : "N/A");
        $("#p_fam_full_name2").text(
            patient.family_member
                ? `${patient.first_name} ${patient.family_member.last_name}`
                : "N/A"
        );
        $("#p_fam_relationship2").text(
            patient.family_member ? patient.family_member.relationship : "N/A"
        );
        $("#edit_patient_anchor").attr(
            "href",
            `/emr/patients/edit/1/${patient.id}`
        );
        if (data.completed) {
            $("#status_completed").removeClass("d-none");
            $("#to_vital").removeClass("d-none");
            $("#status_incomplete").addClass("d-none");
        } else {
            $("#to_vital").addClass("d-none");
            $("#status_completed").addClass("d-none");
            $("#status_incomplete").removeClass("d-none");
        }
        $("#viewPatientDetailsModal2").modal("show");
    } else {
        window.location.href = "/emr/patients/create/1/" + queue_id;
        return;
    }
}

async function getVisitHistory(patient_id) {
    const response = await fetch(
        `/emr/patients/fetch-patient-history/${patient_id}`
    );
    const data = await response.json();

    let history = data.history;
    const historyTable = $("#history_table");
    historyTable.empty();
    if (history) {
        $("#no_history").addClass("d-none");

        history.forEach((record, index) => {
            const row = $("<tr></tr>");

            const cellIndex = $("<td></td>").text(index + 1);
            const cellDate = $("<td></td>")
                .addClass("fs15 fw500 capitalize")
                .text(record.date);
            const cellTrackingId = $("<td></td>")
                .addClass("fs15 fw500")
                .text(record.tracking_id);
            const cellCheckout = $("<td></td>")
                .addClass("fs15 fw500")
                .text(record.phone);
            // const cellAction = $("<td></td>")
            //     .addClass("fs15 fw500")
            //     .text("...");

            const cellAction = $("<td></td>").addClass("fs15 fw500").html(`
                    <div>
                        <div class="dropdown" data-bs-toggle="dropdown">
                        ...
                        </div>
                        <div class="dropdown-menu p-2">
                            <div class="d-flex align-items-center p-1">
                                <a class="dropdown-item fs14 fw500" role="button" style="cursor: pointer" href="#" onclick="reOpen(${record.id})">
                                    
                                    <span class="mx-1"></span>Reopen
                                </a>
                            </div>
                        </div>
                    </div>
                `);

            row.append(
                cellIndex,
                cellDate,
                cellTrackingId,
                cellCheckout,
                cellAction
            );
            historyTable.append(row);
        });

        $("#visitHistoryModal").modal("show");
    } else {
        $("#no_history").removeClass("d-none");
        $("#visitHistoryModal").modal("show");
    }
}

async function getPatientJourney(queue_id) {
    const response = await fetch(
        `/emr/patients/fetch-patient-journey/${queue_id}`
    );
    const data = await response.json();

    let journey = data.journey;
    const journeyTable = $("#journey_table");
    journeyTable.empty();
    if (journey) {
        $("#no_journey").addClass("d-none");

        journey.forEach((record, index) => {
            const row = $("<tr></tr>");

            const cellIndex = $("<td></td>").text(index + 1);
            const cellDate = $("<td></td>")
                .addClass("fs15 fw500 capitalize")
                .text(record.date);
            const cellTime = $("<td></td>")
                .addClass("fs15 fw500 capitalize")
                .text(record.time ?? "N/A");
            const cellPurpose = $("<td></td>")
                .addClass("fs15 fw500")
                .text(record.purpose);

            row.append(cellIndex, cellDate, cellTime, cellPurpose);
            journeyTable.append(row);
        });

        $("#patientJourneyModal").modal("show");
    } else {
        $("#no_journey").removeClass("d-none");
        $("#patientJourneyModal").modal("show");
    }
}

function reOpen(old_queue_id) {
    $("#old_queue_id").val(old_queue_id);
    $("#visitHistoryModal").modal("hide");

    setTimeout(() => {
        $("#reOpenQueue").modal("show");
    }, 1000);
}
