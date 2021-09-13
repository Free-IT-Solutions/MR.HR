<?php
    $HR='employee';
    include 'header.php';
    include 'sidebar.php';
    include 'countries.php';
    include '../class/Employee/basicinfo.php';
    include '../members/function.php';


   $user = new basicinfo();

   if(isset($_POST['add_basicinfo']))
  {
    /*$FullName = $_POST['fullname'];
       $MaritalStatus = $_POST['status'];
      $Gender = $_POST['gender'];
      $Profession = $_POST['profession'];
      $Birthplace = $_POST['birthplace'];
      $DateofBirth = setDate($_POST['birthDate']);
      $VisaNumber = $_POST['visaNo'];  
      $VisaIssuer = $_POST['visaIssuer'];
      $VisaIssuance = setDate($_POST['visaIssuance']);  
      $VisaExpiry = setDate($_POST['visaExpiry']);
      $PassportNumber = $_POST['passportNumber'];
      $PassportIssue = setDate($_POST['passportIssue']);
      $PassportExpiry = setDate($_POST['passportExpiry']);
      $IdCardExpiryDate = setDate($_POST['idCardExpiryDate']); */
       $user->add_basicinfo($_POST['uncode'],$_POST['fullname'],$_POST['status'],$_POST['visaNo'], $_POST['visaIssuer'],setDate($_POST['passportIssue']),setDate($_POST['visaExpiry']),
      setDate($_POST['visaIssuance']), setDate($_POST['birthDate']),setDate($_POST['passportExpiry']),$_POST['gender'],$_POST['birthplace'],$_POST['passportNumber'],
      $_POST['passportNumber'],setDate($_POST['idCardExpiryDate']));    
  
  }



?>
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
    <div class="container-fluid">
        <h3 class="page-title">اضافة موظف جديد</h3>
        <div class="panel">
            <div class="panel-body">
                <div class="custom-tabs-line tabs-line-bottom left-aligned">
                    <ul class="nav" role="tablist">
                        <li class="active"><a href="#tab-bottom-right1" role="tab" data-toggle="tab">البيانات الأساسية</a></li>
                       <li><a href="#tab-bottom-right2" role="tab" data-toggle="tab">بيانات الاتصال</a></li>
                        <li><a href="#tab-bottom-right3" role="tab" data-toggle="tab">بيانات الوظيفة</a></li>
                        <li><a href="#tab-bottom-right4" role="tab" data-toggle="tab">بيانات الراتب</a></li>
                        <li><a href="#tab-bottom-right5" role="tab" data-toggle="tab">بيانات العقد</a></li>
                        <li><a href="#tab-bottom-right6" role="tab" data-toggle="tab">بيانات التابعين</a></li>
                        <li><a href="#tab-bottom-right7" role="tab" data-toggle="tab">بيانات السفر</a></li>
                        <li><a href="#tab-bottom-right8" role="tab" data-toggle="tab">بيانات التأمين الطبي</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <!-- البيانات الاساسية -->
                    <div class="tab-pane fade in active" id="tab-bottom-right1">
                        <form method="post">
                            <div class="row">
                              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <label for="visaNo">رقم الموظف</label>
                                <input type="text" class="form-control" placeholder="رقم الموظف" id="uncode" name="uncode"
                                pattern="[A-Za-z][0-9]{4}"
                                title="الرقم مؤلف من حرف يتبعه رقم من 4 خانات" required>
                                <br>
                            </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                  <label for="visaNo">اسم الموظف</label>
                                  <input type="text" class="form-control" placeholder="اسم الموظف الثلاثي" id="fullname" name="fullname"
                                   required>
                                  <br>
                              </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">الحالة الاجتماعية</label>
                                    <select class="form-control" name="status" required>
                                        <option value="1">أعزب</option>
                                        <option value="2">متزوج</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">الجنس</label>
                                    <select class="form-control" name="gender" required>
                                        <option value="male">ذكر</option>
                                        <option value="female">انثى</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="job">المهنة</label>
                                    <input type="text" class="form-control" placeholder="المهنة" id="profession" name="profession" required>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">مكان الميلاد</label>
                                    <input type="text" class="form-control" placeholder="مكان الميلاد" name="birthplace" required>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="birthDate">تاريخ الميلاد</label>
                                    <input type="text" name="birthDate" id="birthDate" class="ddinput form-control" data-large-mode="true" id="birthDate" name="birthDate" required>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="visaNo">رقم التأشيرة</label>
                                    <input type="text" class="form-control" placeholder="رقم التأشيرة" id="visaNo" name="visaNo"
                                     pattern="[0-9]*"
                                     required
                                    title="الرجاء ادخال ارقام فقط">
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="visaFrom">جهة إصدار التأشيرة</label>
                                    <input type="text" class="form-control" placeholder="جهة إصدار التأشيرة" id="visaIssuer" name="visaIssuer" required>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">تاريخ إصدار التأشيرة</label>
                                    <input type="text" name="visaIssuance" id="visaIssuance" class="ddinput form-control" data-large-mode="true" required>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">تاريخ انتهاء التأشيرة</label>
                                    <input type="text" name="visaExpiry" id="visaExpiry" class="ddinput form-control" data-large-mode="true" required>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="PassportNo">رقم جواز السفر</label>
                                    <input type="text" id="passportNumber" name="passportNumber"class="form-control" placeholder="رقم جوزاز السفر (مثال : N 123456789)"
                                     pattern="N\s[0-9]{9}"
                                     title="اكتب حرف ال N ثم فراغ ثم 9 ارقام" required>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">تاريخ إصدار الجواز</label>
                                    <input type="text" name="passportIssue" id="passportIssue" class="ddinput form-control" data-large-mode="true" required>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">تاريخ انتهاء الجواز</label>
                                    <input type="text" name="passportExpiry" id="passportExpiry" class="ddinput form-control" data-large-mode="true" required>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">تاريخ انتهاء كرت الهوية</label>
                                    <input type="text" name="idCardExpiryDate" id="idCardExpiryDate" class="ddinput form-control" data-large-mode="true" required>
                                    <br>
                                </div>
                            </div>
                            <div class="margin-top-30 text-center">
                              <button id="add_basicinfo" name="add_basicinfo"  type="submit" class="btn btn-success update-pro">اضافة</button>
                            </div>
                        </form>
                    </div>
                    <!-- نهاية البيانات الاساسية -->
                    <!-- بيانات الاتصال -->
                    <div class="tab-pane fade" id="tab-bottom-right2">
                         <form action="">
                              <div class="row">
                                   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <label for="phone">هاتف العمل <span class="lnr lnr-phone-handset"></span></label>
                                           <input type="tel" id="phone" class="form-control" name="phone" placeholder="هاتف العمل"
                                                    pattern="^[0-9]{6,8}$"
                                                    title="يجب أن يتكون من 6 أو 8 أرقام"
                                                    required="required">
                                          <br>
                                   </div>
                                   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <label for="phone">هاتف المنزل <span class="lnr lnr-phone-handset"></span></label>
                                               <input type="tel" id="phone" class="form-control" name="phone" placeholder="هاتف المنزل"
                                                    pattern="^[0-9]{6,8}$"
                                                    title="يجب أن يتكون من 6 أو 8 أرقام"
                                                    required="required">
                                        <br>
                                    </div>
                                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <label for="phone">الهاتف المحمول<span class="lnr lnr-smartphone m-b-2"></span></label>
                                                <input input type="tel" name="phone" pattern="[0-9]{10}" id="phone" class="form-control"
                                                    placeholder="مثال: 4222 222 180"
                                                    title="يجب أن يتكون من عشرة أرقام"
                                                    required="required">
                                             <br>
                                        </div>
                                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <label class="label-input100" for="email">
                                                 البريد الإلكتروني<span class="lnr lnr-envelope m-b-5"></span>
                                              </label>
                                                   <input id="email" class="form-control" type="email" placeholder="example@gmail.com"
                                                    pattern="[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}"
                                                    size="30" title="يجب أن يكون من النمط example@gmail.com"
                                                    required="required">
                                            <br>
                                    </div>
                                </div>
                              <div class="row">
                                   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                         <label for="psw">كلمة المرور</label>
                                            <input type="password" name="pw" pattern=".{6,}" title="ستة محارف على الأقل"
                                            class="form-control" placeholder="كلمة المرور" required="required" >
                                            <br>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                              <label for="psw">تأكيد كلمة المرور</label>
                                                <input type="password" name="pw" pattern=".{6,}" title="ستة محارف على الأقل"
                                                class="form-control" placeholder="تأكيد كلمة المرور" required="required" >
                                           <br>
                                      </div>
                                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                     <label for="city">بلد المنشأ</label>
                                                <select id="" name="country" class="form-control">
                                                  <option value="0">اختر دولة ...</option>
                                                <?php
                                                    foreach ($sorted_countries as $country) {
                                                        echo '<option value="'.$country["alpha2"].'">'.$country["name"].'</option>';
                                                    } 
                                                ?>
                                                </select>
                                           <br>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <label class="label-input100" for="address">العنوان</label>
                                                <input type="text" id="address" name="address" pattern="\d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*\."
                                                title="يتيح1-5 أرقام لرقم المنزل ومسافة وحرف متبوع بنقطة مثل ( N. أو S.) وكلمتان لاسم الشارع"
                                                class="form-control" required="required">
                                          <br>
                                    </div>
                            </div>
                                    <div class="margin-top-30 text-center"><button type="submit" href="#" class="btn btn-success update-pro">اضافة</button></div>
                        </form>
                   </div>
                    <!-- نهاية بيانات الاتصال -->
                    <!-- بيانات الوظيفة -->
                    <div class="tab-pane fade" id="tab-bottom-right3">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">الفرع</label>
                                    <select class="form-control">
                                        <option value="1">فرع 1</option>
                                        <option value="2">فرع 2</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="employeeSituation">حالة الموظف</label>
                                    <input type="text" class="form-control" placeholder="حالة الموظف" id="employeeSituation">
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">نوع الوظيفة</label>
                                    <select class="form-control" required>
                                        <option value="employee">موظف</option>
                                        <option value="manager">مدير</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="startDate">تاريخ التعيين</label>
                                    <input type="text" name="" id="" class="ddinput form-control" data-large-mode="true" required id="startDate">
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="education">المؤهل العلمي</label>
                                    <input type="text" class="form-control" placeholder="المؤهل العلمي" required id="education">
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">اسم القسم التابع له</label>
                                    <select class="form-control" required>
                                        <option value="1">قسم المحاسبة</option>
                                        <option value="2">قسم الادارة</option>
                                    </select>
                                    <br>
                                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">المدير المباشر</label>
                                    <select class="form-control" required>
                                        <option value="1">محمد</option>
                                        <option value="2">احمد</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="jobTitle">المسمى الوظيفي</label>
                                    <input type="text" class="form-control" placeholder="المسمى الوظيفي" required id="jobTitle">
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="specialization">التخصص</label>
                                    <input type="text" class="form-control" placeholder="التخصص" required id="specialization">
                                    <br>
                                </div>
                            </div>
                            <div class="margin-top-30 text-center"><button type="submit" href="#" class="btn btn-success update-pro">اضافة</button></div>
                        </form>
                    </div>
                    <!-- نهاية بيانات الوظيفة -->
                    <!-- بيانات الراتب -->
                    <div class="tab-pane fade" id="tab-bottom-right4">
                        <form class="frm_addsalaryemp" id="alaryinfo-form" onsubmit="return processalary()">
                            <div class="row">
                               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="salary">نوع التعاقد</label>
                                    <select class="form-control" name="reseve_contracttype" required> </select>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="salary">قيمة الراتب</label>
                                    <input type="text" class="form-control" name="salaryAmount"  placeholder="قيمة الراتب"
                                    pattern="[0-9]*" title="الرجاء إدخال أرقام فقط" required="required">
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="salary">طريقة دفع الراتب</label>
                                    <select class="form-control" name="reseve_salaryPaymenttype"></select>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="salary">سبب إيقاف الراتب</label>
                                    <input type="text" class="form-control" name="ReasonSuspension" placeholder="سبب إيقاف الراتب">
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="date">تاريخ بداية الإيقاف</label>
                                    <input type="text"  class="ddinput form-control" name="SuspensionStart" id="SuspensionStart" data-large-mode="true" required="required">
                                    <br>
                                 </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="date">تاريخ نهاية الإيقاف</label>
                                    <input type="text" class="ddinput form-control" name="SuspensionEnd" id="SuspensionEnd" data-large-mode="true" required="required">
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="bank">اسم البنك</label>
                                    <select class="form-control" name="reseve_bank"required="required" ></select>
                                    <br>
                                </div>
                                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <label class="label-input100" for="IBAN user-pwd">رقم الحساب البنكي</label>
                                        <input type="tel" id="IBAN" class="form-control" placeholder="مثال: 1234 1234 1234 1234"
                                            pattern="[0-9]{13,16}" required="required"
                                            title="رقم بطاقة الائتمان مكون من 16 رقماً" >
                                    <br>
                                </div>
                            </div>
                                <div class="row">
                                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <label class="label-input100" for="vacation user-pwd">عدد أيام الإجازة السنوية</label>
                                            <input type="text" pattern="\d+"  class="form-control" min="0" placeholder="عدد أيام الإجازة السنوية"
                                            title="الرجاء إدخال أرقام فقط" required="required">
                                            <br>
                                       </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <label class="label-input100" for="vacation user-pwd">عدد ساعات العمل</label>
                                            <input type="text" pattern="\d+"  class="form-control" min="0" placeholder="عدد ساعات العمل"
                                            title="الرجاء إدخال أرقام فقط" required="required">
                                            <br>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <label for="sort">نوع التفقد</label>
                                                <select class="form-control">
                                                    <option value="s">بصمة</option>
                                                    <option value="m">موقع GPS</option>
                                                    <option value="l">إلكتروني</option>
                                                </select>
                                                <br>
                                       </div>
                                </div>
                               <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                       <label for="salary">إيقاف الراتب</label>
                                        <label class="switch"><input type="checkbox" />    
                                          <div></div>
                                        </label>
                                     <br>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <label for="">استبعاد من تفقد الحضور:</label><br>
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label for="vehicle1">موظف 1</label><br>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                        <label for="vehicle2">موظف 2</label><br>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                        <label for="vehicle3">موظف 3</label><br>
                                    </div>
                              </div>
                                    <div class="margin-top-30 text-center"><button type="submit" href="#" class="btn btn-success update-pro">اضافة</button></div>
                                        <section class="panel-body">
                                            <div class="custom-tabs-line tabs-line-bottom left-aligned">
                                                    <ul class="nav" role="tablist">
                                                        <li class="active"><a href="#tab-bottom-right41" role="tab" data-toggle="tab">بيانات البدلات</a></li>
                                                        <li><a href="#tab-bottom-right42" role="tab" data-toggle="tab">بيانات الحسومات</a></li>
                                                    </ul>
                                             </div>
                                  </section>
                        </form>
                            <div class="tab-content">
                                 <div class="tab-pane fade in active" id="tab-bottom-right41">
                                    <form action="">
                                         <div class="row">
                                              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <label for="city">نوع البدل</label>
                                                        <select name="sort" id="sort" class="form-control" required="required">
                                                            <option value="s">نوع 1</option>
                                                            <option value="m">نوع 2</option>
                                                            <option value="c">نوع 3</option>
                                                        </select>
                                                    <br>
                                              </div>
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <label for="percent">نسبة البدل</label><br>
                                                    <input type="text"  id="percent" pattern="^\d{0,2}(\.\d{1,4})? *%?$" class="form-control"
                                                    placeholder="مثال: %4.0 أو 0.45" title="الرجاء إدخال قيمة نسبية" required="required">
                                                    <br>
                                               </div>
                                               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                        <label for="amount">المبلغ</label>
                                                        <input type="text" class="form-control" placeholder="المبلغ"
                                                        pattern="[0-9]*" title="الرجاء إدخال أرقام فقط" required="required">
                                                   <br>
                                               </div>
                                            </div>
                                      <div class="margin-top-30 text-center"><button type="submit" href="#" class="btn btn-success update-pro">اضافة</button></div>
                                  </form>
                               </div>
                              <div class="tab-pane fade in" id="tab-bottom-right42">
                                  <form action="">
                                        <div class="row">
                                             <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <label for="city">نوع الحسم</label>
                                                        <select name="sort" id="sort" class="form-control" required="required">
                                                            <option value="s">نوع 1</option>
                                                            <option value="m">نوع 2</option>
                                                            <option value="c">نوع 3</option>
                                                        </select>
                                                        <br>
                                               </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                            <label for="percent">نسية الحسم</label><br>
                                                            <input type="text"  id="percent" pattern="^\d{0,2}(\.\d{1,4})? *%?$" class="form-control"
                                                            placeholder="مثال: %4.0 أو 0.45" title="الرجاء إدخال قيمة نسبية" required="required">
                                                            <br>
                                                    </div>
                                                   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                            <label for="amount">المبلغ</label>
                                                            <input type="text" class="form-control" placeholder="المبلغ"
                                                            pattern="[0-9]*" title="الرجاء إدخال أرقام فقط" required="required">
                                                            <br>
                                                   </div>
                                            </div>
                                           <div class="margin-top-30 text-center"><button type="submit" href="#" class="btn btn-success update-pro">اضافة</button></div>
                                    </form>
                              </div>
                       </div>
                    </div>
                    <!-- نهاية بيانات الراتب -->
                    <!-- بيانات العقد -->
                    <div class="tab-pane fade"  id="tab-bottom-right5">
                       <form action="">
                             <div class="row" id="div1">
                                 <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <label for="contract">تاريخ انشاء العقد</label>
                                        <input type="text" name="contract" id="contract" class="ddinput form-control" data-large-mode="true"
                                        required="required">
                                        <br>
                                   </div>
                                   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <label for="contract">تاريخ انتهاء العقد</label>
                                        <input type="text" name="contract" id="contract" class="ddinput form-control" data-large-mode="true"
                                        required="required">
                                        <br>
                                    </div>
                               </div>
                              <div class="row ">
                                    <label for="contract" >نص العقد</label>
                                 <textarea class="form-control "required="required" >أدخل النص</textarea>
                                 
                        </form>
                     <div class="row">
                       <form action="/action_page.php" method="get">
                            <div class="margin-top-30 text-center" >
                                <button type="submit" value="submit" class="btn btn-primary col-lg-3 col-md-4 col-sm-6 col-xs-12" 
                                style="background-color: #19B55F; border-radius: 10px; border-color: white;" >حـــفــــظ</button>
                                <button type="print" onClick="printContent('div1')" value="print" class="btn btn-primary col-lg-3 col-md-4 col-sm-6 col-xs-12" 
                                style="background-color: #2E87A7; border-radius: 10px; border-color: white;">طـبــاعــة</button>
                                <button type="finish" value="finish" class="btn btn-primary col-lg-3 col-md-4 col-sm-6 col-xs-12" 
                                style="background-color: #BE5478; border-radius: 10px; border-color: white;">إنـــهــاء</button>
                                <input type="reset" data-toggle="modal" data-target="#myModal" value="تجديد العقد" class="btn btn-primary col-lg-3 col-md-4 col-sm-6 col-xs-12" 
                                style="background-color: #FFA630; border-radius: 10px; border-color: white;">
                             </div>
                                                <!-- تجديد العقد -->
                            <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content text-center ">
                                        <div class="modal-header">
                                                <label for="contract">تاريخ إنشاء العقد</label>  
                                                <input type="text" class="ddinput form-control" data-large-mode="true" required="required">
                                        </div>
                                        <div class="modal-body">
                                                <label for="contract">تاريخ انتهاء العقد</label>
                                                <input type="text" class="ddinput form-control" data-large-mode="true" required="required">                  
                                        </div>
                                        <br>
                                        <div class="modal-footer">
                                            <input type="submit" value="حفظ" class="form-control">
                                        </div>
                                    </div>
                            </div>
                        </div>
                      </form>
                  </div>
           </div>
     </div>
                    <!-- نهاية بيانات العقد -->
                    <!-- بيانات التابعين -->
                    <div class="tab-pane fade" id="tab-bottom-right6">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="name">الاسم</label>
                                    <input type="text" class="form-control" placeholder="الاسم" required id="name">
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">الجنس</label>
                                    <select class="form-control" required>
                                        <option value="male">ذكر</option>
                                        <option value="female">أنثى</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">الحالة الاجتماعية</label>
                                    <select class="form-control" required>
                                        <option value="single">أعزب</option>
                                        <option value="married">متزوج</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">الجنسية</label>
                                    <select id="" name="country" class="form-control">
                                      <option value="0">اختر دولة ...</option>
                                      <?php
                                        
                                        foreach ($sorted_countries as $country) {
                                            echo '<option value="'.$country["alpha2"].'">'.$country["name"].'</option>';
                                        } 
                                    ?>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="relation">صلة القرابة</label>
                                    <input type="text" class="form-control" placeholder="صلة القرابة" required id="relation">
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">تاريخ الميلاد</label>
                                    <input type="text" name="" id="" class="ddinput form-control" data-large-mode="true" required>
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="idNo">رقم الهوية</label>
                                    <input type="text" class="form-control" placeholder="رقم الهوية (أرقام فقط)" required id="idNo" pattern="[0-9]*" title="الرجاء ادخال ارقام فقط">
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="insuranceNo">رقم بطاقة التأمين</label>
                                    <input type="text" class="form-control" placeholder="رقم بطاقة التأمين (أرقام فقط)" required id="insuranceNo" pattern="[0-9]*" title="الرجاء ادخال ارقام فقط">
                                    <br>
                                </div>
                            </div>
                            <div class="margin-top-30 margin-bottom-30 text-center"><button type="submit" href="#" class="btn btn-success update-pro">اضافة</button></div>
                        </form>
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>الاسم</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>محمد</td>
                                            <td><a href="#"><span class="lnr lnr-pencil"></span></a>&nbsp;&nbsp;<a href="#"><span class="lnr lnr-trash"></span></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- نهاية بيانات التابعين -->
                    <!-- بيانات السفر -->
                    <div class="tab-pane fade" id="tab-bottom-right7">
                       <form action="">
                           <div class="row">
                               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                               <label for="city">وجهة السفر</label>
                                        <select id="" name="country" class="form-control">
                                          <option value="0">اختر دولة ...</option>
                                          <?php
                                        
                                        foreach ($sorted_countries as $country) {
                                            echo '<option value="'.$country["alpha2"].'">'.$country["name"].'</option>';
                                        } 
                                        ?>
                                        </select>
                                        <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="">نوع التذاكر</label>
                                        <select class="form-control" required="required">
                                            <option value="s">درجة أولى</option>
                                            <option value="m">درجة سياحية</option>
                                            <option value="l">vip</option>
                                        </select>
                                        <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label class="label-input100" for="ticket user-pwd">عدد التذاكر</label>
                                    <input type="text" pattern="\d+"  class="form-control" min="0" placeholder="عدد التذاكر"
                                    title="يقبل أرقام فقط" required="required">
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label class="label-input100" for="bank user-pwd">قيمة التذكرة</label>
                                    <input type="text" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" id="bank" class="form-control"
                                    placeholder="قيمة التذكرة" title="يقبل أرقام صحيحة وعشرية فقط" required="required">
                                    <br>
                                </div>
                           </div>
                          <div class="row">
                              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="date">تاريخ المغادرة</label>
                                    <input type="text" name="date" id="date" class="ddinput form-control" data-large-mode="true" required="required">
                                    <br>
                               </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="date">تاريخ العودة</label>
                                    <input type="text" name="date" id="date" class="ddinput form-control" data-large-mode="true" required="required">
                                    <br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="city">اختيار الموظف البديل</label>
                                        <select name="city" id="city" class="form-control" required="required">
                                            <option value="s">موظف 1</option>
                                            <option value="m">موظف 2</option>
                                            <option value="c">موظف 3</option>
                                        </select>
                                        <br>
                                </div>
                             </div>
                        <div class="margin-top-30 text-center"><button type="submit" href="#" class="btn btn-success update-pro">اضافة</button></div>
                      </form>
                    </div>
                    <!-- نهاية بيانات السفر -->
                    <!-- بيانات التأمين الطبي -->
                    <div class="tab-pane fade" id="tab-bottom-right8">
                        <form class="frm_addinsuranceemp" id="insuranceinfo-form" onsubmit="return processinsurance()">
                            <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <label for="">فئة التأمين</label>
                                        <select class="form-control" name="reseve_insurancetype" required> </select>
                                        <br>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <label for="">شركة التأمين</label>
                                        <select class="form-control" name="reseve_insurcompany" required> </select>
                                        <br>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <label for="">صلاحية التأمين</label>
                                        <select class="form-control" name="reseve_insurvalidity" required> </select>
                                        <br>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label for="insuranceNo">رقم بطاقة التأمين</label>
                                    <input type="text" class="form-control" placeholder="رقم بطاقة التأمين (أرقام فقط)" required name="insuranceNo" id="insuranceNo" pattern="[0-9]*" title="الرجاء ادخال ارقام فقط">
                                    <br>
                                </div>
                            </div>
                            <div class="margin-top-30 text-center"><button type="submit" href="#" class="btn btn-success update-pro">اضافة</button></div>
                        </form>
                    </div>
                    <!-- نهاية بيانات التأمين الطبي -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
<div class="clearfix"></div>
<?php include 'footer.php'; ?>
</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
  <script src="../assets/scripts/datedropper.js"></script>
  <script>$('.ddinput').dateDropper();</script>

 

<!-- print-function -->
<!-- <script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script> -->
</body>

</html>
