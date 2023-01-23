   <!--begin::********************************* innerWrapper ********************************-->
   <!--begin::Wrapper-->
   <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
       <!--begin::Header-->
       <div id="kt_header" style="" class="header align-items-stretch">
           <!--begin::Container-->
           <div class="container-fluid d-flex align-items-stretch justify-content-between" >
               @include('controlPanel.theme.layout.MobileHeader')
               <!--begin::Wrapper-->
               <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                   @include('controlPanel.theme.layout.navbar')
               </div>
               <!--end::Wrapper-->
           </div>
           <!--end::Container-->
       </div>
       <!--end::Header-->
       <!--begin::*********************** Content *******************************-->
       <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
           @include('controlPanel.theme.layout.toolbar')
           <!--begin::Post-->
           <div class="post d-flex flex-column-fluid" id="kt_post">
               <!--begin::Container-->
               <div id="kt_content_container" class="container-xxl">
                   @include('controlPanel.theme.layout.msgError')
                   @yield('content')
               </div>
               <!--end::Container-->
           </div>
           <!--end::Post-->
       </div>
       <!--end::*********************** Content *******************************-->
       <!--begin::*********************** contentFooter ***********************-->
       @include('controlPanel.theme.layout.contentFooter')
       <!--end::*********************** contentFooter *************************-->
   </div>
   <!--end::Wrapper-->
   <!--end::********************************* innerWrapper ********************-->
   </div>
   <!--end::Page-->
   </div>
   <!--end::Root-->
