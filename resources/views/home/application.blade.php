@extends('templates.layout')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-1 d-none d-lg-block"></div>

        <div class="col-12 col-lg-9" id="form-container">
            <div class="my-5 mx-auto">
                <img src="{{asset('/images/cathlab_full.png')}}" alt="cathlab logo" style="width:80%;height:auto;">
            </div>
            <!-- <h4 class="mb-4">MEMBERSHIP APPLICATION FORM</h4> -->
            <form action="/application" method="POST">
            @csrf
            
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                @endforeach
            @endif
            <!--  ============================= START CARD SECTION ========================= -->
            <div class="card shadow mb-3">
                <h5 class="card-header text-light card-heading">PERSONAL DATA</h5>
                <div class="card-body">

                    <div class="row mb-3">

                        <div class="col-12 mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="membership_type" id="membership_type_1" value="1" checked>
                                <label class="form-check-label" for="membership_type_1">New Member</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="membership_type" id="membership_type_2" value="2">
                                <label class="form-check-label" for="membership_type_2">Renewal</label>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4 mb-3">
                            <label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Dela Cruz" aria-label="Last name" value="{{old('last_name')}}">
                        </div>

                        <div class="col-12 col-lg-4 mb-3">
                            <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Juan" aria-label="First name" value="{{old('first_name')}}">
                        </div>

                        <div class="col-12 col-lg-4 mb-3">
                            <label for="middle_name" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="middle_name" name="middle_name" aria-label="Middle name" placeholder="Optional" value="{{old('middle_name')}}">
                        </div>
                        
                        <div class="col-12 col-lg-4 mb-3">
                            <label for="birhday" class="form-label">Birthday <span class="text-danger">*</span> </label>
                            <input type="date" class="form-control" id="birhday" name="birthday" aria-label="birthday" placeholder="Optional" value="{{old('birthday')}}">
                        </div>

                        <div class="col-12 col-lg-4 mb-3">
                            <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                            <select class="form-select" name="gender">
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>

                        <div class="col-12 col-lg-4 mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span> </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="your.email@email.com" value="{{old('email')}}">
                        </div>

                        <div class="col-12 col-lg-4 mb-3">
                            <label for="contact_no" class="form-label">Contact # <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="" value="{{old('contact_no')}}">
                        </div>

                        <div class="col-12 col-lg-8 mb-3">
                            <label for="address" class="form-label">Address <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Your complete address" value="{{old('address')}}">
                        </div>
                        
                        <div class="col-12 col-lg-6 mb-3">
                            <label for="prc_no" class="form-label">PRC License # <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control" id="prc_no" name="prc_no" placeholder="" value="{{old('prc_no')}}">
                        </div>

                        <div class="col-12 col-lg-6 mb-3">
                            <label for="prc_date_issued" class="form-label">Date Issued <span class="text-danger">*</span> </label>
                            <input type="date" class="form-control" id="prc_date_issued" name="prc_date_issued" placeholder="" value="{{old('prc_date_issued')}}">
                        </div>

                        <div class="col-12 col-lg-8 mb-3">
                            <label for="hospital_affiliation" class="form-label">Hospital Affiliation</label>
                            <input type="text" class="form-control" id="hospital_affiliation" name="hospital_affiliation" placeholder="" value="{{old('hospital_affiliation')}}">
                        </div>

                        <div class="col-12 col-lg-4 mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" name="position" placeholder="" value="{{old('position')}}">
                        </div>

                        <div class="col-12 col-lg-4 mb-3">
                            <label for="bussiness_phone" class="form-label">Business Phone</label>
                            <input type="text" class="form-control" id="bussiness_phone" name="business_phone" placeholder="" value="{{old('business_phone')}}">
                        </div>

                        <div class="col-12 col-lg-4 mb-3">
                            <label for="number_of_years_employed" class="form-label">No. of Years Employed in Present Agency</label>
                            <input type="number" class="form-control" id="number_of_years_employed" name="number_of_years_employed" placeholder="" value="{{old('number_of_years_employed')}}">
                        </div>

                        <div class="col-12 col-lg-12 mb-3">
                            <label for="bussiness_address" class="form-label">Business Address</label>
                            <textarea class="form-control" id="bussiness_address" name="business_address" rows="3">{{old('business_address')}}</textarea>
                        </div>

                        <div class="col-12 col-lg-12 mb-3">
                            <label for="employment_history" class="form-label">Other Relevant Employment History</label>
                            <textarea class="form-control" id="employment_history" name="employment_history" rows="3">{{old('employment_history')}}</textarea>
                        </div>

                    </div>

                    <h5>Profession</h5>
                    <hr/>

                    <div class="row mb-3">

                        <div class="col-12 col-lg-4 mb-2">
                            <input class="form-check-input" type="checkbox" value="1" id="profession_1" name="profession">
                            <label class="form-check-label" for="profession_1">
                                Registered Nurse
                            </label>
                        </div>

                        <div class="col-12 col-lg-4 mb-2">
                            <input class="form-check-input" type="checkbox" value="2" id="profession_2" name="profession">
                            <label class="form-check-label" for="profession_2">
                                Registered Medical Technologist
                            </label>
                        </div>

                        <div class="col-12 col-lg-4 mb-2">
                            <input class="form-check-input" type="checkbox" value="3" id="profession_3" name="profession">
                            <label class="form-check-label" for="profession_3">
                                Registered Radiologic Technologist
                            </label>
                        </div>

                        <div class="col-12 col-lg-4 mb-2">
                            <input class="form-check-input" type="checkbox" value="4" id="profession_4">
                            <label class="form-check-label" for="profession_4" name="profession">
                                Others:
                            </label>
                            <input type="text" class="form-control form-control-sm mt-2" name="profession_other_text" value="{{old('profession_other_text')}}" placeholder="Please specify">
                        </div>

                        
                    </div>

                </div>
            </div>
            <!--  ============================= END CARD SECTION ========================= -->

            <!--  ============================= START CARD SECTION ========================= -->
            <div class="card shadow mb-3">
                <h5 class="card-header text-light card-heading">EDUCATIONAL BACKGROUND</h5>
                <div class="card-body">

                    <div class="row mb-3">

                        <div class="col-12 col-lg-6 mb-3">
                            <label for="college_university" class="form-label">College/University <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control" id="college_university" name="college_university" value="{{old('college_university')}}" placeholder="">
                        </div>

                        <div class="col-12 col-lg-6 mb-3">
                            <label for="college_university_degree" class="form-label">Degree <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control" id="college_university_degree" name="college_university_degree" value="{{old('college_university_degree')}}" placeholder="">
                        </div>

                        <div class="col-12 col-lg-6 mb-3">
                            <label for="post_graduate" class="form-label">Post-Graduate Study</label>
                            <input type="text" class="form-control" id="post_graduate" name="post_graduate" value="{{old('post_graduate')}}" placeholder="">
                        </div>

                        <div class="col-12 col-lg-6 mb-3">
                            <label for="post_graduate_degree" class="form-label">Degree</label>
                            <input type="text" class="form-control" id="post_graduate_degree" name="post_graduate_degree" value="{{old('post_graduate_degree')}}" placeholder="">
                        </div>

                        <div class="col-12 col-lg-12 mb-3">
                            <label for="other_degrees_earned" class="form-label">Other Degrees Earned</label>
                            <textarea class="form-control" id="other_degrees_earned" name="other_degree_earned" rows="3">{{old('other_degree_earned')}}</textarea>
                        </div>

                    </div>

                </div>
            </div>
            <!--  ============================= END CARD SECTION ========================= -->

            <!--  ============================= START CARD SECTION ========================= -->
            <div class="card shadow mb-3">
                <h5 class="card-header text-light card-heading">OTHER PROFESSIONAL ORGANIZATIONS</h5>
                <div class="card-body">

                    <div class="row mb-3">

                        <div class="row">
                            <span class="row">
                                <div class="col-12 col-lg-6 mb-3">
                                    <label for="orgranization_name" class="form-label">Name of Organization</label>
                                    <input type="text" class="form-control" id="orgranization_name" name="orgranization_name[]" placeholder="">
                                </div>
        
                                <div class="col-10 col-lg-5 mb-3">
                                    <label for="organization_position" class="form-label">Position/Membership Category</label>
                                    <input type="text" class="form-control" id="organization_position" name="organization_position[]" placeholder="">
                                </div>
        
                                <div class="col-2 col-lg-1 mb-3 d-flex flex-column align-items-center justify-content-end">
                                    <button type="button" class="btn btn-success btn-add-field">+</button>
                                </div>
                            </span>
                        </div>

                        <div class="row" id="dynamic-field-wrapper"></div>

                        <hr>
                        <div class="col-12 col-lg-12 mb-3">
                            <label for="awards" class="form-label">Awards/Honors Received / Publications</label>
                            <textarea class="form-control" id="awards" name="awards" rows="3">{{old('awards')}}</textarea>
                        </div>

                    </div>

                </div>
            </div>
            <!--  ============================= END CARD SECTION ========================= -->

            <!--  ============================= START CARD SECTION ========================= -->
            <div class="card shadow">
                <h5 class="card-header text-light card-heading">MEMBERSHIP CATEGORY</h5>
                <div class="card-body">

                    <div class="row mb-3">

                        <div class="col-12 col-lg-4 mb-2">
                            <input class="form-check-input" type="checkbox" value="1" id="membership_category_1" name="membership_category">
                            <label class="form-check-label" for="membership_category_1">
                                Regular
                            </label>
                        </div>

                        <div class="col-12 col-lg-4 mb-2">
                            <input class="form-check-input" type="checkbox" value="2" id="membership_category_2" name="membership_category">
                            <label class="form-check-label" for="membership_category_2">
                                Honorary
                            </label>
                        </div>

                        <div class="col-12 col-lg-4 mb-2">
                            <input class="form-check-input" type="checkbox" value="3" id="membership_category_3" name="membership_category">
                            <label class="form-check-label" for="membership_category_3">
                                Associate
                            </label>
                        </div>

                        <div class="col-12 col-lg-6 mb-2">
                            <input class="form-check-input" type="checkbox" value="4" id="membership_category_4" name="membership_category">
                            <label class="form-check-label" for="membership_category_4">
                                Others:
                            </label>
                            <input type="text" class="form-control form-control-sm mt-2" placeholder="Please specify" name="membership_category_other_text" value="{{old('membership_category_other_text')}}">
                        </div>

                        <div class="col-12 col-lg-6 mb-3">
                            <label for="picture"></label>
                            <input class="form-control" type="file" id="picture" name="picture">
                            <div id="emailHelp" class="form-text">Insert Recent Passport Size Photo on a White Background</div>
                        </div>

                        <div class="col-12 mt-4 mb-3 d-inline text-center">
                            <input class="form-check-input" type="checkbox" value="1" id="certify" name="certify">
                            <label class="form-check-label d-inline" for="certify">
                                &nbsp; I hereby certify that the above information is true and correct, to the best of my knowledge.
                            </label>
                        </div>

                        <div class="col-12 text-center">
                           <button type="submit" class="btn btn-primary" id="btn-submit" disabled>Submit Application</button>
                        </div>
            

                    </div>

                </div>
            </div>
            <!--  ============================= END CARD SECTION ========================= -->

            </form>

        </div>
        <div class="col-1 d-none d-lg-block"></div>
    </div>
</div>
@stop

@section('js')
$(document).ready(function() {
    let maxFields = 10;
    let addButton = $('.btn-add-field');
    let wrapper = $('#dynamic-field-wrapper');

    let initialCount = 1;
    $(addButton).click(function(e) {
        e.preventDefault();
        if(initialCount !== 10) {
            wrapper.append(`
                <span class="row">
                    <div class="col-12 col-lg-6 mb-3">
                        <label for="orgranization_name" class="form-label">Name of Organization</label>
                        <input type="text" class="form-control" id="orgranization_name" name="orgranization_name[]" placeholder="">
                    </div>

                    <div class="col-10 col-lg-5 mb-3">
                        <label for="organization_position" class="form-label">Position/Membership Category</label>
                        <input type="text" class="form-control" id="organization_position" name="organization_position[]" placeholder="">
                    </div>

                    <div class="col-2 col-lg-1 mb-3 d-flex flex-column align-items-center justify-content-end">
                        <button type="button" class="btn btn-danger btn-remove-field">-</button>
                    </div>
                </span>
            `);
            initialCount++;
            console.log(wrapper);
        }
        console.log(initialCount);
    });

    $(wrapper).on('click','.btn-remove-field',function(e) {
        e.preventDefault();
        $(this).parents('span').remove();
    });

    $("#certify").click(function() {
       let submit = $("#btn-submit");
       if($('#certify').is(':checked')) {
           submit.prop('disabled',false);
       } else {
           submit.prop('disabled',true);
       }
    });
})
@stop