@extends('layouts.master')
@section('title', 'Conversation')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="col-lg-12">
                <div class="row chat-window">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-5 col-xl-4 chat-cont-left">
                                <div class="card mb-sm-3 mb-md-0 contacts_card flex-fill">
                                    <div class="card-header chat-search">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="search_btn"><i class="fas fa-search"></i></span>
                                            </div>
                                            <input type="text" id="search-chat" placeholder="Search"
                                                class="form-control search-chat rounded-pill">
                                        </div>
                                    </div>
                                    <div class="card-body contacts_body chat-users-list chat-scroll" id="chat-users-list">
                                        <!-- Users will be loaded here dynamically -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 col-xl-8 chat-cont-right" id="chat-cont-right">
                                <div class="card mb-0">
                                    <div class="card-header msg_head">
                                        <div class="d-flex bd-highlight">
                                            <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                                                <i class="fas fa-chevron-left"></i>
                                            </a>
                                            <div class="img_cont">
                                                <img class="rounded-circle user_img" src="assets/img/customer/profile2.jpg"
                                                    alt="" id="receiver_image">
                                            </div>
                                            <div class="user_info">
                                                <span><strong id="receiver_name">Jeffrey Akridge</strong></span>
                                                <p class="mb-0">Messages</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body msg_card_body chat-scroll" id="chat-messages">
                                        <ul class="list-unstyled" id="chat-message-list">
                                            <!-- Messages will be loaded here dynamically -->
                                        </ul>
                                    </div>
                                    <div class="card-footer">
                                        <div class="input-group">
                                            <input class="form-control type_msg mh-auto empty_check"
                                                placeholder="Type your message..." id="message_input">
                                            <button class="btn btn-primary btn_send"><i class="fa fa-paper-plane"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="searchpart">
        <div class="searchcontent">
            <div class="searchhead">
                <h3>Search </h3>
                <a id="closesearch"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
            <div class="searchcontents">
                <div class="searchparts">
                    <input type="text" placeholder="search here">
                    <a class="btn btn-searchs">Search</a>
                </div>
                <div class="recentsearch">
                    <h2>Recent Search</h2>
                    <ul>
                        <li>
                            <h6><i class="fa fa-search me-2"></i> Settings</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-search me-2"></i> Report</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-search me-2"></i> Invoice</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-search me-2"></i> Sales</h6>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Include necessary JS libraries -->
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.11.0/echo.iife.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script></script>

    <style>
        /* Custom styles for the chat interface */
        .contacts_card {
            height: 100vh;
        }

        .chat-search {
            background: #f4f4f4;
            padding: 10px;
        }

        .chat-users-list {
            overflow-y: scroll;
            height: calc(100vh - 150px);
        }

        .media-img-wrap {
            position: relative;
        }

        .badge-pill {
            background-color: green;
        }

        .search-chat:focus {
            outline: none;
            border-color: #5A9;
        }

        .chat-cont-right {
            display: none;
        }
    </style>

@endsection
