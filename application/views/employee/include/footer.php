<script src="<?php echo base_url('assets_admin/vendor/libs/jquery/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/popper/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/js/menu.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/apex-charts/apexcharts.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/dashboards-analytics.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/parsley.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/moment.js'); ?>"></script>
   
    <script src="<?php echo base_url('assets_admin/js/checkbox.js'); ?>"></script>
    <script src="https://intl-tel-input.com/node_modules/intl-tel-input/build/js/intlTelInput.js?1549804213570"></script>

    <script>

      $(document).ready(function() {

            $(document).on('change','#evaluate_date_category' ,function(){
                  var evalue_category = $('#evaluate_date_category option:selected').val();
                  var date = new Date($('#start_date').val());
                  let finalDate = (date.getDate() + parseInt(evalue_category));
                  date.setDate(finalDate);
                  var dateobj = new Date(date);
                  var end_date = moment(date).format('YYYY-MM-DD');  
                  $("#end_date").val(end_date);
                  $("#end_date_set").val(end_date);
            });
<<<<<<< HEAD
=======

            $(document).on('change','#start_date' ,function(){
                  var evalue_category = $('#evaluate_date_category option:selected').val();
                  var date = new Date($('#start_date').val());

                  let finalDate = (date.getDate() + parseInt(evalue_category));
                  date.setDate(finalDate);
                  var dateobj = new Date(date);
                  var end_date = moment(date).format('YYYY-MM-DD');  
                  $("#end_date").val(end_date);
                  $("#end_date_set").val(end_date);
                  
            });

>>>>>>> 8ce454d (new update employee portal v1.1.0)
      });

        $(document).ready(function() {
            $(".edit-emp-range").addClass('hide');
            // Start Mind 
            let mind_total = 100;
            let mind_final = 0;
            $("#slider-range-mind1").keyup(function(){
              var mind1 = $("#slider-range-mind1").val();
              mind_final = mind_total - mind1;
              if((mind1) >= 1  && (mind1) <= 99){
                $("#slider-range-mind2").val(mind_final);
                $("#mind-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-mind2").val(' ');
                $("#mind-line").css("background-color", "red");
              }
            });

            $("#slider-range-mind2").keyup(function(){
              var mind2 = $("#slider-range-mind2").val();
              mind_final = mind_total - mind2;
              if((mind2) >= 1 && (mind2) <= 99){
                $("#slider-range-mind1").val(mind_final);
                $("#mind-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-mind1").val(' ');
                $("#mind-line").css("background-color", "red");
              }
            });
            // End Mind 

            // Start Energy 
            let energy_total = 100;
            let energy_final = 0;
            $("#slider-range-energy1").keyup(function(){
              var energy1 = $("#slider-range-energy1").val();
              energy_final = energy_total - energy1;
              if((energy1) >= 1 && (energy1) <=99 ){
                $("#slider-range-energy2").val(energy_final);
                $("#energy-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-energy2").val(' ');
                $("#energy-line").css("background-color", "red");
              }
            });

            $("#slider-range-energy2").keyup(function(){
              var energy2 = $("#slider-range-energy2").val();
              energy_final = energy_total - energy2;
              if((energy2) >= 1 && (energy2) <= 99 ){
                $("#slider-range-energy1").val(energy_final);
                $("#energy-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-energy1").val(' ');
                $("#energy-line").css("background-color", "red");
              }
            });

            // End Energy

            // Start Nature 
            let nature_total = 100;
            let nature_final = 0;
            $("#slider-range-nature1").keyup(function(){
              var nature1 = $("#slider-range-nature1").val();
              nature_final = nature_total - nature1;
              if((nature1) >= 1 && (nature1) <= 99){
                $("#slider-range-nature2").val(nature_final);
                $("#nature-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-nature2").val(' ');
                $("#nature-line").css("background-color", "red");
              }
            });

            $("#slider-range-nature2").keyup(function(){
              var nature2 = $("#slider-range-nature2").val();
              nature_final = nature_total - nature2;
              if((nature2) >= 1 && (nature2) <= 99 ){
                $("#slider-range-nature1").val(nature_final);
                $("#nature-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-nature1").val(' ');
                $("#nature-line").css("background-color", "red");
              }
            });
            // End Nature

            // Start Tactics 
            let tactics_total = 100;
            let tactics_final = 0;
            $("#slider-range-tactics1").keyup(function(){
              var tactics1 = $("#slider-range-tactics1").val();
              tactics_final = tactics_total - tactics1;
              if((tactics1) >= 1 && (tactics1) <= 99 ){
                $("#slider-range-tactics2").val(tactics_final);
                $("#tactics-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-tactics2").val(' ');
                $("#tactics-line").css("background-color", "red");
              }
            });

            $("#slider-range-tactics2").keyup(function(){
              var tactics2 = $("#slider-range-tactics2").val();
              tactics_final = tactics_total - tactics2;
              if((tactics2) >= 1 && (tactics2) <= 99 ){
                $("#slider-range-tactics1").val(tactics_final);
                $("#tactics-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-tactics1").val(' ');
                $("#tactics-line").css("background-color", "red");
              }
            });
            // End Tactics

            // Start Identity 
            let identity_total = 100;
            let identity_final = 0;
            $("#slider-range-identity1").keyup(function(){
              var identity1 = $("#slider-range-identity1").val();
              identity_final = identity_total - identity1;
              if((identity1) >= 1 && (identity1) <= 99 ){
                $("#slider-range-identity2").val(identity_final);
                $("#identity-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-identity2").val(' ');
                $("#identity-line").css("background-color", "red");
              }
            });

            $("#slider-range-identity2").keyup(function(){
              var identity2 = $("#slider-range-identity2").val();
              identity_final = identity_total - identity2;
              if((identity2) >= 1 && (identity2) <= 99 ){
                $("#slider-range-identity1").val(identity_final);
                $("#identity-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-identity1").val(' ');
                $("#identity-line").css("background-color", "red");
              }
            });
            // End Identity

<<<<<<< HEAD

            //  Goals

            $("#goals1").click(function(){
              $("#goals2").attr("disabled", true);
              $("#goals_input2").attr("disabled", true);
              $("#goals_hidden2").attr("disabled", true);

              $("#goals3").attr("disabled", true);
              $("#goals_input3").attr("disabled", true);
              $("#goals_hidden3").attr("disabled", true);

              $("#goals4").attr("disabled", true);
              $("#goals_input4").attr("disabled", true);
              $("#goals_hidden4").attr("disabled", true);
            });

            $("#goals2").click(function(){
              $("#goals1").attr("disabled", true);
              $("#goals_input1").attr("disabled", true);
              $("#goals_hidden1").attr("disabled", true);

              $("#goals3").attr("disabled", true);
              $("#goals_input3").attr("disabled", true);
              $("#goals_hidden3").attr("disabled", true);

              $("#goals4").attr("disabled", true);
              $("#goals_input4").attr("disabled", true);
              $("#goals_hidden4").attr("disabled", true);
            });

            $("#goals3").click(function(){
              $("#goals1").attr("disabled", true);
              $("#goals_input1").attr("disabled", true);
              $("#goals_hidden1").attr("disabled", true);

              $("#goals2").attr("disabled", true);
              $("#goals_input2").attr("disabled", true);
              $("#goals_hidden2").attr("disabled", true);

              $("#goals4").attr("disabled", true);
              $("#goals_input4").attr("disabled", true);
              $("#goals_hidden4").attr("disabled", true);
            });

            $("#goals4").click(function(){
              $("#goals1").attr("disabled", true);
              $("#goals_input1").attr("disabled", true);
              $("#goals_hidden1").attr("disabled", true);

              $("#goals2").attr("disabled", true);
              $("#goals_input2").attr("disabled", true);
              $("#goals_hidden2").attr("disabled", true);

              $("#goals3").attr("disabled", true);
              $("#goals_input3").attr("disabled", true);
              $("#goals_hidden3").attr("disabled", true);
            });
        });

        $(document).ready(function(){
            $('#refresh-goals').click(function(){
                $("#goals1").attr("disabled", false);
                $("#goals2").attr("disabled", false);
                $("#goals3").attr("disabled", false);
                $("#goals4").attr("disabled", false);

                $("#goals_input1").attr("disabled", false);
                $("#goals_input2").attr("disabled", false);
                $("#goals_input3").attr("disabled", false);
                $("#goals_input4").attr("disabled", false);

                $("#goals_hidden1").attr("disabled", false);
                $("#goals_hidden2").attr("disabled", false);
                $("#goals_hidden3").attr("disabled", false);
                $("#goals_hidden4").attr("disabled", false);
            });
        });

        // Edit Goals

=======
        });

>>>>>>> 8ce454d (new update employee portal v1.1.0)
</script>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

          var data = google.visualization.arrayToDataTable([
          ['Assessment', 'Employee Performance Report'],
          ['Good', <?php echo $grateful; ?>],
          ['Sufficient', <?php echo $good; ?>],
          ['Not Sufficient', <?php echo $average; ?>]
          ]);

          var options = {
<<<<<<< HEAD
          title: '',
=======
          title: 'Company Performance Metrics',
>>>>>>> 8ce454d (new update employee portal v1.1.0)
          is3D: true,
          slices: {
              0: { color: '#3da73d' },
              1: { color: '#ffab00' },
              2: { color: '#e12929' },
            }
          };

          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
      }
      </script>

    <!-- Chart JS -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>

          <?php 
            $start_date = $check2->emp_performance_start_date;
            $new_start_date = date("M-y", strtotime($start_date));

            $end_date = $check2->emp_performance_end_date;
            $new_end_date = date("M-y", strtotime($end_date));        
          ?>

          google.charts.load('current', {packages: ['corechart', 'bar']});
          google.charts.setOnLoadCallback(drawAnnotations);

          function drawAnnotations() {
                var data = google.visualization.arrayToDataTable([
                  ['Profile', 'Employee', 'Employee'],
<<<<<<< HEAD
                  ['Communication', 1, 5],
                  ['Knowledge & Performance', 1, 5],
                  ['Quality & Organization', 1, 5],
                  ['Knowledge of Job', 1, 5],
                  ['Knowledge of Software', 1, 5],
                  ['Reliability & Professionalism', 1, 5],
                  ['Task & Time Management', 1, 5],
                  ['Adaptability & Proactivity', 1, 5],
                  ['Initiative & Proactive', 1, 5],
                  ['Creativity & Problem Solving', 1, 5]
=======
                  ['Quality & Organization', 1, 5],
                  ['Knowledge & Performance', 1, 5],
                  ['Communication', 1, 5],
                  ['Task & Time Management', 1, 5],
                  ['Team Management', 1, 5],
                  ['Reliability & Professionalism', 1, 5],
                  ['Adaptability & Proactivity', 1, 5]
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                ]);

                var data = google.visualization.arrayToDataTable([
                  ['Profile', 'Employee', {type: 'string', role: 'annotation'},
                  'Manager', {type: 'string', role: 'annotation'}],
<<<<<<< HEAD
                  ['Communication', <?php echo $check2->communication_emp_avg; ?>, '<?php echo $check2->communication_emp_avg; ?>', <?php echo $check2->m_communication_emp_avg; ?>, '<?php echo $check2->m_communication_emp_avg; ?>'],
                  ['Knowledge & Performance', <?php echo $check2->knowledge_performance_emp_avg; ?>, '<?php echo $check2->knowledge_performance_emp_avg; ?>', <?php echo $check2->m_knowledge_performance_emp_avg; ?>, '<?php echo $check2->m_knowledge_performance_emp_avg; ?>'],
                  ['Quality & Organization', <?php echo $check2->quality_emp_avg; ?>, '<?php echo $check2->quality_emp_avg; ?>', <?php echo $check2->m_quality_emp_avg; ?>, '<?php echo $check2->m_quality_emp_avg; ?>'],
                  ['Knowledge of Job', <?php echo $check2->knowledge_emp_avg; ?>, '<?php echo $check2->knowledge_emp_avg; ?>', <?php echo $check2->m_knowledge_emp_avg; ?>, '<?php echo $check2->m_knowledge_emp_avg; ?>'],
                  ['Knowledge of Software', <?php echo $check2->software_emp_avg; ?>, '<?php echo $check2->software_emp_avg; ?>', <?php echo $check2->m_software_emp_avg; ?>, '<?php echo $check2->m_software_emp_avg; ?>'],
                  ['Reliability & Professionalism', <?php echo $check2->reliability_emp_avg; ?>, '<?php echo $check2->reliability_emp_avg; ?>', <?php echo $check2->m_reliability_emp_avg; ?>, '<?php echo $check2->m_reliability_emp_avg; ?>'],
                  ['Task & Time Management', <?php echo $check2->time_management_emp_avg; ?>, '<?php echo $check2->time_management_emp_avg; ?>', <?php echo $check2->m_time_management_emp_avg; ?>, '<?php echo $check2->m_time_management_emp_avg; ?>'],
                  ['Adaptability & Proactivity', <?php echo $check2->productivity_emp_avg; ?>, '<?php echo $check2->productivity_emp_avg; ?>', <?php echo $check2->m_productivity_emp_avg; ?>, '<?php echo $check2->m_productivity_emp_avg; ?>'],
                  ['Initiative & Proactive', <?php echo $check2->p_initiative_proactive_emp_avg; ?>, '<?php echo $check2->p_initiative_proactive_emp_avg; ?>', <?php echo $check2->m_p_initiative_proactive_emp_avg; ?>, '<?php echo $check2->m_p_initiative_proactive_emp_avg; ?>'],
                  ['Creativity & Problem Solving', <?php echo $check2->p_creativity_problem_solving_emp_avg; ?>, '<?php echo $check2->p_creativity_problem_solving_emp_avg; ?>', <?php echo $check2->m_p_creativity_problem_solving_emp_avg; ?>, '<?php echo $check2->m_p_creativity_problem_solving_emp_avg; ?>']
=======
                  ['Quality & Organization', <?php echo $check2->quality_emp_avg; ?>, '<?php echo $check2->quality_emp_avg; ?>', <?php echo $check2->m_quality_emp_avg; ?>, '<?php echo $check2->m_quality_emp_avg; ?>'],
                  ['Knowledge & Performance', <?php echo $check2->knowledge_performance_emp_avg; ?>, '<?php echo $check2->knowledge_performance_emp_avg; ?>', <?php echo $check2->m_knowledge_performance_emp_avg; ?>, '<?php echo $check2->m_knowledge_performance_emp_avg; ?>'],
                  ['Communication', <?php echo $check2->communication_emp_avg; ?>, '<?php echo $check2->communication_emp_avg; ?>', <?php echo $check2->m_communication_emp_avg; ?>, '<?php echo $check2->m_communication_emp_avg; ?>'],
                  ['Task & Time Management', <?php echo $check2->time_management_emp_avg; ?>, '<?php echo $check2->time_management_emp_avg; ?>', <?php echo $check2->m_time_management_emp_avg; ?>, '<?php echo $check2->m_time_management_emp_avg; ?>'],
                  ['Team Management', <?php echo $check2->team_management_emp_avg; ?>, '<?php echo $check2->team_management_emp_avg; ?>', <?php echo $check2->m_team_management_emp_avg; ?>, '<?php echo $check2->m_team_management_emp_avg; ?>'],
                  ['Reliability & Professionalism', <?php echo $check2->reliability_emp_avg; ?>, '<?php echo $check2->reliability_emp_avg; ?>', <?php echo $check2->m_reliability_emp_avg; ?>, '<?php echo $check2->m_reliability_emp_avg; ?>'],
                  ['Adaptability & Proactivity', <?php echo $check2->productivity_emp_avg; ?>, '<?php echo $check2->productivity_emp_avg; ?>', <?php echo $check2->m_productivity_emp_avg; ?>, '<?php echo $check2->m_productivity_emp_avg; ?>']
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                ]);

                var options = {
                  title: 'Your Performance Start Date - <?php echo $new_start_date; ?> / End Date - <?php echo $new_end_date; ?>',
                  chartArea: {width: '50%'},
                  hAxis: {
<<<<<<< HEAD
                    title: 'Total Score',
=======
                    title: '',
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                    minValue: 5,
                    maxValue: 5
                  },
                  vAxis: {
<<<<<<< HEAD
                    title: 'Total Score',
=======
                    title: 'METRICS',
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                    minValue: 5,
                    maxValue: 5
                  },
                  annotations: {
                    alwaysOutside: true,
                    textStyle: {
                      fontSize: 16,
                      auraColor: 'none',
                      color: '#3264c8 '
                    },
                    boxStyle: {
                      stroke: '#cbd8f1',
                      strokeWidth: 1,
                      gradient: {
                        color1: '#cbd8f1',
                        color2: '#cbd8f1',
                        x1: '0%', y1: '0%',
                        x2: '100%', y2: '100%'
                      }
                    }
                  }
                };
                var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
                chart.draw(data, options);
              }
    </script>

       <!--End Chart JS -->

    <script>
      $(document).ready(() => {
          $("#upload").change(function () {
              const file = this.files[0];
              if (file) {
                  let reader = new FileReader();
                  reader.onload = function (event) {
                      $("#imgPreview")
                        .attr("src", event.target.result);
                  };
                  reader.readAsDataURL(file);
              }
          });
      });
  </script>


      <script type="text/javascript">
        $(document).ready(function(){
          $('#department_id').change(function(){
              var department_id = $('#department_id').val();
              if(department_id != ''){
              $.ajax({
              url:"<?php echo base_url(); ?>Employee/fetchDepartmentDrop",
              method:"POST",
              data:{department_id:department_id},
              success:function(data)
              {
              $('#designation_id').html(data);
              }
              });
              }
          });
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
        $('#main_employee_id').change(function(){

            var employee_id = $('#main_employee_id').val();

            if(employee_id != ''){
                $.ajax({
                url:"<?php echo base_url(); ?>Employee/fetchDDInput",
                method:"POST",
                data:{employee_id:employee_id},
                success:function(data){
                    $('#department_name').val(data);
                }
                });
            }
            
            if(employee_id != ''){
                $.ajax({
                url:"<?php echo base_url(); ?>Employee/fetchDesiInput",
                method:"POST",
                data:{employee_id:employee_id},
                success:function(data){
                    $('#designation_name').val(data);
                }
                });
            }
        });
        });
    </script>

          <script>
            
var input = document.querySelector("#phone");
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
    window.addEventListener("load", function () {
        
        errorMsg = document.querySelector("#error-msg"),
 validMsg = document.querySelector("#valid-msg");
        var iti = window.intlTelInput(input, {
            utilsScript:"https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.2/build/js/utils.js"
        });
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
             geoIpLookup: function(callback) {
         $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
           var countryCode = (resp && resp.country) ? resp.country : "";
           callback(countryCode);
         });
       },
            // hiddenInput: "full_number",
            initialCountry: "auto",
           
            // localizedCountries: { 'de': 'Deutschland' },
            //nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.2/build/js/utils.js",
        });
        $(validMsg).addClass("hide");
        input.addEventListener('blur', function () {
            reset();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    validMsg.classList.remove("hide");
                } else {
                    input.classList.add("error");
                    var errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");
                }
            }
        });
        
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);
    });

    
    var reset = function () {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
    };
 $(document).ready(function () {
        $("#phone").val("+917773859");
    });
</script>


<script>
  $(document).ready(function(){

    // #goals2

    $('#goals1').click(function(){
        var employee_id = $('#employee_id').val();
        var goals_hidden1 = $('#goals_hidden1').val();
        if(employee_id != ''){
            $.ajax({
            url:"<?php echo base_url(); ?>Employee/fetchGoal1",
            method:"POST",
            data:{employee_id:employee_id, goals_hidden1:goals_hidden1},
            success:function(data){
              response = jQuery.parseJSON(data);
              $('#goals_input1').val(response.goals_description);
            }
            });
        }
    });

    // #goals2

    $('#goals2').click(function(){
        var employee_id = $('#employee_id').val();
        var goals_hidden2 = $('#goals_hidden2').val();
        
        if(employee_id != ''){
            $.ajax({
            url:"<?php echo base_url(); ?>Employee/fetchGoal2",
            method:"POST",
            data:{employee_id:employee_id, goals_hidden2:goals_hidden2},
            success:function(data){
              response = jQuery.parseJSON(data);
              $('#goals_input2').val(response.goals_description);
            }
            });
        }
    });

    $('#goals3').click(function(){
        var employee_id = $('#employee_id').val();
        var goals_hidden3 = $('#goals_hidden3').val();
        
        if(employee_id != ''){
            $.ajax({
            url:"<?php echo base_url(); ?>Employee/fetchGoal3",
            method:"POST",
            data:{employee_id:employee_id, goals_hidden3:goals_hidden3},
            success:function(data){
              response = jQuery.parseJSON(data);
              $('#goals_input3').val(response.goals_description);
            }
            });
        }
    });

    $('#goals4').click(function(){
        var employee_id = $('#employee_id').val();
        var goals_hidden4 = $('#goals_hidden4').val();
        
        if(employee_id != ''){
            $.ajax({
            url:"<?php echo base_url(); ?>Employee/fetchGoal4",
            method:"POST",
            data:{employee_id:employee_id, goals_hidden4:goals_hidden4},
            success:function(data){
              response = jQuery.parseJSON(data);
              $('#goals_input4').val(response.goals_description);
            }
            });
        }
    });

  });
</script>

<script>
   $(document).ready(function () {

<<<<<<< HEAD
    // communication
        $(".communication_NA1").click(function() {
          if($('.communication_NA1').is(":checked")) {
                $(".communication_Q1").attr('disabled', true);
                $("#communication_text_Q1").css("color", "#b7b7b6");
          } else {
                $(".communication_Q1").attr('disabled', false);
                $("#communication_text_Q1").css("color", "#697a8d");
          }
        });

        $("#refresh_communication_NA1").click(function() {
            $(".communication_Q1").attr('disabled', false);
            $("#communication_text_Q1").css("color", "#697a8d");
            $(".communication_NA1").prop('checked', false);
        });

        $(".communication_NA2").click(function() {
          if($('.communication_NA2').is(":checked")) {
                $(".communication_Q2").attr('disabled', true);
                $("#communication_text_Q2").css("color", "#b7b7b6");
          } else {
                $(".communication_Q2").attr('disabled', false);
                $("#communication_text_Q2").css("color", "#697a8d");
          }
        });

        $("#refresh_communication_NA2").click(function() {
            // $(".communication_Q2").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".communication_NA2").prop('checked', false);
        }); 

        $(".communication_NA3").click(function() {
          if($('.communication_NA3').is(":checked")) {
                $(".communication_Q3").attr('disabled', true);
                $("#communication_text_Q3").css("color", "#b7b7b6");
          } else {
                $(".communication_Q3").attr('disabled', false);
                $("#communication_text_Q3").css("color", "#697a8d");
          }
        }); 

        $("#refresh_communication_NA3").click(function() {
            // $(".communication_Q3").attr('disabled', false);
            $("#communication_text_Q3").css("color", "#697a8d");
            $(".communication_NA3").prop('checked', false);
        }); 

        $(".communication_NA4").click(function() {
          if($('.communication_NA4').is(":checked")) {
                $(".communication_Q4").attr('disabled', true);
                $("#communication_text_Q4").css("color", "#b7b7b6");
          } else {
                $(".communication_Q4").attr('disabled', false);
                $("#communication_text_Q4").css("color", "#697a8d");
          }
        }); 

        $("#refresh_communication_NA4").click(function() {
            $(".communication_Q4").attr('disabled', false);
            $("#communication_text_Q4").css("color", "#697a8d");
            $(".communication_NA4").prop('checked', false);
        }); 

        $(".communication_NA5").click(function() {
          if($('.communication_NA5').is(":checked")) {
                $(".communication_Q5").attr('disabled', true);
                $("#communication_text_Q5").css("color", "#b7b7b6");
          } else {
                $(".communication_Q5").attr('disabled', false);
                $("#communication_text_Q5").css("color", "#697a8d");
          }
        }); 

        $("#refresh_communication_NA5").click(function() {
            $(".communication_Q5").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".communication_NA5").prop('checked', false);
        }); 

    // communication
    
    // knowledge performance

    $(".knowledge_performance_NA1").click(function() {
        if($('.knowledge_performance_NA1').is(":checked")) {
              $(".knowledge_performance_Q1").attr('disabled', true);
              $("#communication_text_Q1").css("color", "#b7b7b6");
        } else {
              $(".knowledge_performance_Q1").attr('disabled', false);
              $("#communication_text_Q1").css("color", "#697a8d");
        }
    });

      $("#refresh_knowledge_performance_NA1").click(function() {
            $(".knowledge_performance_Q1").attr('disabled', false);
            $("#knowledge_performance_Q1").css("color", "#697a8d");
            $(".knowledge_performance_NA1").prop('checked', false);
      });
    
    $(".knowledge_performance_NA2").click(function() {
        if($('.knowledge_performance_NA2').is(":checked")) {
              $(".knowledge_performance_Q2").attr('disabled', true);
              $("#communication_text_Q2").css("color", "#b7b7b6");
        } else {
              $(".knowledge_performance_Q2").attr('disabled', false);
              $("#communication_text_Q2").css("color", "#697a8d");
        }
    });

      $("#refresh_knowledge_performance_NA2").click(function() {
            // $(".knowledge_performance_Q2").attr('disabled', false);
            $("#knowledge_performance_Q2").css("color", "#697a8d");
            $(".knowledge_performance_NA2").prop('checked', false);
      });

    $(".knowledge_performance_NA3").click(function() {
        if($('.knowledge_performance_NA3').is(":checked")) {
              $(".knowledge_performance_Q3").attr('disabled', true);
              $("#communication_text_Q3").css("color", "#b7b7b6");
        } else {
              $(".knowledge_performance_Q3").attr('disabled', false);
              $("#communication_text_Q3").css("color", "#697a8d");
        }
    });

      $("#refresh_knowledge_performance_NA3").click(function() {
            // $(".knowledge_performance_Q3").attr('disabled', false);
            $("#knowledge_performance_Q3").css("color", "#697a8d");
            $(".knowledge_performance_NA3").prop('checked', false);
      });

    $(".knowledge_performance_NA4").click(function() {
        if($('.knowledge_performance_NA4').is(":checked")) {
              $(".knowledge_performance_Q4").attr('disabled', true);
              $("#communication_text_Q4").css("color", "#b7b7b6");
        } else {
              $(".knowledge_performance_Q4").attr('disabled', false);
              $("#communication_text_Q4").css("color", "#697a8d");
        }
    });

      $("#refresh_knowledge_performance_NA4").click(function() {
            $(".knowledge_performance_Q4").attr('disabled', false);
            $("#knowledge_performance_Q4").css("color", "#697a8d");
            $(".knowledge_performance_NA4").prop('checked', false);
      });

    $(".knowledge_performance_NA5").click(function() {
        if($('.knowledge_performance_NA5').is(":checked")) {
              $(".knowledge_performance_Q5").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".knowledge_performance_Q5").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_knowledge_performance_NA5").click(function() {
            $(".knowledge_performance_Q5").attr('disabled', false);
            $("#knowledge_performance_Q5").css("color", "#697a8d");
            $(".knowledge_performance_NA5").prop('checked', false);
      });

    // knowledge performance

    // quality
=======
      // Quality & Organization
>>>>>>> 8ce454d (new update employee portal v1.1.0)

      $(".quality_NA1").click(function() {
        if($('.quality_NA1').is(":checked")) {
              $(".quality_Q1").attr('disabled', true);
<<<<<<< HEAD
              $("#communication_text_Q1").css("color", "#b7b7b6");
        } else {
              $(".quality_Q1").attr('disabled', false);
              $("#communication_text_Q1").css("color", "#697a8d");
=======
              $(".quality_Q2").attr('disabled', true);
              $(".quality_Q3").attr('disabled', true);
              $(".quality_Q4").attr('disabled', true);
              $(".quality_Q5").attr('disabled', true);
        } else {
              $(".quality_Q1").attr('disabled', false);
>>>>>>> 8ce454d (new update employee portal v1.1.0)
        }
      });

      $("#refresh_quality_NA1").click(function() {
            $(".quality_Q1").attr('disabled', false);
            $("#communication_text_Q1").css("color", "#697a8d");
            $(".quality_NA1").prop('checked', false);
      });

      $(".quality_NA2").click(function() {
        if($('.quality_NA2').is(":checked")) {
              $(".quality_Q2").attr('disabled', true);
<<<<<<< HEAD
              $("#communication_text_Q2").css("color", "#b7b7b6");
        } else {
              $(".quality_Q2").attr('disabled', false);
              $("#communication_text_Q2").css("color", "#697a8d");
=======
        } else {
              $(".quality_Q2").attr('disabled', false);
>>>>>>> 8ce454d (new update employee portal v1.1.0)
        }
      });

      $("#refresh_quality_NA2").click(function() {
            // $(".quality_Q1").attr('disabled', false);
            $("#communication_text_Q1").css("color", "#697a8d");
            $(".quality_NA2").prop('checked', false);
<<<<<<< HEAD
=======

            if($('#quality_A1_1').is(":checked")) {
                  $("#quality_B1_1").attr('disabled', false);
            }

            if($('#quality_A2_1').is(":checked")) {
                  $("#quality_B1_1").attr('disabled', false);
                  $("#quality_B2_1").attr('disabled', false);
            }

            if($('#quality_A3_1').is(":checked")) {
                  $("#quality_B1_1").attr('disabled', false);
                  $("#quality_B2_1").attr('disabled', false);
                  $("#quality_B3_1").attr('disabled', false);
            }

            if($('#quality_A4_1').is(":checked")) {
                  $("#quality_B1_1").attr('disabled', false);
                  $("#quality_B2_1").attr('disabled', false);
                  $("#quality_B3_1").attr('disabled', false);
                  $("#quality_B4_1").attr('disabled', false);
            }

            if($('#quality_A5_1').is(":checked")) {
                  $("#quality_B1_1").attr('disabled', false);
                  $("#quality_B2_1").attr('disabled', false);
                  $("#quality_B3_1").attr('disabled', false);
                  $("#quality_B4_1").attr('disabled', false);
                  $("#quality_B5_1").attr('disabled', false);
            }


>>>>>>> 8ce454d (new update employee portal v1.1.0)
      });

      $(".quality_NA3").click(function() {
        if($('.quality_NA3').is(":checked")) {
              $(".quality_Q3").attr('disabled', true);
              $("#communication_text_Q3").css("color", "#b7b7b6");
        } else {
              $(".quality_Q3").attr('disabled', false);
              $("#communication_text_Q3").css("color", "#697a8d");
        }
      });

      $("#refresh_quality_NA3").click(function() {
            // $(".quality_Q1").attr('disabled', false);
<<<<<<< HEAD
            $("#communication_text_Q1").css("color", "#697a8d");
            $(".quality_NA3").prop('checked', false);
=======

            $("#communication_text_Q1").css("color", "#697a8d");
            $(".quality_NA3").prop('checked', false);

            if($('#quality_A1_1').is(":checked")) {
                  $("#quality_C1_1").attr('disabled', false);
            }

            if($('#quality_A2_1').is(":checked")) {
                  $("#quality_C1_1").attr('disabled', false);
                  $("#quality_C2_1").attr('disabled', false);
            }

            if($('#quality_A3_1').is(":checked")) {
                  $("#quality_C1_1").attr('disabled', false);
                  $("#quality_C2_1").attr('disabled', false);
                  $("#quality_C3_1").attr('disabled', false);
            }

            if($('#quality_A4_1').is(":checked")) {
                  $("#quality_C1_1").attr('disabled', false);
                  $("#quality_C2_1").attr('disabled', false);
                  $("#quality_C3_1").attr('disabled', false);
                  $("#quality_C4_1").attr('disabled', false);
            }

            if($('#quality_A5_1').is(":checked")) {
                  $("#quality_C1_1").attr('disabled', false);
                  $("#quality_C2_1").attr('disabled', false);
                  $("#quality_C3_1").attr('disabled', false);
                  $("#quality_C4_1").attr('disabled', false);
                  $("#quality_C5_1").attr('disabled', false);
            }

>>>>>>> 8ce454d (new update employee portal v1.1.0)
      });


      $(".quality_NA4").click(function() {
        if($('.quality_NA4').is(":checked")) {
              $(".quality_Q4").attr('disabled', true);
              $("#communication_text_Q4").css("color", "#b7b7b6");
        } else {
              $(".quality_Q4").attr('disabled', false);
              $("#communication_text_Q4").css("color", "#697a8d");
        }
      });


      $("#refresh_quality_NA4").click(function() {
            // $(".quality_Q1").attr('disabled', false);
            $("#communication_text_Q1").css("color", "#697a8d");
            $(".quality_NA4").prop('checked', false);
<<<<<<< HEAD
=======

            if($('#quality_A1_1').is(":checked")) {
                  $("#quality_D1_1").attr('disabled', false);
            }

            if($('#quality_A2_1').is(":checked")) {
                  $("#quality_D1_1").attr('disabled', false);
                  $("#quality_D2_1").attr('disabled', false);
            }

            if($('#quality_A3_1').is(":checked")) {
                  $("#quality_D1_1").attr('disabled', false);
                  $("#quality_D2_1").attr('disabled', false);
                  $("#quality_D3_1").attr('disabled', false);
            }

            if($('#quality_A4_1').is(":checked")) {
                  $("#quality_D1_1").attr('disabled', false);
                  $("#quality_D2_1").attr('disabled', false);
                  $("#quality_D3_1").attr('disabled', false);
                  $("#quality_D4_1").attr('disabled', false);
            }

            if($('#quality_A5_1').is(":checked")) {
                  $("#quality_D1_1").attr('disabled', false);
                  $("#quality_D2_1").attr('disabled', false);
                  $("#quality_D3_1").attr('disabled', false);
                  $("#quality_D4_1").attr('disabled', false);
                  $("#quality_D5_1").attr('disabled', false);
            }

>>>>>>> 8ce454d (new update employee portal v1.1.0)
      });


      $(".quality_NA5").click(function() {
        if($('.quality_NA5').is(":checked")) {
              $(".quality_Q5").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".quality_Q5").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
      });


      $("#refresh_quality_NA5").click(function() {
            // $(".quality_Q1").attr('disabled', false);
            $("#communication_text_Q1").css("color", "#697a8d");
            $(".quality_NA5").prop('checked', false);
<<<<<<< HEAD
      });

    // quality

    // knowledge_job

      $(".knowledge_job_NA1").click(function() {
        if($('.knowledge_job_NA1').is(":checked")) {
              $(".knowledge_job_Q1").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".knowledge_job_Q1").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
      });

      $("#refresh_knowledge_job_NA1").click(function() {
            $(".knowledge_job_Q1").attr('disabled', false);
            $("#communication_text_Q1").css("color", "#697a8d");
            $(".knowledge_job_NA1").prop('checked', false);
      });

      $(".knowledge_job_NA2").click(function() {
        if($('.knowledge_job_NA2').is(":checked")) {
              $(".knowledge_job_Q2").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".knowledge_job_Q2").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
      });

      $("#refresh_knowledge_job_NA2").click(function() {
            // $(".quality_Q1").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".knowledge_job_NA2").prop('checked', false);
      });


      $(".knowledge_job_NA3").click(function() {
        if($('.knowledge_job_NA3').is(":checked")) {
              $(".knowledge_job_Q3").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".knowledge_job_Q3").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
      });

      $("#refresh_knowledge_job_NA3").click(function() {
            // $(".quality_Q1").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".knowledge_job_NA3").prop('checked', false);
      });

    // knowledge_job

    // software

      $(".software_question_NA1").click(function() {
        if($('.software_question_NA1').is(":checked")) {
              $(".software_questionQ1").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".software_questionQ1").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
      });

      $("#refresh_software_question_NA1").click(function() {
            $(".software_questionQ1").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".software_question_NA1").prop('checked', false);
      });

      $(".software_question_NA2").click(function() {
        if($('.software_question_NA2').is(":checked")) {
              $(".software_questionQ2").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".software_questionQ2").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
      });

      $("#refresh_software_question_NA2").click(function() {
            // $(".quality_Q1").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".software_question_NA2").prop('checked', false);
      });

      $(".software_question_NA3").click(function() {
        if($('.software_question_NA3').is(":checked")) {
              $(".software_questionQ3").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".software_questionQ3").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
      });

      $("#refresh_software_question_NA3").click(function() {
            // $(".quality_Q1").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".software_question_NA3").prop('checked', false);
      });

    $(".software_question_NA4").click(function() {
        if($('.software_question_NA4').is(":checked")) {
              $(".software_questionQ4").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".software_questionQ4").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

    $("#refresh_software_question_NA4").click(function() {
            // $(".quality_Q1").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".software_question_NA4").prop('checked', false);
      });

    $(".software_question_NA5").click(function() {
        if($('.software_question_NA5').is(":checked")) {
              $(".software_questionQ5").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".software_questionQ5").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_software_question_NA5").click(function() {
            // $(".quality_Q1").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".software_question_NA5").prop('checked', false);
      });

    // software

    // reliability

    $(".reliability_question_NA1").click(function() {
        if($('.reliability_question_NA1').is(":checked")) {
              $(".reliability_questionQ1").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".reliability_questionQ1").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_reliability_question_NA1").click(function() {
            $(".reliability_questionQ1").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".reliability_question_NA1").prop('checked', false);
      });

    $(".reliability_question_NA2").click(function() {
        if($('.reliability_question_NA2').is(":checked")) {
              $(".reliability_questionQ2").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".reliability_questionQ2").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_reliability_question_NA2").click(function() {
            // $(".reliability_questionQ2").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".reliability_question_NA2").prop('checked', false);
      });

    $(".reliability_question_NA3").click(function() {
        if($('.reliability_question_NA3').is(":checked")) {
              $(".reliability_questionQ3").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".reliability_questionQ3").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_reliability_question_NA3").click(function() {
            // $(".reliability_questionQ2").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".reliability_question_NA3").prop('checked', false);
      });

    $(".reliability_question_NA4").click(function() {
        if($('.reliability_question_NA4').is(":checked")) {
              $(".reliability_questionQ4").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".reliability_questionQ4").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_reliability_question_NA4").click(function() {
            $(".reliability_questionQ4").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".reliability_question_NA4").prop('checked', false);
      });

    $(".reliability_question_NA5").click(function() {
        if($('.reliability_question_NA5').is(":checked")) {
              $(".reliability_questionQ5").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".reliability_questionQ5").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_reliability_question_NA5").click(function() {
            $(".reliability_questionQ5").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".reliability_question_NA5").prop('checked', false);
      });

    $(".reliability_question_NA6").click(function() {
        if($('.reliability_question_NA6').is(":checked")) {
              $(".reliability_questionQ6").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".reliability_questionQ6").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_reliability_question_NA6").click(function() {
            $(".reliability_questionQ6").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".reliability_question_NA6").prop('checked', false);
      });

    // reliability

    // time_management
=======

            if($('#quality_A1_1').is(":checked")) {
                  $("#quality_E1_1").attr('disabled', false);
            }

            if($('#quality_A2_1').is(":checked")) {
                  $("#quality_E1_1").attr('disabled', false);
                  $("#quality_E2_1").attr('disabled', false);
            }

            if($('#quality_A3_1').is(":checked")) {
                  $("#quality_E1_1").attr('disabled', false);
                  $("#quality_E2_1").attr('disabled', false);
                  $("#quality_E3_1").attr('disabled', false);
            }

            if($('#quality_A4_1').is(":checked")) {
                  $("#quality_E1_1").attr('disabled', false);
                  $("#quality_E2_1").attr('disabled', false);
                  $("#quality_E3_1").attr('disabled', false);
                  $("#quality_E4_1").attr('disabled', false);
            }

            if($('#quality_A5_1').is(":checked")) {
                  $("#quality_E1_1").attr('disabled', false);
                  $("#quality_E2_1").attr('disabled', false);
                  $("#quality_E3_1").attr('disabled', false);
                  $("#quality_E4_1").attr('disabled', false);
                  $("#quality_E5_1").attr('disabled', false);
            }

      });

    // Quality & Organization

    // knowledge & performance

    $(".knowledge_performance_NA1").click(function() {
        if($('.knowledge_performance_NA1').is(":checked")) {
              $(".knowledge_performance_Q1").attr('disabled', true);
              $(".knowledge_performance_Q2").attr('disabled', true);
              $(".knowledge_performance_Q3").attr('disabled', true);
              $(".knowledge_performance_Q4").attr('disabled', true);
              $(".knowledge_performance_Q5").attr('disabled', true);
              $("#communication_text_Q1").css("color", "#b7b7b6");
        } else {
              $(".knowledge_performance_Q1").attr('disabled', false);
              $("#communication_text_Q1").css("color", "#697a8d");
        }
    });

      $("#refresh_knowledge_performance_NA1").click(function() {
            $(".knowledge_performance_Q1").attr('disabled', false);
            $("#knowledge_performance_Q1").css("color", "#697a8d");
            $(".knowledge_performance_NA1").prop('checked', false);

      });
    
    $(".knowledge_performance_NA2").click(function() {
        if($('.knowledge_performance_NA2').is(":checked")) {
              $(".knowledge_performance_Q2").attr('disabled', true);
        } else {
              $(".knowledge_performance_Q2").attr('disabled', false);
        }
    });

      $("#refresh_knowledge_performance_NA2").click(function() {
            // $(".knowledge_performance_Q2").attr('disabled', false);
            $("#knowledge_performance_Q2").css("color", "#697a8d");
            $(".knowledge_performance_NA2").prop('checked', false);

            if($('#knowledge_performance_A1_1').is(":checked")) {
                  $("#knowledge_performance_B1_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A2_1').is(":checked")) {
                  $("#knowledge_performance_B1_1").attr('disabled', false);
                  $("#knowledge_performance_B2_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A3_1').is(":checked")) {
                  $("#knowledge_performance_B1_1").attr('disabled', false);
                  $("#knowledge_performance_B2_1").attr('disabled', false);
                  $("#knowledge_performance_B3_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A4_1').is(":checked")) {
                  $("#knowledge_performance_B1_1").attr('disabled', false);
                  $("#knowledge_performance_B2_1").attr('disabled', false);
                  $("#knowledge_performance_B3_1").attr('disabled', false);
                  $("#knowledge_performance_B4_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A5_1').is(":checked")) {
                  $("#knowledge_performance_B1_1").attr('disabled', false);
                  $("#knowledge_performance_B2_1").attr('disabled', false);
                  $("#knowledge_performance_B3_1").attr('disabled', false);
                  $("#knowledge_performance_B4_1").attr('disabled', false);
                  $("#knowledge_performance_B5_1").attr('disabled', false);
            }

      });

    $(".knowledge_performance_NA3").click(function() {
        if($('.knowledge_performance_NA3').is(":checked")) {
              $(".knowledge_performance_Q3").attr('disabled', true);
              $("#communication_text_Q3").css("color", "#b7b7b6");
        } else {
              $(".knowledge_performance_Q3").attr('disabled', false);
              $("#communication_text_Q3").css("color", "#697a8d");
        }
    });

      $("#refresh_knowledge_performance_NA3").click(function() {
            // $(".knowledge_performance_Q3").attr('disabled', false);
            $("#knowledge_performance_Q3").css("color", "#697a8d");
            $(".knowledge_performance_NA3").prop('checked', false);

            if($('#knowledge_performance_A1_1').is(":checked")) {
                  $("#knowledge_performance_C1_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A2_1').is(":checked")) {
                  $("#knowledge_performance_C1_1").attr('disabled', false);
                  $("#knowledge_performance_C2_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A3_1').is(":checked")) {
                  $("#knowledge_performance_C1_1").attr('disabled', false);
                  $("#knowledge_performance_C2_1").attr('disabled', false);
                  $("#knowledge_performance_C3_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A4_1').is(":checked")) {
                  $("#knowledge_performance_C1_1").attr('disabled', false);
                  $("#knowledge_performance_C2_1").attr('disabled', false);
                  $("#knowledge_performance_C3_1").attr('disabled', false);
                  $("#knowledge_performance_C4_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A5_1').is(":checked")) {
                  $("#knowledge_performance_C1_1").attr('disabled', false);
                  $("#knowledge_performance_C2_1").attr('disabled', false);
                  $("#knowledge_performance_C3_1").attr('disabled', false);
                  $("#knowledge_performance_C4_1").attr('disabled', false);
                  $("#knowledge_performance_C5_1").attr('disabled', false);
            }
      });

    $(".knowledge_performance_NA4").click(function() {
        if($('.knowledge_performance_NA4').is(":checked")) {
              $(".knowledge_performance_Q4").attr('disabled', true);
              $("#communication_text_Q4").css("color", "#b7b7b6");
        } else {
              $(".knowledge_performance_Q4").attr('disabled', false);
              $("#communication_text_Q4").css("color", "#697a8d");
        }
    });

      $("#refresh_knowledge_performance_NA4").click(function() {
            $(".knowledge_performance_Q4").attr('disabled', false);
            $("#knowledge_performance_Q4").css("color", "#697a8d");
            $(".knowledge_performance_NA4").prop('checked', false);

            if($('#knowledge_performance_A1_1').is(":checked")) {
                  $("#knowledge_performance_D1_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A2_1').is(":checked")) {
                  $("#knowledge_performance_D1_1").attr('disabled', false);
                  $("#knowledge_performance_D2_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A3_1').is(":checked")) {
                  $("#knowledge_performance_D1_1").attr('disabled', false);
                  $("#knowledge_performance_D2_1").attr('disabled', false);
                  $("#knowledge_performance_D3_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A4_1').is(":checked")) {
                  $("#knowledge_performance_D1_1").attr('disabled', false);
                  $("#knowledge_performance_D2_1").attr('disabled', false);
                  $("#knowledge_performance_D3_1").attr('disabled', false);
                  $("#knowledge_performance_D4_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A5_1').is(":checked")) {
                  $("#knowledge_performance_D1_1").attr('disabled', false);
                  $("#knowledge_performance_D2_1").attr('disabled', false);
                  $("#knowledge_performance_D3_1").attr('disabled', false);
                  $("#knowledge_performance_D4_1").attr('disabled', false);
                  $("#knowledge_performance_D5_1").attr('disabled', false);
            }

      });



    $(".knowledge_performance_NA5").click(function() {
        if($('.knowledge_performance_NA5').is(":checked")) {
              $(".knowledge_performance_Q5").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".knowledge_performance_Q5").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_knowledge_performance_NA5").click(function() {
            $(".knowledge_performance_Q5").attr('disabled', false);
            $("#knowledge_performance_Q5").css("color", "#697a8d");
            $(".knowledge_performance_NA5").prop('checked', false);

            if($('#knowledge_performance_A1_1').is(":checked")) {
                  $("#knowledge_performance_E1_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A2_1').is(":checked")) {
                  $("#knowledge_performance_E1_1").attr('disabled', false);
                  $("#knowledge_performance_E2_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A3_1').is(":checked")) {
                  $("#knowledge_performance_E1_1").attr('disabled', false);
                  $("#knowledge_performance_E2_1").attr('disabled', false);
                  $("#knowledge_performance_E3_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A4_1').is(":checked")) {
                  $("#knowledge_performance_E1_1").attr('disabled', false);
                  $("#knowledge_performance_E2_1").attr('disabled', false);
                  $("#knowledge_performance_E3_1").attr('disabled', false);
                  $("#knowledge_performance_E4_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A5_1').is(":checked")) {
                  $("#knowledge_performance_E1_1").attr('disabled', false);
                  $("#knowledge_performance_E2_1").attr('disabled', false);
                  $("#knowledge_performance_E3_1").attr('disabled', false);
                  $("#knowledge_performance_E4_1").attr('disabled', false);
                  $("#knowledge_performance_E5_1").attr('disabled', false);
            }
      });


      $(".knowledge_performance_NA6").click(function() {
        if($('.knowledge_performance_NA6').is(":checked")) {
              $(".knowledge_performance_Q6").attr('disabled', true);
        } else {
              $(".knowledge_performance_Q6").attr('disabled', false);
        }
      });

      $("#refresh_knowledge_performance_NA6").click(function() {
            $(".knowledge_performance_Q6").attr('disabled', false);
            $(".knowledge_performance_NA6").prop('checked', false);

            if($('#knowledge_performance_A1_1').is(":checked")) {
                  $("#knowledge_performance_F1_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A2_1').is(":checked")) {
                  $("#knowledge_performance_F1_1").attr('disabled', false);
                  $("#knowledge_performance_F2_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A3_1').is(":checked")) {
                  $("#knowledge_performance_F1_1").attr('disabled', false);
                  $("#knowledge_performance_F2_1").attr('disabled', false);
                  $("#knowledge_performance_F3_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A4_1').is(":checked")) {
                  $("#knowledge_performance_F1_1").attr('disabled', false);
                  $("#knowledge_performance_F2_1").attr('disabled', false);
                  $("#knowledge_performance_F3_1").attr('disabled', false);
                  $("#knowledge_performance_F4_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A5_1').is(":checked")) {
                  $("#knowledge_performance_F1_1").attr('disabled', false);
                  $("#knowledge_performance_F2_1").attr('disabled', false);
                  $("#knowledge_performance_F3_1").attr('disabled', false);
                  $("#knowledge_performance_F4_1").attr('disabled', false);
                  $("#knowledge_performance_F5_1").attr('disabled', false);
            }

      });

      $(".knowledge_performance_NA7").click(function() {
        if($('.knowledge_performance_NA7').is(":checked")) {
              $(".knowledge_performance_Q7").attr('disabled', true);
        } else {
              $(".knowledge_performance_Q7").attr('disabled', false);
        }
      });

      $("#refresh_knowledge_performance_NA7").click(function() {
            $(".knowledge_performance_Q7").attr('disabled', false);
            $(".knowledge_performance_NA7").prop('checked', false);

            if($('#knowledge_performance_A1_1').is(":checked")) {
                  $("#knowledge_performance_G1_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A2_1').is(":checked")) {
                  $("#knowledge_performance_G1_1").attr('disabled', false);
                  $("#knowledge_performance_G2_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A3_1').is(":checked")) {
                  $("#knowledge_performance_G1_1").attr('disabled', false);
                  $("#knowledge_performance_G2_1").attr('disabled', false);
                  $("#knowledge_performance_G3_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A4_1').is(":checked")) {
                  $("#knowledge_performance_G1_1").attr('disabled', false);
                  $("#knowledge_performance_G2_1").attr('disabled', false);
                  $("#knowledge_performance_G3_1").attr('disabled', false);
                  $("#knowledge_performance_G4_1").attr('disabled', false);
            }

            if($('#knowledge_performance_A5_1').is(":checked")) {
                  $("#knowledge_performance_G1_1").attr('disabled', false);
                  $("#knowledge_performance_G2_1").attr('disabled', false);
                  $("#knowledge_performance_G3_1").attr('disabled', false);
                  $("#knowledge_performance_G4_1").attr('disabled', false);
                  $("#knowledge_performance_G5_1").attr('disabled', false);
            }

      });

      

    // knowledge performance

    // communication
        $(".communication_NA1").click(function() {
          if($('.communication_NA1').is(":checked")) {
                $(".communication_Q1").attr('disabled', true);
                $(".communication_Q2").attr('disabled', true);
                $(".communication_Q3").attr('disabled', true);
                $(".communication_Q4").attr('disabled', true);
                $(".communication_Q5").attr('disabled', true);
                $("#communication_text_Q1").css("color", "#b7b7b6");
          } else {
                $(".communication_Q1").attr('disabled', false);
                $("#communication_text_Q1").css("color", "#697a8d");
          }
        });

        $("#refresh_communication_NA1").click(function() {
            $(".communication_Q1").attr('disabled', false);
            $("#communication_text_Q1").css("color", "#697a8d");
            $(".communication_NA1").prop('checked', false);
        });

        $(".communication_NA2").click(function() {
          if($('.communication_NA2').is(":checked")) {
                $(".communication_Q2").attr('disabled', true);
          } else {
                $(".communication_Q2").attr('disabled', false);
          }
        });

        $("#refresh_communication_NA2").click(function() {
            // $(".communication_Q2").attr('disabled', false);
            $(".communication_NA2").prop('checked', false);

            if($('#communication_A1_1').is(":checked")) {
                  $("#communication_B1_1").attr('disabled', false);
            }

            if($('#communication_A2_1').is(":checked")) {
                  $("#communication_B1_1").attr('disabled', false);
                  $("#communication_B2_1").attr('disabled', false);
            }

            if($('#communication_A3_1').is(":checked")) {
                  $("#communication_B1_1").attr('disabled', false);
                  $("#communication_B2_1").attr('disabled', false);
                  $("#communication_B3_1").attr('disabled', false);
            }

            if($('#communication_A4_1').is(":checked")) {
                  $("#communication_B1_1").attr('disabled', false);
                  $("#communication_B2_1").attr('disabled', false);
                  $("#communication_B3_1").attr('disabled', false);
                  $("#communication_B4_1").attr('disabled', false);
            }

            if($('#communication_A5_1').is(":checked")) {
                  $("#communication_B1_1").attr('disabled', false);
                  $("#communication_B2_1").attr('disabled', false);
                  $("#communication_B3_1").attr('disabled', false);
                  $("#communication_B4_1").attr('disabled', false);
                  $("#communication_B5_1").attr('disabled', false);
            }

        }); 

        $(".communication_NA3").click(function() {
          if($('.communication_NA3').is(":checked")) {
                $(".communication_Q3").attr('disabled', true);
                $("#communication_text_Q3").css("color", "#b7b7b6");
          } else {
                $(".communication_Q3").attr('disabled', false);
                $("#communication_text_Q3").css("color", "#697a8d");
          }
        }); 

        $("#refresh_communication_NA3").click(function() {
            // $(".communication_Q3").attr('disabled', false);
            $("#communication_text_Q3").css("color", "#697a8d");
            $(".communication_NA3").prop('checked', false);

            if($('#communication_A1_1').is(":checked")) {
                  $("#communication_C1_1").attr('disabled', false);
            }

            if($('#communication_A2_1').is(":checked")) {
                  $("#communication_C1_1").attr('disabled', false);
                  $("#communication_C2_1").attr('disabled', false);
            }

            if($('#communication_A3_1').is(":checked")) {
                  $("#communication_C1_1").attr('disabled', false);
                  $("#communication_C2_1").attr('disabled', false);
                  $("#communication_C3_1").attr('disabled', false);
            }

            if($('#communication_A4_1').is(":checked")) {
                  $("#communication_C1_1").attr('disabled', false);
                  $("#communication_C2_1").attr('disabled', false);
                  $("#communication_C3_1").attr('disabled', false);
                  $("#communication_C4_1").attr('disabled', false);
            }

            if($('#communication_A5_1').is(":checked")) {
                  $("#communication_C1_1").attr('disabled', false);
                  $("#communication_C2_1").attr('disabled', false);
                  $("#communication_C3_1").attr('disabled', false);
                  $("#communication_C4_1").attr('disabled', false);
                  $("#communication_C5_1").attr('disabled', false);
            }


        }); 

        $(".communication_NA4").click(function() {
          if($('.communication_NA4').is(":checked")) {
                $(".communication_Q4").attr('disabled', true);
                $("#communication_text_Q4").css("color", "#b7b7b6");
          } else {
                $(".communication_Q4").attr('disabled', false);
                $("#communication_text_Q4").css("color", "#697a8d");
          }
        }); 

        $("#refresh_communication_NA4").click(function() {
            $(".communication_Q4").attr('disabled', false);
            $("#communication_text_Q4").css("color", "#697a8d");
            $(".communication_NA4").prop('checked', false);

            if($('#communication_A1_1').is(":checked")) {
                  $("#communication_D1_1").attr('disabled', false);
            }

            if($('#communication_A2_1').is(":checked")) {
                  $("#communication_D1_1").attr('disabled', false);
                  $("#communication_D2_1").attr('disabled', false);
            }

            if($('#communication_A3_1').is(":checked")) {
                  $("#communication_D1_1").attr('disabled', false);
                  $("#communication_D2_1").attr('disabled', false);
                  $("#communication_D3_1").attr('disabled', false);
            }

            if($('#communication_A4_1').is(":checked")) {
                  $("#communication_D1_1").attr('disabled', false);
                  $("#communication_D2_1").attr('disabled', false);
                  $("#communication_D3_1").attr('disabled', false);
                  $("#communication_D4_1").attr('disabled', false);
            }

            if($('#communication_A5_1').is(":checked")) {
                  $("#communication_D1_1").attr('disabled', false);
                  $("#communication_D2_1").attr('disabled', false);
                  $("#communication_D3_1").attr('disabled', false);
                  $("#communication_D4_1").attr('disabled', false);
                  $("#communication_D5_1").attr('disabled', false);
            }


        }); 



        $(".communication_NA5").click(function() {
          if($('.communication_NA5').is(":checked")) {
                $(".communication_Q5").attr('disabled', true);
                $("#communication_text_Q5").css("color", "#b7b7b6");
          } else {
                $(".communication_Q5").attr('disabled', false);
                $("#communication_text_Q5").css("color", "#697a8d");
          }
        }); 

        $("#refresh_communication_NA5").click(function() {
            $(".communication_Q5").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".communication_NA5").prop('checked', false);

            if($('#communication_A1_1').is(":checked")) {
                  $("#communication_E1_1").attr('disabled', false);
            }

            if($('#communication_A2_1').is(":checked")) {
                  $("#communication_E1_1").attr('disabled', false);
                  $("#communication_E2_1").attr('disabled', false);
            }

            if($('#communication_A3_1').is(":checked")) {
                  $("#communication_E1_1").attr('disabled', false);
                  $("#communication_E2_1").attr('disabled', false);
                  $("#communication_E3_1").attr('disabled', false);
            }

            if($('#communication_A4_1').is(":checked")) {
                  $("#communication_E1_1").attr('disabled', false);
                  $("#communication_E2_1").attr('disabled', false);
                  $("#communication_E3_1").attr('disabled', false);
                  $("#communication_E4_1").attr('disabled', false);
            }

            if($('#communication_A5_1').is(":checked")) {
                  $("#communication_E1_1").attr('disabled', false);
                  $("#communication_E2_1").attr('disabled', false);
                  $("#communication_E3_1").attr('disabled', false);
                  $("#communication_E4_1").attr('disabled', false);
                  $("#communication_E5_1").attr('disabled', false);
            }

        }); 


        $(".communication_NA6").click(function() {
          if($('.communication_NA6').is(":checked")) {
                $(".communication_Q6").attr('disabled', true);
          } else {
                $(".communication_Q6").attr('disabled', false);
          }
        }); 

        $("#refresh_communication_NA6").click(function() {
            $(".communication_Q6").attr('disabled', false);
            $(".communication_NA6").prop('checked', false);

            if($('#communication_A1_1').is(":checked")) {
                  $("#communication_F1_1").attr('disabled', false);
            }

            if($('#communication_A2_1').is(":checked")) {
                  $("#communication_F1_1").attr('disabled', false);
                  $("#communication_F2_1").attr('disabled', false);
            }

            if($('#communication_A3_1').is(":checked")) {
                  $("#communication_F1_1").attr('disabled', false);
                  $("#communication_F2_1").attr('disabled', false);
                  $("#communication_F3_1").attr('disabled', false);
            }

            if($('#communication_A4_1').is(":checked")) {
                  $("#communication_F1_1").attr('disabled', false);
                  $("#communication_F2_1").attr('disabled', false);
                  $("#communication_F3_1").attr('disabled', false);
                  $("#communication_F4_1").attr('disabled', false);
            }

            if($('#communication_A5_1').is(":checked")) {
                  $("#communication_F1_1").attr('disabled', false);
                  $("#communication_F2_1").attr('disabled', false);
                  $("#communication_F3_1").attr('disabled', false);
                  $("#communication_F4_1").attr('disabled', false);
                  $("#communication_F5_1").attr('disabled', false);
            }

        }); 

    // communication

    // task & time_management
>>>>>>> 8ce454d (new update employee portal v1.1.0)

      $(".time_management_question_NA1").click(function() {
            if($('.time_management_question_NA1').is(":checked")) {
                  $(".time_managementQ1").attr('disabled', true);
<<<<<<< HEAD
=======
                  $(".time_managementQ2").attr('disabled', true);
                  $(".time_managementQ3").attr('disabled', true);
                  $(".time_managementQ4").attr('disabled', true);
                  $(".time_managementQ5").attr('disabled', true);

>>>>>>> 8ce454d (new update employee portal v1.1.0)
                  $("#communication_text_Q5").css("color", "#b7b7b6");
            } else {
                  $(".time_managementQ1").attr('disabled', false);
                  $("#communication_text_Q5").css("color", "#697a8d");
            }
      });

      $("#refresh_time_management_question_NA1").click(function() {
            $(".time_managementQ1").attr('disabled', false);
<<<<<<< HEAD
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".time_management_question_NA1").prop('checked', false);
      }); 

    $(".time_management_question_NA2").click(function() {
=======
            $(".time_management_question_NA1").prop('checked', false);
      }); 

      $(".time_management_question_NA2").click(function() {
>>>>>>> 8ce454d (new update employee portal v1.1.0)
        if($('.time_management_question_NA2').is(":checked")) {
              $(".time_managementQ2").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".time_managementQ2").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
<<<<<<< HEAD
    });

      $("#refresh_time_management_question_NA2").click(function() {
            // $(".time_managementQ2").attr('disabled', false);
            $("#communication_text_Q2").css("color", "#697a8d");
            $(".time_management_question_NA2").prop('checked', false);
=======
      });

      $("#refresh_time_management_question_NA2").click(function() {
            // $(".time_managementQ2").attr('disabled', false);
            $(".time_management_question_NA2").prop('checked', false);


            if($('#time_management_A1_1').is(":checked")) {
                  $("#time_management_B1_1").attr('disabled', false);
            }

            if($('#time_management_A2_1').is(":checked")) {
                  $("#time_management_B1_1").attr('disabled', false);
                  $("#time_management_B2_1").attr('disabled', false);
            }

            if($('#time_management_A3_1').is(":checked")) {
                  $("#time_management_B1_1").attr('disabled', false);
                  $("#time_management_B2_1").attr('disabled', false);
                  $("#time_management_B3_1").attr('disabled', false);
            }

            if($('#time_management_A4_1').is(":checked")) {
                  $("#time_management_B1_1").attr('disabled', false);
                  $("#time_management_B2_1").attr('disabled', false);
                  $("#time_management_B3_1").attr('disabled', false);
                  $("#time_management_B4_1").attr('disabled', false);
            }

            if($('#time_management_A5_1').is(":checked")) {
                  $("#time_management_B1_1").attr('disabled', false);
                  $("#time_management_B2_1").attr('disabled', false);
                  $("#time_management_B3_1").attr('disabled', false);
                  $("#time_management_B4_1").attr('disabled', false);
                  $("#time_management_B5_1").attr('disabled', false);
            }

>>>>>>> 8ce454d (new update employee portal v1.1.0)
      }); 

    $(".time_management_question_NA3").click(function() {
        if($('.time_management_question_NA3').is(":checked")) {
              $(".time_managementQ3").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".time_managementQ3").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_time_management_question_NA3").click(function() {
            // $(".time_managementQ3").attr('disabled', false);
            $("#communication_text_Q3").css("color", "#697a8d");
            $(".time_management_question_NA3").prop('checked', false);
<<<<<<< HEAD
      }); 

    $(".time_management_question_NA4").click(function() {
        if($('.time_management_question_NA4').is(":checked")) {
              $(".time_managementQ4").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".time_managementQ4").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });
=======

            if($('#time_management_A1_1').is(":checked")) {
                  $("#time_management_C1_1").attr('disabled', false);
            }

            if($('#time_management_A2_1').is(":checked")) {
                  $("#time_management_C1_1").attr('disabled', false);
                  $("#time_management_C2_1").attr('disabled', false);
            }

            if($('#time_management_A3_1').is(":checked")) {
                  $("#time_management_C1_1").attr('disabled', false);
                  $("#time_management_C2_1").attr('disabled', false);
                  $("#time_management_C3_1").attr('disabled', false);
            }

            if($('#time_management_A4_1').is(":checked")) {
                  $("#time_management_C1_1").attr('disabled', false);
                  $("#time_management_C2_1").attr('disabled', false);
                  $("#time_management_C3_1").attr('disabled', false);
                  $("#time_management_C4_1").attr('disabled', false);
            }

            if($('#time_management_A5_1').is(":checked")) {
                  $("#time_management_C1_1").attr('disabled', false);
                  $("#time_management_C2_1").attr('disabled', false);
                  $("#time_management_C3_1").attr('disabled', false);
                  $("#time_management_C4_1").attr('disabled', false);
                  $("#time_management_C5_1").attr('disabled', false);
            }

      }); 

      $(".time_management_question_NA4").click(function() {
            if($('.time_management_question_NA4').is(":checked")) {
                  $(".time_managementQ4").attr('disabled', true);
                  $("#communication_text_Q5").css("color", "#b7b7b6");
            } else {
                  $(".time_managementQ4").attr('disabled', false);
                  $("#communication_text_Q5").css("color", "#697a8d");
            }
      });
>>>>>>> 8ce454d (new update employee portal v1.1.0)

      $("#refresh_time_management_question_NA4").click(function() {
            // $(".time_managementQ4").attr('disabled', false);
            $("#communication_text_Q4").css("color", "#697a8d");
            $(".time_management_question_NA4").prop('checked', false);
<<<<<<< HEAD
      }); 

    $(".time_management_question_NA5").click(function() {
        if($('.time_management_question_NA5').is(":checked")) {
              $(".time_managementQ5").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".time_managementQ5").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });
=======

            if($('#time_management_A1_1').is(":checked")) {
                  $("#time_management_D1_1").attr('disabled', false);
            }

            if($('#time_management_A2_1').is(":checked")) {
                  $("#time_management_D1_1").attr('disabled', false);
                  $("#time_management_D2_1").attr('disabled', false);
            }

            if($('#time_management_A3_1').is(":checked")) {
                  $("#time_management_D1_1").attr('disabled', false);
                  $("#time_management_D2_1").attr('disabled', false);
                  $("#time_management_D3_1").attr('disabled', false);
            }

            if($('#time_management_A4_1').is(":checked")) {
                  $("#time_management_D1_1").attr('disabled', false);
                  $("#time_management_D2_1").attr('disabled', false);
                  $("#time_management_D3_1").attr('disabled', false);
                  $("#time_management_D4_1").attr('disabled', false);
            }

            if($('#time_management_A5_1').is(":checked")) {
                  $("#time_management_D1_1").attr('disabled', false);
                  $("#time_management_D2_1").attr('disabled', false);
                  $("#time_management_D3_1").attr('disabled', false);
                  $("#time_management_D4_1").attr('disabled', false);
                  $("#time_management_D5_1").attr('disabled', false);
            }

      }); 

      $(".time_management_question_NA5").click(function() {
            if($('.time_management_question_NA5').is(":checked")) {
                  $(".time_managementQ5").attr('disabled', true);
                  $("#communication_text_Q5").css("color", "#b7b7b6");
            } else {
                  $(".time_managementQ5").attr('disabled', false);
                  $("#communication_text_Q5").css("color", "#697a8d");
            }
      });
>>>>>>> 8ce454d (new update employee portal v1.1.0)

      $("#refresh_time_management_question_NA5").click(function() {
            $(".time_managementQ5").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".time_management_question_NA5").prop('checked', false);
<<<<<<< HEAD
      }); 

    // time_management
=======

            if($('#time_management_A1_1').is(":checked")) {
                  $("#time_management_E1_1").attr('disabled', false);
            }

            if($('#time_management_A2_1').is(":checked")) {
                  $("#time_management_E1_1").attr('disabled', false);
                  $("#time_management_E2_1").attr('disabled', false);
            }

            if($('#time_management_A3_1').is(":checked")) {
                  $("#time_management_E1_1").attr('disabled', false);
                  $("#time_management_E2_1").attr('disabled', false);
                  $("#time_management_E3_1").attr('disabled', false);
            }

            if($('#time_management_A4_1').is(":checked")) {
                  $("#time_management_E1_1").attr('disabled', false);
                  $("#time_management_E2_1").attr('disabled', false);
                  $("#time_management_E3_1").attr('disabled', false);
                  $("#time_management_E4_1").attr('disabled', false);
            }

            if($('#time_management_A5_1').is(":checked")) {
                  $("#time_management_E1_1").attr('disabled', false);
                  $("#time_management_E2_1").attr('disabled', false);
                  $("#time_management_E3_1").attr('disabled', false);
                  $("#time_management_E4_1").attr('disabled', false);
                  $("#time_management_E5_1").attr('disabled', false);
            }

      }); 


      $(".time_management_question_NA6").click(function() {
            if($('.time_management_question_NA6').is(":checked")) {
                  $(".time_managementQ6").attr('disabled', true);
            } else {
                  $(".time_managementQ6").attr('disabled', false);
            }
      });

      $("#refresh_time_management_question_NA6").click(function() {
            $(".time_managementQ6").attr('disabled', false);
            $(".time_management_question_NA6").prop('checked', false);

            if($('#time_management_A1_1').is(":checked")) {
                  $("#time_management_F1_1").attr('disabled', false);
            }

            if($('#time_management_A2_1').is(":checked")) {
                  $("#time_management_F1_1").attr('disabled', false);
                  $("#time_management_F2_1").attr('disabled', false);
            }

            if($('#time_management_A3_1').is(":checked")) {
                  $("#time_management_F1_1").attr('disabled', false);
                  $("#time_management_F2_1").attr('disabled', false);
                  $("#time_management_F3_1").attr('disabled', false);
            }

            if($('#time_management_A4_1').is(":checked")) {
                  $("#time_management_F1_1").attr('disabled', false);
                  $("#time_management_F2_1").attr('disabled', false);
                  $("#time_management_F3_1").attr('disabled', false);
                  $("#time_management_F4_1").attr('disabled', false);
            }

            if($('#time_management_A5_1').is(":checked")) {
                  $("#time_management_F1_1").attr('disabled', false);
                  $("#time_management_F2_1").attr('disabled', false);
                  $("#time_management_F3_1").attr('disabled', false);
                  $("#time_management_F4_1").attr('disabled', false);
                  $("#time_management_F5_1").attr('disabled', false);
            }

      }); 

    // time_management
    
    // team_management

      $(".team_management_question_NA1").click(function() {
        if($('.team_management_question_NA1').is(":checked")) {
              $(".team_managementQ1").attr('disabled', true);
              $(".team_managementQ2").attr('disabled', true);
              $(".team_managementQ3").attr('disabled', true);
              $(".team_managementQ4").attr('disabled', true);
              $(".team_managementQ5").attr('disabled', true);

              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".team_managementQ1").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
      });

      $("#refresh_team_management_question_NA1").click(function() {
            $(".team_managementQ1").attr('disabled', false);
            $(".team_management_question_NA1").prop('checked', false);
      });

      $(".team_management_question_NA2").click(function() {
        if($('.team_management_question_NA2').is(":checked")) {
              $(".team_managementQ2").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".team_managementQ2").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
      });

      $("#refresh_team_management_question_NA2").click(function() {
            // $(".quality_Q1").attr('disabled', false);
            $(".team_management_question_NA2").prop('checked', false);

            if($('#team_management_A1_1').is(":checked")) {
                  $("#team_management_B1_1").attr('disabled', false);
            }

            if($('#team_management_A2_1').is(":checked")) {
                  $("#team_management_B1_1").attr('disabled', false);
                  $("#team_management_B2_1").attr('disabled', false);
            }

            if($('#team_management_A3_1').is(":checked")) {
                  $("#team_management_B1_1").attr('disabled', false);
                  $("#team_management_B2_1").attr('disabled', false);
                  $("#team_management_B3_1").attr('disabled', false);
            }

            if($('#team_management_A4_1').is(":checked")) {
                  $("#team_management_B1_1").attr('disabled', false);
                  $("#team_management_B2_1").attr('disabled', false);
                  $("#team_management_B3_1").attr('disabled', false);
                  $("#team_management_B4_1").attr('disabled', false);
            }

            if($('#team_management_A5_1').is(":checked")) {
                  $("#team_management_B1_1").attr('disabled', false);
                  $("#team_management_B2_1").attr('disabled', false);
                  $("#team_management_B3_1").attr('disabled', false);
                  $("#team_management_B4_1").attr('disabled', false);
                  $("#team_management_B5_1").attr('disabled', false);
            }


      });

      $(".team_management_question_NA3").click(function() {
        if($('.team_management_question_NA3').is(":checked")) {
              $(".team_managementQ3").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".team_managementQ3").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
      });

      $("#refresh_team_management_question_NA3").click(function() {
            // $(".quality_Q1").attr('disabled', false);
            $(".team_management_question_NA3").prop('checked', false);

            if($('#team_management_A1_1').is(":checked")) {
                  $("#team_management_C1_1").attr('disabled', false);
            }

            if($('#team_management_A2_1').is(":checked")) {
                  $("#team_management_C1_1").attr('disabled', false);
                  $("#team_management_C2_1").attr('disabled', false);
            }

            if($('#team_management_A3_1').is(":checked")) {
                  $("#team_management_C1_1").attr('disabled', false);
                  $("#team_management_C2_1").attr('disabled', false);
                  $("#team_management_C3_1").attr('disabled', false);
            }

            if($('#team_management_A4_1').is(":checked")) {
                  $("#team_management_C1_1").attr('disabled', false);
                  $("#team_management_C2_1").attr('disabled', false);
                  $("#team_management_C3_1").attr('disabled', false);
                  $("#team_management_C4_1").attr('disabled', false);
            }

            if($('#team_management_A5_1').is(":checked")) {
                  $("#team_management_C1_1").attr('disabled', false);
                  $("#team_management_C2_1").attr('disabled', false);
                  $("#team_management_C3_1").attr('disabled', false);
                  $("#team_management_C4_1").attr('disabled', false);
                  $("#team_management_C5_1").attr('disabled', false);
            }

      });

      $(".team_management_question_NA4").click(function() {
            if($('.team_management_question_NA4').is(":checked")) {
                  $(".team_managementQ4").attr('disabled', true);
                  $("#communication_text_Q5").css("color", "#b7b7b6");
            } else {
                  $(".team_managementQ4").attr('disabled', false);
                  $("#communication_text_Q5").css("color", "#697a8d");
            }
      });

      $("#refresh_team_management_question_NA4").click(function() {
            // $(".quality_Q1").attr('disabled', false);
            $(".team_management_question_NA4").prop('checked', false);

            if($('#team_management_A1_1').is(":checked")) {
                  $("#team_management_D1_1").attr('disabled', false);
            }

            if($('#team_management_A2_1').is(":checked")) {
                  $("#team_management_D1_1").attr('disabled', false);
                  $("#team_management_D2_1").attr('disabled', false);
            }

            if($('#team_management_A3_1').is(":checked")) {
                  $("#team_management_D1_1").attr('disabled', false);
                  $("#team_management_D2_1").attr('disabled', false);
                  $("#team_management_D3_1").attr('disabled', false);
            }

            if($('#team_management_A4_1').is(":checked")) {
                  $("#team_management_D1_1").attr('disabled', false);
                  $("#team_management_D2_1").attr('disabled', false);
                  $("#team_management_D3_1").attr('disabled', false);
                  $("#team_management_D4_1").attr('disabled', false);
            }

            if($('#team_management_A5_1').is(":checked")) {
                  $("#team_management_D1_1").attr('disabled', false);
                  $("#team_management_D2_1").attr('disabled', false);
                  $("#team_management_D3_1").attr('disabled', false);
                  $("#team_management_D4_1").attr('disabled', false);
                  $("#team_management_D5_1").attr('disabled', false);
            }
      });

      $(".team_management_question_NA5").click(function() {
            if($('.team_management_question_NA5').is(":checked")) {
                  $(".team_managementQ5").attr('disabled', true);
                  $("#communication_text_Q5").css("color", "#b7b7b6");
            } else {
                  $(".team_managementQ5").attr('disabled', false);
                  $("#communication_text_Q5").css("color", "#697a8d");
            }
      });

      $("#refresh_team_management_question_NA5").click(function() {
            // $(".quality_Q1").attr('disabled', false);
            $(".team_management_question_NA5").prop('checked', false);

            if($('#team_management_A1_1').is(":checked")) {
                  $("#team_management_E1_1").attr('disabled', false);
            }

            if($('#team_management_A2_1').is(":checked")) {
                  $("#team_management_E1_1").attr('disabled', false);
                  $("#team_management_E2_1").attr('disabled', false);
            }

            if($('#team_management_A3_1').is(":checked")) {
                  $("#team_management_E1_1").attr('disabled', false);
                  $("#team_management_E2_1").attr('disabled', false);
                  $("#team_management_E3_1").attr('disabled', false);
            }

            if($('#team_management_A4_1').is(":checked")) {
                  $("#team_management_E1_1").attr('disabled', false);
                  $("#team_management_E2_1").attr('disabled', false);
                  $("#team_management_E3_1").attr('disabled', false);
                  $("#team_management_E4_1").attr('disabled', false);
            }

            if($('#team_management_A5_1').is(":checked")) {
                  $("#team_management_E1_1").attr('disabled', false);
                  $("#team_management_E2_1").attr('disabled', false);
                  $("#team_management_E3_1").attr('disabled', false);
                  $("#team_management_E4_1").attr('disabled', false);
                  $("#team_management_E5_1").attr('disabled', false);
            }

      });

    // team_management

    // reliability

    $(".reliability_question_NA1").click(function() {
        if($('.reliability_question_NA1').is(":checked")) {
              $(".reliability_questionQ1").attr('disabled', true);
              $(".reliability_questionQ2").attr('disabled', true);
              $(".reliability_questionQ3").attr('disabled', true);
              $(".reliability_questionQ4").attr('disabled', true);
              $(".reliability_questionQ5").attr('disabled', true);

              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".reliability_questionQ1").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_reliability_question_NA1").click(function() {
            $(".reliability_questionQ1").attr('disabled', false);
            $(".reliability_question_NA1").prop('checked', false);
      });

    $(".reliability_question_NA2").click(function() {
        if($('.reliability_question_NA2').is(":checked")) {
              $(".reliability_questionQ2").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".reliability_questionQ2").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_reliability_question_NA2").click(function() {
            // $(".reliability_questionQ2").attr('disabled', false);
            $(".reliability_question_NA2").prop('checked', false);

            if($('#reliability_A1_1').is(":checked")) {
                  $("#reliability_B1_1").attr('disabled', false);
            }

            if($('#reliability_A2_1').is(":checked")) {
                  $("#reliability_B1_1").attr('disabled', false);
                  $("#reliability_B2_1").attr('disabled', false);
            }

            if($('#reliability_A3_1').is(":checked")) {
                  $("#reliability_B1_1").attr('disabled', false);
                  $("#reliability_B2_1").attr('disabled', false);
                  $("#reliability_B3_1").attr('disabled', false);
            }

            if($('#reliability_A4_1').is(":checked")) {
                  $("#reliability_B1_1").attr('disabled', false);
                  $("#reliability_B2_1").attr('disabled', false);
                  $("#reliability_B3_1").attr('disabled', false);
                  $("#reliability_B4_1").attr('disabled', false);
            }

            if($('#reliability_A5_1').is(":checked")) {
                  $("#reliability_B1_1").attr('disabled', false);
                  $("#reliability_B2_1").attr('disabled', false);
                  $("#reliability_B3_1").attr('disabled', false);
                  $("#reliability_B4_1").attr('disabled', false);
                  $("#reliability_B5_1").attr('disabled', false);
            }

      });

    $(".reliability_question_NA3").click(function() {
        if($('.reliability_question_NA3').is(":checked")) {
              $(".reliability_questionQ3").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".reliability_questionQ3").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_reliability_question_NA3").click(function() {
            // $(".reliability_questionQ2").attr('disabled', false);
            $(".reliability_question_NA3").prop('checked', false);

            if($('#reliability_A1_1').is(":checked")) {
                  $("#reliability_C1_1").attr('disabled', false);
            }

            if($('#reliability_A2_1').is(":checked")) {
                  $("#reliability_C1_1").attr('disabled', false);
                  $("#reliability_C2_1").attr('disabled', false);
            }

            if($('#reliability_A3_1').is(":checked")) {
                  $("#reliability_C1_1").attr('disabled', false);
                  $("#reliability_C2_1").attr('disabled', false);
                  $("#reliability_C3_1").attr('disabled', false);
            }

            if($('#reliability_A4_1').is(":checked")) {
                  $("#reliability_C1_1").attr('disabled', false);
                  $("#reliability_C2_1").attr('disabled', false);
                  $("#reliability_C3_1").attr('disabled', false);
                  $("#reliability_C4_1").attr('disabled', false);
            }

            if($('#reliability_A5_1').is(":checked")) {
                  $("#reliability_C1_1").attr('disabled', false);
                  $("#reliability_C2_1").attr('disabled', false);
                  $("#reliability_C3_1").attr('disabled', false);
                  $("#reliability_C4_1").attr('disabled', false);
                  $("#reliability_C5_1").attr('disabled', false);
            }

      });

    $(".reliability_question_NA4").click(function() {
        if($('.reliability_question_NA4').is(":checked")) {
              $(".reliability_questionQ4").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".reliability_questionQ4").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_reliability_question_NA4").click(function() {
            $(".reliability_questionQ4").attr('disabled', false);
            $(".reliability_question_NA4").prop('checked', false);

            if($('#reliability_A1_1').is(":checked")) {
                  $("#reliability_D1_1").attr('disabled', false);
            }

            if($('#reliability_A2_1').is(":checked")) {
                  $("#reliability_D1_1").attr('disabled', false);
                  $("#reliability_D2_1").attr('disabled', false);
            }

            if($('#reliability_A3_1').is(":checked")) {
                  $("#reliability_D1_1").attr('disabled', false);
                  $("#reliability_D2_1").attr('disabled', false);
                  $("#reliability_D3_1").attr('disabled', false);
            }

            if($('#reliability_A4_1').is(":checked")) {
                  $("#reliability_D1_1").attr('disabled', false);
                  $("#reliability_D2_1").attr('disabled', false);
                  $("#reliability_D3_1").attr('disabled', false);
                  $("#reliability_D4_1").attr('disabled', false);
            }

            if($('#reliability_A5_1').is(":checked")) {
                  $("#reliability_D1_1").attr('disabled', false);
                  $("#reliability_D2_1").attr('disabled', false);
                  $("#reliability_D3_1").attr('disabled', false);
                  $("#reliability_D4_1").attr('disabled', false);
                  $("#reliability_D5_1").attr('disabled', false);
            }

      });

    $(".reliability_question_NA5").click(function() {
        if($('.reliability_question_NA5').is(":checked")) {
              $(".reliability_questionQ5").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".reliability_questionQ5").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_reliability_question_NA5").click(function() {
            $(".reliability_questionQ5").attr('disabled', false);
            $(".reliability_question_NA5").prop('checked', false);

            if($('#reliability_A1_1').is(":checked")) {
                  $("#reliability_E1_1").attr('disabled', false);
            }

            if($('#reliability_A2_1').is(":checked")) {
                  $("#reliability_E1_1").attr('disabled', false);
                  $("#reliability_E2_1").attr('disabled', false);
            }

            if($('#reliability_A3_1').is(":checked")) {
                  $("#reliability_E1_1").attr('disabled', false);
                  $("#reliability_E2_1").attr('disabled', false);
                  $("#reliability_E3_1").attr('disabled', false);
            }

            if($('#reliability_A4_1').is(":checked")) {
                  $("#reliability_E1_1").attr('disabled', false);
                  $("#reliability_E2_1").attr('disabled', false);
                  $("#reliability_E3_1").attr('disabled', false);
                  $("#reliability_E4_1").attr('disabled', false);
            }

            if($('#reliability_A5_1').is(":checked")) {
                  $("#reliability_E1_1").attr('disabled', false);
                  $("#reliability_E2_1").attr('disabled', false);
                  $("#reliability_E3_1").attr('disabled', false);
                  $("#reliability_E4_1").attr('disabled', false);
                  $("#reliability_E5_1").attr('disabled', false);
            }

      });


    $(".reliability_question_NA6").click(function() {
        if($('.reliability_question_NA6').is(":checked")) {
              $(".reliability_questionQ6").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".reliability_questionQ6").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_reliability_question_NA6").click(function() {
            $(".reliability_questionQ6").attr('disabled', false);
            $(".reliability_question_NA6").prop('checked', false);

            if($('#reliability_A1_1').is(":checked")) {
                  $("#reliability_F1_1").attr('disabled', false);
            }

            if($('#reliability_A2_1').is(":checked")) {
                  $("#reliability_F1_1").attr('disabled', false);
                  $("#reliability_F2_1").attr('disabled', false);
            }

            if($('#reliability_A3_1').is(":checked")) {
                  $("#reliability_F1_1").attr('disabled', false);
                  $("#reliability_F2_1").attr('disabled', false);
                  $("#reliability_F3_1").attr('disabled', false);
            }

            if($('#reliability_A4_1').is(":checked")) {
                  $("#reliability_F1_1").attr('disabled', false);
                  $("#reliability_F2_1").attr('disabled', false);
                  $("#reliability_F3_1").attr('disabled', false);
                  $("#reliability_F4_1").attr('disabled', false);
            }

            if($('#reliability_A5_1').is(":checked")) {
                  $("#reliability_F1_1").attr('disabled', false);
                  $("#reliability_F2_1").attr('disabled', false);
                  $("#reliability_F3_1").attr('disabled', false);
                  $("#reliability_F4_1").attr('disabled', false);
                  $("#reliability_F5_1").attr('disabled', false);
            }

      });

    // reliability
>>>>>>> 8ce454d (new update employee portal v1.1.0)

    // adaptability productivity

      $(".adaptability_productivity_question_NA1").click(function() {
            if($('.adaptability_productivity_question_NA1').is(":checked")) {
                  $(".adaptability_productivityQ1").attr('disabled', true);
<<<<<<< HEAD
=======
                  $(".adaptability_productivityQ2").attr('disabled', true);
                  $(".adaptability_productivityQ3").attr('disabled', true);
                  $(".adaptability_productivityQ4").attr('disabled', true);
                  $(".adaptability_productivityQ5").attr('disabled', true);

>>>>>>> 8ce454d (new update employee portal v1.1.0)
                  $("#communication_text_Q5").css("color", "#b7b7b6");
            } else {
                  $(".adaptability_productivityQ1").attr('disabled', false);
                  $("#communication_text_Q5").css("color", "#697a8d");
            }
      });

      $("#refresh_adaptability_productivity_question_NA1").click(function() {
            $(".adaptability_productivityQ1").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".adaptability_productivity_question_NA1").prop('checked', false);
      }); 

      $(".adaptability_productivity_question_NA2").click(function() {
            if($('.adaptability_productivity_question_NA2').is(":checked")) {
                  $(".adaptability_productivityQ2").attr('disabled', true);
                  $("#communication_text_Q5").css("color", "#b7b7b6");
            } else {
                  $(".adaptability_productivityQ2").attr('disabled', false);
                  $("#communication_text_Q5").css("color", "#697a8d");
            }
      });

      $("#refresh_adaptability_productivity_question_NA2").click(function() {
            // $(".adaptability_productivityQ2").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".adaptability_productivity_question_NA2").prop('checked', false);
<<<<<<< HEAD
=======

            if($('#adaptability_A1_1').is(":checked")) {
                  $("#adaptability_B1_1").attr('disabled', false);
            }

            if($('#adaptability_A2_1').is(":checked")) {
                  $("#adaptability_B1_1").attr('disabled', false);
                  $("#adaptability_B2_1").attr('disabled', false);
            }

            if($('#adaptability_A3_1').is(":checked")) {
                  $("#adaptability_B1_1").attr('disabled', false);
                  $("#adaptability_B2_1").attr('disabled', false);
                  $("#adaptability_B3_1").attr('disabled', false);
            }

            if($('#adaptability_A4_1').is(":checked")) {
                  $("#adaptability_B1_1").attr('disabled', false);
                  $("#adaptability_B2_1").attr('disabled', false);
                  $("#adaptability_B3_1").attr('disabled', false);
                  $("#adaptability_B4_1").attr('disabled', false);
            }

            if($('#adaptability_A5_1').is(":checked")) {
                  $("#adaptability_B1_1").attr('disabled', false);
                  $("#adaptability_B2_1").attr('disabled', false);
                  $("#adaptability_B3_1").attr('disabled', false);
                  $("#adaptability_B4_1").attr('disabled', false);
                  $("#adaptability_B5_1").attr('disabled', false);
            }


>>>>>>> 8ce454d (new update employee portal v1.1.0)
      }); 

      $(".adaptability_productivity_question_NA3").click(function() {
            if($('.adaptability_productivity_question_NA3').is(":checked")) {
                  $(".adaptability_productivityQ3").attr('disabled', true);
                  $("#communication_text_Q5").css("color", "#b7b7b6");
            } else {
                  $(".adaptability_productivityQ3").attr('disabled', false);
                  $("#communication_text_Q5").css("color", "#697a8d");
            }
      });

      $("#refresh_adaptability_productivity_question_NA3").click(function() {
            // $(".adaptability_productivityQ3").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".adaptability_productivity_question_NA3").prop('checked', false);
<<<<<<< HEAD
=======

            if($('#adaptability_A1_1').is(":checked")) {
                  $("#adaptability_C1_1").attr('disabled', false);
            }

            if($('#adaptability_A2_1').is(":checked")) {
                  $("#adaptability_C1_1").attr('disabled', false);
                  $("#adaptability_C2_1").attr('disabled', false);
            }

            if($('#adaptability_A3_1').is(":checked")) {
                  $("#adaptability_C1_1").attr('disabled', false);
                  $("#adaptability_C2_1").attr('disabled', false);
                  $("#adaptability_C3_1").attr('disabled', false);
            }

            if($('#adaptability_A4_1').is(":checked")) {
                  $("#adaptability_C1_1").attr('disabled', false);
                  $("#adaptability_C2_1").attr('disabled', false);
                  $("#adaptability_C3_1").attr('disabled', false);
                  $("#adaptability_C4_1").attr('disabled', false);
            }

            if($('#adaptability_A5_1').is(":checked")) {
                  $("#adaptability_C1_1").attr('disabled', false);
                  $("#adaptability_C2_1").attr('disabled', false);
                  $("#adaptability_C3_1").attr('disabled', false);
                  $("#adaptability_C4_1").attr('disabled', false);
                  $("#adaptability_C5_1").attr('disabled', false);
            }

>>>>>>> 8ce454d (new update employee portal v1.1.0)
      }); 

      $(".adaptability_productivity_question_NA4").click(function() {
            if($('.adaptability_productivity_question_NA4').is(":checked")) {
                  $(".adaptability_productivityQ4").attr('disabled', true);
                  $("#communication_text_Q5").css("color", "#b7b7b6");
            } else {
                  $(".adaptability_productivityQ4").attr('disabled', false);
                  $("#communication_text_Q5").css("color", "#697a8d");
            }
      });

      $("#refresh_adaptability_productivity_question_NA4").click(function() {
            // $(".adaptability_productivityQ4").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".adaptability_productivity_question_NA4").prop('checked', false);
<<<<<<< HEAD
=======

            if($('#adaptability_A1_1').is(":checked")) {
                  $("#adaptability_D1_1").attr('disabled', false);
            }

            if($('#adaptability_A2_1').is(":checked")) {
                  $("#adaptability_D1_1").attr('disabled', false);
                  $("#adaptability_D2_1").attr('disabled', false);
            }

            if($('#adaptability_A3_1').is(":checked")) {
                  $("#adaptability_D1_1").attr('disabled', false);
                  $("#adaptability_D2_1").attr('disabled', false);
                  $("#adaptability_D3_1").attr('disabled', false);
            }

            if($('#adaptability_A4_1').is(":checked")) {
                  $("#adaptability_D1_1").attr('disabled', false);
                  $("#adaptability_D2_1").attr('disabled', false);
                  $("#adaptability_D3_1").attr('disabled', false);
                  $("#adaptability_D4_1").attr('disabled', false);
            }

            if($('#adaptability_A5_1').is(":checked")) {
                  $("#adaptability_D1_1").attr('disabled', false);
                  $("#adaptability_D2_1").attr('disabled', false);
                  $("#adaptability_D3_1").attr('disabled', false);
                  $("#adaptability_D4_1").attr('disabled', false);
                  $("#adaptability_D5_1").attr('disabled', false);
            }

>>>>>>> 8ce454d (new update employee portal v1.1.0)
      }); 

      $(".adaptability_productivity_question_NA5").click(function() {
            if($('.adaptability_productivity_question_NA5').is(":checked")) {
                  $(".adaptability_productivityQ5").attr('disabled', true);
                  $("#communication_text_Q5").css("color", "#b7b7b6");
            } else {
                  $(".adaptability_productivityQ5").attr('disabled', false);
                  $("#communication_text_Q5").css("color", "#697a8d");
            }
      });

      $("#refresh_adaptability_productivity_question_NA5").click(function() {
            $(".adaptability_productivityQ5").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".adaptability_productivity_question_NA5").prop('checked', false);
<<<<<<< HEAD
=======

            if($('#adaptability_A1_1').is(":checked")) {
                  $("#adaptability_E1_1").attr('disabled', false);
            }

            if($('#adaptability_A2_1').is(":checked")) {
                  $("#adaptability_E1_1").attr('disabled', false);
                  $("#adaptability_E2_1").attr('disabled', false);
            }

            if($('#adaptability_A3_1').is(":checked")) {
                  $("#adaptability_E1_1").attr('disabled', false);
                  $("#adaptability_E2_1").attr('disabled', false);
                  $("#adaptability_E3_1").attr('disabled', false);
            }

            if($('#adaptability_A4_1').is(":checked")) {
                  $("#adaptability_E1_1").attr('disabled', false);
                  $("#adaptability_E2_1").attr('disabled', false);
                  $("#adaptability_E3_1").attr('disabled', false);
                  $("#adaptability_E4_1").attr('disabled', false);
            }

            if($('#adaptability_A5_1').is(":checked")) {
                  $("#adaptability_E1_1").attr('disabled', false);
                  $("#adaptability_E2_1").attr('disabled', false);
                  $("#adaptability_E3_1").attr('disabled', false);
                  $("#adaptability_E4_1").attr('disabled', false);
                  $("#adaptability_E5_1").attr('disabled', false);
            }

>>>>>>> 8ce454d (new update employee portal v1.1.0)
      }); 

    // adaptability productivity

<<<<<<< HEAD

    // initiative proactive

    $(".initiative_proactive_question_NA1").click(function() {
        if($('.initiative_proactive_question_NA1').is(":checked")) {
              $(".initiative_proactiveQ1").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".initiative_proactiveQ1").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_initiative_proactive_question_NA1").click(function() {
            $(".initiative_proactiveQ1").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".initiative_proactive_question_NA1").prop('checked', false);
      });

    $(".initiative_proactive_question_NA2").click(function() {
        if($('.initiative_proactive_question_NA2').is(":checked")) {
              $(".initiative_proactiveQ2").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".initiative_proactiveQ2").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_initiative_proactive_question_NA2").click(function() {
            // $(".initiative_proactiveQ2").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".initiative_proactive_question_NA2").prop('checked', false);
      });

    $(".initiative_proactive_question_NA3").click(function() {
        if($('.initiative_proactive_question_NA3').is(":checked")) {
              $(".initiative_proactiveQ3").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".initiative_proactiveQ3").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_initiative_proactive_question_NA3").click(function() {
            // $(".initiative_proactiveQ3").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".initiative_proactive_question_NA3").prop('checked', false);
      });

    $(".initiative_proactive_question_NA4").click(function() {
        if($('.initiative_proactive_question_NA4').is(":checked")) {
              $(".initiative_proactiveQ4").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".initiative_proactiveQ4").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_initiative_proactive_question_NA4").click(function() {
            // $(".initiative_proactiveQ4").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".initiative_proactive_question_NA4").prop('checked', false);
      });


    // initiative proactive

    // creativity_problem

      $(".creativity_problem_question_NA1").click(function() {
        if($('.creativity_problem_question_NA1').is(":checked")) {
              $(".creativity_problemQ1").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".creativity_problemQ1").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
      });

      $("#refresh_creativity_problem_question_NA1").click(function() {
            $(".creativity_problemQ1").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".creativity_problem_question_NA1").prop('checked', false);
      });

    $(".creativity_problem_question_NA2").click(function() {
        if($('.creativity_problem_question_NA2').is(":checked")) {
              $(".creativity_problemQ2").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".creativity_problemQ2").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_creativity_problem_question_NA2").click(function() {
            // $(".creativity_problemQ2").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".creativity_problem_question_NA2").prop('checked', false);
      });

    $(".creativity_problem_question_NA3").click(function() {
        if($('.creativity_problem_question_NA3').is(":checked")) {
              $(".creativity_problemQ3").attr('disabled', true);
              $("#communication_text_Q5").css("color", "#b7b7b6");
        } else {
              $(".creativity_problemQ3").attr('disabled', false);
              $("#communication_text_Q5").css("color", "#697a8d");
        }
    });

      $("#refresh_creativity_problem_question_NA3").click(function() {
                  // $(".creativity_problemQ3").attr('disabled', false);
                  $("#communication_text_Q5").css("color", "#697a8d");
                  $(".creativity_problem_question_NA3").prop('checked', false);
      });

      $(".creativity_problem_question_NA4").click(function() {
            if($('.creativity_problem_question_NA4').is(":checked")) {
                  $(".creativity_problemQ4").attr('disabled', true);
                  $("#communication_text_Q5").css("color", "#b7b7b6");
            } else {
                  $(".creativity_problemQ4").attr('disabled', false);
                  $("#communication_text_Q5").css("color", "#697a8d");
            }
      });

      $("#refresh_creativity_problem_question_NA4").click(function() {
            // $(".creativity_problemQ4").attr('disabled', false);
            $("#communication_text_Q5").css("color", "#697a8d");
            $(".creativity_problem_question_NA4").prop('checked', false);
      });

    // creativity_problem

   });
   
=======
   });
   
</script>

<script>
   $(document).ready(function () {

      $("#refersh_team_management_1").click(function() {
            $(".radio_team_management_1").prop('checked', false);
            $(".NA__team_management_1").attr('disabled', false);
            $("#NA_refresh_team_management_1").prop('checked', false);
      });

      $("#NA_refresh_team_management_1").click(function() {
            if($('#NA_refresh_team_management_1').is(":checked")) {
                  $(".NA__team_management_1").attr('disabled', true);
            } else {
                  $(".NA__team_management_1").attr('disabled', false);
            }
      });

      // ---------------------------------------------------------------

      
      $("#refersh_team_management_2").click(function() {
            $(".radio_team_management_2").prop('checked', false);
            $(".NA__team_management_2").attr('disabled', false);
            $("#NA_refresh_team_management_2").prop('checked', false);
      });

      $("#NA_refresh_team_management_2").click(function() {
            if($('#NA_refresh_team_management_2').is(":checked")) {
                  $(".NA__team_management_2").attr('disabled', true);
            } else {
                  $(".NA__team_management_2").attr('disabled', false);
            }
      });

      // -------------------------------------------------------------
      
      $("#refersh_team_management_3").click(function() {
            $(".radio_team_management_3").prop('checked', false);
            $(".NA__team_management_3").attr('disabled', false);
            $("#NA_refresh_team_management_3").prop('checked', false);
      });

      $("#NA_refresh_team_management_3").click(function() {
            if($('#NA_refresh_team_management_3').is(":checked")) {
                  $(".NA__team_management_3").attr('disabled', true);
            } else {
                  $(".NA__team_management_3").attr('disabled', false);
            }
      });

      // -------------------------------------------------------------

      $("#refersh_team_management_4").click(function() {
            $(".radio_team_management_4").prop('checked', false);
            $(".NA__team_management_4").attr('disabled', false);
            $("#NA_refresh_team_management_4").prop('checked', false);
      });

      $("#NA_refresh_team_management_4").click(function() {
            if($('#NA_refresh_team_management_4').is(":checked")) {
                  $(".NA__team_management_4").attr('disabled', true);
            } else {
                  $(".NA__team_management_4").attr('disabled', false);
            }
      });

      // -------------------------------------------------------------

      $("#refersh_team_management_5").click(function() {
            $(".radio_team_management_5").prop('checked', false);
            $(".NA__team_management_5").attr('disabled', false);
            $("#NA_refresh_team_management_5").prop('checked', false);
      });

      $("#NA_refresh_team_management_5").click(function() {
            if($('#NA_refresh_team_management_5').is(":checked")) {
                  $(".NA__team_management_5").attr('disabled', true);
            } else {
                  $(".NA__team_management_5").attr('disabled', false);
            }
      });

      // -------------------------------------------------------------

      $("#refersh_team_management_6").click(function() {
            $(".radio_team_management_6").prop('checked', false);
            $(".NA__team_management_6").attr('disabled', false);
            $("#NA_refresh_team_management_6").prop('checked', false);
      });

      $("#NA_refresh_team_management_6").click(function() {
            if($('#NA_refresh_team_management_6').is(":checked")) {
                  $(".NA__team_management_6").attr('disabled', true);
            } else {
                  $(".NA__team_management_6").attr('disabled', false);
            }
      });

      // -------------------------------------------------------------

      $("#refersh_team_management_7").click(function() {
            $(".radio_team_management_7").prop('checked', false);
            $(".NA__team_management_7").attr('disabled', false);
            $("#NA_refresh_team_management_7").prop('checked', false);
      });

      $("#NA_refresh_team_management_7").click(function() {
            if($('#NA_refresh_team_management_7').is(":checked")) {
                  $(".NA__team_management_7").attr('disabled', true);
            } else {
                  $(".NA__team_management_7").attr('disabled', false);
            }
      });

      // -------------------------------------------------------------\

      $("#refersh_team_management_8").click(function() {
            $(".radio_team_management_8").prop('checked', false);
            $(".NA__team_management_8").attr('disabled', false);
            $("#NA_refresh_team_management_8").prop('checked', false);
      });

      $("#NA_refresh_team_management_8").click(function() {
            if($('#NA_refresh_team_management_8').is(":checked")) {
                  $(".NA__team_management_8").attr('disabled', true);
            } else {
                  $(".NA__team_management_8").attr('disabled', false);
            }
      });

      // -------------------------------------------------------------

      $("#refersh_team_management_9").click(function() {
            $(".radio_team_management_9").prop('checked', false);
            $(".NA__team_management_9").attr('disabled', false);
            $("#NA_refresh_team_management_9").prop('checked', false);
      });

      $("#NA_refresh_team_management_9").click(function() {
            if($('#NA_refresh_team_management_9').is(":checked")) {
                  $(".NA__team_management_9").attr('disabled', true);
            } else {
                  $(".NA__team_management_9").attr('disabled', false);
            }
      });

      // -------------------------------------------------------------

      $("#refersh_team_management_10").click(function() {
            $(".radio_team_management_10").prop('checked', false);
            $(".NA__team_management_10").attr('disabled', false);
            $("#NA_refresh_team_management_10").prop('checked', false);
      });

      $("#NA_refresh_team_management_10").click(function() {
            if($('#NA_refresh_team_management_10').is(":checked")) {
                  $(".NA__team_management_10").attr('disabled', true);
            } else {
                  $(".NA__team_management_10").attr('disabled', false);
            }
      });

      // -------------------------------------------------------------

      $("#refersh_team_management_11").click(function() {
            $(".radio_team_management_11").prop('checked', false);
            $(".NA__team_management_11").attr('disabled', false);
            $("#NA_refresh_team_management_11").prop('checked', false);
      });

      $("#NA_refresh_team_management_11").click(function() {
            if($('#NA_refresh_team_management_11').is(":checked")) {
                  $(".NA__team_management_11").attr('disabled', true);
            } else {
                  $(".NA__team_management_11").attr('disabled', false);
            }
      });

      // -------------------------------------------------------------

      $("#refersh_team_management_12").click(function() {
            $(".radio_team_management_12").prop('checked', false);
            $(".NA__team_management_12").attr('disabled', false);
            $("#NA_refresh_team_management_12").prop('checked', false);
      });

      $("#NA_refresh_team_management_12").click(function() {
            if($('#NA_refresh_team_management_12').is(":checked")) {
                  $(".NA__team_management_12").attr('disabled', true);
            } else {
                  $(".NA__team_management_12").attr('disabled', false);
            }
      });

      // -------------------------------------------------------------

      $("#refersh_team_management_13").click(function() {
            $(".radio_team_management_13").prop('checked', false);
            $(".NA__team_management_13").attr('disabled', false);
            $("#NA_refresh_team_management_13").prop('checked', false);
      });

      $("#NA_refresh_team_management_13").click(function() {
            if($('#NA_refresh_team_management_13').is(":checked")) {
                  $(".NA__team_management_13").attr('disabled', true);
            } else {
                  $(".NA__team_management_13").attr('disabled', false);
            }
      });

      // -------------------------------------------------------------

      $("#refersh_team_management_14").click(function() {
            $(".radio_team_management_14").prop('checked', false);
            $(".NA__team_management_14").attr('disabled', false);
            $("#NA_refresh_team_management_14").prop('checked', false);
      });

      $("#NA_refresh_team_management_14").click(function() {
            if($('#NA_refresh_team_management_14').is(":checked")) {
                  $(".NA__team_management_14").attr('disabled', true);
            } else {
                  $(".NA__team_management_14").attr('disabled', false);
            }
      });

      // --------------------------------------------------------------

      $("#refersh_team_management_15").click(function() {
            $(".radio_team_management_15").prop('checked', false);
            $(".NA__team_management_15").attr('disabled', false);
            $("#NA_refresh_team_management_15").prop('checked', false);
      });

      $("#NA_refresh_team_management_15").click(function() {
            if($('#NA_refresh_team_management_15').is(":checked")) {
                  $(".NA__team_management_15").attr('disabled', true);
            } else {
                  $(".NA__team_management_15").attr('disabled', false);
            }
      });

      // -------------------------------------------------------------

      
   });
</script>

<!-- software -->

<script>

      $("#refersh_software_1").click(function() {
            $(".radio_software_1").attr('disabled', false);
            $(".radio_software_1").prop('checked', false);
      });

      $("#refersh_software_2").click(function() {
            $(".radio_software_2").attr('disabled', false);
            $(".radio_software_2").prop('checked', false);
      });

      $("#refersh_software_3").click(function() {
            $(".radio_software_3").attr('disabled', false);
            $(".radio_software_3").prop('checked', false);
      });

      $("#refersh_software_4").click(function() {
            $(".radio_software_4").attr('disabled', false);
            $(".radio_software_4").prop('checked', false);
      });

      $("#refersh_software_5").click(function() {
            $(".radio_software_5").attr('disabled', false);
            $(".radio_software_5").prop('checked', false);
      });

      $("#refersh_software_6").click(function() {
            $(".radio_software_6").attr('disabled', false);
            $(".radio_software_6").prop('checked', false);
      });

      $("#refersh_software_7").click(function() {
            $(".radio_software_7").attr('disabled', false);
            $(".radio_software_7").prop('checked', false);
      });

      $("#refersh_software_8").click(function() {
            $(".radio_software_8").attr('disabled', false);
            $(".radio_software_8").prop('checked', false);
      });

      $("#refersh_software_9").click(function() {
            $(".radio_software_9").attr('disabled', false);
            $(".radio_software_9").prop('checked', false);
      });

      $("#refersh_software_10").click(function() {
            $(".radio_software_10").attr('disabled', false);
            $(".radio_software_10").prop('checked', false);
      });

      $("#refersh_software_11").click(function() {
            $(".radio_software_11").attr('disabled', false);
            $(".radio_software_11").prop('checked', false);
      });

      $("#refersh_software_12").click(function() {
            $(".radio_software_12").attr('disabled', false);
            $(".radio_software_12").prop('checked', false);
      });

      $("#refersh_software_13").click(function() {
            $(".radio_software_13").attr('disabled', false);
            $(".radio_software_13").prop('checked', false);
      });

      $("#refersh_software_14").click(function() {
            $(".radio_software_14").attr('disabled', false);
            $(".radio_software_14").prop('checked', false);
      });

      $("#refersh_software_15").click(function() {
            $(".radio_software_15").attr('disabled', false);
            $(".radio_software_15").prop('checked', false);
      });

>>>>>>> 8ce454d (new update employee portal v1.1.0)
</script>

<div class="bs-toast toast toast-placement-ex m-2 fade bg-danger top-0 end-0 edit-emp-range" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
  <div class="toast-header">
    <i class="bx bx-bell me-2"></i>
    <div class="me-auto fw-semibold">Validation error</div>
    <small>1 sec ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">Please enter valid number!!</div>
</div>

</body>
</html>