@extends('layouts.master')

@section('title') {{'تعديل بيانات المستخدم'}} @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') المستخدمين @endslot
        @slot('title') تعديل بيانات المستخدم @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                  
                    <form action="{{ route('users.update' , $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">الإسم</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}" id="formrow-firstname-input" placeholder="قم بإدخال الاسم">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">البريد الإلكتروني</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" id="formrow-email-input" placeholder="قم بإدخال البريد الإلكتروني">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">رقم الجوال</label>
                                    <input type="text" name="phone" onkeypress="return isNumber(event)" class="form-control @error('phone') is-invalid @enderror"  value="{{$user->phone}}" id="formrow-email-input" placeholder="قم بإدخال رقم الجوال">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    
                                        <label class="form-label" for="gridCheck">الجنس </label>
                                        <select id="type" class="form-select" name="type">
                                            <option selected hidden value="{{$user->gender}}">{{$user->gender == 'male' ? 'ذكر' : 'أنثى'}}</option>
                                            <option value="male">ذكر</option>
                                            <option value="female">أنثى</option>
                                        </select>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="type" class="form-label">نوع المستخدم</label>
                                    <!-- All countries -->
                                    <select id="type" class="form-select" name="type">
                                        <option selected hidden value="{{$user->type}}">{{$user->type == 'admin' ? 'مشرف' : 'مستخدم'}}</option>
                                        <option value="admin">مشرف</option>
                                        <option value="client">مستخدم</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="country" class="form-label">الدولة</label>
                                    <!-- All countries -->
                                    <select id="country" class="form-select" name="country">
                                        <option selected disabled hidden>الدولة</option>
                                        <option value="Afghanistan">أفغانستان</option>
                                        <option value="Aland Islands">جزر آلاند</option>
                                        <option value="Albania">ألبانيا</option>
                                        <option value="Algeria">الجزائر</option>
                                        <option value="American Samoa">ساموا الأمريكية</option>
                                        <option value="Andorra">أندورا</option>
                                        <option value="Angola">أنغولا</option>
                                        <option value="Anguilla">أنغيلا</option>
                                        <option value="Antarctica">أنتاركتيكا</option>
                                        <option value="Antigua and Barbuda">أنتيغوا وبربودا</option>
                                        <option value="Argentina">الأرجنتين</option>
                                        <option value="Armenia">أرمينيا</option>
                                        <option value="Aruba">أروبا</option>
                                        <option value="Australia">أستراليا</option>
                                        <option value="Austria">النمسا</option>
                                        <option value="Azerbaijan">أذربيجان</option>
                                        <option value="Bahamas">جزر البهاما</option>
                                        <option value="Bahrain">البحرين</option>
                                        <option value="Bangladesh">بنغلاديش</option>
                                        <option value="Barbados">بربادوس</option>
                                        <option value="Belarus">بيلاروسيا</option>
                                        <option value="Belgium">بلجيكا</option>
                                        <option value="Belize">بليز</option>
                                        <option value="Benin">بنين</option>
                                        <option value="Bermuda">برمودا</option>
                                        <option value="Bhutan">بوتان</option>
                                        <option value="Bolivia">بوليفيا</option>
                                        <option value="Bonaire, Sint Eustatius and Saba">بونير وسانت يوستاتيوس وسابا
                                        </option>
                                        <option value="Bosnia and Herzegovina">البوسنة والهرسك</option>
                                        <option value="Botswana">بوتسوانا</option>
                                        <option value="Bouvet Island">جزيرة بوفيت</option>
                                        <option value="Brazil">البرازيل</option>
                                        <option value="British Indian Ocean Territory">إقليم المحيط البريطاني الهندي
                                        </option>
                                        <option value="Brunei Darussalam">بروناي دار السلام</option>
                                        <option value="Bulgaria">بلغاريا</option>
                                        <option value="Burkina Faso">بوركينا فاسو</option>
                                        <option value="Burundi">بوروندي</option>
                                        <option value="Cambodia">كمبوديا</option>
                                        <option value="Cameroon">الكاميرون</option>
                                        <option value="Canada">كندا</option>
                                        <option value="Cape Verde">الرأس الأخضر</option>
                                        <option value="Cayman Islands">جزر كايمان</option>
                                        <option value="Central African Republic">جمهورية افريقيا الوسطى</option>
                                        <option value="Chad">تشاد</option>
                                        <option value="Chile">تشيلي</option>
                                        <option value="China">الصين</option>
                                        <option value="Christmas Island">جزيرة الكريسماس</option>
                                        <option value="Cocos (Keeling) Islands">جزر كوكوس (كيلينغ)</option>
                                        <option value="Colombia">كولومبيا</option>
                                        <option value="Comoros">جزر القمر</option>
                                        <option value="Congo">الكونغو</option>
                                        <option value="Congo, Democratic Republic of the Congo">الكونغو ، جمهورية الكونغو
                                            الديمقراطية</option>
                                        <option value="Cook Islands">جزر كوك</option>
                                        <option value="Costa Rica">كوستا ريكا</option>
                                        <option value="Cote D'Ivoire">ساحل العاج</option>
                                        <option value="Croatia">كرواتيا</option>
                                        <option value="Cuba">كوبا</option>
                                        <option value="Curacao">كوراكاو</option>
                                        <option value="Cyprus">قبرص</option>
                                        <option value="Czech Republic">الجمهورية التشيكية</option>
                                        <option value="Denmark">الدنمارك</option>
                                        <option value="Djibouti">جيبوتي</option>
                                        <option value="Dominica">دومينيكا</option>
                                        <option value="Dominican Republic">جمهورية الدومنيكان</option>
                                        <option value="Ecuador">الاكوادور</option>
                                        <option value="Egypt">مصر</option>
                                        <option value="El Salvador">السلفادور</option>
                                        <option value="Equatorial Guinea">غينيا الإستوائية</option>
                                        <option value="Eritrea">إريتريا</option>
                                        <option value="Estonia">إستونيا</option>
                                        <option value="Ethiopia">أثيوبيا</option>
                                        <option value="Falkland Islands (Malvinas)">جزر فوكلاند (مالفيناس)</option>
                                        <option value="Faroe Islands">جزر فاروس</option>
                                        <option value="Fiji">فيجي</option>
                                        <option value="Finland">فنلندا</option>
                                        <option value="France">فرنسا</option>
                                        <option value="French Guiana">غيانا الفرنسية</option>
                                        <option value="French Polynesia">بولينيزيا الفرنسية</option>
                                        <option value="French Southern Territories">المناطق الجنوبية لفرنسا</option>
                                        <option value="Gabon">الجابون</option>
                                        <option value="Gambia">غامبيا</option>
                                        <option value="Georgia">جورجيا</option>
                                        <option value="Germany">ألمانيا</option>
                                        <option value="Ghana">غانا</option>
                                        <option value="Gibraltar">جبل طارق</option>
                                        <option value="Greece">اليونان</option>
                                        <option value="Greenland">الأرض الخضراء</option>
                                        <option value="Grenada">غرينادا</option>
                                        <option value="Guadeloupe">جوادلوب</option>
                                        <option value="Guam">غوام</option>
                                        <option value="Guatemala">غواتيمالا</option>
                                        <option value="Guernsey">غيرنسي</option>
                                        <option value="Guinea">غينيا</option>
                                        <option value="Guinea-Bissau">غينيا بيساو</option>
                                        <option value="Guyana">غيانا</option>
                                        <option value="Haiti">هايتي</option>
                                        <option value="Heard Island and Mcdonald Islands">قلب الجزيرة وجزر ماكدونالز
                                        </option>
                                        <option value="Holy See (Vatican City State)">الكرسي الرسولي (دولة الفاتيكان)
                                        </option>
                                        <option value="Honduras">هندوراس</option>
                                        <option value="Hong Kong">هونج كونج</option>
                                        <option value="Hungary">هنغاريا</option>
                                        <option value="Iceland">أيسلندا</option>
                                        <option value="India">الهند</option>
                                        <option value="Indonesia">إندونيسيا</option>
                                        <option value="Iran, Islamic Republic of">جمهورية إيران الإسلامية</option>
                                        <option value="Iraq">العراق</option>
                                        <option value="Ireland">أيرلندا</option>
                                        <option value="Isle of Man">جزيرة آيل أوف مان</option>
                                        <option value="Israel">إسرائيل</option>
                                        <option value="Italy">إيطاليا</option>
                                        <option value="Jamaica">جامايكا</option>
                                        <option value="Japan">اليابان</option>
                                        <option value="Jersey">جيرسي</option>
                                        <option value="Jordan">الأردن</option>
                                        <option value="Kazakhstan">كازاخستان</option>
                                        <option value="Kenya">كينيا</option>
                                        <option value="Kiribati">كيريباتي</option>
                                        <option value="Korea, Democratic People's Republic of">كوريا، الجمهورية الشعبية
                                            الديمقراطية</option>
                                        <option value="Korea, Republic of">جمهورية كوريا</option>
                                        <option value="Kosovo">كوسوفو</option>
                                        <option value="Kuwait">الكويت</option>
                                        <option value="Kyrgyzstan">قيرغيزستان</option>
                                        <option value="Lao People's Democratic Republic">جمهورية لاو الديمقراطية الشعبية
                                        </option>
                                        <option value="Latvia">لاتفيا</option>
                                        <option value="Lebanon">لبنان</option>
                                        <option value="Lesotho">ليسوتو</option>
                                        <option value="Liberia">ليبيريا</option>
                                        <option value="Libyan Arab Jamahiriya">الجماهيرية العربية الليبية</option>
                                        <option value="Liechtenstein">ليختنشتاين</option>
                                        <option value="Lithuania">ليتوانيا</option>
                                        <option value="Luxembourg">لوكسمبورغ</option>
                                        <option value="Macao">ماكاو</option>
                                        <option value="Macedonia, the Former Yugoslav Republic of">مقدونيا ، جمهورية
                                            يوغوسلافيا السابقة</option>
                                        <option value="Madagascar">مدغشقر</option>
                                        <option value="Malawi">ملاوي</option>
                                        <option value="Malaysia">ماليزيا</option>
                                        <option value="Maldives">جزر المالديف</option>
                                        <option value="Mali">مالي</option>
                                        <option value="Malta">مالطا</option>
                                        <option value="Marshall Islands">جزر مارشال</option>
                                        <option value="Martinique">مارتينيك</option>
                                        <option value="Mauritania">موريتانيا</option>
                                        <option value="Mauritius">موريشيوس</option>
                                        <option value="Mayotte">مايوت</option>
                                        <option value="Mexico">المكسيك</option>
                                        <option value="Micronesia, Federated States of">ولايات ميكرونيزيا الموحدة</option>
                                        <option value="Moldova, Republic of">جمهورية مولدوفا</option>
                                        <option value="Monaco">موناكو</option>
                                        <option value="Mongolia">منغوليا</option>
                                        <option value="Montenegro">الجبل الأسود</option>
                                        <option value="Montserrat">مونتسيرات</option>
                                        <option value="Morocco">المغرب</option>
                                        <option value="Mozambique">موزمبيق</option>
                                        <option value="Myanmar">ميانمار</option>
                                        <option value="Namibia">ناميبيا</option>
                                        <option value="Nauru">ناورو</option>
                                        <option value="Nepal">نيبال</option>
                                        <option value="Netherlands">هولندا</option>
                                        <option value="Netherlands Antilles">جزر الأنتيل الهولندية</option>
                                        <option value="New Caledonia">كاليدونيا الجديدة</option>
                                        <option value="New Zealand">نيوزيلاندا</option>
                                        <option value="Nicaragua">نيكاراغوا</option>
                                        <option value="Niger">النيجر</option>
                                        <option value="Nigeria">نيجيريا</option>
                                        <option value="Niue">نيوي</option>
                                        <option value="Norfolk Island">جزيرة نورفولك</option>
                                        <option value="Northern Mariana Islands">جزر مريانا الشمالية</option>
                                        <option value="Norway">النرويج</option>
                                        <option value="Oman">سلطنة عمان</option>
                                        <option value="Pakistan">باكستان</option>
                                        <option value="Palau">بالاو</option>
                                        <option value="Palestinian Territory, Occupied">الأراضي الفلسطينية المحتلة</option>
                                        <option value="Panama">بنما</option>
                                        <option value="Papua New Guinea">بابوا غينيا الجديدة</option>
                                        <option value="Paraguay">باراغواي</option>
                                        <option value="Peru">بيرو</option>
                                        <option value="Philippines">فيلبيني</option>
                                        <option value="Pitcairn">بيتكيرن</option>
                                        <option value="Poland">بولندا</option>
                                        <option value="Portugal">البرتغال</option>
                                        <option value="Puerto Rico">بورتوريكو</option>
                                        <option value="Qatar">دولة قطر</option>
                                        <option value="Reunion">جمع شمل</option>
                                        <option value="Romania">رومانيا</option>
                                        <option value="Russian Federation">الاتحاد الروسي</option>
                                        <option value="Rwanda">رواندا</option>
                                        <option value="Saint Barthelemy">سانت بارتيليمي</option>
                                        <option value="Saint Helena">سانت هيلانة</option>
                                        <option value="Saint Kitts and Nevis">سانت كيتس ونيفيس</option>
                                        <option value="Saint Lucia">القديسة لوسيا</option>
                                        <option value="Saint Martin">القديس مارتن</option>
                                        <option value="Saint Pierre and Miquelon">سانت بيير وميكلون</option>
                                        <option value="Saint Vincent and the Grenadines">سانت فنسنت وجزر غرينادين</option>
                                        <option value="Samoa">ساموا</option>
                                        <option value="San Marino">سان مارينو</option>
                                        <option value="Sao Tome and Principe">ساو تومي وبرينسيبي</option>
                                        <option value="Saudi Arabia">المملكة العربية السعودية</option>
                                        <option value="Senegal">السنغال</option>
                                        <option value="Serbia">صربيا</option>
                                        <option value="Serbia and Montenegro">صربيا والجبل الأسود</option>
                                        <option value="Seychelles">سيشيل</option>
                                        <option value="Sierra Leone">سيرا ليون</option>
                                        <option value="Singapore">سنغافورة</option>
                                        <option value="Sint Maarten">سينت مارتن</option>
                                        <option value="Slovakia">سلوفاكيا</option>
                                        <option value="Slovenia">سلوفينيا</option>
                                        <option value="Solomon Islands">جزر سليمان</option>
                                        <option value="Somalia">الصومال</option>
                                        <option value="South Africa">جنوب أفريقيا</option>
                                        <option value="South Georgia and the South Sandwich Islands">جورجيا الجنوبية وجزر
                                            ساندويتش الجنوبية</option>
                                        <option value="South Sudan">جنوب السودان</option>
                                        <option value="Spain">إسبانيا</option>
                                        <option value="Sri Lanka">سيريلانكا</option>
                                        <option value="Sudan">السودان</option>
                                        <option value="Suriname">سورينام</option>
                                        <option value="Svalbard and Jan Mayen">سفالبارد وجان ماين</option>
                                        <option value="Swaziland">سوازيلاند</option>
                                        <option value="Sweden">السويد</option>
                                        <option value="Switzerland">سويسرا</option>
                                        <option value="Syrian Arab Republic">الجمهورية العربية السورية</option>
                                        <option value="Taiwan, Province of China">مقاطعة تايوان الصينية</option>
                                        <option value="Tajikistan">طاجيكستان</option>
                                        <option value="Tanzania, United Republic of">جمهورية تنزانيا المتحدة</option>
                                        <option value="Thailand">تايلاند</option>
                                        <option value="Timor-Leste">تيمور ليشتي</option>
                                        <option value="Togo">توجو</option>
                                        <option value="Tokelau">توكيلاو</option>
                                        <option value="Tonga">تونغا</option>
                                        <option value="Trinidad and Tobago">ترينداد وتوباغو</option>
                                        <option value="Tunisia">تونس</option>
                                        <option value="Turkey">ديك رومى</option>
                                        <option value="Turkmenistan">تركمانستان</option>
                                        <option value="Turks and Caicos Islands">جزر تركس وكايكوس</option>
                                        <option value="Tuvalu">توفالو</option>
                                        <option value="Uganda">أوغندا</option>
                                        <option value="Ukraine">أوكرانيا</option>
                                        <option value="United Arab Emirates">الإمارات العربية المتحدة</option>
                                        <option value="United Kingdom">المملكة المتحدة</option>
                                        <option value="United States">الولايات المتحدة</option>
                                        <option value="United States Minor Outlying Islands">جزر الولايات المتحدة البعيدة
                                            الصغرى</option>
                                        <option value="Uruguay">أوروغواي</option>
                                        <option value="Uzbekistan">أوزبكستان</option>
                                        <option value="Vanuatu">فانواتو</option>
                                        <option value="Venezuela">فنزويلا</option>
                                        <option value="Viet Nam">فييت نام</option>
                                        <option value="Virgin Islands, British">جزر العذراء البريطانية</option>
                                        <option value="Virgin Islands, U.s.">جزر فيرجن ، الولايات المتحدة</option>
                                        <option value="Wallis and Futuna">واليس وفوتونا</option>
                                        <option value="Western Sahara">الصحراء الغربية</option>
                                        <option value="Yemen">اليمن</option>
                                        <option value="Zambia">زامبيا</option>
                                        <option value="Zimbabwe">زيمبابوي</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="city" class="form-label">المدينة</label>
                                    <select id="city" class="form-select" name="city">
                                        <option selected disabled hidden>المدينة</option>
                                        <option value="Afghanistan">أفغانستان</option>
                                        <option value="Aland Islands">جزر آلاند</option>
                                        <option value="Albania">ألبانيا</option>
                                        <option value="Algeria">الجزائر</option>
                                        <option value="American Samoa">ساموا الأمريكية</option>
                                        <option value="Andorra">أندورا</option>
                                        <option value="Angola">أنغولا</option>
                                        <option value="Anguilla">أنغيلا</option>
                                        <option value="Antarctica">أنتاركتيكا</option>
                                        <option value="Antigua and Barbuda">أنتيغوا وبربودا</option>
                                        <option value="Argentina">الأرجنتين</option>
                                        <option value="Armenia">أرمينيا</option>
                                        <option value="Aruba">أروبا</option>
                                        <option value="Australia">أستراليا</option>
                                        <option value="Austria">النمسا</option>
                                        <option value="Azerbaijan">أذربيجان</option>
                                        <option value="Bahamas">جزر البهاما</option>
                                        <option value="Bahrain">البحرين</option>
                                        <option value="Bangladesh">بنغلاديش</option>
                                        <option value="Barbados">بربادوس</option>
                                        <option value="Belarus">بيلاروسيا</option>
                                        <option value="Belgium">بلجيكا</option>
                                        <option value="Belize">بليز</option>
                                        <option value="Benin">بنين</option>
                                        <option value="Bermuda">برمودا</option>
                                        <option value="Bhutan">بوتان</option>
                                        <option value="Bolivia">بوليفيا</option>
                                        <option value="Bonaire, Sint Eustatius and Saba">بونير وسانت يوستاتيوس وسابا
                                        </option>
                                        <option value="Bosnia and Herzegovina">البوسنة والهرسك</option>
                                        <option value="Botswana">بوتسوانا</option>
                                        <option value="Bouvet Island">جزيرة بوفيت</option>
                                        <option value="Brazil">البرازيل</option>
                                        <option value="British Indian Ocean Territory">إقليم المحيط البريطاني الهندي
                                        </option>
                                        <option value="Brunei Darussalam">بروناي دار السلام</option>
                                        <option value="Bulgaria">بلغاريا</option>
                                        <option value="Burkina Faso">بوركينا فاسو</option>
                                        <option value="Burundi">بوروندي</option>
                                        <option value="Cambodia">كمبوديا</option>
                                        <option value="Cameroon">الكاميرون</option>
                                        <option value="Canada">كندا</option>
                                        <option value="Cape Verde">الرأس الأخضر</option>
                                        <option value="Cayman Islands">جزر كايمان</option>
                                        <option value="Central African Republic">جمهورية افريقيا الوسطى</option>
                                        <option value="Chad">تشاد</option>
                                        <option value="Chile">تشيلي</option>
                                        <option value="China">الصين</option>
                                        <option value="Christmas Island">جزيرة الكريسماس</option>
                                        <option value="Cocos (Keeling) Islands">جزر كوكوس (كيلينغ)</option>
                                        <option value="Colombia">كولومبيا</option>
                                        <option value="Comoros">جزر القمر</option>
                                        <option value="Congo">الكونغو</option>
                                        <option value="Congo, Democratic Republic of the Congo">الكونغو ، جمهورية الكونغو
                                            الديمقراطية</option>
                                        <option value="Cook Islands">جزر كوك</option>
                                        <option value="Costa Rica">كوستا ريكا</option>
                                        <option value="Cote D'Ivoire">ساحل العاج</option>
                                        <option value="Croatia">كرواتيا</option>
                                        <option value="Cuba">كوبا</option>
                                        <option value="Curacao">كوراكاو</option>
                                        <option value="Cyprus">قبرص</option>
                                        <option value="Czech Republic">الجمهورية التشيكية</option>
                                        <option value="Denmark">الدنمارك</option>
                                        <option value="Djibouti">جيبوتي</option>
                                        <option value="Dominica">دومينيكا</option>
                                        <option value="Dominican Republic">جمهورية الدومنيكان</option>
                                        <option value="Ecuador">الاكوادور</option>
                                        <option value="Egypt">مصر</option>
                                        <option value="El Salvador">السلفادور</option>
                                        <option value="Equatorial Guinea">غينيا الإستوائية</option>
                                        <option value="Eritrea">إريتريا</option>
                                        <option value="Estonia">إستونيا</option>
                                        <option value="Ethiopia">أثيوبيا</option>
                                        <option value="Falkland Islands (Malvinas)">جزر فوكلاند (مالفيناس)</option>
                                        <option value="Faroe Islands">جزر فاروس</option>
                                        <option value="Fiji">فيجي</option>
                                        <option value="Finland">فنلندا</option>
                                        <option value="France">فرنسا</option>
                                        <option value="French Guiana">غيانا الفرنسية</option>
                                        <option value="French Polynesia">بولينيزيا الفرنسية</option>
                                        <option value="French Southern Territories">المناطق الجنوبية لفرنسا</option>
                                        <option value="Gabon">الجابون</option>
                                        <option value="Gambia">غامبيا</option>
                                        <option value="Georgia">جورجيا</option>
                                        <option value="Germany">ألمانيا</option>
                                        <option value="Ghana">غانا</option>
                                        <option value="Gibraltar">جبل طارق</option>
                                        <option value="Greece">اليونان</option>
                                        <option value="Greenland">الأرض الخضراء</option>
                                        <option value="Grenada">غرينادا</option>
                                        <option value="Guadeloupe">جوادلوب</option>
                                        <option value="Guam">غوام</option>
                                        <option value="Guatemala">غواتيمالا</option>
                                        <option value="Guernsey">غيرنسي</option>
                                        <option value="Guinea">غينيا</option>
                                        <option value="Guinea-Bissau">غينيا بيساو</option>
                                        <option value="Guyana">غيانا</option>
                                        <option value="Haiti">هايتي</option>
                                        <option value="Heard Island and Mcdonald Islands">قلب الجزيرة وجزر ماكدونالز
                                        </option>
                                        <option value="Holy See (Vatican City State)">الكرسي الرسولي (دولة الفاتيكان)
                                        </option>
                                        <option value="Honduras">هندوراس</option>
                                        <option value="Hong Kong">هونج كونج</option>
                                        <option value="Hungary">هنغاريا</option>
                                        <option value="Iceland">أيسلندا</option>
                                        <option value="India">الهند</option>
                                        <option value="Indonesia">إندونيسيا</option>
                                        <option value="Iran, Islamic Republic of">جمهورية إيران الإسلامية</option>
                                        <option value="Iraq">العراق</option>
                                        <option value="Ireland">أيرلندا</option>
                                        <option value="Isle of Man">جزيرة آيل أوف مان</option>
                                        <option value="Israel">إسرائيل</option>
                                        <option value="Italy">إيطاليا</option>
                                        <option value="Jamaica">جامايكا</option>
                                        <option value="Japan">اليابان</option>
                                        <option value="Jersey">جيرسي</option>
                                        <option value="Jordan">الأردن</option>
                                        <option value="Kazakhstan">كازاخستان</option>
                                        <option value="Kenya">كينيا</option>
                                        <option value="Kiribati">كيريباتي</option>
                                        <option value="Korea, Democratic People's Republic of">كوريا، الجمهورية الشعبية
                                            الديمقراطية</option>
                                        <option value="Korea, Republic of">جمهورية كوريا</option>
                                        <option value="Kosovo">كوسوفو</option>
                                        <option value="Kuwait">الكويت</option>
                                        <option value="Kyrgyzstan">قيرغيزستان</option>
                                        <option value="Lao People's Democratic Republic">جمهورية لاو الديمقراطية الشعبية
                                        </option>
                                        <option value="Latvia">لاتفيا</option>
                                        <option value="Lebanon">لبنان</option>
                                        <option value="Lesotho">ليسوتو</option>
                                        <option value="Liberia">ليبيريا</option>
                                        <option value="Libyan Arab Jamahiriya">الجماهيرية العربية الليبية</option>
                                        <option value="Liechtenstein">ليختنشتاين</option>
                                        <option value="Lithuania">ليتوانيا</option>
                                        <option value="Luxembourg">لوكسمبورغ</option>
                                        <option value="Macao">ماكاو</option>
                                        <option value="Macedonia, the Former Yugoslav Republic of">مقدونيا ، جمهورية
                                            يوغوسلافيا السابقة</option>
                                        <option value="Madagascar">مدغشقر</option>
                                        <option value="Malawi">ملاوي</option>
                                        <option value="Malaysia">ماليزيا</option>
                                        <option value="Maldives">جزر المالديف</option>
                                        <option value="Mali">مالي</option>
                                        <option value="Malta">مالطا</option>
                                        <option value="Marshall Islands">جزر مارشال</option>
                                        <option value="Martinique">مارتينيك</option>
                                        <option value="Mauritania">موريتانيا</option>
                                        <option value="Mauritius">موريشيوس</option>
                                        <option value="Mayotte">مايوت</option>
                                        <option value="Mexico">المكسيك</option>
                                        <option value="Micronesia, Federated States of">ولايات ميكرونيزيا الموحدة</option>
                                        <option value="Moldova, Republic of">جمهورية مولدوفا</option>
                                        <option value="Monaco">موناكو</option>
                                        <option value="Mongolia">منغوليا</option>
                                        <option value="Montenegro">الجبل الأسود</option>
                                        <option value="Montserrat">مونتسيرات</option>
                                        <option value="Morocco">المغرب</option>
                                        <option value="Mozambique">موزمبيق</option>
                                        <option value="Myanmar">ميانمار</option>
                                        <option value="Namibia">ناميبيا</option>
                                        <option value="Nauru">ناورو</option>
                                        <option value="Nepal">نيبال</option>
                                        <option value="Netherlands">هولندا</option>
                                        <option value="Netherlands Antilles">جزر الأنتيل الهولندية</option>
                                        <option value="New Caledonia">كاليدونيا الجديدة</option>
                                        <option value="New Zealand">نيوزيلاندا</option>
                                        <option value="Nicaragua">نيكاراغوا</option>
                                        <option value="Niger">النيجر</option>
                                        <option value="Nigeria">نيجيريا</option>
                                        <option value="Niue">نيوي</option>
                                        <option value="Norfolk Island">جزيرة نورفولك</option>
                                        <option value="Northern Mariana Islands">جزر مريانا الشمالية</option>
                                        <option value="Norway">النرويج</option>
                                        <option value="Oman">سلطنة عمان</option>
                                        <option value="Pakistan">باكستان</option>
                                        <option value="Palau">بالاو</option>
                                        <option value="Palestinian Territory, Occupied">الأراضي الفلسطينية المحتلة</option>
                                        <option value="Panama">بنما</option>
                                        <option value="Papua New Guinea">بابوا غينيا الجديدة</option>
                                        <option value="Paraguay">باراغواي</option>
                                        <option value="Peru">بيرو</option>
                                        <option value="Philippines">فيلبيني</option>
                                        <option value="Pitcairn">بيتكيرن</option>
                                        <option value="Poland">بولندا</option>
                                        <option value="Portugal">البرتغال</option>
                                        <option value="Puerto Rico">بورتوريكو</option>
                                        <option value="Qatar">دولة قطر</option>
                                        <option value="Reunion">جمع شمل</option>
                                        <option value="Romania">رومانيا</option>
                                        <option value="Russian Federation">الاتحاد الروسي</option>
                                        <option value="Rwanda">رواندا</option>
                                        <option value="Saint Barthelemy">سانت بارتيليمي</option>
                                        <option value="Saint Helena">سانت هيلانة</option>
                                        <option value="Saint Kitts and Nevis">سانت كيتس ونيفيس</option>
                                        <option value="Saint Lucia">القديسة لوسيا</option>
                                        <option value="Saint Martin">القديس مارتن</option>
                                        <option value="Saint Pierre and Miquelon">سانت بيير وميكلون</option>
                                        <option value="Saint Vincent and the Grenadines">سانت فنسنت وجزر غرينادين</option>
                                        <option value="Samoa">ساموا</option>
                                        <option value="San Marino">سان مارينو</option>
                                        <option value="Sao Tome and Principe">ساو تومي وبرينسيبي</option>
                                        <option value="Saudi Arabia">المملكة العربية السعودية</option>
                                        <option value="Senegal">السنغال</option>
                                        <option value="Serbia">صربيا</option>
                                        <option value="Serbia and Montenegro">صربيا والجبل الأسود</option>
                                        <option value="Seychelles">سيشيل</option>
                                        <option value="Sierra Leone">سيرا ليون</option>
                                        <option value="Singapore">سنغافورة</option>
                                        <option value="Sint Maarten">سينت مارتن</option>
                                        <option value="Slovakia">سلوفاكيا</option>
                                        <option value="Slovenia">سلوفينيا</option>
                                        <option value="Solomon Islands">جزر سليمان</option>
                                        <option value="Somalia">الصومال</option>
                                        <option value="South Africa">جنوب أفريقيا</option>
                                        <option value="South Georgia and the South Sandwich Islands">جورجيا الجنوبية وجزر
                                            ساندويتش الجنوبية</option>
                                        <option value="South Sudan">جنوب السودان</option>
                                        <option value="Spain">إسبانيا</option>
                                        <option value="Sri Lanka">سيريلانكا</option>
                                        <option value="Sudan">السودان</option>
                                        <option value="Suriname">سورينام</option>
                                        <option value="Svalbard and Jan Mayen">سفالبارد وجان ماين</option>
                                        <option value="Swaziland">سوازيلاند</option>
                                        <option value="Sweden">السويد</option>
                                        <option value="Switzerland">سويسرا</option>
                                        <option value="Syrian Arab Republic">الجمهورية العربية السورية</option>
                                        <option value="Taiwan, Province of China">مقاطعة تايوان الصينية</option>
                                        <option value="Tajikistan">طاجيكستان</option>
                                        <option value="Tanzania, United Republic of">جمهورية تنزانيا المتحدة</option>
                                        <option value="Thailand">تايلاند</option>
                                        <option value="Timor-Leste">تيمور ليشتي</option>
                                        <option value="Togo">توجو</option>
                                        <option value="Tokelau">توكيلاو</option>
                                        <option value="Tonga">تونغا</option>
                                        <option value="Trinidad and Tobago">ترينداد وتوباغو</option>
                                        <option value="Tunisia">تونس</option>
                                        <option value="Turkey">ديك رومى</option>
                                        <option value="Turkmenistan">تركمانستان</option>
                                        <option value="Turks and Caicos Islands">جزر تركس وكايكوس</option>
                                        <option value="Tuvalu">توفالو</option>
                                        <option value="Uganda">أوغندا</option>
                                        <option value="Ukraine">أوكرانيا</option>
                                        <option value="United Arab Emirates">الإمارات العربية المتحدة</option>
                                        <option value="United Kingdom">المملكة المتحدة</option>
                                        <option value="United States">الولايات المتحدة</option>
                                        <option value="United States Minor Outlying Islands">جزر الولايات المتحدة البعيدة
                                            الصغرى</option>
                                        <option value="Uruguay">أوروغواي</option>
                                        <option value="Uzbekistan">أوزبكستان</option>
                                        <option value="Vanuatu">فانواتو</option>
                                        <option value="Venezuela">فنزويلا</option>
                                        <option value="Viet Nam">فييت نام</option>
                                        <option value="Virgin Islands, British">جزر العذراء البريطانية</option>
                                        <option value="Virgin Islands, U.s.">جزر فيرجن ، الولايات المتحدة</option>
                                        <option value="Wallis and Futuna">واليس وفوتونا</option>
                                        <option value="Western Sahara">الصحراء الغربية</option>
                                        <option value="Yemen">اليمن</option>
                                        <option value="Zambia">زامبيا</option>
                                        <option value="Zimbabwe">زيمبابوي</option>
                                    </select>

                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="text-center">
                            <button type="submit" style="float: left;" class="btn btn-success w-lg yello">حفظ</button>
                        </div>
                    </form>
                   
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <script>
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
    </script>
@endsection
