@extends('layout.base')
 
@section('style')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
<!--  END CUSTOM STYLE FILE  -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{asset('plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('plugins/noUiSlider/nouislider.min.css')}}" rel="stylesheet" type="text/css">
<!-- END THEME GLOBAL STYLES -->

@endsection


@section('contenu')



@livewire('ajouter-invite')




@endsection



@section('script')


<!--  BEGIN CUSTOM SCRIPTS FILE  -->
<script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('plugins/select2/select2.min.js')}}"></script>
{{--
<script src="{{asset('plugins/select2/custom-select2.js')}}"></script> --}}
<!--  BEGIN CUSTOM SCRIPTS FILE  -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('plugins/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('plugins/noUiSlider/nouislider.min.js')}}"></script>

{{--
<script src="plugins/flatpickr/custom-flatpickr.js"></script> --}} {{--
<script src="plugins/noUiSlider/custom-nouiSlider.js"></script> --}} {{--
<script src="plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js"></script> --}}
<!-- END PAGE LEVEL SCRIPTS -->

<script>
    $('#select2').select2();
    
   
// var ss = $(".tagging").select2({
//     tags: false,
// });

   $(".tagging").select2({
       tags: false
   });

   var f1 = flatpickr(document.getElementById('basicFlatpickr'));
   var f2 = flatpickr(document.getElementById('basicFlatpickrz'));  

</script>


@endsection