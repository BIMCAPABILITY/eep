
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold "><a href="<?php echo base_url('Admin/showEmployeeInfo/'.$empdata->main_employee_id); ?>"><i class='bx bx-left-arrow-alt'></i> BACK</a></h4>
              <h4 class="fw-bold py-1 mb-2"><span class="text-muted fw-light">Employee Details / </span> Edit Profile Profile</h4>
              <div class="row">
              <form action="<?php echo base_url('Admin/submitEditEMPProfile'); ?>" method="POST" enctype="multipart/form-data">
              <div class="col-md-12">
                  <?php if($uploaded = $this->session->flashdata('self_emp_update_success')): ?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <strong><?php echo $uploaded; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <?php elseif($tryAgain = $this->session->flashdata('self_emp_not_updated')): ?>
                          <div class="alert alert-danger alert-dismissible" role="alert">
                          <strong><?php echo $tryAgain; ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        <?php endif; ?>
                  </div>
                </div>
                <span class="emp-list-addbtn">
                  <button type="submit" class="btn btn-success"><i class='bx bx-check' ></i> Update</button>
                </span>

                <input type="hidden" id="employee_id" name="employee_id" value="<?php echo $empdata->main_employee_id; ?>">

                <div class="col-md-12">
                  <div class="card mb-2">
                    <div class="card-body ed-bg">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                          <div class="holder emp-pic-edit">
                          <img
                            src="<?php echo base_url($empdata->employee_image); ?>"
                            alt="user-avatar"
                            class="d-block rounded"
                            height="100"
                            width="100"
                            id="imgPreview"
                          /> 
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                              name="employee_image"
                            />
                          </label>
                          
                        </div>
                        <div class="emp_info">
                            <table class="ed-table-s">
                            <tbody>
                              <tr class="mb-5-emp-edit">
                                <td class="label-gry">First Name &nbsp;&nbsp;</td>
                                <td> 
                                  <div class="ed-heah-name"> 
                                    <input type="text" class="form-control" name="employee_first_name" value="<?php echo $empdata->employee_first_name; ?>">
                                  </div>
                                </td>
                              </tr>
                              <tr class="mb-5-emp-edit">
                                <td class="label-gry">Last Name &nbsp;&nbsp;</td>
                                <td> 
                                  <div class="ed-heah-name"> 
                                    <input type="text" class="form-control" name="employee_last_name" value="<?php echo $empdata->employee_last_name; ?>">
                                  </div>
                                </td>
                              </tr>
                              <tr class="mb-5-emp-edit">
                                <td class="label-gry">Department &nbsp;&nbsp;</td>
                                <td>
                                   <select id="department_id" name="employee_department" class="select2 form-select">
                                        <option selected disabled><?php echo $empdata->department_name; ?></option>
                                        <?php if($departments): ?>
                                            <?php foreach($departments as $data): ?>
                                              <option value="<?php echo $data->department_id; ?>"><?php echo $data->department_name; ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select> 
                                  <input type="hidden" name="old_employee_department" value="<?php echo $empdata->employee_department; ?>">
                                </td>
                              </tr>
                              <tr class="mb-5-emp-edit">
                                <td class="label-gry">Designation</td>
                                <td>
                                  <div>
                                    <select id="designation_id" name="employee_designation" class="select2 form-select">
                                    <option selected disabled><?php echo $empdata->employee_designation; ?></option>
                                    </select>
                                    <input type="hidden" name="old_employee_designation" value="<?php echo $empdata->employee_designation; ?>">
                                  </div>
                                </td>
                              </tr>
                              <tr class="mb-5-emp-edit">
                                <td class="label-gry">DOJ</td>
                                <td>
                                  <input class="form-control" name="ed_individual_profile_doj" type="date" id="html5-date-input" value="<?php echo $individual->ed_individual_profile_doj; ?>">
                                </td>
                              </tr>
<<<<<<< HEAD
=======
                              <tr class="mb-5-emp-edit">
                                <td class="label-gry" style="position: absolute;">Level</td>
                                <td>
                                  <?php

                                      if(($empdata->emp_level)==2){
                                        $level = 'Employee';
                                      }elseif(($empdata->emp_level)==3){
                                        $level = 'Manager';
                                      }else{
                                        $level = 'Select Level';
                                      }

                                  ?>
                                  <select class="select2 form-select" name="emp_level" id="">
                                      <option value="" selected disabled><?php echo $level; ?></option>
                                      <option value="2">Employee</option>
                                      <option value="3">Manager</option>
                                  </select>
                                </td>
                              </tr>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                              <tr>
                                <td class="label-gry">
                                  <span>Skills&nbsp;&nbsp;&nbsp;</span>
                                </td>
                                <td>
                                <div class="eep-status-cover set-width-check">
                                <span class="form-check">
                                    <div><label for="ARC"> ARC </label></div>
                                            <?php if(($skills->ed_arc)==1):?>
                                                <input class="form-check-input" name="ed_arc" type="checkbox" value="1" id="disabledCheck1" checked>
                                            <?php else: ?>
                                                <input class="form-check-input" name="ed_arc" type="checkbox" value="1" id="disabledCheck1">
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="STR"> STR </label></div>
                                            <?php if(($skills->ed_str)==1):?>
                                                <input class="form-check-input" name="ed_str" type="checkbox" value="1" id="disabledCheck1" checked>
                                            <?php else: ?>
                                                <input class="form-check-input" name="ed_str" type="checkbox" value="1" id="disabledCheck1">
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="MEP"> MEP </label></div>
                                            <?php if(($skills->ed_mep)==1):?>
                                                <input class="form-check-input" name="ed_mep" type="checkbox" value="1" id="disabledCheck1" checked>
                                            <?php else: ?>
                                                <input class="form-check-input" name="ed_mep" type="checkbox" value="1" id="disabledCheck1">
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="MGMT"> MGMT </label></div>
                                            <?php if(($skills->ed_mgmt)==1):?>
                                                <input class="form-check-input" name="ed_mgmt" type="checkbox" value="1" id="disabledCheck1" checked>
                                            <?php else: ?>
                                                <input class="form-check-input" name="ed_mgmt" type="checkbox" value="1" id="disabledCheck1">
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="DOCS"> DOCS </label></div>
                                            <?php if(($skills->ed_docs)==1):?>
                                                <input class="form-check-input" name="ed_docs" type="checkbox" value="1" id="disabledCheck1" checked>
                                            <?php else: ?>
                                                <input class="form-check-input" name="ed_docs" type="checkbox" value="1" id="disabledCheck1">
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="4D"> 4D </label></div>
                                            <?php if(($skills->ed_4d)==1):?>
                                                <input class="form-check-input" name="ed_4d" type="checkbox" value="1" id="disabledCheck1" checked>
                                            <?php else: ?>
                                                <input class="form-check-input" name="ed_4d" type="checkbox" value="1" id="disabledCheck1">
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="ClASH"> CLASH </label></div>
                                            <?php if(($skills->ed_clash)==1):?>
                                                <input class="form-check-input" name="ed_clash" type="checkbox" value="1" id="disabledCheck1" checked>
                                            <?php else: ?>
                                                <input class="form-check-input" name="ed_clash" type="checkbox" value="1" id="disabledCheck1">
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="DYNA"> DYNA </label></div>
                                            <?php if(($skills->ed_dyna)==1):?>
                                                <input class="form-check-input" name="ed_dyna" type="checkbox" value="1" id="disabledCheck1" checked>
                                            <?php else: ?>
                                                <input class="form-check-input" name="ed_dyna" type="checkbox" value="1" id="disabledCheck1">
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="RNDR"> RNDR </label></div>
                                            <?php if(($skills->ed_rndr)==1):?>
                                                <input class="form-check-input" name="ed_rndr" type="checkbox" value="1" id="disabledCheck1" checked>
                                            <?php else: ?>
                                                <input class="form-check-input" name="ed_rndr" type="checkbox" value="1" id="disabledCheck1">
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="MRKT"> MRKT </label></div>
                                            <?php if(($skills->ed_mrkt)==1):?>
                                                <input class="form-check-input" name="ed_mrkt" type="checkbox" value="1" id="disabledCheck1" checked>
                                            <?php else: ?>
                                                <input class="form-check-input" name="ed_mrkt" type="checkbox" value="1" id="disabledCheck1">
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="BD"> BD </label></div>
                                            <?php if(($skills->ed_bd)==1):?>
                                                <input class="form-check-input" name="ed_bd" type="checkbox" value="1" id="disabledCheck1" checked>
                                            <?php else: ?>
                                                <input class="form-check-input" name="ed_bd" type="checkbox" value="1" id="disabledCheck1">
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="label-gry" style="position: absolute;">Goals</td>
                                <td>
                                    <span> 
                                        <i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Immediate Goals" aria-label="Immediate Goals"></i>
                                        <div class="btn-group">
<<<<<<< HEAD
                                            <button type="button" id="goals1" class="btn btn-xs btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">2023 Week 18</button>
                                            <span class="dropdown-menu" style="">
                                                <input type="hidden" name="goals_type" id="goals_hidden1" class="form-control" value="2023 Week 18">
                                                <textarea name="goals_description" id="goals_input1" value="" class="form-control" ></textarea>
                                            </span>
=======
                                            <button type="button" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#goals1">Current Goals</button>
                                            <div class="modal fade" id="goals1" tabindex="-1" role="dialog" aria-labelledby="goals1ModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="heading-model-goal">
                                                            <h5>Current Goals</h5>
                                                            <span>Immediate Goals</span>
                                                        </div>
                                                        <button
                                                            type="button"
                                                            class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"
                                                        ></button>
                                                    </div>
                                                        <div class="modal-body">
                                                            <div class="goals-section-two">
                                                                <div class="goal-boxes">
                                                                    <div class="goal-box">
                                                                        <textarea name="current_goals" class="form-control" cols="5" rows="3"><?php echo $goal->current_goals; ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Set & Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        </div>
                                    </span>
                                    &nbsp;&nbsp;
                                    <span> 
<<<<<<< HEAD
                                        <i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Short term goals to be achieved within 6 months" aria-label="Short term goals to be achieved within 6 months"></i>
                                        <div class="btn-group">
                                            <button type="button" id="goals2" class="btn btn-xs btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">2023 Week 45</button>
                                            <span class="dropdown-menu" style="">
                                                <input type="hidden" name="goals_type" id="goals_hidden2" class="form-control" value="2023 Week 45">
                                                <textarea name="goals_description" id="goals_input2" class="form-control" ></textarea>
                                            </span>
=======
                                        <i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Goals to be achieved within 6 months" aria-label="Goals to be achieved within 6 months"></i>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#goals2">Short-Term Goals</button>
                                            <div class="modal fade" id="goals2" tabindex="-1" role="dialog" aria-labelledby="goals2ModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="heading-model-goal">
                                                            <h5>Short-Term Goals</h5>
                                                            <span>Goals to be achieved within 6 months</span>
                                                        </div>
                                                        <button
                                                            type="button"
                                                            class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"
                                                        ></button>
                                                    </div>
                                                        <div class="modal-body">
                                                            <div class="goals-section-two">
                                                                <div class="goal-boxes">
                                                                    <div class="goal-box">
                                                                        <textarea name="short_term_goals" class="form-control" cols="5" rows="3"><?php echo $goal->short_term_goals; ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Set & Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        </div>
                                    </span>
                                    &nbsp;&nbsp;
                                    <span> 
<<<<<<< HEAD
                                        <i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Mid term goals to be achieved within 12 months" aria-label="Mid term goals to be achieved within 12 months"></i>
                                        <div class="btn-group">
                                            <button type="button" id="goals3" class="btn btn-xs btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">2024 Week 18</button>
                                            <span class="dropdown-menu" style="">
                                                <input type="hidden" name="goals_type" id="goals_hidden3" class="form-control" value="2024 Week 18">
                                                <textarea name="goals_description" id="goals_input3" class="form-control" ></textarea>
                                            </span>
=======
                                        <i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Goals to be achieved within 12 months" aria-label="Goals to be achieved within 12 months"></i>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#goals3">Mid-Term Goals</button>
                                            <div class="modal fade" id="goals3" tabindex="-1" role="dialog" aria-labelledby="goals3ModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="heading-model-goal">
                                                            <h5>Mid-Term Goals</h5>
                                                            <span>Goals to be achieved within 12 months</span>
                                                        </div>
                                                        <button
                                                            type="button"
                                                            class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"
                                                        ></button>
                                                    </div>
                                                        <div class="modal-body">
                                                            <div class="goals-section-two">
                                                                <div class="goal-boxes">
                                                                    <div class="goal-box">
                                                                        <textarea name="mid_term_goals" class="form-control" cols="5" rows="3"><?php echo $goal->mid_term_goals; ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Set & Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        </div>
                                    </span>
                                    &nbsp;&nbsp;
                                    <span> 
<<<<<<< HEAD
                                        <i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Long term goals to be achieved within 18 months" aria-label="Long term goals to be achieved within 18 months"></i>
                                        <div class="btn-group">
                                            <button type="button" id="goals4" class="btn btn-xs btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">2024 Week 45</button>
                                            <span class="dropdown-menu" style="">
                                                <input type="hidden" name="goals_type" id="goals_hidden4" class="form-control" value="2024 Week 45">
                                                <textarea type="text" name="goals_description" id="goals_input4" class="form-control" ></textarea>
                                            </span>
                                        </div>
                                    </span>
                                    <span>
                                        &nbsp; <a href="javascript:void(0)" id="refresh-goals"><i class='bx bx-refresh'></i></a>
                                    </span>
                                </td>
                              </tr>
                              <tr class="mb-5-emp-edit">
                                <td class="label-gry" style="position: absolute;">Level</td>
                                <td>
                                  <?php

                                      if(($empdata->emp_level)==2){
                                        $level = 'Employee';
                                      }elseif(($empdata->emp_level)==3){
                                        $level = 'Manager';
                                      }else{
                                        $level = 'Select Level';
                                      }

                                  ?>
                                  <select class="select2 form-select" name="emp_level" id="">
                                      <option value="" selected disabled><?php echo $level; ?></option>
                                      <option value="2">Employee</option>
                                      <option value="3">Manager</option>
                                  </select>
=======
                                        <i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Goals to be achieved within 18 months" aria-label="Goals to be achieved within 18 months"></i>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#goals4">Long-Term Goals</button>
                                            <div class="modal fade" id="goals4" tabindex="-1" role="dialog" aria-labelledby="goals3ModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="heading-model-goal">
                                                            <h5>Long-Term Goals</h5>
                                                            <span>Goals to be achieved within 18 months</span>
                                                        </div>
                                                        <button
                                                            type="button"
                                                            class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"
                                                        ></button>
                                                    </div>
                                                        <div class="modal-body">
                                                            <div class="goals-section-two">
                                                                <div class="goal-boxes">
                                                                    <div class="goal-box">
                                                                        <textarea name="long_term_goals" class="form-control" cols="5" rows="3"><?php echo $goal->long_term_goals; ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Set & Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                </td>
                              </tr>
                              <input type="hidden" name="old_emp_level" value="<?php echo $empdata->emp_level; ?>">
                            </tbody>
                          </table>
                        </div>
                    <div>
                          <div class="eep-status-cover">
                              <span class="label-gry">Status &nbsp;&nbsp;&nbsp;</span>
                                <span class="form-check">
                                    <div><label for="part_time"> PART </label></div>
                                    <?php if(($status->ed_part_full)==1): ?>
                                        <input class="form-check-input" name="ed_part_full" type="radio" value="1" id="part_time" checked>
                                    <?php else: ?>
                                        <input class="form-check-input" name="ed_part_full" type="radio" value="1" id="part_time">
                                    <?php endif; ?>
                                </span>
                                <span class="form-check">
                                    <div><label for="full_time"> FULL </label></div>
                                    <?php if(($status->ed_part_full)==2): ?>
                                        <input class="form-check-input" name="ed_part_full" type="radio" value="2" id="full_time" checked>
                                    <?php else: ?>
                                        <input class="form-check-input" name="ed_part_full" type="radio" value="2" id="full_time">
                                    <?php endif; ?>
                                </span>
                            </div>
                          </div>
                      </div>
                    </div>
                    <hr class="my-0" />

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                              <div class="ed-basic-mid">
                                  <div class="ed-head-t">
<<<<<<< HEAD
                                      <label for="">Experience</label>
=======
                                      <label for="">Work Experience</label>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div>
                                    <textarea name="ed_experience" class="form-control" cols="20" rows="10" placeholder="Enter your experience"><?php echo $experience->ed_experience; ?></textarea>
                                  </div>

<<<<<<< HEAD

                                  <?php if($salary): ?>
                                  <div class="ed-head-t">
                                      <label for="">Salary History</label>
                                  </div>
                                        <div class="row">
                                            <div class="col-lg-6"></div>
                                              <div class="col-lg-6">
                                                  <span class="child-label-ed">
                                                  <label for="">Currency</label>
                                                  <input type="text" class="form-control" name="ed_salary_currency" value="<?php echo $salary->ed_salary_currency; ?>" style="width:60px;">
                                                  </span>
                                              </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                                <label for="" class="font-s-13">Date</label>
                                                <span class="child-label-ed" style="">
                                                    <input type="date" class="form-control" name="ed_salary_date" value="<?php echo $salary->ed_salary_date; ?>">
                                                </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="" class="font-s-13">Salary</label>
                                                <span class="child-label-ed">
                                                <input type="text" class="form-control" name="ed_salary_amount" value="<?php echo $salary->ed_salary_amount; ?>">
                                                </span>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                                <span class="child-label-ed" style="">
                                                    <input type="date" class="form-control" name="ed_salary_date2" value="<?php echo $salary->ed_salary_date2; ?>">
                                                </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <span class="child-label-ed">
                                                <input type="text" class="form-control" name="ed_salary_amount2" value="<?php echo $salary->ed_salary_amount2; ?>">
                                                </span>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                                <span class="child-label-ed" style="">
                                                    <input type="date" class="form-control" name="ed_salary_date3" value="<?php echo $salary->ed_salary_date3; ?>">
                                                </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <span class="child-label-ed">
                                                <input type="text" class="form-control" name="ed_salary_amount3" value="<?php echo $salary->ed_salary_amount3; ?>">
                                                </span>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                                <span class="child-label-ed" style="">
                                                    <input type="date" class="form-control" name="ed_salary_date4" value="<?php echo $salary->ed_salary_date4; ?>">
                                                </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <span class="child-label-ed">
                                                <input type="text" class="form-control" name="ed_salary_amount4" value="<?php echo $salary->ed_salary_amount4; ?>">
                                                </span>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                      
                                    <?php endif; ?>

=======
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  <div class="ed-basic-mid">
                                      <div class="ed-head-t">
                                          <label for="">Qualification</label>
                                      </div>
                                      <span>
                                      <textarea name="ed_qualification_text" class="form-control" cols="30" rows="10" placeholder="Enter your qualification"><?php echo $qualification->ed_qualification_text; ?></textarea>
                                    </span> 
                                  </div>
                              </div>
                            </div>
                            <div class="col-lg-5">
                              <div class="ed-basic-mid">
                                    <div class="ed-head-t">
                                        <div class="ed-basic-mid">
                                            <div class="ed-head-t">
                                                <label for="">Personal Details</label>
                                            </div>
                                            <div class="d-flex">
                                              <span class="child-label-ed w-100-d">
                                                <label for="">Email</label>
                                                <input type="text" name="ed_individual_profile_email" class="form-control" value="<?php echo $individual->ed_individual_profile_email; ?>">
                                              </span> 
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
                                                <label for="">Contact</label>
                                                <input class="form-control phone2" name="ed_individual_profile_contact" type="text" id="" placeholder="702 123 4567" value="<?php echo $individual->ed_individual_profile_contact; ?>">
                                              </span>
                                            </div>
                                            <div class="d-flex">
                                              <span class="child-label-ed w-100-d">
<<<<<<< HEAD
                                                <label for="">Age</label>
=======
                                                <label for="">Birthday</label>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                <input type="text" name="ed_individual_profile_age" class="form-control" value="<?php echo $individual->ed_individual_profile_age; ?>">
                                              </span> 
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
<<<<<<< HEAD
                                                <label for="">Interest</label>
=======
                                                <label for="">Hobby</label>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                <input type="text" name="ed_individual_profile_intrest" class="form-control" value="<?php echo $individual->ed_individual_profile_intrest; ?>">
                                              </span>
                                            </div>
                                            <div class="d-flex">
                                              <span class="child-label-ed w-100-d">
                                                <label for="">Address</label>
                                                <input type="text" name="ed_individual_profile_address" class="form-control" value="<?php echo $individual->ed_individual_profile_address; ?>">
                                              </span> 
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
<<<<<<< HEAD
                                                <label for=""></label>
=======
                                                <label for="">City</label>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                <input type="text" name="ed_individual_profile_city" class="form-control" value="<?php echo $individual->ed_individual_profile_city; ?>" placeholder="City">
                                              </span>
                                            </div>
                                            <div class="d-flex">
                                              <span class="child-label-ed w-100-d">
<<<<<<< HEAD
                                                <label for=""></label>
=======
                                                <label for="">Country</label>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                <select name="ed_individual_profile_country" id="address-country" class="select2 form-select form-control address-country2">
                                                <option value="" selected=""><?php echo $individual->ed_individual_profile_country; ?></option>
                                                  <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antartica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="France Metropolitan">France, Metropolitan</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                                    <option value="Korea">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao">Lao People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                                    <option value="Moldova">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                                    <option value="Span">Spain</option>
                                                    <option value="SriLanka">Sri Lanka</option>
                                                    <option value="St. Helena">St. Helena</option>
                                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syrian Arab Republic</option>
                                                    <option value="Taiwan">Taiwan, Province of China</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Viet Nam</option>
                                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                    <input type="hidden" name="old_country" value="<?php echo $individual->ed_individual_profile_country; ?>">
                                                  </span> 
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
                                                <label for="">Movie</label>
                                                <input type="text" name="ed_individual_profile_movie" class="form-control" value="<?php echo $individual->ed_individual_profile_movie; ?>">
                                              </span> 
                                            </div>
                                            <div class="d-flex">
                                            <span class="child-label-ed w-100-d">
                                                <label for="">Book</label>
                                                <input type="text" name="ed_individual_profile_book" class="form-control" value="<?php echo $individual->ed_individual_profile_book; ?>">
                                              </span>
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
                                                <label for="">TV Show</label>
                                                <input type="text" name="ed_individual_profile_tvshow" class="form-control" value="<?php echo $individual->ed_individual_profile_tvshow; ?>">
                                              </span> 
                                            </div>
                                            <div class="d-flex">
                                            <span class="child-label-ed w-100-d">
                                                <label for="">Color</label>
                                                <input type="text" name="ed_individual_profile_color" class="form-control" value="<?php echo $individual->ed_individual_profile_color; ?>">
                                              </span>
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
                                                <label for="">Music</label>
                                                <input type="text" name="ed_individual_profile_music" class="form-control" value="<?php echo $individual->ed_individual_profile_music; ?>">
                                              </span> 
                                            </div>
                                            <div class="d-flex">
                                            <span class="child-label-ed w-100-d">
                                                <label for="">Food</label>
                                                <input type="text" name="ed_individual_profile_food" class="form-control" value="<?php echo $individual->ed_individual_profile_food; ?>">
                                              </span>
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
<<<<<<< HEAD
                                                <label for=""></label>
                                                <input type="hidden" name="" class="form-control">
=======
                                                <label for="">Sports</label>
                                                <input type="text" name="ed_individual_profile_sports" class="form-control" value="<?php echo $individual->ed_individual_profile_sports; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                              </span>
                                            </div>

                                            <div class="ed-head-t">
                                                <label for="">Personality</label>
                                            </div>

                                            <div class="d-flex">
                                              <span class="child-label-ed">
                                                <label for="">Type</label>
                                                <input type="text" name="ed_personality_type" class="form-control" value="<?php echo $personality->ed_personality_type; ?>">
                                              </span> 
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed">
                                                <label for="">Role</label>
                                                <input type="text" name="ed_personality_role" class="form-control" value="<?php echo $personality->ed_personality_role; ?>">
                                              </span>
                                            </div>
                                            <div class="d-flex">
                                              <span class="child-label-ed">
                                                <label for="">Code</label>
                                                <input type="text" name="ed_personality_code" class="form-control" value="<?php echo $personality->ed_personality_code; ?>">
                                              </span> 
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed">
                                                <label for="">Strategy</label>
                                                <input type="text" name="ed_personality_strategy" class="form-control" value="<?php echo $personality->ed_personality_strategy; ?>">
                                              </span>
                                            </div>
                                            <br>


                                            <label for="">Mind &nbsp;&nbsp;</label>
                                            <div class="range-number-style">
                                                <input type="text" name="min_value_mind" class="slider-range-value-style" id="slider-range-mind1" value="<?php echo $personality->min_value_mind; ?>" style="width:40px; height:30px;" />%
                                                <span style="flex-basis: 260px"></span>
                                                <input type="text" name="max_value_mind" class="slider-range-value-style" id="slider-range-mind2" value="<?php echo $personality->max_value_mind; ?>" style="width:40px; height:30px;" />%
                                            </div>
<<<<<<< HEAD
                                            <div class="eep-status-cover d-flex">
=======
                                            <div class="eep-status-cover d-flex-center d-flex">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                <span class="personality-lable-point">Extroverted</span>
                                                   <span>
                                                        <div class="slider-hidden-style" id="mind-line"></div>
                                                   </span>
                                                <span class="personality-lable-point">Introverted</span>
                                            </div>
                                           
                                            <label for="">Energy &nbsp;&nbsp;</label>
                                            <div class="range-number-style">
                                                <input type="text" name="min_value_energy" class="slider-range-value-style" id="slider-range-energy1" value="<?php echo $personality->min_value_energy; ?>" style="width:40px; height:30px;" />%
                                                <span style="flex-basis: 260px"></span>
                                                <input type="text" name="max_value_energy" class="slider-range-value-style" id="slider-range-energy2" value="<?php echo $personality->max_value_energy; ?>" style="width:40px; height:30px;" />%
                                            </div>
<<<<<<< HEAD
                                            <div class="eep-status-cover d-flex">
=======
                                            <div class="eep-status-cover d-flex-center d-flex">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                <span class="personality-lable-point">Intuitive</span>
                                                   <span>
                                                        <div class="slider-hidden-style" id="energy-line"></div>
                                                   </span>
                                                <span class="personality-lable-point">Observant</span>
                                            </div>

                                            <label for="">Nature &nbsp;&nbsp;</label>
                                            <div class="range-number-style">
                                                <input type="text" name="min_value_nature" class="slider-range-value-style" id="slider-range-nature1" value="<?php echo $personality->min_value_nature; ?>" style="width:40px; height:30px;" />%
                                                <span style="flex-basis: 260px"></span>
                                                <input type="text" name="max_value_nature" class="slider-range-value-style" id="slider-range-nature2" value="<?php echo $personality->max_value_nature; ?>" style="width:40px; height:30px;" />%
                                            </div>
<<<<<<< HEAD
                                            <div class="eep-status-cover d-flex">
=======
                                            <div class="eep-status-cover d-flex-center d-flex">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                <span class="personality-lable-point">Thinking</span>
                                                   <span>
                                                        <div class="slider-hidden-style" id="nature-line"></div>
                                                   </span>
                                                <span class="personality-lable-point">Observant</span>
                                            </div>

                                            <label for="">Tactics &nbsp;&nbsp;</label>
                                            <div class="range-number-style">
                                                <input type="text" name="min_value_tactics" class="slider-range-value-style" id="slider-range-tactics1" value="<?php echo $personality->min_value_tactics; ?>" style="width:40px; height:30px;" />%
                                                <span style="flex-basis: 260px"></span>
                                                <input type="text" name="max_value_tactics" class="slider-range-value-style" id="slider-range-tactics2" value="<?php echo $personality->max_value_tactics; ?>" style="width:40px; height:30px;" />%
                                            </div>
<<<<<<< HEAD
                                            <div class="eep-status-cover d-flex">
=======
                                            <div class="eep-status-cover d-flex-center d-flex">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                <span class="personality-lable-point">Judging</span>
                                                   <span>
                                                        <div class="slider-hidden-style" id="tactics-line"></div>
                                                   </span>
                                                <span class="personality-lable-point">Prospecting</span>
                                            </div>

                                            <label for="">Identity &nbsp;&nbsp;</label>
                                            <div class="range-number-style">
                                                <input type="text" name="min_value_identity" class="slider-range-value-style" id="slider-range-identity1" value="<?php echo $personality->min_value_identity; ?>" style="width:40px; height:30px;" />%
                                                <span style="flex-basis: 260px"></span>
                                                <input type="text" name="max_value_identity" class="slider-range-value-style" id="slider-range-identity2" value="<?php echo $personality->max_value_identity; ?>" style="width:40px; height:30px;" />%
                                            </div>
<<<<<<< HEAD
                                            <div class="eep-status-cover d-flex">
=======
                                            <div class="eep-status-cover d-flex-center d-flex">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                <span class="personality-lable-point">Judging</span>
                                                   <span>
                                                        <div class="slider-hidden-style" id="identity-line"></div>
                                                   </span>
                                                <span class="personality-lable-point">Prospecting</span>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                              </div>
                            <div class="col-lg-4">
                            <div class="ed-basic-mid">
                                <div class="ed-head-t">
                                    <label for="">Software Expertise</label>
                                </div>
<<<<<<< HEAD
                                <div class="range-number-style">
                                    &nbsp; &nbsp; &nbsp;
                                    <span class="slider-range-software">BASIC</span>
                                    <span style="flex-basis: 120px"></span>
                                    <span class="slider-range-software">BIMCAP</span>
=======
                                <div class="eep-status-cover software-mb-2 software-mb-2  d-flex">
                                      <span class="ed-soft-icons"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php
                                            $x = 1;
                                            while($x <= 5) {
                                              echo "<span class='form-check m-set-radio'>".$x++."</span>";
                                            }
                                        ?>
                                        <span class="m-set-radio">N/A</span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                </div>
                                <div class="eep-status-cover software-mb-2 software-mb-2  d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Revit-logo.jpg'); ?>" alt="Software Logo">
                                        </span>
<<<<<<< HEAD
                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_revit==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_revit' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_revit' class='form-check-input' value='$x' /></span>";
=======
                                        <?php 
                                            $x = 1;
                                            while($x <= 6) {
                                            if($software->ed_software_revit==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_revit' class='form-check-input radio_software_1 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_revit' class='form-check-input radio_software_1' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_1"><i class="bx bx-refresh"></i></a></span> 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Navisworks-logo.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_navisworks==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_navisworks' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_navisworks' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_navisworks==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_navisworks' class='form-check-input radio_software_2 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_navisworks' class='form-check-input radio_software_2' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_2"><i class="bx bx-refresh"></i></a></span> 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/AutoCad-logoo.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_autocad==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_autocad' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_autocad' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_autocad==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_autocad' class='form-check-input radio_software_3 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_autocad' class='form-check-input radio_software_3' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_3"><i class="bx bx-refresh"></i></a></span> 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/rhinoceros-3d-logo-G.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_rhinoceros==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_rhinoceros' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_rhinoceros' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_rhinoceros==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_rhinoceros' class='form-check-input radio_software_4 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_rhinoceros' class='form-check-input radio_software_4' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_4"><i class="bx bx-refresh"></i></a></span> 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/3Ds-max-grey.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_3dsmax==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_3dsmax' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_3dsmax' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_3dsmax==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_3dsmax' class='form-check-input radio_software_5 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_3dsmax' class='form-check-input radio_software_5' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_5"><i class="bx bx-refresh"></i></a></span> 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/iconoDynMad.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_iconodynmad==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_iconodynmad' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_iconodynmad' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_iconodynmad==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_iconodynmad' class='form-check-input radio_software_6 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_iconodynmad' class='form-check-input radio_software_6' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_6"><i class="bx bx-refresh"></i></a></span> 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Enscape-loog.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_enscape==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_enscape' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_enscape' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_enscape==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_enscape' class='form-check-input radio_software_7 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_enscape' class='form-check-input radio_software_7' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_7"><i class="bx bx-refresh"></i></a></span> 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/AGACAD-icon-copy.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_agacad==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_agacad' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_agacad' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_agacad==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_agacad' class='form-check-input radio_software_8 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_agacad' class='form-check-input radio_software_8' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_8"><i class="bx bx-refresh"></i></a></span> 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/SketchUp-Logo.jpg'); ?>" alt="Software Logo">
                                        </span>
                                        
                                        <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_sketchup==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_sketchup' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_sketchup' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_sketchup==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_sketchup' class='form-check-input radio_software_9 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_sketchup' class='form-check-input radio_software_9' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_9"><i class="bx bx-refresh"></i></a></span> 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Microsoft_Word-Logo.wine-edited.jpg'); ?>" alt="Software Logo">
                                        </span>


                                        <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_msword==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_msword' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_msword' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_msword==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_msword' class='form-check-input radio_software_10 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_msword' class='form-check-input radio_software_10' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_10"><i class="bx bx-refresh"></i></a></span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Microsoft-Excel-Logo-edited.jpg'); ?>" alt="Software Logo">
                                        </span>

                                       <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_msexcel==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_msexcel' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_msexcel' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_msexcel==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_msexcel' class='form-check-input radio_software_11 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_msexcel' class='form-check-input radio_software_11' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_11"><i class="bx bx-refresh"></i></a></span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Photoshop-logo.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_photoshop==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_photoshop' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_photoshop' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_photoshop==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_photoshop' class='form-check-input radio_software_12 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_photoshop' class='form-check-input radio_software_12' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_12"><i class="bx bx-refresh"></i></a></span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Ai-logo.jpg'); ?>" alt="Software Logo">
                                        </span>


                                        <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_ai==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_ai' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_ai' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_ai==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_ai' class='form-check-input radio_software_13 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_ai' class='form-check-input radio_software_13' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_13"><i class="bx bx-refresh"></i></a></span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/InDesign-Logo-1024x998-edited.jpg'); ?>" alt="Software Logo">
                                        </span>


                                         <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_indesign==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_indesign' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_indesign' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_indesign==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_indesign' class='form-check-input radio_software_14 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_indesign' class='form-check-input radio_software_14' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_14"><i class="bx bx-refresh"></i></a></span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Ae-logo.jpg'); ?>" alt="Software Logo">
                                        </span>
                                        <?php
                                            $x = 1;
<<<<<<< HEAD
                                            while($x <= 10) {
                                            if($software->ed_software_ae==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_ae' class='form-check-input checked-edit' value='$x' checked /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_ae' class='form-check-input' value='$x' /></span>";
=======
                                            while($x <= 6) {
                                            if($software->ed_software_ae==$x){
                                                echo "<span class='form-check'><input type='radio' name='ed_software_ae' class='form-check-input radio_software_15 checked-edit' value='$x' /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' name='ed_software_ae' class='form-check-input radio_software_15' value='$x' /></span>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
<<<<<<< HEAD
=======
                                        <span><a href="javascript:void(0)" id="refersh_software_15"><i class="bx bx-refresh"></i></a></span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                  </div>
                            </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <span class="emp-list-addbtn2">
                    <button type="submit" class="btn btn-success"><i class='bx bx-check' ></i> Update</button>
                </span>
        </form>
<!-- Edit Employee Details -->

<form action="<?php echo base_url('Employee/UpdateEmpData'); ?>" method="POST" enctype="multipart/form-data">
    <div class="card-body">
        <div class="row gy-3">
            <div class="col-lg-4 col-md-6">
                <div class="modal fade" id="<?php echo 'empEdit'.$empdata->main_employee_id; ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Update Profile Information?</h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                        <div class="card mb-2">
                        <input type="hidden" name="main_employee_id" value="<?php echo $empdata->main_employee_id; ?>">
                        <div class="card-body">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <div class="holder">
                              <img
                                src="<?php echo base_url($empdata->employee_image); ?>"
                                alt="user-avatar"
                                class="d-block rounded"
                                height="100"
                                width="100"
                                id="imgPreview"
                                value="<?php echo base_url($empdata->employee_image); ?>"
                              /> 
                            </div>
                            <div class="button-wrapper">
                              <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input
                                  type="file"
                                  id="upload"
                                  class="account-file-input"
                                  hidden
                                  accept="image/png, image/jpeg"
                                  name="employee_image"
                                />
                                <input type="hidden" name="old_emp_img" value="<?php echo ($empdata->employee_image); ?>">
                              </label>
                              <p class="text-muted mb-0">Allowed JPG, JPEG or PNG. Image Resolution: 225px * 225px. Max size of 800K </p>
                            </div>
                          </div>
                        </div>

                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="row">
                              <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  id="firstName"
                                  name="employee_first_name"
                                  placeholder="John"
                                  value="<?php echo $empdata->employee_first_name; ?>"
                                  autofocus
                                />
                              </div>
                              <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="employee_last_name" id="lastName"  value="<?php echo $empdata->employee_last_name; ?>" placeholder="Doe" />
                              </div>
                              <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail <span>*</span></label>
                                <input
                                  class="form-control"
                                  type="text"
                                  id="email"
                                  name="employee_email"
                                  placeholder="john.doe@example.com"
                                  value="<?php echo $empdata->employee_email; ?>"
                                />
                              </div>

                              <div class="mb-3 col-md-6">
                                <label for="organization" class="form-label">Phone Number</label>
                                <div class="form-group md-group show-label">
                                  <input class="form-control" name="employee_number" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="<?php echo $empdata->employee_number; ?>">
                                </div>
                              </div>

                              <div class="mb-3 col-md-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="employee_address" value="<?php echo $empdata->employee_address; ?>" placeholder="Address" />
                              </div>
                              <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">City</label>
                                <input class="form-control" type="text" id="city" name="employee_city" value="<?php echo $empdata->employee_city; ?>" placeholder="City" />
                              </div>
                              <div class="mb-3 col-md-6">
                                <div class="form-group md-group show-label">
                                <label class="form-label" for="country">Country</label>
                                  <select name="employee_country" class="select2 form-select form-control" required data-parsley-trigger="keyup">
                                  <option value="" selected=""><?php echo $empdata->employee_country; ?></option>
                                  <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">France, Metropolitan</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon" selected>Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                    <option value="Moldova">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                  </div>
                                  <input type="hidden" name="old_country" value="<?php echo $empdata->employee_country; ?>">
                              </div>
                              <input type="hidden" name="old_department" value="<?php echo $empdata->employee_department; ?>">
                              <input type="hidden" name="old_designation" value="<?php echo $empdata->employee_designation; ?>">
                            </div>
                        </div>
                      </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- End Edit Employee Details -->

<!-- Edit Employee Details -->

<form action="<?php echo base_url('Admin/'); ?>" method="POST" enctype="multipart/form-data">
    <div class="card-body">
        <div class="row gy-3">
            <div class="col-lg-4 col-md-6">
                <div class="modal fade" id="<?php echo 'empScoreEdit'.$empdata->main_employee_id; ?>" tabindex="-1" aria-hidden="true">
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
                            <a href="<?php echo base_url('Admin/showEmployeeScores/'.$empinfo->main_employee_id); ?>"><button type="button" class="btn btn-info">Go To Edit</button></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</form>
