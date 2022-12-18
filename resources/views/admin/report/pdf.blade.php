<!DOCTYPE html>
<html>
<style>
  body {
    padding-top: 30px;
  }

  table {
    width: 100%;
  }

  table,
  th,
  td {
    border: 1px solid #76767c;
    border-collapse: collapse;
    padding-top: 5px;

  }

  th {
    padding-bottom: 10px;
  }

  .title {
    height: 35px;
    color: white;
    font-size: 17px;
    background-color: #403784;
    width: 20%;
    text-align: -webkit-center;
    padding-top: 10px;
  }

  .content {
    color: black;
    font-size: 15px;
    /* background-0
    color: black; */
    /* width: 20%; */
    text-align: -webkit-center;
    /* padding-top: 10px; */
  }

  .border {
    border: 0px solid white;
    /* border-bottom-color: white; */
  }

  span {
    padding-right: 50px;
  }

  h2 {
    text-align: center;
    height: 37px;
    color: white;
    font-size: 12px;
    background-color: #403784;
    padding-top: 12px;
    display: list-item;
    margin-top: -151px;

  }

  .footer {
    /* width: 100%; */
    height: 40px;
    color: white;
    font-size: 17px;
    background-color: #403784;
    padding-top: 10px;
    width: 20%;
    text-align: -webkit-center;
    border: 0px solid #403784;
    justify-content: center;
  }
</style>

<body>
  <table style="width:100%">
    <tr class="pad">
      <th class="title" align="center">المشكلة -الفرصة</th>
      <th class="title" align="center">الحل</th>
      <th class="title" align="center">القيمة المقترحة</th>
      <th class="title" align="center">الميزة التنافسية</th>
      <th class="title" align="center">السوق المستهدف والعملاء</th>

    </tr>

    <tr>
      <td rowspan="3" class="content" style=" height: 170px;">
        @foreach ($problems as $item)
        {{$item->problem}}<br />
        @endforeach<br />
      </td>

      <td class="content" style="height: 190px;">
        @foreach ($solutions as $item)
        {{$item->solution}} <br />
        @endforeach<br />
      </td>
      <td class="content" rowspan="3" style="height: 170px;">
        @foreach ($suggestedValue as $item)
        {{$item->suggested_value}}
        @endforeach
      </td>
      <td class="content" style="height:190px;">
        @foreach ($competitive as $item)
        {{$item->competitive_advantage}}<br />
        @endforeach
      </td>
      <td class="content" rowspan="3" style="height: 170px;">
        @foreach ($targetCustomer as $item)
        {{$item->target_customer}}
        @endforeach<br />

        @foreach ($targetMarket as $item)
        {{$item->target_market}}
        @endforeach<br />
      </td>
    </tr>
    <tr>
      <td class="title" align="center">الأنشطة الرئيسية</td>
      <td class="title" align="center"> قنوات التسويق والبيع </td>
    </tr>

    <tr>
      <td class="content" style="height: 130px;">
        @foreach ($mainActive as $item)
        {{$item->title}}
        @endforeach<br />
      </td>
      <td class="content" style="height: 130px;">
        @foreach ($marketingChannel as $item)
        {{$item->title}}
        @endforeach<br />
      </td>
    </tr>

  </table>

  <table style="width:100%">
    <tr>
      <th class="title" style="width: 16.5%;" align="center"> هيكل التكاليف </th>
      <th class="border"></th>
      <th class="border"></th>
      <th class="title" style="width: 18%;" align="center"> مصادر الايرادات</th>
      <th class="border"></th>
      <th class="border"></th>
    </tr>

    <tr style="height:70px" class="border">
      <td class="test" style="
               border-right-color: #76767c;
              border-bottom-color: white;
               height: 110px;width: 50%;" colspan="3" class="content">
        @foreach ($expensisModal as $item)
        {{$item->title}}
        @endforeach
      </td>
      <td class="border" colspan="3" style="
               height: 110px;width: 50%;border-bottom-color: white;" class="content">
        @foreach ($incomeSources as $item)
        {{$item->title}}
        @endforeach
      </td>
    </tr>

  </table>
  <table style="width:100%; ">
    <tr>
      <th class="footer" align="center">

        الاسم /
        @foreach ($user as $item)
        {{$item->name}}
        @endforeach
<br/>
      </th>
      <th class="footer" align="center"></th>
      <th class="footer" align="center">
        جوال /
        @foreach ($user as $item)
        {{$item->phone}}
        @endforeach
        <br/>

      </th>
      <th class="footer" align="center"></th>
      <th class="footer" align="center">
        ايميل/
        @foreach ($user as $item)
        {{$item->email}}
        @endforeach
        <br/>

      </th>
    </tr>


  </table>
</body>

</html> 





