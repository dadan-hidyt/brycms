 <!-- BEGIN Left Aside -->
 <aside class="page-sidebar list-filter-active">
     <div class="page-logo">
         <a href="web.html" class="page-logo-link press-scale-down d-flex align-items-center position-relative">
             <img src="logo2.png" style="width:40px!important;" alt="SIM Rembang" aria-roledescription="logo">
             <span class="page-logo-text mr-1">E-LERNING <br> SMKIFSU</span>
             <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
         </a>
     </div>
     <!-- BEGIN PRIMARY NAVIGATION -->
     <nav id="js-primary-nav" class="primary-nav" role="navigation">
         <div class="nav-filter">
             <div class="position-relative">
                 <input type="text" id="nav_filter_input" placeholder="Cari Menu" class="form-control" tabindex="0">
             </div>
         </div>
         <ul id="js-nav-menu" class="nav-menu">
             <li>
                 <a href="<?= site_url(route_to('backend_index')); ?>" title="Aplikasi Web" data-filter-tags="aplikasiweb" class=" waves-effect waves-themed" aria-expanded="false">
                     <i class="fal fa-home"></i>
                     <span class="nav-link-text" data-i18n="nav.aplikasiweb">Dashboard</span>
                 </a>
             </li>
             <li>
                 <a href="#" title="Postingan" data-filter-tags="postingan">
                     <i class="fal fa-edit"></i>
                     <span class="nav-link-text"">Post</span>
              </a>
              <ul>
                <li>
                  <a href="" title=" Lokasi BTS" data-filter-tags="tambah postingan">
                         <span class="nav-link-text"> Tambah</span>
                 </a>
             </li>
             <li>
                 <a href="" title="Fiber Optik" data-filter-tags="manage postingan">
                     <span class="nav-link-text">Manage</span>
                 </a>
             </li>
         </ul>
         </li>
         <li>
             <a href="mobile.html" title="Aplikasi Mobile" data-filter-tags="tugas" class=" waves-effect waves-themed" aria-expanded="false">
                 <i class="fal fa-mobile-android"></i>
                 <span class="nav-link-text">Tugas Saya</span>
             </a>
         </li>
         <li>
             <a href="web-instansi.html" title="Web Instansi" data-filter-tags="webinstansi" class=" waves-effect waves-themed" aria-expanded="false">
                 <i class="fal fa-building"></i>
                 <span class="nav-link-text" data-i18n="nav.webinstansi">Web Instansi</span>
             </a>
         </li>
         <li>
             <a href="web-desa.html" title="Web Desa" data-filter-tags="webdesa" class=" waves-effect waves-themed" aria-expanded="false">
                 <i class="fal fa-warehouse-alt"></i>
                 <span class="nav-link-text" data-i18n="nav.webdesa">Web Desa</span>
             </a>
         </li>
         <li>
             <a href="#" title="DINKOMINFO" data-filter-tags="bank-data">
                 <i class="fal fa-globe"></i>
                 <span class="nav-link-text"">BANK DATA</span>
              </a>
              <ul>
                <li>
                  <a href="" title=" Lokasi BTS" data-filter-tags="data siswa">
                     <span class="nav-link-text">Data Siswa</span>
             </a>
         </li>
         <li>
             <a href="" title="Fiber Optik" data-filter-tags="data guru">
                 <span class="nav-link-text">Data Guru</span>
             </a>
         </li>
         </ul>
         </li>
         </ul>
         <div class="filter-message js-filter-message bg-warning-600"></div>
     </nav>
     <!-- END PRIMARY NAVIGATION -->
 </aside>
 <!-- END Left Aside -->