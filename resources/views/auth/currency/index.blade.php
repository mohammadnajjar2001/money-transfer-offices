@extends('layouts.app')
@section('content')
@vite(['resources/sass/createoffice.scss', 'resources/js/home.js'])
<body>
    <main> 
         <div class="recent-orders" style="text-align: center">
                    <h1>
                        <a href="">أسعار الصرف </a></h1>
                    <select id="select" class="form-control" onchange="changeCurType()">
                    name_ar
                    <option value="damascus" selected>
                    دمشق
                    </option>
                    <option value="aleppo">
                    حلب
                    </option>
                    <option value="idlib">
                    إدلب
                        </option>
                    <option value="alhasakah">
                    الحسكة
                    </option>
                    </select>
                <br>
                <table class="table">
                <thead>
                <tr>
                <th id="datetime">  <script>
                    function updateDateTime() {
                        // إنشاء كائن Date للحصول على الوقت والتاريخ الحالي
                        var currentDate = new Date();
            
                        // تحديث العنصر في الصفحة بالوقت والتاريخ الحالي بتنسيق 12 ساعة
                        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true };
                        document.getElementById('datetime').innerHTML = currentDate.toLocaleString('en-US', options);
                    }
            
                    // تحديث الوقت والتاريخ كل ثانية (1000 مللي ثانية)
                    setInterval(updateDateTime, 1000);
            
                    // تشغيل الدالة لأول مرة عند تحميل الصفحة
                    updateDateTime();
                </script></th>
                <td>شراء </td>
                <td>مبيع </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                <th>
                <span>دولار أمريكي</span><span class="cur-ramz"> <strong>(USD)</strong>:</span>
                </th>
                <td><strong>14700</strong></td>
                <td><strong>14900</strong></td>
                <td class="change-td">
                
            
                </td>
                </tr>
                <tr>
                <th>
                
                <span>يورو</span><span class="cur-ramz"> <strong>(EUR)</strong>:</span>
                </th>
                <td><strong>15957</strong></td>
                <td><strong>16179</strong></td>
                <td class="change-td">
                
            
                </td>
                </tr>
                <tr>
                <th>
            
                <span>ليرة تركي</span><span class="cur-ramz"> <strong>(TRY)</strong>:</span>
                </th>
                <td><strong>486</strong></td>
                <td><strong>495</strong></td>
                <td class="change-td">
                
            
                </td>
                </tr>
                <tr>
                <th>
            
                <span>جنيه مصري</span><span class="cur-ramz"> <strong>(EGP)</strong>:</span>
                </th>
                <td><strong>473</strong></td>
                <td><strong>482</strong></td>
                <td class="change-td">
                
            
                </td>
                </tr>
                <tr>
                <th>
            
                <span>ريال سعودي</span><span class="cur-ramz"> <strong>(SAR)</strong>:</span>
                </th>
                <td><strong>3931</strong></td>
                <td><strong>3987</strong></td>
                <td class="change-td">
                
            
                </td>
                </tr>
                <tr>
                <th>
            
                <span>دينار أردني</span><span class="cur-ramz"> <strong>(JOD)</strong>:</span>
                </th>
                <td><strong>20730</strong></td>
                <td><strong>21020</strong></td>
                <td class="change-td">
                
            
                </td>
                </tr>
                <tr>
                <th>
            
                <span>درهم إماراتي</span><span class="cur-ramz"> <strong>(AED)</strong>:</span>
                </th>
                <td><strong>3998</strong></td>
                <td><strong>4056</strong></td>
                <td class="change-td">
                
            
                </td>
                </tr>
                </tbody>
                </table>
           
         </div>
    <div>
</div>
</main>
@endsection