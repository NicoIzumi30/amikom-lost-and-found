<x-app-main-layout>
   <link rel="stylesheet" href="{{asset('css/chats.css')}}">
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="pt-1">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card chat-app">
                            <div id="plist" class="people-list">
                                <h3>List Contact</h3>
                                <hr>
                                <ul class="list-unstyled chat-list mt-2 mb-0">
                                    <li class="clearfix">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                        <div class="about">
                                            <div class="name">Vincent Porter</div>

                                        </div>
                                    </li>
                                    <li class="clearfix active">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                        <div class="about">
                                            <div class="name">Aiden Chavez</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                        <div class="about">
                                            <div class="name">Mike Thomas</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                        <div class="about">
                                            <div class="name">Christian Kelly</div>

                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
                                        <div class="about">
                                            <div class="name">Monica Ward</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                        <div class="about">
                                            <div class="name">Dean Henry</div>\
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">List Contact</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body people-list-modal">
                                            <ul class="list-unstyled chat-list mt-2 mb-0">
                                                <li class="clearfix">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                        alt="avatar">
                                                    <div class="about">
                                                        <div class="name">Vincent Porter</div>

                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                        alt="avatar">
                                                    <div class="about">
                                                        <div class="name">Aiden Chavez</div>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                        alt="avatar">
                                                    <div class="about">
                                                        <div class="name">Mike Thomas</div>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                        alt="avatar">
                                                    <div class="about">
                                                        <div class="name">Christian Kelly</div>

                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar8.png"
                                                        alt="avatar">
                                                    <div class="about">
                                                        <div class="name">Monica Ward</div>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                        alt="avatar">
                                                    <div class="about">
                                                        <div class="name">Dean Henry</div>\
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="chat-header clearfix">
                                    <div class="row">
                                        <div class="col-8">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                    alt="avatar">
                                            </a>
                                            <div class="chat-about">
                                                <h5 class="mt-1 mb-0">Aiden Chavez</h5>
                                            </div>
                                        </div>

                                        <div class="col-4 hidden-md text-right">
                                            <button class="btn" style="height: auto;padding: 6px 5px;border-radius:5px;background-color: rgba(0, 0, 0, 0.5);" data-toggle="modal"
                                                data-target="#chatModal"><i class="fas fa-address-book fa-2x" style="color: white;"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-history">
                                    <ul class="m-b-0">
                                        <li class="clearfix">
                                            <div class="message-data text-right">
                                                <span class="message-data-time">10:10 AM, Today</span>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                    alt="avatar">
                                            </div>
                                            <div class="message other-message float-right"> Hi Aiden, how are you? How
                                                is the project coming along? </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="message-data">
                                                <span class="message-data-time">10:12 AM, Today</span>
                                            </div>
                                            <div class="message my-message">Are we meeting today?</div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="message-data">
                                                <span class="message-data-time">10:15 AM, Today</span>
                                            </div>
                                            <div class="message my-message">Project has been already finished and I have
                                                results to show you.</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-message clearfix">
                                    <div class="input-group mb-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-send"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter text here...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-main-layout>