<template>
   <div>
      <!-- ========= Statistics ========= -->
      <div class="row match-height">
         <!-- Medal Card -->
         <div class="col-xl-4 col-md-6 col-12">
             <div class="card card-congratulation-medal">
                 <div class="card-body p-4">
                     <h5 class="mb-3">Congratulations 🎉 John!</h5>
                     <p class="card-text font-small-3">You have won gold medal</p>
                     <h3 class="mb-3 mt-3 pt-2">
                         <a href="#">$48.9k</a>
                     </h3>
                     <button type="button" class="btn btn-primary border_radius_5 waves-effect waves-float waves-light">View Sales</button>
                     <img src="/assets/images/avatars/medal.svg" class="congratulation-medal" alt="Medal Pic">
                 </div>
             </div>
         </div>
         <!--/ Medal Card -->

         <!-- Statistics Card -->
         <div class="col-xl-8 col-md-6 col-12">
             <div class="card card-statistics">
                 <div class="card-header d-flex justify-content-between align-items-center">
                     <h4 class="card-title">Statistics</h4>
                     <div class="d-flex align-items-center">
                         <p class="card-text font-small-2 mb-0">Updated 1 month ago</p>
                     </div>
                 </div>
                 <div class="card-body statistics-body">
                     <div class="row">
                         <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                             <div class="d-flex flex-row">
                                 <div class="icon-wrapper pr-4 sales-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up avatar-icon"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                 </div>
                                 <div class="count-content">
                                    <h3 class="text-body font-weight-bold mb-0">
                                       $<span class="counter">
                                          {{ totalSales }}
                                          </span></h3>
                                    <span>Sales</span>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                             <div class="d-flex flex-row">
                                    <div class="icon-wrapper pr-4 user-icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user avatar-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    </div>
                                    <div class="count-content">
                                       <h3 class="text-body font-weight-bold mb-0"> <span class="counter">
                                          {{ totalCustomers }}
                                          </span></h3>
                                       <span>
                                          Users
                                       </span>
                                    </div> 
                             </div>
                         </div>
                         <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                             <div class="d-flex flex-row">
                                 <div class="icon-wrapper pr-4 product-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box avatar-icon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                 </div>
                                 <div class="count-content">
                                    <h3 class="text-body font-weight-bold mb-0"><span class="counter">
                                       {{ totalProducts }}
                                    </span></h3>
                                    <span>
                                       Products
                                    </span>
                                 </div>     
                             </div>
                         </div>
                         <div class="col-xl-3 col-sm-6 col-12">
                             <div class="d-flex flex-row">
                                 <div class="icon-wrapper pr-4 order-icon mr-2">
                                     <div class="avatar-content">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign avatar-icon"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                     </div>
                                 </div>
                                 <div class="my-auto">
                                     <h4 class="fw-bolder mb-0">$9745</h4>
                                     <p class="card-text font-small-3 mb-0">Revenue</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--/ Statistics Card -->
      </div>
      <!--========== Revenue Report ========= -->
      <div class="row match-height mb-4">
         <div class="col-lg-4 col-12">
            <div class="row match-height">
               <!-- Bar Chart - Orders -->
               <div class="col-lg-6 col-md-3 col-6">
                  <div class="card">
                     <div class="card-body position-relative p-4">
                        <div class="count-content">
                           <p class="mb-2 fontsize-16">Orders</p>
                           <h3 class="text-body font-weight-bold">
                              <span class="counter">
                              {{ totalOrders }}
                              </span></h3>
                        </div>
                        <div id="statistics-order-chart">
                           <div id="apexcharts5ox0009r" class="apexcharts-canvas apexcharts5ox0009r apexcharts-theme-light" style="width: 175px; height: 70px;">
                              <svg id="SvgjsSvg8027" width="175" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                 <g id="SvgjsG8029" class="apexcharts-inner apexcharts-graphical" transform="translate(14.833333333333332, 15)">
                                    <defs id="SvgjsDefs8028">
                                       <linearGradient id="SvgjsLinearGradient8032" x1="0" y1="0" x2="0" y2="1">
                                          <stop id="SvgjsStop8033" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                          <stop id="SvgjsStop8034" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                          <stop id="SvgjsStop8035" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                       </linearGradient>
                                       <clipPath id="gridRectMask5ox0009r">
                                          <rect id="SvgjsRect8037" width="179.00000000000003" height="55" x="-12.833333333333332" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                       </clipPath>
                                       <clipPath id="gridRectMarkerMask5ox0009r">
                                          <rect id="SvgjsRect8038" width="157.33333333333334" height="59" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                       </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect8036" width="7.666666666666668" height="55" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient8032)" class="apexcharts-xcrosshairs" y2="55" filter="none" fill-opacity="0.9"></rect>
                                    <g id="SvgjsG8052" class="apexcharts-xaxis" transform="translate(0, 0)">
                                       <g id="SvgjsG8053" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                    </g>
                                    <g id="SvgjsG8055" class="apexcharts-grid">
                                       <g id="SvgjsG8056" class="apexcharts-gridlines-horizontal" style="display: none;">
                                          <line id="SvgjsLine8058" x1="-10.833333333333332" y1="0" x2="164.16666666666669" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine8059" x1="-10.833333333333332" y1="11" x2="164.16666666666669" y2="11" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine8060" x1="-10.833333333333332" y1="22" x2="164.16666666666669" y2="22" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine8061" x1="-10.833333333333332" y1="33" x2="164.16666666666669" y2="33" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine8062" x1="-10.833333333333332" y1="44" x2="164.16666666666669" y2="44" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine8063" x1="-10.833333333333332" y1="55" x2="164.16666666666669" y2="55" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       </g>
                                       <g id="SvgjsG8057" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                       <line id="SvgjsLine8065" x1="0" y1="55" x2="153.33333333333334" y2="55" stroke="transparent" stroke-dasharray="0"></line>
                                       <line id="SvgjsLine8064" x1="0" y1="1" x2="0" y2="55" stroke="transparent" stroke-dasharray="0"></line>
                                    </g>
                                    <g id="SvgjsG8039" class="apexcharts-bar-series apexcharts-plot-series">
                                       <g id="SvgjsG8040" class="apexcharts-series" seriesName="2020" rel="1" data:realIndex="0">
                                          <rect id="SvgjsRect8042" width="7.666666666666668" height="55" x="-3.833333333333334" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect>
                                          <path id="SvgjsPath8043" d="M -3.833333333333334 53.083333333333336L -3.833333333333334 30.25L 3.833333333333334 30.25L 3.833333333333334 30.25L 3.833333333333334 53.083333333333336Q 0 56.91666666666667 -3.833333333333334 53.083333333333336z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5ox0009r)" pathTo="M -3.833333333333334 53.083333333333336L -3.833333333333334 30.25L 3.833333333333334 30.25L 3.833333333333334 30.25L 3.833333333333334 53.083333333333336Q 0 56.91666666666667 -3.833333333333334 53.083333333333336z" pathFrom="M -3.833333333333334 53.083333333333336L -3.833333333333334 55L 3.833333333333334 55L 3.833333333333334 55L 3.833333333333334 55L -3.833333333333334 55" cy="30.25" cx="3.833333333333332" j="0" val="45" barHeight="24.75" barWidth="7.666666666666668"></path>
                                          <rect id="SvgjsRect8044" width="7.666666666666668" height="55" x="34.5" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect>
                                          <path id="SvgjsPath8045" d="M 34.5 53.083333333333336L 34.5 8.25L 42.16666666666667 8.25L 42.16666666666667 8.25L 42.16666666666667 53.083333333333336Q 38.333333333333336 56.91666666666667 34.5 53.083333333333336z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5ox0009r)" pathTo="M 34.5 53.083333333333336L 34.5 8.25L 42.16666666666667 8.25L 42.16666666666667 8.25L 42.16666666666667 53.083333333333336Q 38.333333333333336 56.91666666666667 34.5 53.083333333333336z" pathFrom="M 34.5 53.083333333333336L 34.5 55L 42.16666666666667 55L 42.16666666666667 55L 42.16666666666667 55L 34.5 55" cy="8.25" cx="42.16666666666667" j="1" val="85" barHeight="46.75" barWidth="7.666666666666668"></path>
                                          <rect id="SvgjsRect8046" width="7.666666666666668" height="55" x="72.83333333333334" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect>
                                          <path id="SvgjsPath8047" d="M 72.83333333333334 53.083333333333336L 72.83333333333334 19.25L 80.50000000000001 19.25L 80.50000000000001 19.25L 80.50000000000001 53.083333333333336Q 76.66666666666667 56.91666666666667 72.83333333333334 53.083333333333336z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5ox0009r)" pathTo="M 72.83333333333334 53.083333333333336L 72.83333333333334 19.25L 80.50000000000001 19.25L 80.50000000000001 19.25L 80.50000000000001 53.083333333333336Q 76.66666666666667 56.91666666666667 72.83333333333334 53.083333333333336z" pathFrom="M 72.83333333333334 53.083333333333336L 72.83333333333334 55L 80.50000000000001 55L 80.50000000000001 55L 80.50000000000001 55L 72.83333333333334 55" cy="19.25" cx="80.50000000000001" j="2" val="65" barHeight="35.75" barWidth="7.666666666666668"></path>
                                          <rect id="SvgjsRect8048" width="7.666666666666668" height="55" x="111.16666666666667" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect>
                                          <path id="SvgjsPath8049" d="M 111.16666666666667 53.083333333333336L 111.16666666666667 30.25L 118.83333333333334 30.25L 118.83333333333334 30.25L 118.83333333333334 53.083333333333336Q 115 56.91666666666667 111.16666666666667 53.083333333333336z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5ox0009r)" pathTo="M 111.16666666666667 53.083333333333336L 111.16666666666667 30.25L 118.83333333333334 30.25L 118.83333333333334 30.25L 118.83333333333334 53.083333333333336Q 115 56.91666666666667 111.16666666666667 53.083333333333336z" pathFrom="M 111.16666666666667 53.083333333333336L 111.16666666666667 55L 118.83333333333334 55L 118.83333333333334 55L 118.83333333333334 55L 111.16666666666667 55" cy="30.25" cx="118.83333333333333" j="3" val="45" barHeight="24.75" barWidth="7.666666666666668"></path>
                                          <rect id="SvgjsRect8050" width="7.666666666666668" height="55" x="149.5" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect>
                                          <path id="SvgjsPath8051" d="M 149.5 53.083333333333336L 149.5 19.25L 157.16666666666666 19.25L 157.16666666666666 19.25L 157.16666666666666 53.083333333333336Q 153.33333333333334 56.91666666666667 149.5 53.083333333333336z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5ox0009r)" pathTo="M 149.5 53.083333333333336L 149.5 19.25L 157.16666666666666 19.25L 157.16666666666666 19.25L 157.16666666666666 53.083333333333336Q 153.33333333333334 56.91666666666667 149.5 53.083333333333336z" pathFrom="M 149.5 53.083333333333336L 149.5 55L 157.16666666666666 55L 157.16666666666666 55L 157.16666666666666 55L 149.5 55" cy="19.25" cx="157.16666666666666" j="4" val="65" barHeight="35.75" barWidth="7.666666666666668"></path>
                                       </g>
                                       <g id="SvgjsG8041" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine8066" x1="-10.833333333333332" y1="0" x2="164.16666666666669" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine8067" x1="-10.833333333333332" y1="0" x2="164.16666666666669" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG8068" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG8069" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG8070" class="apexcharts-point-annotations"></g>
                                    <rect id="SvgjsRect8071" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect8072" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                 </g>
                                 <g id="SvgjsG8054" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                 <g id="SvgjsG8030" class="apexcharts-annotations"></g>
                              </svg>
                              <div class="apexcharts-legend" style="max-height: 35px;"></div>
                              <div class="apexcharts-tooltip apexcharts-theme-light">
                                 <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                       <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                       <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                 <div class="apexcharts-yaxistooltip-text"></div>
                              </div>
                           </div>
                           <!-- <apexchart width="100%" height="100%" type="bubble" :options="orderchartOptions" :series="orderchart"></apexchart> -->
                        </div>
                        <div class="resize-triggers">
                           <div class="expand-trigger">
                              <div style="width: 180px; height: 181px;"></div>
                           </div>
                           <div class="contract-trigger"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--/ Bar Chart - Orders -->
               <!-- Line Chart - Profit -->
               <div class="col-lg-6 col-md-3 col-6">
                  <div class="card card-tiny-line-stats">
                     <div class="card-body position-relative p-4">
                        <p class="mb-2 fontsize-16">Profit</p>
                           <h3 class="text-body font-weight-bold">
                              <span class="counter">
                                 6,24k
                              </span></h3>
                        <div id="statistics-profit-chart">
                           <div id="apexchartsfq3nnopbg" class="apexcharts-canvas apexchartsfq3nnopbg apexcharts-theme-light" style="width: 175px; height: 70px;">
                              <svg id="SvgjsSvg1052" width="175" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                 <g id="SvgjsG1054" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 0)">
                                    <defs id="SvgjsDefs1053">
                                       <clipPath id="gridRectMaskfq3nnopbg">
                                          <rect id="SvgjsRect1059" width="160" height="68" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                       </clipPath>
                                       <clipPath id="gridRectMarkerMaskfq3nnopbg">
                                          <rect id="SvgjsRect1060" width="165" height="77" x="-6" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                       </clipPath>
                                    </defs>
                                    <line id="SvgjsLine1058" x1="0" y1="0" x2="0" y2="65" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="65" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                    <g id="SvgjsG1077" class="apexcharts-xaxis" transform="translate(0, 0)">
                                       <g id="SvgjsG1078" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                          <text id="SvgjsText1080" font-family="Helvetica, Arial, sans-serif" x="0" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1081">1</tspan>
                                             <title>1</title>
                                          </text>
                                          <text id="SvgjsText1083" font-family="Helvetica, Arial, sans-serif" x="30.600000000000005" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1084">2</tspan>
                                             <title>2</title>
                                          </text>
                                          <text id="SvgjsText1086" font-family="Helvetica, Arial, sans-serif" x="61.2" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1087">3</tspan>
                                             <title>3</title>
                                          </text>
                                          <text id="SvgjsText1089" font-family="Helvetica, Arial, sans-serif" x="91.8" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1090">4</tspan>
                                             <title>4</title>
                                          </text>
                                          <text id="SvgjsText1092" font-family="Helvetica, Arial, sans-serif" x="122.39999999999999" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1093">5</tspan>
                                             <title>5</title>
                                          </text>
                                          <text id="SvgjsText1095" font-family="Helvetica, Arial, sans-serif" x="152.99999999999997" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1096">6</tspan>
                                             <title>6</title>
                                          </text>
                                       </g>
                                    </g>
                                    <g id="SvgjsG1098" class="apexcharts-grid">
                                       <g id="SvgjsG1099" class="apexcharts-gridlines-horizontal"></g>
                                       <g id="SvgjsG1100" class="apexcharts-gridlines-vertical">
                                          <line id="SvgjsLine1101" x1="0" y1="0" x2="0" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine1102" x1="30.6" y1="0" x2="30.6" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine1103" x1="61.2" y1="0" x2="61.2" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine1104" x1="91.80000000000001" y1="0" x2="91.80000000000001" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine1105" x1="122.4" y1="0" x2="122.4" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine1106" x1="153" y1="0" x2="153" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line>
                                       </g>
                                       <line id="SvgjsLine1108" x1="0" y1="65" x2="153" y2="65" stroke="transparent" stroke-dasharray="0"></line>
                                       <line id="SvgjsLine1107" x1="0" y1="1" x2="0" y2="65" stroke="transparent" stroke-dasharray="0"></line>
                                    </g>
                                    <g id="SvgjsG1061" class="apexcharts-line-series apexcharts-plot-series">
                                       <g id="SvgjsG1062" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                          <path id="SvgjsPath1076" d="M0 65L30.599999999999998 39L61.199999999999996 58.5L91.8 26L122.39999999999999 45.5L153 6.5C153 6.5 153 6.5 153 6.5 " fill="none" fill-opacity="1" stroke="rgba(0,207,232,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskfq3nnopbg)" pathTo="M 0 65L 30.599999999999998 39L 61.199999999999996 58.5L 91.8 26L 122.39999999999999 45.5L 153 6.5" pathFrom="M -1 65L -1 65L 30.599999999999998 65L 61.199999999999996 65L 91.8 65L 122.39999999999999 65L 153 65"></path>
                                          <g id="SvgjsG1063" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                             <g id="SvgjsG1065" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskfq3nnopbg)">
                                                <circle id="SvgjsCircle1066" r="2" cx="0" cy="65" class="apexcharts-marker no-pointer-events w12k5t8cy" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="0" j="0" index="0" default-marker-size="2"></circle>
                                                <circle id="SvgjsCircle1067" r="2" cx="30.599999999999998" cy="39" class="apexcharts-marker no-pointer-events weflp964ui" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="1" j="1" index="0" default-marker-size="2"></circle>
                                             </g>
                                             <g id="SvgjsG1068" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskfq3nnopbg)">
                                                <circle id="SvgjsCircle1069" r="2" cx="61.199999999999996" cy="58.5" class="apexcharts-marker no-pointer-events wy0ltfi7f" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="2" j="2" index="0" default-marker-size="2"></circle>
                                             </g>
                                             <g id="SvgjsG1070" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskfq3nnopbg)">
                                                <circle id="SvgjsCircle1071" r="2" cx="91.8" cy="26" class="apexcharts-marker no-pointer-events w4elgf407" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="3" j="3" index="0" default-marker-size="2"></circle>
                                             </g>
                                             <g id="SvgjsG1072" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskfq3nnopbg)">
                                                <circle id="SvgjsCircle1073" r="2" cx="122.39999999999999" cy="45.5" class="apexcharts-marker no-pointer-events waox6zq6w" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="4" j="4" index="0" default-marker-size="2"></circle>
                                             </g>
                                             <g id="SvgjsG1074" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskfq3nnopbg)">
                                                <circle id="SvgjsCircle1075" r="5" cx="153" cy="6.5" class="apexcharts-marker no-pointer-events wdb2d5rl3" stroke="#00cfe8" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="5" j="5" index="0" default-marker-size="5"></circle>
                                             </g>
                                          </g>
                                       </g>
                                       <g id="SvgjsG1064" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine1109" x1="0" y1="0" x2="153" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1110" x1="0" y1="0" x2="153" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1111" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1112" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1113" class="apexcharts-point-annotations"></g>
                                 </g>
                                 <rect id="SvgjsRect1057" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                 <g id="SvgjsG1097" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                 <g id="SvgjsG1055" class="apexcharts-annotations"></g>
                              </svg>
                              <div class="apexcharts-legend" style="max-height: 35px;"></div>
                              <div class="apexcharts-tooltip apexcharts-theme-light">
                                 <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 207, 232);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                       <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                       <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                 <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              </div>
                              <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                 <div class="apexcharts-yaxistooltip-text"></div>
                              </div>
                           </div> 
                        </div>
                        <div class="resize-triggers">
                           <div class="expand-trigger">
                              <div style="width: 180px; height: 181px;"></div>
                           </div>
                           <div class="contract-trigger"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--/ Line Chart - Profit -->
               <!-- Earnings Card -->
               <div class="col-lg-12 col-md-6 col-12">
                  <div class="card earnings-card h-100">
                     <div class="card-body p-4">
                        <div class="row h-100 align-items-center">
                           <div class="col-6">
                              <h4 class="card-title mb-3">Earnings</h4>
                              <div>This Month</div>
                              <h5 class="mb-3">$4055.56</h5>
                              <p class="card-text text-muted">
                                 <span class="fw-bolder">68.2%</span><span> more earnings than last month.</span>
                              </p>
                           </div>
                           <div class="col-6 position-relative">
                              <div id="earnings-chart">
                                 <div id="apexcharts9kkq99mti" class="apexcharts-canvas apexcharts9kkq99mti apexcharts-theme-light mx-auto" style="width: 158px; height: 126.8px;">
                                    <svg id="SvgjsSvg1386" width="158" height="126.8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                       <g id="SvgjsG1388" class="apexcharts-inner apexcharts-graphical" transform="translate(-1, 0)">
                                          <defs id="SvgjsDefs1387">
                                             <clipPath id="gridRectMask9kkq99mti">
                                                <rect id="SvgjsRect1390" width="164" height="128" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                             </clipPath>
                                             <clipPath id="gridRectMarkerMask9kkq99mti">
                                                <rect id="SvgjsRect1391" width="164" height="132" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                             </clipPath>
                                          </defs>
                                          <g id="SvgjsG1392" class="apexcharts-pie">
                                             <g id="SvgjsG1393" transform="translate(0, 0) scale(1)">
                                                <circle id="SvgjsCircle1394" r="37.98536585365854" cx="80" cy="64" fill="transparent"></circle>
                                                <g id="SvgjsG1395" class="apexcharts-slices">
                                                   <g id="SvgjsG1396" class="apexcharts-series apexcharts-pie-series" seriesName="App" rel="1" data:realIndex="0">
                                                      <path id="SvgjsPath1397" d="M 69.85216991000085 6.448795702018273 A 58.43902439024391 58.43902439024391 0 1 1 79.1840638026197 122.43332798844617 L 79.46964147170281 101.98166319249002 A 37.98536585365854 37.98536585365854 0 1 0 73.40391044150056 26.591717206311877 L 69.85216991000085 6.448795702018273 z" fill="#28c76f66" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="190.8" data:startAngle="-10" data:strokeWidth="0" data:value="53" data:pathOrig="M 69.85216991000085 6.448795702018273 A 58.43902439024391 58.43902439024391 0 1 1 79.1840638026197 122.43332798844617 L 79.46964147170281 101.98166319249002 A 37.98536585365854 37.98536585365854 0 1 0 73.40391044150056 26.591717206311877 L 69.85216991000085 6.448795702018273 z"></path>
                                                   </g>
                                                   <g id="SvgjsG1398" class="apexcharts-series apexcharts-pie-series" seriesName="Service" rel="2" data:realIndex="1">
                                                      <path id="SvgjsPath1399" d="M 79.1840638026197 122.43332798844617 A 58.43902439024391 58.43902439024391 0 0 1 30.22590892178677 94.6212251391295 L 47.646840799161396 83.90379634043418 A 37.98536585365854 37.98536585365854 0 0 0 79.46964147170281 101.98166319249002 L 79.1840638026197 122.43332798844617 z" fill="#28c76f33" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="57.599999999999994" data:startAngle="180.8" data:strokeWidth="0" data:value="16" data:pathOrig="M 79.1840638026197 122.43332798844617 A 58.43902439024391 58.43902439024391 0 0 1 30.22590892178677 94.6212251391295 L 47.646840799161396 83.90379634043418 A 37.98536585365854 37.98536585365854 0 0 0 79.46964147170281 101.98166319249002 L 79.1840638026197 122.43332798844617 z"></path>
                                                   </g>
                                                   <g id="SvgjsG1400" class="apexcharts-series apexcharts-pie-series" seriesName="Product" rel="3" data:realIndex="2">
                                                      <path id="SvgjsPath1401" d="M 30.22590892178677 94.6212251391295 A 58.43902439024391 58.43902439024391 0 0 1 69.84212548457727 6.4505677090342814 L 73.39738156497522 26.592869010872285 A 37.98536585365854 37.98536585365854 0 0 0 47.646840799161396 83.90379634043418 L 30.22590892178677 94.6212251391295 z" fill="rgba(40,199,111,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="111.6" data:startAngle="238.4" data:strokeWidth="0" data:value="31" data:pathOrig="M 30.22590892178677 94.6212251391295 A 58.43902439024391 58.43902439024391 0 0 1 69.84212548457727 6.4505677090342814 L 73.39738156497522 26.592869010872285 A 37.98536585365854 37.98536585365854 0 0 0 47.646840799161396 83.90379634043418 L 30.22590892178677 94.6212251391295 z"></path>
                                                   </g>
                                                </g>
                                             </g>
                                             <g id="SvgjsG1402" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)">
                                                <text id="SvgjsText1403" font-family="Helvetica, Arial, sans-serif" x="80" y="79" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">App</text>
                                                <text id="SvgjsText1404" font-family="Helvetica, Arial, sans-serif" x="80" y="65" text-anchor="middle" dominant-baseline="auto" font-size="20px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">53%</text>
                                             </g>
                                          </g>
                                          <line id="SvgjsLine1405" x1="0" y1="0" x2="160" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                          <line id="SvgjsLine1406" x1="0" y1="0" x2="160" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                       </g>
                                       <g id="SvgjsG1389" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                       <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                          <span class="apexcharts-tooltip-marker" style="background-color: rgba(40, 199, 111, 0.4);"></span>
                                          <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                             <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                             <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                          </div>
                                       </div>
                                       <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                          <span class="apexcharts-tooltip-marker" style="background-color: rgba(40, 199, 111, 0.2);"></span>
                                          <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                             <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                             <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                          </div>
                                       </div>
                                       <div class="apexcharts-tooltip-series-group" style="order: 3;">
                                          <span class="apexcharts-tooltip-marker" style="background-color: rgb(40, 199, 111);"></span>
                                          <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                             <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                             <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="resize-triggers">
                                 <div class="expand-trigger">
                                    <div style="width: 187px; height: 128px;"></div>
                                 </div>
                                 <div class="contract-trigger"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--/ Earnings Card -->
            </div>
         </div>
         <!-- Revenue Report Card -->
         <div class="col-lg-8 col-12">
            <div class="card card-revenue-budget h-100">
               <div class="row mx-0"> 
                  <div class="col-md-8 col-12 revenue-report-wrapper p-4" style="position: relative;">
                     <div class="d-sm-flex justify-content-between align-items-center mb-5">
                        <h4 class="card-title mb-50 mb-sm-0">Revenue Report</h4>
                        <div class="d-flex align-items-center">
                           <div class="d-flex align-items-center mr-2">
                              <span class="bullet bullet-primary font-small-3 mr-2 cursor-pointer"></span>
                              <span>Earning</span>
                           </div>
                           <div class="d-flex align-items-center ms-75">
                              <span class="bullet bullet-warning font-small-3 mr-2 cursor-pointer"></span>
                              <span>Expense</span>
                           </div>
                        </div>
                     </div>
                     <div id="revenue-report-chart">
                         <div id="apexchartsmuya1mib" class="apexcharts-canvas apexchartsmuya1mib apexcharts-theme-light" style="width: 591px; height: 230px;">
                           <svg id="SvgjsSvg1135" width="591" height="230" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <g id="SvgjsG1137" class="apexcharts-inner apexcharts-graphical" transform="translate(54.23469543457031, 10)">
                                 <defs id="SvgjsDefs1136">
                                    <linearGradient id="SvgjsLinearGradient1141" x1="0" y1="0" x2="0" y2="1">
                                       <stop id="SvgjsStop1142" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                       <stop id="SvgjsStop1143" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                       <stop id="SvgjsStop1144" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMaskmuya1mib">
                                       <rect id="SvgjsRect1146" width="530.7653045654297" height="190.73" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="gridRectMarkerMaskmuya1mib">
                                       <rect id="SvgjsRect1147" width="530.7653045654297" height="194.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                 </defs>
                                 <rect id="SvgjsRect1145" width="9.950011308458116" height="190.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1141)" class="apexcharts-xcrosshairs" y2="190.73" filter="none" fill-opacity="0.9"></rect>
                                 <g id="SvgjsG1171" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1172" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                       <text id="SvgjsText1174" font-family="Helvetica, Arial, sans-serif" x="29.264739142523872" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1175">Jan</tspan>
                                          <title>Jan</title>
                                       </text>
                                       <text id="SvgjsText1177" font-family="Helvetica, Arial, sans-serif" x="87.79421742757162" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1178">Feb</tspan>
                                          <title>Feb</title>
                                       </text>
                                       <text id="SvgjsText1180" font-family="Helvetica, Arial, sans-serif" x="146.32369571261938" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1181">Mar</tspan>
                                          <title>Mar</title>
                                       </text>
                                       <text id="SvgjsText1183" font-family="Helvetica, Arial, sans-serif" x="204.8531739976671" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1184">Apr</tspan>
                                          <title>Apr</title>
                                       </text>
                                       <text id="SvgjsText1186" font-family="Helvetica, Arial, sans-serif" x="263.38265228271484" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1187">May</tspan>
                                          <title>May</title>
                                       </text>
                                       <text id="SvgjsText1189" font-family="Helvetica, Arial, sans-serif" x="321.9121305677626" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1190">Jun</tspan>
                                          <title>Jun</title>
                                       </text>
                                       <text id="SvgjsText1192" font-family="Helvetica, Arial, sans-serif" x="380.4416088528103" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1193">Jul</tspan>
                                          <title>Jul</title>
                                       </text>
                                       <text id="SvgjsText1195" font-family="Helvetica, Arial, sans-serif" x="438.97108713785804" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1196">Aug</tspan>
                                          <title>Aug</title>
                                       </text>
                                       <text id="SvgjsText1198" font-family="Helvetica, Arial, sans-serif" x="497.5005654229058" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1199">Sep</tspan>
                                          <title>Sep</title>
                                       </text>
                                    </g>
                                 </g>
                                 <g id="SvgjsG1214" class="apexcharts-grid">
                                    <g id="SvgjsG1215" class="apexcharts-gridlines-horizontal"></g>
                                    <g id="SvgjsG1216" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine1218" x1="0" y1="190.73" x2="526.7653045654297" y2="190.73" stroke="transparent" stroke-dasharray="0"></line>
                                    <line id="SvgjsLine1217" x1="0" y1="1" x2="0" y2="190.73" stroke="transparent" stroke-dasharray="0"></line>
                                 </g>
                                 <g id="SvgjsG1148" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG1149" class="apexcharts-series" seriesName="Earning" rel="1" data:realIndex="0">
                                       <path id="SvgjsPath1151" d="M24.289733488294814 114.438L24.289733488294814 80.68680282711453C27.60640392444752 77.37013239096183 30.923074360600225 77.37013239096183 34.23974479675293 80.68680282711453L34.23974479675293 80.68680282711453L34.23974479675293 114.438L34.23974479675293 114.438C34.23974479675293 114.438 24.289733488294814 114.438 24.289733488294814 114.438 " fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 24.289733488294814 114.438L 24.289733488294814 80.68680282711453Q 29.264739142523872 75.71179717288547 34.23974479675293 80.68680282711453L 34.23974479675293 80.68680282711453L 34.23974479675293 114.438L 34.23974479675293 114.438z" pathFrom="M 24.289733488294814 114.438L 24.289733488294814 114.438L 34.23974479675293 114.438L 34.23974479675293 114.438L 34.23974479675293 114.438L 24.289733488294814 114.438" cy="78.19930000000001" cx="82.81921177334256" j="0" val="95" barHeight="36.238699999999994" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1152" d="M82.81921177334256 114.438L82.81921177334256 49.407082827114536C86.13588220949526 46.09041239096183 89.45255264564798 46.09041239096183 92.76922308180067 49.407082827114536L92.76922308180067 49.407082827114536L92.76922308180067 114.438L92.76922308180067 114.438C92.76922308180067 114.438 82.81921177334256 114.438 82.81921177334256 114.438 " fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 82.81921177334256 114.438L 82.81921177334256 49.407082827114536Q 87.79421742757162 44.43207717288548 92.76922308180067 49.407082827114536L 92.76922308180067 49.407082827114536L 92.76922308180067 114.438L 92.76922308180067 114.438z" pathFrom="M 82.81921177334256 114.438L 82.81921177334256 114.438L 92.76922308180067 114.438L 92.76922308180067 114.438L 92.76922308180067 114.438L 82.81921177334256 114.438" cy="46.91958000000001" cx="141.3486900583903" j="1" val="177" barHeight="67.51841999999999" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1153" d="M141.3486900583903 114.438L141.3486900583903 8.590862827114535C144.665360494543 5.274192390961829 147.98203093069571 5.274192390961829 151.29870136684843 8.590862827114535L151.29870136684843 8.590862827114535L151.29870136684843 114.438L151.29870136684843 114.438C151.29870136684843 114.438 141.3486900583903 114.438 141.3486900583903 114.438 " fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 141.3486900583903 114.438L 141.3486900583903 8.590862827114538Q 146.32369571261935 3.6158571728854803 151.29870136684843 8.590862827114538L 151.29870136684843 8.590862827114538L 151.29870136684843 114.438L 151.29870136684843 114.438z" pathFrom="M 141.3486900583903 114.438L 141.3486900583903 114.438L 151.29870136684843 114.438L 151.29870136684843 114.438L 151.29870136684843 114.438L 141.3486900583903 114.438" cy="6.103360000000009" cx="199.87816834343806" j="2" val="284" barHeight="108.33464" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1154" d="M199.87816834343806 114.438L199.87816834343806 19.271742827114537C203.19483877959075 15.955072390961831 206.51150921574344 15.955072390961831 209.82817965189616 19.271742827114537L209.82817965189616 19.271742827114537L209.82817965189616 114.438L209.82817965189616 114.438C209.82817965189616 114.438 199.87816834343806 114.438 199.87816834343806 114.438 " fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 199.87816834343806 114.438L 199.87816834343806 19.27174282711454Q 204.8531739976671 14.296737172885482 209.82817965189616 19.27174282711454L 209.82817965189616 19.27174282711454L 209.82817965189616 114.438L 209.82817965189616 114.438z" pathFrom="M 199.87816834343806 114.438L 199.87816834343806 114.438L 209.82817965189616 114.438L 209.82817965189616 114.438L 209.82817965189616 114.438L 199.87816834343806 114.438" cy="16.78424000000001" cx="258.4076466284858" j="3" val="256" barHeight="97.65375999999999" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1155" d="M258.4076466284858 114.438L258.4076466284858 76.87220282711453C261.7243170646385 73.55553239096184 265.0409875007912 73.55553239096184 268.3576579369439 76.87220282711453L268.3576579369439 76.87220282711453L268.3576579369439 114.438L268.3576579369439 114.438C268.3576579369439 114.438 258.4076466284858 114.438 258.4076466284858 114.438 " fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 258.4076466284858 114.438L 258.4076466284858 76.87220282711453Q 263.38265228271484 71.89719717288548 268.3576579369439 76.87220282711453L 268.3576579369439 76.87220282711453L 268.3576579369439 114.438L 268.3576579369439 114.438z" pathFrom="M 258.4076466284858 114.438L 258.4076466284858 114.438L 268.3576579369439 114.438L 268.3576579369439 114.438L 268.3576579369439 114.438L 258.4076466284858 114.438" cy="74.38470000000001" cx="316.9371249135335" j="4" val="105" barHeight="40.05329999999999" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1156" d="M316.9371249135335 114.438L316.9371249135335 92.89352282711454C320.25379534968624 89.57685239096185 323.5704657858389 89.57685239096185 326.8871362219916 92.89352282711454L326.8871362219916 92.89352282711454L326.8871362219916 114.438L326.8871362219916 114.438C326.8871362219916 114.438 316.9371249135335 114.438 316.9371249135335 114.438 " fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 316.9371249135335 114.438L 316.9371249135335 92.89352282711454Q 321.9121305677626 87.91851717288549 326.8871362219916 92.89352282711454L 326.8871362219916 92.89352282711454L 326.8871362219916 114.438L 326.8871362219916 114.438z" pathFrom="M 316.9371249135335 114.438L 316.9371249135335 114.438L 326.8871362219916 114.438L 326.8871362219916 114.438L 326.8871362219916 114.438L 316.9371249135335 114.438" cy="90.40602000000001" cx="375.46660319858125" j="5" val="63" barHeight="24.031979999999997" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1157" d="M375.46660319858125 114.438L375.46660319858125 52.84022282711453C378.783273634734 49.523552390961825 382.09994407088664 49.523552390961825 385.41661450703936 52.84022282711453L385.41661450703936 52.84022282711453L385.41661450703936 114.438L385.41661450703936 114.438C385.41661450703936 114.438 375.46660319858125 114.438 375.46660319858125 114.438 " fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 375.46660319858125 114.438L 375.46660319858125 52.84022282711453Q 380.4416088528103 47.86521717288547 385.41661450703936 52.84022282711453L 385.41661450703936 52.84022282711453L 385.41661450703936 114.438L 385.41661450703936 114.438z" pathFrom="M 375.46660319858125 114.438L 375.46660319858125 114.438L 385.41661450703936 114.438L 385.41661450703936 114.438L 385.41661450703936 114.438L 375.46660319858125 114.438" cy="50.352720000000005" cx="433.996081483629" j="6" val="168" barHeight="64.08528" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1158" d="M433.996081483629 114.438L433.996081483629 33.76722282711454C437.3127519197817 30.450552390961832 440.62942235593437 30.450552390961832 443.9460927920871 33.76722282711454L443.9460927920871 33.76722282711454L443.9460927920871 114.438L443.9460927920871 114.438C443.9460927920871 114.438 433.996081483629 114.438 433.996081483629 114.438 " fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 433.996081483629 114.438L 433.996081483629 33.76722282711454Q 438.97108713785804 28.79221717288548 443.9460927920871 33.76722282711454L 443.9460927920871 33.76722282711454L 443.9460927920871 114.438L 443.9460927920871 114.438z" pathFrom="M 433.996081483629 114.438L 433.996081483629 114.438L 443.9460927920871 114.438L 443.9460927920871 114.438L 443.9460927920871 114.438L 433.996081483629 114.438" cy="31.27972000000001" cx="492.5255597686767" j="7" val="218" barHeight="83.15827999999999" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1159" d="M492.5255597686767 114.438L492.5255597686767 89.46038282711453C495.84223020482943 86.14371239096182 499.1589006409821 86.14371239096182 502.4755710771348 89.46038282711453L502.4755710771348 89.46038282711453L502.4755710771348 114.438L502.4755710771348 114.438C502.4755710771348 114.438 492.5255597686767 114.438 492.5255597686767 114.438 " fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 492.5255597686767 114.438L 492.5255597686767 89.46038282711453Q 497.50056542290577 84.48537717288548 502.4755710771348 89.46038282711453L 502.4755710771348 89.46038282711453L 502.4755710771348 114.438L 502.4755710771348 114.438z" pathFrom="M 492.5255597686767 114.438L 492.5255597686767 114.438L 502.4755710771348 114.438L 502.4755710771348 114.438L 502.4755710771348 114.438L 492.5255597686767 114.438" cy="86.97288" cx="551.0550380537245" j="8" val="72" barHeight="27.46512" barWidth="9.950011308458116"></path>
                                    </g>
                                    <g id="SvgjsG1160" class="apexcharts-series" seriesName="Expense" rel="2" data:realIndex="1">
                                       <path id="SvgjsPath1162" d="M24.289733488294814 114.438L24.289733488294814 167.26219717288546C27.60640392444752 170.57886760903816 30.923074360600225 170.57886760903816 34.23974479675293 167.26219717288546L34.23974479675293 167.26219717288546L34.23974479675293 114.438L34.23974479675293 114.438C34.23974479675293 114.438 24.289733488294814 114.438 24.289733488294814 114.438 " fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 24.289733488294814 114.438L 24.289733488294814 167.26219717288546Q 29.264739142523872 172.23720282711452 34.23974479675293 167.26219717288546L 34.23974479675293 167.26219717288546L 34.23974479675293 114.438L 34.23974479675293 114.438z" pathFrom="M 24.289733488294814 114.438L 24.289733488294814 114.438L 34.23974479675293 114.438L 34.23974479675293 114.438L 34.23974479675293 114.438L 24.289733488294814 114.438" cy="169.7497" cx="82.81921177334256" j="0" val="-145" barHeight="-55.311699999999995" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1163" d="M82.81921177334256 114.438L82.81921177334256 142.46729717288548C86.13588220949526 145.7839676090382 89.45255264564798 145.7839676090382 92.76922308180067 142.46729717288548L92.76922308180067 142.46729717288548L92.76922308180067 114.438L92.76922308180067 114.438C92.76922308180067 114.438 82.81921177334256 114.438 82.81921177334256 114.438 " fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 82.81921177334256 114.438L 82.81921177334256 142.46729717288548Q 87.79421742757162 147.44230282711453 92.76922308180067 142.46729717288548L 92.76922308180067 142.46729717288548L 92.76922308180067 114.438L 92.76922308180067 114.438z" pathFrom="M 82.81921177334256 114.438L 82.81921177334256 114.438L 92.76922308180067 114.438L 92.76922308180067 114.438L 92.76922308180067 114.438L 82.81921177334256 114.438" cy="144.9548" cx="141.3486900583903" j="1" val="-80" barHeight="-30.516799999999996" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1164" d="M141.3486900583903 114.438L141.3486900583903 134.83809717288548C144.665360494543 138.15476760903817 147.98203093069571 138.15476760903817 151.29870136684843 134.83809717288548L151.29870136684843 134.83809717288548L151.29870136684843 114.438L151.29870136684843 114.438C151.29870136684843 114.438 141.3486900583903 114.438 141.3486900583903 114.438 " fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 141.3486900583903 114.438L 141.3486900583903 134.83809717288548Q 146.32369571261935 139.81310282711453 151.29870136684843 134.83809717288548L 151.29870136684843 134.83809717288548L 151.29870136684843 114.438L 151.29870136684843 114.438z" pathFrom="M 141.3486900583903 114.438L 141.3486900583903 114.438L 151.29870136684843 114.438L 151.29870136684843 114.438L 151.29870136684843 114.438L 141.3486900583903 114.438" cy="137.3256" cx="199.87816834343806" j="2" val="-60" barHeight="-22.8876" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1165" d="M199.87816834343806 114.438L199.87816834343806 180.61329717288547C203.19483877959075 183.92996760903816 206.51150921574344 183.92996760903816 209.82817965189616 180.61329717288547L209.82817965189616 180.61329717288547L209.82817965189616 114.438L209.82817965189616 114.438C209.82817965189616 114.438 199.87816834343806 114.438 199.87816834343806 114.438 " fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 199.87816834343806 114.438L 199.87816834343806 180.61329717288547Q 204.8531739976671 185.58830282711452 209.82817965189616 180.61329717288547L 209.82817965189616 180.61329717288547L 209.82817965189616 114.438L 209.82817965189616 114.438z" pathFrom="M 199.87816834343806 114.438L 199.87816834343806 114.438L 209.82817965189616 114.438L 209.82817965189616 114.438L 209.82817965189616 114.438L 199.87816834343806 114.438" cy="183.1008" cx="258.4076466284858" j="3" val="-180" barHeight="-68.66279999999999" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1166" d="M258.4076466284858 114.438L258.4076466284858 150.09649717288548C261.7243170646385 153.41316760903817 265.0409875007912 153.41316760903817 268.3576579369439 150.09649717288548L268.3576579369439 150.09649717288548L268.3576579369439 114.438L268.3576579369439 114.438C268.3576579369439 114.438 258.4076466284858 114.438 258.4076466284858 114.438 " fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 258.4076466284858 114.438L 258.4076466284858 150.09649717288548Q 263.38265228271484 155.07150282711453 268.3576579369439 150.09649717288548L 268.3576579369439 150.09649717288548L 268.3576579369439 114.438L 268.3576579369439 114.438z" pathFrom="M 258.4076466284858 114.438L 258.4076466284858 114.438L 268.3576579369439 114.438L 268.3576579369439 114.438L 268.3576579369439 114.438L 258.4076466284858 114.438" cy="152.584" cx="316.9371249135335" j="4" val="-100" barHeight="-38.145999999999994" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1167" d="M316.9371249135335 114.438L316.9371249135335 134.83809717288548C320.25379534968624 138.15476760903817 323.5704657858389 138.15476760903817 326.8871362219916 134.83809717288548L326.8871362219916 134.83809717288548L326.8871362219916 114.438L326.8871362219916 114.438C326.8871362219916 114.438 316.9371249135335 114.438 316.9371249135335 114.438 " fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 316.9371249135335 114.438L 316.9371249135335 134.83809717288548Q 321.9121305677626 139.81310282711453 326.8871362219916 134.83809717288548L 326.8871362219916 134.83809717288548L 326.8871362219916 114.438L 326.8871362219916 114.438z" pathFrom="M 316.9371249135335 114.438L 316.9371249135335 114.438L 326.8871362219916 114.438L 326.8871362219916 114.438L 326.8871362219916 114.438L 316.9371249135335 114.438" cy="137.3256" cx="375.46660319858125" j="5" val="-60" barHeight="-22.8876" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1168" d="M375.46660319858125 114.438L375.46660319858125 144.37459717288547C378.783273634734 147.69126760903816 382.09994407088664 147.69126760903816 385.41661450703936 144.37459717288547L385.41661450703936 144.37459717288547L385.41661450703936 114.438L385.41661450703936 114.438C385.41661450703936 114.438 375.46660319858125 114.438 375.46660319858125 114.438 " fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 375.46660319858125 114.438L 375.46660319858125 144.37459717288547Q 380.4416088528103 149.34960282711452 385.41661450703936 144.37459717288547L 385.41661450703936 144.37459717288547L 385.41661450703936 114.438L 385.41661450703936 114.438z" pathFrom="M 375.46660319858125 114.438L 375.46660319858125 114.438L 385.41661450703936 114.438L 385.41661450703936 114.438L 385.41661450703936 114.438L 375.46660319858125 114.438" cy="146.8621" cx="433.996081483629" j="6" val="-85" barHeight="-32.424099999999996" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1169" d="M433.996081483629 114.438L433.996081483629 140.5599971728855C437.3127519197817 143.87666760903818 440.62942235593437 143.87666760903818 443.9460927920871 140.5599971728855L443.9460927920871 140.5599971728855L443.9460927920871 114.438L443.9460927920871 114.438C443.9460927920871 114.438 433.996081483629 114.438 433.996081483629 114.438 " fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 433.996081483629 114.438L 433.996081483629 140.5599971728855Q 438.97108713785804 145.53500282711454 443.9460927920871 140.5599971728855L 443.9460927920871 140.5599971728855L 443.9460927920871 114.438L 443.9460927920871 114.438z" pathFrom="M 433.996081483629 114.438L 433.996081483629 114.438L 443.9460927920871 114.438L 443.9460927920871 114.438L 443.9460927920871 114.438L 433.996081483629 114.438" cy="143.0475" cx="492.5255597686767" j="7" val="-75" barHeight="-28.609499999999997" barWidth="9.950011308458116"></path>
                                       <path id="SvgjsPath1170" d="M492.5255597686767 114.438L492.5255597686767 150.09649717288548C495.84223020482943 153.41316760903817 499.1589006409821 153.41316760903817 502.4755710771348 150.09649717288548L502.4755710771348 150.09649717288548L502.4755710771348 114.438L502.4755710771348 114.438C502.4755710771348 114.438 492.5255597686767 114.438 492.5255597686767 114.438 " fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmuya1mib)" pathTo="M 492.5255597686767 114.438L 492.5255597686767 150.09649717288548Q 497.50056542290577 155.07150282711453 502.4755710771348 150.09649717288548L 502.4755710771348 150.09649717288548L 502.4755710771348 114.438L 502.4755710771348 114.438z" pathFrom="M 492.5255597686767 114.438L 492.5255597686767 114.438L 502.4755710771348 114.438L 502.4755710771348 114.438L 502.4755710771348 114.438L 492.5255597686767 114.438" cy="152.584" cx="551.0550380537245" j="8" val="-100" barHeight="-38.145999999999994" barWidth="9.950011308458116"></path>
                                    </g>
                                    <g id="SvgjsG1150" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG1161" class="apexcharts-datalabels" data:realIndex="1"></g>
                                 </g>
                                 <line id="SvgjsLine1219" x1="0" y1="0" x2="526.7653045654297" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine1220" x1="0" y1="0" x2="526.7653045654297" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                 <g id="SvgjsG1221" class="apexcharts-yaxis-annotations"></g>
                                 <g id="SvgjsG1222" class="apexcharts-xaxis-annotations"></g>
                                 <g id="SvgjsG1223" class="apexcharts-point-annotations"></g>
                              </g>
                              <g id="SvgjsG1200" class="apexcharts-yaxis" rel="0" transform="translate(24.234695434570312, 0)">
                                 <g id="SvgjsG1201" class="apexcharts-yaxis-texts-g">
                                    <text id="SvgjsText1202" font-family="Helvetica, Arial, sans-serif" x="20" y="11.5" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1203">300</tspan>
                                    </text>
                                    <text id="SvgjsText1204" font-family="Helvetica, Arial, sans-serif" x="20" y="49.646" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1205">200</tspan>
                                    </text>
                                    <text id="SvgjsText1206" font-family="Helvetica, Arial, sans-serif" x="20" y="87.792" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1207">100</tspan>
                                    </text>
                                    <text id="SvgjsText1208" font-family="Helvetica, Arial, sans-serif" x="20" y="125.938" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1209">0</tspan>
                                    </text>
                                    <text id="SvgjsText1210" font-family="Helvetica, Arial, sans-serif" x="20" y="164.084" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1211">-100</tspan>
                                    </text>
                                    <text id="SvgjsText1212" font-family="Helvetica, Arial, sans-serif" x="20" y="202.23000000000002" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1213">-200</tspan>
                                    </text>
                                 </g>
                              </g>
                              <g id="SvgjsG1138" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-legend" style="max-height: 115px;"></div>
                           <div class="apexcharts-tooltip apexcharts-theme-light">
                              <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 103, 240);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                              <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                 <span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67);"></span>
                                 <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                              <div class="apexcharts-yaxistooltip-text"></div>
                           </div>
                        </div> 
                     </div>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 533px; height: 346px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
                  <div class="col-md-4 col-12 budget-wrapper p-4 position-relative">
                     <div class="btn-group"> 
                        <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown waves-effect mb-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        2020
                        </button>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="#">2020</a>
                           <a class="dropdown-item" href="#">2019</a>
                           <a class="dropdown-item" href="#">2018</a>
                        </div>
                     </div>
                     <h2 class="mb-4">$25,852</h2>
                     <div class="d-flex justify-content-center">
                        <span class="fw-bolder mr-2">Budget:</span>
                        <span>56,800</span>
                     </div>
                     <div id="budget-chart" >
                        <div id="apexchartskao2tb02" class="apexcharts-canvas apexchartskao2tb02 apexcharts-theme-light" style="width: 233px; height: 80px;">
                           <svg id="SvgjsSvg1224" width="233" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                              <g id="SvgjsG1226" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                 <defs id="SvgjsDefs1225">
                                    <clipPath id="gridRectMaskkao2tb02">
                                       <rect id="SvgjsRect1231" width="239" height="82" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="gridRectMarkerMaskkao2tb02">
                                       <rect id="SvgjsRect1232" width="237" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                 </defs>
                                 <line id="SvgjsLine1230" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                 <g id="SvgjsG1242" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1243" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                 </g>
                                 <g id="SvgjsG1245" class="apexcharts-grid">
                                    <g id="SvgjsG1246" class="apexcharts-gridlines-horizontal" style="display: none;">
                                       <line id="SvgjsLine1248" x1="0" y1="0" x2="233" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1249" x1="0" y1="20" x2="233" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1250" x1="0" y1="40" x2="233" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1251" x1="0" y1="60" x2="233" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1252" x1="0" y1="80" x2="233" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1247" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine1254" x1="0" y1="80" x2="233" y2="80" stroke="transparent" stroke-dasharray="0"></line>
                                    <line id="SvgjsLine1253" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0"></line>
                                 </g>
                                 <g id="SvgjsG1233" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG1234" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                       <path id="SvgjsPath1237" d="M0 19C8.155 19 15.145000000000003 32 23.3 32C31.455 32 38.445 11 46.6 11C54.755 11 61.745000000000005 28 69.9 28C78.055 28 85.045 20 93.2 20C101.355 20 108.345 40 116.5 40C124.655 40 131.645 1 139.8 1C147.955 1 154.945 20 163.1 20C171.255 20 178.245 21 186.4 21C194.555 21 201.545 37 209.7 37C217.855 37 224.845 18 233 18C233 18 233 18 233 18 " fill="none" fill-opacity="1" stroke="rgba(115,103,240,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskkao2tb02)" pathTo="M 0 19C 8.155 19 15.145000000000001 32 23.3 32C 31.455 32 38.445 11 46.6 11C 54.755 11 61.745000000000005 28 69.9 28C 78.055 28 85.045 20 93.2 20C 101.355 20 108.345 40 116.5 40C 124.655 40 131.645 1 139.8 1C 147.955 1 154.945 20 163.1 20C 171.255 20 178.245 21 186.4 21C 194.555 21 201.545 37 209.7 37C 217.855 37 224.845 18 233 18" pathFrom="M -1 80L -1 80L 23.3 80L 46.6 80L 69.9 80L 93.2 80L 116.5 80L 139.8 80L 163.1 80L 186.4 80L 209.7 80L 233 80"></path>
                                       <g id="SvgjsG1235" class="apexcharts-series-markers-wrap" data:realIndex="0"></g>
                                    </g>
                                    <g id="SvgjsG1238" class="apexcharts-series" seriesName="seriesx2" data:longestSeries="true" rel="2" data:realIndex="1">
                                       <path id="SvgjsPath1241" d="M0 60C8.155 60 15.145000000000003 70 23.3 70C31.455 70 38.445 50 46.6 50C54.755 50 61.745000000000005 65 69.9 65C78.055 65 85.045 57 93.2 57C101.355 57 108.345 80 116.5 80C124.655 80 131.645 55 139.8 55C147.955 55 154.945 65 163.1 65C171.255 65 178.245 60 186.4 60C194.555 60 201.545 75 209.7 75C217.855 75 224.845 53 233 53C233 53 233 53 233 53 " fill="none" fill-opacity="1" stroke="rgba(220,218,227,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="5" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskkao2tb02)" pathTo="M 0 60C 8.155 60 15.145000000000001 70 23.3 70C 31.455 70 38.445 50 46.6 50C 54.755 50 61.745000000000005 65 69.9 65C 78.055 65 85.045 57 93.2 57C 101.355 57 108.345 80 116.5 80C 124.655 80 131.645 55 139.8 55C 147.955 55 154.945 65 163.1 65C 171.255 65 178.245 60 186.4 60C 194.555 60 201.545 75 209.7 75C 217.855 75 224.845 53 233 53" pathFrom="M -1 80L -1 80L 23.3 80L 46.6 80L 69.9 80L 93.2 80L 116.5 80L 139.8 80L 163.1 80L 186.4 80L 209.7 80L 233 80"></path>
                                       <g id="SvgjsG1239" class="apexcharts-series-markers-wrap" data:realIndex="1"></g>
                                    </g>
                                    <g id="SvgjsG1236" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG1240" class="apexcharts-datalabels" data:realIndex="1"></g>
                                 </g>
                                 <line id="SvgjsLine1255" x1="0" y1="0" x2="233" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                 <line id="SvgjsLine1256" x1="0" y1="0" x2="233" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                 <g id="SvgjsG1257" class="apexcharts-yaxis-annotations"></g>
                                 <g id="SvgjsG1258" class="apexcharts-xaxis-annotations"></g>
                                 <g id="SvgjsG1259" class="apexcharts-point-annotations"></g>
                              </g>
                              <rect id="SvgjsRect1229" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                              <g id="SvgjsG1244" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                              <g id="SvgjsG1227" class="apexcharts-annotations"></g>
                           </svg>
                           <div class="apexcharts-legend" style="max-height: 40px;"></div>
                        </div> 
                     </div>
                     <button type="button" class="btn btn-primary waves-effect waves-float waves-light mt-4">Increase Budget</button>
                     <div class="resize-triggers">
                        <div class="expand-trigger">
                           <div style="width: 267px; height: 346px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/ Revenue Report Card -->
      </div>




   <div class="row">
      <div class="col-lg-6">
         <div class="row">
            <div class="col-12 ">
               <div class="card card-custom gutter-b bg-white border-0">
                  <div class="card-body">
                        <div>
                           <div class=" table-responsive" id="printableTable">
                              <div id="productUnitTable_wrapper" class="dataTables_wrapper no-footer">
      
                                 <h4 class="mb-3">Top 5 Customer</h4>
                                    <table id="productUnitTable" class="display dataTable no-footer order--table" role="grid">
                                       <thead class="text-body">
                                          <tr role="row">
                                                <th class="sorting_asc" tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 31.25px;" @click="sorting('id')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'id'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'id' ? 'sorting_desc' : 'sorting'">
                                                   ID
                                                </th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="First Name: activate to sort column ascending" style="width: 95.5288px;" @click="sorting('first_name')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'first_name'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'first_name' ? 'sorting_desc' : 'sorting'">
                                                   First Name
                                                </th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending" style="width: 81.8109px;" @click="sorting('last_name')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'last_name'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'last_name' ? 'sorting_desc' : 'sorting'">
                                                   Last Name
                                                </th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 114.84px;">
                                                   Status
                                                </th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Is Seen: activate to sort column ascending" style="width: 158.462px;">
                                                   Is Seen
                                                </th>
                                          </tr>
                                       </thead>
                                       <tbody class="kt-table-tbody text-dark">
                                          <tr class="kt-table-row kt-table-row-level-0 odd" role="row" v-for="customer in customers" v-bind:key="customer.id">
                                                <td class="sorting_1">
                                                   {{customer.customer_id}}
                                                </td>
                                                <td>
                                                   {{ customer.customer_first_name }}
                                                </td>
                                                <td>
                                                   {{ customer.customer_last_name }}
                                                </td>
                                                <td>
                                                   <span :class="customer.customer_status == '1' ? 'active-status' : 'deactive-status'">
                                                      <span class="badge" :class="customer.customer_status == '1' ? 'badge-light-success' : 'badge-light-danger'" >
                                                            {{ customer.customer_status == '1' ? 'Active' : 'InActive' }}
                                                         </span>
                                                   </span>
                                                   <!-- {{ customer.customer_status == '1' ? 'Active' : 'Inactive' }} -->
                                                </td>
                                                <td>
                                                   {{ customer.is_seen == '0' ? 'unseen' : 'seen' }}
                                                </td>
                                             
                                          </tr>
                                          <tr v-if="customers.length == 0" class="text-center font-size-16"><td colspan="6">No Customer Found</td></tr>
                                       </tbody>
                                    </table>
                                    <!-- <ul class="pagination pagination-sm mb-0 mt-3 justify-content-end align-items-center px-2" v-if="customers.length != 0">
                                       <li v-bind:class="[{disabled: !pagination.prev_page_url}]"><button class="page-link" href="#" @click="fetchcustomers(pagination.prev_page_url)">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Previous
                                          </button>
                                       </li>
      
                                       <li v-for="n in pagination.last_page" :key="n"><button class="page-link text-dark" :class="{ 'active' : pagination.current_page == n  }" href="#">{{ n }}</button></li>
      
                                       <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><button class="page-link" href="#" @click="fetchcustomers(pagination.next_page_url)">
                                          Next<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline>
                                          </svg>
                                       </button></li>
                                    </ul> -->
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
      </div>
      </div>
      <div class="col-lg-6">
         <div class="row h-100">
            <div class="col-12 ">
               <div class="card card-custom gutter-b bg-white border-0">
                  <div class="card-body">
                        <div class="h-100">
                           <div class="table-responsive h-100" id="printableTable">
                           
                              <div id="productUnitTable_wrapper" class="dataTables_wrapper no-footer">

                                 <h4 class="mb-3">Top 5 Supplier</h4>
                                    <table id="productUnitTable" class="display dataTable no-footer order--table" role="grid">
                                       <thead class="text-body">
                                          <tr role="row">
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 31.25px;" @click="sorting('id')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'id'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'id' ? 'sorting_desc' : 'sorting'">
                                                   ID
                                                </th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="supplier: activate to sort column ascending" style="width: 95.5288px;" @click="sorting('first_name')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'first_name'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'first_name' ? 'sorting_desc' : 'sorting'">
                                                   First Name
                                                </th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Phone No: activate to sort column ascending" style="width: 81.8109px;" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'last_name'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'last_name' ? 'sorting_desc' : 'sorting'" @click="sorting('last_name')">
                                                   Last Name
                                                </th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 114.84px;">
                                                   Address
                                                </th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 158.462px;">
                                                   Phone #
                                                </th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="No Of Product: activate to sort column ascending" style="width: 108.67px;">
                                                   Mobile
                                                </th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Stock Quantity: activate to sort column ascending" style="width: 112.917px;">
                                                   Country
                                                </th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Stock Quantity: activate to sort column ascending" style="width: 112.917px;">
                                                   State
                                                </th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Stock Quantity: activate to sort column ascending" style="width: 112.917px;">
                                                   City
                                                </th>
                                                <!-- <th v-if="$parent.permissions.includes('supplier-manage')" class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 53.1891px;">
                                                   Action
                                                </th> -->
                                          </tr>
                                       </thead>
                                       <tbody class="kt-table-tbody text-dark">
                                          <tr class="kt-table-row kt-table-row-level-0 odd" role="row" v-for="supplier in suppliers" v-bind:key="supplier.supplier_id">
                                                <td class="sorting_1">
                                                   {{supplier.supplier_id}}
                                                </td>
                                                <td>
                                                   {{ supplier.supplier_first_name }}
                                                </td>
                                                <td>
                                                   {{ supplier.supplier_last_name }}
                                                </td>
                                                <td>
                                                   {{ supplier.supplier_address }}
                                                </td>
                                                <td>
                                                   {{ supplier.supplier_phone }}
                                                </td>
                                                <td>
                                                   {{ supplier.supplier_mobile}}
                                                </td>
                                                <td>
                                                   {{ supplier.country.country_name}}
                                                </td>
                                                <td>
                                                   {{ supplier.state.name}}
                                                </td>
                                                <td>
                                                   {{ supplier.supplier_city}}
                                                </td>
                                                <!-- <td v-if="$parent.permissions.includes('supplier-manage')" class="white__nowrap">
                                                   <a href="javascript:void(0)" class="click-edit btn btn-outline-primary text-nowrap  waves-effect p-2 mr-3" id="click-edit1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Check out more demos" @click="editsupplier(supplier)">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                   </svg>
                                                      <span class="pl-2">Edit</span>
                                                   </a>
                                                   <a class="btn btn-outline-danger text-nowrap  waves-effect p-2" href="#" @click="deletesupplier(supplier.supplier_id)">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line>
                                                      <line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                      <span>Delete</span>
                                                   </a>
                                                </td> -->
                                          </tr>
                                          <tr v-if="suppliers.length == 0" class="text-center font-size-16"><td colspan="10">No Order Found</td></tr>
                                       </tbody>
                                    </table>
                                    <!-- <ul class="pagination pagination-sm mb-0 mt-3 justify-content-end align-items-center px-2">
                                       <li v-bind:class="[{disabled: !pagination.prev_page_url}]"><button class="page-link" href="#" @click="fetchsuppliers(pagination.prev_page_url)">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Previous
                                          </button>
                                       </li>

                                       <li v-for="n in pagination.last_page" :key="n"><button class="page-link text-dark" :class="{ 'active' : pagination.current_page == n  }" href="#">{{ n }}</button></li>

                                       <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><button class="page-link" href="#" @click="fetchsuppliers(pagination.next_page_url)">
                                          Next<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline>
                                          </svg>
                                       </button></li>
                                    </ul> -->
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
      </div>
      </div>
   </div>







      <div
         class="row"
         style="justify-content: center; align-items: center !important"
         v-if="!$parent.permissions.includes('dashboard')"
         >
         <div class="notfound" style="margin-top: 200px">
            <p>You Don't Have Permission To View Dashboard</p>
         </div>
      </div>
      <!-- <div class="row" v-if="$parent.permissions.includes('dashboard')">
         <div class="col-sm-6 col-xl-3">
            <div
               class="
               card card-custom
               card_custom_effect
               gutter-b
               bg-white
               border-0
               theme-circle theme-circle-primary
               "
               >
               <div class="card-body">
                  <div class="up-down-counter up-counter">
                    <span
                    class="svg-icon"
                    :class="OrderPercentage < 0 ? 'text-danger' : 'text-success'"
                    >
                 <i
                    :class="
                    OrderPercentage < 0 ? 'fa-arrow-down' : 'fa-arrow-up'
                    "
                    class="fas"
                    ></i>
                 </span>
                     <span
                        class="font-weight-bold font-size-h0 pl-3"
                        :class="OrderPercentage < 0 ? 'text-danger' : 'text-success'"
                        >
                     {{ OrderPercentage }}
                     </span>
                   
                  </div>
                  <div class="mt-3">
                     <div class="d-flex align-items-center">
                        <div class="icon-wrapper pr-4 order-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user avatar-icon">
                              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                              <circle cx="12" cy="7" r="4"></circle>
                           </svg>
                        </div>
                        <div class="count-content">
                           <h3 class="text-body font-weight-bold mb-0">Orders</h3>
                           <span class="text-dark font-weight-bold"
                              ><span class="counter">
                           {{ totalOrders }}
                           </span></span
                              >
                        </div>
                     </div>
                     <div class="text-black-50 mt-3">
                        Compare to last year ({{ lastYear }})
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-xl-3">
            <div
               class="
               card card-custom card_custom_effect
               gutter-b
               bg-white
               border-0
               theme-circle theme-circle theme-circle-secondary
               "
               >
               <div class="card-body">
                <div class="up-down-counter up-counter">
                  <span
                    class="svg-icon"
                    :class="
                    ProductPercentage < 0 ? 'text-danger' : 'text-success'
                    "
                    >
                  <i
                    :class="
                    ProductPercentage < 0 ? 'fa-arrow-down' : 'fa-arrow-up'
                    "
                    class="fas"
                    ></i>
                  </span>
                  <span
                  class="font-weight-bold font-size-h0 pl-3"
                  :class="
                  ProductPercentage < 0 ? 'text-danger' : 'text-success'
                      "
                      >
                  {{ ProductPercentage }}
                  </span>
                  
                </div>
                 
                  <div class="mt-3">
                     <div class="d-flex align-items-center">
                        <div class="icon-wrapper pr-4 product-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box avatar-icon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        </div>
                        <div class="count-content">
                              <h3 class="text-body font-weight-bold mb-0">Products</h3>
                              <span class="text-dark font-weight-bold">
                                 <span class="counter">
                                    {{ totalProducts }}
                                 </span>
                              </span>
                        </div>                       
                     </div>
                     <div class="text-black-50 mt-3">
                        Compare to last year ({{ lastYear }})
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-xl-3">
            <div
               class="
               card card-custom card_custom_effect
               gutter-b
               bg-white
               border-0
               theme-circle theme-circle-success
               "
               >
               <div class="card-body">
                <div class="up-down-counter up-counter">
                  <span
                      class="svg-icon"
                      :class="
                      CustomerPercentage < 0 ? 'text-danger' : 'text-success'
                      "
                      >
                    <i
                        :class="
                        CustomerPercentage < 0 ? 'fa-arrow-down' : 'fa-arrow-up'
                        "
                      class="fas"
                      ></i>
                  </span>
                  <span
                    class="font-weight-bold font-size-h0 pl-3"
                    :class="
                    CustomerPercentage < 0 ? 'text-danger' : 'text-success'
                      "
                      >
                  {{ CustomerPercentage }}
                </span>
                        
                </div>
                 
                  <div class="mt-3">
                     <div class="d-flex align-items-center">
                        <div class="icon-wrapper pr-4 user-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user avatar-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </div>
                        <div class="count-content">
                           <h3 class="text-body font-weight-bold mb-0">Users</h3>
                           <span class="text-dark font-weight-bold">
                              <span class="counter">
                              {{ totalCustomers }}
                              </span>
                           </span>
                        </div>
                        
                     </div>
                     <div class="text-black-50 mt-3">
                        Compare to last year ({{ lastYear }})
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-xl-3">
            <div
               class="
               card card-custom card_custom_effect
               gutter-b
               bg-white
               border-0
               theme-circle theme-circle-info
               "
               >
               <div class="card-body">
                <div class="up-down-counter up-counter">
                  <span
                  class="svg-icon"
                  :class="SalePercentage < 0 ? 'text-danger' : 'text-success'"
                  >
                  <i
                      :class="
                      SalePercentage < 0 ? 'fa-arrow-down' : 'fa-arrow-up'
                      "
                  class="fas"
                  ></i>
                  </span>
                  <span
                  class="font-weight-bold font-size-h0 pl-3"
                  :class="SalePercentage < 0 ? 'text-danger' : 'text-success'"
                  >
                  {{ SalePercentage }}
                  </span>
              
                </div>
                  
                  <div class="mt-3">
                     <div class="d-flex align-items-center">
                        <div class="icon-wrapper pr-4 sales-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up avatar-icon"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </div>
                        <div class="count-content">
                          <h3 class="text-body font-weight-bold mb-0">Sales</h3>
                            <span class="text-dark font-weight-bold"
                              >$<span class="counter">
                            {{ totalSales }}
                            </span></span
                              >
                        </div>
                     </div>
                     <div class="text-black-50 mt-3">
                        Compare to last year ({{ lastYear }})
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- <div class="row" v-if="$parent.permissions.includes('dashboard')">
        <div class="col-xl-8 col-lg-7">
          <div class="card gutter-b bg-white border-0 order_card" style="box-shadow:none;">
               <div class="card-body px-2">
                  <div>
                     <div class="kt-table-content table-responsive">
                        <Order />
                     </div>
                  </div>
               </div>
          </div>
       </div>
         
         <div class="col-xl-4 col-lg-5">
            <div class="card card-custom gutter-b bg-white border-0">
               <div class="card-header align-items-center border-0">
                  <div class="card-title mb-0">
                     <h3 class="card-label text-body font-weight-bold mb-0">
                        Last Update
                     </h3>
                  </div>
               </div>
               <div class="card-body px-0">
                  <ul class="list-group scrollbar-1 justify-content-between" style="height: 300px">
                     <li
                        class="
                        list-group-item list-group-item-action
                        border-0
                        d-flex
                        align-items-center
                        justify-content-between
                        py-2
                        "
                        >
                        <div class="list-left d-flex align-items-center">
                           <span
                              class="
                              d-flex
                              align-items-center
                              justify-content-center
                              rounded
                              svg-icon
                              w-45px
                              h-45px
                              bg_lightyellow text__yellow
                              mr-3 border_radius_10
                              "
                              >
                              <svg
                                 width="20px"
                                 height="20px"
                                 viewBox="0 0 16 16"
                                 class="bi bi-lightning-fill"
                                 fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <path
                                    fill-rule="evenodd"
                                    d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"
                                    />
                              </svg>
                           </span>
                           <div class="list-content">
                              <span class="list-title text-body">Total Products</span>
                              <small class="text-muted d-block"
                                 >{{ thisWeekProducts }} New Products</small
                                 >
                           </div>
                        </div>
                        <span style="font-size:16px;">{{ totalProducts }}</span>
                     </li>
                     <li
                        class="
                        list-group-item list-group-item-action
                        border-0
                        d-flex
                        align-items-center
                        justify-content-between
                        py-2
                        "
                        >
                        <div class="list-left d-flex align-items-center">
                           <span
                              class="
                              d-flex
                              align-items-center
                              justify-content-center
                              rounded
                              svg-icon
                              w-45px
                              h-45px
                              text__blue bg_lightblue
                              mr-3 border_radius_10
                              "
                              >
                              <svg data-v-12658639="" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up avatar-icon"><polyline data-v-12658639="" points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline data-v-12658639="" points="17 6 23 6 23 12"></polyline></svg>
                           </span>
                           <div class="list-content">
                              <span class="list-title text-body">Total Sales</span>
                              <small class="text-muted d-block"
                                 >{{ thisWeekSales }} New Sales</small
                                 >
                           </div>
                        </div>
                        <span style="font-size:16px;">{{ totalSales }}</span>
                     </li>
                     <li
                        class="
                        list-group-item list-group-item-action
                        border-0
                        d-flex
                        align-items-center
                        justify-content-between
                        py-2
                        "
                        >
                        <div class="list-left d-flex align-items-center">
                           <span
                              class="
                              d-flex
                              align-items-center
                              justify-content-center
                              rounded
                              svg-icon
                              w-45px
                              h-45px
                              bg_lightpurple text__purple
                              mr-3 border_radius_10
                              "
                              >
                              <svg
                                 width="20px"
                                 height="20px"
                                 viewBox="0 0 16 16"
                                 class="bi bi-bar-chart-line-fill"
                                 fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <path
                                    fill-rule="evenodd"
                                    d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"
                                    />
                              </svg>
                           </span>
                           <div class="list-content">
                              <span class="list-title text-body">Total Order</span>
                              <small class="text-muted d-block"
                                 >{{ thisWeekOrders }} New Sales</small
                                 >
                           </div>
                        </div>
                        <span style="font-size:16px;">{{ totalOrders }}</span>
                     </li>
                     <li
                        class="
                        list-group-item list-group-item-action
                        border-0
                        d-flex
                        align-items-center
                        justify-content-between
                        py-2
                        "
                        >
                        <div class="list-left d-flex align-items-center">
                           <span
                              class="
                              d-flex
                              align-items-center
                              justify-content-center
                              rounded
                              svg-icon
                              w-45px
                              h-45px
                              bg_lightgreen text__green
                              mr-3 border_radius_10
                              "
                              >
                              <svg
                                 width="20px"
                                 height="20px"
                                 viewBox="0 0 16 16"
                                 class="bi bi-lightning-fill"
                                 fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <path
                                    fill-rule="evenodd"
                                    d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"
                                    />
                              </svg>
                           </span>
                           <div class="list-content">
                              <span class="list-title text-body">Total Users</span>
                              <small class="text-muted d-block"
                                 >{{ thisWeekCustomer }}New Users</small
                                 >
                           </div>
                        </div>
                        <span style="font-size:16px;">{{ totalCustomers }}</span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div> -->
      <!-- <div class="row" v-if="$parent.permissions.includes('dashboard')">
        <div class="col-lg-6 col-12">
            <div class="card card-custom gutter-b bg-white border-0">
               <div class="card-header align-items-center">
                  <div class="card-title mb-0">
                     <h3 class="card-label text-body font-weight-bold mb-0">Users</h3>
                  </div>
               </div>
               <div class="card-body pt-3">
                  <div id="chart" class="chart_main card_custom_effect">
                     <apexchart
                        type="line"
                        height="350"
                        :options="chartOptions"
                        :series="series"
                        ></apexchart>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-12">
          <div class="card card-custom gutter-b bg-white border-0">
             <div class="card-header align-items-center">
                <div class="card-title mb-0">
                   <h3 class="card-label font-weight-bold mb-0 text-body">
                      Monthly Sales
                   </h3>
                </div>
             </div>
             <div class="card-body pt-3">
                <div id="chart" class="chart_main card_custom_effect">
                   <apexchart
                      type="line"
                      height="350"
                      :options="saleChartOptions"
                      :series="saleSeries"
                      ></apexchart>
                </div>
             </div>
          </div>
       </div>
        </div> -->
      <!-- <div class="row" v-if="$parent.permissions.includes('dashboard')">
         <div class="col-lg-12 col-xl-12">
            <div class="card card-custom gutter-b bg-white border-0">
               <div class="card-header align-items-center border-0">
                  <div class="card-title mb-0">
                     <h3 class="card-label font-weight-bold mb-0 text-body">
                        Monthly Sales
                     </h3>
                  </div>
               </div>
               <div class="card-body pt-3">
                  <div id="chart">
                     <apexchart
                        type="line"
                        height="350"
                        :options="saleChartOptions"
                        :series="saleSeries"
                        ></apexchart>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- <div class="row" v-if="$parent.permissions.includes('dashboard')">
         <div class="col-lg-12 col-xl-12">
            <div class="card card-custom gutter-b bg-white border-0">
               <div class="card-body">
                  <div>
                     <div class="kt-table-content table-responsive">
                        <Order />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
   </div>
</template>
<script>
   import Order from "./Orders";
   import VueApexCharts from "vue-apexcharts";
   
   export default {
     name: "Dashboard",
     components: {
       Order,
       apexchart: VueApexCharts,
     },
     data() {
       return {
         limit : '10',
         searchParameter : '',
         loading: false,
         lastYearCustomers: 0,
         lastYearOrders: 0,
         lastYearProducts: 0,
         thisYearCustomers: 0,
         thisYearOrders: 0,
         thisYearProducts: 0,
         totalCustomers: 0,
         totalOrders: 0,
         totalProducts: 0,
         OrderPercentage: 0,
         ProductPercentage: 0,
         CustomerPercentage: 0,
         lastYear: "",
         totalSales: 0,
         thisYearSales: 0,
         lastYearSales: 0,
         SalePercentage: 0,
         thisWeekCustomer: 0,
         thisWeekOrders: 0,
         thisWeekProducts: 0,
         thisWeekSales: 0,
         customers: [],
         suppliers:[],
         series: [
           {
             name: "Customers",
             data: [],
           },
         ],
         orderchartOptions: {
            chart: {
               id: 'statistics-order-chart'
            },
            series: [{
               name: 'orderchart',
               data: [30, 40, 35, 50, 49, 60, 70, 91]
            }],
            xaxis: {
               categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998],
            },
         },
         orderchart: [{
            name: 'orderchart',
            data: [30, 40, 35, 50, 49, 60, 70, 91]
         }],
         chartOptions: {
           chart: {
             height: 350,
             type: "line",
             zoom: {
               enabled: false,
             },
           },
           dataLabels: {
             enabled: false,
           },
           stroke: {
             curve: "straight",
           },
           title: {
             text: "Monthly Users",
             align: "left",
           },
           grid: {
             row: {
               colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
               opacity: 0.5,
             },
           },
           xaxis: {
             categories: [],
           },
         },
         saleSeries: [
           {
             name: "Customers",
             data: [],
           },
         ],
         saleChartOptions: {
           chart: {
             height: 350,
             type: "line",
             zoom: {
               enabled: false,
             },
           },
           dataLabels: {
             enabled: false,
           },
           stroke: {
             curve: "straight",
           },
           title: {
             text: "Monthly Sales",
             align: "left",
           },
           grid: {
             row: {
               colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
               opacity: 0.5,
             },
           },
           xaxis: {
             categories: [],
           },
         },
       };
     },
     methods: {
       calculateOrders() {
         if (this.lastYearOrders < this.thisYearOrders)
           this.OrderPercentage =
             ((parseInt(this.thisYearOrders) - parseInt(this.lastYearOrders)) /
               parseInt(this.thisYearOrders)) *
             100;
         else if (this.lastYearOrders > this.thisYearOrders)
           this.OrderPercentage =
             (parseInt(this.thisYearOrders) - parseInt(this.lastYearOrders)) /
             parseInt(this.thisYearOrders) /
             100;
       },
       calculateProducts() {
         if (this.lastYearProducts < this.thisYearProducts)
           this.ProductPercentage =
             ((parseInt(this.thisYearProducts) - parseInt(this.lastYearProducts)) /
               parseInt(this.thisYearProducts)) *
             100;
         else if (this.lastYearProducts > this.thisYearProducts)
           this.ProductPercentage =
             (parseInt(this.thisYearProducts) - parseInt(this.lastYearProducts)) /
             parseInt(this.thisYearProducts) /
             100;
       },
       calculateCustomers() {
         if (this.lastYearCustomers < this.thisYearCustomers)
           this.CustomerPercentage =
             ((parseInt(this.thisYearCustomers) -
               parseInt(this.lastYearCustomers)) /
               parseInt(this.thisYearCustomers)) *
             100;
         else if (this.lastYearCustomers > this.thisYearCustomers)
           this.CustomerPercentage =
             (parseInt(this.thisYearCustomers) -
               parseInt(this.lastYearCustomers)) /
             parseInt(this.thisYearCustomers) /
             100;
       },
       calculateSales() {
         if (this.lastYearSales < this.thisYearSales)
           this.SalePercentage =
             ((parseInt(this.thisYearSales) - parseInt(this.lastYearSales)) /
               parseInt(this.thisYearSales)) *
             100;
         else if (this.lastYearSales > this.thisYearSales)
           this.SalePercentage =
             (parseInt(this.thisYearSales) - parseInt(this.lastYearSales)) /
             parseInt(this.thisYearSales) /
             100;
       },
       fetchcustomers(page_url) {
            this.$parent.loading = true;
            let vm = this;
            page_url = page_url || "/api/admin/customer";
            if(Number.isInteger(page_url)){
                page_url ="/api/admin/customer?page="+page_url;
            }
            var arr = page_url.split('?');
            if (arr.length > 1) {
                page_url += '&limit=' + this.limit;
            } else {
                page_url += '?limit=' + this.limit;
            }
            if (this.searchParameter != null) {
                page_url += '&searchParameter=' + this.searchParameter;
            }
            page_url += '&sortBy=' + this.sortBy + '&sortType=' + this.sortType + '&getCountry=1&getState=1';
            var responseData = {};

            axios.get(page_url, this.token).then(res => {
                this.customers = res.data.data;
               //  vm.makePagination(res.data.meta, res.data.links);
            });
        },
        fetchsuppliers(page_url) {
            this.$parent.loading = true;
            let vm = this;
            page_url = page_url || "/api/admin/supplier";
            if(Number.isInteger(page_url)){
                page_url ="/api/admin/supplier?page="+page_url;
            }
            var arr = page_url.split('?');
            
            if (arr.length > 1) {
                page_url += '&limit='+this.limit;
            }
            else{
                page_url += '?limit='+this.limit;
            }
            if(this.searchParameter != null){
                page_url += '&searchParameter='+this.searchParameter;
            }
            page_url += '&sortBy='+this.sortBy+'&sortType='+this.sortType+'&getCountry=1&getState=1';
            var responseData = {};

            axios.get(page_url, this.token).then(res => {
                this.suppliers = res.data.data;
               //  vm.makePagination(res.data.meta, res.data.links);
            }).finally(() => (this.$parent.loading = false));
        },

       getDashboardStats() {
         this.$parent.loading = true;
         let page_url = "/api/admin/dashboard";
   
         axios
           .get(page_url, this.token)
           .then((res) => {
             let data = res.data;
             this.lastYearCustomers = parseInt(data.lastYearCustomers);
             this.lastYearOrders = parseInt(data.lastYearOrders);
             this.lastYearProducts = parseInt(data.lastYearProducts);
             this.thisYearCustomers = parseInt(data.thisYearCustomers);
             this.thisYearOrders = parseInt(data.thisYearOrders);
             this.thisYearProducts = parseInt(data.thisYearProducts);
             this.totalCustomers = parseInt(data.totalCustomers);
             this.totalOrders = parseInt(data.totalOrders);
             this.totalProducts = parseInt(data.totalProducts);
             this.lastYear = data.lastYear;
             this.totalSales = data.totalSales;
             this.thisYearSales = data.thisYearSales;
             this.lastYearSales = data.lastYearSales;
             this.thisWeekOrders = data.lastYearOrders;
             this.thisWeekProducts = data.thisWeekProducts;
             this.thisWeekCustomer = data.thisWeekCustomer;
             this.thisWeekSales = data.thisWeekSales;
             this.calculateOrders();
             this.calculateProducts();
             this.calculateCustomers();
   
             if (data.customerMonthly.length > 0) {
               var seiresData = [];
               var categories = [];
               for (var i = 0; i < data.customerMonthly.length; i++) {
                 seiresData.push(data.customerMonthly[i].id);
                 categories[i] = data.customerMonthly[i].month;
               }
               this.series = [{ name: "Customers", data: seiresData }];
               this.chartOptions = {
                 ...this.chartOptions,
                 ...{
                   xaxis: {
                     categories,
                   },
                 },
               };
             }
             if (data.saleMonthly.length > 0) {
               var saleSeriesData = [];
               var salCategories = [];
               for (var i = 0; i < data.saleMonthly.length; i++) {
                 saleSeriesData.push(data.saleMonthly[i].amount);
                 salCategories[i] = data.saleMonthly[i].month;
               }
               this.saleSeries = [{ name: "Sales", data: saleSeriesData }];
               this.saleChartOptions = {
                 ...this.saleChartOptions,
                 ...{
                   xaxis: {
                     categories: salCategories,
                   },
                 },
               };
             }
             console.log(this.saleSeries, this.saleChartOptions);
           })
           .finally(() => (this.$parent.loading = false));
       },
     },
     mounted() {
       var token = localStorage.getItem("token");
       this.token = {
         headers: {
           Authorization: `Bearer ${token}`,
         },
       };
   
       this.getDashboardStats();
        this.fetchcustomers();
        this.fetchsuppliers();

     },
   };
</script>
<style>
.border_radius_10{
  border-radius: 10px !important;
}
.bg_lightpurple{
  background-color: #efe2fd !important;
}
.text__purple{
  color: #cfa5f9 !important;
}
.bg_lightyellow{
  background-color: #fdebd4 !important;
}
.text__yellow{
  color: #f9c47f !important;
}
.bg_lightgreen{
  background-color: #d4edda !important;
}
.text__green{
  color: #7eca90 !important;
}
.bg_lightblue{
  background-color: #cce5ff !important;
}
.text__blue{
  color: #66b0ff !important;
}
.apexcharts-menu-item{
   padding: 6px 7px;
    font-size: 12px;
    text-align: left !important;
    cursor: pointer;
    white-space: nowrap !important;
  }
  .card-custom.order_card{
   box-shadow: none !important;
  }
  .header-fixed.subheader-enabled .wrapper {
   padding-top: 49px !important;
}
@media screen and (min-width:992px) and (max-width:1125px) {
   .order_card .dataTables_wrapper .dataTables_length {
      float: none !important;
      text-align: center !important;
  }
   .order_card .dataTables_wrapper .dataTables_filter {
      float: none !important;
      text-align: center !important;
   }
  }
</style>
<style scoped>
/*=-======= CARD CSS **********/   
.card {
   margin-bottom: 2rem;
   box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);
   transition: all 0.3s ease-in-out, background 0s, color 0s, border-color 0s;
   border: 0 solid rgba(34, 41, 47, 0.125);
   border-radius: 0.428rem;
}
.card-header {
   padding: 1.7rem;
   margin-bottom: 0;
   background-color: transparent;
   border-bottom: 0 solid rgba(34, 41, 47, 0.125);
}
.card-statistics .statistics-body {
   padding:2.4rem !important;
}
.congratulation-medal {
   position: absolute;
   top: 0;
   right: 37px;
}
.match-height > [class*='col'] > .card {
   flex: 1 1 auto;
}
.bullet {
   width: 1rem;
   height: 1rem;
   display: inline-block;
}
 .bullet {
   border-radius: 50%;
}
 .bullet.bullet-primary {
   background-color: #7367f0;
}
 .bullet.bullet-warning {
   background-color: #ff9f43;
}
/****** TABLE CSS *******/
.pagination.pagination-sm li button{
   padding: 6px 12px;
   border-radius: 5px;
   font-size: 15px;
   border: none;
   margin: 0 10px;
}
table.dataTable.display tbody tr.odd>.sorting_1, table.dataTable.order-column.stripe tbody tr.odd>.sorting_1{
   background-color: transparent;
 }
 table.dataTable.display tbody tr:hover>.sorting_1, table.dataTable.order-column.hover tbody tr:hover>.sorting_1{
   background-color: transparent;
 }
.active-status .badge, .deactive-status .badge {
   padding: 0.3rem 0.5rem;
   text-align: center;
   border-radius: 0.358rem;
   font-size: 13px !important;
   font-weight: 600;
   line-height: 1;
   white-space: nowrap;
   vertical-align: baseline;
   display: inline-block;
}
.active-status .badge.badge-light-success {
   background-color: rgba(40,199,111,.12);
   color: #28c76f!important;
}
.deactive-status .badge.badge-light-danger{
   background-color: rgba(234, 84, 85, 0.12);
   color: #ea5455 !important;
}
/*.table-responsive::-webkit-scrollbar
{
	width: 3px;
	background-color: #F5F5F5;
}

.table-responsive::-webkit-scrollbar-thumb
{
	background-color: #000000;
   width: 3px;
}*/
.icon-wrapper svg {
   height: 50px;
   width: 50px;
   padding: 10px;
   border-radius: 50%;   
   }
   .icon-wrapper.order-icon svg{
    background: #efe2fd;
    color: #d7b4fa;
   }
   .icon-wrapper.product-icon svg{
    background: #fdebd4;
    color: #f9c47f;
   }
   .icon-wrapper.user-icon svg{
    background-color: #d4edda;
    color: #7eca90;
   }
   .icon-wrapper.sales-icon svg{
    background-color: #cce5ff;
    color: #66b0ff;
   }
   .count-content h3 {
   font-size: 22px;
   }
   .count-content span {
   line-height: normal;
   font-size: 18px;
   }
   .up-down-counter .svg-icon{
      width: 20px;
      height: 20px;
      background: #d4edda;
      border-radius: 50%;
      display: inline-flex;
      justify-content: center;
      align-items: center;
    }
  .list-group .list-content span{
    font-size: 16px;
    font-weight: 600;
  }
  .list-group .list-content small{
    font-size: 12px;
    font-weight: normal;
  }
  .chart_main{
    box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);
    padding: 10px;
    border-radius: 10px;
  }
  .card-custom .card-header{
    background-color: #f9f9f9;
  }

 
</style>