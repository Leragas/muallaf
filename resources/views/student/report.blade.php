@extends('layouts.boot')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Student Report</h2></div>

                <div class="card-body">
                   
                    Student Name : {{ $student->name}}<br>
                    Phone : {{ $student->phone}}      <br>
                    Email : {{ $student->email}}   <br>
                     national_id : {{ $student->national_id}}   <br>
                    
                </div>
            </div>
        </div>
    </div>
    
    
    <br>
    
    
     <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> <h3>Results ILMU 
                        
                           {{number_format (
                           ($student->ILMU_AKIDAH +$student->ILMU_FEQAH +$student->ILMU_AKHLAK)/15*70
                       ,1)
                       }}
                        
                        
                        %
                    <img src='{{env('absolute')}}/Icon A.png' style='height:100px;width:100px;'> </h3></div>
                <div class="card-body">
                     
                     ILMU_AKIDAH : {{ $student->ILMU_AKIDAH }}<br>
                     ILMU_FEQAH  : {{ $student->ILMU_FEQAH  }}<br>
                     ILMU_AKHLAK   : {{ $student->ILMU_AKHLAK  }}<br>
                      	ILMU_TAFSIR   : {{ $student->ILMU_TAFSIR  }}<br>
                      	ILMU_HADIS   : {{ $student->ILMU_HADIS  }}<br>
                     ILMU_SIRAH   : {{ $student->ILMU_SIRAH  }}<br>
                      	ILMU_AL_QURAN   : {{ $student->ILMU_AL_QURAN  }}<br>
                        
                        
                </div>
            </div>
        </div>
    
     
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> <h3>Results KEPIMPINAN 
                         
                          {{number_format (
                           ($student->KEPIMPINAN_PENGURUSAN +$student->KEPIMPINAN_SUKERELAWAN +$student->KEPIMPINAN_JATIDIRI)/15*10
                       ,1)
                       }}
                        
                        
                        
                        %<img src='{{env('absolute')}}/Icon B.png' style='height:100px;width:100px;'> </h3> </div>
                <div class="card-body">
                   
                     KEPIMPINAN_PENGURUSAN : {{ $student->KEPIMPINAN_PENGURUSAN }}<br>
                     KEPIMPINAN_SUKERELAWAN : {{ $student->KEPIMPINAN_SUKERELAWAN }}<br>
                     KEPIMPINAN_JATIDIRI : {{ $student->KEPIMPINAN_JATIDIRI }}<br>
                     <br><br><br>.
                     
                </div>
            </div>
        </div>
         </div>
    <br>
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> <h3>Results SAHSIAH 
                        
                          {{number_format (
                           ($student->SAHSIAH_KEBERSIHAN +$student->SAHSIAH_BERSOSIAL +$student->SAHSIAH_BERMINDA_POSITIVE)/15*10
                       ,1)
                       }}
                        
                        
                        %<img src='{{env('absolute')}}/Icon C.png' style='height:100px;width:100px;'> </h3></div>
                <div class="card-body">
                  
                     SAHSIAH_KEBERSIHAN  : {{ $student->SAHSIAH_KEBERSIHAN  }}<br>
                     SAHSIAH_BERSOSIAL  : {{ $student->SAHSIAH_BERSOSIAL  }}<br>
                     SAHSIAH_BERMINDA_POSITIVE  : {{ $student->SAHSIAH_BERMINDA_POSITIVE  }}<br>
                     
                </div>
            </div>
        </div>
 
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> <h3>Results KEMAHRIAN 
                        
                       {{number_format (
                           ($student->KEMAHIRAN_KEBERSIHAN +$student->KEMAHIRAN_BERSOSIAL +$student->KEMAHIRAN_BERMINDA_POSITIVE)/15*10
                       ,1)
                       }}
                        
                        
                        %<img src='{{env('absolute')}}/Icon D.png' style='height:100px;width:100px;'> </h3>  </div>
                <div class="card-body">
                   
                     KEMAHIRAN_KEBERSIHAN : {{ $student->KEMAHIRAN_KEBERSIHAN }}<br>
                     KEMAHIRAN_BERSOSIAL : {{ $student->KEMAHIRAN_BERSOSIAL }}<br>
                     KEMAHIRAN_BERMINDA_POSITIVE : {{ $student->KEMAHIRAN_BERMINDA_POSITIVE }}<br>
                        
                        
                </div>
            </div>
        </div>
    </div>
    
    <br>
       <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Total Marks & Grade</h2></div>
                
               

                <div class="card-body" align='center'>
                    <h1>
                       {{number_format (
                         (($student->ILMU_AKIDAH +$student->ILMU_FEQAH +$student->ILMU_AKHLAK)/15*70)
                         +
                         ($student->KEMAHIRAN_KEBERSIHAN +$student->KEMAHIRAN_BERSOSIAL +$student->KEMAHIRAN_BERMINDA_POSITIVE)/15*10
                         +
                          ($student->SAHSIAH_KEBERSIHAN +$student->SAHSIAH_BERSOSIAL +$student->SAHSIAH_BERMINDA_POSITIVE)/15*10
                         +
                          ($student->KEPIMPINAN_PENGURUSAN +$student->KEPIMPINAN_SUKERELAWAN +$student->KEPIMPINAN_JATIDIRI)/15*10
                         ,1)
                         }}
                        
                        %</h1>
                    <h1>
                        
                        @if((($student->ILMU_AKIDAH +$student->ILMU_FEQAH +$student->ILMU_AKHLAK)/15*70)
                         +
                         ($student->KEMAHIRAN_KEBERSIHAN +$student->KEMAHIRAN_BERSOSIAL +$student->KEMAHIRAN_BERMINDA_POSITIVE)/15*10
                         +
                          ($student->SAHSIAH_KEBERSIHAN +$student->SAHSIAH_BERSOSIAL +$student->SAHSIAH_BERMINDA_POSITIVE)/15*10
                         +
                          ($student->KEPIMPINAN_PENGURUSAN +$student->KEPIMPINAN_SUKERELAWAN +$student->KEPIMPINAN_JATIDIRI)/15*10  > 80)
                          
                          
                            A
                        @elseif((($student->ILMU_AKIDAH +$student->ILMU_FEQAH +$student->ILMU_AKHLAK)/15*70)
                         +
                         ($student->KEMAHIRAN_KEBERSIHAN +$student->KEMAHIRAN_BERSOSIAL +$student->KEMAHIRAN_BERMINDA_POSITIVE)/15*10
                         +
                          ($student->SAHSIAH_KEBERSIHAN +$student->SAHSIAH_BERSOSIAL +$student->SAHSIAH_BERMINDA_POSITIVE)/15*10
                         +
                          ($student->KEPIMPINAN_PENGURUSAN +$student->KEPIMPINAN_SUKERELAWAN +$student->KEPIMPINAN_JATIDIRI)/15*10 < 80)
                          
                          
                                    B
                    
                      @elseif((($student->ILMU_AKIDAH +$student->ILMU_FEQAH +$student->ILMU_AKHLAK)/15*70)
                         +
                         ($student->KEMAHIRAN_KEBERSIHAN +$student->KEMAHIRAN_BERSOSIAL +$student->KEMAHIRAN_BERMINDA_POSITIVE)/15*10
                         +
                          ($student->SAHSIAH_KEBERSIHAN +$student->SAHSIAH_BERSOSIAL +$student->SAHSIAH_BERMINDA_POSITIVE)/15*10
                         +
                          ($student->KEPIMPINAN_PENGURUSAN +$student->KEPIMPINAN_SUKERELAWAN +$student->KEPIMPINAN_JATIDIRI)/15*10 < 60)
                          
                          C
                    
                    
                    
                     @elseif((($student->ILMU_AKIDAH +$student->ILMU_FEQAH +$student->ILMU_AKHLAK)/15*70)
                         +
                         ($student->KEMAHIRAN_KEBERSIHAN +$student->KEMAHIRAN_BERSOSIAL +$student->KEMAHIRAN_BERMINDA_POSITIVE)/15*10
                         +
                          ($student->SAHSIAH_KEBERSIHAN +$student->SAHSIAH_BERSOSIAL +$student->SAHSIAH_BERMINDA_POSITIVE)/15*10
                         +
                          ($student->KEPIMPINAN_PENGURUSAN +$student->KEPIMPINAN_SUKERELAWAN +$student->KEPIMPINAN_JATIDIRI)/15*10 < 50)
                          
                          D
                    
                    
                    
                    
                    
                    </h1>
                    
                    
                    
                    
                    
                    
                    @endif
                    
                    
                </div>
            </div>
        </div>
    </div>
    
    
    
    
</div>
@endsection
