<div class="card card-default" data-select2-id="32">
    <div class="card-header">
        <h3 class="card-title">Register</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <?php echo form_open_multipart('data/create_partner'); ?>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">

                <div class="form-group">
                    <label for="Oganisation">Project</label>
                    <input type="text" name="project" class="form-control" placeholder="Project">
                </div>
                <div class="form-group">
                    <label>Implementing Partner</label>
                    <select class="form-control select2" style="width: 100%;" name="partner" tabindex="-1" aria-hidden="true" multiple>
                        <option value="" disabled>SELECT OPTION BELOW</option>
                        <?php foreach ($partners as $row) : ?>
                            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Start Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="start_date" class="form-control datetimepicker-input" data-target="#reservationdate">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>End Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="end_date" class="form-control datetimepicker-input" data-target="#reservationdate">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>District</label>
                    <select class="form-control select2" name="district[]" style="width: 100%;" tabindex="-1" aria-hidden="true" multiple>
                        <option value="" disabled>SELECT OPTION BELOW</option>
                        <?php foreach ($districts as $row) : ?>
                            <option value="<?php echo $row->district_id; ?>"><?php echo $row->district; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Funder(s)</label>
                    <select class="form-control select2" name="funder[]" style="width: 100%;" tabindex="-1" aria-hidden="true" multiple>
                        <option value="" disabled>SELECT OPTION BELOW</option>
                        <?php foreach ($funders as $row) : ?>
                            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                        <?php endforeach; ?>

                        <?php

                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="Oganisation">Organisation Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="Oganisation">Organisation Telephone</label>
                    <input type="text" class="form-control" name="organisation_telephone" placeholder="Telephone">
                </div>
                <div class="form-group">
                    <label style="font-weight:bold;">Contact Person Details</label>
                    <div class="form-group">

                        <div id="contact" style="max-height: 600px; overflow:auto;">

                            <!-- <input type="button" value="Add More Contact Persons" class="btn btn-primary  mb-2" onclick="addContact()"> -->

                            <select class="form-control mb-2" name="person_title">
                                <option>Mr.</option>
                                <option>Mrs.</option>
                                <option>Dr.</option>
                                <option>Pr.</option>
                                <option>Ms.</option>
                                <option>Hon.</option>
                            </select>
                            <input type="text" name="name" class="form-control mb-2" placeholder="Name" class="form-group" required />
                            <input type="text" class="form-control mb-2" placeholder="Phone Number" name="phone_number" class="form-group mb-2" required />
                            <input type="text" class="form-control mb-2" name="email" placeholder="Email" class="form-group mb-2" required />
                            <input type="text" class="form-control mb-2" name="position" placeholder="Position or Job" required />
                        </div>

                    </div>

                </div>



            </div>
            <div class="col-md-4">
                <div id="theme" style="max-height: 600px; overflow:auto;">
                    <div class="form-group">
                        <button type="button" class="btnkey bg-gray-dark color-pale mb-2" onclick="addTheme()">Add Internvention Areas</button>
                        <br>
                        <label>Thematic Area</label>
                        <select class="form-control select2" style="width: 100%;" name="work_areas[]" tabindex="-1" aria-hidden="true">
                            <option value="" disabled>SELECT OPTION BELOW</option>
                            <?php foreach ($areas as $row) : ?>
                                <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sub-Thematic Area</label>
                        <select class="form-control select2 subtheme" style="width: 100%;" name="sub_theme[]" tabindex="-1" aria-hidden="true">


                        </select>
                    </div>
                    <div class="form-group">
                        <label>Activities</label>
                        <select class="form-control activities" name="actvities[]" style="width: 100%;" tabindex="-1" aria-hidden="true" multiple>


                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-warning btn-outline">Save</button>
            <button type="reset" class="btn  btnkey bg-gray-dark color-pale ">Reset All</button>

        </div>
    </div>



    <script>
        function addContact() {

            let contact_row = '<div class="form-group person"><p>Contact Person</p>';
            contact_row += '<select class="form-control mb-2" name="person_title">';
            contact_row += '<option>Mr.</option>';
            contact_row += '<option>Mrs.</option>';
            contact_row += '<option>Dr.</option>';
            contact_row += '<option>Pr.</option>';
            contact_row += '<option>Ms.</option>';
            contact_row += '<option>Hon.</option></select>';
            contact_row += '<input type="text" name="name[]" class="form-control mb-2" placeholder="Name" class="form-group" required>';
            contact_row += '<input type="text" class="form-control mb-2" placeholder="Phone Number" name="phone[]" class="form-group mb-2" required/>';
            contact_row += '<input type="text"  class="form-control mb-2" name="email[]" placeholder="Email" class="form-group mb-2" required/>';
            contact_row += '<input type="text"  class="form-control" name="position[]" placeholder="Position or Job" class="form-group mb-2" required/>';
            contact_row += '<input type="button" value="Remove Contact Person" class="btn btn-primary   btn-sm  mb-2"  onclick="removeContact($(this))" ></div>'

            $("#contact").append(contact_row);
        }

        function removeContact(elem) {
            //$("#contact").find("div:last").remove();
            elem.closest('.person').remove();
        }

        $('.removeBtn').on('click', function() {

            console.log($(this).closest('.person'));

            $(this).closest('.person').remove();

        });

        function addTheme() {

            let theme_row = '<hr style="border-bottom: 1px solid #400;"><div class="form-group theme"><label>Thematic Area</label>';
            theme_row += '<select class="form-control mb-2 select2" name="theme[]">';
            theme_row += '<?php foreach ($areas as $row) : ?>';
            theme_row += '<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?> </option>';
            theme_row += '<?php endforeach; ?></select></div>';
            theme_row += '<div class="form-group theme"><label>Sub Thematic Area</label>';
            theme_row += '<select class="form-control mb-2 select2" name="sub_theme[]">';
            theme_row += '<?php foreach ($areas as $row) : ?>';
            theme_row += '<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?> </option>';
            theme_row += '<?php endforeach; ?></select></div>';
            theme_row += '<div class="form-group theme"><p>Activities</p>';
            theme_row += '<select class="form-control mb-2 select2" name="activities[]" multiple>';
            theme_row += '<?php foreach ($areas as $row) : ?>';
            theme_row += '<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?> </option>';
            theme_row += '<?php endforeach; ?></select></div>';
            theme_row += '<input type="button" value="Remove Row" class="btn btn-danger   btn-sm  mb-2"  onclick="removeTheme($(this))" ></div>'


            $("#theme").append(theme_row);
            if (theme_row && theme_row.nodeName === "SELECT") {
                $(theme_row).select2();
            }

        }

        function removeTheme(tag) {
            //$("#theme").find("div:last").remove();
            tag.closest('.theme').remove();
        }

        $('.removeBtn').on('click', function() {

            console.log($(this).closest('.theme'));

            $(this).closest('.theme').remove();

        });

        function getSubthemes(val) {
            $.ajax({
                method: "GET",
                url: "<?php echo base_url(); ?>data/getSubthemes",
                data: 'subtheme_' + val,
                success: function(data) {
                    //alert(data);
                    $(".subtheme").html(data);
                }
            });
        }

        function getactivities(val) {
            $.ajax({
                method: "GET",
                url: "<?php echo base_url(); ?>data/getactivities",
                data: 'activities_' + val,
                success: function(data) {
                    //alert(data);
                    $(".activities").html(data);
                }
                //  console.log('iwioowiiwoow');
            });
        }
    </script>