@extends('seller_dashboard.master')

@push('css')
    <link rel="stylesheet" href="{{asset('website/css/vendor/magnific-popup.css')}}">
@endpush

@section('content')


            <!-- DASHBOARD CONTENT -->
            <div class="dashboard-content">
                <!-- HEADLINE -->
                <div class="headline statement primary">
                    <h4>Sales Statement</h4>
                    <a href="#" class="button primary">Download File</a>
                    <button form="statement_filter_form" class="button dark-light">Refine Search</button>
                    <form id="statement_filter_form" name="statement_filter_form" class="statement-form">
                        <!-- DATEPICKER -->
                        <div class="datepicker-wrap">
                            <input type="text" id="date_from" name="date_from" class="datepicker" value="02/22/2016">
                            <span class="icon-calendar"></span>
                        </div>
                        <!-- /DATEPICKER -->
                        <label>to:</label>
                        <!-- DATEPICKER -->
                        <div class="datepicker-wrap">
                            <input type="text" id="date_to" name="date_to" class="datepicker" value="02/22/2017">
                            <span class="icon-calendar"></span>
                        </div>
                        <!-- /DATEPICKER -->
                        <label for="ss_filter" class="select-block">
                            <select name="ss_filter" id="ss_filter">
                                <option value="0">Sales and Purchases</option>
                                <option value="1">Sales</option>
                                <option value="2">Purchases</option>
                            </select>
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->
                        </label>
                    </form>
                </div>
                <!-- /HEADLINE -->
    
                <!-- SALE DATA -->
                <div class="sale-data">
                    <!-- SALE DATA ITEM -->
                    <div class="sale-data-item">
                        <span class="sl-icon icon-present"></span>
                        <p class="text-header big">8.530</p>
                        <div class="sale-data-item-info">
                            <p class="text-header">Products Sold</p>
                            <p>In all Time</p>
                        </div>
                    </div>
                    <!-- /SALE DATA ITEM-->
    
                    <!-- SALE DATA ITEM -->
                    <div class="sale-data-item">
                        <span class="sl-icon icon-present"></span>
                        <p class="text-header big">234</p>
                        <div class="sale-data-item-info">
                            <p class="text-header">Products Sold</p>
                            <p>In this Month</p>
                        </div>
                    </div>
                    <!-- /SALE DATA ITEM-->
    
                    <!-- SALE DATA ITEM -->
                    <div class="sale-data-item">
                        <span class="sl-icon icon-tag"></span>
                        <p class="price big"><span>$</span>12.450</p>
                        <div class="sale-data-item-info">
                            <p class="text-header">Total Sales</p>
                            <p>In all Time</p>
                        </div>
                    </div>
                    <!-- /SALE DATA ITEM-->
    
                    <!-- SALE DATA ITEM -->
                    <div class="sale-data-item">
                        <span class="sl-icon icon-wallet"></span>
                        <p class="price big"><span>$</span>10.630</p>
                        <div class="sale-data-item-info">
                            <p class="text-header">Total Earnings</p>
                            <p>In all Time</p>
                        </div>
                    </div>
                    <!-- /SALE DATA ITEM-->
                </div>
                <!-- /SALE DATA -->
    
                <!-- TRANSACTION LIST -->
                <div class="transaction-list">
                    <!-- TRANSACTION LIST HEADER -->
                    <div class="transaction-list-header">
                        <div class="transaction-list-header-date">
                            <p class="text-header small">Date</p>
                        </div>
                        <div class="transaction-list-header-author">
                            <p class="text-header small">Author</p>
                        </div>
                        <div class="transaction-list-header-item">
                            <p class="text-header small">Item</p>
                        </div>
                        <div class="transaction-list-header-detail">
                            <p class="text-header small">Detail</p>
                        </div>
                        <div class="transaction-list-header-code">
                            <p class="text-header small">Code</p>
                        </div>
                        <div class="transaction-list-header-price">
                            <p class="text-header small">Price</p>
                        </div>
                        <div class="transaction-list-header-cut">
                            <p class="text-header small">Your Cut</p>
                        </div>
                        <div class="transaction-list-header-earnings">
                            <p class="text-header small">Earnings</p>
                        </div>
                        <div class="transaction-list-header-icon"></div>
                    </div>
                    <!-- /TRANSACTION LIST HEADER -->
    
                    <!-- TRANSACTION LIST ITEM -->
                    <div class="transaction-list-item">
                        <div class="transaction-list-item-date">
                            <p>Dec 12th, 2014</p>
                        </div>
                        <div class="transaction-list-item-author">
                            <p class="text-header"><a href="">Sarah-Imaginarium</a></p>
                        </div>
                        <div class="transaction-list-item-item">
                            <p class="category primary"><a href="">Westeros Custom Clothing</a></p>
                        </div>
                        <div class="transaction-list-item-detail">
                            <p>Sale</p>
                        </div>
                        <div class="transaction-list-item-code">
                            <p><span class="light">ED3546</span></p>
                        </div>
                        <div class="transaction-list-item-price">
                            <p>$ 12</p>
                        </div>
                        <div class="transaction-list-item-cut">
                            <p><span class="light">50%</span></p>
                        </div>
                        <div class="transaction-list-item-earnings">
                            <p class="text-header">$ 6</p>
                        </div>
                        <div class="transaction-list-item-icon">
                            <div class="transaction-icon primary">
                                <!-- SVG PLUS -->
                                <svg class="svg-plus">
                                    <use xlink:href="#svg-plus"></use>
                                </svg>
                                <!-- /SVG PLUS -->
                            </div>
                        </div>
                    </div>
                    <!-- /TRANSACTION LIST ITEM -->
    
                    <!-- TRANSACTION LIST ITEM -->
                    <div class="transaction-list-item">
                        <div class="transaction-list-item-date">
                            <p>Dec 10th, 2014</p>
                        </div>
                        <div class="transaction-list-item-author">
                            <p class="text-header"><a href="">Thomas_Ket</a></p>
                        </div>
                        <div class="transaction-list-item-item">
                            <p class="category primary"><a href="">Saint Patricks Flyer Template</a></p>
                        </div>
                        <div class="transaction-list-item-detail">
                            <p>Sale</p>
                        </div>
                        <div class="transaction-list-item-code">
                            <p><span class="light">ED4536</span></p>
                        </div>
                        <div class="transaction-list-item-price">
                            <p>$ 6</p>
                        </div>
                        <div class="transaction-list-item-cut">
                            <p><span class="light">50%</span></p>
                        </div>
                        <div class="transaction-list-item-earnings">
                            <p class="text-header">$ 3</p>
                        </div>
                        <div class="transaction-list-item-icon">
                            <div class="transaction-icon primary">
                                <!-- SVG PLUS -->
                                <svg class="svg-plus">
                                    <use xlink:href="#svg-plus"></use>
                                </svg>
                                <!-- /SVG PLUS -->
                            </div>
                        </div>
                    </div>
                    <!-- /TRANSACTION LIST ITEM -->
    
                    <!-- TRANSACTION LIST ITEM -->
                    <div class="transaction-list-item">
                        <div class="transaction-list-item-date">
                            <p>Dec 7th, 2014</p>
                        </div>
                        <div class="transaction-list-item-author">
                            <p class="text-header"><a href="">Marina Strange</a></p>
                        </div>
                        <div class="transaction-list-item-item">
                            <p class="category primary"><a href="">Flatland - Hero Image Composer</a></p>
                        </div>
                        <div class="transaction-list-item-detail">
                            <p>Sale</p>
                        </div>
                        <div class="transaction-list-item-code">
                            <p><span class="light">ED3546</span></p>
                        </div>
                        <div class="transaction-list-item-price">
                            <p>$ 12</p>
                        </div>
                        <div class="transaction-list-item-cut">
                            <p><span class="light">50%</span></p>
                        </div>
                        <div class="transaction-list-item-earnings">
                            <p class="text-header">$ 6</p>
                        </div>
                        <div class="transaction-list-item-icon">
                            <div class="transaction-icon primary">
                                <!-- SVG PLUS -->
                                <svg class="svg-plus">
                                    <use xlink:href="#svg-plus"></use>
                                </svg>
                                <!-- /SVG PLUS -->
                            </div>
                        </div>
                    </div>
                    <!-- /TRANSACTION LIST ITEM -->
    
                    <!-- TRANSACTION LIST ITEM -->
                    <div class="transaction-list-item">
                        <div class="transaction-list-item-date">
                            <p>Dec 6th, 2014</p>
                        </div>
                        <div class="transaction-list-item-author">
                            <p class="text-header"><a href="">Sarah-Imaginarium</a></p>
                        </div>
                        <div class="transaction-list-item-item">
                            <p class="category primary"><a href="">Westeros Custom Clothing</a></p>
                        </div>
                        <div class="transaction-list-item-detail">
                            <p>Sale</p>
                        </div>
                        <div class="transaction-list-item-code">
                            <p><span class="light">ED4536</span></p>
                        </div>
                        <div class="transaction-list-item-price">
                            <p>$ 12</p>
                        </div>
                        <div class="transaction-list-item-cut">
                            <p><span class="light">50%</span></p>
                        </div>
                        <div class="transaction-list-item-earnings">
                            <p class="text-header">$ 6</p>
                        </div>
                        <div class="transaction-list-item-icon">
                            <div class="transaction-icon primary">
                                <!-- SVG PLUS -->
                                <svg class="svg-plus">
                                    <use xlink:href="#svg-plus"></use>
                                </svg>
                                <!-- /SVG PLUS -->
                            </div>
                        </div>
                    </div>
                    <!-- /TRANSACTION LIST ITEM -->
    
                    <!-- TRANSACTION LIST ITEM -->
                    <div class="transaction-list-item">
                        <div class="transaction-list-item-date">
                            <p>Dec 6th, 2014</p>
                        </div>
                        <div class="transaction-list-item-author">
                            <p class="text-header"><a href="">Odin Design</a></p>
                        </div>
                        <div class="transaction-list-item-item">
                            <p class="category primary"><a href="">Miniverse - Hero Image Composer</a></p>
                        </div>
                        <div class="transaction-list-item-detail">
                            <p>Purchase</p>
                        </div>
                        <div class="transaction-list-item-code">
                            <p><span class="light">ED4523</span></p>
                        </div>
                        <div class="transaction-list-item-price">
                            <p>$ 12</p>
                        </div>
                        <div class="transaction-list-item-cut">
                            <p><span class="light">-</span></p>
                        </div>
                        <div class="transaction-list-item-earnings">
                            <p class="text-header">- $ 12</p>
                        </div>
                        <div class="transaction-list-item-icon">
                            <div class="transaction-icon tertiary">
                                <!-- SVG MINUS -->
                                <svg class="svg-minus">
                                    <use xlink:href="#svg-minus"></use>
                                </svg>
                                <!-- /SVG MINUS -->
                            </div>
                        </div>
                    </div>
                    <!-- /TRANSACTION LIST ITEM -->
    
                    <!-- TRANSACTION LIST ITEM -->
                    <div class="transaction-list-item">
                        <div class="transaction-list-item-date">
                            <p>Dec 5th, 2014</p>
                        </div>
                        <div class="transaction-list-item-author">
                            <p class="text-header"><a href="">GamePix</a></p>
                        </div>
                        <div class="transaction-list-item-item">
                            <p class="category primary"><a href="">Westeros Custom Clothing</a></p>
                        </div>
                        <div class="transaction-list-item-detail">
                            <p>Sale</p>
                        </div>
                        <div class="transaction-list-item-code">
                            <p><span class="light">ED4536</span></p>
                        </div>
                        <div class="transaction-list-item-price">
                            <p>$ 12</p>
                        </div>
                        <div class="transaction-list-item-cut">
                            <p><span class="light">50%</span></p>
                        </div>
                        <div class="transaction-list-item-earnings">
                            <p class="text-header">$ 6</p>
                        </div>
                        <div class="transaction-list-item-icon">
                            <div class="transaction-icon primary">
                                <!-- SVG PLUS -->
                                <svg class="svg-plus">
                                    <use xlink:href="#svg-plus"></use>
                                </svg>
                                <!-- /SVG PLUS -->
                            </div>
                        </div>
                    </div>
                    <!-- /TRANSACTION LIST ITEM -->
    
                    <!-- TRANSACTION LIST ITEM -->
                    <div class="transaction-list-item">
                        <div class="transaction-list-item-date">
                            <p>Dec 2nd, 2014</p>
                        </div>
                        <div class="transaction-list-item-author">
                            <p class="text-header"><a href="">Marina Strange</a></p>
                        </div>
                        <div class="transaction-list-item-item">
                            <p class="category secondary"><a href="">Professional Corporate Logos</a></p>
                        </div>
                        <div class="transaction-list-item-detail">
                            <p>Purchase</p>
                        </div>
                        <div class="transaction-list-item-code">
                            <p><span class="light">ED2523</span></p>
                        </div>
                        <div class="transaction-list-item-price">
                            <p>$ 260</p>
                        </div>
                        <div class="transaction-list-item-cut">
                            <p><span class="light">-</span></p>
                        </div>
                        <div class="transaction-list-item-earnings">
                            <p class="text-header">- $ 260</p>
                        </div>
                        <div class="transaction-list-item-icon">
                            <div class="transaction-icon tertiary">
                                <!-- SVG MINUS -->
                                <svg class="svg-minus">
                                    <use xlink:href="#svg-minus"></use>
                                </svg>
                                <!-- /SVG MINUS -->
                            </div>
                        </div>
                    </div>
                    <!-- /TRANSACTION LIST ITEM -->
    
                    <!-- TRANSACTION LIST ITEM -->
                    <div class="transaction-list-item">
                        <div class="transaction-list-item-date">
                            <p>Dec 1st, 2014</p>
                        </div>
                        <div class="transaction-list-item-author">
                            <p class="text-header"><a href="">Fenix Themes</a></p>
                        </div>
                        <div class="transaction-list-item-item">
                            <p class="category primary"><a href="">Red Samurai - Sushi Delivery</a></p>
                        </div>
                        <div class="transaction-list-item-detail">
                            <p>Sale</p>
                        </div>
                        <div class="transaction-list-item-code">
                            <p><span class="light">ED4536</span></p>
                        </div>
                        <div class="transaction-list-item-price">
                            <p>$ 16</p>
                        </div>
                        <div class="transaction-list-item-cut">
                            <p><span class="light">50%</span></p>
                        </div>
                        <div class="transaction-list-item-earnings">
                            <p class="text-header">$ 8</p>
                        </div>
                        <div class="transaction-list-item-icon">
                            <div class="transaction-icon primary">
                                <!-- SVG PLUS -->
                                <svg class="svg-plus">
                                    <use xlink:href="#svg-plus"></use>
                                </svg>
                                <!-- /SVG PLUS -->
                            </div>
                        </div>
                    </div>
                    <!-- /TRANSACTION LIST ITEM -->
    
                    <!-- TRANSACTION LIST ITEM -->
                    <div class="transaction-list-item">
                        <div class="transaction-list-item-date">
                            <p>Nov 29th, 2014</p>
                        </div>
                        <div class="transaction-list-item-author">
                            <p class="text-header"><a href="">Sarah-Imaginarium</a></p>
                        </div>
                        <div class="transaction-list-item-item">
                            <p class="category primary"><a href="">Westeros Custom Clothing</a></p>
                        </div>
                        <div class="transaction-list-item-detail">
                            <p>Sale</p>
                        </div>
                        <div class="transaction-list-item-code">
                            <p><span class="light">ED3546</span></p>
                        </div>
                        <div class="transaction-list-item-price">
                            <p>$ 12</p>
                        </div>
                        <div class="transaction-list-item-cut">
                            <p><span class="light">50%</span></p>
                        </div>
                        <div class="transaction-list-item-earnings">
                            <p class="text-header">$ 6</p>
                        </div>
                        <div class="transaction-list-item-icon">
                            <div class="transaction-icon primary">
                                <!-- SVG PLUS -->
                                <svg class="svg-plus">
                                    <use xlink:href="#svg-plus"></use>
                                </svg>
                                <!-- /SVG PLUS -->
                            </div>
                        </div>
                    </div>
                    <!-- /TRANSACTION LIST ITEM -->
    
                    <!-- TRANSACTION LIST ITEM -->
                    <div class="transaction-list-item">
                        <div class="transaction-list-item-date">
                            <p>Nov 28th, 2014</p>
                        </div>
                        <div class="transaction-list-item-author">
                            <p class="text-header"><a href="">Thomas_Ket</a></p>
                        </div>
                        <div class="transaction-list-item-item">
                            <p class="category primary"><a href="">Saint Patricks Flyer Template</a></p>
                        </div>
                        <div class="transaction-list-item-detail">
                            <p>Sale</p>
                        </div>
                        <div class="transaction-list-item-code">
                            <p><span class="light">ED4536</span></p>
                        </div>
                        <div class="transaction-list-item-price">
                            <p>$ 6</p>
                        </div>
                        <div class="transaction-list-item-cut">
                            <p><span class="light">50%</span></p>
                        </div>
                        <div class="transaction-list-item-earnings">
                            <p class="text-header">$ 3</p>
                        </div>
                        <div class="transaction-list-item-icon">
                            <div class="transaction-icon primary">
                                <!-- SVG PLUS -->
                                <svg class="svg-plus">
                                    <use xlink:href="#svg-plus"></use>
                                </svg>
                                <!-- /SVG PLUS -->
                            </div>
                        </div>
                    </div>
                    <!-- /TRANSACTION LIST ITEM -->
    
                    <!-- TRANSACTION LIST ITEM -->
                    <div class="transaction-list-item">
                        <div class="transaction-list-item-date">
                            <p>Nov 28th, 2014</p>
                        </div>
                        <div class="transaction-list-item-author">
                            <p class="text-header"><a href="">Marina Strange</a></p>
                        </div>
                        <div class="transaction-list-item-item">
                            <p class="category primary"><a href="">Flatland - Hero Image Composer</a></p>
                        </div>
                        <div class="transaction-list-item-detail">
                            <p>Sale</p>
                        </div>
                        <div class="transaction-list-item-code">
                            <p><span class="light">ED3546</span></p>
                        </div>
                        <div class="transaction-list-item-price">
                            <p>$ 12</p>
                        </div>
                        <div class="transaction-list-item-cut">
                            <p><span class="light">50%</span></p>
                        </div>
                        <div class="transaction-list-item-earnings">
                            <p class="text-header">$ 6</p>
                        </div>
                        <div class="transaction-list-item-icon">
                            <div class="transaction-icon primary">
                                <!-- SVG PLUS -->
                                <svg class="svg-plus">
                                    <use xlink:href="#svg-plus"></use>
                                </svg>
                                <!-- /SVG PLUS -->
                            </div>
                        </div>
                    </div>
                    <!-- /TRANSACTION LIST ITEM -->
    
                    <!-- TRANSACTION LIST ITEM -->
                    <div class="transaction-list-item">
                        <div class="transaction-list-item-date">
                            <p>Nov 24th, 2014</p>
                        </div>
                        <div class="transaction-list-item-author">
                            <p class="text-header"><a href="">Sarah-Imaginarium</a></p>
                        </div>
                        <div class="transaction-list-item-item">
                            <p class="category primary"><a href="">Westeros Custom Clothing</a></p>
                        </div>
                        <div class="transaction-list-item-detail">
                            <p>Sale</p>
                        </div>
                        <div class="transaction-list-item-code">
                            <p><span class="light">ED4536</span></p>
                        </div>
                        <div class="transaction-list-item-price">
                            <p>$ 12</p>
                        </div>
                        <div class="transaction-list-item-cut">
                            <p><span class="light">50%</span></p>
                        </div>
                        <div class="transaction-list-item-earnings">
                            <p class="text-header">$ 6</p>
                        </div>
                        <div class="transaction-list-item-icon">
                            <div class="transaction-icon primary">
                                <!-- SVG PLUS -->
                                <svg class="svg-plus">
                                    <use xlink:href="#svg-plus"></use>
                                </svg>
                                <!-- /SVG PLUS -->
                            </div>
                        </div>
                    </div>
                    <!-- /TRANSACTION LIST ITEM -->
    
                    <!-- PAGER -->
                    <div class="pager-wrap">
                        <div class="pager primary">
                            <div class="pager-item"><p>1</p></div>
                            <div class="pager-item active"><p>2</p></div>
                            <div class="pager-item"><p>3</p></div>
                            <div class="pager-item"><p>...</p></div>
                            <div class="pager-item"><p>17</p></div>
                        </div>
                    </div>
                    <!-- /PAGER -->
                </div>
                <!-- /TRANSACTION LIST -->
            </div>
            <!-- DASHBOARD CONTENT -->
        </div>
        <!-- /DASHBOARD BODY -->


@endsection

@push('js')
    <!-- Magnific Popup -->
    <script src="{{asset('website/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <!-- imgLiquid -->
    <script src="{{asset('website/js/vendor/imgLiquid-min.js')}}"></script>
    <!-- Liquid -->
    <script src="{{asset('website/js/liquid.js')}}"></script>
    <!-- Dashboard Purchases -->
    <script src="{{asset('website/js/dashboard-purchases.js')}}"></script>
@endpush