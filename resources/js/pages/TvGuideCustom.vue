<template>
  <div class="main-tv-schedule-area chanal-slider-list">
    <div class="channel-bg-area hidden-xs">
      &nbsp;
    </div>

    <div class="time-strip container-fluid hidden-xs">
      <div class="row">
        <div class="col-sm-2 col-md-2">
          <div class="row">
            <div class="lft-section">
              <div class="now-wrapper">

                <!--<div class="channel-move-left"><i class="fa fa-angle-left"></i></div>-->
                <div class="channel-text channel-text-1 hidden-xs">Channel</div>
                <div class="clearfix"></div>
              </div>
              <div class="channel-wrapper" style="margin-top: 0px;">
                <ul>
                  <li class=""><span class="ch-no">CH #1</span>
                    <div class="channel-container-img"><img alt="OM1"
                                                            src="//content.osn.com/logo/channel/cropped/OM1.png"></div>
                    <div class="clearfix"></div>
                  </li>
                  <li class=""><span class="ch-no">CH #2</span>
                    <div class="channel-container-img"><img alt="OMX"
                                                            src="//content.osn.com/logo/channel/cropped/OMX.png"></div>
                    <div class="clearfix"></div>
                  </li>
                  <li class=""><span class="ch-no">CH #4</span>
                    <div class="channel-container-img"><img alt="AHD"
                                                            src="//content.osn.com/logo/channel/cropped/AHD.png"></div>
                    <div class="clearfix"></div>
                  </li>
                  <li class=""><span class="ch-no">CH #6</span>
                    <div class="channel-container-img"><img alt="OPR"
                                                            src="//content.osn.com/logo/channel/cropped/OPR.png"></div>
                    <div class="clearfix"></div>
                  </li>
                  <li class=""><span class="ch-no">CH #9</span>
                    <div class="channel-container-img"><img alt="OCM"
                                                            src="//content.osn.com/logo/channel/cropped/OCM.png"></div>
                    <div class="clearfix"></div>
                  </li>
                  <li class=""><span class="ch-no">CH #15</span>
                    <div class="channel-container-img"><img alt="OMK"
                                                            src="//content.osn.com/logo/channel/cropped/OMK.png"></div>
                    <div class="clearfix"></div>
                  </li>
                  <li class=""><span class="ch-no">CH #16</span>
                    <div class="channel-container-img"><img alt="OFM"
                                                            src="//content.osn.com/logo/channel/cropped/OFM.png"></div>
                    <div class="clearfix"></div>
                  </li>
                  <li class=""><span class="ch-no">CH #31</span>
                    <div class="channel-container-img"><img alt="BO1"
                                                            src="//content.osn.com/logo/channel/cropped/BO1.png"></div>
                    <div class="clearfix"></div>
                  </li>
                  <li class=""><span class="ch-no">CH #34</span>
                    <div class="channel-container-img"><img alt="PAR"
                                                            src="//content.osn.com/logo/channel/cropped/PAR.png"></div>
                    <div class="clearfix"></div>
                  </li>
                  <li class=""><span class="ch-no">CH #37</span>
                    <div class="channel-container-img"><img alt="STM"
                                                            src="//content.osn.com/logo/channel/cropped/STM.png"></div>
                    <div class="clearfix"></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-10 col-md-10">
          <div class="row">
            <div class="rgt-section tvScheduleWrapper">
              <div class="time-wrapper syncscroll dragscroll" id="timeWrapper" name="timer">
                <div class="channel-time-area">
                  <ul class="time-slider clearfix">

                    <li class="slide ">
                      00:00
                    </li>

                    <li class="slide ">
                      00:30
                    </li>

                    <li class="slide ">
                      01:00
                    </li>

                    <li class="slide ">
                      01:30
                    </li>

                    <li class="slide ">
                      02:00
                    </li>

                    <li class="slide ">
                      02:30
                    </li>

                    <li class="slide ">
                      03:00
                    </li>

                    <li class="slide ">
                      03:30
                    </li>

                    <li class="slide ">
                      04:00
                    </li>

                    <li class="slide ">
                      04:30
                    </li>

                    <li class="slide ">
                      05:00
                    </li>

                    <li class="slide ">
                      05:30
                    </li>

                    <li class="slide ">
                      06:00
                    </li>

                    <li class="slide ">
                      06:30
                    </li>

                    <li class="slide ">
                      07:00
                    </li>

                    <li class="slide ">
                      07:30
                    </li>

                    <li class="slide ">
                      08:00
                    </li>

                    <li class="slide ">
                      08:30
                    </li>

                    <li class="slide ">
                      09:00
                    </li>

                    <li class="slide ">
                      09:30
                    </li>

                    <li class="slide ">
                      10:00
                    </li>

                    <li class="slide ">
                      10:30
                    </li>

                    <li class="slide ">
                      11:00
                    </li>


                    <li class="slide ">
                      12:00
                    </li>

                    <li class="slide ">
                      12:30
                    </li>

                    <li class="slide ">
                      13:00
                    </li>

                    <li class="slide ">
                      13:30
                    </li>

                    <li class="slide ">
                      14:00
                    </li>

                    <li class="slide current_playing" data-current-position="3024">
                      11:30
                    </li>
                    <li class="slide ">
                      14:30
                    </li>

                    <li class="slide ">
                      15:00
                    </li>

                    <li class="slide ">
                      15:30
                    </li>

                    <li class="slide ">
                      16:00
                    </li>

                    <li class="slide ">
                      16:30
                    </li>

                    <li class="slide ">
                      17:00
                    </li>

                    <li class="slide ">
                      17:30
                    </li>

                    <li class="slide ">
                      18:00
                    </li>

                    <li class="slide ">
                      18:30
                    </li>

                    <li class="slide ">
                      19:00
                    </li>

                    <li class="slide ">
                      19:30
                    </li>

                    <li class="slide ">
                      20:00
                    </li>

                    <li class="slide ">
                      20:30
                    </li>

                    <li class="slide ">
                      21:00
                    </li>

                    <li class="slide ">
                      21:30
                    </li>

                    <li class="slide ">
                      22:00
                    </li>

                    <li class="slide ">
                      22:30
                    </li>

                    <li class="slide ">
                      23:00
                    </li>

                    <li class="slide ">
                      23:30
                    </li>

                  </ul>
                </div>
              </div>
              <div class="marker-wrapper syncscroll dragscroll" id="markerWrapper" name="timer">
                <div class="marker-container">
                  <div class="blank-marker-div-left" style="width: 3312px;"></div>
                  <div class="marker" style="height: 943px;">
                    <div class="now_highlighter" style="margin-left: 443px;">Now</div>
                    <div class="container">
                      <ul class="program-list">
                        <li class="currnet-proram" id="1"><span style="left: 468px;"></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="blank-marker-div-right" style="width: 3456px;"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="program-dtl-wrapper syncscroll dragscroll" id="programWrapper" name="timer"
                   style="margin-top: 0px;">
                <div class="amcShowsWarp clearfix">
                  <div class="all-shows-time-area OM1 ">
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OM12019122719509169089" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OM12019122719509169089 " style="width:480px"><span
                      class="tv-show-onair-title">Jigsaw</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OM120191227214010097401" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OM120191227214010097401 " style="width:600px">
                      <span class="tv-show-onair-title">O.G.</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OM120191227234510396541" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OM120191227234510396541 " style="width:528px">
                      <span class="tv-show-onair-title">Whisky Galore</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OM120191228013510382526" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OM120191228013510382526 " style="width:504px">
                      <span class="tv-show-onair-title">Winter Love Story</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OM120191228032010986107" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OM120191228032010986107 " style="width:480px">
                      <span class="tv-show-onair-title">Wonder Park</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OM120191228050010382515" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OM120191228050010382515 " style="width:480px">
                      <span class="tv-show-onair-title">Love Under The Rainbow&nbsp;</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OM120191228064010732169" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OM120191228064010732169 " style="width:576px">
                      <span class="tv-show-onair-title">Ralph Breaks The Internet</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OM120191228084010899843" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OM120191228084010899843 " style="width:600px">
                      <span class="tv-show-onair-title">Instant Family</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OM120191228104511121279" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OM120191228104511121279 " style="width:528px">
                      <span class="tv-show-onair-title">Fighting With My Family</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OM120191228123511072408" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OM120191228123511072408 " style="width:480px">
                      <span class="tv-show-onair-title">The Boy Downstairs</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OM120191228141510986102" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OM120191228141510986102 " style="width:504px">
                      <span class="tv-show-onair-title">How To Train Your Dragon: The Hidden World</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OM120191228160011121280" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OM120191228160011121280 " style="width:576px">
                      <span class="tv-show-onair-title">Hellboy</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OM120191228180010986100" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OM120191228180010986100 " style="width:576px">
                      <span class="tv-show-onair-title">Bumblebee</span></div>
                  </div>
                </div>
                <div class="amcShowsWarp clearfix">
                  <div class="all-shows-time-area OMX ">
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMX20191227200011121293" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMX20191227200011121293 " style="width:528px">
                      <span class="tv-show-onair-title">Fighting With My Family</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMX2019122721509169106" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMX2019122721509169106 " style="width:528px"><span
                      class="tv-show-onair-title">Jigsaw</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMX20191227234010097411" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMX20191227234010097411 " style="width:600px">
                      <span class="tv-show-onair-title">O.G.</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMX20191228014510396548" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMX20191228014510396548 " style="width:528px">
                      <span class="tv-show-onair-title">Whisky Galore</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMX20191228033510382541" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMX20191228033510382541 " style="width:504px">
                      <span class="tv-show-onair-title">Winter Love Story</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMX20191228052010986118" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMX20191228052010986118 " style="width:480px">
                      <span class="tv-show-onair-title">Wonder Park</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMX20191228070010382530" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMX20191228070010382530 " style="width:480px">
                      <span class="tv-show-onair-title">Love Under The Rainbow&nbsp;</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMX20191228084010732183" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMX20191228084010732183 " style="width:576px">
                      <span class="tv-show-onair-title">Ralph Breaks The Internet</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMX20191228104010899859" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMX20191228104010899859 " style="width:600px">
                      <span class="tv-show-onair-title">Instant Family</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMX20191228124511121293" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMX20191228124511121293 " style="width:528px">
                      <span class="tv-show-onair-title">Fighting With My Family</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMX20191228143511072415" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMX20191228143511072415 " style="width:480px">
                      <span class="tv-show-onair-title">The Boy Downstairs</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMX20191228161510986113" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMX20191228161510986113 " style="width:504px">
                      <span class="tv-show-onair-title">How To Train Your Dragon: The Hidden World</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMX20191228180011121294" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMX20191228180011121294 " style="width:576px">
                      <span class="tv-show-onair-title">Hellboy</span></div>
                  </div>
                </div>
                <div class="amcShowsWarp clearfix">
                  <div class="all-shows-time-area AHD ">
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="AHD2019122719001724305" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="AHD2019122719001724305 " style="width:408px"><span
                      class="tv-show-onair-title">Bad Boys II</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="AHD20191227212510346149" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="AHD20191227212510346149 " style="width:552px">
                      <span class="tv-show-onair-title">Saw III</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="AHD20191227232011010608" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="AHD20191227232011010608 " style="width:552px">
                      <span class="tv-show-onair-title">Overlord</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="AHD2019122801153234000" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="AHD2019122801153234000 " style="width:576px"><span
                      class="tv-show-onair-title">Paycheck</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="AHD2019122803154139798" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="AHD2019122803154139798 " style="width:624px"><span
                      class="tv-show-onair-title">The Chronicles Of Riddick</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="AHD20191228052510228096" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="AHD20191228052510228096 " style="width:432px">
                      <span class="tv-show-onair-title">UFO</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="AHD2019122806553234000" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="AHD2019122806553234000 " style="width:576px"><span
                      class="tv-show-onair-title">Paycheck</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="AHD2019122808554139798" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="AHD2019122808554139798 " style="width:576px"><span
                      class="tv-show-onair-title">The Chronicles Of Riddick</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="AHD20191228105510897071" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="AHD20191228105510897071 " style="width:600px">
                      <span class="tv-show-onair-title">Power Rangers</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="AHD2019122813003840278" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="AHD2019122813003840278 " style="width:432px"><span
                      class="tv-show-onair-title">Vantage Point</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="AHD2019122814301724414" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="AHD2019122814301724414 " style="width:720px"><span
                      class="tv-show-onair-title">Transformers: Revenge Of The Fallen</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="AHD2019122817001828403" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="AHD2019122817001828403 " style="width:576px"><span
                      class="tv-show-onair-title">Shanghai Knights</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="AHD20191228190011061964" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="AHD20191228190011061964 " style="width:288px">
                      <span class="tv-show-onair-title">The Hurricane</span></div>
                  </div>
                </div>
                <div class="amcShowsWarp clearfix">
                  <div class="all-shows-time-area OPR ">
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR2019122719454934568" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR2019122719454934568 " style="width:408px"><span
                      class="tv-show-onair-title">Lost In The Cloud</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR2019122721252611997" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR2019122721252611997 " style="width:552px"><span
                      class="tv-show-onair-title">Friends With Benefits</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR20191227232010749145" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR20191227232010749145 " style="width:528px">
                      <span class="tv-show-onair-title">Hannah And Her Sisters</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR201912280110481362" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR201912280110481362 " style="width:456px"><span
                      class="tv-show-onair-title">Antz</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR20191228024510517275" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR20191228024510517275 " style="width:480px">
                      <span class="tv-show-onair-title">The Out Of Towners</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR20191228042510238519" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR20191228042510238519 " style="width:696px">
                      <span class="tv-show-onair-title">Nicholas Nickleby</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR20191228065010107029" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR20191228065010107029 " style="width:456px">
                      <span class="tv-show-onair-title">The Great Buck Howard</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR201912280825481724" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR201912280825481724 " style="width:456px"><span
                      class="tv-show-onair-title">Black Sheep</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR201912281000486795" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR201912281000486795 " style="width:552px"><span
                      class="tv-show-onair-title">The Bad News Bears</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR201912281155485927" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR201912281155485927 " style="width:480px"><span
                      class="tv-show-onair-title">RV</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR2019122813357467874" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR2019122813357467874 " style="width:528px"><span
                      class="tv-show-onair-title">Forces Of Nature</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR20191228152510749163" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR20191228152510749163 " style="width:600px">
                      <span class="tv-show-onair-title">The Social Network</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR2019122817305341495" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR2019122817305341495 " style="width:528px"><span
                      class="tv-show-onair-title">Let's Be Cops</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OPR20191228192010749156" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OPR20191228192010749156 " style="width:192px">
                      <span class="tv-show-onair-title">She's Out Of My League</span></div>
                  </div>
                </div>
                <div class="amcShowsWarp clearfix">
                  <div class="all-shows-time-area OCM ">
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191227184010740267" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191227184010740267 " style="width:264px">
                      <span class="tv-show-onair-title">All The Money In The World</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM2019122720557226261" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM2019122720557226261 " style="width:528px"><span
                      class="tv-show-onair-title">Eye For An Eye</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191227224510969311" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191227224510969311 " style="width:504px">
                      <span class="tv-show-onair-title">Josie</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191228003011058544" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191228003011058544 " style="width:480px">
                      <span class="tv-show-onair-title">The Sinister Surrogate</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191228021010652337" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191228021010652337 " style="width:456px">
                      <span class="tv-show-onair-title">A Friend's Obsession</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191228034510401610" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191228034510401610 " style="width:504px">
                      <span class="tv-show-onair-title">Real Women Have Curves</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191228053011001495" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191228053011001495 " style="width:456px">
                      <span class="tv-show-onair-title">Betrayed By Lies</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191228070510401591" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191228070510401591 " style="width:576px">
                      <span class="tv-show-onair-title">Game Change</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191228090511118816" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191228090511118816 " style="width:456px">
                      <span class="tv-show-onair-title">Agent Of Deceit</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191228104010522392" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191228104010522392 " style="width:432px">
                      <span class="tv-show-onair-title">Savannah Sunrise</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191228121010401585" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191228121010401585 " style="width:528px">
                      <span class="tv-show-onair-title">Earthly Possessions</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191228140011001505" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191228140011001505 " style="width:432px">
                      <span class="tv-show-onair-title">Stalked By My Doctor: A Sleepwalker's Nightmare</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191228153011001503" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191228153011001503 " style="width:432px">
                      <span class="tv-show-onair-title">No Good Deed</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191228170011058534" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191228170011058534 " style="width:504px">
                      <span class="tv-show-onair-title">An Acceptable Loss</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OCM20191228184511001498" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OCM20191228184511001498 " style="width:360px">
                      <span class="tv-show-onair-title">Everybody Knows</span></div>
                  </div>
                </div>
                <div class="amcShowsWarp clearfix">
                  <div class="all-shows-time-area OMK ">
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK20191227192510837142" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK20191227192510837142 " style="width:192px">
                      <span class="tv-show-onair-title">Black Sheep Smile</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK20191227204011101782" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK20191227204011101782 " style="width:408px">
                      <span class="tv-show-onair-title">Kurt Turns Evil</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122722058283566" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122722058283566 " style="width:456px"><span
                      class="tv-show-onair-title">Cop Dog</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122723402214219" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122723402214219 " style="width:408px"><span
                      class="tv-show-onair-title">Micropolis</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122801057745198" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122801057745198 " style="width:432px"><span
                      class="tv-show-onair-title">The Emperor's Secret</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK20191228023510837142" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK20191228023510837142 " style="width:360px">
                      <span class="tv-show-onair-title">Black Sheep Smile</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122803508081555" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122803508081555 " style="width:360px"><span
                      class="tv-show-onair-title">Amila's Secret</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122805057820629" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122805057820629 " style="width:384px"><span
                      class="tv-show-onair-title">The Wheelers</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122806257736402" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122806257736402 " style="width:480px"><span
                      class="tv-show-onair-title">Victor And The Secret Of Crocodile Mansion</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK20191228080511101782" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK20191228080511101782 " style="width:408px">
                      <span class="tv-show-onair-title">Kurt Turns Evil</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122809302214219" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122809302214219 " style="width:432px"><span
                      class="tv-show-onair-title">Micropolis</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122811004733133" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122811004733133 " style="width:384px"><span
                      class="tv-show-onair-title">Legend Of The Sea</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122812208081555" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122812208081555 " style="width:360px"><span
                      class="tv-show-onair-title">Amila's Secret</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122813358190014" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122813358190014 " style="width:432px"><span
                      class="tv-show-onair-title">Ivan The Incredible</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122815055370024" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122815055370024 " style="width:360px"><span
                      class="tv-show-onair-title">Bamse And The City Of Thieves</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122816207820629" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122816207820629 " style="width:408px"><span
                      class="tv-show-onair-title">The Wheelers</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122817454733133" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122817454733133 " style="width:432px"><span
                      class="tv-show-onair-title">Legend Of The Sea</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OMK2019122819157736402" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OMK2019122819157736402 " style="width:216px"><span
                      class="tv-show-onair-title">Victor And The Secret Of Crocodile Mansion</span></div>
                  </div>
                </div>
                <div class="amcShowsWarp clearfix">
                  <div class="all-shows-time-area OFM ">
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM2019122719155776568" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM2019122719155776568 " style="width:360px"><span
                      class="tv-show-onair-title">The Incredibles</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM2019122721155776509" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM2019122721155776509 " style="width:576px"><span
                      class="tv-show-onair-title">Bedtime Stories</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM2019122723157107996" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM2019122723157107996 " style="width:504px"><span
                      class="tv-show-onair-title">Max Keeble's Big Move</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM2019122801005776584" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM2019122801005776584 " style="width:432px"><span
                      class="tv-show-onair-title">Underdog</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM2019122802307108015" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM2019122802307108015 " style="width:504px"><span
                      class="tv-show-onair-title">Tuck Everlasting</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM2019122804155776509" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM2019122804155776509 " style="width:576px"><span
                      class="tv-show-onair-title">Bedtime Stories</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM2019122806155776568" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM2019122806155776568 " style="width:576px"><span
                      class="tv-show-onair-title">The Incredibles</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM2019122808157108015" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM2019122808157108015 " style="width:504px"><span
                      class="tv-show-onair-title">Tuck Everlasting</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM2019122810005990789" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM2019122810005990789 " style="width:576px"><span
                      class="tv-show-onair-title">Bolt</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM2019122812005776556" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM2019122812005776556 " style="width:504px"><span
                      class="tv-show-onair-title">Planes: Fire And Rescue</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM20191228134510672971" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM20191228134510672971 " style="width:648px">
                      <span class="tv-show-onair-title">Tron: Legacy</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM20191228160010860046" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM20191228160010860046 " style="width:432px">
                      <span class="tv-show-onair-title">Bears</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM2019122817305990789" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM2019122817305990789 " style="width:576px"><span
                      class="tv-show-onair-title">Bolt</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="OFM2019122819305776556" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="OFM2019122819305776556 " style="width:144px"><span
                      class="tv-show-onair-title">Planes: Fire And Rescue</span></div>
                  </div>
                </div>
                <div class="amcShowsWarp clearfix">
                  <div class="all-shows-time-area BO1 ">
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="BO120191227200011121589" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="BO120191227200011121589 " style="width:576px">
                      <span class="tv-show-onair-title">Dora And The Lost City Of Gold</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="BO120191227220011121589" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="BO120191227220011121589 " style="width:576px">
                      <span class="tv-show-onair-title">Dora And The Lost City Of Gold</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="BO120191228000011121589" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="BO120191228000011121589 " style="width:576px">
                      <span class="tv-show-onair-title">Dora And The Lost City Of Gold</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="BO120191228020011121589" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="BO120191228020011121589 " style="width:576px">
                      <span class="tv-show-onair-title">Dora And The Lost City Of Gold</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="BO120191228040011121589" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="BO120191228040011121589 " style="width:576px">
                      <span class="tv-show-onair-title">Dora And The Lost City Of Gold</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="BO120191228060011121589" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="BO120191228060011121589 " style="width:576px">
                      <span class="tv-show-onair-title">Dora And The Lost City Of Gold</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="BO120191228080011121589" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="BO120191228080011121589 " style="width:576px">
                      <span class="tv-show-onair-title">Dora And The Lost City Of Gold</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="BO120191228100011121589" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="BO120191228100011121589 " style="width:576px">
                      <span class="tv-show-onair-title">Dora And The Lost City Of Gold</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="BO120191228120011121589" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="BO120191228120011121589 " style="width:576px">
                      <span class="tv-show-onair-title">Dora And The Lost City Of Gold</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="BO120191228140011121589" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="BO120191228140011121589 " style="width:576px">
                      <span class="tv-show-onair-title">Dora And The Lost City Of Gold</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="BO120191228160011121589" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="BO120191228160011121589 " style="width:576px">
                      <span class="tv-show-onair-title">Dora And The Lost City Of Gold</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="BO120191228180011121589" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="BO120191228180011121589 " style="width:576px">
                      <span class="tv-show-onair-title">Dora And The Lost City Of Gold</span></div>
                  </div>
                </div>
                <div class="amcShowsWarp clearfix">
                  <div class="all-shows-time-area PAR ">
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191227194510070583" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191227194510070583 " style="width:192px">
                      <span class="tv-show-onair-title">Waco</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191227204010070584" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191227204010070584 " style="width:264px">
                      <span class="tv-show-onair-title">Waco</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191227213510104751" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191227213510104751 " style="width:264px">
                      <span class="tv-show-onair-title">Waco</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191227223010104752" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191227223010104752 " style="width:264px">
                      <span class="tv-show-onair-title">Waco</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191227232510994764" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191227232510994764 " style="width:120px">
                      <span class="tv-show-onair-title">Hollywood On Set 3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191227235010994755" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191227235010994755 " style="width:120px">
                      <span class="tv-show-onair-title">Hollywood On Set 3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228001511027979" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228001511027979 " style="width:24px">
                      <span class="tv-show-onair-title">Spotlight</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228002010994793" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228002010994793 " style="width:120px">
                      <span class="tv-show-onair-title">Hollywood On Set 3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228004511033630" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228004511033630 " style="width:24px">
                      <span class="tv-show-onair-title">Spotlight</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228005011027981" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228005011027981 " style="width:24px">
                      <span class="tv-show-onair-title">Spotlight</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228005511027989" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228005511027989 " style="width:24px">
                      <span class="tv-show-onair-title">Spotlight</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228010010994759" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228010010994759 " style="width:120px">
                      <span class="tv-show-onair-title">Hollywood On Set 3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228012510994784" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228012510994784 " style="width:144px">
                      <span class="tv-show-onair-title">Hollywood On Set 3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228015511045489" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228015511045489 " style="width:24px">
                      <span class="tv-show-onair-title">Spotlight</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228020011044277" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228020011044277 " style="width:24px">
                      <span class="tv-show-onair-title">Spotlight</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228020510994757" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228020510994757 " style="width:144px">
                      <span class="tv-show-onair-title">Hollywood On Set 3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228023510994761" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228023510994761 " style="width:120px">
                      <span class="tv-show-onair-title">Hollywood On Set 3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228030011044272" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228030011044272 " style="width:24px">
                      <span class="tv-show-onair-title">Spotlight</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228030510994766" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228030510994766 " style="width:144px">
                      <span class="tv-show-onair-title">Hollywood On Set 3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228033510994768" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228033510994768 " style="width:120px">
                      <span class="tv-show-onair-title">Hollywood On Set 3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228040011033628" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228040011033628 " style="width:24px">
                      <span class="tv-show-onair-title">Spotlight</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228040511033647" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228040511033647 " style="width:24px">
                      <span class="tv-show-onair-title">Spotlight</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR2019122804109712104" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR2019122804109712104 " style="width:432px"><span
                      class="tv-show-onair-title">The Wrong House</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR2019122805409840717" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR2019122805409840717 " style="width:432px"><span
                      class="tv-show-onair-title">The Perfect Boss</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228071011033636" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228071011033636 " style="width:24px">
                      <span class="tv-show-onair-title">Spotlight</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228071511159561" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228071511159561 " style="width:432px">
                      <span class="tv-show-onair-title">The Gourmet Detective Mystery Eat,drink&amp;be Buried</span>
                    </div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228084511159551" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228084511159551 " style="width:144px">
                      <span class="tv-show-onair-title">Neighbours S3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228091511159552" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228091511159552 " style="width:144px">
                      <span class="tv-show-onair-title">Neighbours S3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228094511159553" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228094511159553 " style="width:144px">
                      <span class="tv-show-onair-title">Neighbours S3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228101511159554" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228101511159554 " style="width:144px">
                      <span class="tv-show-onair-title">Neighbours S3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228104511159555" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228104511159555 " style="width:144px">
                      <span class="tv-show-onair-title">Neighbours S3</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228111511078646" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228111511078646 " style="width:504px">
                      <span class="tv-show-onair-title">Falling In Love</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR2019122813007451444" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR2019122813007451444 " style="width:480px"><span
                      class="tv-show-onair-title">Starsky And Hutch</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228144011033629" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228144011033629 " style="width:24px">
                      <span class="tv-show-onair-title">Spotlight</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228144511027982" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228144511027982 " style="width:24px">
                      <span class="tv-show-onair-title">Spotlight</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228145010915788" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228145010915788 " style="width:576px">
                      <span class="tv-show-onair-title">Knowing</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR20191228165010994819" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR20191228165010994819 " style="width:504px">
                      <span class="tv-show-onair-title">The Sentinel</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="PAR2019122818357481424" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="PAR2019122818357481424 " style="width:408px"><span
                      class="tv-show-onair-title">Kill Bill Vol. 1</span></div>
                  </div>
                </div>
                <div class="amcShowsWarp clearfix">
                  <div class="all-shows-time-area STM ">
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM20191227190010678078" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM20191227190010678078 " style="width:62px">
                      <span class="tv-show-onair-title">Don Jon</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM20191227201310312374" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM20191227201310312374 " style="width:547px">
                      <span class="tv-show-onair-title">Room</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM20191227220711151957" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM20191227220711151957 " style="width:446px">
                      <span class="tv-show-onair-title">Shooters</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM2019122723406222141" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM2019122723406222141 " style="width:528px"><span
                      class="tv-show-onair-title">Shall We Dance</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM20191228013010678096" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM20191228013010678096 " style="width:504px">
                      <span class="tv-show-onair-title">The Grand Seduction</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM2019122803156454510" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM2019122803156454510 " style="width:576px"><span
                      class="tv-show-onair-title">Hamlet</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM20191228051510312374" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM20191228051510312374 " style="width:576px">
                      <span class="tv-show-onair-title">Room</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM20191228071511151957" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM20191228071511151957 " style="width:432px">
                      <span class="tv-show-onair-title">Shooters</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM2019122808456558537" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM2019122808456558537 " style="width:504px"><span
                      class="tv-show-onair-title">Even Money</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM20191228103011075568" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM20191228103011075568 " style="width:442px">
                      <span class="tv-show-onair-title">Capture The Flag</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM20191228120211151964" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM20191228120211151964 " style="width:490px">
                      <span class="tv-show-onair-title">Tropic Thunder</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM20191228134410678078" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM20191228134410678078 " style="width:365px">
                      <span class="tv-show-onair-title">Don Jon</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM20191228150011151956" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM20191228150011151956 " style="width:576px">
                      <span class="tv-show-onair-title">Shooter</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM20191228170010863231" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM20191228170010863231 " style="width:456px">
                      <span class="tv-show-onair-title">Lara Croft: Tomb Raider</span></div>
                    <div class="tv-show-title-ch-1 ProgramdetailsPopUp clickable" data-osn-countrycode="IQ"
                         data-osn-epguniqid="STM20191228183510863230" data-target="#ProgramdetailsPopUp"
                         data-toggle="modal" id="STM20191228183510863230 " style="width:408px">
                      <span class="tv-show-onair-title">Lara Croft Tomb Raider: The Cradle Of Life</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="time-strip-mobile hidden-sm hidden-md hidden-lg">
    </div>
    <div class="loadMoreDiv">
      <img alt="" class="loadMoreBtn loadMoreBtnImg" src="/app_themes/osn/img/loader.gif" style="visibility: hidden">
      <input class="btn-outline loadMoreBtn" id="loadMoreBtn" title="Load More" type="button" value="Load More">

    </div>
  </div>
</template>

<script>
  export default {
    name: "tv-guide-custom"
  }
</script>

<style lang="scss" scoped>
  //1
  .main-tv-schedule-area {
    height: calc(100vh - 355px);
    overflow-y: scroll;
  }

  .main-tv-schedule-area {
    height: calc(100vh - 365px) !important;
  }

  .chanal-slider-list {
    position: relative;
  }

  //2
  .channel-bg-area {
    background: #4d4d4d none repeat scroll 0 0;
    max-height: 43px;
    overflow: hidden;
    height: 43px;
  }

  .channel-bg-area {
    background: #222 none repeat scroll 0 0 !important;
  }

  //4
  .time-strip {
    margin-top: -42px;
  }

  //5
  .now-wrapper {
    min-height: 43px;
  }

  //6
  .channel-text.channel-text-1 {
    width: 100% !important;
  }

  .channel-text-1 {
    width: 170px;
  }

  .channel-text {
    float: left;
    width: 190px;
    text-align: center;
    padding: 10px 0;
    color: #fff;
    font-family: "FaricyNew-rg";
    max-height: 140px;
    overflow: hidden;
  }

  //7
  .channel-wrapper {
    background: #222;
    color: #FFF;
    margin-top: 0;
  }

  //8
  .channel-wrapper > ul {
    list-style: outside none none;
    margin: 0;
    padding: 0;
  }

  //9
  .channel-wrapper li {
    border-bottom: 1px solid #999;
    height: 60px;
    padding: 5px;
    text-align: center;
    display: flex;
    align-items: center;
  }

  //10
  .channel-wrapper .ch-no {
    float: left;
    font-size: 16px;
    min-width: 45px;
  }

  //11
  .channel-container-img {
    float: left;
    min-width: 190px;
    vertical-align: middle;
  }

  //12
  .channel-container-img > img {
    max-height: 70px !important;
    max-width: 70% !important;
  }

  //13
  .rgt-section {
    overflow: hidden;
  }

  //14
  .time-wrapper {
    min-height: 43px;
    overflow: hidden;
  }

  //15
  .channel-time-area ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .time-slider, .marker-container {
    width: 6912px;
  }

  //16
  .channel-time-area ul li {
    width: 144px;
  }

  .channel-time-area ul li {
    border-left: 1px solid #666;
    color: #fff;
    float: left;
    padding: 10px 9px;
    text-align: left;
    width: 12%;
  }

  //17
  .marker-wrapper {
    width: 100%;
  }

  .marker-wrapper {
    margin-top: -43px;
    overflow: hidden;
    position: absolute;
    width: 864px;
    overflow: hidden;
    margin-top: -43px;
  }

  //18
  .time-slider, .marker-container {
    width: 6912px;
  }

  //19
  .blank-marker-div-left {
    float: left;
    height: 42px;
    width: 3312px;
  }

  //20
  .marker {
    float: left;
    position: relative;
    width: 144px;
    height: 943px;
  }

  //21
  .now_highlighter {
    color: #fff;
    font-family: "FaricyNew-rg";
    font-size: 1em;
    opacity: 1;
    position: relative;
    text-align: center;
    top: 2px;
  }

  .now_highlighter {
    position: absolute;
    background-image: url('https://www.osn.com/app_themes/osn/img/now-img-icon.png');
    width: 50px;
    height: 38px;
    top: 2px;
    z-index: 2;
    text-align: center;
    line-height: 30px;
    opacity: .8;
  }

  //22
  .program-list {
    margin: 0;
    list-style: none;
  }

  //23
  .blank-marker-div-right {
    width: 3456px;
    height: 42px;
    float: left;
  }

  //24
  .program-dtl-wrapper {
    overflow: hidden;
    position: relative;
  }

  //25
  .amcShowsWarp {
    background-color: #f7f7f7;
    overflow: visible;
    width: auto;
  }

  //26
  amcShowsWarp .all-shows-time-area {
    border-bottom: 1px solid #999;
    height: 60px;
    min-height: 60px;
    width: 6912px;
  }

  .amcShowsWarp .all-shows-time-area {
    border-bottom: 1px solid #222 !important;
    height: 90px !important;
    min-height: 90px !important;
    background: #000;
  }

  .amcShowsWarp .all-shows-time-area {
    width: 11000px;
  }

  .amcShowsWarp .all-shows-time-area {
    width: 880px;
  }

  .all-shows-time-area {
    float: left;
    min-height: 137px;
    background: #f7f7f7;
  }

  //27
  .tv-show-title-ch-1 {
    border-left: 1px solid #999;
    border-right: medium none;
    float: left;
    max-width: none;
    min-height: 60px;
    overflow: hidden;
    display: flex;
    align-items: center;
    padding: 5px;
    transition: all .5s ease 0;
  }

  .tv-show-title-ch-1 {
    background: #000;
    border-bottom: 1px solid #222 !important;
    border-left: 1px solid #222 !important;
    min-height: 90px !important;
  }

  .tv-show-title-ch-1 {
    float: left;
    padding: 20px 10px 0;
    max-width: 584.4px;
    min-height: 140px;
    border-right: solid 1px #e8e8e8;
    overflow: hidden;
  }

  //28
  .tv-show-onair-title {
    padding-top: 0;
    font-size: 16px;
  }
  .tv-show-onair-title {
    color:
      #FFF;
    padding: 10px !important;
  }
  .tv-show-onair-title {
    color: #4c4c4c;
    display: block;
    font-size: 18px;
    line-height: 20px;
  }
</style>
