@extends('seller_dashboard.master')

@push('css')
    <link rel="stylesheet" href="{{asset('website/css/vendor/magnific-popup.css')}}">
@endpush

@section('content')


   <!-- DASHBOARD BODY -->
   <div class="dashboard-body">
    <!-- DASHBOARD HEADER -->
    <div class="dashboard-header retracted">
        <!-- DB CLOSE BUTTON -->
        <a href="index.html" class="db-close-button">
           <img src="images/dashboard/back-icon.png" alt="back-icon">
        </a>
        <!-- DB CLOSE BUTTON -->

        <!-- DB OPTIONS BUTTON -->
        <div class="db-options-button">
           <img src="images/dashboard/db-list-right.png" alt="db-list-right">
           <img src="images/dashboard/close-icon.png" alt="close-icon">
        </div>
        <!-- DB OPTIONS BUTTON -->

        <!-- DASHBOARD HEADER ITEM -->
        <div class="dashboard-header-item title">
            <!-- DB SIDE MENU HANDLER -->
             <div class="db-side-menu-handler">
                <img src="images/dashboard/db-list-left.png" alt="db-list-left">
            </div>
            <!-- /DB SIDE MENU HANDLER -->
            <h6>Your Dashboard</h6>
        </div>
        <!-- /DASHBOARD HEADER ITEM -->

        <!-- DASHBOARD HEADER ITEM -->
        <div class="dashboard-header-item form">
            <form class="dashboard-search">
                <input type="text" name="search" id="search_dashboard" placeholder="Search on dashboard...">
                <input type="image" src="images/dashboard/search-icon.png" alt="search-icon">
            </form>
        </div>
        <!-- /DASHBOARD HEADER ITEM -->

        <!-- DASHBOARD HEADER ITEM -->
        <div class="dashboard-header-item stats">
            <!-- STATS META -->
            <div class="stats-meta">
                <div class="pie-chart pie-chart1">
                    <!-- SVG PLUS -->
                    <svg class="svg-plus primary">
                        <use xlink:href="#svg-plus"></use>
                    </svg>
                    <!-- /SVG PLUS -->
                </div>
                <h6>64.579</h6>
                <p>New Original Visits</p>
            </div>
            <!-- /STATS META -->
        </div>
        <!-- /DASHBOARD HEADER ITEM -->

        <!-- DASHBOARD HEADER ITEM -->
        <div class="dashboard-header-item stats">
            <!-- STATS META -->
            <div class="stats-meta">
                <div class="pie-chart pie-chart2">
                    <!-- SVG PLUS -->
                    <svg class="svg-minus tertiary">
                        <use xlink:href="#svg-minus"></use>
                    </svg>
                    <!-- /SVG PLUS -->
                </div>
                <h6>20.8</h6>
                <p>Less Sales Than Last Month</p>
            </div>
            <!-- /STATS META -->
        </div>
        <!-- /DASHBOARD HEADER ITEM -->

        <!-- DASHBOARD HEADER ITEM -->
        <div class="dashboard-header-item stats">
            <!-- STATS META -->
            <div class="stats-meta">
                <div class="pie-chart pie-chart3">
                    <!-- SVG PLUS -->
                    <svg class="svg-plus primary">
                        <use xlink:href="#svg-plus"></use>
                    </svg>
                    <!-- /SVG PLUS -->
                </div>
                <h6>322k</h6>
                <p>Total Visits This Month</p>
            </div>
            <!-- /STATS META -->
        </div>
        <!-- /DASHBOARD HEADER ITEM -->

        <!-- DASHBOARD HEADER ITEM -->
        <div class="dashboard-header-item back-button">
            <a href="index.html" class="button mid dark-light">Back to Homepage</a>
        </div>
        <!-- /DASHBOARD HEADER ITEM -->
    </div>
    <!-- DASHBOARD HEADER -->

    <!-- DASHBOARD CONTENT -->
    <div class="dashboard-content">
        <!-- HEADLINE -->
        <div class="headline buttons two primary">
            <h4>Your Inbox (36)</h4>
            <a href="#new-message-popup" class="button mid-short secondary open-new-message">New Message</a>
            <a href="#" class="button mid-short primary">Delete Selected</a>
        </div>
        <!-- /HEADLINE -->

        <!-- INBOX MESSAGES -->
        <div class="inbox-messages">
            <!-- INBOX MESSAGE -->
            <div class="inbox-message">
                <div class="inbox-message-actions">
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="msg1" name="msg1">
                    <label for="msg1" class="label-check">
                        <span class="checkbox primary"><span></span></span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- STARRED -->
                    <div class="starred">
                        <img src="images/dashboard/star-empty.png" class="hidden" alt="star-empty">
                        <img src="images/dashboard/star-filled.png" class="visible" alt="star-filled">
                    </div>
                    <!-- /STARRED -->
                </div>
                
                <div class="inbox-message-author">
                    <figure class="user-avatar">
                        <img src="images/avatars/avatar_06.jpg" alt="user-img">
                    </figure>
                    <p class="text-header">
                        Sarah-Imaginarium
                        <span class="message-icon icon-envelope secondary"></span>
                    </p>
                </div>

                <a href="dashboard-openmessage.html">
                    <div class="inbox-message-content">
                        <p class="text-header">Product Question</p>
                        <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    </div>
                </a>

                <div class="inbox-message-type">
                    <span class="message-icon icon-envelope secondary"></span>
                </div>

                <div class="inbox-message-date">
                    <p>May 18th, 2014</p>
                </div>
            </div>
            <!-- INBOX MESSAGE -->

            <!-- INBOX MESSAGE -->
            <div class="inbox-message">
                <div class="inbox-message-actions">
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="msg2" name="msg2" checked>
                    <label for="msg2" class="label-check">
                        <span class="checkbox primary"><span></span></span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- STARRED -->
                    <div class="starred">
                        <img src="images/dashboard/star-empty.png" class="visible" alt="star-empty">
                        <img src="images/dashboard/star-filled.png" class="hidden" alt="star-filled">
                    </div>
                    <!-- /STARRED -->
                </div>
                
                <div class="inbox-message-author">
                    <figure class="user-avatar">
                        <img src="images/avatars/avatar_04.jpg" alt="user-img">
                    </figure>
                    <p class="text-header">
                        Red Thunder Graphics
                        <span class="message-icon icon-envelope-open"></span>
                    </p>
                </div>

                <a href="dashboard-openmessage.html">
                    <div class="inbox-message-content">
                        <p class="text-header normal">Support Inquiry</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                    </div>
                </a>

                <div class="inbox-message-type">
                    <span class="message-icon icon-envelope-open"></span>
                </div>

                <div class="inbox-message-date">
                    <p>May 5th, 2014</p>
                </div>
            </div>
            <!-- INBOX MESSAGE -->

            <!-- INBOX MESSAGE -->
            <div class="inbox-message">
                <div class="inbox-message-actions">
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="msg3" name="msg3">
                    <label for="msg3" class="label-check">
                        <span class="checkbox primary"><span></span></span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- STARRED -->
                    <div class="starred">
                        <img src="images/dashboard/star-empty.png" class="visible" alt="star-empty">
                        <img src="images/dashboard/star-filled.png" class="hidden" alt="star-filled">
                    </div>
                    <!-- /STARRED -->
                </div>
                
                <div class="inbox-message-author">
                    <figure class="user-avatar">
                        <img src="images/avatars/avatar_07.jpg" alt="user-img">
                    </figure>
                    <p class="text-header">
                        Twisted Themes
                        <span class="message-icon icon-envelope secondary"></span>	
                    </p>
                </div>

                <a href="dashboard-openmessage.html">
                    <div class="inbox-message-content">
                        <p class="text-header">Collaboration</p>
                        <p class="description">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed</p>
                    </div>
                </a>

                <div class="inbox-message-type">
                    <span class="message-icon icon-envelope secondary"></span>
                </div>

                <div class="inbox-message-date">
                    <p>Feb 24th, 2014</p>
                </div>
            </div>
            <!-- INBOX MESSAGE -->

            <!-- INBOX MESSAGE -->
            <div class="inbox-message">
                <div class="inbox-message-actions">
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="msg4" name="msg4">
                    <label for="msg4" class="label-check">
                        <span class="checkbox primary"><span></span></span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- STARRED -->
                    <div class="starred">
                        <img src="images/dashboard/star-empty.png" class="visible" alt="star-empty">
                        <img src="images/dashboard/star-filled.png" class="hidden" alt="star-filled">
                    </div>
                    <!-- /STARRED -->
                </div>
                
                <div class="inbox-message-author">
                    <figure class="user-avatar">
                        <img src="images/avatars/avatar_08.jpg" alt="user-img">
                    </figure>
                    <p class="text-header">
                        GregSpiegel1820
                        <span class="message-icon icon-action-undo"></span>
                    </p>
                </div>

                <a href="dashboard-openmessage.html">
                    <div class="inbox-message-content">
                        <p class="text-header normal">How to Install the Theme</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                    </div>
                </a>

                <div class="inbox-message-type">
                    <span class="message-icon icon-action-undo"></span>
                </div>

                <div class="inbox-message-date">
                    <p>Jan 3rd, 2014</p>
                </div>
            </div>
            <!-- INBOX MESSAGE -->

            <!-- INBOX MESSAGE -->
            <div class="inbox-message">
                <div class="inbox-message-actions">
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="msg5" name="msg5">
                    <label for="msg5" class="label-check">
                        <span class="checkbox primary"><span></span></span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- STARRED -->
                    <div class="starred">
                        <img src="images/dashboard/star-empty.png" class="hidden" alt="star-empty">
                        <img src="images/dashboard/star-filled.png" class="visible" alt="star-filled">
                    </div>
                    <!-- /STARRED -->
                </div>
                
                <div class="inbox-message-author">
                    <figure class="user-avatar">
                        <img src="images/avatars/avatar_02.jpg" alt="user-img">
                    </figure>
                    <p class="text-header">
                        MeganV.
                        <span class="message-icon icon-envelope-open"></span>
                    </p>
                </div>

                <a href="dashboard-openmessage.html">
                    <div class="inbox-message-content">
                        <p class="text-header normal">Product Question</p>
                        <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    </div>
                </a>

                <div class="inbox-message-type">
                    <span class="message-icon icon-envelope-open"></span>
                </div>

                <div class="inbox-message-date">
                    <p>Dec 17th, 2013</p>
                </div>
            </div>
            <!-- INBOX MESSAGE -->

            <!-- INBOX MESSAGE -->
            <div class="inbox-message">
                <div class="inbox-message-actions">
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="msg6" name="msg6" checked>
                    <label for="msg6" class="label-check">
                        <span class="checkbox primary"><span></span></span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- STARRED -->
                    <div class="starred">
                        <img src="images/dashboard/star-empty.png" class="visible" alt="star-empty">
                        <img src="images/dashboard/star-filled.png" class="hidden" alt="star-filled">
                    </div>
                    <!-- /STARRED -->
                </div>
                
                <div class="inbox-message-author">
                    <figure class="user-avatar">
                        <img src="images/avatars/avatar_03.jpg" alt="user-img">
                    </figure>
                    <p class="text-header">
                        Thomas_Ket
                        <span class="message-icon icon-envelope-open"></span>
                    </p>
                </div>

                <a href="dashboard-openmessage.html">
                    <div class="inbox-message-content">
                        <p class="text-header normal">Support Inquiry</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                    </div>
                </a>

                <div class="inbox-message-type">
                    <span class="message-icon icon-envelope-open"></span>
                </div>

                <div class="inbox-message-date">
                    <p>Dec 8th, 2013</p>
                </div>
            </div>
            <!-- INBOX MESSAGE -->

            <!-- INBOX MESSAGE -->
            <div class="inbox-message">
                <div class="inbox-message-actions">
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="msg7" name="msg7" checked>
                    <label for="msg7" class="label-check">
                        <span class="checkbox primary"><span></span></span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- STARRED -->
                    <div class="starred">
                        <img src="images/dashboard/star-empty.png" class="visible" alt="star-empty">
                        <img src="images/dashboard/star-filled.png" class="hidden" alt="star-filled">
                    </div>
                    <!-- /STARRED -->
                </div>
                
                <div class="inbox-message-author">
                    <figure class="user-avatar">
                        <img src="images/avatars/avatar_06.jpg" alt="user-img">
                    </figure>
                    <p class="text-header">
                        Sarah-Imaginarium
                        <span class="message-icon icon-envelope-open"></span>
                    </p>
                </div>

                <a href="dashboard-openmessage.html">
                    <div class="inbox-message-content">
                        <p class="text-header normal">Feedback About Changes</p>
                        <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                    </div>
                </a>

                <div class="inbox-message-type">
                    <span class="message-icon icon-envelope-open"></span>
                </div>

                <div class="inbox-message-date">
                    <p>Oct 12th, 2013</p>
                </div>
            </div>
            <!-- INBOX MESSAGE -->

            <!-- INBOX MESSAGE -->
            <div class="inbox-message">
                <div class="inbox-message-actions">
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="msg8" name="msg8">
                    <label for="msg8" class="label-check">
                        <span class="checkbox primary"><span></span></span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- STARRED -->
                    <div class="starred">
                        <img src="images/dashboard/star-empty.png" class="visible" alt="star-empty">
                        <img src="images/dashboard/star-filled.png" class="hidden" alt="star-filled">
                    </div>
                    <!-- /STARRED -->
                </div>
                
                <div class="inbox-message-author">
                    <figure class="user-avatar">
                        <img src="images/avatars/avatar_05.jpg" alt="user-img">
                    </figure>
                    <p class="text-header">
                        DaBebop
                        <span class="message-icon icon-envelope-open"></span>
                    </p>
                </div>

                <a href="dashboard-openmessage.html">
                    <div class="inbox-message-content">
                        <p class="text-header normal">Miniverse Mockup Inquiry</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                    </div>
                </a>

                <div class="inbox-message-type">
                    <span class="message-icon icon-envelope-open"></span>
                </div>

                <div class="inbox-message-date">
                    <p>May 24th, 2013</p>
                </div>
            </div>
            <!-- INBOX MESSAGE -->

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
        <!-- /INBOX MESSAGES -->
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