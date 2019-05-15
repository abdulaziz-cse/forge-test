<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>مركز الرياض الطبي </title>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
      <link href="{{ asset('css/stylejob.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">

  <!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">

                   <img src="logo4.png" style="text-align:center; padding: 30px; width: 90%;">

            <form  id="msform" action="{{ action('JobController@store') }}" method="POST">
                {{ csrf_field() }}

                @if(session('success'))
                <div style="
                background: #cf9535;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
    padding: 20px 30px;
    box-sizing: border-box;
    width: 80%;
    margin: 0 10%;

    /*stacking fieldsets above each other*/
    position: relative;
                ">
                 {{session('success')}}.
                </div>
              @else
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active"> بيانات شخصية</li>
                <li>سيرة ذاتية</li>
                <li>تواصل</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">
                    الرجاء إدخال بعض المعلومات الشخصية

                </h2>
                <h3 class="fs-subtitle"> .               </h3>
                <input type="text" id="name" name="name"    placeholder="الأسم الثلاثي" required/>
                <input type="text" id="age" name="age"    placeholder="العمر" required/>
                <input type="text" id="sex" name="sex"    placeholder="الجنس" required/>
                <input type="text" id="DG" name="DG"    placeholder="الشهادة" required/>


                <input type="button" name="next" class="next action-button" value="التالي"/>

            </fieldset>
            <fieldset>
                <h2 class="fs-title"> السيرة الذاتية  </h2>
                <h3 class="fs-subtitle"></h3>

                <textarea type="text" id="about" name="about"    placeholder="سيرة ذاتية لاتتجاوز ٣٠٠ كلمة " ></textarea>
               <input type="button" name="next" class="next action-button" value="التالي"/>

              <input type="button" name="previous" class="previous action-button-previous" value="السابق"/>

            </fieldset>
            <fieldset>
                <h2 class="fs-title">معلومات التواصل </h2>
                <h3 class="fs-subtitle"> </h3>
                <input type="text" id="phone" name="phone"    placeholder="رقم التواصل " required/>
                <input type="text" id="email" name="email"  placeholder="البريد الالكتروني" required/>
                <button type="submit"  class="btn action-button"> إرسال</button>

                <input type="button" name="previous" class="previous action-button-previous" value="السابق"/>

            </fieldset>


    </div>
</div>


</form>
@endif


<!-- /.MultiStep Form -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>



    <script  src="js/index2.js"></script>




</body>

</html>
