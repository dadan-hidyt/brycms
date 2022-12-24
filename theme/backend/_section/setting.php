 <!-- BEGIN Page Settings -->
 <div class="modal fade js-modal-settings modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-right modal-md">
         <div class="modal-content">
             <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center w-100">
                 <h4 class="m-0 text-center color-white">
                     Pengaturan Layout
                     <small class="mb-0 opacity-80">Mengatur antarmuka halaman</small>
                 </h4>
                 <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true"><i class="fal fa-times"></i></span>
                 </button>
             </div>
             <div class="modal-body p-0">
                 <div class="settings-panel">
                     <div class="mt-4 d-table w-100 px-5">
                         <div class="d-table-cell align-middle">
                             <h1 class="p-0">
                                 App Layout
                             </h1>
                         </div>
                     </div>
                     <br>
                     <div class="list" id="fh">
                         <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="header-function-fixed"></a>
                         <span class="onoffswitch-title">Fixed Header</span>
                         <span class="onoffswitch-title-desc">header is in a fixed at all times</span>
                     </div>
                     <div class="list" id="nft">
                         <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-top"></a>
                         <span class="onoffswitch-title">Top Navigation</span>
                         <span class="onoffswitch-title-desc">Relocate left pane to top</span>
                     </div>
                     <hr class="mb-0 mt-4">

                 </div>
                 <span id="saving"></span>
             </div>
         </div>
     </div>
 </div> <!-- END Page Settings -->