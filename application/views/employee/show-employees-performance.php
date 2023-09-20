
<div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12">
                    <h4 class="fw-bold "><a href="<?php echo base_url('employee/employee-performance-list'); ?>"><i class='bx bx-left-arrow-alt'></i> BACK</a></h4>
                    <h4 class="fw-bold py-1 mb-2"><span class="text-muted fw-light">Dashboard / Performance List /</span> Performance Details</h4>
                </div>
                <div class="col-md-12">
                <?php if($uploaded = $this->session->flashdata('performance_upload_success')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <strong><?php echo $uploaded; ?></strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <?php elseif($tryAgain = $this->session->flashdata('performance_not_uploaded')): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <strong><?php echo $tryAgain; ?></strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>

                      <?php if($uploaded = $this->session->flashdata('emp_submit_score_success')): ?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <strong><?php echo $uploaded; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <?php elseif($tryAgain = $this->session->flashdata('emp_submit_score_not')): ?>
                          <div class="alert alert-danger alert-dismissible" role="alert">
                          <strong><?php echo $tryAgain; ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        <?php endif; ?>

                <?php if($uploaded = $this->session->flashdata('emp_update_success')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <strong><?php echo $uploaded; ?></strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <?php elseif($tryAgain = $this->session->flashdata('emp_not_updated')): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <strong><?php echo $tryAgain; ?></strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>
                  
                    <?php if($uploaded = $this->session->flashdata('emp_update_score_success')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <strong><?php echo $uploaded; ?></strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <?php elseif($tryAgain = $this->session->flashdata('emp_update_score_not')): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <strong><?php echo $tryAgain; ?></strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>
                   
                      <?php if($uploaded = $this->session->flashdata('signature_delete_success')): ?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <strong><?php echo $uploaded; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <?php elseif($tryAgain = $this->session->flashdata('signature_not_uploaded')): ?>
                          <div class="alert alert-danger alert-dismissible" role="alert">
                          <strong><?php echo $tryAgain; ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        <?php endif; ?>
                </div>
              </div>
          </div>

          <?php if($empinfo): ?>
                <div class="container-xxl flex-grow-1">
                    <div class="row">
                        <div class="col-xl-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2 col-md-3">
                                <section class="ui-card-info-sec">
                                    <span class="fw-semibold d-block mb-2">EMPLOYEE AVERAGE</span>
                                    <div>
                                        <?php if($emp_avg): ?>
                                          <?php if($emp_avg !== 0): ?>
                                                <?php 
<<<<<<< HEAD
                                                  $sumTotal = $empinfo->communication_emp_avg + $empinfo->knowledge_performance_emp_avg + $empinfo->quality_emp_avg + $empinfo->knowledge_emp_avg + $empinfo->software_emp_avg + $empinfo->reliability_emp_avg + $empinfo->time_management_emp_avg + $empinfo->productivity_emp_avg + $empinfo->p_initiative_proactive_emp_avg + $empinfo->p_creativity_problem_solving_emp_avg; 
                                                  $avgTotal = $sumTotal / 10;
                                                  $emp_avg_report = number_format((float)$avgTotal, 2, '.', '');
=======

                                                    $countloop = array(
                                                        "quality_emp_avg" => $empinfo->quality_emp_avg,
                                                        "knowledge_performance_emp_avg" => $empinfo->knowledge_performance_emp_avg,
                                                        "communication_emp_avg" => $empinfo->communication_emp_avg,
                                                        "time_management_emp_avg" => $empinfo->time_management_emp_avg,
                                                        "team_management_emp_avg" => $empinfo->team_management_emp_avg,
                                                        "reliability_emp_avg" => $empinfo->reliability_emp_avg,
                                                        "productivity_emp_avg" => $empinfo->productivity_emp_avg
                                                    );

                                                    $allcounter = 1;
                                                    $store_AVG = null;
                                                    foreach($countloop as $run){
                                                    
                                                        if($run == 0){
                                                            
                                                        }else{
                                                            $store_AVG = $allcounter++;
                                                        }
                                                    }

                                                    if($store_AVG){
                                                        $sumTotal = $empinfo->communication_emp_avg + $empinfo->knowledge_performance_emp_avg + $empinfo->quality_emp_avg + $empinfo->team_management_emp_avg + $empinfo->reliability_emp_avg + $empinfo->time_management_emp_avg + $empinfo->productivity_emp_avg; 
                                                        $avgTotal = $sumTotal / $store_AVG;
                                                        $emp_avg_report = number_format((float)$avgTotal, 2, '.', '');
                                                    }else{
                                                        $emp_avg_report = null;
                                                    }
                                                
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                ?>
                                                <div class="emp-d-avg-btn">
                                                  <?php $main_avg = $emp_avg_report; ?>
                                                  <?php if($main_avg <= 1): ?>
                                                    <h6 class="card-title mb-2">Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                  <?php elseif($main_avg > 1 && $main_avg <= 2): ?>
                                                    <h6 class="card-title mb-2">Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                  <?php elseif($main_avg > 2 && $main_avg < 3): ?>
                                                    <h6 class="card-title mb-2">Sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                  <?php elseif($main_avg >=3 && $main_avg <=4): ?>
                                                    <h6 class="card-title mb-2">Good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                  <?php elseif($main_avg <= 5): ?>
                                                    <h6 class="card-title mb-2">Very good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                  <?php else: ?>
                                                    <h6 class="card-title mb-2">Excellent <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                  <?php endif; ?>
                                                </div>
                                        <?php else: ?>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </section>
                            </div>

                            <div class="col-lg-2 col-md-3">
                                <section class="ui-card-info-sec">
                                    <span class="fw-semibold d-block mb-2">MANAGER AVERAGE</span>
                                    <div>
                                        <?php if(($empinfo->submit_manager_status)==2): ?>
                                            <?php if($emp_avg !== 0): ?>
                                                <div class="emp-d-avg-btn">
                                                    <?php $main_avg = $emp_avg->total_emp_avg; ?>
                                                    <?php if($main_avg <= 1): ?>
                                                    <h6 class="card-title mb-2">Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php elseif($main_avg > 1 && $main_avg <= 2): ?>
                                                    <h6 class="card-title mb-2">Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php elseif($main_avg > 2 && $main_avg < 3): ?>
                                                    <h6 class="card-title mb-2">Sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php elseif($main_avg >=3 && $main_avg <=4): ?>
                                                    <h6 class="card-title mb-2">Good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php elseif($main_avg <= 5): ?>
                                                    <h6 class="card-title mb-2">Very good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php else: ?>
                                                    <h6 class="card-title mb-2">Excellent <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php endif; ?>
                                                </div>
                                            <?php else: ?>
                                            <?php endif; ?>
                                        <?php else: ?>
                                        <h6 class="card-title mb-2">Review Pending</h6>
                                        <?php endif; ?>
                                    </div>
                                </section>
                            </div>

                            <div class="col-lg-2 col-md-3">
                                <section class="ui-card-info-sec">
                                    <span class="fw-semibold d-block mb-2">EVALUATION PERIOD</span>
                                    <div>
                                         <?php 
<<<<<<< HEAD
                                          if(($empinfo->evaluate_date_category)==30){
                                            $period  = 'Monthly';
                                          }elseif(($empinfo->evaluate_date_category)==90){
                                            $period  = 'Quarterly';
                                          }elseif(($empinfo->evaluate_date_category)==182){
                                            $period  = 'Half Yearly';
                                          }
                                          elseif(($empinfo->evaluate_date_category)==365){
                                            $period  = 'Yearly';
=======
                                          if(($empinfo->evaluate_date_category)==90){
                                            $period  = 'Mid-Probation';
                                          }elseif(($empinfo->evaluate_date_category)==182){
                                            $period  = 'Regularization';
                                          }elseif(($empinfo->evaluate_date_category)==182){
                                            $period  = 'Bi-Annual';
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                          }else{
                                            $period = '';
                                          }
                                        ?>
                                        <h6 class="card-title mb-2"><?php echo $period; ?></h6>
                                        </h6>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <section class="ui-card-info-sec">
                                    <span class="fw-semibold d-block mb-2">EVALUATION START DATE</span>
                                    <div>
                                        <h6 class="card-title mb-2">
                                            <?php 
                                                echo $start_date = date("d-M-Y", strtotime($empinfo->emp_performance_start_date));
                                            ?>
                                        </h6>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <section class="ui-card-info-sec">
                                    <span class="fw-semibold d-block mb-2">EVALUATION END DATE</span>
                                    <div>
                                        <h6 class="card-title mb-2">
                                            <?php 
                                                echo $start_date = date("d-M-Y", strtotime($empinfo->emp_performance_end_date));
                                            ?>
                                        </h6>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-body bg-primary-b btn-justi-ed">
<<<<<<< HEAD
                        <div class="row">
                            <div class="col-lg-12">
                                <?php if(($empinfo->submit_employee_status)==0): ?>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#empScoreSubmit" class="btn btn-primary">
                                    Lock Evaluation/Submit
                                    </a>
                                <?php else: ?>
                                    <a href="javascript:void(0)" class="btn btn-disabled" style="color: #fff;">
                                    Lock Evaluation/Submit 
                                    </a>
                                <?php endif; ?>
                                <a href="<?php echo base_url('Employee/printEmpDetails/'.$empinfo->emp_performance_id); ?>"class="btn btn-primary">
                                    Print
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                            
=======
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php if(($empinfo->submit_employee_status)==0): ?>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#empScoreSubmit" class="btn btn-primary">
                                            Lock Evaluation/Submit
                                            </a>
                                        <?php else: ?>
                                            <a href="javascript:void(0)" class="btn btn-disabled" style="color: #fff;">
                                            Lock Evaluation/Submit 
                                            </a>
                                        <?php endif; ?>
                                        <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#empPrintOP">
                                            Print
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

>>>>>>> 8ce454d (new update employee portal v1.1.0)
                        <div class="row">

                            <h6 class="text-muted">
                              Update Performance
                              <?php if(($empinfo->submit_employee_status)==0): ?>
                                  <a class="" data-bs-toggle="modal" data-bs-target="#editScoreEmp" href="javascript:void(0);">
                                      <i class='bx bx-edit me-1' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span>Click and edit</span>"></i>
                                  </a>
                              <?php else: ?>
                                  <a class="btn-disabled-color" href="javascript:void(0);">
                                      <i class='bx bx-edit me-1' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span>disabled</span>"></i>
                                  </a>
                              <?php endif; ?>
                            </h6>
                          

                            <div class="nav-align-top mb-2">
<<<<<<< HEAD
                                    <ul class="nav nav-tabs nav-fill" role="tablist">
                                        <li class="nav-item">
                                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-communication" aria-controls="navs-justified-communication" aria-selected="true">
=======
                                <ul class="nav nav-tabs nav-fill" role="tablist">

                                        
                                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Goals</span>">
                                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-goals" aria-controls="navs-justified-goals" aria-selected="true">
                                                    Goals
                                                </button>
                                        </li>
                    
                                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Quality & Organization</span>">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-quality-organization" aria-controls="navs-justified-quality-organization" aria-selected="true">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        Section 1
                                        </button>
                                        </li>

<<<<<<< HEAD
                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-knowledge-performance" aria-controls="navs-justified-knowledge-performance" aria-selected="false">
                                        Section 2
                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-quality" aria-controls="navs-justified-quality" aria-selected="false">
                                        Section 3
                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-knowledge" aria-controls="navs-justified-knowledge" aria-selected="false">
                                        Section 4
                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-software" aria-controls="navs-justified-software" aria-selected="false">
                                        Section 5

                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-reliability-professionalism" aria-controls="navs-justified-reliability-dependability" aria-selected="false">
                                        Section 6

                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-time-management" aria-controls="navs-justified-time-management" aria-selected="false">
                                        Section 7

                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-adaptability" aria-controls="navs-justified-adaptability" aria-selected="false">
                                        Section 8

                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-initiative-proactive" aria-controls="navs-justified-initiative-proactive" aria-selected="false">

                                        Section 9

                                        </button>
                                        </li>


                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-creativity-problem-solving" aria-controls="navs-justified-creativity-problem-solving" aria-selected="false">

                                        Section 10

                                        </button>
                                        </li>

                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="navs-justified-communication" role="tabpanel">
                                            <div class="re-evaluate-head-top">
                                                <h4>Communication</h4>
                                            </div>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Not Applicable</span>">N/A</span>

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                1. Swiftly answers to messages/calls to coordinate with colleagues 
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Messages are answered immediately as if you were working in the office. Productivity cannot be affected by a WFH setup </span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php

                                                                if($empinfo->m_communication_question_1 === $empinfo->communication_question_1){
                                                                    $same_communication_question_1 = $empinfo->m_communication_question_1;
                                                                }else{
                                                                    $same_communication_question_1 = false;
                                                                }

                                                                if($empinfo->communication_question_1==0){
                                                                    $NA_communication_question_1 = 6;
                                                                }else{
                                                                    $NA_communication_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {                                                                    
                                                                if(($same_communication_question_1)==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_communication_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->communication_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_communication_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_1" value="<?php echo $empinfo->m_communication_question_1; ?>">
                                                        <input type="hidden" name="e_communication_question_1" value="<?php echo $empinfo->communication_question_1; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                2. Proactively communicates with supervisors for questions, feedback, job challenges
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Keeps an open channel of communication with their supervisor to ensure all tasks are clear, deadlines are on track, and asks for feedback on their performance</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                        <?php
                                                            if($empinfo->m_communication_question_2 === $empinfo->communication_question_2){
                                                                $same_communication_question_2 = $empinfo->m_communication_question_2;
                                                            }else{
                                                                $same_communication_question_2 = false;
                                                            }

                                                            if($empinfo->communication_question_2==0){
                                                                $NA_communication_question_2 = 6;
                                                            }else{
                                                                $NA_communication_question_2 = false;
                                                            }

                                                            $x = 1;
                                                            while($x <= 6) {

                                                            if($same_communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->m_communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_2" value="<?php echo $empinfo->m_communication_question_2; ?>">
                                                        <input type="hidden" name="e_communication_question_2" value="<?php echo $empinfo->communication_question_2; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                3. Communicates effectively with teammates to accomplish common goals and objectives
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Communicates clearly and effectively with teammates to help each other with your tasks to be more efficient together, avoid mistakes, and provide technical support for the team</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($empinfo->m_communication_question_3 === $empinfo->communication_question_3){
                                                                $same_communication_question_3 = $empinfo->m_communication_question_3;
                                                            }else{
                                                                $same_communication_question_3 = false;
                                                            }

                                                            if($empinfo->communication_question_3==0){
                                                                $NA_communication_question_3 = 6;
                                                            }else{
                                                                $NA_communication_question_3 = false;
                                                            }

                                                            $x = 1;
                                                            while($x <= 6) {
                                                            if($same_communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->m_communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_3" value="<?php echo $empinfo->m_communication_question_3; ?>">
                                                        <input type="hidden" name="e_communication_question_3" value="<?php echo $empinfo->communication_question_3; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                4. Clear with time schedules for leave requests, sick leaves, offset hours <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Organizes their time clearly with the company’s calendar so that everybody is aware of their schedule, working conditions, and holiday plans</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($empinfo->m_communication_question_4 === $empinfo->communication_question_4){
                                                                $same_communication_question_4 = $empinfo->m_communication_question_4;
                                                            }else{
                                                                $same_communication_question_4 = false;
                                                            }

                                                            if($empinfo->communication_question_4==0){
                                                                $NA_communication_question_4 = 6;
                                                            }else{
                                                                $NA_communication_question_4 = false;
                                                            }


                                                            $x = 1;
                                                            while($x <= 6) {
                                                            if($same_communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->m_communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_4" value="<?php echo $empinfo->m_communication_question_4; ?>">
                                                        <input type="hidden" name="e_communication_question_4" value="<?php echo $empinfo->communication_question_4; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                5. Communicates well with their client <span class="gray-font-scoring">(for Supervisors only, independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Understands properly the requests of the client, set expectations correctly, and asks the necessary questions to execute the project without problems and delays</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($empinfo->m_communication_question_5 === $empinfo->communication_question_5){
                                                                $same_communication_question_5 = $empinfo->m_communication_question_5;
                                                            }else{
                                                                $same_communication_question_5 = false;
                                                            }

                                                            if($empinfo->communication_question_5==0){
                                                                $NA_communication_question_5 = 6;
                                                            }else{
                                                                $NA_communication_question_5 = false;
                                                            }

                                                            $x = 1;
                                                            while($x <= 6) {
                                                            if($same_communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->m_communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_5" value="<?php echo $empinfo->m_communication_question_5; ?>">
                                                        <input type="hidden" name="e_communication_question_5" value="<?php echo $empinfo->communication_question_5; ?>">
                                                    </tr>
                                                  
                                                    <tr class="remove_bb">
                                                        <td></td>
                                                        <td>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-emp">
                                                                    Employee <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <span>
                                                                    <?php  $comm_avg= $empinfo->communication_emp_avg; ?>
                                                                        <?php if($comm_avg <= 1): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg <= 5): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php else: ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                    <?php endif; ?>
                                                                </span>
                                                                &nbsp;
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <span>
                                                                    <?php  $comm_avg= $empinfo->m_communication_emp_avg; ?>
                                                                        <?php if($comm_avg <= 1): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg <= 5): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php else: ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                    <?php endif; ?>
                                                                </span>
                                                                &nbsp;
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class='radio-inline'> <input type='radio' class='form-check-input both-checked' /></label>
                                                                </span>
                                                            </div>
                                                            <input type="hidden" name="m_communication_emp_avg_old" value="<?php echo $empinfo->m_communication_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="communication_comments" cols="3" rows="3" disabled><?php echo $empinfo->communication_comments; ?></textarea>
                                                            <input type="hidden" name="communication_comments_old" value="<?php echo $empinfo->communication_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_communication_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_communication_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="navs-justified-knowledge-performance" role="tabpanel">
                                            <h4>Knowledge & Performance</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                1. Successfully executes the duties and responsibilities of their role as stated in their job descriptions
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>
                                                                        <ul>
                                                                        <li>BIM Consultants: Ability to model correctly until LOD300, produce schedules, input metadata in families</li>
                                                                        <li>BIM Coordinators: Quality check of BIM models and sheets, work in CDEs, ability to follow a BEP</li>
                                                                        <li>BIM Managers: Ability to manage a team, follow ISO19650, write and follow BEP, give feedback to team</li>
                                                                        <li>Directors: Ensures all teams are running smoothly, solves technical and operational issues for the teams</li>
                                                                        <li>Support: Encourages growth and progress of the company’s support department, constantly communicates to Directors for feedback and improvements</li>
                                                                        </ul>
                                                                    </span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($empinfo->m_knowledge_performance_question_1 === $empinfo->knowledge_performance_question_1){
                                                                $same_knowledge_performance_question_1 = $empinfo->m_knowledge_performance_question_1;
                                                            }else{
                                                                $same_knowledge_performance_question_1 = false;
                                                            }

                                                            if($empinfo->knowledge_performance_question_1==0){
                                                                $NA_knowledge_performance_question_1 = 6;
                                                            }else{
                                                                $NA_knowledge_performance_question_1 = false;
                                                            }
                                                    
                                                            $x = 1;
                                                            while($x <= 6) {
                                                            if($same_knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->m_knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_1" value="<?php echo $empinfo->m_knowledge_performance_question_1; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_1" value="<?php echo $empinfo->knowledge_performance_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                2. Completes work efficiently with a fast turnaround and avoids redundant work
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Able to maximize the use of their time to work quickly without delays and mistakes</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>

                                                            <?php
                                                                if($empinfo->m_knowledge_performance_question_2 === $empinfo->knowledge_performance_question_2){
                                                                    $same_knowledge_performance_question_2 = $empinfo->m_knowledge_performance_question_2;
                                                                }else{
                                                                    $same_knowledge_performance_question_2 = false;
                                                                }

                                                                if($empinfo->knowledge_performance_question_2==0){
                                                                    $NA_knowledge_performance_question_2 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_2" value="<?php echo $empinfo->m_knowledge_performance_question_2; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_2" value="<?php echo $empinfo->knowledge_performance_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                3. Knowledge of your industry’s practices, regulations, and workflow
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proactively searches for new updates in BIM practices, add-ins, tools to solve project tasks and improve the workflow of the team</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_knowledge_performance_question_3 === $empinfo->knowledge_performance_question_3){
                                                                    $same_knowledge_performance_question_3 = $empinfo->m_knowledge_performance_question_3;
                                                                }else{
                                                                    $same_knowledge_performance_question_3 = false;
                                                                }

                                                                if($empinfo->knowledge_performance_question_3==0){
                                                                    $NA_knowledge_performance_question_3 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_3 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_3" value="<?php echo $empinfo->m_knowledge_performance_question_3; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_3" value="<?php echo $empinfo->knowledge_performance_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                4. Desire to learn new skills and industry knowledge to improve and grow in your role <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Show the desire to learn more and expand your role to better support your team and project</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_knowledge_performance_question_4 === $empinfo->knowledge_performance_question_4){
                                                                    $same_knowledge_performance_question_4 = $empinfo->m_knowledge_performance_question_4;
                                                                }else{
                                                                    $same_knowledge_performance_question_4 = false;
                                                                }

                                                                if($empinfo->knowledge_performance_question_4==0){
                                                                    $NA_knowledge_performance_question_4 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_4 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_4" value="<?php echo $empinfo->m_knowledge_performance_question_4; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_4" value="<?php echo $empinfo->knowledge_performance_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                5. Shows the ability to supervise a team to handle a project <span class="gray-font-scoring">(for Supervisors only, independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Shows signs of leadership to handle a team and guide them towards a common goal</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_knowledge_performance_question_5 === $empinfo->knowledge_performance_question_5){
                                                                    $same_knowledge_performance_question_5 = $empinfo->m_knowledge_performance_question_5;
                                                                }else{
                                                                    $same_knowledge_performance_question_5 = false;
                                                                }

                                                                if($empinfo->knowledge_performance_question_5==0){
                                                                    $NA_knowledge_performance_question_5 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_5 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_5" value="<?php echo $empinfo->m_knowledge_performance_question_5; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_5" value="<?php echo $empinfo->knowledge_performance_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-emp">
                                                                    Employee <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <span>
                                                                    <?php  $comm_avg= $empinfo->knowledge_performance_emp_avg; ?>
                                                                        <?php if($comm_avg <= 1): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg <= 5): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php else: ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                    <?php endif; ?>
                                                                </span>
                                                                &nbsp;
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <span>
                                                                    <?php  $comm_avg= $empinfo->m_knowledge_performance_emp_avg; ?>
                                                                        <?php if($comm_avg <= 1): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg <= 5): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php else: ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                    <?php endif; ?>
                                                                </span>
                                                                &nbsp;
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class='radio-inline'> <input type='radio' class='form-check-input both-checked' /></label>
                                                                </span>
                                                            </div>
                                                            <input type="hidden" name="m_knowledge_performance_emp_avg_old" value="<?php echo $empinfo->m_knowledge_performance_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="knowledge_performance_comments" cols="3" rows="3" disabled><?php echo $empinfo->knowledge_performance_comments; ?></textarea>
                                                            <input type="hidden" name="knowledge_performance_comments_old" value="<?php echo $empinfo->knowledge_performance_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_knowledge_performance_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_knowledge_performance_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="navs-justified-quality" role="tabpanel">
=======
                                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Knowledge & Performance</span>">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-knowledge-performance" aria-controls="navs-justified-knowledge-performance" aria-selected="false">
                                            Section 2
                                            </button>
                                        </li>

                                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Communication</span>">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-communication" aria-controls="navs-justified-communication" aria-selected="false">
                                                Section 3
                                            </button>
                                        </li>
                                        
                                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Task & Time Management</span>">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-time-management" aria-controls="navs-justified-time-management" aria-selected="false">
                                            Section 4
                                            </button>
                                        </li>

                                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Team Management</span>">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-team-management" aria-controls="navs-justified-team-management" aria-selected="false">
                                              Section 5
                                            </button>
                                        </li>

                                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Reliability & Professionalism</span>">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-reliability-professionalism" aria-controls="navs-justified-reliability-dependability" aria-selected="false">
                                                Section 6
                                            </button>
                                        </li>

                                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Adaptability & Proactivity</span>">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-adaptability" aria-controls="navs-justified-adaptability" aria-selected="false">
                                                Section 7
                                            </button>
                                        </li>

                                </ul>
                            <div class="tab-content">

                            <div class="tab-pane fade show active" id="navs-justified-goals" role="tabpanel">
                                            <h4>Goals</h4>
                                            <hr>
                                            <div class="supervisor-goals-flex">
                                                <section class="supervisor-goals-section">
                                                    <div class="goals-section-one">
                                                        <label for="">Current Goals</label>
                                                        <span>Immediate Goals</span>
                                                        <div class="goal-boxes">
                                                            <div class="goal-box">
                                                                <textarea class="form-control" cols="5" rows="3" disabled><?php echo $goal->goals_emp_words_immediate; ?></textarea>
                                                                <label for="">Evaluatee to write goals</label>
                                                            </div>
                                                            <div class="goal-box">
                                                                <textarea class="form-control" cols="5" rows="3" disabled></textarea>
                                                                <label for="">Supervisor to review goals</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="goals-section-one">
                                                        <label for="">Short-Term Goals</label>
                                                        <span>Goals to be achieved within 6 months</span>
                                                        <div class="goal-boxes">
                                                            <div class="goal-box">
                                                                <textarea class="form-control" cols="5" rows="3" disabled><?php echo $goal->goals_emp_words_short_term; ?></textarea>
                                                                <label for="">Evaluatee to write goals</label>
                                                            </div>
                                                            <div class="goal-box">
                                                                <textarea class="form-control" cols="5" rows="3" disabled></textarea>
                                                                <label for="">Supervisor to review goals</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <section class="supervisor-goals-section">
                                                    <div class="goals-section-one">
                                                        <label for="">Mid-Term Goals</label>
                                                        <span>Goals to be achieved within 12 months</span>
                                                        <div class="goal-boxes">
                                                            <div class="goal-box">
                                                                <textarea class="form-control" cols="5" rows="3" disabled><?php echo $goal->goals_emp_words_mid_term; ?></textarea>
                                                                <label for="">Evaluatee to write goals</label>
                                                            </div>
                                                            <div class="goal-box">
                                                                <textarea class="form-control" cols="5" rows="3" disabled></textarea>
                                                                <label for="">Supervisor to review goals</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="goals-section-one">
                                                        <label for="">Long-Term Goals</label>
                                                        <span>Goals to be achieved within 18 months</span>
                                                        <div class="goal-boxes">
                                                            <div class="goal-box">
                                                                <textarea class="form-control" cols="5" rows="3" disabled><?php echo $goal->goals_emp_words_long_term; ?></textarea>
                                                                <label for="">Evaluatee to write goals</label>
                                                            </div>
                                                            <div class="goal-box">
                                                                <textarea class="form-control" cols="5" rows="3" disabled></textarea>
                                                                <label for="">Supervisor to review goals</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>

                                    <div class="tab-pane fade" id="navs-justified-quality-organization" role="tabpanel">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            <h4>Quality & Organization</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
<<<<<<< HEAD
                                                            <p>
                                                                1. Attention to details
=======
                                                        <p>
                                                                1. Attention to details <span class="gray-font-scoring">(sets the highest score in this category)</span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>The work produced is concise and free of mistakes, all decisions are deliberate to improve the quality of the work. The Presentation of the work is clean, clear and aligned</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_quality_question_1 === $empinfo->quality_question_1){
                                                                    $same_quality_question_1 = $empinfo->m_quality_question_1;
                                                                }else{
                                                                    $same_quality_question_1 = false;
                                                                }

                                                                if($empinfo->quality_question_1==0){
                                                                    $NA_quality_question_1 = 6;
                                                                }else{
                                                                    $NA_quality_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_quality_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_quality_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->quality_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_quality_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_quality_question_1" value="<?php echo $empinfo->m_quality_question_1; ?>">
                                                            <input type="hidden" name="e_quality_question_1" value="<?php echo $empinfo->quality_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
<<<<<<< HEAD
                                                            <p>
=======
                                                        <p>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                2. Produces high quality finished deliverables
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
<<<<<<< HEAD
                                                                    title="<span>Produces clean modelling adhering to the LOD with accurate dimensions, no spelling mistakes, necessary metadata</span>">
=======
                                                                    title="<span>Produces quality work deliverables adhering to LOD with accurate dimension, no spelling mistakes and necessary metadata</span>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_quality_question_2 === $empinfo->quality_question_2){
                                                                    $same_quality_question_2 = $empinfo->m_quality_question_2;
                                                                }else{
                                                                    $same_quality_question_2 = false;
                                                                }

                                                                if($empinfo->quality_question_2==0){
                                                                    $NA_quality_question_2 = 6;
                                                                }else{
                                                                    $NA_quality_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_quality_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_quality_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->quality_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_quality_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_quality_question_2" value="<?php echo $empinfo->m_quality_question_2; ?>">
                                                            <input type="hidden" name="e_quality_question_2" value="<?php echo $empinfo->quality_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
<<<<<<< HEAD
                                                            <p>
=======
                                                        <p>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                3. Learns from mistakes and avoid recurrence
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Mistakes made result in growth and learning lessons to improve quality of work and not repeated again</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                             <?php
                                                                if($empinfo->m_quality_question_3 === $empinfo->quality_question_3){
                                                                    $same_quality_question_3 = $empinfo->m_quality_question_3;
                                                                }else{
                                                                    $same_quality_question_3 = false;
                                                                }

                                                                if($empinfo->quality_question_3==0){
                                                                    $NA_quality_question_3 = 6;
                                                                }else{
                                                                    $NA_quality_question_3 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_quality_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_quality_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->quality_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_quality_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_quality_question_3" value="<?php echo $empinfo->m_quality_question_3; ?>">
                                                            <input type="hidden" name="e_quality_question_3" value="<?php echo $empinfo->quality_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
<<<<<<< HEAD
                                                            <p>
=======
                                                        <p>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                4. Estimates how long a task will take to include for task discussion, task execution, and task quality control
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Sets realistic time allocation to allow for proper task execution without having to sacrifice quality control</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_quality_question_4 === $empinfo->quality_question_4){
                                                                    $same_quality_question_4 = $empinfo->m_quality_question_4;
                                                                }else{
                                                                    $same_quality_question_4 = false;
                                                                }

                                                                if($empinfo->quality_question_4==0){
                                                                    $NA_quality_question_4 = 6;
                                                                }else{
                                                                    $NA_quality_question_4 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_quality_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_quality_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->quality_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_quality_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_quality_question_4" value="<?php echo $empinfo->m_quality_question_4; ?>">
                                                            <input type="hidden" name="e_quality_question_4" value="<?php echo $empinfo->quality_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
<<<<<<< HEAD
                                                            <p>
                                                                5. Follows company standards for file organization, file documentation, naming conventions, and BIM protocols
=======
                                                        <p>
                                                                5.  Follows company standards for file organization in Sharepoint, file documentation, naming conventions, and BIM protocols
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
<<<<<<< HEAD
                                                                    title="<span>Follows company standards for file organization, file documentation, naming conventions, and BIM protocols</span>">
=======
                                                                    title="<span>Follows the company work protocol for naming of files, families, etc. Files are organized correctly on the server</span>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_quality_question_5 === $empinfo->quality_question_5){
                                                                    $same_quality_question_5 = $empinfo->m_quality_question_5;
                                                                }else{
                                                                    $same_quality_question_5 = false;
                                                                }

                                                                if($empinfo->quality_question_5==0){
                                                                    $NA_quality_question_5 = 6;
                                                                }else{
                                                                    $NA_quality_question_5 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_quality_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_quality_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->quality_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_quality_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_quality_question_5" value="<?php echo $empinfo->m_quality_question_5; ?>">
                                                            <input type="hidden" name="e_quality_question_5" value="<?php echo $empinfo->quality_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                        <div class="re-update-score-box">
                                                                <span class="indi-re-avg-emp">
                                                                    Employee <i class='bx bx-circle'></i></i>
                                                                </span>
                                                            <?php  $comm_avg= $empinfo->quality_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager">
                                                                Manager <i class='bx bx-circle'></i></i>
                                                            </span>
                                                            <?php  $comm_avg= $empinfo->m_quality_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager both-checked-indi">
                                                                Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                            </span>
                                                        </div>
                                                        <input type="hidden" name="m_quality_emp_avg_old" value="<?php echo $empinfo->m_quality_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="quality_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->quality_comments; ?></textarea>
                                                            <input type="hidden" name="quality_comments_old" value="<?php echo $empinfo->quality_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_quality_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_quality_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

<<<<<<< HEAD
                                        <div class="tab-pane fade" id="navs-justified-knowledge" role="tabpanel">
                                            <h4>Knowledge of Job</h4>
=======
                                        <div class="tab-pane fade" id="navs-justified-knowledge-performance" role="tabpanel">
                                            <h4>Knowledge & Performance</h4>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
<<<<<<< HEAD
                                                                
=======
                                                        
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>
<<<<<<< HEAD
                                                        
=======

>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
<<<<<<< HEAD
                                                            <p>1. Understanding of BIM project standards and portfolio</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_knowledge_standards_and_portfolio === $empinfo->knowledge_standards_and_portfolio){
                                                                    $same_knowledge_standards_and_portfolio = $empinfo->m_knowledge_standards_and_portfolio;
                                                                }else{
                                                                    $same_knowledge_standards_and_portfolio = false;
                                                                }

                                                                if($empinfo->knowledge_standards_and_portfolio==0){
                                                                    $NA_knowledge_standards_and_portfolio = 6;
                                                                }else{
                                                                    $NA_knowledge_standards_and_portfolio = false;
=======
                                                            <p>
                                                                1. Successfully executes the duties and responsibilities of their role as stated in their job descriptions
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>
                                                                        <ul>
                                                                        <li>BIM Consultants: Ability to model correctly until LOD300, produce schedules, input metadata in families</li>
                                                                        <li>BIM Coordinators: Quality check of BIM models and sheets, work in CDEs, ability to follow a BEP</li>
                                                                        <li>BIM Managers: Ability to manage a team, follow ISO19650, write and follow BEP, give feedback to team</li>
                                                                        <li>Directors: Ensures all teams are running smoothly, solves technical and operational issues for the teams</li>
                                                                        <li>Support: Encourages growth and progress of the company’s support department, constantly communicates to Directors for feedback and improvements</li>
                                                                        </ul>
                                                                    </span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($empinfo->m_knowledge_performance_question_1 === $empinfo->knowledge_performance_question_1){
                                                                $same_knowledge_performance_question_1 = $empinfo->m_knowledge_performance_question_1;
                                                            }else{
                                                                $same_knowledge_performance_question_1 = false;
                                                            }

                                                            if($empinfo->knowledge_performance_question_1==0){
                                                                $NA_knowledge_performance_question_1 = 6;
                                                            }else{
                                                                $NA_knowledge_performance_question_1 = false;
                                                            }
                                                    
                                                            $x = 1;
                                                            while($x <= 6) {
                                                            if($same_knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->m_knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_1" value="<?php echo $empinfo->m_knowledge_performance_question_1; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_1" value="<?php echo $empinfo->knowledge_performance_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                2. Understanding of the Project <span class="gray-font-scoring">(For BIM Team only)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Knows their project inside-out, have clear details and understanding of project and its requirements and is able to give the clarity to the team members</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>

                                                            <?php
                                                                if($empinfo->m_knowledge_performance_question_2 === $empinfo->knowledge_performance_question_2){
                                                                    $same_knowledge_performance_question_2 = $empinfo->m_knowledge_performance_question_2;
                                                                }else{
                                                                    $same_knowledge_performance_question_2 = false;
                                                                }

                                                                if($empinfo->knowledge_performance_question_2==0){
                                                                    $NA_knowledge_performance_question_2 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_2 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
<<<<<<< HEAD
                                                                if($same_knowledge_standards_and_portfolio==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_knowledge_standards_and_portfolio==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->knowledge_standards_and_portfolio==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_standards_and_portfolio==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                                                if($same_knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
<<<<<<< HEAD
                                                            <input type="hidden" name="m_knowledgejob_question_1" value="<?php echo $empinfo->m_knowledge_standards_and_portfolio; ?>">
                                                            <input type="hidden" name="e_knowledgejob_question_1" value="<?php echo $empinfo->knowledge_standards_and_portfolio; ?>">
=======
                                                            <input type="hidden" name="m_knowledge_performance_question_2" value="<?php echo $empinfo->m_knowledge_performance_question_2; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_2" value="<?php echo $empinfo->knowledge_performance_question_2; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
<<<<<<< HEAD
                                                            <p>2. Understanding of BIM project requirements</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_knowledge_bim_project_requirements === $empinfo->knowledge_bim_project_requirements){
                                                                    $same_knowledge_bim_project_requirements = $empinfo->m_knowledge_bim_project_requirements;
                                                                }else{
                                                                    $same_knowledge_bim_project_requirements = false;
                                                                }

                                                                if($empinfo->knowledge_bim_project_requirements==0){
                                                                    $NA_knowledge_bim_project_requirements = 6;
                                                                }else{
                                                                    $NA_knowledge_bim_project_requirements = false;
=======
                                                        <p>
                                                                3. Completes work efficiently with a fast turnaround and avoids redundant work
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Able to maximize the use of their time to work quickly without delays and mistakes</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_knowledge_performance_question_3 === $empinfo->knowledge_performance_question_3){
                                                                    $same_knowledge_performance_question_3 = $empinfo->m_knowledge_performance_question_3;
                                                                }else{
                                                                    $same_knowledge_performance_question_3 = false;
                                                                }

                                                                if($empinfo->knowledge_performance_question_3==0){
                                                                    $NA_knowledge_performance_question_3 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_3 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
<<<<<<< HEAD
                                                                if($same_knowledge_bim_project_requirements==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_knowledge_bim_project_requirements==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->knowledge_bim_project_requirements==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_bim_project_requirements==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                                                if($same_knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
<<<<<<< HEAD
                                                            <input type="hidden" name="m_knowledgejob_question_2" value="<?php echo $empinfo->m_knowledge_bim_project_requirements; ?>">
                                                            <input type="hidden" name="e_knowledgejob_question_2" value="<?php echo $empinfo->knowledge_bim_project_requirements; ?>">
=======
                                                            <input type="hidden" name="m_knowledge_performance_question_3" value="<?php echo $empinfo->m_knowledge_performance_question_3; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_3" value="<?php echo $empinfo->knowledge_performance_question_3; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
<<<<<<< HEAD
                                                            <p>3. Knowledge of the construction industry including ARC, STR, MEP, and BIM standards</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_knowledge_of_the_construction_industry === $empinfo->knowledge_of_the_construction_industry){
                                                                    $same_knowledge_of_the_construction_industry = $empinfo->m_knowledge_of_the_construction_industry;
                                                                }else{
                                                                    $same_knowledge_of_the_construction_industry = false;
                                                                }

                                                                if($empinfo->knowledge_of_the_construction_industry==0){
                                                                    $NA_knowledge_of_the_construction_industry = 6;
                                                                }else{
                                                                    $NA_knowledge_of_the_construction_industry = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_of_the_construction_industry==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_knowledge_of_the_construction_industry==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->knowledge_of_the_construction_industry==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_of_the_construction_industry==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                                        <p>
                                                                4. Knowledge of your industry’s practices, regulations, and workflow
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proactively searches for new updates in BIM practices, add-ins, tools to solve project tasks and improve the workflow of the team</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_knowledge_performance_question_4 === $empinfo->knowledge_performance_question_4){
                                                                    $same_knowledge_performance_question_4 = $empinfo->m_knowledge_performance_question_4;
                                                                }else{
                                                                    $same_knowledge_performance_question_4 = false;
                                                                }

                                                                if($empinfo->knowledge_performance_question_4==0){
                                                                    $NA_knowledge_performance_question_4 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_4 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
<<<<<<< HEAD
                                                            <input type="hidden" name="m_knowledgejob_question_3" value="<?php echo $empinfo->m_knowledge_of_the_construction_industry; ?>">
                                                            <input type="hidden" name="e_knowledgejob_question_3" value="<?php echo $empinfo->knowledge_of_the_construction_industry; ?>">
=======
                                                            <input type="hidden" name="m_knowledge_performance_question_4" value="<?php echo $empinfo->m_knowledge_performance_question_4; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_4" value="<?php echo $empinfo->knowledge_performance_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                5. Ability to educate team members <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Able to clearly address, identify learning challenges and roadblocks. Also design and manage workshops for the company</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_knowledge_performance_question_5 === $empinfo->knowledge_performance_question_5){
                                                                    $same_knowledge_performance_question_5 = $empinfo->m_knowledge_performance_question_5;
                                                                }else{
                                                                    $same_knowledge_performance_question_5 = false;
                                                                }

                                                                if($empinfo->knowledge_performance_question_5==0){
                                                                    $NA_knowledge_performance_question_5 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_5 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_5" value="<?php echo $empinfo->m_knowledge_performance_question_5; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_5" value="<?php echo $empinfo->knowledge_performance_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                6. Desire to learn new skills and industry knowledge to improve and grow in your role <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Show the desire to learn more and expand your role to better support your team and project</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_knowledge_performance_question_6 === $empinfo->knowledge_performance_question_6){
                                                                    $same_knowledge_performance_question_6 = $empinfo->m_knowledge_performance_question_6;
                                                                }else{
                                                                    $same_knowledge_performance_question_6 = false;
                                                                }

                                                                if($empinfo->knowledge_performance_question_6==0){
                                                                    $NA_knowledge_performance_question_6 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_6 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_performance_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_6_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_knowledge_performance_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_6_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->knowledge_performance_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_6_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_6_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_6_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_6" value="<?php echo $empinfo->m_knowledge_performance_question_6; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_6" value="<?php echo $empinfo->knowledge_performance_question_6; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                7. Shows the ability to supervise a team to handle a project <span class="gray-font-scoring">(for Supervisors only, independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Shows signs of leadership to handle a team and guide them towards a common goal</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_knowledge_performance_question_7 === $empinfo->knowledge_performance_question_7){
                                                                    $same_knowledge_performance_question_7 = $empinfo->m_knowledge_performance_question_7;
                                                                }else{
                                                                    $same_knowledge_performance_question_7 = false;
                                                                }

                                                                if($empinfo->knowledge_performance_question_7==0){
                                                                    $NA_knowledge_performance_question_7 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_7 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_performance_question_7==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_7_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_knowledge_performance_question_7==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_7_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->knowledge_performance_question_7==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_7_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_7==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_7_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_7_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_7" value="<?php echo $empinfo->m_knowledge_performance_question_7; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_7" value="<?php echo $empinfo->knowledge_performance_question_7; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

<<<<<<< HEAD
                                                        <div class="re-update-score-box">
                                                                <span class="indi-re-avg-emp">
                                                                    Employee <i class='bx bx-circle'></i></i>
                                                                </span>
                                                            <?php  $comm_avg= $empinfo->knowledge_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager">
                                                                Manager <i class='bx bx-circle'></i></i>
                                                            </span>
                                                            <?php  $comm_avg= $empinfo->m_knowledge_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager both-checked-indi">
                                                                Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                            </span>
                                                        </div>
                                                        <input type="hidden" name="m_knowledge_emp_avg_old" value="<?php echo $empinfo->m_knowledge_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="knowledge_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->knowledge_comments; ?></textarea>
                                                            <input type="hidden" name="knowledge_comments_old" value="<?php echo $empinfo->knowledge_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_knowledge_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_knowledge_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="navs-justified-software" role="tabpanel">
                                            <h4>Knowledge of Software</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                       
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                1. BIM Tools (Revit, Naviswork, Autocad)
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proficiency with the tools required for BIM workflow</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_software_question_1 === $empinfo->software_question_1){
                                                                    $same_software_question_1 = $empinfo->m_software_question_1;
                                                                }else{
                                                                    $same_software_question_1 = false;
                                                                }

                                                                if($empinfo->software_question_1==0){
                                                                    $NA_software_question_1 = 6;
                                                                }else{
                                                                    $NA_software_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_software_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_software_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->software_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_software_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_software_question_1" value="<?php echo $empinfo->m_software_question_1; ?>">
                                                            <input type="hidden" name="e_software_question_1" value="<?php echo $empinfo->software_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                2. CDE Platforms (ACC, BIM360)
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proficiency in Common Data Environments to allow seamless collaboration with the team</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_software_question_2 === $empinfo->software_question_2){
                                                                    $same_software_question_2 = $empinfo->m_software_question_2;
                                                                }else{
                                                                    $same_software_question_2 = false;
                                                                }

                                                                if($empinfo->software_question_2==0){
                                                                    $NA_software_question_2 = 6;
                                                                }else{
                                                                    $NA_software_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_software_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_software_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->software_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_software_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_software_question_2" value="<?php echo $empinfo->m_software_question_2; ?>">
                                                            <input type="hidden" name="e_software_question_2" value="<?php echo $empinfo->software_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                3. Automation Tools (Elastic, Dynamo, etc)
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proficiency in using automation tools to maximize efficiency in workflow</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_software_question_3 === $empinfo->software_question_3){
                                                                    $same_software_question_3 = $empinfo->m_software_question_3;
                                                                }else{
                                                                    $same_software_question_3 = false;
                                                                }

                                                                if($empinfo->software_question_3==0){
                                                                    $NA_software_question_3 = 6;
                                                                }else{
                                                                    $NA_software_question_3 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_software_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_software_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->software_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_software_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_software_question_3" value="<?php echo $empinfo->m_software_question_3; ?>">
                                                            <input type="hidden" name="e_software_question_3" value="<?php echo $empinfo->software_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                4. Office Tools (Word, Excel, Outlook, PDF editing, etc)
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proficiency in various office tools to keep information updated and transparent</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_software_question_4 === $empinfo->software_question_4){
                                                                    $same_software_question_4 = $empinfo->m_software_question_4;
                                                                }else{
                                                                    $same_software_question_4 = false;
                                                                }

                                                                if($empinfo->software_question_4==0){
                                                                    $NA_software_question_4 = 6;
                                                                }else{
                                                                    $NA_software_question_4 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_software_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_software_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->software_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_software_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_software_question_4" value="<?php echo $empinfo->m_software_question_4; ?>">
                                                            <input type="hidden" name="e_software_question_4" value="<?php echo $empinfo->software_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                5. Management (Bitrix24, Zoom)
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proficiency in various aspects of Bitrix24 including using tasks, timetracking, commenting on tasks, swift communication, etc</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php

                                                                if($empinfo->m_software_question_5 === $empinfo->software_question_5){
                                                                    $same_software_question_5 = $empinfo->m_software_question_5;
                                                                }else{
                                                                    $same_software_question_5 = false;
                                                                }

                                                                if($empinfo->software_question_5==0){
                                                                    $NA_software_question_5 = 6;
                                                                }else{
                                                                    $NA_software_question_5 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_software_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_software_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->software_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_software_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_software_question_5" value="<?php echo $empinfo->m_software_question_5; ?>">
                                                            <input type="hidden" name="e_software_question_5" value="<?php echo $empinfo->software_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                    <td>
                                                    <div class="re-update-score-box">
                                                        <span class="indi-re-avg-emp">
                                                            Employee <i class='bx bx-circle'></i></i>
                                                        </span>
                                                            <?php  $comm_avg= $empinfo->software_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager">
                                                                Manager <i class='bx bx-circle'></i></i>
                                                            </span>
                                                            <?php  $comm_avg= $empinfo->m_software_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager both-checked-indi">
                                                                Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                            </span>
                                                        </div>
                                                        <input type="hidden" name="m_software_emp_avg_old" value="<?php echo $empinfo->m_software_emp_avg; ?>">
                                                    </td>

                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="software_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->software_comments; ?></textarea>
                                                            <input type="hidden" name="software_comments_old" value="<?php echo $empinfo->software_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_software_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_software_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="navs-justified-reliability-professionalism" role="tabpanel">
                                            <h4>Reliability & Professionalism</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                1. Organizes their time to allow for multiple daily tasks without issues
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Allocates time in their day properly to manage more than one task to be addressed</span>">
                                                                </i>
                                                                </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_reliability_question_1 === $empinfo->reliability_question_1){
                                                                    $same_reliability_question_1 = $empinfo->m_reliability_question_1;
                                                                }else{
                                                                    $same_reliability_question_1 = false;
                                                                }

                                                                if($empinfo->reliability_question_1==0){
                                                                    $NA_reliability_question_1 = 6;
                                                                }else{
                                                                    $NA_reliability_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_1" value="<?php echo $empinfo->m_reliability_question_1; ?>">
                                                            <input type="hidden" name="e_reliability_question_1" value="<?php echo $empinfo->reliability_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                2. Finishes tasks without constant supervision within set deadlines
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Self-sufficient with their skills and efficient with their questions to allow for their supervisor and teammates to work with minimum interruption</span>">
                                                                </i>                
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_reliability_question_2 === $empinfo->reliability_question_2){
                                                                    $same_reliability_question_2 = $empinfo->m_reliability_question_2;
                                                                }else{
                                                                    $same_reliability_question_2 = false;
                                                                }

                                                                if($empinfo->reliability_question_2==0){
                                                                    $NA_reliability_question_2 = 6;
                                                                }else{
                                                                    $NA_reliability_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_2" value="<?php echo $empinfo->m_reliability_question_2; ?>">
                                                            <input type="hidden" name="e_reliability_question_2" value="<?php echo $empinfo->reliability_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                3. Produces deliverables that are above expectation
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proactively provides further information, data or drawings to compliment and support an argument to enhance deliverables</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_reliability_question_3 === $empinfo->reliability_question_3){
                                                                    $same_reliability_question_3 = $empinfo->m_reliability_question_3;
                                                                }else{
                                                                    $same_reliability_question_3 = false;
                                                                }

                                                                if($empinfo->reliability_question_3==0){
                                                                    $NA_reliability_question_3 = 6;
                                                                }else{
                                                                    $NA_reliability_question_3 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_3" value="<?php echo $empinfo->m_reliability_question_3; ?>">
                                                            <input type="hidden" name="e_reliability_question_3" value="<?php echo $empinfo->reliability_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                            4. Takes ownership of job duties and hold himself/herself accountable for them <span class="gray-font-scoring">(independent scoring)</span>
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Proud on their work to share with teammates to strengthen the knowledge and backbone of the team</span>">
                                                            </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_reliability_question_4 === $empinfo->reliability_question_4){
                                                                    $same_reliability_question_4 = $empinfo->m_reliability_question_4;
                                                                }else{
                                                                    $same_reliability_question_4 = false;
                                                                }

                                                                if($empinfo->reliability_question_4==0){
                                                                    $NA_reliability_question_4 = 6;
                                                                }else{
                                                                    $NA_reliability_question_4 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_4" value="<?php echo $empinfo->m_reliability_question_4; ?>">
                                                            <input type="hidden" name="e_reliability_question_4" value="<?php echo $empinfo->reliability_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                5. Strive to cultivate and maintain positive working relationships and respect towards co-workers <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Maintains a respectful, collaborative environment to allow for good moral support in achieving team goals</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_reliability_question_5 === $empinfo->reliability_question_5){
                                                                    $same_reliability_question_5 = $empinfo->m_reliability_question_5;
                                                                }else{
                                                                    $same_reliability_question_5 = false;
                                                                }

                                                                if($empinfo->reliability_question_5==0){
                                                                    $NA_reliability_question_5 = 6;
                                                                }else{
                                                                    $NA_reliability_question_5 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_5" value="<?php echo $empinfo->m_reliability_question_5; ?>">
                                                            <input type="hidden" name="e_reliability_question_5" value="<?php echo $empinfo->reliability_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                6. Keeps a tidy workspace and proper care of the company’s equipment <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Maintains a clean working environment on the company’s premises, particularly for shared workstations. Takes care of their assigned work equipmen</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_reliability_question_6 === $empinfo->reliability_question_6){
                                                                    $same_reliability_question_6 = $empinfo->m_reliability_question_6;
                                                                }else{
                                                                    $same_reliability_question_6 = false;
                                                                }

                                                                if($empinfo->reliability_question_6==0){
                                                                    $NA_reliability_question_6 = 6;
                                                                }else{
                                                                    $NA_reliability_question_6 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_6" value="<?php echo $empinfo->m_reliability_question_6; ?>">
                                                            <input type="hidden" name="e_reliability_question_6" value="<?php echo $empinfo->reliability_question_6; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>
                                                            
                                                            <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bx-circle'></i></i>
                                                            </span>
                                                                <?php  $comm_avg= $empinfo->reliability_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

=======
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-emp">
                                                                    Employee <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <span>
                                                                    <?php  $comm_avg= $empinfo->knowledge_performance_emp_avg; ?>
                                                                        <?php if($comm_avg <= 1): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg <= 5): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php else: ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                    <?php endif; ?>
                                                                </span>
                                                                &nbsp;
                                                            </div>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
<<<<<<< HEAD
                                                                <?php  $comm_avg= $empinfo->m_reliability_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                                </span>
                                                            </div>
                                                           
                                                            <input type="hidden" name="m_reliability_emp_avg_old" value="<?php echo $empinfo->m_reliability_emp_avg; ?>">
=======
                                                                <span>
                                                                    <?php  $comm_avg= $empinfo->m_knowledge_performance_emp_avg; ?>
                                                                        <?php if($comm_avg <= 1): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg <= 5): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php else: ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                    <?php endif; ?>
                                                                </span>
                                                                &nbsp;
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class='radio-inline'> <input type='radio' class='form-check-input both-checked' /></label>
                                                                </span>
                                                            </div>
                                                            <input type="hidden" name="m_knowledge_performance_emp_avg_old" value="<?php echo $empinfo->m_knowledge_performance_emp_avg; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
<<<<<<< HEAD
                                                            <textarea class="form-control" name="reliability_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->reliability_comments; ?></textarea>
                                                            <input type="hidden" name="reliability_comments" value="<?php echo $empinfo->reliability_comments; ?>">
=======
                                                            <textarea class="form-control" name="knowledge_performance_comments" cols="3" rows="3" disabled><?php echo $empinfo->knowledge_performance_comments; ?></textarea>
                                                            <input type="hidden" name="knowledge_performance_comments_old" value="<?php echo $empinfo->knowledge_performance_comments; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
<<<<<<< HEAD
                                                            <textarea class="form-control" name="m_reliability_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_reliability_comments; ?></textarea>
=======
                                                            <textarea class="form-control" name="m_knowledge_performance_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_knowledge_performance_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="navs-justified-communication" role="tabpanel">
                                            <div class="re-evaluate-head-top">
                                                <h4>Communication</h4>
                                            </div>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Not Applicable</span>">N/A</span>

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                1. Communicates effectively with teammates to accomplish common goals and objectives <span class="gray-font-scoring"> (sets the highest score in this category)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Messages are answered immediately as if you were working in the office. Productivity cannot be affected by a WFH setup </span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php

                                                                if($empinfo->m_communication_question_1 === $empinfo->communication_question_1){
                                                                    $same_communication_question_1 = $empinfo->m_communication_question_1;
                                                                }else{
                                                                    $same_communication_question_1 = false;
                                                                }

                                                                if($empinfo->communication_question_1==0){
                                                                    $NA_communication_question_1 = 6;
                                                                }else{
                                                                    $NA_communication_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {                                                                    
                                                                if(($same_communication_question_1)==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_communication_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->communication_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_communication_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_1" value="<?php echo $empinfo->m_communication_question_1; ?>">
                                                        <input type="hidden" name="e_communication_question_1" value="<?php echo $empinfo->communication_question_1; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                2. Swiftly answers to messages/calls to coordinate with colleagues
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Messages, surveys, and polls are answered immediately as if you were working in the office. Productivity cannot be affected by a WFH setup</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                        <?php
                                                            if($empinfo->m_communication_question_2 === $empinfo->communication_question_2){
                                                                $same_communication_question_2 = $empinfo->m_communication_question_2;
                                                            }else{
                                                                $same_communication_question_2 = false;
                                                            }

                                                            if($empinfo->communication_question_2==0){
                                                                $NA_communication_question_2 = 6;
                                                            }else{
                                                                $NA_communication_question_2 = false;
                                                            }

                                                            $x = 1;
                                                            while($x <= 6) {

                                                            if($same_communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->m_communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_2" value="<?php echo $empinfo->m_communication_question_2; ?>">
                                                        <input type="hidden" name="e_communication_question_2" value="<?php echo $empinfo->communication_question_2; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                3. Proactively communicates with supervisors for questions, feedback, job challenges
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Keeps an open channel of communication with their supervisor to ensure all tasks are clear, deadlines are on track, and asks for feedback on their performance</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($empinfo->m_communication_question_3 === $empinfo->communication_question_3){
                                                                $same_communication_question_3 = $empinfo->m_communication_question_3;
                                                            }else{
                                                                $same_communication_question_3 = false;
                                                            }

                                                            if($empinfo->communication_question_3==0){
                                                                $NA_communication_question_3 = 6;
                                                            }else{
                                                                $NA_communication_question_3 = false;
                                                            }

                                                            $x = 1;
                                                            while($x <= 6) {
                                                            if($same_communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->m_communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_3" value="<?php echo $empinfo->m_communication_question_3; ?>">
                                                        <input type="hidden" name="e_communication_question_3" value="<?php echo $empinfo->communication_question_3; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                4. Communicates effectively with teammates to accomplish common goals and objectives
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Communicates clearly and effectively with teammates to help each other with your tasks to be more efficient together, avoid mistakes, and provide technical support for the team</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($empinfo->m_communication_question_4 === $empinfo->communication_question_4){
                                                                $same_communication_question_4 = $empinfo->m_communication_question_4;
                                                            }else{
                                                                $same_communication_question_4 = false;
                                                            }

                                                            if($empinfo->communication_question_4==0){
                                                                $NA_communication_question_4 = 6;
                                                            }else{
                                                                $NA_communication_question_4 = false;
                                                            }


                                                            $x = 1;
                                                            while($x <= 6) {
                                                            if($same_communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->m_communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_4" value="<?php echo $empinfo->m_communication_question_4; ?>">
                                                        <input type="hidden" name="e_communication_question_4" value="<?php echo $empinfo->communication_question_4; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                5. Clear with time schedules for leave requests, sick leaves, offset hours <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Understands properly the requests of the client, set expectations correctly, and asks the necessary questions to execute the project without problems and delays</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($empinfo->m_communication_question_5 === $empinfo->communication_question_5){
                                                                $same_communication_question_5 = $empinfo->m_communication_question_5;
                                                            }else{
                                                                $same_communication_question_5 = false;
                                                            }

                                                            if($empinfo->communication_question_5==0){
                                                                $NA_communication_question_5 = 6;
                                                            }else{
                                                                $NA_communication_question_5 = false;
                                                            }

                                                            $x = 1;
                                                            while($x <= 6) {
                                                            if($same_communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->m_communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_5" value="<?php echo $empinfo->m_communication_question_5; ?>">
                                                        <input type="hidden" name="e_communication_question_5" value="<?php echo $empinfo->communication_question_5; ?>">
                                                    </tr>

                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                6. Communicates well with their client <span class="gray-font-scoring">(for BIM Coordinators, BIM Managers, Support team, independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Understands properly the requests of the client, set expectations correctly, and asks the necessary questions to execute the project without problems and delays</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($empinfo->m_communication_question_6 === $empinfo->communication_question_6){
                                                                $same_communication_question_6 = $empinfo->m_communication_question_6;
                                                            }else{
                                                                $same_communication_question_6 = false;
                                                            }

                                                            if($empinfo->communication_question_6==0){
                                                                $NA_communication_question_6 = 6;
                                                            }else{
                                                                $NA_communication_question_6 = false;
                                                            }

                                                            $x = 1;
                                                            while($x <= 6) {
                                                            if($same_communication_question_6==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_6_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->m_communication_question_6==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_6_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($empinfo->communication_question_6==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_6_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_communication_question_6==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_6_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_6_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_6" value="<?php echo $empinfo->m_communication_question_6; ?>">
                                                        <input type="hidden" name="e_communication_question_6" value="<?php echo $empinfo->communication_question_6; ?>">
                                                    </tr>
                                                  
                                                    <tr class="remove_bb">
                                                        <td></td>
                                                        <td>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-emp">
                                                                    Employee <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <span>
                                                                    <?php  $comm_avg= $empinfo->communication_emp_avg; ?>
                                                                        <?php if($comm_avg <= 1): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg <= 5): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php else: ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                    <?php endif; ?>
                                                                </span>
                                                                &nbsp;
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <span>
                                                                    <?php  $comm_avg= $empinfo->m_communication_emp_avg; ?>
                                                                        <?php if($comm_avg <= 1): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg <= 5): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php else: ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                    <?php endif; ?>
                                                                </span>
                                                                &nbsp;
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class='radio-inline'> <input type='radio' class='form-check-input both-checked' /></label>
                                                                </span>
                                                            </div>
                                                            <input type="hidden" name="m_communication_emp_avg_old" value="<?php echo $empinfo->m_communication_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="communication_comments" cols="3" rows="3" disabled><?php echo $empinfo->communication_comments; ?></textarea>
                                                            <input type="hidden" name="communication_comments_old" value="<?php echo $empinfo->communication_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_communication_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_communication_comments; ?></textarea>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="navs-justified-time-management" role="tabpanel">
                                            <h4>Task & Time Management</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                       
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>
                                                       
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
<<<<<<< HEAD
                                                            <p>
                                                                1. Adheres to the task deadlines set by the supervisor
=======
                                                        <p>
                                                                1. Adheres to the task deadlines set by the supervisor <span class="gray-font-scoring">(sets the highest score in this category)</span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Manages to meet the task deadlines without having to extend them or go overdue</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_time_management_question_1 === $empinfo->time_management_question_1){
                                                                    $same_time_management_question_1 = $empinfo->m_time_management_question_1;
                                                                }else{
                                                                    $same_time_management_question_1 = false;
                                                                }

                                                                if($empinfo->time_management_question_1==0){
                                                                    $NA_time_management_question_1 = 6;
                                                                }else{
                                                                    $NA_time_management_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_time_management_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_time_management_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->time_management_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_time_management_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_time_management_question_1" value="<?php echo $empinfo->m_time_management_question_1; ?>">
                                                            <input type="hidden" name="e_time_management_question_1" value="<?php echo $empinfo->time_management_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            2. Updates on Task status and progress on Bitrix24
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Comments are updated daily regarding the status of the task including reporting the progress of the task, questions for the team are addressed, deadlines are monitored, and task summaries are provided when tasks are finished</span>">
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_time_management_question_2 === $empinfo->time_management_question_2){
                                                                    $same_time_management_question_2 = $empinfo->m_time_management_question_2;
                                                                }else{
                                                                    $same_time_management_question_2 = false;
                                                                }

                                                                if($empinfo->time_management_question_2==0){
                                                                    $NA_time_management_question_2 = 6;
                                                                }else{
                                                                    $NA_time_management_question_2 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_time_management_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_time_management_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->time_management_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_time_management_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_time_management_question_2" value="<?php echo $empinfo->m_time_management_question_2; ?>">
                                                            <input type="hidden" name="e_time_management_question_2" value="<?php echo $empinfo->time_management_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            3. Proactively informs if there are delays or issues with project tasks
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Informs the team and supervisor well ahead of time when a task’s deadline may be unrealistic and explain the challenges and how to address them in order to determine a more accurate timeline</span>">
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_time_management_question_3 === $empinfo->time_management_question_3){
                                                                    $same_time_management_question_3 = $empinfo->m_time_management_question_3;
                                                                }else{
                                                                    $same_time_management_question_3 = false;
                                                                }

                                                                if($empinfo->time_management_question_3==0){
                                                                    $NA_time_management_question_3 = 6;
                                                                }else{
                                                                    $NA_time_management_question_3 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_time_management_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_time_management_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->time_management_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_time_management_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_time_management_question_3" value="<?php echo $empinfo->m_time_management_question_3; ?>">
                                                            <input type="hidden" name="e_time_management_question_3" value="<?php echo $empinfo->time_management_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
<<<<<<< HEAD
                                                            4. Timetracks required working hours daily on Bitrix24
=======
                                                            4. Organizes their time to allow for multiple daily tasks without issues 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
<<<<<<< HEAD
                                                                title="<span>Timetracks accurately their tasks to reflect their daily work without forgetting to start or pause tasks. Every working day should result in a range between 8 to 10 hours, producing an average of 160 hours per month</span>">
=======
                                                                title="<span>Allocates time in their day properly to manage more than one task to be addressed</span>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_time_management_question_4 === $empinfo->time_management_question_4){
                                                                    $same_time_management_question_4 = $empinfo->m_time_management_question_4;
                                                                }else{
                                                                    $same_time_management_question_4 = false;
                                                                }

                                                                if($empinfo->time_management_question_4==0){
                                                                    $NA_time_management_question_4 = 6;
                                                                }else{
                                                                    $NA_time_management_question_4 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_time_management_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_time_management_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->time_management_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_time_management_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_time_management_question_4" value="<?php echo $empinfo->m_time_management_question_4; ?>">
                                                            <input type="hidden" name="e_time_management_question_4" value="<?php echo $empinfo->time_management_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
<<<<<<< HEAD
                                                            <p>
                                                                5. Follows the scheduled work shift <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Follows the scheduled work shifts specially with their WFH and Office hours</span>">
                                                                </i>
                                                            </p>
=======
                                                        <p>
                                                            5. Timetracks required working hours daily on Bitrix24
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Timetracks accurately their tasks to reflect their daily work without forgetting to start or pause tasks. Every working day should result in a range between 8 to 10 hours, producing an average of 160 hours per month</span>">
                                                            </i>
                                                        </p>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_time_management_question_5 === $empinfo->time_management_question_5){
                                                                    $same_time_management_question_5 = $empinfo->m_time_management_question_5;
                                                                }else{
                                                                    $same_time_management_question_5 = false;
                                                                }

                                                                if($empinfo->time_management_question_5==0){
                                                                    $NA_time_management_question_5 = 6;
                                                                }else{
                                                                    $NA_time_management_question_5 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_time_management_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_time_management_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->time_management_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_time_management_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_time_management_question_5" value="<?php echo $empinfo->m_time_management_question_5; ?>">
                                                            <input type="hidden" name="e_time_management_question_5" value="<?php echo $empinfo->time_management_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
<<<<<<< HEAD
=======
                                                        <p>
                                                                6. Follows the scheduled work shift <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Follows the scheduled work shifts specially with their WFH and Office hours. Minimize overtime work. Coordinate and approve overtime work with the Directors </span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_time_management_question_6 === $empinfo->time_management_question_6){
                                                                    $same_time_management_question_6 = $empinfo->m_time_management_question_6;
                                                                }else{
                                                                    $same_time_management_question_6 = false;
                                                                }

                                                                if($empinfo->time_management_question_6==0){
                                                                    $NA_time_management_question_6 = 6;
                                                                }else{
                                                                    $NA_time_management_question_6 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_time_management_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_6_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_time_management_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_6_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->time_management_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_6_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_time_management_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_6_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_6_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_time_management_question_6" value="<?php echo $empinfo->m_time_management_question_6; ?>">
                                                            <input type="hidden" name="e_time_management_question_6" value="<?php echo $empinfo->time_management_question_6; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bx-circle'></i></i>
                                                            </span>
                                                                <?php  $comm_avg= $empinfo->time_management_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <?php  $comm_avg= $empinfo->m_time_management_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                                </span>
<<<<<<< HEAD
                                                            </div>

                                                            
=======
                                                            </div>                                                            
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                            <input type="hidden" name="m_time_management_emp_avg_old" value="<?php echo $empinfo->m_time_management_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="time_management_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->time_management_comments; ?></textarea>
                                                            <input type="hidden" name="time_management_comments" value="<?php echo $empinfo->time_management_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_time_management_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_time_management_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

<<<<<<< HEAD
=======
                                        <div class="tab-pane fade" id="navs-justified-team-management" role="tabpanel">
                                            <h4>Team Management</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                       
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                1. Ability to Manage the team, identify their skills and allocate task <span class="gray-font-scoring">(sets the highest score in this category)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>BIM Coordinators: Attends the questions and concerns of the modellers and identify if there are any potential skills mismatch or outstanding candidates.</span> <span>BIM Managers: Ensure the team is compatible in terms of skills, knowledge and communication. Identify if there are any potential skills mismatches or outstanding candidates</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_team_management_question_1 === $empinfo->team_management_question_1){
                                                                    $same_team_management_question_1 = $empinfo->m_team_management_question_1;
                                                                }else{
                                                                    $same_team_management_question_1 = false;
                                                                }

                                                                if($empinfo->team_management_question_1==0){
                                                                    $NA_team_management_question_1 = 6;
                                                                }else{
                                                                    $NA_team_management_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_team_management_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_team_management_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->team_management_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_team_management_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_team_management_question_1" value="<?php echo $empinfo->m_team_management_question_1; ?>">
                                                            <input type="hidden" name="e_team_management_question_1" value="<?php echo $empinfo->team_management_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                2. Prepare and administer employee’s performance evaluation 
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Evaluates the performance of team members, provides feedback for improvement, and suggest follow-up actions</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_team_management_question_2 === $empinfo->team_management_question_2){
                                                                    $same_team_management_question_2 = $empinfo->m_team_management_question_2;
                                                                }else{
                                                                    $same_team_management_question_2 = false;
                                                                }

                                                                if($empinfo->team_management_question_2==0){
                                                                    $NA_team_management_question_2 = 6;
                                                                }else{
                                                                    $NA_team_management_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_team_management_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_team_management_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->team_management_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_team_management_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_team_management_question_2" value="<?php echo $empinfo->m_team_management_question_2; ?>">
                                                            <input type="hidden" name="e_team_management_question_2" value="<?php echo $empinfo->team_management_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                3. Observe for the team’s compatibility
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Monitor the different personalities within the team to avoid clashes, conflicts and encourage good team collaboration</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_team_management_question_3 === $empinfo->team_management_question_3){
                                                                    $same_team_management_question_3 = $empinfo->m_team_management_question_3;
                                                                }else{
                                                                    $same_team_management_question_3 = false;
                                                                }

                                                                if($empinfo->team_management_question_3==0){
                                                                    $NA_team_management_question_3 = 6;
                                                                }else{
                                                                    $NA_team_management_question_3 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_team_management_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_team_management_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->team_management_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_team_management_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_team_management_question_3" value="<?php echo $empinfo->m_team_management_question_3; ?>">
                                                            <input type="hidden" name="e_team_management_question_3" value="<?php echo $empinfo->team_management_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                4. Bitrix24 Time Reports and Team’s Time Tracking <span class="gray-font-scoring">(only for BIM Managers)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Ensuring that the team members are properly time tracking an average of 8 hours daily and justifying that the time spent on the tasks are fair to the amount of work</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_team_management_question_4 === $empinfo->team_management_question_4){
                                                                    $same_team_management_question_4 = $empinfo->m_team_management_question_4;
                                                                }else{
                                                                    $same_team_management_question_4 = false;
                                                                }

                                                                if($empinfo->team_management_question_4==0){
                                                                    $NA_team_management_question_4 = 6;
                                                                }else{
                                                                    $NA_team_management_question_4 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_team_management_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_team_management_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->team_management_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_team_management_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_team_management_question_4" value="<?php echo $empinfo->m_team_management_question_4; ?>">
                                                            <input type="hidden" name="e_team_management_question_4" value="<?php echo $empinfo->team_management_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                5. Ensuring the team has all the tools and licenses necessary for the project <span class="gray-font-scoring">(only for BIM Managers)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Making sure that the teams have all the tools, licenses including the necessary computer specs, team_managements and data for the project</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php

                                                                if($empinfo->m_team_management_question_5 === $empinfo->team_management_question_5){
                                                                    $same_team_management_question_5 = $empinfo->m_team_management_question_5;
                                                                }else{
                                                                    $same_team_management_question_5 = false;
                                                                }

                                                                if($empinfo->team_management_question_5==0){
                                                                    $NA_team_management_question_5 = 6;
                                                                }else{
                                                                    $NA_team_management_question_5 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_team_management_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_team_management_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->team_management_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_team_management_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='team_management_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_team_management_question_5" value="<?php echo $empinfo->m_team_management_question_5; ?>">
                                                            <input type="hidden" name="e_team_management_question_5" value="<?php echo $empinfo->team_management_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                    <td>
                                                    <div class="re-update-score-box">
                                                        <span class="indi-re-avg-emp">
                                                            Employee <i class='bx bx-circle'></i></i>
                                                        </span>
                                                            <?php  $comm_avg= $empinfo->team_management_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager">
                                                                Manager <i class='bx bx-circle'></i></i>
                                                            </span>
                                                            <?php  $comm_avg= $empinfo->m_team_management_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager both-checked-indi">
                                                                Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                            </span>
                                                        </div>
                                                        <input type="hidden" name="m_team_management_emp_avg_old" value="<?php echo $empinfo->m_team_management_emp_avg; ?>">
                                                    </td>

                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="team_management_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->team_management_comments; ?></textarea>
                                                            <input type="hidden" name="team_management_comments_old" value="<?php echo $empinfo->team_management_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_team_management_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_team_management_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="navs-justified-reliability-professionalism" role="tabpanel">
                                            <h4>Reliability & Professionalism</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                1. Finishes tasks without constant supervision within set deadlines
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Self-sufficient with their skills and efficient with their questions to allow for their supervisor and teammates to work with minimum interruption</span>">
                                                                </i>
                                                                </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_reliability_question_1 === $empinfo->reliability_question_1){
                                                                    $same_reliability_question_1 = $empinfo->m_reliability_question_1;
                                                                }else{
                                                                    $same_reliability_question_1 = false;
                                                                }

                                                                if($empinfo->reliability_question_1==0){
                                                                    $NA_reliability_question_1 = 6;
                                                                }else{
                                                                    $NA_reliability_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_1" value="<?php echo $empinfo->m_reliability_question_1; ?>">
                                                            <input type="hidden" name="e_reliability_question_1" value="<?php echo $empinfo->reliability_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                2. Produces deliverables that are above expectation
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proactively provides further information, data or drawings to compliment and support an argument to enhance deliverables</span>">
                                                                </i>                
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_reliability_question_2 === $empinfo->reliability_question_2){
                                                                    $same_reliability_question_2 = $empinfo->m_reliability_question_2;
                                                                }else{
                                                                    $same_reliability_question_2 = false;
                                                                }

                                                                if($empinfo->reliability_question_2==0){
                                                                    $NA_reliability_question_2 = 6;
                                                                }else{
                                                                    $NA_reliability_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_2" value="<?php echo $empinfo->m_reliability_question_2; ?>">
                                                            <input type="hidden" name="e_reliability_question_2" value="<?php echo $empinfo->reliability_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                3. Takes ownership of job duty and holds himself/herself accountable for them 
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proud of their work to share with teammates to strengthen the knowledge and backbone of the team</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_reliability_question_3 === $empinfo->reliability_question_3){
                                                                    $same_reliability_question_3 = $empinfo->m_reliability_question_3;
                                                                }else{
                                                                    $same_reliability_question_3 = false;
                                                                }

                                                                if($empinfo->reliability_question_3==0){
                                                                    $NA_reliability_question_3 = 6;
                                                                }else{
                                                                    $NA_reliability_question_3 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_3" value="<?php echo $empinfo->m_reliability_question_3; ?>">
                                                            <input type="hidden" name="e_reliability_question_3" value="<?php echo $empinfo->reliability_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            4. Strive to cultivate and maintain positive working relationships and respect toward co-workers
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Maintains a respectful, collaborative environment to allow for good moral support in achieving team goals</span>">
                                                            </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_reliability_question_4 === $empinfo->reliability_question_4){
                                                                    $same_reliability_question_4 = $empinfo->m_reliability_question_4;
                                                                }else{
                                                                    $same_reliability_question_4 = false;
                                                                }

                                                                if($empinfo->reliability_question_4==0){
                                                                    $NA_reliability_question_4 = 6;
                                                                }else{
                                                                    $NA_reliability_question_4 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_4" value="<?php echo $empinfo->m_reliability_question_4; ?>">
                                                            <input type="hidden" name="e_reliability_question_4" value="<?php echo $empinfo->reliability_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                5. Keeps a tidy workspace and proper care of the company’s equipment
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Maintains a clean working environment on the company’s premises, particularly for shared workstations. Takes care of their assigned work equipment</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_reliability_question_5 === $empinfo->reliability_question_5){
                                                                    $same_reliability_question_5 = $empinfo->m_reliability_question_5;
                                                                }else{
                                                                    $same_reliability_question_5 = false;
                                                                }

                                                                if($empinfo->reliability_question_5==0){
                                                                    $NA_reliability_question_5 = 6;
                                                                }else{
                                                                    $NA_reliability_question_5 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_5" value="<?php echo $empinfo->m_reliability_question_5; ?>">
                                                            <input type="hidden" name="e_reliability_question_5" value="<?php echo $empinfo->reliability_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                6. Attends and addresses company’s mandatory events/queries <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Including workshops, weekly meetings, surveys and questions addressed to the entire company</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_reliability_question_6 === $empinfo->reliability_question_6){
                                                                    $same_reliability_question_6 = $empinfo->m_reliability_question_6;
                                                                }else{
                                                                    $same_reliability_question_6 = false;
                                                                }

                                                                if($empinfo->reliability_question_6==0){
                                                                    $NA_reliability_question_6 = 6;
                                                                }else{
                                                                    $NA_reliability_question_6 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_6" value="<?php echo $empinfo->m_reliability_question_6; ?>">
                                                            <input type="hidden" name="e_reliability_question_6" value="<?php echo $empinfo->reliability_question_6; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>
                                                            
                                                            <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bx-circle'></i></i>
                                                            </span>
                                                                <?php  $comm_avg= $empinfo->reliability_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <?php  $comm_avg= $empinfo->m_reliability_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                                </span>
                                                            </div>
                                                           
                                                            <input type="hidden" name="m_reliability_emp_avg_old" value="<?php echo $empinfo->m_reliability_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="reliability_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->reliability_comments; ?></textarea>
                                                            <input type="hidden" name="reliability_comments" value="<?php echo $empinfo->reliability_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_reliability_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_reliability_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
>>>>>>> 8ce454d (new update employee portal v1.1.0)

                                        <div class="tab-pane fade" id="navs-justified-adaptability" role="tabpanel">
                                            <h4>Adaptability & Proactivity</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
<<<<<<< HEAD
                                                            1. Adapts to new project standards, new job requirements in a short amount of time
=======
                                                            1. Adapts to new project standards, new job requirements in a short amount of time <span class="gray-font-scoring">(sets the highest score in this category)</span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Can shift between teams easily and adapt to the new project’s requirements</span>">
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_adaptability_productivity_question_1 === $empinfo->adaptability_productivity_question_1){
                                                                    $same_adaptability_productivity_question_1 = $empinfo->m_adaptability_productivity_question_1;
                                                                }else{
                                                                    $same_adaptability_productivity_question_1 = false;
                                                                }

                                                                if($empinfo->adaptability_productivity_question_1==0){
                                                                $NA_adaptability_productivity_question_1 = 6;
                                                                }else{
                                                                $NA_adaptability_productivity_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_adaptability_productivity_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_adaptability_productivity_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->adaptability_productivity_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_adaptability_productivity_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_adaptability_productivity_question_1" value="<?php echo $empinfo->m_adaptability_productivity_question_1; ?>">
                                                            <input type="hidden" name="e_adaptability_productivity_question_1" value="<?php echo $empinfo->adaptability_productivity_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            2. Takes initiatives to ask questions and solve potential issues that may affect the project
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Looks forward into the project to identify potential challenges and brings it up to the team to brainstorm for solutions or adapt the tasks and schedules to avoid these potential problems</span>">
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_adaptability_productivity_question_2 === $empinfo->adaptability_productivity_question_2){
                                                                    $same_adaptability_productivity_question_2 = $empinfo->m_adaptability_productivity_question_2;
                                                                }else{
                                                                    $same_adaptability_productivity_question_2 = false;
                                                                }

                                                                if($empinfo->adaptability_productivity_question_2==0){
                                                                $NA_adaptability_productivity_question_2 = 6;
                                                                }else{
                                                                $NA_adaptability_productivity_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_adaptability_productivity_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_adaptability_productivity_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->adaptability_productivity_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_adaptability_productivity_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_adaptability_productivity_question_2" value="<?php echo $empinfo->m_adaptability_productivity_question_2; ?>">
                                                            <input type="hidden" name="e_adaptability_productivity_question_2" value="<?php echo $empinfo->adaptability_productivity_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
<<<<<<< HEAD
                                                            3. Learns new disciplines, software, and adapt this knowledge to projects
=======
                                                            3. Learns new disciplines, team_management, and adapt this knowledge to projects
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
<<<<<<< HEAD
                                                                title="<span>Desires to learn new knowledge to expand their skill set with further education, experimenting with new software and tools, and provide new solutions to their workflow</span>">
=======
                                                                title="<span>Desires to gain new knowledge to expand their skill set with further education, experimenting with new team_management and tools, and provide new solutions to their workflow</span>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_adaptability_productivity_question_3 === $empinfo->adaptability_productivity_question_3){
                                                                    $same_adaptability_productivity_question_3 = $empinfo->m_adaptability_productivity_question_3;
                                                                }else{
                                                                    $same_adaptability_productivity_question_3 = false;
                                                                }

                                                                if($empinfo->adaptability_productivity_question_3==0){
                                                                $NA_adaptability_productivity_question_3 = 6;
                                                                }else{
                                                                $NA_adaptability_productivity_question_3 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_adaptability_productivity_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_adaptability_productivity_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->adaptability_productivity_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_adaptability_productivity_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_adaptability_productivity_question_3" value="<?php echo $empinfo->m_adaptability_productivity_question_3; ?>">
                                                            <input type="hidden" name="e_adaptability_productivity_question_3" value="<?php echo $empinfo->adaptability_productivity_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            4. Thinks outside the box to suggest new ideas, workflows, innovations and products to improve the project
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Provides critical thinking to search for optimal or alternative solutions for tasks to avoid time consuming and error prone solutions</span>">
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_adaptability_productivity_question_4 === $empinfo->adaptability_productivity_question_4){
                                                                    $same_adaptability_productivity_question_4 = $empinfo->m_adaptability_productivity_question_4;
                                                                }else{
                                                                    $same_adaptability_productivity_question_4 = false;
                                                                }

                                                                if($empinfo->adaptability_productivity_question_4==0){
                                                                $NA_adaptability_productivity_question_4 = 6;
                                                                }else{
                                                                $NA_adaptability_productivity_question_4 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_adaptability_productivity_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_adaptability_productivity_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->adaptability_productivity_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_adaptability_productivity_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_adaptability_productivity_question_4" value="<?php echo $empinfo->m_adaptability_productivity_question_4; ?>">
                                                            <input type="hidden" name="e_adaptability_productivity_question_4" value="<?php echo $empinfo->adaptability_productivity_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
<<<<<<< HEAD
                                                        5. Handles multiple projects and teams simultaneously <span class="gray-font-scoring">(for Supervisors only, independent scoring)</span>
=======
                                                        5. Handles multiple projects and teams simultaneously <span class="gray-font-scoring">(for BIM Coordinators, BIM Managers, Support team, independent scoring)</span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                        <i class='bx bx-info-circle'
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
<<<<<<< HEAD
                                                            title="<span>Able to supervise more than one team at once without loosing sight of each project’s requirements, goals and challenges</span>">
=======
                                                            title="<span>Able to supervise more than one team at once without losing sight of each project’s requirements, goals and challenges</span>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                        </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_adaptability_productivity_question_5 === $empinfo->adaptability_productivity_question_5){
                                                                    $same_adaptability_productivity_question_5 = $empinfo->m_adaptability_productivity_question_5;
                                                                }else{
                                                                    $same_adaptability_productivity_question_5 = false;
                                                                }

                                                                if($empinfo->adaptability_productivity_question_5==0){
                                                                $NA_adaptability_productivity_question_5 = 6;
                                                                }else{
                                                                $NA_adaptability_productivity_question_5 = false;
                                                                }

                                                                    
                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_adaptability_productivity_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_adaptability_productivity_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->adaptability_productivity_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_adaptability_productivity_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_adaptability_productivity_question_5" value="<?php echo $empinfo->m_adaptability_productivity_question_5; ?>">
                                                            <input type="hidden" name="e_adaptability_productivity_question_5" value="<?php echo $empinfo->adaptability_productivity_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>
                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bx-circle'></i></i>
                                                            </span>
                                                                <?php  $comm_avg= $empinfo->productivity_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <?php  $comm_avg= $empinfo->m_productivity_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                                </span>
                                                            </div>
                                                        
                                                            <input type="hidden" name="m_productivity_emp_avg_old" value="<?php echo $empinfo->m_productivity_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="productivity_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->productivity_comments; ?></textarea>
                                                            <input type="hidden" name="productivity_comments_old" value="<?php echo $empinfo->productivity_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_productivity_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_productivity_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
<<<<<<< HEAD


                                        <div class="tab-pane fade" id="navs-justified-initiative-proactive" role="tabpanel">
                                            <h4>Initiative & Proactive</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>1. Identifies potential issues</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_initiative_proactive_question_1 === $empinfo->initiative_proactive_question_1){
                                                                    $same_initiative_proactive_question_1 = $empinfo->m_initiative_proactive_question_1;
                                                                }else{
                                                                    $same_initiative_proactive_question_1 = false;
                                                                }

                                                                if($empinfo->initiative_proactive_question_1==0){
                                                                $NA_initiative_proactive_question_1 = 6;
                                                                }else{
                                                                $NA_initiative_proactive_question_1 = false;
                                                                }
                                                                    
                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_initiative_proactive_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_initiative_proactive_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->initiative_proactive_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_initiative_proactive_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_initiative_proactive_question_1" value="<?php echo $empinfo->m_initiative_proactive_question_1; ?>">
                                                            <input type="hidden" name="e_initiative_proactive_question_1" value="<?php echo $empinfo->initiative_proactive_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>2. Proposes and suggests new ideas</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_initiative_proactive_question_2 === $empinfo->initiative_proactive_question_2){
                                                                    $same_initiative_proactive_question_2 = $empinfo->m_initiative_proactive_question_2;
                                                                }else{
                                                                    $same_initiative_proactive_question_2 = false;
                                                                }

                                                                if($empinfo->initiative_proactive_question_2==0){
                                                                $NA_initiative_proactive_question_2 = 6;
                                                                }else{
                                                                $NA_initiative_proactive_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_initiative_proactive_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_initiative_proactive_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->initiative_proactive_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_initiative_proactive_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_initiative_proactive_question_2" value="<?php echo $empinfo->m_initiative_proactive_question_2; ?>">
                                                            <input type="hidden" name="e_initiative_proactive_question_2" value="<?php echo $empinfo->initiative_proactive_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>3. Going extra mile if needed</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_initiative_proactive_question_3 === $empinfo->initiative_proactive_question_3){
                                                                    $same_initiative_proactive_question_3 = $empinfo->m_initiative_proactive_question_3;
                                                                }else{
                                                                    $same_initiative_proactive_question_3 = false;
                                                                }

                                                                if($empinfo->initiative_proactive_question_3==0){
                                                                $NA_initiative_proactive_question_3 = 6;
                                                                }else{
                                                                $NA_initiative_proactive_question_3 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_initiative_proactive_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_initiative_proactive_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->initiative_proactive_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_initiative_proactive_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_initiative_proactive_question_3" value="<?php echo $empinfo->m_initiative_proactive_question_3; ?>">
                                                            <input type="hidden" name="e_initiative_proactive_question_3" value="<?php echo $empinfo->initiative_proactive_question_3; ?>">
                                                        </td>
                                                    </tr>

                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bx-circle'></i></i>
                                                            </span>
                                                                <?php  $comm_avg= $empinfo->p_initiative_proactive_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <?php  $comm_avg= $empinfo->m_p_initiative_proactive_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                                </span>
                                                            </div>
                                                            <input type="hidden" name="m_p_initiative_proactive_emp_avg_old" value="<?php echo $empinfo->m_p_initiative_proactive_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="initiative_proactive_comments" cols="3" rows="3" disabled><?php echo $empinfo->initiative_proactive_comments; ?></textarea>
                                                            <input type="hidden" name="initiative_proactive_comments_old" value="<?php echo $empinfo->initiative_proactive_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_initiative_proactive_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_initiative_proactive_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="navs-justified-creativity-problem-solving" role="tabpanel">
                                            <h4>Creativity & Problem Solving</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>1. Ability to think outside the box</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_creativity_problem_question_1 === $empinfo->creativity_problem_question_1){
                                                                    $same_creativity_problem_question_1 = $empinfo->m_creativity_problem_question_1;
                                                                }else{
                                                                    $same_creativity_problem_question_1 = false;
                                                                }

                                                                if($empinfo->creativity_problem_question_1==0){
                                                                $NA_creativity_problem_question_1 = 6;
                                                                }else{
                                                                $NA_creativity_problem_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_creativity_problem_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_creativity_problem_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->creativity_problem_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_creativity_problem_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_creativity_problem_question_1" value="<?php echo $empinfo->m_creativity_problem_question_1; ?>">
                                                            <input type="hidden" name="e_creativity_problem_question_1" value="<?php echo $empinfo->creativity_problem_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>2. Offers creative solutions</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_creativity_problem_question_2 === $empinfo->creativity_problem_question_2){
                                                                    $same_creativity_problem_question_2 = $empinfo->m_creativity_problem_question_2;
                                                                }else{
                                                                    $same_creativity_problem_question_2 = false;
                                                                }

                                                                if($empinfo->creativity_problem_question_2==0){
                                                                $NA_creativity_problem_question_2 = 6;
                                                                }else{
                                                                $NA_creativity_problem_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_creativity_problem_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_creativity_problem_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->creativity_problem_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_creativity_problem_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_creativity_problem_question_2" value="<?php echo $empinfo->m_creativity_problem_question_2; ?>">
                                                            <input type="hidden" name="e_creativity_problem_question_2" value="<?php echo $empinfo->creativity_problem_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>3. Explores new ideas</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($empinfo->m_creativity_problem_question_3 === $empinfo->creativity_problem_question_3){
                                                                    $same_creativity_problem_question_3 = $empinfo->m_creativity_problem_question_3;
                                                                }else{
                                                                    $same_creativity_problem_question_3 = false;
                                                                }

                                                                if($empinfo->creativity_problem_question_3==0){
                                                                $NA_creativity_problem_question_3 = 6;
                                                                }else{
                                                                $NA_creativity_problem_question_3 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_creativity_problem_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->m_creativity_problem_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($empinfo->creativity_problem_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_creativity_problem_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_creativity_problem_question_3" value="<?php echo $empinfo->m_creativity_problem_question_3; ?>">
                                                            <input type="hidden" name="e_creativity_problem_question_3" value="<?php echo $empinfo->creativity_problem_question_3; ?>">
                                                        </td>
                                                    </tr>
                                       
                                                    <tr class="remove_bb">
                                                            <td>
                                                                <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                            </td>
                                                            <td>

                                                            <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bx-circle'></i></i>
                                                            </span>
                                                                <?php  $comm_avg= $empinfo->p_creativity_problem_solving_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <?php  $comm_avg= $empinfo->m_p_creativity_problem_solving_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                                </span>
                                                            </div>

                                                            
                                                            <input type="hidden" name="m_p_creativity_problem_solving_emp_avg_old" value="<?php echo $empinfo->m_p_creativity_problem_solving_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="creativity_problem_solving_comments" id="" cols="3" rows="3" disabled><?php echo $empinfo->creativity_problem_solving_comments; ?></textarea>
                                                            <input type="hidden" name="creativity_problem_solving_comments_old" value="<?php echo $empinfo->creativity_problem_solving_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_creativity_problem_solving_comments" cols="3" rows="3" placeholder="Please enter you comment" disabled><?php echo $empinfo->m_creativity_problem_solving_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
=======
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    </div>
                                </div>
                        </div>

                    <div class="row">
                        <div class="col-lg-12 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                <div id="chart_div_emp" style="width:100%; height: 700px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>                                           

                    </div>
                </div>
              <?php endif; ?>

            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-lg-4 col-md-6">
                        <div class="modal fade" id="editScoreEmp" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Are you sure you want to update the score?</h5>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-footer footer-flex">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                    </button>
                                    <a href="<?php echo base_url('Employee/displayEmployeeScores/'.$empinfo->emp_performance_id); ?>"><button type="button" class="btn btn-info">Go To Edit</button></a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="empScoreSubmit" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Are you sure you'd like to submit this evaluation? Changes can't be made after the submission.</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-footer footer-flex">
                    <hr>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                        </button>
                        <form action="<?php echo base_url('Employee/submitByEmployeePerformance'); ?>" method="POST">
                            <input type="hidden" name="performance_id" value="<?php echo $empinfo->emp_performance_id; ?>">                                      
                            <button type="submit" class="btn btn-success">Submit</button>                                        
                        </form>
                    </div>
                </div>
                </div>
            </div>

<<<<<<< HEAD
=======
            <div class="modal fade" id="empPrintOP" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">If you are having problems printing the evaluation page, apply these <a href="<?php echo base_url("assets_admin/img/illustrations/eep-print-settings.png"); ?>" target="_blank"><i class='bx bxs-cog'></i> settings.</a></h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-footer footer-flex">
                    <hr>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                        </button>
                        <a href="<?php echo base_url('Employee/printEmpDetails/'.$empinfo->emp_performance_id); ?>" class="btn btn-primary">
                            Print
                        </a>
                    </div>
                </div>
                </div>
            </div>

>>>>>>> 8ce454d (new update employee portal v1.1.0)

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>

          <?php 
            $start_date = $empinfo->emp_performance_start_date;
            $new_start_date = date("M-y", strtotime($start_date));

            $end_date = $empinfo->emp_performance_end_date;
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
                  ['Communication', <?php echo $empinfo->communication_emp_avg; ?>, '<?php echo $empinfo->communication_emp_avg; ?>', <?php echo $empinfo->m_communication_emp_avg; ?>, '<?php echo $empinfo->m_communication_emp_avg; ?>'],
                  ['Knowledge & Performance', <?php echo $empinfo->knowledge_performance_emp_avg; ?>, '<?php echo $empinfo->knowledge_performance_emp_avg; ?>', <?php echo $empinfo->m_knowledge_performance_emp_avg; ?>, '<?php echo $empinfo->m_knowledge_performance_emp_avg; ?>'],
                  ['Quality & Organization', <?php echo $empinfo->quality_emp_avg; ?>, '<?php echo $empinfo->quality_emp_avg; ?>', <?php echo $empinfo->m_quality_emp_avg; ?>, '<?php echo $empinfo->m_quality_emp_avg; ?>'],
                  ['Knowledge of Job', <?php echo $empinfo->knowledge_emp_avg; ?>, '<?php echo $empinfo->knowledge_emp_avg; ?>', <?php echo $empinfo->m_knowledge_emp_avg; ?>, '<?php echo $empinfo->m_knowledge_emp_avg; ?>'],
                  ['Knowledge of Software', <?php echo $empinfo->software_emp_avg; ?>, '<?php echo $empinfo->software_emp_avg; ?>', <?php echo $empinfo->m_software_emp_avg; ?>, '<?php echo $empinfo->m_software_emp_avg; ?>'],
                  ['Reliability & Professionalism', <?php echo $empinfo->reliability_emp_avg; ?>, '<?php echo $empinfo->reliability_emp_avg; ?>', <?php echo $empinfo->m_reliability_emp_avg; ?>, '<?php echo $empinfo->m_reliability_emp_avg; ?>'],
                  ['Task & Time Management', <?php echo $empinfo->time_management_emp_avg; ?>, '<?php echo $empinfo->time_management_emp_avg; ?>', <?php echo $empinfo->m_time_management_emp_avg; ?>, '<?php echo $empinfo->m_time_management_emp_avg; ?>'],
                  ['Adaptability & Proactivity', <?php echo $empinfo->productivity_emp_avg; ?>, '<?php echo $empinfo->productivity_emp_avg; ?>', <?php echo $empinfo->m_productivity_emp_avg; ?>, '<?php echo $empinfo->m_productivity_emp_avg; ?>'],
                  ['Initiative & Proactive', <?php echo $empinfo->p_initiative_proactive_emp_avg; ?>, '<?php echo $empinfo->p_initiative_proactive_emp_avg; ?>', <?php echo $empinfo->m_p_initiative_proactive_emp_avg; ?>, '<?php echo $empinfo->m_p_initiative_proactive_emp_avg; ?>'],
                  ['Creativity & Problem Solving', <?php echo $empinfo->p_creativity_problem_solving_emp_avg; ?>, '<?php echo $empinfo->p_creativity_problem_solving_emp_avg; ?>', <?php echo $empinfo->m_p_creativity_problem_solving_emp_avg; ?>, '<?php echo $empinfo->m_p_creativity_problem_solving_emp_avg; ?>']
=======
                  ['Quality & Organization', <?php echo $empinfo->quality_emp_avg; ?>, '<?php echo $empinfo->quality_emp_avg; ?>', <?php echo $empinfo->m_quality_emp_avg; ?>, '<?php echo $empinfo->m_quality_emp_avg; ?>'],
                  ['Knowledge & Performance', <?php echo $empinfo->knowledge_performance_emp_avg; ?>, '<?php echo $empinfo->knowledge_performance_emp_avg; ?>', <?php echo $empinfo->m_knowledge_performance_emp_avg; ?>, '<?php echo $empinfo->m_knowledge_performance_emp_avg; ?>'],
                  ['Communication', <?php echo $empinfo->communication_emp_avg; ?>, '<?php echo $empinfo->communication_emp_avg; ?>', <?php echo $empinfo->m_communication_emp_avg; ?>, '<?php echo $empinfo->m_communication_emp_avg; ?>'],
                  ['Task & Time Management', <?php echo $empinfo->time_management_emp_avg; ?>, '<?php echo $empinfo->time_management_emp_avg; ?>', <?php echo $empinfo->m_time_management_emp_avg; ?>, '<?php echo $empinfo->m_time_management_emp_avg; ?>'],
                  ['Team Management', <?php echo $empinfo->team_management_emp_avg; ?>, '<?php echo $empinfo->team_management_emp_avg; ?>', <?php echo $empinfo->m_team_management_emp_avg; ?>, '<?php echo $empinfo->m_team_management_emp_avg; ?>'],
                  ['Reliability & Professionalism', <?php echo $empinfo->reliability_emp_avg; ?>, '<?php echo $empinfo->reliability_emp_avg; ?>', <?php echo $empinfo->m_reliability_emp_avg; ?>, '<?php echo $empinfo->m_reliability_emp_avg; ?>'],
                  ['Adaptability & Proactivity', <?php echo $empinfo->productivity_emp_avg; ?>, '<?php echo $empinfo->productivity_emp_avg; ?>', <?php echo $empinfo->m_productivity_emp_avg; ?>, '<?php echo $empinfo->m_productivity_emp_avg; ?>'],
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
                var chart = new google.visualization.BarChart(document.getElementById('chart_div_emp'));
                chart.draw(data, options);
              }
    </script>