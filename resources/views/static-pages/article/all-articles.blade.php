@extends('layouts.base')
@section('title','所有文章')
@section('content')
    <div class="ui container grid">
        <div class="column">
            <div class="ui breadcrumb">
                <a href="/" class="section">首页</a>
                <span class="divider">/</span>
                <span class="active section">资源</span>
            </div>
        </div>
    </div>
    <div class="ui  grid container stackable">
        <div class="sixteen wide column">
            <div class="ui segment article-content">
                <div class="extra-padding">
                    <p class="book-article-meta">
                        <a href=""><i class="file text icon"></i>
                            所有文章</a>
                        <span class="divider">/</span>
                    </p>

                    <div class="ui celled list">
                        <div class="item">
                            <div class="right floated content labels">
                                <a class="item">
                                    <div class="ui violet horizontal label">php</div>
                                </a>
                                <span class="labels-time" title="评论数">0</span>/
                                <span class="labels-time" title="点赞数">13</span>/
                                <span class="labels-time" title="收藏数">3</span>&nbsp;&nbsp;&nbsp;
                                <span class="labels-time" title="发布时间">3天前</span>
                            </div>
                            <img class="ui avatar image avatar-b" alt="ucer" title="ucer"
                                 src="http://www.semantic-ui.cn/images/avatar/small/helen.jpg">
                            <div class="content">
                                <a href="" title="php workmen 的正确使用方式">
                                    <div class="header">php workmen 的正确使用方式</div>
                                </a>
                                workmen 是 php 的一个 socket 框架,专门用来做客服系统/聊天室 . . .
                            </div>
                        </div>
                        <div class="item">
                            <div class="right floated content labels">
                                <a class="item">
                                    <div class="ui green horizontal label">php</div>
                                </a>
                                <span class="labels-time" title="评论数">0</span>/
                                <span class="labels-time" title="点赞数">13</span>/
                                <span class="labels-time" title="收藏数">3</span>&nbsp;&nbsp;&nbsp;
                                <span class="labels-time" title="发布时间">3天前</span>
                            </div>
                            <img class="ui avatar image avatar-b" alt="ucer" title="ucer"
                                 src="http://www.semantic-ui.cn/images/avatar/small/helen.jpg">
                            <div class="content">
                                <a href="" title="php workmen 的正确使用方式">
                                    <div class="header">php workmen 的正确使用方式</div>
                                </a>
                                <span class="labels-p"> workmen 是 php 的一个 socket 框架,专门用来做客服系统/聊天室 . . .</span>

                            </div>
                        </div>
                        <div class="item">
                            <div class="right floated content labels">
                                <a class="item">
                                    <div class="ui yellow horizontal label">php</div>
                                </a>
                                <span class="labels-time" title="评论数">0</span>/
                                <span class="labels-time" title="点赞数">13</span>/
                                <span class="labels-time" title="收藏数">3</span>&nbsp;&nbsp;&nbsp;
                                <span class="labels-time" title="发布时间">3天前</span>
                            </div>
                            <img class="ui avatar image avatar-b" alt="ucer" title="ucer"
                                 src="http://www.semantic-ui.cn/images/avatar/small/helen.jpg">
                            <div class="content">
                                <a href="" title="php workmen 的正确使用方式">
                                    <div class="header">php workmen 的正确使用方式</div>
                                </a>
                                workmen 是 php 的一个 socket 框架,专门用来做客服系统/聊天室 . . .
                            </div>
                        </div>
                        <div class="item">
                            <div class="right floated content labels">
                                <a class="item">
                                    <div class="ui violet horizontal label">php</div>
                                </a>
                                <span class="labels-time" title="评论数">0</span>/
                                <span class="labels-time" title="点赞数">13</span>/
                                <span class="labels-time" title="收藏数">3</span>&nbsp;&nbsp;&nbsp;
                                <span class="labels-time" title="发布时间">3天前</span>
                            </div>
                            <img class="ui avatar image avatar-b" alt="ucer" title="ucer"
                                 src="http://www.semantic-ui.cn/images/avatar/small/helen.jpg">
                            <div class="content">
                                <a href="" title="php workmen 的正确使用方式">
                                    <div class="header">php workmen 的正确使用方式</div>
                                </a>
                                workmen 是 php 的一个 socket 框架,专门用来做客服系统/聊天室 . . .
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection