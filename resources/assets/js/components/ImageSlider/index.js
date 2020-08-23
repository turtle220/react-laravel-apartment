import React from 'react';

import './css/font-awesome.min.css';
import './js_composer.min.css';
import './magnific-popup.css';
import './single-hotel.css';
import './singl-hotel-new.css';
import './single-hotel-page.css';
import './single-hotel-responsive.css';
import './style.css';

import './js/jquery/jquery.js';
import './js/jquery-blockui/jquery.blockUI.min.js';
import './js/mason/masonry.pkgd.min.js';
import './js/modernizr.custom.js';
import './js/moment.min.js';
import './js/daterangepicker/daterangepicker.js';
import './js/scrollreveal.js';
import './js/scroll-desktop.js';
import './js/scroll-desktop-smooth.js';
import './js/bootstrap.min.js';
import './js/imagesloaded.pkgd.min.js';
import './js/jquery.magnific-popup.min.js';
import './js/vinhomeSlider.js';
import './js/single-hotel.js';
import './js/single-hotel-new.js';
import './js/dist/js_composer_front.min.js';
{/* <script type="text/javascript" src="{{ asset('assets/js/jquery-blockui/jquery.blockUI.min.js') }}" defer></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.js') }}" defer></script> */}
{/* <script type="text/javascript" src="{{ asset('assets/js/moment.min.js') }}" defer></script>
<script type="text/javascript" src="{{ asset('assets/js/modernizr.custom.js') }}" defer></script> */}
{/* <script type="text/javascript" src="{{ asset('assets/js/masonry.pkgd.min.js') }}" defer></script> */}
{/* <script type="text/javascript" src="{{ asset('assets/js/daterangepicker/daterangepicker.js') }}" defer></script> */}
{/* <script type="text/javascript" src="{{ asset('assets/js/scrollreveal.js') }}" defer></script>
<script type="text/javascript" src="{{ asset('assets/js/scroll-desktop-smooth.js') }}" defer></script>
<script type="text/javascript" src="{{ asset('assets/js/scroll-desktop.js') }}" defer></script> */}
{/* <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script> */}
{/* <script type="text/javascript" src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}" defer></script> */}
{/* <script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}" defer></script> */}
{/* <script type="text/javascript" src="{{ asset('assets/js/vinhomeSlider.js') }}" defer></script> */}
{/* <script type="text/javascript" src="{{ asset('assets/js/single-hotel.js') }}" defer></script>
<script type="text/javascript" src="{{ asset('assets/js/dist/js_composer_front.min.js') }}" defer></script> */}


const ImageSlider = () => {
    return (
        <div id="main-content">
            <div class="container">
                <div
                    data-vc-full-width="true"
                    data-vc-full-width-init="true"
                    data-vc-stretch-content="true"
                    class="vc_row wpb_row st bg-holder st-full-width vc_row-no-padding bg-parallax "
                    style={{
                        position: 'relative',
                        left: '-33%',
                        boxSizing: 'border-box',
                        width: '168%',
                        marginLeft: '0, auto',
                        marginRight: '0, auto'
                    }}
                >
                    <div class="bg-mask"></div>
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-md-12 vc_custom_1551691656912">
                                <div class="vc_column-inner wpb_wrapper">
                                    <div
                                        class="vinhome-slider-wrapper sts-vinhome-slider"
                                        data-style="full-screen"
                                        data-interval="3000"
                                        style={{ display: 'block' }}
                                    >
                                        <div class="vinhome-slider text-normal">
                                            <div
                                                class="item vinhome-slider-scale-transform vinhome-slider-scale-transform-current"
                                                style={{ zIndex: '99' }}
                                            >
                                                <div class="outer" style={{ backgroundImage: url('images/slide-6.jpg') }}></div>
                                                <div class="inner">
                                                    <div class="img" style={{ backgroundImage: url('images/slide-6.jpg') }}></div>
                                                </div>
                                                <div class="search-form-text">
                                                    <div class="container">
                                                        <h2 class="st-heading vinhome-text">Discover Our Melbourne Collection </h2>
                                                        <div class="sub-heading vinhome-text">Welcome to Melbourne</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="item vinhome-slider-scale-transform vinhome-slider-scale-transform-next"
                                                style={{ zIndex: '97' }}
                                            >
                                                <div class="outer" style={{ backgroundImage: url('images/slide-1.jpg') }}></div>
                                                <div class="inner">
                                                    <div class="img" style={{ backgroundImage: url('images/slide-1.jpg') }}></div>
                                                </div>
                                                <div class="search-form-text">
                                                    <div class="container">
                                                        <h2 class="st-heading vinhome-text">Discover Our Melbourne Collection</h2>
                                                        <div class="sub-heading vinhome-text">Welcome to Melbourne</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="item vinhome-slider-scale-transform vinhome-slider-scale-transform-next"
                                                style={{ zIndex: '96' }}
                                            >
                                                <div class="outer" style={{ backgroundImage: url('images/slide-2.jpg') }}></div>
                                                <div class="inner">
                                                    <div class="img" style={{ backgroundImage: url('images/slide-2.jpg') }}></div>
                                                </div>
                                                <div class="search-form-text">
                                                    <div class="container">
                                                        <h2 class="st-heading vinhome-text">Discover Our Melbourne Collection </h2>
                                                        <div class="sub-heading vinhome-text">Which you can experience</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vinhome-slider-controls"></div>
                                    </div>
                                    <section class="st-filter">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="filter-search">
                                                        <form
                                                            action="https://singlehotel.travelerwp.com/room-list-search-result/"
                                                            class="template-hotel-activity_submit"
                                                            method="get"
                                                            accept-charset="utf-8"
                                                        >
                                                            <div class="row-5">
                                                                <div class="col5 col6">
                                                                    <div class="choose-date">
                                                                        <label>CheckIn</label>
                                                                        <div class="item-search-content">
                                                                            <div class="options">
                                                                                <div class="day">
                                                                                    <span>20</span>
                                                                                </div>
                                                                                <div class="month-year">
                                                                                    <span>Aug,2020</span>
                                                                                </div>
                                                                            </div>
                                                                            <input
                                                                                type="hidden"
                                                                                class="checkin_d"
                                                                                name="checkin_d"
                                                                                value="20"
                                                                            />
                                                                            <input
                                                                                type="hidden"
                                                                                class="checkin_m"
                                                                                name="checkin_m"
                                                                                value="8"
                                                                            />
                                                                            <input
                                                                                type="hidden"
                                                                                class="checkin_y"
                                                                                name="checkin_y"
                                                                                value="2020"
                                                                            />
                                                                            <input
                                                                                type="hidden"
                                                                                name="check_in"
                                                                                class="wpbooking-date-start helios-input wb-"
                                                                                readonly=""
                                                                                value="20/08/2020"
                                                                            />
                                                                            <input
                                                                                class="wpbooking-check-in-out"
                                                                                data-custom-class=""
                                                                                type="text"
                                                                                name="check_in_out"
                                                                                value="20/08/2020-21/08/2020"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col5 col6">
                                                                    <div class="choose-date">
                                                                        <label>CheckOut</label>
                                                                        <div class="item-search-content">
                                                                            <div class="options">
                                                                                <div class="day">
                                                                                    <span>21</span>
                                                                                </div>
                                                                                <div class="month-year">
                                                                                    <span>Aug, 2020</span>
                                                                                </div>
                                                                            </div>
                                                                            <input
                                                                                type="hidden"
                                                                                class="checkout_d"
                                                                                name="checkout_d"
                                                                                value="21"
                                                                            />
                                                                            <input
                                                                                type="hidden"
                                                                                class="checkout_m"
                                                                                name="checkout_m"
                                                                                value="8"
                                                                            />
                                                                            <input
                                                                                type="hidden"
                                                                                class="checkout_y"
                                                                                name="checkout_y"
                                                                                value="2020"
                                                                            />
                                                                            <input
                                                                                type="text"
                                                                                name="check_out"
                                                                                class="wpbooking-date-end helios-input"
                                                                                readonly=""
                                                                                value="21/08/2020"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col5 col6">
                                                                    <div class="choose-date">
                                                                        <label>Number</label>
                                                                        <div class="item-search-content">
                                                                            <div class="st-number">
                                                                                <div class="adult">
                                                                                    <span class="minus">
                                                                                        <i class="input-icon field-icon fa">
                                                                                            <svg
                                                                                                width="16px"
                                                                                                height="16px"
                                                                                                viewBox="0 0 18 2"
                                                                                                version="1.1"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlnsXlink="http://www.w3.org/1999/xlink"
                                                                                            >
                                                                                                <desc>Created with Sketch.</desc>
                                                                                                <defs></defs>
                                                                                                <g
                                                                                                    id="Page-1"
                                                                                                    stroke="none"
                                                                                                    stroke-width="1"
                                                                                                    fill="none"
                                                                                                    fill-rule="evenodd"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                >
                                                                                                    <g
                                                                                                        id="Tour_Detail_2"
                                                                                                        transform="translate(-1201.000000, -538.000000)"
                                                                                                        stroke="#1A2B48"
                                                                                                        stroke-width="1.5"
                                                                                                    >
                                                                                                        <g
                                                                                                            id="check-avai"
                                                                                                            transform="translate(1035.000000, 271.000000)"
                                                                                                        >
                                                                                                            <g
                                                                                                                id="child"
                                                                                                                transform="translate(0.000000, 231.000000)"
                                                                                                            >
                                                                                                                <g
                                                                                                                    id="ico_subtract"
                                                                                                                    transform="translate(167.000000, 37.000000)"
                                                                                                                >
                                                                                                                    <path
                                                                                                                        d="M0.5,0.038 L15.5,0.038"
                                                                                                                        id="Shape"
                                                                                                                    ></path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </span>
                                                                                    <strong class="num">1</strong>
                                                                                    <input
                                                                                        type="hidden"
                                                                                        name="adult_num_search"
                                                                                        value="1"
                                                                                        class="form-control st-input-number"
                                                                                        autocomplete="off"
                                                                                        readonly=""
                                                                                        data-min="1"
                                                                                        data-max="5"
                                                                                    />
                                                                                    <span class="plus">
                                                                                        <i class="input-icon field-icon fa">
                                                                                            <svg
                                                                                                width="16px"
                                                                                                height="16px"
                                                                                                viewBox="0 0 18 18"
                                                                                                version="1.1"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlnsXlink="http://www.w3.org/1999/xlink"
                                                                                            >
                                                                                                <desc>Created with Sketch.</desc>
                                                                                                <defs></defs>
                                                                                                <g
                                                                                                    id="Page-1"
                                                                                                    stroke="none"
                                                                                                    stroke-width="1"
                                                                                                    fill="none"
                                                                                                    fill-rule="evenodd"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                >
                                                                                                    <g
                                                                                                        id="Tour_Detail_2"
                                                                                                        transform="translate(-1268.000000, -531.000000)"
                                                                                                        stroke="#1A2B48"
                                                                                                        stroke-width="1.5"
                                                                                                    >
                                                                                                        <g
                                                                                                            id="check-avai"
                                                                                                            transform="translate(1035.000000, 271.000000)"
                                                                                                        >
                                                                                                            <g
                                                                                                                id="child"
                                                                                                                transform="translate(0.000000, 231.000000)"
                                                                                                            >
                                                                                                                <g
                                                                                                                    id="ico_add"
                                                                                                                    transform="translate(234.000000, 30.000000)"
                                                                                                                >
                                                                                                                    <path
                                                                                                                        d="M0.5,8 L15.5,8"
                                                                                                                        id="Shape"
                                                                                                                    ></path>
                                                                                                                    <path
                                                                                                                        d="M8,0.5 L8,15.5"
                                                                                                                        id="Shape"
                                                                                                                    ></path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="type-person">
                                                                                    <span>Adults</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col5 col6">
                                                                    <div class="choose-date">
                                                                        <label>Number</label>
                                                                        <div class="item-search-content">
                                                                            <div class="st-number">
                                                                                <div class="adult">
                                                                                    <span class="minus">
                                                                                        <i class="input-icon field-icon fa">
                                                                                            <svg
                                                                                                width="16px"
                                                                                                height="16px"
                                                                                                viewBox="0 0 18 2"
                                                                                                version="1.1"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlnsXlink="http://www.w3.org/1999/xlink"
                                                                                            >
                                                                                                <desc>Created with Sketch.</desc>
                                                                                                <defs></defs>
                                                                                                <g
                                                                                                    id="Page-1"
                                                                                                    stroke="none"
                                                                                                    stroke-width="1"
                                                                                                    fill="none"
                                                                                                    fill-rule="evenodd"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                >
                                                                                                    <g
                                                                                                        id="Tour_Detail_2"
                                                                                                        transform="translate(-1201.000000, -538.000000)"
                                                                                                        stroke="#1A2B48"
                                                                                                        stroke-width="1.5"
                                                                                                    >
                                                                                                        <g
                                                                                                            id="check-avai"
                                                                                                            transform="translate(1035.000000, 271.000000)"
                                                                                                        >
                                                                                                            <g
                                                                                                                id="child"
                                                                                                                transform="translate(0.000000, 231.000000)"
                                                                                                            >
                                                                                                                <g
                                                                                                                    id="ico_subtract"
                                                                                                                    transform="translate(167.000000, 37.000000)"
                                                                                                                >
                                                                                                                    <path
                                                                                                                        d="M0.5,0.038 L15.5,0.038"
                                                                                                                        id="Shape"
                                                                                                                    ></path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </span>
                                                                                    <strong class="num">0</strong>
                                                                                    <input
                                                                                        type="hidden"
                                                                                        name="children_num_search"
                                                                                        value="0"
                                                                                        class="form-control st-input-number"
                                                                                        autocomplete="off"
                                                                                        readonly=""
                                                                                        data-min="0"
                                                                                        data-max="5"
                                                                                    />
                                                                                    <span class="plus">
                                                                                        <i class="input-icon field-icon fa">
                                                                                            <svg
                                                                                                width="16px"
                                                                                                height="16px"
                                                                                                viewBox="0 0 18 18"
                                                                                                version="1.1"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlnsXlink="http://www.w3.org/1999/xlink"
                                                                                            >
                                                                                                <desc>Created with Sketch.</desc>
                                                                                                <defs></defs>
                                                                                                <g
                                                                                                    id="Page-1"
                                                                                                    stroke="none"
                                                                                                    stroke-width="1"
                                                                                                    fill="none"
                                                                                                    fill-rule="evenodd"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                >
                                                                                                    <g
                                                                                                        id="Tour_Detail_2"
                                                                                                        transform="translate(-1268.000000, -531.000000)"
                                                                                                        stroke="#1A2B48"
                                                                                                        stroke-width="1.5"
                                                                                                    >
                                                                                                        <g
                                                                                                            id="check-avai"
                                                                                                            transform="translate(1035.000000, 271.000000)"
                                                                                                        >
                                                                                                            <g
                                                                                                                id="child"
                                                                                                                transform="translate(0.000000, 231.000000)"
                                                                                                            >
                                                                                                                <g
                                                                                                                    id="ico_add"
                                                                                                                    transform="translate(234.000000, 30.000000)"
                                                                                                                >
                                                                                                                    <path
                                                                                                                        d="M0.5,8 L15.5,8"
                                                                                                                        id="Shape"
                                                                                                                    ></path>
                                                                                                                    <path
                                                                                                                        d="M8,0.5 L8,15.5"
                                                                                                                        id="Shape"
                                                                                                                    ></path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="type-person">
                                                                                    <span>Children</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col5 col12">
                                                                    <div class="control">
                                                                        <button class="btn btn-primary">
                                                                            CHECK
                                                                            <br />
                                                                            AVAILABILITY
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};
export default ImageSlider;
