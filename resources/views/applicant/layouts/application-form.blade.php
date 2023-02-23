@extends('home')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<style>
  form{
    background: #fff;
    margin: 100px;
    width: 100%;
    padding: 15px 40px 40px 40px;
}
/* Style the input fields */
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step{
  height: 50px;
  width: 50px;
  line-height: 50px;
  margin: 0 25px;
  color: white;
  background: #8b0000;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.25;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #8b0000;
}
.row{
margin-bottom: 1%;
}
.btn{
  background-color: #8b0000;
  color:#fff;
}
.btn:hover{
  background-color: #c80505;
  color:#fff;
}
</style>


<div class="main-panel">
  <div class="content-wrapper">
    <form action="dataInput" method="post" class="form" enctype="multipart/form-data">
      @csrf
      <h3 class="font-weight-bold">APPLICATION DATA ENTRY</h3> 
      <div align = center>
        <span class="step" id="step-1" >1</span>
        <span class="step" id="step-2" >2</span>
        <span class="step" id="step-3" >3</span>
        <span class="step" id="step-4" >4</span>
        <span class="step" id="step-5" >5</span>
        <span class="step" id="step-6" >6</span>
        <span class="step" id="step-7" >7</span>
        <span class="step" id="step-8" >8</span>
        <span class="step" id="step-9" >9</span>
      </div>
     
      <br/>
      <br/>
      <!--Application Information-->
      <div class="tab" id="tab-1">
        <h3>Application Information:</h3>
        <div class="row">
          <div class="col">
            <p>Application for:</p>
          </div>
          <div class="col">
            <select class="form-select" aria-label="Default select example" name="semester">
              <option selected>Select Semester</option>
              <option value="sem1">SY 2022 - 2023 2nd Trimester - Graduate Schoo/</option>
              <option value="sem2">SY 2022 - 2023 2nd Trimester - PhD</option>
              <option value="sem3">SY 2022 - 2023 3rd Trimester - Graduate School</option>
              <option value="sem4">SY 2022 - 2023 3rd Trimester - PhD</option>
              <option value="sem5">SY 2023 - 2024 1st Semester College</option>
              <option value="sem6">SY 2023 - 2024 1st Semester Senior High School</option>
              <option value="sem7">SY 2023 - 2024 1st Semester Junior High School</option>
            </select>
          </div>
          <div class="col">
            <p hidden>If you are an old student of HAU.</p>
          </div>
          
        </div>
        <div class="row">
          <div class="col">
            <p for="student-no" class="control-label">Old Student No:</p>
          </div>
          <div class="col">
            <p>N/A <a href="" name="">change</a></p>
          </div>
          <div class="col">
            <p>If you are an old student of HAU.</p>
          </div>
        </div>
        <hr style="border: 2px black solid;"/>
        <div class="row">
          <div class="col">
            <p for="date" class="control-label">Application Date:</p>
          </div>
          <div class="col">
            <p>2023-2-17</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p for="classification" class="control-label" required>Entry Classification:</p>
          </div>
          <div class="col">
            <select class="form-select" aria-label="Default select example" name="classification">
              <option value="class1" selected>Freshmen</option>
              <option value="class2">Transferee</option>
              <option value="class3">Cross-Enrollee</option>
              <option value="class4">Returnee</option>
              <option value="class5">Old Student</option>
              <option value="class6">Non Credit</option>
              <option value="class7">Methods</option>
              <option value="class8">Masterate</option>
              <option value="class9">Shifting/Returnee</option>
              <option value="class10">Shifter</option>
              <option value="class11">Second Courser</option>
            </select>
          </div>
          
          <div class="col">
            <p>Mandatory field. Classification applicant.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Education Type:</p>
          </div>
          <div class="col">
            <select class="form-select" aria-label="Default select example" name="eductype">
              <option value="educ1" selected>Select Type</option>
              <option value="educ2">College</option>
            </select>
          </div>
          <div class="col">
            <p hidden>Mandatory field. Classification applicant.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Course Applied:</p>
          </div>
          <div class="col">
            <select class="form-select" aria-label="Default select example" name="course">
              <option  selected>Select Type</option>
              <optgroup label="College of Criminal Justice Education & Forensics">
                <option value="course1">Bachelor of Science in Forensic Science</option>
                <option value="course2">Bachelor of Science in Criminology</option>
              </optgroup>
              <optgroup label="Junior High School">
                <option value="course3">Junior High School</option>
              </optgroup>
              <optgroup label="Graduate Certificate Program in Teaching">
                <option value="course4">Graduate Certificate Program in Teaching</option>
              </optgroup>
              <optgroup label="School of Arts and Sciences">
                <option value="course5">Bachelor of Arts in Communication</option>
                <option value="course6">Bachelor of Arts in Psychology</option>
                <option value="course7">Bachelor of Arts - Master of Arts in Psychology</option>
                <option value="course8">Bachelor of Science in Pyschology</option>
              </optgroup>
              <optgroup label="School of Business and Accountancy">
                <option value="course9">Bachelor of Science in Accountancy</option>
                <option value="course10">Bachelor of Science in Business Administration - Business Management</option>
                <option value="course11">Bachelor of Science in Business Administration - Legal Management</option>
                <option value="course12">Bachelor of Science in Business Administration - Marketing Management</option>
                <option value="course13">Bachelor of Science in Business Administration Major in Financial Management</option>
                <option value="course14">Bachelor of Science in Business Administration Major in Human Resource Management</option>
                <option value="course15">Bachelor of Science in Internal Auditing</option>
                <option value="course16">Bachelor of Science in Management Accounting</option>
              </optgroup>
              <optgroup label="School of Computing">
                <option value="course17">Bachelor of Science in Computer Science</option>
                <option value="course18">Bachelor of Science in Cybersecurity</option>
                <option value="course19">Bachelor of Science in Cybersecurity plus Professional Science Master</option>
                <option value="course20">Bachelor of Science in Entertainment and Multimedia Computing with Area of Specialization in Digital Animation</option>
                <option value="course21">Bacheclor of Science in Information Technology with Area of Specialization in Network Administration</option>
                <option value="course22">Bacheclor of Science in Information Technology with Area of Specialization in Web Development</option>
              </optgroup>
              <optgroup label="School of Education">
                <option value="course23">Bachelor of Elementary Education</option>
                <option value="course24">Bachelor of Physical Education</option>
                <option value="course25">Bachelor of Secondary Education Major in English</option>
                <option value="course26">Bachelor of Secondary Education Major in Filipino</option>
                <option value="course27">Bachelor of Secondary Education Major in Mathematics </option>
                <option value="course28">Bachelor of Secondary Education Major in Social Studies</option>
                <option value="course29">Bachelor of Secondary Education Major in Religious and Values Education</option>
                <option value="course30">Bachelor of Secondary Education Major in Science</option>
                <option value="course31">Bachelor of Special Needs Education</option>
              </optgroup>
              <optgroup label="School of Engineering and Architecture">
                <option value="course32">Bachelor of Science in Aeronautical Engineering</option>
                <option value="course33">Bachelor of Science in Architecture</option>
                <option value="course34">Bachelor of Science in Civil Engineering</option>
                <option value="course35">Bachelor of Science in Computer Engineering</option>
                <option value="course36">Bachelor of Science in Electrical Engineering</option>
                <option value="course37">Bachelor of Science in Electronics Engineering</option>
                <option value="course38">Bachelor of Science in Industrial Engineering</option>
                <option value="course39">Bachelor of Science in Mechanical Engineering</option>
                <option value="course40">Bachelor of Science in Civil Engineering (Construction Engineering and Management)</option>
                <option value="course41">Bachelor of Science in Civil Engineering (Structural Engineering )</option>
                <option value="course42">Bachelor of Science in Civil Engineering (Transporation Engineering)</option>
              </optgroup>
              <optgroup label="School of Hospitality and Tourism Management">
                <option value="course43">Bachelor of Science in Hospitality Management Major in Accomodations and Lodging Operations</option>
                <option value="course44">Bachelor of Science in Hospitality Management Major in Culinary Arts and Kitchen Operations</option>
                <option value="course45">Bachelor of Science in Hospitality Management Major in Restaurant and Food Services Operations</option>
                <option value="course46">Bachelor of Science in Tourism Management Major in Travel and Tour Operations</option>
                <option value="course47">Bachelor of Science in Tourism Management Major in Destination Management</option>
                <option value="course48">Bachelor of Science in Tourism Management Major in Events Management</option>
                <option value="course49">Bachelor of Science in International Gastronomy</option>
              </optgroup>
              <optgroup label="School of Nursing and Allied Medical Sciences">
                <option value="course50">Bachelor of Science in Medical Technology</option>
                <option value="course51">Bacelor of Science in Nursing</option>
                <option value="course52">Bachelor of Science in Radiologic Technology</option>
              </optgroup>
              <optgroup label="Senior High School">
                <option value="course53">SHS - Accountancy, Business and Management</option>
                <option value="course54">SHS - General Academic</option>
                <option value="course55">SHS - Humanities and Social Sciences</option>
                <option value="course56">SHS - Science, Technology, Engineering and Math</option>
                <option value="course57">SHS-TVL - Home Economics</option>
                <option value="course58">SHS-TVL- Information and Communication Technology</option>
              </optgroup>
            </select>
          </div>
          <div class="col">
            <p>Mandatory field. </p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Year Level:</p>
          </div>
          <div class="col">
            <select class="form-select" aria-label="Default select example" name="year">
              <option selected>Select Type</option>
              <option value="year1">1st Year</option>
              <option value="year2">2nd Year</option>
              <option value="year3">3rd Year</option>
              <option value="year4">4th Year</option>
              <option value="year5">5th Year</option>
            </select>
          </div>
          <div class="col">
            <p>Year level of student.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>LRN:</p>
          </div>
          <div class="col">
            <input type="text" name="lrn" class="form-control" required>
          </div>
          <div class="col">
            <p hidden>Mandatory field. Classification applicant.</p>
          </div>
        </div>

      </div>
      <!--Personal Information-->
      <div class="tab" id="tab-2">
        <h3>Personal Information:</h3>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" name="sname" placeholder="Surname" aria-label="surname">
          </div>
          <div class="col">
            <input type="text" class="form-control" name="fname" placeholder="First Name" aria-label="first name">
          </div>

          <div class="col">
            <input type="text" class="form-control" name="mname" placeholder="Middle Name" aria-label="middle name">
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <p>Sex:</p>
          </div>
          <div class="col">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" id="male" value="Male">
              <label class="form-check-label" for="male">Male</label>
              <input class="form-check-input" type="radio" name="sex" id="female" value="Female">
              <label class="form-check-label" for="female">Female</label>
            </div>
          </div>
          <div class="col-4">
            <p for="birthday">Date of Birth:</p>
            <input type="date" id="birthday" name="birthday">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p for="nationality">Nationality:</p>
            <select class="form-select" aria-label="Default select example" name="nationality">
                        <option selected>Select Nationality</option>
                        <option value="nation1">AFGHAN</option>
                        <option value="nation2">AMERICAN</option>
                        <option value="nation3">ARAB</option>
                        <option value="nation4">AUSTRALIAN</option>
                        <option value="nation5">AUSTRIAN</option>
                        <option value="nation6">BAHRAINI</option>
                        <option value="nation7">BANGLADESHI</option>
                        <option value="nation8">BELGIAN</option>
                        <option value="nation9">BRITISH</option>
                        <option value="nation10">BRUNEIAN</option>
                        <option value="nation11">BURMESE</option>
                        <option value="nation12">CAMBODIAN</option>
                        <option value="nation13">CANADIAN</option>
                        <option value="nation14">CHINESE</option>
                        <option value="nation15">DANISH</option>
                        <option value="nation16">FILIPINO</option>
                        <option value="nation17">FRENCH</option>
                        <option value="nation18">GERMAN</option>
                        <option value="nation19">GREEK</option>
                        <option value="nation20">HUNGARIAN</option>
                        <option value="nation21">INDIAN</option>
                        <option value="nation22">INDONESIAN</option>
                        <option value="nation23">IRANIAN</option>
                        <option value="nation24">IRAQI</option>
                        <option value="nation25">ISRAELI</option>
                        <option value="nation26">ITALIAN</option>
                        <option value="nation27">JAPANESE</option>
                        <option value="nation28">JORDANIAN</option>
                        <option value="nation29">KOREAN</option>
                        <option value="nation30">LEBANESE</option>
                        <option value="nation31">MALAYSIAN</option>
                        <option value="nation32">MEXICAN</option>
                        <option value="nation33">NAMIBIAN</option>
                        <option value="nation34">NAPALESE</option>
                        <option value="nation35">NIGERIAN</option>
                        <option value="nation36">NORWEGIAN</option>
                        <option value="nation37">PALESTINIAN</option>
                        <option value="nation38">PORTUGESE</option>
                        <option value="nation39">SIBERIAN</option>
                        <option value="nation40">SINGAPOREAN</option>
                        <option value="nation41">SPANISH</option>
                        <option value="nation42">SUDANESE</option>
                        <option value="nation43">SYRIAN</option>
                        <option value="nation44">TAIWANESE</option>
                        <option value="nation45">THAI</option>
                        <option value="nation46">TURKISH</option>
                        <option value="nation47">UGANDAN</option>
                        <option value="nation48">VIETNAMESE</option> 
          </select>
          <p>Classify applicant's nationality from available list.</p>
          </div>
          <div class="col">
            <p >Place of Birth:</p>
            <input type="text" class="form-control" name="placeofbirth" placeholder="Place of Birth" aria-label="place of birth">
            <p>As per birth certificate.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Religion:</p>
            <select class="form-select" aria-label="Default select example" name="religion">
                        <option selected>< Select Religion ></option>
                        <option value="religion1">AGLIPAYAN</option>
                        <option value="religion2">AGNOSTIC</option>
                        <option value="religion3">ANG DATING DAAN</option>
                        <option value="religion4">APOSTOLIC CHRISTIAN</option>
                        <option value="religion5">ASSEMBLY OF GOD</option>
                        <option value="religion6">ATHEIST</option>
                        <option value="religion7">BAPTIST</option>
                        <option value="religion8">BORN AGAIN CHRISTIAN</option>
                        <option value="religion9">BUDDHIST</option>
                        <option value="religion10">CATHOLIC</option>
                        <option value="religion11">CHRISTIAN</option>
                        <option value="religion12">ESPIRITISTA</option>
                        <option value="religion13">EVANGELICAL</option>
                        <option value="religion14">HINDU</option>
                        <option value="religion15">IEMELIF</option>
                        <option value="religion16">IGLESIA NI CRISTO</option>
                        <option value="religion17">ISLAM</option>
                        <option value="religion18">JEHOVAH'S WITNESS</option>
                        <option value="religion19">JUDAISM</option>
                        <option value="religion20">MCGI</option>
                        <option value="religion21">METHODIST</option>
                        <option value="religion22">MORMON</option>
                        <option value="religion23">MUSLIM</option>
                        <option value="religion24">OTHERS</option>
                        <option value="religion25">PROTESTANT</option>
                        <option value="religion26">ROMAN CATHOLIC</option>
                        <option value="religion27">SEVENTH-DAY ADVENTIST</option>
                        <option value="religion28">SIKH</option>
            </select>
            <p>Classify applicant's religion from available list.</p>
          </div>
          <div class="col">
            <p>Siblings:</p>
            <input type="text" class="form-control" placeholder="Siblings" name="siblings" aria-label="siblings">
            <p>Classify applicant's total number of siblings.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Civil Status:</p>
            <select class="form-select" aria-label="Default select example" name="civilstatus">
              <option selected>< Select ></option>
              <option value="religion1">Single</option>
              <option value="religion2">Married</option>
              <option value="religion3">Divorces</option>
              <option value="religion4">Legally Seperated</option>
              <option value="religion5">Widowed</option>
            </select>
            <p>Classify applicant's civil status from available list.</p>
          </div>
          <div class="col">
            <p>Ordinal Position (Rank):</p>
            <input type="text" class="form-control" name="ordinalpos" placeholder="Ordinal Position" aria-label="ordinal position">
            <p>Classify applicant's ordinal position.</p>
          </div>
        </div>

      </div>


      <!--Contact Information-->
      <div class="tab" id="tab-3">
        <h3>Address:</h3>
        <div class="row">
          <div class="col-2">
            <p>Present Address:</p>
          </div>
          <div class="col">
            <input type="text" class="form-control" id="presentAdd1" name="presentadd1" placeholder="Number, Unit, Street Name, Building ">
            <p>Number, Unit, Street Name, Building</p>
          </div>
          <div class="col">
            <input type="text" class="form-control" id="presentAdd2" name="presentadd2" placeholder="Barangay, Village, Subdivision, District ">
            <p>Barangay, Village, Subdivision, District</p>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <p hidden>Present Address:</p>
          </div>
          <div class="col-4">
            <input type="text" class="form-control" id="presentAdd3" name="presentadd3" placeholder="Municipality / City">
            <p>Municipality / City</p>
          </div>
          <div class="col-4">
            <input type="text" class="form-control" id="presentAdd4" name="presentadd4" placeholder="Province / Region ">
            <p>Province / Region </p>
          </div>
          <div class="col-2">
            <input type="text" id="presentAdd5" name="presentadd5" class="form-control">
            <p>ZIP/Postal Code</p>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <p hidden></p>
          </div>
          <div class="col-4">
            <input type="text" id="presentAdd6" name="presentadd6" class="form-control" placeholder="Country">
            <p>Country</p>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <p hidden></p>
          </div>
          <div class="col">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="address" id="filladdress" onclick="filladdress(this.checked)">
              <label for="address">Permanent address is the same as present address.</label>
            </div>
          </div>
        </div>

        <!--Permanent Address-->
        <div class="row">
          <div class="col-2">
            <p>Permanent Address:</p>
          </div>
          <div class="col">
            <input type="text" class="form-control" id="permanentAdd1" name="permanentadd1" placeholder="Number, Unit, Street Name, Building ">
            <p>Number, Unit, Street Name, Building</p>
          </div>
          <div class="col">
            <input type="text" class="form-control" id="permanentAdd2" name="permanentadd2" placeholder="Barangay, Village, Subdivision, District ">
            <p>Barangay, Village, Subdivision, District</p>
          </div>
        </div>

        <div class="row">
          <div class="col-2">
            <p></p>
          </div>
          <div class="col-4">
            <input type="text" class="form-control" id="permanentAdd3" name="permanentadd3" placeholder="Municipality / City">
            <p>Municipality / City</p>
          </div>
          <div class="col-4">
            <input type="text" class="form-control" id="permanentAdd4" name="permanentadd4" placeholder="Province / Region ">
            <p>Province / Region </p>
          </div>
          <div class="col-2">
            <input type="text" id="permanentAdd5" name="permanentadd5" class="form-control">
            <p>ZIP/Postal Code</p>
          </div>
        </div>

        <div class="row">
          <div class="col-2">
            <p hidden>Present Address:</p>
          </div>
          <div class="col-4">
            <input type="text" class="form-control" id="permanentAdd6" name="permanentadd6" placeholder="Country">
            <p>Country</p>
          </div>
        </div>

      </div>

      <div class="tab" id="tab-4">
        <h3>Contact:</h3>
        <div class="row">
          <div class="col">
            <p>Home Phone No.:</p>
          </div>
          <div class="col">
            <input type="number" name="homephone" class="form-control">
          </div>
          <div class="col">
            <p>(Area Code) Phone No.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Mobile Phone No.:</p>
          </div>
          <div class="col">
            <input type="number" name="mobilephone" class="form-control">
          </div>
          <div class="col">
            <p>(Area Code) Mobile No.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="email">Email Address:</label>
          </div>
          <div class="col">
            <input type="email" name="email" class="form-control">
          </div>
          <div class="col">
            <p hidden></p>
          </div>
        </div>
      </div>
      <!--In case of emergenecy-->
      <div class="tab" id="tab-5">
        <h3>In case of Emergency:</h3>
        <div class="row">
          <div class="col">
            <label for="guardian">Guardian / Contact Person:</label>
          </div>
          <div class="col">
            <input type="text" name="guardian" class="form-control">
          </div>
          <div class="col">
            <p>In case of emergency. Mandatory field.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="relationship">Relationship:</label>
          </div>
          <div class="col">
            <input type="text" name="relationship" class="form-control">
          </div>
          <div class="col">
            <p>Relationship with the contact person given.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="homeno">Home Phone No.:</label>
          </div>
          <div class="col">
            <input type="number" name="homeno" class="form-control">
          </div>
          <div class="col">
            <p >Home phone number of the contact person. Mandatory field.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="mobileno">Mobile Phone No.:</label>
          </div>
          <div class="col">
            <input type="number" name="mobileno" class="form-control">
          </div>
          <div class="col">
            <p>Mobile phone number of the contact person.</p>
          </div>
        </div>
      </div>
      <!--Documents-->
      <div class="tab" id="tab-6">
        <h3>Documents:</h3>
        <div class="row">
          <div class="col">
            <label for="referenceno">Reference Number:</label>
          </div>
          <div class="col">
            <input type="text" name="referenceno" class="form-control">
          </div>
          <div class="col">
            <p hidden></p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="slip">Processing/Application Fee Payment slip:</label>
          </div>
          <div class="col-4">
            <input type="file" name="slip" class="form-control" id="file1">
          </div>
          <div class="col">
            <p> This document is required.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="cog">Copy of Grades (Form 138):</label>
          </div>
          <div class="col-4">
            <input type="file" name="cog" class="form-control" id="file2">
          </div>
          <div class="col">
            <p> This document is required.</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="psa">PSA / Birth Certificate:</label>
          </div>
          <div class="col-4">
            <input type="file" name="psa" class="form-control" id="file3">
          </div>
          <div class="col">
            <p> This document is required.</p>
          </div>
        </div>
      </div>
      <!--Family Data-->
      <div class="tab" id="tab-7">
        <h3>Family Data:</h3>
        <div class="row">
          <table>
            <tr style="border: 1px solid black; background-color: #8b0000; color:white;">
              <th>STAT</th>
              <th>LAST NAME</th>
              <th>FIRST NAME</th>
              <th>MIDDLE NAME</th>
              <th>RELATIONSHIP</th>
              <th>OCCUPATION</th>
              <th style="width: 5%;"></th>
            </tr>
            <tr style="border: 1px solid black">
              <td style="border: 1px solid black"><i class="fa-regular fa-pen-to-square" ></i></td>
              <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;" name="lname"></td>
              <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;" name="fname"></td>
              <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;" name="mname"></td>
              <td style="border: 1px solid black"><select class="form-select" aria-label="Default select example" name="relation">
                <option selected>< Select ></option>
                <option value="relation1">Brother</option>
                <option value="relation2">Daughter</option>
                <option value="relation3">Father</option>
                <option value="relation4">Mother</option>
                <option value="relation5">Nephew</option>
                <option value="relation6">Neice</option>
                <option value="relation7">Sister</option>
                <option value="relation8">Son</option>
                <option value="relation9">Spouse</option>
                <option value="relation10">Stepdaughter</option>
                <option value="relation11">Stepson</option>
              </select></td>
              <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;" name="occupation"></td>
              <td style="border: 1px solid black"><button class="btn btn-danger">OK</button></td>
            </tr>
          </table>
        </div>
      </div>
      <!--Education Background-->
      <div class="tab" id="tab-8">
        <h3>Education Background:</h3>
        <div class="row">
          <table>
            <tr style="border: 1px solid black; background-color: #8b0000; color:white;">
              <th>STAT</th>
              <th>FROM</th>
              <th>TO</th>
              <th>EDUCATION TYPE</th>
              <th>COURSE / PROGRAM / STRAND</th>
              <th>NAME OF SCHOOL</th>
              <th>SCHOOL TYPE</th>
              <th style="width: 5%;"></th>
            </tr>
            <tr style="border: 1px solid black">
              <td style="border: 1px solid black"><i class="fa-regular fa-pen-to-square" ></i></td>
              <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;" name="year_from"></td>
              <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;" name="year_to"></td>
              <td style="border: 1px solid black"><select class="form-select" aria-label="Default select example" name="educ">
                <option selected>< Select ></option>
                <option value="eductype1">Preparatory/Nursery</option>
                <option value="eductype2">Grade School</option>
                <option value="eductype3">High School</option>
                <option value="eductype4">Vocational/Trade</option>
                <option value="eductype5">College</option>
                <option value="eductype6">Post Graduate (Masters)</option>
                <option value="eductype7">Post Graduate (PhD)</option>
                <option value="eductype8">Junior High School</option>
                <option value="eductype9">Senior High School</option>
              </select></td>
              <td style="border: 1px solid black"></td>
              <td style="border: 1px solid black"><input type="text" class="form-control" style="border: 1px black solid;" name="school"></td>
              <td style="border: 1px solid black"><select class="form-select" aria-label="Default select example" name="sch_type">
                <option selected>< Unknown ></option>
                <option value="schooltype1">Private</option>
                <option value="schooltype2">Public</option>
              </select></td>
              <td style="border: 1px solid black"><button class="btn btn-danger">OK</button></td>
            </tr>
          </table>
        </div>
      </div>
      <!--Survey Questions-->
      <div class="tab" id="tab-9">
        <h3>Survey Questions:</h3>
        <table class="col">
          <tr style="background-color: #8b0000; color:aliceblue; text-align:center;">
            <th>QUESTIONS</th>
            <th>ANSWERS</th>
          </tr>
          <tr>
            <td style="border: 1px solid black">a. What is your best reason/s for choosing HAU?</td>
            <td style="border: 1px solid black"><select class="form-select" aria-label="Default select example" id="reason" name="reasonOption">
              <option selected>< Select ></option>
              <option value="reason1">1. Quality Education</option>
              <option value="reason2">2. Parents choice</option>
              <option value="reason3">3. Relative / Siblings studyin in HAU</option>
              <option value="reason4">4. Location</option>
              <option value="reason5">5. Modern Facilities</option>
              <option value="reason6">6. Good Catholic Training</option>
              <option value="reason7">7. Competent Teachers</option>
              <option value="reason8">8. To be with friends</option>
              <option value="reason9">9. Prestige</option>
              <option value="reason10">10. Scholarship</option>
              <option value="reason11">11. Reasonable Tuition Fee</option>
              <option value="reason12">12. Others:</option>
            </select></td>
          </tr>
          <tr>
            <td style="border: 1px solid black">	Others</td>
            <td style="border: 1px solid black"><input id="otherbox" name="Others" type="text" class="form-control" style="border: 1px black solid;"></td>
          </tr>
          <tr>
            <td style="border: 1px solid black">	b. What are your schools of choice:</td>
            <td style="border: 1px solid black"></td>
          </tr>
          <tr>
            <td style="border: 1px solid black">	i. First Choice:</td>
            <td style="border: 1px solid black"><input name="first_choice" type="text" class="form-control" style="border: 1px black solid;"></td>
          </tr>
          <tr>
            <td style="border: 1px solid black">	ii. Second Choice:</td>
            <td style="border: 1px solid black"><input name="second_choice" type="text" class="form-control" style="border: 1px black solid;"></td>
          </tr style="border: 1px solid black">
          <tr>
            <td style="border: 1px solid black">iii. Third Choice:</td>
            <td style="border: 1px solid black"><input name="third_choice" type="text" class="form-control" style="border: 1px black solid;"></td>
          </tr>
          <tr>
            <td style="border: 1px solid black">What has helped you decide to choose HAU?</td>
            <td style="border: 1px solid black"><select class="form-select" aria-label="Default select example" name="decisionOption">
              <option selected>< Select ></option>
              <option value="choice1">1. Facebook</option>
              <option value="choice2">2. Twitter</option>
              <option value="choice3">3. LinkedIn</option>
              <option value="choice4">4. Instagram</option>
              <option value="choice5">5. School Marketing Visit</option>
              <option value="choice6">6. Website</option>
              <option value="choice7">7. Brochures</option>
              <option value="choice8">8. Testimonials</option>
            </select></td>
          </tr>
        </table>
      </div>

      <div style="overflow:auto;">
        <div style="float:right;">
          <button class="btn " type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          <button class="btn " type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
      </div>
    </form>

    <!--Script-->
    <script>
      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab

      function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
          document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
          document.getElementById("nextBtn").innerHTML = "Next";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
      }

      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
          //...the form gets submitted:
          document.getElementById("regForm").submit();
          return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
      }

        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("tab");
          // y = x[currentTab].getElementsByTagName("input");
          // // A loop that checks every input field in the current tab:
          // for (i = 0; i < y.length; i++) {
          //   // If a field is empty...
          //   if (y[i].value == "") {
          //     // add an "invalid" class to the field:
          //     y[i].className += " invalid";
          //     // and set the current valid status to false:
          //     valid = false;
          //   }
          // }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }

        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            //$("#step-"+i).css("opacity", "1");
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class to the current step:
          x[n].className += " active";
        }

        $('#reason').change(function() {//on change of select 
        $('#otherbox').prop('disabled', $('option:selected', this).val() != 'reason12');//check if value is not other then disable
        }).change();//call on change manually so on load will run the change event
    </script>
  </div>
</div>
@endsection