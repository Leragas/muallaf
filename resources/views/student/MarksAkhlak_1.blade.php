@extends('layouts.boot')

@section('content')
<div class="container">
    <div class="card">
                <div class="card-header"><h3>Keyin Marks (Ilmu - AKHLAK 1)</h3></div>

                <div class="card-body">
                    
    <form action="{{env('absolute')}}/Update/Marks/Akhlak_1/{{$student->id}}" enctype="multipart/form-data" method="post">
        @csrf
         @method('PATCH')

             
         <table width="100%" border="1px" >  
             
             <tr ><td colspan="2"><h3>Konsep Akhlak dalam Islam</h3></td></tr>
             
             <tr><td><p><label  for="range_weight">1.1 Menjelaskan Kepentingan akhlak: 
                </label> </td><td align="center">
            <input onchange="myFunction()"  type="range" name="d1"  class="slider" min="1" max="5" value="{{$data->d1 ?? 1}}"><span  class="slider_label" id='sd1' >1111</span></p>
            </td></tr>
             
             
             
              <tr><td><p><label  for="range_weight">1.2 Menjelaskan Sumber akhlak 
                </label> </td><td align="center">
            <input onchange="myFunction()"  type="range" name="d2"  class="slider" min="1" max="5" value="{{$data->d2 ?? 1}}"><span  class="slider_label" id='Sd2' ></span></p>
            </td></tr>
              
              
              
               <tr><td><p><label  for="range_weight">1.3 Menjelaskan kaedah penyucian jiwa 
                                <br>-	Mengingati mati
                                <br>-	Berdampingan dengan orang alim
                                <br>-	Melawat orang sakit

                </label> </td><td align="center">
            <input onchange="myFunction()"  type="range" name="d3"  class="slider" min="1" max="5" value="{{$data->d3 ?? 1}}"><span  class="slider_label" id='Sd3' ></span></p>
            </td></tr>
                    
         
         
            
             <tr ><td colspan="2"><h3>Akhlak dengan Allah, manusia dan alam</h3></td></tr>
             
             <tr><td><p><label  for="range_weight">2.1	Menjelaskan Akhlak dengan Allah
                </label> </td><td align="center">
            <input onchange="myFunction()"  type="range" name="d4"  class="slider" min="1" max="5" value="{{$data->d4 ?? 1}}"><span  class="slider_label" id='Sd4' ></span></p>
            </td></tr>
             
             
             
              <tr><td><p><label  for="range_weight">2.2	Menjelaskan Akhlak dengan Manusia 
                </label> </td><td align="center">
            <input onchange="myFunction()"  type="range" name="d5"  class="slider" min="1" max="5" value="{{$data->d5 ?? 1}}"><span  class="slider_label" id='Sd5' ></span></p>
            </td></tr>
              
              
               <tr><td><p><label  for="range_weight">2.3	Menjelaskan Akhlak dengan alam
                </label> </td><td align="center">
            <input onchange="myFunction()"  type="range" name="d6"  class="slider" min="1" max="5" value="{{$data->d6 ?? 1}}"><span  class="slider_label" id='Sd6' ></span></p>
            </td></tr>
           
           
            
         <tr ><td colspan="2"><h3>Hubungan akhlak, akidah dan syariah</h3></td></tr>
             
             <tr><td><p><label  for="range_weight">3.1 Menjelaskan Akhlak adalah hasil daripada kesempurnaan akidah dan syariah	
                </label> </td><td align="center">
            <input onchange="myFunction()"  type="range" name="d7"  class="slider" min="1" max="5" value="{{$data->d7 ?? 1}}"><span  class="slider_label" id='Sd7' ></span></p>
            </td></tr>
             
                <tr ><td colspan="2"><h3>Perbezaan antara akhlak dan moral</h3></td></tr>
             
             <tr><td><p><label  for="range_weight">4.1 Perbezaaan konsep akhlak dan moral
                </label> </td><td align="center">
            <input onchange="myFunction()"  type="range" name="d8"  class="slider" min="1" max="5" value="{{$data->d8 ?? 1}}"><span  class="slider_label" id='Sd8' ></span></p>
            </td></tr>
             
                <tr ><td colspan="2"><h3>Rasulullah saw sebagai ikutan</h3></td></tr>
             
             <tr><td><p><label  for="range_weight">5.1	Matlamat perutusan nabi Muhammad saw
                </label> </td><td align="center">
            <input onchange="myFunction()"  type="range" name="d9"  class="slider" min="1" max="5" value="{{$data->d9 ?? 1}}"><span  class="slider_label" id='Sd9' ></span></p>
            </td></tr>
             
             <tr ><td colspan="1"><h3>Total Marks</h3></td>
             <td  colspan="1">(Total %) <h3 name='totalMarks' id='totalMarks'>##</h3></td>
             </tr>
  <script>
      
      setTimeout(function(){ myFunction(); }, 250);
      
function myFunction() {
  var x = 0;
  x = x + parseFloat(document.getElementById("sd1").innerHTML);
  x = x + parseFloat(document.getElementById("Sd2").innerHTML);
  x = x + parseFloat(document.getElementById("Sd3").innerHTML);
  x = x + parseFloat(document.getElementById("Sd5").innerHTML);
  x = x + parseFloat(document.getElementById("Sd6").innerHTML);
  x = x + parseFloat(document.getElementById("Sd7").innerHTML);
  x = x + parseFloat(document.getElementById("Sd8").innerHTML);
  x = x + parseFloat(document.getElementById("Sd9").innerHTML);

  //console.log(x);
  document.getElementById("totalMarks").innerHTML = (x/(9*5)*100).toFixed(2);
}

</script>
             

    </table>
                    
                    
                    
                    



 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(function()
{
$('.slider').on('input change', function(){
          $(this).next($('.slider_label')).html(this.value);
        });
      $('.slider_label').each(function(){
          var value = $(this).prev().attr('value');
          $(this).html(value);
        });  
  
  
})
    </script>

                    
                    
                    <button class="btn btn-primary">Save</button>
                 </form>
                </div>

            
        
   </div>
</div>
@endsection
