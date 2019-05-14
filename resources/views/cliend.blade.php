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

  <!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">

                   <img src="logo4.png" style="text-align:center; padding: 30px; width: 90%;">

            <form  id="msform" action="{{ action('PhotoController@store') }}" method="POST">
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
                <li class="active"> الاقسام</li>
                <li>الاوقات</li>
                <li>المعلومات</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">
                    الرجاء أختيار القسم الذي ترغبون الحجز بة


                </h2>
                <h3 class="fs-subtitle"> .               </h3>

                <select class="form-control" id="patrs" required name="patrs">
              <option>عيادات الليزر</option>
              <option>عيادات الجلدية</option>
              <option>عيادات التغذية</option>
              <option>عيادات طب الاسرة</option>
              <option>عيادات الاسنان</option>
               </select>

                <input type="button" name="next" class="next action-button" value="التالي"/>

            </fieldset>
            <fieldset>
                <h2 class="fs-title"> أفضل الأوقات للتواصل معكم  </h2>
                <h3 class="fs-subtitle"></h3>

                <select class="form-control" id="time" required name="time">
              <option>٩صباحا الى ١٢ مساء</option>
              <option>٣ مساء الى ٦ مساء</option>
              <option>٦ مساء الى ٩ مساء</option>
               </select>
               <input type="button" name="next" class="next action-button" value="التالي"/>

              <input type="button" name="previous" class="previous action-button-previous" value="السابق"/>

            </fieldset>
            <fieldset>
                <h2 class="fs-title">معلومات التواصل </h2>
                <h3 class="fs-subtitle"> . </h3>
                <input type="text" id="name" name="name"    placeholder="الأسم الثلاثي" required/>
                <input type="text" id="number" name="number"  placeholder="05xxxxxxxx" required/>
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



    <script  src="js/index.js"></script>



</body>

</html>
