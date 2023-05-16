F <style>
 .sucmesg{
    text-align: center;
    color: green;
    margin-top: 11px;
    margin-left: 50px;
    font-size: 22px;
 }
 #asksuccess2{
    float: left;
    color: #ee2832;
 }
 @media only screen and (max-width: 600px) {
    .sucmesg{
        float: none !important;
        color: green;
    margin-top: 30px;
    margin-left: 0px;
    font-size: 20px;
    clear: both;
    text-align: center;
 }
 #asksuccess2{
    float: none;
    color: #ee2832;
 }
}
a{
    cursor: pointer;
}
#call{
    font-size: 16px !important;
    letter-spacing: 0.2px !important;
    line-height: 1.86 !important;
    color: #666 !important;
}
#call:hover{
    font-size: 16px !important;
    letter-spacing: 0.2px !important;
    line-height: 1.86 !important;
    color: red !important;
}
 </style>
  <!-- Css for Adding Textfield  -->
                                                        <style type="text/css">
                                                        .text-area::placeholder{
                                                            color: #ccc;
                                                        }
                                                        .text-area:-ms-input-placeholder { 
                                                          color: #ccc;
                                                        }

                                                        .text-area::-ms-input-placeholder { 
                                                          color: #ccc;
                                                        }
                                                        .text-box::placeholder{
                                                            color: #ccc;
                                                        }
                                                        .text-box:-ms-input-placeholder { 
                                                          color: #ccc;
                                                        }

                                                        .text-box::-ms-input-placeholder { 
                                                          color: #ccc;
                                                        }
                                                      

                                                        
                                                        .popup-closed{
                                                            width: 20px;
                                                        height: 20px;
                                                        padding-top: 1px;
                                                        position: absolute;
                                                        display: block;
                                                        /*top: 1px;
                                                        left: 340px;*/
                                                        top: 0;
                                                        right: 15px;
                                                        transition: ease 0.25s all;
                                                        -webkit-transform: translate(50%, -50%);
                                                        transform: translate(50%, -50%);
                                                        border-radius: 1000px;
                                                        background: rgba(0, 0, 0, 0.8);
                                                        font-family: Arial, Sans-Serif;
                                                        font-size: 17px;
                                                        text-align: center;
                                                        line-height: 100%;
                                                        color: #fff;
                                                    
                                                        }
                                                            .demo{
                                                                width:100%;
                                                                clear:both;
                                                                
                                                                }
                                                                #btnAdd{
                                                                    /*margin-top: -10px;*/
                                                                    margin-top: 5px;
                                                                    cursor: pointer;
                                                                    display:block;
                                                                    clear:both;
                                                                    float: left;
                                                                    /*background-color: rgba(28, 98, 175, 1);*/
                                                                    border: none;
                                                                    color: rgba(28, 98, 175, 1);
                                                                    text-align: center;
                                                                    text-decoration: none;
                                                                    font-size: 13px;
                                                                }
                                                                .con{
                                                                    position: relative;
                                                                    width:50%;
                                                                    /*float:right;*/
                                                                    clear: both;
                                                                    display:inline-block;
                                                                }
                                                                .text-area{
                                                                    width: 96%;
                                                                    height: 46px;
                                                                    padding: 0 12px;
                                                                    font-size: 15px;
                                                                    line-height: 1.86;
                                                                    font-weight: normal;
                                                                    letter-spacing: -0.025em;
                                                                    color: #666;
                                                                    background: transparent;
                                                                    border: 1px solid #ccc;
                                                                    border-radius: 5px;
                                                                    -webkit-box-shadow: none;
                                                                    box-shadow: none;
                                                                    -webkit-appearance: none;
                                                                    -webkit-transition: border 300ms;
                                                                    transition: border 300ms;

                                                                    margin-bottom: 20px;
                                                                }
                                                                .email-field{
                                                                    width: 100% !important;
                                                                    padding: 12px !important;
                                                                    border: 1px solid #ccc !important;
                                                                    border-radius: 4px !important;
                                                                    box-sizing: border-box !important;
                                                                    margin-top: 6px !important;
                                                                    margin-bottom: 16px !important;
                                                                    margin-left: -14px !important;
                                                                    resize: vertical !important;
                                                                    font-family: 'Gotham', sans-serif !important;
                                                                }
                                                                .full{
                                                                    width: 48%;
                                                                }
                                                                @media only screen and (min-width: 300px) and (max-width: 340px) {
                                                                            .con{ 
                                                                            width:100%;
                                                                            }
                                                                            .full{
                                                                               width: 100% !important; 
                                                                            }
                                                                            #btnAdd{
                                                                                position: relative;
                                                                                top: 60%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -40%);
                                                                            }
                                                                            .popup-closed{
                                                                                left: 220px;
                                                                            }
                                                                            .email-field{
                                                                                margin-left: 0px !important;
                                                                            }

                                                                            .contact_submit input{
                                                                                position: relative;
                                                                                top: 50%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -50%);
                                                                            }
                                                                            #btnAdd{
                                                                                position: relative;
                                                                                top: 60%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -40%);
                                                                            }
                                                                    }
                                                                @media only screen and (max-width: 360px) and (min-width: 340px) {
                                                                      .con{ 
                                                                            width:100%;
                                                                            }
                                                                            .full{
                                                                               width: 100% !important; 
                                                                            }
                                                                            #btnAdd{
                                                                                position: relative;
                                                                                top: 60%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -40%);
                                                                            }
                                                                            .popup-closed{
                                                                                left: 260px;
                                                                            }
                                                                            .email-field{
                                                                                margin-left: 0px !important;
                                                                            }
                                                                            .text-area{
                                                                                width: 100%;
                                                                            }
                                                                            .contact_submit input{
                                                                                position: relative;
                                                                                top: 50%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -50%);
                                                                            }
                                                                    }
                                                                     @media only screen and (min-width: 361px) and (max-width: 400px) {
                                                                      .con{ 
                                                                            width:100%;
                                                                            }
                                                                            .full{
                                                                               width: 100% !important; 
                                                                            }
                                                                            #btnAdd{
                                                                                position: relative;
                                                                                top: 60%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -40%);
                                                                            }
                                                                            .popup-closed{
                                                                                left: 270px;
                                                                            }
                                                                            .email-field{
                                                                                margin-left: 0px !important;
                                                                            }
                                                                            .text-area{
                                                                                width: 100%;
                                                                            }
                                                                            .contact_submit input{
                                                                                position: relative;
                                                                                top: 50%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -50%);
                                                                            }
                                                                    }
                                                                    
                                                                    @media only screen and (min-width: 500px) and (max-width: 599px) {
                                                                            
                                                                            .popup-closed{
                                                                                left: 235px;
                                                                            }
                                                                            .email-field{
                                                                                margin-left: 0px !important;
                                                                            }

                                                                            .contact_submit input{
                                                                                position: relative;
                                                                                top: 50%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -50%);
                                                                            }
                                                                            #btnAdd{
                                                                                position: relative;
                                                                                top: 60%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -40%);
                                                                            }
                                                                    }
                                                                    @media only screen and (min-width: 401px) and (max-width: 449px) {
                                                                            .con{ 
                                                                            width:100%;
                                                                            }
                                                                            .full{
                                                                               width: 100% !important; 
                                                                            }
                                                                            #btnAdd{
                                                                                position: relative;
                                                                                top: 60%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -40%);
                                                                            }
                                                                            .popup-closed{
                                                                                left: 300px;
                                                                            }
                                                                            .email-field{
                                                                                margin-left: 0px !important;
                                                                            }

                                                                            .contact_submit input{
                                                                                position: relative;
                                                                                top: 50%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -50%);
                                                                            }
                                                                            #btnAdd{
                                                                                position: relative;
                                                                                top: 60%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -40%);
                                                                            }
                                                                    }
                                                                    @media only screen and (min-width: 641px) and (max-width: 800px) {
                                                                      
                                                                            .popup-closed{
                                                                                left: 270px;
                                                                            }
                                                                            .email-field{
                                                                                margin-left: 0px !important;
                                                                            }

                                                                            .contact_submit input{
                                                                                position: relative;
                                                                                top: 50%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -50%);
                                                                            }
                                                                            #btnAdd{
                                                                                position: relative;
                                                                                top: 60%;
                                                                                left: 50%;
                                                                                transform: translate(-50%, -40%);
                                                                            }
                                                                    }
                                                                    @media only screen and (min-width: 900px) and (max-width: 1300px) {
                                                                      
                                                                            .popup-closed{
                                                                                left: 230px;
                                                                            }
                                                                    }
                                                                    @media only screen and (max-width: 640px) and (min-width: 600px){
                                                                            .popup-closed {
                                                                                left: 220px;
                                                                            }
                                                                        }
                                                                    @media only screen and (max-width: 499px) and (min-width: 450px){
                                                                    .popup-closed {
                                                                        left: 160px;
                                                                    }
                                                                }
                                                                 @media only screen and (max-width: 1025px) and (min-width: 1023px){
                                                                    .popup-closed {
                                                                        left: 340px;
                                                                    }
                                                                }

                                                        </style>  

<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <header id="header">
            <div class="second-nav">
                <ul>
                    <li><a class="active" href="#" data-popup-open="popup-1"><img src="https://www.aspcares.com/assets/images/doctor.svg" alt="doctor" width="25px" class="icon-1" ><span id="icon-hide">&nbsp;&nbsp;ASK A PHARMACIST</span></a></li>
                    <li><a href="#" data-popup-open="popup-2" ><img src="https://www.aspcares.com/assets/images/pill.svg" alt="pill" width="25px" class="icon-1"><span id="icon-hide">&nbsp;&nbsp;REQUEST A REFILL</a></li>
                    <li><a href="#contact" data-popup-open="popup-8"><img src="https://www.aspcares.com/assets/images/patient.svg" alt="patient" width="25px" class="icon-1"><span id="icon-hide">&nbsp;&nbsp;REFER A PATIENT</a></li>
                    <div lang="en" class="lang_container">
                        <select class="lang_menu lang_selectric">
                            <option value="#">ESP</option>
                            <option value="#" selected>ENG</option>
                        </select>
                        <!-- .lang_menu -->
                    </div>
                    <div id="search_open_btn" class="search_container">
                        <a href="#" class="search_btn"><span>search</span></a>
                    </div>
                </ul>
            </div>

            <div class="header_wrap">
                <div id="small_menu_btn">
                    <span class="small_menu_btn_line small_menu_btn_line_01"></span>
                    <span class="small_menu_btn_line small_menu_btn_line_02"></span>
                    <span class="small_menu_btn_line small_menu_btn_line_03"></span>
                </div>
                <div id="small_menu_close"><span>close</span></div>
                <div id="small_menu_overlay"></div>
                <div class="header_inner">
                    <div id="logo">
                        <a href="/" title="home">
                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="227.333px" height="52px" viewBox="-6.667 -31 227.333 52" enable-background="new -6.667 -31 227.333 52" xml:space="preserve">
                                <g enable-background="new    ">
                                    <path fill="#1C62AF" d="M67.772,4.528c-0.143,0-0.2,0.057-0.258,0.23l-1.545,3.933c-0.287,0.718-0.43,1.408-0.43,1.751
        c0,0.517,0.258,0.89,1.146,0.89h0.43c0.343,0,0.429,0.059,0.429,0.229c0,0.23-0.172,0.287-0.487,0.287
        c-0.917,0-2.147-0.086-3.035-0.086c-0.314,0-1.89,0.086-3.379,0.086c-0.372,0-0.544-0.057-0.544-0.287
        c0-0.171,0.115-0.229,0.343-0.229c0.258,0,0.659-0.028,0.888-0.058c1.317-0.173,1.861-1.147,2.435-2.583l7.187-17.799
        c0.344-0.832,0.516-1.148,0.802-1.148c0.258,0,0.43,0.258,0.716,0.918c0.688,1.579,5.269,13.063,7.102,17.427
        c1.088,2.584,1.918,2.985,2.52,3.129c0.429,0.086,0.859,0.114,1.202,0.114c0.229,0,0.373,0.028,0.373,0.229
        c0,0.23-0.257,0.287-1.317,0.287c-1.03,0-3.122,0-5.412-0.057c-0.515-0.029-0.858-0.029-0.858-0.23c0-0.171,0.114-0.229,0.4-0.258
        c0.2-0.058,0.401-0.316,0.258-0.66l-2.291-5.915c-0.058-0.144-0.144-0.201-0.287-0.201H67.772z M73.614,3.093
        c0.144,0,0.172-0.086,0.144-0.172L71.18-4.142C71.151-4.256,71.123-4.4,71.037-4.4c-0.086,0-0.144,0.144-0.172,0.258L68.23,2.892
        c-0.028,0.115,0,0.201,0.115,0.201H73.614z" />
                                </g>
                                <g enable-background="new    ">
                                    <path fill="#1C62AF" d="M84.847,11.505c-0.458-0.201-0.545-0.345-0.545-0.977c0-1.579,0.115-3.301,0.144-3.761
        c0.029-0.431,0.114-0.747,0.343-0.747c0.258,0,0.287,0.258,0.287,0.488c0,0.373,0.114,0.977,0.257,1.465
        c0.63,2.125,2.319,2.899,4.095,2.899c2.577,0,3.836-1.751,3.836-3.273c0-1.406-0.429-2.727-2.806-4.593l-1.317-1.034
        c-3.149-2.468-4.238-4.479-4.238-6.804c0-3.158,2.634-5.426,6.615-5.426c1.861,0,3.064,0.287,3.808,0.488
        c0.258,0.057,0.401,0.144,0.401,0.345c0,0.373-0.114,1.206-0.114,3.445c0,0.632-0.086,0.861-0.316,0.861
        c-0.2,0-0.286-0.172-0.286-0.517c0-0.258-0.143-1.148-0.744-1.895c-0.43-0.545-1.26-1.407-3.122-1.407
        c-2.119,0-3.407,1.235-3.407,2.957c0,1.321,0.659,2.326,3.035,4.134l0.802,0.603c3.465,2.613,4.696,4.594,4.696,7.32
        c0,1.666-0.629,3.646-2.691,4.995c-1.433,0.92-3.035,1.178-4.553,1.178C87.366,12.251,86.078,12.05,84.847,11.505z" />
                                    <path fill="#1C62AF" d="M103.091-1.529c0-4.364,0-5.168-0.057-6.087c-0.058-0.976-0.286-1.436-1.231-1.636
        c-0.229-0.058-0.716-0.086-1.117-0.086c-0.314,0-0.487-0.057-0.487-0.258c0-0.2,0.201-0.258,0.63-0.258
        c1.517,0,3.321,0.086,4.124,0.086c1.174,0,2.834-0.086,4.151-0.086c3.579,0,4.868,1.206,5.326,1.637
        c0.63,0.603,1.432,1.895,1.432,3.417c0,4.077-2.979,6.948-7.044,6.948c-0.144,0-0.458,0-0.602-0.029
        c-0.144-0.029-0.344-0.057-0.344-0.258c0-0.23,0.2-0.316,0.802-0.316c1.604,0,3.838-1.809,3.838-4.737
        c0-0.947-0.087-2.871-1.69-4.307c-1.03-0.947-2.204-1.119-2.863-1.119c-0.43,0-0.858,0.029-1.116,0.115
        c-0.144,0.057-0.229,0.229-0.229,0.545V3.523c0,2.642,0,4.909,0.143,6.144c0.087,0.804,0.259,1.434,1.117,1.55
        c0.401,0.057,1.031,0.114,1.461,0.114c0.314,0,0.458,0.087,0.458,0.229c0,0.201-0.229,0.287-0.545,0.287
        c-1.89,0-3.693-0.086-4.438-0.086c-0.659,0-2.463,0.086-3.608,0.086c-0.372,0-0.572-0.086-0.572-0.287
        c0-0.143,0.114-0.229,0.458-0.229c0.43,0,0.773-0.058,1.03-0.114c0.573-0.116,0.716-0.747,0.831-1.579
        c0.143-1.207,0.143-3.473,0.143-6.115V-1.529z" />
                                </g>
                                <g enable-background="new    ">
                                    <path fill="#EE2932" d="M131.018,9.15c-2.777-2.497-3.465-5.771-3.465-8.498c0-1.923,0.659-5.282,3.207-7.837
        c1.718-1.723,4.324-3.072,8.733-3.072c1.146,0,2.749,0.086,4.152,0.345c1.088,0.201,2.005,0.374,2.921,0.431
        c0.315,0.028,0.372,0.143,0.372,0.316c0,0.229-0.085,0.574-0.144,1.608c-0.058,0.947-0.058,2.526-0.086,2.957
        c-0.028,0.431-0.086,0.603-0.257,0.603c-0.201,0-0.229-0.201-0.229-0.603c0-1.12-0.459-2.296-1.202-2.928
        c-1.003-0.862-3.208-1.636-5.728-1.636c-3.808,0-5.583,1.12-6.585,2.095c-2.092,2.01-2.578,4.565-2.578,7.494
        c0,5.483,4.21,10.507,10.337,10.507c2.148,0,3.837-0.258,4.983-1.436c0.601-0.631,0.974-1.895,1.059-2.412
        c0.058-0.315,0.114-0.429,0.286-0.429c0.144,0,0.201,0.2,0.201,0.429c0,0.202-0.344,2.698-0.63,3.675
        c-0.173,0.546-0.229,0.603-0.745,0.832c-1.146,0.46-3.321,0.661-5.154,0.661C136.172,12.251,133.28,11.189,131.018,9.15z" />
                                </g>
                                <g enable-background="new    ">
                                    <path fill="#EE2932" d="M157.914-6.123c0.315-0.804,0.43-0.948,0.601-0.948c0.259,0,0.344,0.345,0.603,0.89
        c0.457,1.034,4.493,11.11,6.041,14.814c0.916,2.181,1.604,2.498,2.149,2.67c0.371,0.115,0.742,0.144,1.002,0.144
        c0.143,0,0.313,0.058,0.313,0.201s-0.285,0.2-0.573,0.2c-0.371,0-2.232,0-3.979-0.057c-0.488-0.029-0.888-0.029-0.888-0.173
        c0-0.114,0.057-0.114,0.171-0.172c0.143-0.057,0.403-0.258,0.229-0.661l-2.261-5.598c-0.057-0.115-0.085-0.144-0.229-0.144h-5.813
        c-0.114,0-0.2,0.057-0.257,0.201l-1.432,3.904c-0.229,0.603-0.373,1.207-0.373,1.636c0,0.488,0.43,0.661,0.859,0.661h0.229
        c0.201,0,0.259,0.086,0.259,0.201c0,0.144-0.145,0.2-0.373,0.2c-0.601,0-1.975-0.086-2.262-0.086c-0.259,0-1.518,0.086-2.55,0.086
        c-0.313,0-0.486-0.057-0.486-0.2c0-0.115,0.115-0.201,0.229-0.201c0.172,0,0.544-0.028,0.744-0.057
        c1.146-0.145,1.633-1.005,2.119-2.24L157.914-6.123z M160.719,4.04c0.114,0,0.114-0.057,0.086-0.172l-2.489-6.689
        c-0.144-0.374-0.287-0.374-0.43,0l-2.349,6.689c-0.028,0.115,0,0.172,0.086,0.172H160.719z" />
                                    <path fill="#EE2932" d="M171.952,0.452c0-3.79,0-4.478-0.057-5.253c-0.061-0.833-0.203-1.235-1.033-1.349
        c-0.2-0.029-0.628-0.058-0.859-0.058c-0.086,0-0.2-0.115-0.2-0.2c0-0.145,0.114-0.202,0.402-0.202c1.146,0,2.835,0.057,2.978,0.057
        c0.257,0,2.378-0.057,3.148-0.057c1.604,0,3.38,0.144,4.695,1.062c0.632,0.459,1.747,1.637,1.747,3.33
        c0,1.809-0.741,3.561-3.091,5.57c2.061,2.584,3.808,4.794,5.27,6.316c1.344,1.377,2.175,1.607,2.806,1.693
        c0.485,0.087,0.745,0.087,0.888,0.087s0.229,0.114,0.229,0.201c0,0.144-0.143,0.2-0.603,0.2h-1.572
        c-1.434,0-2.064-0.143-2.692-0.488c-1.087-0.574-2.004-1.75-3.437-3.587c-1.059-1.321-2.175-2.899-2.721-3.561
        c-0.114-0.114-0.171-0.144-0.342-0.144l-3.209-0.057c-0.114,0-0.171,0.057-0.171,0.201v0.575c0,2.353,0,4.249,0.114,5.253
        c0.085,0.718,0.228,1.178,1.001,1.292c0.346,0.059,0.889,0.115,1.116,0.115c0.175,0,0.203,0.114,0.203,0.201
        c0,0.114-0.117,0.2-0.402,0.2c-1.373,0-2.978-0.086-3.092-0.086c-0.028,0-1.718,0.086-2.492,0.086c-0.257,0-0.399-0.057-0.399-0.2
        c0-0.087,0.058-0.201,0.2-0.201c0.229,0,0.542-0.057,0.773-0.115c0.485-0.114,0.542-0.574,0.656-1.292
        c0.146-1.004,0.146-2.928,0.146-5.282V0.452z M174.128,2.519c0,0.144,0.057,0.229,0.171,0.315c0.374,0.202,1.661,0.374,2.777,0.374
        c0.603,0,1.29-0.029,1.89-0.431c0.859-0.575,1.519-1.867,1.519-3.732c0-3.043-1.661-4.794-4.353-4.794
        c-0.745,0-1.548,0.085-1.805,0.144c-0.114,0.057-0.199,0.144-0.199,0.287V2.519z" />
                                    <path fill="#EE2932" d="M191.198,0.452c0-3.79,0-4.478-0.058-5.253c-0.057-0.833-0.199-1.235-1.03-1.349
        c-0.199-0.029-0.631-0.058-0.859-0.058c-0.085,0-0.199-0.115-0.199-0.2c0-0.145,0.114-0.202,0.399-0.202
        c1.145,0,2.777,0.057,2.92,0.057c0.175,0,5.441,0.029,6.015,0c0.485-0.028,0.945-0.114,1.145-0.144
        c0.114-0.028,0.229-0.115,0.346-0.115c0.086,0,0.114,0.115,0.114,0.23c0,0.173-0.143,0.459-0.203,1.148
        c-0.028,0.23-0.085,1.321-0.143,1.607c-0.028,0.115-0.114,0.258-0.229,0.258c-0.143,0-0.199-0.115-0.199-0.315
        c0-0.172-0.028-0.575-0.143-0.861c-0.175-0.402-0.432-0.574-1.805-0.746c-0.431-0.058-3.351-0.086-3.637-0.086
        c-0.114,0-0.143,0.086-0.143,0.259v6.631c0,0.173,0,0.259,0.143,0.259c0.314,0,3.637,0,4.208-0.057
        c0.603-0.058,0.973-0.086,1.233-0.345c0.171-0.172,0.285-0.315,0.371-0.315c0.085,0,0.143,0.057,0.143,0.2
        c0,0.145-0.143,0.546-0.2,1.35c-0.057,0.487-0.114,1.406-0.114,1.579c0,0.2-0.057,0.458-0.229,0.458
        c-0.113,0-0.174-0.085-0.174-0.229c0-0.229,0-0.488-0.114-0.804c-0.086-0.344-0.313-0.631-1.287-0.746
        c-0.688-0.086-3.38-0.115-3.808-0.115c-0.144,0-0.172,0.085-0.172,0.172v2.039c0,0.832-0.028,3.674,0,4.162
        c0.058,1.636,0.514,1.953,3.006,1.953c0.659,0,1.861,0,2.521-0.258c0.656-0.287,1.002-0.718,1.145-1.695
        c0.058-0.287,0.114-0.373,0.257-0.373s0.172,0.202,0.172,0.373c0,0.173-0.2,1.837-0.343,2.354
        c-0.171,0.633-0.432,0.633-1.404,0.633c-1.89,0-3.349-0.059-4.379-0.087c-1.062-0.058-1.719-0.058-2.093-0.058
        c-0.057,0-0.542,0-1.087,0.029c-0.485,0.028-1.06,0.057-1.459,0.057c-0.26,0-0.402-0.057-0.402-0.2
        c0-0.087,0.057-0.201,0.199-0.201c0.231,0,0.546-0.087,0.773-0.115c0.488-0.086,0.546-0.574,0.66-1.292
        c0.143-1.004,0.143-2.928,0.143-5.282V0.452z" />
                                    <path fill="#EE2932" d="M204.863,11.505c-0.346-0.173-0.374-0.259-0.374-0.918c0-1.207,0.114-2.183,0.146-2.584
        c0-0.259,0.058-0.403,0.2-0.403s0.229,0.085,0.229,0.287c0,0.201,0,0.545,0.085,0.891c0.403,1.779,2.293,2.412,3.979,2.412
        c2.492,0,3.782-1.408,3.782-3.246c0-1.75-0.944-2.583-3.18-4.248l-1.145-0.862c-2.721-2.039-3.608-3.531-3.608-5.225
        c0-2.871,2.261-4.593,5.583-4.593c1.002,0,2.004,0.144,2.606,0.287c0.485,0.115,0.688,0.115,0.888,0.115
        c0.2,0,0.257,0.028,0.257,0.173c0,0.114-0.114,0.918-0.114,2.583c0,0.374-0.028,0.545-0.199,0.545s-0.2-0.115-0.231-0.315
        c-0.028-0.287-0.229-0.947-0.371-1.206c-0.171-0.287-1.002-1.206-3.263-1.206c-1.832,0-3.352,0.918-3.352,2.641
        c0,1.55,0.774,2.439,3.263,4.134l0.717,0.488c3.066,2.096,4.125,3.79,4.125,5.884c0,1.437-0.545,2.987-2.35,4.164
        c-1.059,0.689-2.635,0.862-4.008,0.862C207.353,12.166,205.894,11.993,204.863,11.505z" />
                                </g>
                                <path fill="#1C62AF" d="M23.479-25.491c2.52-0.834,5.188-1.194,7.838-1.161c-2.758,0.194-5.523,0.651-8.076,1.751
    c-5.276,2.171-9.641,6.453-11.91,11.692C9.098-8.129,8.874-2.199,10.733,3.035c1.781,5.132,5.521,9.544,10.285,12.153
    c5.651,3.158,12.704,3.631,18.732,1.281c4.527-1.739,8.444-5.006,10.98-9.136c2.074-3.369,3.255-7.307,3.273-11.267
    C54.143-3.296,54.05-2.641,54.035-2c-0.262,5.406-2.528,10.679-6.243,14.622c-4.291,4.632-10.541,7.406-16.864,7.374
    c-5.334,0.104-10.663-1.775-14.805-5.128C11.654,11.3,8.578,6.035,7.71,0.38c-0.927-5.697,0.344-11.726,3.552-16.535
    C14.125-20.527,18.507-23.879,23.479-25.491" />
                                <path fill="#1C62AF" d="M11.994-4.072c0.067-3.299,0.638-6.572,1.495-9.752c0.027,0.982,0.104,1.962-0.014,2.938
    C12.993-5.419,14.116,0.305,17.201,4.9c0.739,1.097,1.549,2.161,2.556,3.026c-1.679-2.443-2.866-5.192-3.678-8.037
    c-0.194-0.695-0.407-1.393-0.487-2.11c1.962,5.37,5.771,10.115,10.823,12.872c-2.064-2.204-4.062-4.472-5.752-6.976
    c-1.635-2.425-3.114-5.052-3.614-7.976c2.403,3.562,6.034,6.227,10.071,7.649c2.614,1.22,4.76,3.589,5.467,6.41
    c0.542,2.112,0.256,4.342-0.428,6.389c-0.125,0.329-0.196,0.695-0.41,0.987c-4.841-0.414-9.667-2.142-13.393-5.317
    c-1.926-1.65-3.493-3.729-4.537-6.046C12.421,2.698,11.921-0.717,11.994-4.072" />
                                <path fill="#EE2932" d="M50.375-7.4c0.152-2.142-0.328-4.276-0.075-6.415c0.829,3.344,1.489,6.758,1.456,10.214
    c0.056,3.59-0.624,7.238-2.328,10.417c-1.331,2.503-3.3,4.642-5.626,6.25c-3.377,2.324-7.39,3.616-11.448,4.064
    c0.751-2.01,1.242-4.181,0.939-6.333c-0.143-1.205-0.567-2.36-1.134-3.44c1.229-1.939,3.065-3.566,5.262-4.306
    c3.723-1.461,7.048-4.013,9.284-7.347c-0.4,2.463-1.552,4.724-2.851,6.825c-1.852,2.945-4.112,5.596-6.5,8.108
    c4.359-2.367,7.819-6.239,9.911-10.723c0.347-0.69,0.611-1.423,0.926-2.135c-0.72,3.606-1.94,7.146-3.957,10.247
    C48.239,3.969,50.201-1.779,50.375-7.4" />
                                <path fill="#EE2932" d="M30.05-5.554c0.971-0.287,2.073-0.153,2.922,0.41c0.957,0.591,1.578,1.684,1.609,2.807
    c0.05,1.449-0.636,2.888-1.747,3.811c-0.711,0.609-1.743,0.854-2.633,0.521c-1.816-0.754-2.901-2.9-2.605-4.813
    C27.803-4.098,28.81-5.192,30.05-5.554" />
                            </svg>
                        </a>
                    </div>
                    <!-- #logo -->
                    <nav lang="en" class="menu_container">
                        <ul id="menu" class="menu">
                            <!--    new menu -->
                         <!-- <li id="menu-item-1257" class="menu-item-type-products menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1257 clr4"><a href="https://us.fullscript.com/welcome/aspcares" target="_blank"><span class="clr4">SHOP SUPPLEMENT</span></a>
                               
                            </li> -->



                        <!--  new menu end -->
                                    <!-- <li id="menu-item-1257" class="menu-item-type-products menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1257"><a href="#"><span>ABOUT</span></a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2883" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883 n1"><a href="/accreditations/"><span>Accreditations</span> </a></li> -->
                                 <!--    <li id="menu-item-2884" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884 n1"><a href="#"><span>History</span></a></li>
                                    <li id="menu-item-2885" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2885 n1"><a href="#"><span>Leadership</span></a></li> -->
                              
                                <!-- </ul>
                            </li> -->
                               
                            <li id="menu-item-1259" class="menu-item-type-products menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1257"><a href="#"><span>LOCATIONS</span></a>
                                <ul class="sub-menu n1">
                                 <!--    <li id="menu-item-2883" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883">
                                        <a><span>Florida</span></a>
                                        <ul class="sub-menu-inner">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/orlando/"><span>Orlando, FL</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884"><a href="/location/miami/"><span>Miami, FL</span></a></li>
                                        </ul>
                                    </li> -->
                                 <!--    <li id="menu-item-2884" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884">
                                        <a href="#"><span>Maryland</span></a>
                                        <ul class="sub-menu-inner">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/columbia/"><span>Columbia, MD</span></a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li id="menu-item-2885" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2885">
                                        <a href="#"><span>Michigan</span></a>
                                        <ul class="sub-menu-inner">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/clawson/"><span>Clawson, MI</span></a></li>
                                        </ul>
                                    </li> -->
        
                                    <li id="menu-item-2886" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2886">
                                        <a href="#"><span>Nevada</span></a>
                                        <ul class="sub-menu-inner">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/lasvegas/"><span>Las Vegas, NV</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/lasvegas-mlk/"><span>Las Vegas, MLK, NV</span></a></li>
                                        </ul>
                                    </li>
                                    <!-- <li id="menu-item-2887" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2887">
                                        <a href="#"><span>New Jersey</span></a>
                                        <ul class="sub-menu-inner">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/livingston/"><span>Livingston, NJ</span></a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li id="menu-item-2888" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2888">
                                        <a href="#"><span>New Mexico</span></a>
                                        <ul class="sub-menu-inner"> -->
                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/albuquerque/"><span>Albuquerque, NM</span></a></li> -->
                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/lascruces/"><span>Las Cruces, NM</span></a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li id="menu-item-3168" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-3168">
                                        <a href="#"><span>New York</span></a>
                                        <ul class="sub-menu-inner">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/astoria/"><span>Astoria, NY</span></a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li id="menu-item-2883" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883">
                                        <a href="#"><span>Oklahoma</span></a>
                                        <ul class="sub-menu-inner">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/oklahoma/"><span>Oklahoma City, OK</span></a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li id="menu-item-2884" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884">
                                        <a href="#"><span>Tennessee</span></a>
                                        <ul class="sub-menu-inner">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/dickson/"><span>Dickson, TN</span></a></li>
                                        </ul>
                                    </li> -->
                                    <li id="menu-item-2889" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2885">
                                        <a href="#"><span>Texas</span></a>
                                        <ul class="sub-menu-inner">
                                       <!--      <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/austin/"><span>Austin, TX</span></a></li> -->
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884"><a href="/location/cedar-park/"><span>Austin-Cedar Park, TX</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884"><a href="/location/corpuschristi/"><span>Corpus Christi, TX</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884"><a href="/location/dallas/"><span>Dallas, TX</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/el-Paso/"><span>El Paso, TX</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/weslaco/"><span>Weslaco, TX</span></a></li>
                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884"><a href="/location/farmers/"><span>Farmers Branch, TX</span></a></li> -->
                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/harlingen/"><span>Harlingen, TX</span></a></li> -->
                                         <!--    <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/houston/"><span>Houston, TX</span></a></li>

                                             <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/houston-bellfort/"><span>Houston - Bellfort</span></a></li>
 -->
                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884"><a href="/location/lancaster/"><span>Lancaster, TX</span></a></li> -->
                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/macallen/"><span>McAllen, TX</span></a></li> -->
                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884"><a href="/location/martin-luther-king/"><span>Martin Luther King, TX</span></a></li> -->
                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/sanantonio/"><span>San Antonio, TX</span></a></li> -->
                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884"><a href="/location/sa-cinnamon-creek/"><span>SA Grayson</span></a></li> -->
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884"><a href="/location/sa-cinnamon-creek/"><span>San Antonion, TX</span></a></li>
                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/503bfacility/"><span>503B Facility SA, TX</span></a></li> -->
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884"><a href="/location/tyler/"><span>Tyler, TX</span></a></li>
                                        </ul>

                                    </li>
                                    <li id="menu-item-2886" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2886">
                                        <a href="#"><span>Maryland</span></a>
                                        <ul class="sub-menu-inner">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/location/maryland/"><span>Columbia</span></a></li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                             <li id="menu-item-1257" class="menu-item-type-products menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1257"><a href="#"><span>SPECIALTIES</span></a>
                                <ul class="sub-menu n2">
        <li id="menu-item-2883" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883"><a href="/speciality/addiction-management/"><span>Addiction Management</span></a></li>
       
    <li id="menu-item-2889" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2889"><a href="/speciality/infusion-therapy/"><span>Infusion Therapy</span></a></li>  

     



  <li id="menu-item-2891" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2891"><a href="/speciality/rheumatology/"><span>Rheumatology</span></a></li>



   <li id="menu-item-2884" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884"><a href="/speciality/cardiovascular-disease/"><span>Cardiovascular Disease</span></a></li>

                 
 

       <li id="menu-item-2888" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2888"><a href="/speciality/multiple-sclerosis/"><span>Multiple Sclerosis</span></a></li>

  <li id="menu-item-2889" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2889"><a href="/speciality/RSV/"><span>RSV</span></a></li>

  

 <li id="menu-item-2885" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2885"><a href="/speciality/gastroenterology/"><span>Gastroenterology</span></a></li>
 

<li id="menu-item-2890" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2890"><a href="/speciality/oncology/"><span>Oncology</span></a></li>
            



 <li id="menu-item-2890" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2890"><a href="/speciality/transplant/"><span>Transplant</span></a></li>


                              <li id="menu-item-2889" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2889"><a href="/speciality/hemophilia/"><span>Hemophilia</span></a></li>




  <li id="menu-item-2890" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2890"><a href="/speciality/ophthalmology/"><span>Ophthalmology</span></a></li>


<li id="menu-item-2889" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2889"><a href="/speciality/urology/"><span>Urology</span></a></li>



 <li id="menu-item-2886" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2886"><a href="/speciality/hepatitis/"><span>Hepatitis</span></a></li>
                                  

 
 <li id="menu-item-3168" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-3168"><a href="/speciality/pain-management/"><span>Pain Management</span></a></li>

 <li id="menu-item-2890" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2890"><a href="/speciality/wound-care/"><span>Wound Care</span></a></li>
 



<li id="menu-item-2889" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2889"><a href="/speciality/hiv-aids/"><span>HIV / AIDS</span></a></li>

                               

 <li id="menu-item-2887" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2887"><a href="/speciality/prep/"><span>PrEP</span></a></li>  
 <!-- <li id="menu-item-2887" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2887"><a href="/speciality/hiv-prevention-medication/"><span>Hiv Prevention Medication</span></a></li>
 <li id="menu-item-2887" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2887"><a href="/speciality/weightloss-diabetes-medications/"><span>Weightloss Diabetes Medications</span></a></li>   -->
   

                                   
                                    
                                </ul>
                            </li>


                            <li id="menu-item-1257" class="menu-item-type-products menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1257"><a href="#"><span>INJURED PATIENTS</span></a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2883" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883 n1"><a href="/worker-comp/"><span>Workers Comp</span> </a></li>
                                    <li id="menu-item-2884" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884 n1"><a href="/lop/"><span>LOP</span></a></li>
                                 
                                </ul>
                            </li>
                                <!-- <li id="menu-item-1257" class="menu-item-type-products menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1257"><a href="#"><span>503B</span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-2883" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883 n1"><a href="http://503bfacility.com/" target="_blank"><span>503B Facility</span> </a></li>
                                        <li id="menu-item-2883" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883 n1" target="_blank"><a href="http://503bfacility.com/register/" target="_blank"><span>Register</span> </a></li>
                                        <li id="menu-item-2884" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884 n1" target="_blank"><a href="http://503bfacility.com/order-now/" target="_blank"><span>View Catalog</span></a></li>
                                     
                                          <li id="menu-item-2884" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884 n1"><a href="/location/503bfacility/"><span>Contact us</span></a></li>
                                     
                                    </ul>
                                </li> -->
                                   <li id="menu-item-1257" class="menu-item-type-products menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1257"><a href="#"><span>SERVICES</span></a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2883" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883 n1"><a href="/340B/"><span>340B</span></a></li>
                                    <li id="menu-item-2884" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884 n1 scrolltoid"><a data-id="paa1" href="/PAA/index.php#paa1"><span>Prior Authorization Assistance </span></a></li>
                                    <li id="menu-item-2885" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2885 n1 scrolltoid"><a data-id="fine-assist" href="/PAA/index.php#fine-assist"><span>Financial Assistance </span></a></li>
                                    <li id="menu-item-2886" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2886 n1 scrolltoid"><a data-id="program" href="/PAA/index.php#program"><span>Patient Assistance Program (PAP)</span></a></li>
                                   
                                </ul>
                            </li>
                            <li id="menu-item-1257" class="menu-item-type-products menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1257"><a href="#"><span>JOIN OUR TEAM</span></a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2883" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2883 n1"><a href="/career/"><span>Careers</span></a></li>
                                    <li id="menu-item-2884" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2884 n1"><a href="/team/culture/"><span>Company Culture</span></a></li>
                                </ul>
                            </li>


                         
                        </ul>
                    </nav>

                    <!-- .lang_container -->
                   
                </div>
            </div>
            <div class="row" id="corona" style="background-color:#0d4786"><div class="column" style="padding:10px;float:none;margin-bottom: 0px;text-align: center;"><a target="_blank" href="https://aspcaresathomecovid.azova.com" style="font-size:15px;color:#fff;text-decoration:underline;font-weight: 700"><i class="fa fa-exclamation-triangle" style="padding:0px 10px;"></i>COVID-19 : GET AT HOME COVID-19 TESTING&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a></div></div>
        </header>
         
<div class="popup" id="pop1" data-popup="popup-1">
                        <div class="popup-inner">
                            <div class="box">
                                <div class="form-img"> <img src="https://www.aspcares.com/assets/images/scientist.jpg" alt="pharmacist" class="f1"></div>
                                <div class="pd">
                                    <div class="academy_form_wrap">
                                    <h3 style="text-align:center;">ASK A PHARMACIST</h3>
                                    <br>
                                        <div role="form" class="wpcf7" id="wpcf7-f305-p32-o1" lang="ko-KR" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form method="post" id="askform" class="wpcf7-form" >
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="305">
                                                    <input type="hidden" name="_wpcf7_version" value="4.9">
                                                    <input type="hidden" name="_wpcf7_locale" value="ko_KR">
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f305-p32-o1">
                                                    <input type="hidden" name="_wpcf7_container_post" value="32">
                                                </div>
                                                <div id="contact_form" class="contact_form">
                                                    <div class="contact_form_row">
                                                        <div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input required="" type="text" name="firstname" placeholder="First Name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="firstname" aria-required="true" ></span></div>
                                                        <div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input required="" type="text" name="lastname" placeholder="Last Name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="lastname" aria-required="true"></span></div>
<p></p>
                                                    </div>
                                                    <div class="contact_form_row">
                                                        <div class="contact_form_column" style="width: 100%;">
<span class="wpcf7-form-control-wrap your-mail">
                                                <input required="" type="email" name="askemail" placeholder="Email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" id="askemail" aria-invalid="false"></span></div>
<p></p>
                                                    </div>
                                                    <div class="contact_form_row contact_area">
                                                        <span class="wpcf7-form-control-wrap your-message"><textarea name="askmsg" cols="40" rows="10" placeholder="Description" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="askmsg" aria-required="true" aria-invalid="false"></textarea></span>
                                                    </div>
                                                    <p> <span class="wpcf7-form-control-wrap honeypot-383-wrap" style="display:none !important; visibility:hidden !important;"><input class="wpcf7-form-control wpcf7-text" type="text" name="honeypot-383" value="" size="40" tabindex="-1"></span></p>
                                                    
                                                    <div class="contact_submit">
                                                        <font style="vertical-align: inherit;">
<font style="vertical-align: inherit;">
<font style="vertical-align: inherit;">
<font style="vertical-align: inherit;">
<input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit jt_btn jt_btn_primary" style="float: left;" id="ask_pharmacist">
<div id="asksuccess" class="sucmesg" style="color: green;display: none;">Inquiry sent successfully</div>
</font>
</font>
</font>
</font><span class="ajax-loader"></span>
                                                    </div>
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a data-popup-close="popup-1" href="#"></a></p>
                            <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
                        </div>
                    </div>
                    <!-- Second Rifiil popup -->
                    <div class="popup" id="pop2" data-popup="popup-2">
                        <div class="popup-inner">
                            <div class="box">
                                <div class="form-img"><img src="https://www.aspcares.com/assets/images/clinical01.jpg" alt="clinic" class="f2"></div>
                                <div class="pd">
                                    <div class="academy_form_wrap">
                                        <div role="form" class="wpcf7" id="wpcf7-f2786-p32-o2" lang="ko-KR" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <h3 style="text-align:center;text-transform: uppercase;">Request A Refill</h3>
                                    <br><br>
                                            <form id="locationform" method="post" class="wpcf7-form">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="2786">
                                                    <input type="hidden" name="_wpcf7_version" value="4.9">
                                                    <input type="hidden" name="_wpcf7_locale" value="ko_KR">
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2786-p32-o2">
                                                    <input type="hidden" name="_wpcf7_container_post" value="32">
                                                </div>
                                                <div id="contact_form" class="contact_form">
                                                    <div class="contact_form_row">
                                                        <div class="contact_form_column">
                                                        <!-- <label for="your_mail" class="contact_form_label">Phone number</label> -->
                                                        <span class="wpcf7-form-control-wrap your-name"><input style="font-size: 17px;" required="" type="tel" maxlength="15" pattern="\d*"  name="locationnum" placeholder="(XXX) XXX-XXXX" size="40" class="text-box wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="locationnum" aria-required="true" ></span></div>
                                                        

                                                        <div class="contact_form_column">
                                                        <!-- <label for="your_mail" class="contact_form_label">Email</label> -->
                                                        <span class="wpcf7-form-control-wrap your-name"><input required="" type="email" placeholder="Email" name="locationemail" size="40" class="text-box wpcf7-form-control wpcf7-text email-field" id="locationemail" aria-invalid="false"></span></div>
                                                        <p></p>
                                                    </div>

                                                    <div class="contact_form_row">
                                                        <!-- <div class="contact_form_column">
                                                        <label for="your_name" class="contact_form_label">&nbsp;</label>
                                                        <span class="wpcf7-form-control-wrap your-name" ><input type="text"  name="rx1" size="100" required="" placeholder="RX #" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="rx1" aria-required="true"></span></div>  

                                                        <div class="contact_form_column">
                                                        <label for="your_name" class="contact_form_label">&nbsp;</label>
                                                        <span class="wpcf7-form-control-wrap your-name" ><input type="text"  name="rx1" size="100" required="" placeholder="RX #" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="rx1" aria-required="true"></span></div>  


                                                         <div class="multi-field-wrapper">
                                                                  <div class="multi-fields">
                                                                    <div class="multi-field">
                                                                      <div class="contact_form_column">
                                                        <label for="your_name" class="contact_form_label">&nbsp;</label>
                                                        <span class="wpcf7-form-control-wrap your-name" ><input type="text"  name="rx1" size="100" required="" placeholder="RX #" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="rx1" aria-required="true"></span></div>  
                                                                      <button type="button" class="remove-field">X</button>
                                                                    </div>
                                                                  </div>
                                                                <button type="button" class="add-field">Add Rx Number</button>
                                                              </div>
                                                              


                                                              

                                                               <style type="text/css"> 
                                                            .add-field{
                                                                float: left;
                                                                margin-top: 96px;
                                                                margin-left: -400px;
                                                                background-color: #4CAF50;
                                                                border: none;
                                                                  color: white;
                                                                  padding: 15px 32px;
                                                                  text-align: center;
                                                                  text-decoration: none;
                                                                  display: block;
                                                                  font-size: 16px;

                                                            }
                                                            .remove-field{
                                                                float: left;
                                                                background-color: #000; 
                                                                border: none;
                                                                border-radius: 50%;
                                                                  color: white;
                                                                  margin-top: 32px;
                                                                  padding: 5px 5px;
                                                                  text-align: center;
                                                                  text-decoration: none;
                                                                  display: inline-block;
                                                                  font-size: 16px;
                                                                
                                                            }
                                                            #rx1{
                                                                width: 100%;
                                                                display: block;
                                                                float: right;
                                                            }
                                                        </style>
                                                    </div>
                                                    <div class="contact_form_row">
                                                        <script type="text/javascript">
                                                            $('.multi-field-wrapper').each(function() {
                                                                var $wrapper = $('.multi-fields', this);
                                                                $(".add-field", $(this)).click(function(e) {
                                                                    $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('Rx'+1).attr("placeholder",'abc').focus();
                                                                });
                                                                $('.multi-field .remove-field', $wrapper).click(function() {
                                                                    if ($('.multi-field', $wrapper).length > 1)
                                                                        $(this).parent('.multi-field').remove();
                                                                });
                                                            });
                                                        </script> -->  
        <div class="demo">
            <div class="a">
              <input type="text"  name="rx1[]" size="50" required="" placeholder="Input RX Number" class="text-area full wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="rx1" aria-required="true" style="margin-right: 8px;" >
            </div>
            <button id="btnAdd" type="button"/><i class="fa fa-plus-circle" style="margin-right: 5px;" aria-hidden="true"></i>Add Rx Number</button>
        </div>
         
                                                                              
                                                        
                                                        <!-- <div class="contact_form_column">
                                                        <label for="your_name" class="contact_form_label">&nbsp;</label>
                                                        <span class="wpcf7-form-control-wrap your-name" ><input type="text"  name="rx1" size="40" required="" placeholder="RX #" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="rx1" aria-required="true" ></span></div>           -->                                              
                                                        <div class="contact_form_column">
                                                        <!-- <label for="your_mail" class="contact_form_label">Locations</label> -->
                                                        <!-- <select name="selectlocation" required id="selectlocation" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required">
                                                        <option value="">Select Location</option>    
                                                        <option value="503B Facility">503B Facility</option>
                                                        <option value="Albuquerque, NM">Albuquerque, NM</option>
                                                        <option value="Astoria, NY">Astoria, NY</option>   
                                                        <option value="Austin, TX">Austin, TX</option>
                                                        <option value="Clawson, MI">Clawson, MI</option>
                                                        <option value="Columbia, MD">Columbia, MD</option>
                                                        <option value="Corpus Christi, TX">Corpus Christi, TX</option>
                                                        <option value="Dickson, TN">Dickson, TN</option>

                                                        <option  value="El Paso, TX">El Paso, TX</option>
                                                        <option value="Farmers Branch, TX">Farmers Branch, TX</option>
                                                        <option value="Lancaster, TX">Lancaster, TX</option>
                                                        <option value="Houston, TX">Houston, TX</option>

                                                        
                                                        <option value="Las Cruces, NM">Las Cruces, NM</option>
                                                        <option value="Las Vegas, NV">Las Vegas, NV</option>
                                                        <option value="Livingston, NJ">Livingston, NJ</option>
                                                        <option value="McAllen, TX">McAllen, TX</option>
                                                        <option value="Miami, FL">Miami, FL</option>
                                                        <option value="Oklahoma City, OK">Oklahoma City, OK</option>
                                                        <option value="Orlando, FL">Orlando, FL</option>

                                                        <option value="Pasadena, TX">Pasadena, TX</option>

                                                        <option value="San Antonio, TX">San Antonio, TX</option>
                                                         <option value="San Antonio, TX">San Antonio, TX </option> -->
                                                        <!-- <option value="SA, Stone Oak">San Antonio, Stone Oak, TX</option> -->
                                                        <!-- <option value="Tyler, TX">Tyler, TX</option> -->

                                                        <!-- </select> --> 
                                                        </div>
                                                        <p></p>
                                                                                                </div>


                                                        <!-- new code -->
                                                        <div class="contact_form_column">
                                                        <label for="your_mail" class="contact_form_label">Locations</label>
                                                        <select name="selectlocation" required="" id="selectlocation" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required">
                                                        <option value="">Select Location</option>    
                                                        <!-- <option value="503B Facility">503B Facility</option> -->
                                                        <!-- <option value="Albuquerque, NM">Albuquerque, NM</option> -->
                                                        <option value="Astoria, NY">Astoria, NY</option>   
                                                    <!--     <option value="Austin, TX">Austin, TX</option> -->
                                                        <!-- <option value="Clawson, MI">Clawson, MI</option> -->
                                                       <!--  <option value="Columbia, MD">Columbia, MD</option> -->
                                                        <option value="Cedar Park, TX">Austin-Cedar Park, TX</option>
                                                        <option value="Corpus Christi, TX">Corpus Christi, TX</option>
                                                        <!-- <option value="Dickson, TN">Dickson, TN</option> -->

                                                        <option value="el-paso">El Paso</option>
                                                        <option value="weslaco">Weslaco</option>
                                                        <option value="Maryland">Maryland</option>
                                                        <!-- <option value="Farmers Branch, TX">Farmers Branch, TX</option> -->
                                                        <option value="Dallas, TX">Dallas, TX</option>
<!--                                                         <option value="Houston, TX">Houston, TX</option>
 -->
                                                        
                                                        <option value="Las Cruces, NM">Las Cruces, NM</option>
                                                        <option value="Las Vegas, NV">Las Vegas, NV</option>
                                                        <option value="Las Vegas, MLK, NV">Las Vegas, MLK, NV</option>
                                                        <!-- <option value="Livingston, NJ">Livingston, NJ</option> -->
                                                        <!-- <option value="McAllen, TX">McAllen, TX</option> -->
                                                        <!--<option value="Miami, FL">Miami, FL</option>-->   
                                                        <!-- <option value="Oklahoma City, OK">Oklahoma City, OK</option> -->
                                                        <!-- <option value="Orlando, FL">Orlando, FL</option> -->

                                                        <option value="Pasadena, TX">Pasadena, TX</option>

                                                        <option value="San Antonio, TX">San Antonio, TX</option>
                                                        <!-- <option value="San Antonio, TX">San Antonio, TX </option> -->
                                                        <option value="SA, Stone Oak">San Antonio, Stone Oak, TX</option>
                                                        <option value="Tyler, TX">Tyler, TX</option>

                                                        </select>
                                                        </div>
 

                                                        <div class="contact_agree">
                                                            <label class="contact_agree_label" for="agree">How would you like us to contact you?
                                                        <br>
                                                        <br><span class="wpcf7-form-control-wrap agree"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required jt_icheck" id="agree"><span class="wpcf7-list-item first last"><div class="icheckbox_minimal" style="position: relative;"><input type="checkbox" name="agree1" value="Request a Call Back " id="agree1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="wpcf7-list-item-label"></span></span>
                                                        </span>
                                                        </span><span>
                                                        <a class="contact_agree_anchor" href=""><b>Request a Call Back &nbsp;&nbsp;&nbsp;</b></a></span></label>
                                                        <label class="contact_agree_label" for="agree"><span class="wpcf7-form-control-wrap agree"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required jt_icheck" id="agree"><span class="wpcf7-list-item first last"><div class="icheckbox_minimal" style="position: relative;"><input type="checkbox" name="agree2" id="agree2" value="Text me" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="wpcf7-list-item-label"></span></span>
                                                        </span>
                                                        </span><span><a class="contact_agree_anchor" href=""><b>Text Me &nbsp;&nbsp;&nbsp;</b></a></span></label>
                                                        <label class="contact_agree_label" for="agree"><span class="wpcf7-form-control-wrap agree"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required jt_icheck" id="agree">
                                                        <span class="wpcf7-list-item first last"><div class="icheckbox_minimal" style="position: relative;"><input type="checkbox" name="agree3" id="agree3" value="Email me" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="wpcf7-list-item-label"></span></span>
                                                        </span>
                                                        </span><span><a class="contact_agree_anchor" href=""><b>Email Me</b></a></span></label>
                                                    </div>
                                                    <p> <span class="wpcf7-form-control-wrap honeypot-383-wrap" style="display:none !important; visibility:hidden !important;"><input class="wpcf7-form-control wpcf7-text" type="text" name="honeypot-383" value="" size="40" tabindex="-1"></span></p>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="contact_submit">
                                                        <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit jt_btn jt_btn_primary" style="float: left;">
                                                        <div id="asksuccess2" class="sucmesg" style="display: none;">Inquiry sent successfully</div>
                                                    </div>
                                                    <!-- <div class="contact_submit" style="text-align: left">
                                                        <div id="asksuccess2" style="color: green;display: none;">Inquiry sent successfully</div>
                                                    </div> -->
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a data-popup-close="popup-2" href="#"></a></p>
                            <a class="popup-close" data-popup-close="popup-2" href="#">x</a>
                        </div>
                    </div>
                    <!-- Third Rifiil popup -->
                    <div id="popup-third" class="popup" data-popup="popup-3">
                        <div class="popup-inner">
                            <div class="box">
                                <div class="form-img"><img src="https://www.aspcares.com/assets/images/clinical01.jpg" alt="clinic" class="f2"></div>
                                <div class="pd">
                                    <div class="academy_form_wrap">
                                        <div role="form" class="wpcf7" id="wpcf7-f2786-p32-o2" lang="ko-KR" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <div class="contact_form_row">

                                                <div class="contact_form_column">
                                                    <label for="your_mail" class="contact_form_label">Locations</label>
                                                    <select class="wpcf7-text" onchange="selectPDF(this);">
                                                        <option value="pdf/QUESTION 3.pdf">El Paso, TX </option>
                                                        <option value="pdf/QUESTION 4.pdf">San Antonio, TX</option>
                                                       <!--  <option value="pdf/QUESTION 5.pdf">Miami, FL</option> -->
                                                        <option value="pdf/QUESTION 6.pdf">Tyler, TX</option>
                                                        <option value="pdf/QUESTION 7.pdf">San Antonio, TX </option>

</select>
                                                </div>
                                                <div id="pdflink" class="contact_form_column">

                                                </div>
<p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a data-popup-close="popup-3" href="#"></a></p>
                            <a class="popup-close" data-popup-close="popup-3" href="#">x</a>
                        </div>
                    </div>
                    <!-- Fourth Rifill Popup -->
                    <div class="popup" data-popup="popup-4">
                        <div class="popup-inner">
                            <div class="box">
                                <div class="form-img"><img src="https://www.aspcares.com/assets/images/clinical01.jpg" alt="clinic" class="f2"></div>
                                <div class="pd">
                                    <div class="academy_form_wrap">
                                        <div role="form" class="wpcf7" id="wpcf7-f2786-p32-o2" lang="ko-KR" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form id="lopform" method="post" class="wpcf7-form">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="2786">
                                                    <input type="hidden" name="_wpcf7_version" value="4.9">
                                                    <input type="hidden" name="_wpcf7_locale" value="ko_KR">
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2786-p32-o2">
                                                    <input type="hidden" name="_wpcf7_container_post" value="32">
                                                </div>
                                                <div id="contact_form" class="contact_form">
                                                    <div class="contact_form_row">
                                                        <div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input type="text" required="" name="lopname" placeholder="Name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="lopname" aria-required="true" ></span></div>
                                                        <div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input type="text" required="" id="lopphone" pattern="^(0|[1-9][0-9]*)$" placeholder="Phone" name="lopphone" size="40" class="wpcf7-form-control wpcf7-text" id="locationemail" aria-invalid="false"></span></div>
<p></p>
                                                    </div>
                                                    <div class="contact_form_row">
                                                        <div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input type="email" required="" name="lopemail" placeholder="Email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="lopemail" aria-required="true" ></span></div>

                                                    </div>

                                                   <div class="contact_form_row contact_area">
                                                        <span class="wpcf7-form-control-wrap your-message"><textarea name="lopadd" cols="40" rows="10" placeholder="Clinic address" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="lopadd" aria-required="true" aria-invalid="false"></textarea></span>
                                                    </div>
                                                    <p> <span class="wpcf7-form-control-wrap honeypot-383-wrap" style="display:none !important; visibility:hidden !important;"><input class="wpcf7-form-control wpcf7-text" type="text" name="honeypot-383" value="" size="40" tabindex="-1"></span></p>

                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="contact_submit">
                                                        <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit jt_btn jt_btn_primary" style="float: left;">

                                                    </div>
                                                    <div class="contact_submit" style="text-align: left">
                                                        <div id="lopsuccess1" style="color: green;display: none;">Inquiry sent successfully</div>
                                                    </div>
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a data-popup-close="popup-4" href="#"></a></p>
                            <a class="popup-close" data-popup-close="popup-4" href="#">x</a>
                        </div>
                    </div>
                    <div class="popup" data-popup="popup-5">
                        <div class="popup-inner">
                            <div class="box">
                                <div class="form-img"><img src="https://www.aspcares.com/assets/images/clinical01.jpg" alt="clinic" class="f2"></div>
                                <div class="pd">
                                    <div class="academy_form_wrap">
                                        <div role="form" class="wpcf7" id="wpcf7-f2786-p32-o2" lang="ko-KR" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form id="lopbtnform1" method="post" class="wpcf7-form">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="2786">
                                                    <input type="hidden" name="_wpcf7_version" value="4.9">
                                                    <input type="hidden" name="_wpcf7_locale" value="ko_KR">
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2786-p32-o2">
                                                    <input type="hidden" name="_wpcf7_container_post" value="32">
                                                    
                                                </div>
                                                <div id="contact_form" class="contact_form">
                                                    <div class="contact_form_row">
                                                        <div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input type="text" required="" name="lopbtnname" placeholder="Name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="lopbtnname" aria-required="true" ></span></div>
<div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input type="email" required=""  name="lopbtnemail" placeholder="Email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="lopbtnemail" aria-required="true" ></span></div>

<p></p>
                                                    </div>
                                                    <div class="contact_form_row">
                                                        <div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input type="tel" required="" maxlength="15" pattern="\d*" placeholder="Phone" name="lopbtnphone" size="40" class="wpcf7-form-control wpcf7-text" id="lopbtnphone" aria-invalid="false"></span></div>
                                                    </div>


                                                   <div class="contact_form_row contact_area">
                                                        <span class="wpcf7-form-control-wrap your-message"><textarea name="lopbtnadd" cols="40" rows="10" placeholder="Please Type address" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="lopbtnadd" aria-required="true" aria-invalid="false"></textarea></span>
                                                    </div>
                                                    <p> <span class="wpcf7-form-control-wrap honeypot-383-wrap" style="display:none !important; visibility:hidden !important;"><input class="wpcf7-form-control wpcf7-text" type="text" name="honeypot-383" value="" size="40" tabindex="-1"></span></p>

                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="contact_submit">
                                                        <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit jt_btn jt_btn_primary" style="float: left;">
                                                        <div class="sucmesg" id="lopbtnsuccess1" style="color: green;display: none;">Inquiry sent successfully</div>
                                                    </div>
                                                    <!-- <div class="contact_submit" style="text-align: left">
                                                        <div id="lopbtnsuccess1" style="color: green;display: none;">Inquiry sent successfully</div>
                                                    </div> -->
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a data-popup-close="popup-5" href="#"></a></p>
                            <a class="popup-close" data-popup-close="popup-5" href="#">x</a>
                        </div>
                    </div>
                    <!-- Refill Popup 6 -->
                    <div class="popup" data-popup="popup-6">
                        <div class="popup-inner">
                            <div class="box">
                                <div class="form-img"><img src="https://www.aspcares.com/assets/images/clinical01.jpg" alt="clinic" class="f2"></div>
                                <div class="pd">
                                    <div class="academy_form_wrap">
                                        <div role="form" class="wpcf7" id="wpcf7-f2786-p32-o2" lang="ko-KR" dir="ltr">
                                        <!-- <h3 style="text-align:center;text-transform: uppercase;">Request a Worker Comp Representative</h3><br> -->
                                            <div class="screen-reader-response"></div>
                                            <form id="lopbtnform2" method="post" class="wpcf7-form">
                                               <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="2786">
                                                    <input type="hidden" name="_wpcf7_version" value="4.9">
                                                    <input type="hidden" name="_wpcf7_locale" value="ko_KR">
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2786-p32-o2">
                                                    <input type="hidden" name="_wpcf7_container_post" value="32">
                                                </div>
                                                <div id="contact_form" class="contact_form">
                                                    <div class="contact_form_row">
                                                        <div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input type="text" required="" name="lopbtnname2" placeholder="Name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="lopbtnname2" aria-required="true" ></span></div>
<div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input type="email" required="" name="lopbtnemail2" placeholder="Email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="lopbtnemail2" aria-required="true" ></span></div>

<p></p>
                                                    </div>
                                                    <div class="contact_form_row">
                                                        <div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input type="tel" required="" id="lopbtnphone2" placeholder="Phone" name="lopbtnphone2" maxlength="15" pattern="\d*" size="40" class="wpcf7-form-control wpcf7-text" id="lopbtnphone" aria-invalid="false"></span></div>
                                                    </div>


                                                   <div class="contact_form_row contact_area">
                                                        <span class="wpcf7-form-control-wrap your-message"><textarea name="lopbtnadd2" cols="40" rows="10" placeholder="Please Type Clinic address" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="lopbtnadd2" aria-required="true" aria-invalid="false"></textarea></span>
                                                    </div>
                                                    <p> <span class="wpcf7-form-control-wrap honeypot-383-wrap" style="display:none !important; visibility:hidden !important;"><input class="wpcf7-form-control wpcf7-text" type="text" name="honeypot-383" value="" size="40" tabindex="-1"></span></p>

                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="contact_submit wopopup">
                                                        <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit jt_btn jt_btn_primary" style="float: left;">
                                                        <div id="lopbtnsuccess2" class="sucmesg" style="color: green;display: none;">Inquiry sent successfully</div>
                                                    </div>
                                                    <!-- <div class="contact_submit wopopup" style="text-align: left">
                                                        <div id="lopbtnsuccess2" style="color: green;display: none;">Inquiry sent successfully</div>
                                                    </div> -->
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a data-popup-close="popup-6" href="#"></a></p>
                            <a class="popup-close" data-popup-close="popup-6" href="#">x</a>
                        </div>
                    </div>
                    <div class="popup" data-popup="popup-7">
                        <div class="popup-inner">
                            <div class="box">
                                <div class="form-img"><img src="https://www.aspcares.com/assets/images/clinical01.jpg" alt="clinic" class="f2"></div>
                                <div class="pd">
                                    <div class="academy_form_wrap">
                                        <div role="form" class="wpcf7" id="wpcf7-f2786-p32-o2" lang="ko-KR" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form id="lopbtnform3" method="post" class="wpcf7-form">
                                               <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="2786">
                                                    <input type="hidden" name="_wpcf7_version" value="4.9">
                                                    <input type="hidden" name="_wpcf7_locale" value="ko_KR">
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2786-p32-o2">
                                                    <input type="hidden" name="_wpcf7_container_post" value="32">
                                                </div>
                                                <div id="contact_form" class="contact_form">
                                                    <div class="contact_form_row">
                                                        <div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input type="text" required="" name="lopbtnname3" placeholder="Name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="lopbtnname3" aria-required="true" ></span></div>
<div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input type="email" required="" name="lopbtnemail3" placeholder="Email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="lopbtnemail3" aria-required="true" ></span></div>

<p></p>
                                                    </div>
                                                    <div class="contact_form_row">
                                                        <div class="contact_form_column">
<span class="wpcf7-form-control-wrap your-name"><input type="tel" required="" id="lopbtnphone3" maxlength="15" pattern="\d*" placeholder="Phone" name="lopbtnphone3" size="40" class="wpcf7-form-control wpcf7-text" id="lopbtnphone" aria-invalid="false"></span></div>
                                                    </div>


                                                   <div class="contact_form_row contact_area">
                                                        <span class="wpcf7-form-control-wrap your-message"><textarea name="lopbtnadd3" cols="40" rows="10" placeholder="Please Type Clinic address" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="lopbtnadd3" aria-required="true" aria-invalid="false"></textarea></span>
                                                    </div>
                                                    <p> <span class="wpcf7-form-control-wrap honeypot-383-wrap" style="display:none !important; visibility:hidden !important;"><input class="wpcf7-form-control wpcf7-text" type="text" name="honeypot-383" value="" size="40" tabindex="-1"></span></p>

                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="contact_submit">
                                                        <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit jt_btn jt_btn_primary" style="float: left;">
                                                        <div id="lopbtnsuccess3" class="sucmesg" style="color: green;display: none;">Inquiry sent successfully</div>
                                                    </div>
                                                    <!-- <div class="contact_submit" style="text-align: left">
                                                        <div id="lopbtnsuccess3" style="color: green;display: none;">Inquiry sent successfully</div>
                                                    </div> -->
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a data-popup-close="popup-7" href="#"></a></p>
                            <a class="popup-close" data-popup-close="popup-7" href="#">x</a>
                        </div>
                    </div>

<div class="popup" data-popup="popup-8">
                        <div class="popup-inner poplinks">
                            <div class="box">
                                <div class="form-img" style="padding-top: 10%;"><img src="https://www.aspcares.com/assets/images/logo-big.png" alt="logo" class="f2"></div>
                                <div class="pd poplinkpd">
                                    <div class="academy_form_wrap">
                                        <div role="form" class="wpcf7 divlink" id="wpcf7-f2786-p32-o2" lang="ko-KR" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <h3 style="text-align:center;">Refer a Patient</h3>
                                    <br>
                                            <div style="margin : 0 auto;" class="origin_content_text_wrap origin_grid_text">
                                                <div class="origin_grid_text_title poplinkpart">
                                                    <div class="min">
                                                        <a href="/pdf/Antipsychotic.pdf" target="_blank"><p>Antipsychotic</p></a>
                                                        <a href="/pdf/Cardiology.pdf" target="_blank"><p>Cardiology</p></a>
                                                        <a href="/pdf/Cystic Fibrosis.pdf" target="_blank"><p>Cystic Fibrosis</p></a>
                                                        <a href="/pdf/Derm_plano2.pdf" target="_blank"><p>Dermatology</p></a>
                                                        <a href="/pdf/Gastroenterology.pdf" target="_blank"><p>Gastroenterology</p></a>
                                                        <a href="/pdf/Generic Script-plano2 (2).pdf" target="_blank"><p>Generic Script</p></a>
                                                        <a href="/pdf/Growth Hormone.pdf" target="_blank"><p>Growth Hormone</p></a>
                                                        <a href="/pdf/Hemophilia and Bleeding.pdf" target="_blank"><p>Hemophilia and Bleeding</p></a>
                                                        <a href="/pdf/HepC.pdf" target="_blank"><p>Hepatitis C</p></a>
                                                        <a href="/pdf/hivaids.pdf" target="_blank"><p>HIV-AIDS</p></a>
                                                        <a href="/pdf/Hypercholesterolemia Script.pdf" target="_blank"><p>Hypercholesterolemia Script</p></a>
                                                        <a href="/pdf/lop plano2_.pdf" target="_blank"><p>LOP</p></a>
                                                        <a href="/pdf/Multiple Sclerosis.pdf" target="_blank"><p>Multiple Sclerosis</p></a>
                                                        
                                                    </div>
                                                </div>
                                                <div class="origin_grid_text_content poplinkpart">
                                                    <div class="min">
                                                    <a href="/pdf/Neurology.pdf" target="_blank"><p>Neurology</p></a>
                                                    <a href="/pdf/OncologyOral plano2.pdf" target="_blank"><p>Oncology Oral</p></a>
                                                    <a href="/pdf/OralAntibiotics.pdf" target="_blank"><p>Oral Antibiotics</p></a>
                                                    <a href="/pdf/Osteoarthritis.pdf" target="_blank"><p>Osteoarthritis</p></a>
                                                    <a href="/pdf/Osteoporosis.pdf" target="_blank"><p>Osteoporosis</p></a>
                                                    <a href="/pdf/Patient Demographics .pdf" target="_blank"><p>Patient Demographics </p></a>
                                                    <a href="/pdf/Rhumatology.pdf" target="_blank"><p>Rheumatology</p></a>
                                                    <a href="/pdf/SQIg.pdf" target="_blank"><p>SQIg Infusion</p></a>
                                                    <a href="/pdf/Tetrabenazine_FB2.pdf" target="_blank"><p>Tetrabenazine</p></a>
                                                    <a href="/pdf/Transplant.pdf" target="_blank"><p>Transplant</p></a>
                                                    <a href="/pdf/Urology Oral Medications.pdf" target="_blank"><p>Urology Oral Medications</p></a>
                                                    <a href="/pdf/WC - PIP Intake FB2.pdf" target="_blank"><p>WC - PIP Intake</p></a>
                                                    <a href="/pdf/Workers Comp_FB2.pdf" target="_blank"><p>Workers Comp</p></a>
                                                    <a href="/pdf/Blank Santyl Regranex.pdf" target="_blank"><p>Wound Care</p></a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a data-popup-close="popup-8" href="#"></a></p>
                            <a class="popup-close" data-popup-close="popup-8" href="#">x</a>
                        </div>
                    </div>
                    <div class="popup" data-popup="popup-9">
                        <div class="popup-inner">
                            <div class="box">
                                <div class="form-img"><img src="https://www.aspcares.com/assets/images/clinical01.jpg" alt="clinic" class="f2"></div>
                                <div class="pd">
                                    <div class="academy_form_wrap">
                                        <div role="form" class="wpcf7" id="wpcf7-f2786-p32-o2" lang="ko-KR" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form id="lopbtnform9" method="post" class="wpcf7-form">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="2786">
                                                    <input type="hidden" name="_wpcf7_version" value="4.9">
                                                    <input type="hidden" name="_wpcf7_locale" value="ko_KR">
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2786-p32-o2">
                                                    <input type="hidden" name="_wpcf7_container_post" value="32">
                                                    
                                                </div>
                                                <div id="contact_form" class="contact_form">
                                                    <div class="contact_form_row">
                                                        <div class="contact_form_column">
                                                            <span class="wpcf7-form-control-wrap your-name"><input type="text" required="" name="lopbtnname9" placeholder="Name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="lopbtnname9" aria-required="true" ></span></div>
                                                            <div class="contact_form_column">
                                                            <span class="wpcf7-form-control-wrap your-name"><input type="email" required=""  name="lopbtnemail9" placeholder="Email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="lopbtnemail9" aria-required="true" ></span></div>

                                                            <p></p>
                                                            </div>
                                                    <div class="contact_form_row">
                                                        <div class="contact_form_column">
                                                        <span class="wpcf7-form-control-wrap your-name"><input type="tel" required="" maxlength="15" pattern="\d*" id="lopbtnphone9" placeholder="Phone" name="lopbtnphone" size="40" class="wpcf7-form-control wpcf7-text" id="lopbtnphone" aria-invalid="false"></span></div>
                                                    </div>


                                                   <div class="contact_form_row contact_area">
                                                        <span class="wpcf7-form-control-wrap your-message"><textarea name="lopbtnadd9" cols="40" rows="10" placeholder="Please Type address" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="lopbtnadd9" aria-required="true" aria-invalid="false"></textarea></span>
                                                    </div>
                                                    <p> <span class="wpcf7-form-control-wrap honeypot-383-wrap" style="display:none !important; visibility:hidden !important;"><input class="wpcf7-form-control wpcf7-text" type="text" name="honeypot-383" value="" size="40" tabindex="-1"></span></p>

                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="contact_submit">
                                                        <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit jt_btn jt_btn_primary" style="float: left;">
                                                        <div id="lopbtnsuccess9" class="sucmesg" style="color: green;display: none;">Inquiry sent successfully</div>
                                                    </div>
                                                    <!-- <div class="contact_submit" style="text-align: left">
                                                        <div id="lopbtnsuccess9" style="color: green;display: none;">Inquiry sent successfully</div>
                                                    </div> -->
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a data-popup-close="popup-9" href="#"></a></p>
                            <a class="popup-close" data-popup-close="popup-9" href="#">x</a>
                        </div>
                    </div>
                    <script type="text/javascript" src="https://www.aspcares.com/assets/js/jquery.inputmask.js"></script>
                    <script>
    //
// Use internal $.serializeArray to get list of form elements which is
// consistent with $.serialize
//
// From version 2.0.0, $.serializeObject will stop converting [name] values
// to camelCase format. This is *consistent* with other serialize methods:
//
//   - $.serialize
//   - $.serializeArray
//
// If you require camel casing, you can either download version 1.0.4 or map
// them yourself.
//

(function($){
    $.fn.serializeObject = function () {
        "use strict";

        var result = {};
        var extend = function (i, element) {
            var node = result[element.name];

    // If node with same name exists already, need to convert it to an array as it
    // is a multi-value field (i.e., checkboxes)

            if ('undefined' !== typeof node && node !== null) {
                if ($.isArray(node)) {
                    node.push(element.value);
                } else {
                    result[element.name] = [node, element.value];
                }
            } else {
                result[element.name] = element.value;
            }
        };

        $.each(this.serializeArray(), extend);
        return result;
    };
})(jQuery);
    </script>
 <script type="text/javascript">
    // Serialize Object function 
    (function($){
    $.fn.serializeObject = function () {
        "use strict";

        var result = {};
        var extend = function (i, element) {
            var node = result[element.name];

    // If node with same name exists already, need to convert it to an array as it
    // is a multi-value field (i.e., checkboxes)

            if ('undefined' !== typeof node && node !== null) {
                if ($.isArray(node)) {
                    node.push(element.value);
                } else {
                    result[element.name] = [node, element.value];
                }
            } else {
                result[element.name] = element.value;
            }
        };

        $.each(this.serializeArray(), extend);
        return result;
    };
});
   
    $(function() {
        //----- OPEN
        $("#lopbtnphone3").inputmask({"mask": "(999) 999-9999"});
        // $("#locationnum").inputmask({"mask": "(999) 999-9999"});
        $("#biz-phone").inputmask({"mask": "(999) 999-9999"});
        $("#lopbtnphone2").inputmask({"mask": "(999) 999-9999"});
        $("#lopbtnphone").inputmask({"mask": "(999) 999-9999"});
        $("#lopbtnphone9").inputmask({"mask": "(999) 999-9999"});
        
        
        
        $('[data-popup-open]').on('click', function(e) {
            var targeted_popup_class = jQuery(this).attr('data-popup-open');
            $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
            e.preventDefault();
        });
        //----- CLOSE
        $('[data-popup-close]').on('click', function(e) {
            var targeted_popup_class = jQuery(this).attr('data-popup-close');
            $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
            e.preventDefault();
        });
    });
    </script>
      <script type="text/javascript">
        jQuery(document).ready(function($) {
           // jQuery('#helf').on('click',function(){
           //      jQuery("#image-modal").css({"display":"flex","visibility":"visible","background":"rgba(0,0,0,0.5)"});
           // }); 
           // jQuery('#close').on('click',function(){
           //      jQuery("#image-modal").css({"display":"none","visibility":"hidden"});
           // });
           jQuery('#fade-wrapper').on('click', function(e) {
                jQuery(this).fadeOut();
           });

            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test($email);
            }

           
            //----- OPEN
            jQuery('[data-popup-open]').on('click', function(e) {
                var targeted_popup_class = jQuery(this).attr('data-popup-open');
                jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
                e.preventDefault();
            });
            //----- CLOSE
            jQuery('[data-popup-close]').on('click', function(e) {
                var targeted_popup_class = jQuery(this).attr('data-popup-close');
                jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
                e.preventDefault();
            });

            
        }); 
</script>
<script type="text/javascript">
        // Set location in select box
           jQuery(document).ready(function($) {
                var location = window.location.href;

               //console.log(location);
               if(location.includes("503bfacility") == true)
                {
                    document.getElementById("selectlocation").value = "503B Facility";
                    var selectlocation = "San Antonio, TX";
document.getElementById("selectlocation").disabled = true;
                }
//                 else if(location.includes("miami") == true){
//                     document.getElementById("selectlocation").value = "Miami, FL";
// document.getElementById("selectlocation").disabled = true;
//                 }
//                 else if(location.includes("orlando") == true){
//                     document.getElementById("selectlocation").value = "Orlando, FL";
// document.getElementById("selectlocation").disabled = true;
//                 }
//                 else if(location.includes("clawson") == true){
//                     document.getElementById("selectlocation").value = "Clawson, MI";
// document.getElementById("selectlocation").disabled = true;
//                 }
//                 else if(location.includes("columbia") == true){
//                     document.getElementById("selectlocation").value = "Columbia, MD";
// document.getElementById("selectlocation").disabled = true;
//                 }
//                 else if(location.includes("livingston") == true){
//                     document.getElementById("selectlocation").value = "Livingston, NJ";
// document.getElementById("selectlocation").disabled = true;
//                 }
                else if(location.includes("albuquerque") == true){
                    document.getElementById("selectlocation").value = "Albuquerque, NM";
document.getElementById("selectlocation").disabled = true;
                }
                else if(location.includes("lascruces") == true){
                    document.getElementById("selectlocation").value = "Las Cruces, NM";
document.getElementById("selectlocation").disabled = true;
                }
                else if(location.includes("lasvegas") == true){
                    document.getElementById("selectlocation").value = "Las Vegas, NV";
document.getElementById("selectlocation").disabled = true;
                }
                else if(location.includes("lasvegas-mlk") == true){
                    document.getElementById("selectlocation").value = "Las Vegas, MLK, NV";
document.getElementById("selectlocation").disabled = true;
                }
                else if(location.includes("astoria") == true){
                    document.getElementById("selectlocation").value = "Astoria, NY";
document.getElementById("selectlocation").disabled = true;
                }
                else if(location.includes("sa-stoneoak") == true){
                    document.getElementById("selectlocation").value = "SA, Stone Oak";
document.getElementById("selectlocation").disabled = true;
                }
//                 else if(location.includes("dickson") == true){
//                     document.getElementById("selectlocation").value = "Dickson, TN";
// document.getElementById("selectlocation").disabled = true;
//                 }
//                 else if(location.includes("austin") == true){
//                     document.getElementById("selectlocation").value = "Austin, TX";
// document.getElementById("selectlocation").disabled = true;
//                 }
                else if(location.includes("cedar-park") == true){
                    document.getElementById("selectlocation").value = "Austin-Cedar Park, TX";
document.getElementById("selectlocation").disabled = true;
                }
                else if(location.includes("corpuschristi") == true){
                    document.getElementById("selectlocation").value = "Corpus Christi, TX";
document.getElementById("selectlocation").disabled = true;
                }
                 else if(location.includes("el-Paso") == true){
                     document.getElementById("selectlocation").value = "El Paso, TX";
 document.getElementById("selectlocation").disabled = true;
                 }
                 else if(location.includes("weslaco") == true){
                     document.getElementById("selectlocation").value = "Weslaco, TX";
 document.getElementById("selectlocation").disabled = true;
                 }
                 else if(location.includes("maryland") == true){
                     document.getElementById("selectlocation").value = "Maryland";
 document.getElementById("selectlocation").disabled = true;
                 }

//                 else if(location.includes("farmers") == true){
//                     document.getElementById("selectlocation").value = "Farmers Branch, TX";
// document.getElementById("selectlocation").disabled = true;
//                 }
//                 else if(location.includes("houston") == true){
//                     document.getElementById("selectlocation").value = "Houston, TX";
// document.getElementById("selectlocation").disabled = true;
//                 }
                else if(location.includes("macallen") == true){
                    document.getElementById("selectlocation").value = "McAllen, TX";
document.getElementById("selectlocation").disabled = true;
                }
                else if(location.includes("pasadena") == true){
                    document.getElementById("selectlocation").value = "Pasadena, TX";
document.getElementById("selectlocation").disabled = true;
                }
//                 else if(location.includes("sanantonio") == true){
//                     document.getElementById("selectlocation").value = "San Antonio, TX";
// document.getElementById("selectlocation").disabled = true;
//                 }
                else if(location.includes("tyler") == true){
                    document.getElementById("selectlocation").value = "Tyler, TX";
document.getElementById("selectlocation").disabled = true;
                }
//                 else if(location.includes("clawson") == true){
//                     document.getElementById("selectlocation").value = "Clawson, MI";
// document.getElementById("selectlocation").disabled = true;
//                 }
//                 else if(location.includes("lancaster") == true){
//                     document.getElementById("selectlocation").value = "Lancaster, TX";
// document.getElementById("selectlocation").disabled = true;
//                 }
                else if(location.includes("oklahoma") == true){
                    document.getElementById("selectlocation").value = "Oklahoma City, OK";
document.getElementById("selectlocation").disabled = true;
                }
           });
        jQuery(document).ready(function($) {
           // jQuery('#helf').on('click',function(){
           // jQuery("#image-modal").css({"display":"flex","visibility":"visible","background":"rgba(0,0,0,0.5)"});
           // });
           // jQuery('#close').on('click',function(){
           // jQuery("#image-modal").css({"display":"none","visibility":"hidden"});
           // });
           jQuery('#fade-wrapper').on('click', function(e) {
                jQuery(this).fadeOut();
           });


            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test($email);
            }

            jQuery('#contact-form').on('submit', function(e) {
            e.preventDefault();
            e.stopPropagation();

            if ($("#question").val() == '' || $("#contact-email").val() == '' ) {
                $('#success-message').html("<span>All fields are mandatory</span>");
                $('#fade-wrapper').fadeIn();
                setTimeout(function() {
                    $('#fade-wrapper').fadeOut();
                }, 2000);
            } else {
                var location = window.location.href;

                    //console.log(location);
                   if(location.includes("lop") == true)
                    {
                        var pagelocation = "LOP";

                    }
                    else{
                        var pagelocation = "";
                    }
                var postdata = {
                    'email': jQuery("#contact-email").val(),
                    'question': jQuery("#question").val(),
                    'pagelocation' : pagelocation
                };
                jQuery.ajax({
                    url: '/contact.php',
                    type: 'POST',
                    data: postdata,
                    success: function(response) {
                        jQuery('#close').trigger('click');
jQuery('#success-message').html("<span>Thank you for your submission. We will get back to you soon.</span>")
                        jQuery('#fade-wrapper').fadeIn();
                        setTimeout(function() {
                            jQuery('#fade-wrapper').fadeOut();
                        }, 7000);
                        jQuery('#contact-form')[0].reset();
                    }
                });
            }
        });
            // Ask A Pharmacist mail script
            jQuery('#askform').on('submit', function(e) {

            e.preventDefault();
            e.stopPropagation();

                if ($("#firstname").val() == '' || $("#askemail").val() == '' ) {
                    $('#success-message').html("<span>All fields are mandatory</span>");
                    $('#fade-wrapper').fadeIn();
                    setTimeout(function() {
                        $('#fade-wrapper').fadeOut();
                    }, 2000);
                } else {
                    var location = window.location.href;

                    //console.log(location);
                   if(location.includes("addiction-management") == true)
                    {
                        var pagelocation = "Addiction Management";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("infusion-therapy") == true)
                    {
                        var pagelocation = "Infusion Therapy";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("rheumatology") == true)
                    {
                        var pagelocation = "Rheumatology";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("cardiovascular-disease") == true)
                    {
                        var pagelocation = "Cardiovascular Disease";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("multiple-sclerosis") == true)
                    {
                        var pagelocation = "Multiple Sclerosis";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("RSV") == true)
                    {
                        var pagelocation = "RSV";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("gastroenterology") == true)
                    {
                        var pagelocation = "Gastroenterology";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("oncology") == true)
                    {
                        var pagelocation = "Oncology";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("transplant") == true)
                    {
                        var pagelocation = "Transplant";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("hemophilia") == true)
                    {
                        var pagelocation = "Hemophilia";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("ophthalmology") == true)
                    {
                        var pagelocation = "Ophthalmology";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("urology") == true)
                    {
                        var pagelocation = "Urology";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("hepatitis") == true)
                    {
                        var pagelocation = "Hepatitis";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("pain-management") == true)
                    {
                        var pagelocation = "Pain Management";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("wound-care") == true)
                    {
                        var pagelocation = "Wound Care";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("hiv-aids") == true)
                    {
                        var pagelocation = "HIV AIDS";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("prep") == true)
                    {
                        var pagelocation = "PrEP";
                        console.log("",pagelocation);
                    }
                    else{
                        var pagelocation = "";
                    }
                    var postdata = {
                        'firstname': jQuery("#firstname").val(),
                        'lastname': jQuery("#lastname").val(),
                        'askemail': jQuery("#askemail").val(),
                        'askmsg': jQuery("#askmsg").val(),
                        'pagelocation':pagelocation
                    };
                    jQuery.ajax({
                        url: '/aspcares/askapharma.php',
                        type: 'POST',
                        data: postdata,
                        success: function(response) {
                            jQuery('#close').trigger('click');
jQuery('#success-message').html("<span>Thank you for your submission. We will get back to you soon.</span>")
                            // jQuery('#fade-wrapper').fadeIn();
                            //jQuery('asksuccess').show();
document.getElementById("asksuccess").style.display = "block";
                            setTimeout(function() {
                                // jQuery('#fade-wrapper').fadeOut();
                            }, 2000);
                            jQuery('#askform')[0].reset();
                            
                        }
                   
                    });
                }
            });
           
        //   // Ask a pharmacist googlesheet

        //     var $form = $('#askform'),
        //         url = 'https://script.google.com/a/aspcares.com/macros/s/AKfycbzpRiuewwxgM8C74bzxnbJ0zM6HrFSWOtBzXP69auvUQtDZXtI/exec'

        //     jQuery('#askform').on('submit', function(e) {
        //     e.preventDefault();
        //     var jqxhr = $.ajax({
        //         url: url,
        //         method: "GET",
        //         dataType: "json",
        //         data: $form.serializeObject(),
        //         headers: {
        //             'Access-Control-Allow-Origin': '*'
        //         }
        //         }).success(
        //             alert("Google Sheet Done!")
        //             // do something
        //         );
        //         //data: $form.serializeObject()
        //     })
            
            // Location mail script
            jQuery('#locationform').on('submit', function(e) {
              // console.log(selectlocation);
            e.preventDefault();
            e.stopPropagation();

                if ($("#locationnum").val() == '' || $("#locationemail").val() == '' ) {
                    $('#success-message').html("<span>All fields are mandatory</span>");
                    $('#fade-wrapper').fadeIn();
                    setTimeout(function() {
                        $('#fade-wrapper').fadeOut();
                    }, 2000);
                } else {

                    if(document.getElementById("agree1").checked == true){
                        console.log("Req");
                        var agree = "Request a callback";
                    }
                    else if(document.getElementById("agree2").checked == true){
                        console.log("text");
                        var agree = "Text me";
                    }
                    else if(document.getElementById("agree3").checked == true){
                        console.log("email");
                        var agree = "Email me";
                    }
                    var location = window.location.href;

                    //console.log(location);
                   // if(location.includes("orlando") == true)
                   //  {
                   //      var pagelocation = "Orlando, FL";
                   //      console.log("",pagelocation);
                   //  }
                    // if(location.includes("columbia") == true)
                    // {
                    //     var pagelocation = "Columbia, MD";
                    //     console.log("",pagelocation);
                    // }
                    // else if(location.includes("clawson") == true)
                    // {
                    //     var pagelocation = "Clawson, MI";
                    //     console.log("",pagelocation);
                    // }
                    // else if(location.includes("miami") == true)
                    // {
                    //     var pagelocation = "Miami, FL";
                    //     console.log("",pagelocation);
                    // }
                    else if(location.includes("lasvegas") == true)
                    {
                        var pagelocation = "Las Vegas, NV";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("lasvegas-mlk") == true)
                    {
                        var pagelocation = "Las Vegas, MLK NV";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("albuquerque") == true)
                    {
                        var pagelocation = "Albuquerque, NM";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("lascruces") == true)
                    {
                        var pagelocation = "Las Cruces, NM";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("astoria") == true)
                    {
                        var pagelocation = "Astoria, NY";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("transplant") == true)
                    {
                        var pagelocation = "Transplant";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("oklahoma") == true)
                    {
                        var pagelocation = "Oklahoma City";
                        console.log("",pagelocation);
                    }
                    // else if(location.includes("dickson") == true)
                    // {
                    //     var pagelocation = "Dickson, TN";
                    //     console.log("",pagelocation);
                    // }
                    // else if(location.includes("austin") == true)
                    // {
                    //     var pagelocation = "Austin, TX";
                    //     console.log("",pagelocation);
                    // }
                    else if(location.includes("cedar-park") == true)
                    {
                        var pagelocation = "Austin-Cedar Park, TX";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("corpuschristi") == true)
                    {
                        var pagelocation = "Corpus Christi, TX";
                        console.log("",pagelocation);
                    }
                     else if(location.includes("el-Paso") == true)
                     {
                         var pagelocation = "El Paso, TX";
                         console.log("",pagelocation);
                     }
                     else if(location.includes("weslaco") == true)
                     {
                         var pagelocation = "Weslaco, TX";
                         console.log("",pagelocation);
                     }
                     else if(location.includes("maryland") == true)
                     {
                         var pagelocation = "Maryland";
                         console.log("",pagelocation);
                     }
                    // else if(location.includes("farmers") == true)
                    // {
                    //     var pagelocation = "Farmers Branch, TX";
                    //     console.log("",pagelocation);
                    // }
                    // else if(location.includes("houston") == true)
                    // {
                    //     var pagelocation = "Houston";
                    //     console.log("",pagelocation);
                    // }
                    // else if(location.includes("lancaster") == true)
                    // {
                    //     var pagelocation = "Lancaster, TX";
                    //     console.log("",pagelocation);
                    // }
                    // Location
                    else if(location.includes("macallen") == true)
                    {
                        var pagelocation = "McAllen, Texas";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("pasadena") == true)
                    {
                        var pagelocation = "Pasadena, TX";
                        console.log("",pagelocation);
                    }
                    // else if(location.includes("sanantonio") == true)
                    // {
                    //     var pagelocation = "San Antonio";
                    //     console.log("",pagelocation);
                    // }
                    else if(location.includes("sa-stoneoak") == true)
                    {
                        var pagelocation = "SA - Stone Oak";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("prep") == true)
                    {
                        var pagelocation = "PrEP";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("503bfacility") == true)
                    {
                        var pagelocation = "503B Facility";
                        console.log("",pagelocation);
                    }
                    else if(location.includes("tyler") == true)
                    {
                        var pagelocation = "Tyler, TX";
                        console.log("",pagelocation);
                    }
                   
                    else{
                        var pagelocation = "";
                    }

                    var rx = $("input[name='rx1[]']").map(function(){return $(this).val();}).get();
                    
                    var postdata = {
                        'locationnum': jQuery("#locationnum").val(),
                        'locationemail': jQuery("#locationemail").val(),
                        //'rx': jQuery("#rx").val(),
                        'selectlocation': jQuery("#selectlocation").val(),
                        'rx': rx,
                        'agree': agree,
                        'pagelocation':pagelocation

                    };
                    var urlink = "https://www.aspcares.com/location/mail.php";
                    jQuery.ajax({
                        url: urlink,
                        type: 'POST',
                        data: postdata,
                        success: function(response) {
                            // jQuery('#close').trigger('click');
jQuery('#success-message').html("<span>Thank you for your submission. We will get back to you soon.</span>")
                            // jQuery('#fade-wrapper').fadeIn();
                            //jQuery('asksuccess').show();
document.getElementById("asksuccess2").style.display = "block";
                            setTimeout(function() {
                                // jQuery('#fade-wrapper').fadeOut();
                            }, 2000);
                            jQuery('#locationform')[0].reset();
                            jQuery(".icheckbox_minimal input[type=checkbox]").prop("checked", false);

                        }
                    });
                }
            });
            // LOP mail script
            jQuery('#lopform').on('submit', function(e) {
              // console.log(selectlocation);
            e.preventDefault();
            e.stopPropagation();

                if ($("#lopname").val() == '' || $("#lopphone").val() == '' ) {
                    $('#success-message').html("<span>All fields are mandatory</span>");
                    $('#fade-wrapper').fadeIn();
                    setTimeout(function() {
                        $('#fade-wrapper').fadeOut();
                    }, 2000);
                } else {
                    var location = window.location.href;

                    //console.log(location);
                   if(location.includes("lop") == true)
                    {
                        var pagelocation = "LOP";

                    }
                    else if(location.includes("worker-comp") == true){
                        var pagelocation = "Workers Compensation";
                    }
                    console.log(pagelocation);
                    var postdata = {
                        'lopname': jQuery("#lopname").val(),
                        'lopphone': jQuery("#lopphone").val(),
                        'lopemail': jQuery("#lopemail").val(),
                        'lopadd': jQuery("#lopadd").val(),
                        'pagelocation': pagelocation

                    };
                    jQuery.ajax({
                        url: '/lop/mail.php',
                        type: 'POST',
                        data: postdata,
                        success: function(response) {
                            jQuery('#close').trigger('click');
jQuery('#success-message').html("<span>Thank you for your submission. We will get back to you soon.</span>")
                            jQuery('#fade-wrapper').fadeIn();
                            //jQuery('asksuccess').show();
document.getElementById("lopsuccess1").style.display = "block";
                            setTimeout(function() {
                                jQuery('#fade-wrapper').fadeOut();
                            }, 2000);
                            jQuery('#lopform')[0].reset();
                        }
                    });
                }
            });
            // LOP Image buttons mail script
            jQuery('#lopbtnform1').on('submit', function(e) {
              // console.log(selectlocation);
            e.preventDefault();
            e.stopPropagation();

                if ($("#lopbtnname").val() == '' || $("#lopbtnphone").val() == '' ) {
                    $('#success-message').html("<span>All fields are mandatory</span>");
                    $('#fade-wrapper').fadeIn();
                    setTimeout(function() {
                        $('#fade-wrapper').fadeOut();
                    }, 2000);
                } else {

                     var location = window.location.href;
                    if(location.includes("lop") == true)
                    {
                        var loca = "LOP";
                    }
                    else if(location.includes("worker-comp") == true)
                    {
                        var loca = "Workers Compensation";
                    }
                    var btnname1 = 'Patient Enrollement';
                    var postdata = {
                        'lopbtnname': jQuery("#lopbtnname").val(),
                        'lopbtnphone': jQuery("#lopbtnphone").val(),
                        'lopbtnemail': jQuery("#lopbtnemail").val(),
                        'lopbtnadd': jQuery("#lopbtnadd").val(),
                        'btnname1': btnname1,
                        'loca':loca

                    };
                    jQuery.ajax({
                        url: '/lop/lopmail2.php',
                        type: 'POST',
                        data: postdata,
                        success: function(response) {
                            jQuery('#close').trigger('click');
jQuery('#success-message').html("<span>Thank you for your submission. We will get back to you soon.</span>")
                            // jQuery('#fade-wrapper').fadeIn();
                            //jQuery('asksuccess').show();
document.getElementById("lopbtnsuccess1").style.display = "block";
                            setTimeout(function() {
                                // jQuery('#fade-wrapper').fadeOut();
                            }, 2000);
                            jQuery('#lopbtnform1')[0].reset();
                        }
                    });
                }
            });
            // LOP Image buttons mail script : Transfer my prescription
            jQuery('#lopbtnform9').on('submit', function(e) {
              // console.log(selectlocation);
            e.preventDefault();
            e.stopPropagation();

                if ($("#lopbtnname9").val() == '' || $("#lopbtnphone9").val() == '' ) {
                    $('#success-message').html("<span>All fields are mandatory</span>");
                    $('#fade-wrapper').fadeIn();
                    setTimeout(function() {
                        $('#fade-wrapper').fadeOut();
                    }, 2000);
                } else {

                     var location = window.location.href;
                    if(location.includes("lop") == true)
                    {
                        var loca = "LOP";
                    }
                    else if(location.includes("worker-comp") == true)
                    {
                        var loca = "Workers Compensation";
                    }
                    var btnname1 = 'Transfer';
                    var postdata = {
                        'lopbtnname9': jQuery("#lopbtnname9").val(),
                        'lopbtnphone9': jQuery("#lopbtnphone9").val(),
                        'lopbtnemail9': jQuery("#lopbtnemail9").val(),
                        'lopbtnadd9': jQuery("#lopbtnadd9").val(),
                        'btnname9': btnname1,
                        'loca':loca

                    };
                    jQuery.ajax({
                        url: '/lop/lopmail9.php',
                        type: 'POST',
                        data: postdata,
                        success: function(response) {
                            jQuery('#close').trigger('click');
jQuery('#success-message').html("<span>Thank you for your submission. We will get back to you soon.</span>")
                            // jQuery('#fade-wrapper').fadeIn();
                            //jQuery('asksuccess').show();
document.getElementById("lopbtnsuccess9").style.display = "block";
                            setTimeout(function() {
                                // jQuery('#fade-wrapper').fadeOut();
                            }, 2000);
                            jQuery('#lopbtnform9')[0].reset();
                        }
                    });
                }
            });
            // LOP Image buttons mail script 2
            jQuery('#lopbtnform2').on('submit', function(e) {
              // console.log(selectlocation);
            e.preventDefault();
            e.stopPropagation();

                if ($("#lopbtnname2").val() == '' || $("#lopbtnphone2").val() == '' ) {
                    $('#success-message').html("<span>All fields are mandatory</span>");
                    $('#fade-wrapper').fadeIn();
                    setTimeout(function() {
                        $('#fade-wrapper').fadeOut();
                    }, 2000);
                } else {
                    var location = window.location.href;
                    if(location.includes("lop") == true)
                    {
                        var loca = "LOP";
                    }
                    else if(location.includes("worker-comp") == true)
                    {
                        var loca = "Workers Comp";
                    }
                    var btnname2 = 'Request a Rep';
                    var postdata = {
                        'lopbtnname2': jQuery("#lopbtnname2").val(),
                        'lopbtnphone2': jQuery("#lopbtnphone2").val(),
                        'lopbtnemail2': jQuery("#lopbtnemail2").val(),
                        'lopbtnadd2': jQuery("#lopbtnadd2").val(),
                        'btnname2' : btnname2,
                        'loca':loca


                    };
                    jQuery.ajax({
                        url: '/lop/lopmail3.php',
                        type: 'POST',
                        data: postdata,
                        success: function(response) {
                            jQuery('#close').trigger('click');
jQuery('#success-message').html("<span>Thank you for your submission. We will get back to you soon.</span>")
                            // jQuery('#fade-wrapper').fadeIn();
                            //jQuery('asksuccess').show();
document.getElementById("lopbtnsuccess2").style.display = "block";
                            setTimeout(function() {
                                jQuery('#fade-wrapper').fadeOut();
                            }, 2000);
                            jQuery('#lopbtnform2')[0].reset();
                        }
                    });
                }
            });
            // LOP Image buttons mail script 3
            jQuery('#lopbtnform3').on('submit', function(e) {
              // console.log(selectlocation);
            e.preventDefault();
            e.stopPropagation();

                if ($("#lopbtnname3").val() == '' || $("#lopbtnphone3").val() == '' ) {
                    $('#success-message').html("<span>All fields are mandatory</span>");
                    $('#fade-wrapper').fadeIn();
                    setTimeout(function() {
                        $('#fade-wrapper').fadeOut();
                    }, 2000);
                } else {
                    
                    var location = window.location.href;
                    if(location.includes("lop") == true)
                    {
                        var loca = "LOP";
                    }
                    else if(location.includes("worker-comp") == true)
                    {
                        var loca = "Workers Compensation";
                    }
                    var btnname3 = 'Transfer My Prescription';
                    var postdata = {
                        'lopbtnname3': jQuery("#lopbtnname3").val(),
                        'lopbtnphone3': jQuery("#lopbtnphone3").val(),
                        'lopbtnemail3': jQuery("#lopbtnemail3").val(),
                        'lopbtnadd3': jQuery("#lopbtnadd3").val(),
                        'btnname3' : btnname3,
                        'loca':loca
                    };
                    jQuery.ajax({
                        url: '/lop/lopmail4.php',
                        type: 'POST',
                        data: postdata,
                        success: function(response) {
                            jQuery('#close').trigger('click');
jQuery('#success-message').html("<span>Thank you for your submission. We will get back to you soon.</span>")
                            // jQuery('#fade-wrapper').fadeIn();
                            //jQuery('asksuccess').show();
document.getElementById("lopbtnsuccess3").style.display = "block";
                            setTimeout(function() {
                                // jQuery('#fade-wrapper').fadeOut();
                            }, 2000);
                            // jQuery('#lopbtnform3')[0].reset();
                        }
                    });
                }
            });
            // Request a Rep mail Script
             jQuery('#request-form').on('submit', function(e) {

            e.preventDefault();
            e.stopPropagation();
            var location = window.location.href;


            if(location.includes("addiction-management") == true)
            {
                var loca = "Addiction Management";
            }
            else if(location.includes("cardiovascular-disease") == true)
            {
                var loca = "Cardiovascular Disease";
            }
            else if(location.includes("fertility") == true)
            {
                var loca = "Fertility";
            }
            else if(location.includes("hepatitis") == true)
            {
                var loca = "Hepatitis";
            }
            else if(location.includes("hiv-aids") == true)
            {
                var loca = "HIV AIDS";
            }
            else if(location.includes("infusion-therapy") == true)
            {
                var loca = "Infusion Therapy";
            }
            else if(location.includes("oncology") == true)
            {
                var loca = "Oncology";
            }
            else if(location.includes("pain-management") == true)
            {
                var loca = "Pain Management";
            }
            else if(location.includes("rheumatology") == true)
            {
                var loca = "Rheumatology";
            }
            else if(location.includes("lop") == true)
            {
                var loca = "LOP";
            }
            else if(location.includes("worker-comp") == true)
            {
                var loca = "Workers Compensation";
            }
            else{
                var loca = "Transplant";
            }

            if ($("#name").val() == '' || $("#request-email").val() == '' ) {
                $('#success-message').html("<span>All fields are mandatory</span>");
                $('#fade-wrapper').fadeIn();
                setTimeout(function() {
                    $('#fade-wrapper').fadeOut();
                }, 2000);
            } else {
                console.log(loca);
                var postdata = {
                    'name': jQuery("#name").val(),
                    'biz-phone': jQuery("#biz-phone").val(),
                    'email': jQuery("#request-email").val(),
                    'clinic-address': jQuery("#clinic-address").val(),
                    'location-name' :loca
                };
                jQuery.ajax({
                    url: '/requestmail.php',
                    type: 'POST',
                    data: postdata,
                    success: function(response) {
                        jQuery('#close').trigger('click');
jQuery('#success-message').html("<span>Thank you for your submission. We will get back to you soon.</span>")
                        jQuery('#fade-wrapper').fadeIn();

                        setTimeout(function() {
                            jQuery('#fade-wrapper').fadeOut();
                        }, 7000);
                        jQuery('#request-form')[0].reset();
                    }
                });
            }
        });
            //----- OPEN
            jQuery('[data-popup-open]').on('click', function(e) {
                var targeted_popup_class = jQuery(this).attr('data-popup-open');
                jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
                e.preventDefault();
            });
            //----- CLOSE
            jQuery('[data-popup-close]').on('click', function(e) {
                var targeted_popup_class = jQuery(this).attr('data-popup-close');
                jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
                e.preventDefault();
            });


        });
    </script>
    
  <!-- Javascript for Adding Textfield -->
        <script type="text/javascript">
            $(document).ready(function() {
                var count=2;
                  $("#btnAdd").click(function() {
                    $(".a").append('<div class="con"><input type="text"  name="rx1[]" required="" size="200" placeholder="Input RX Number" class="text-area wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="rx'+count+'" aria-required="true">' + '<a class="popup-closed btnRemove"  href="#">x</a></div>');
                    count+=1;
                  });
                  $('body').on('click','.btnRemove',function() {
                    $(this).parent('div.con').remove()

            // <input type="button" class="btnRemove" value="X"/>
                  });
                });
        </script>   
        <!-- Adding Textfeild Ends JS Here -->
      <script>
        function selectPDF(e){
            var link = document.getElementById('pdflink');
            var pdfHtml = `<a href="`+ e.value +`" target="_blank">Click <div class="animated1 bounce1">`+ e.options[e.selectedIndex].text +`.pdf</div> to download</a>`;
            link.innerHTML = pdfHtml;
        }
        if(navigator.userAgent.indexOf('MSIE')!==-1 || navigator.appVersion.indexOf('Trident/') > 0){
               alert("");
            }
   
    </script>
      <script>
        function selectPDF(e){
            var link = document.getElementById('pdflink');
            var pdfHtml = `<a href="`+ e.value +`" target="_blank">Click <div class="animated1 bounce1">`+ e.options[e.selectedIndex].text +`.pdf</div> to download</a>`;
            link.innerHTML = pdfHtml;
        }
        if(navigator.userAgent.indexOf('MSIE')!==-1 || navigator.appVersion.indexOf('Trident/') > 0){
               alert("");
            }
   
    </script>