@extends('layouts.boot')

@section('content')
<div class="container">
    <form action="{{env('absolute')}}/Update/Student/{{$student->id}}" enctype="multipart/form-data" method="post">
        @csrf
         @method('PATCH')
         
         
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Student</h1>
                </div>
                
                ILMU_AKIDAH
                    <input id="ILMU_AKIDAH"
                           type="text"
                           class="form-control{{ $errors->has('ILMU_AKIDAH') ? ' is-invalid' : '' }}"
                           name="ILMU_AKIDAH"
                           value="{{ old('ILMU_AKIDAH')  ?? $student->ILMU_AKIDAH}}"
                           autocomplete="title" autofocus>
                    
                       ILMU_FEQAH
                    <input id="ILMU_FEQAH"
                           type="text"
                           class="form-control{{ $errors->has('ILMU_FEQAH') ? ' is-invalid' : '' }}"
                           name="ILMU_FEQAH"
                           value="{{ old('ILMU_FEQAH')  ?? $student->ILMU_FEQAH}}"
                           autocomplete="title" autofocus>
                    
                       ILMU_AKHLAK
                    <input id="ILMU_AKHLAK"
                           type="text"
                           class="form-control{{ $errors->has('ILMU_AKHLAK') ? ' is-invalid' : '' }}"
                           name="ILMU_AKHLAK"
                           value="{{ old('ILMU_AKHLAK')  ?? $student->ILMU_AKHLAK}}"
                           autocomplete="title" autofocus>
                <div class="row pt-4">
                    

            
            
            
            <div class="range-slider">
                <input class="range-slider__range" type="range" value="0" min="0" max="5">
                <span class="range-slider__value">0</span>
              </div>

              <div class="range-slider">
                <input class="range-slider__range" type="range" value="0" min="0" max="5" step="1">
                <span class="range-slider__value">0</span>
              </div>

              <div class="range-slider">
                <input class="range-slider__range" type="range" value="5" min="0" max="1">
                <span class="range-slider__value">0</span>
              </div> 
      
            
            <style>
                    

                           

                            .range-slider {
                              margin: 60px 0 0 0%;
                            }


                            // Range Slider
                            $range-width: 100% !default;

                            $range-handle-color: $shade-10 !default;
                            $range-handle-color-hover: $teal !default;
                            $range-handle-size: 20px !default;

                            $range-track-color: $shade-1 !default;
                            $range-track-height: 10px !default;

                            $range-label-color: $shade-10 !default;
                            $range-label-width: 60px !default;

                            .range-slider {
                              width: $range-width;
                            }

                            .range-slider__range {
                              -webkit-appearance: none;
                              width: calc(100% - (#{$range-label-width + 13px}));
                              height: $range-track-height;
                              border-radius: 5px;
                              background: $range-track-color;
                              outline: none;
                              padding: 0;
                              margin: 0;

                              // Range Handle
                              &::-webkit-slider-thumb {
                                appearance: none;
                                width: $range-handle-size;
                                height: $range-handle-size;
                                border-radius: 50%;
                                background: $range-handle-color;
                                cursor: pointer;
                                transition: background .15s ease-in-out;

                                &:hover {
                                  background: $range-handle-color-hover;
                                }
                              }

                              &:active::-webkit-slider-thumb {
                                background: $range-handle-color-hover;
                              }

                              &::-moz-range-thumb {
                                width: $range-handle-size;
                                height: $range-handle-size;
                                border: 0;
                                border-radius: 50%;
                                background: $range-handle-color;
                                cursor: pointer;
                                transition: background .15s ease-in-out;

                                &:hover {
                                  background: $range-handle-color-hover;
                                }
                              }

                              &:active::-moz-range-thumb {
                                background: $range-handle-color-hover;
                              }

                              // Focus state
                              &:focus {

                                &::-webkit-slider-thumb {
                                  box-shadow: 0 0 0 3px $shade-0,
                                              0 0 0 6px $teal;
                                }
                              }
                            }


                            // Range Label
                            .range-slider__value {
                              display: inline-block;
                              position: relative;
                              width: $range-label-width;
                              color: $shade-0;
                              line-height: 20px;
                              text-align: center;
                              border-radius: 3px;
                              background: $range-label-color;
                              padding: 5px 10px;
                              margin-left: 8px;

                              &:after {
                                position: absolute;
                                top: 8px;
                                left: -7px;
                                width: 0;
                                height: 0;
                                border-top: 7px solid transparent;
                                border-right: 7px solid $range-label-color;
                                border-bottom: 7px solid transparent;
                                content: '';
                              }
                            }


                            // Firefox Overrides
                            ::-moz-range-track {
                                background: $range-track-color;
                                border: 0;
                            }

                            input::-moz-focus-inner,
                            input::-moz-focus-outer { 
                              border: 0; 
                            }
                
                
            </style>
            <script>
                                        var rangeSlider = function(){
                                var slider = $('.range-slider'),
                                    range = $('.range-slider__range'),
                                    value = $('.range-slider__value');

                                slider.each(function(){

                                  value.each(function(){
                                    var value = $(this).prev().attr('value');
                                    $(this).html(value);
                                  });

                                  range.on('input', function(){
                                    $(this).next(value).html(this.value);
                                  });
                                });
                              };

                              rangeSlider();
            </script>
          
        
         
          </tbody></table>
        </div>
      </li>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <button class="btn btn-primary">Save</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
