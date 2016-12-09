@extends('layouts.layout')

@section('content')


    <?php
    function rateToStar($average_rate){
        round($average_rate,1);
        switch($average_rate){
            case 0:
            case 0.1:
            case 0.2:
            case 0.3:
                echo'
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
                break;
            case 0.4:
            case 0.5:
            case 0.6:
            case 0.7:
                echo'
            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
                break;
            case 0.8:
            case 0.9:
            case 1:
            case 1.1:
            case 1.2:
            case 1.3:
                echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
                break;
            case 1.4:
            case 1.5:
            case 1.6:
            case 1.7:
                echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
                break;
            case 1.8:
            case 1.9:
            case 2:
            case 2.1:
            case 2.2:
            case 2.3:
                echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
                break;
            case 2.4:
            case 2.5:
            case 2.6:
            case 2.7:
                echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
                break;
            case 2.8:
            case 2.9:
            case 3:
            case 3.1:
            case 3.2:
            case 3.3:
                echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
                break;
            case 3.4:
            case 3.5:
            case 3.6:
            case 3.7:
                echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
                break;
            case 3.8:
            case 3.9:
            case 4:
            case 4.1:
            case 4.2:
            case 4.3:
                echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </p>';
                break;
            case 4.4:
            case 4.5:
            case 4.6:
            case 4.7:
                echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
            </p>';
                break;
            case 4.8:
            case 4.9:
            case 5:
                echo'
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            </p>';
                break;
        }




    }


    ?>



    <div class="general_social_icons">
        <nav class="social">
            <ul>
                <li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
                <li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
                <li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
                <li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>
            </ul>
        </nav>
    </div>
    <!-- /w3l-medile-movies-grids -->
    <div class="white-popup mfp-hide" id="test-popup"  data-backdrop="static">
        <div class="modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    商品&レビュー登録　OR レビューのみ登録
                </div>
                <section>
                    <div class="modal-body">
                        {{--<div class="w3_login_module">--}}
                        <div class="module form-module">
                            <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                                <div class="tooltip">レビューのみ</div>
                            </div>
                            <div class="form">

                                <div class="col-md-12 well">
                                    データベースに商品の登録とレビュー・評価を投稿します。<br>
                                </div>



                                <!-- general -->


                                <form enctype="multipart/form-data" method="post" action="{{url('/register-and-review/')}}">
                                    {{ csrf_field() }}
                                    <div class="col-md-6">
                                        <input type="text" id="name" name="name" placeholder="商品名"></div>
                                    <div class="col-md-6">
                                        <input type="radio" name="wantgood" value="1" checked>もらって嬉しかったもの
                                        <input type="radio" name="wantgood" value="2">欲しいもの
                                    </div>
                                    <div class="col-md-12">
                                        ジャンル:
                                        <select id="genres" name="genres">
                                            <option value="1">本</option>
                                            <option value="2">DVD・音楽</option>
                                            <option value="3">TVゲーム</option>
                                            <option value="4">家電・カメラ・AV機器</option>
                                            <option value="5">パソコン・オフィス用品</option>
                                            <option value="6">ホーム&キッチン・DIY</option>
                                            <option value="7">食品・飲料・お酒</option>
                                            <option value="8">ドラッグ・ビューティ</option>
                                            <option value="9">ベビー・おもちゃ</option>
                                            <option value="10">服</option>
                                            <option value="11">シューズ</option>
                                            <option value="12">バッグ</option>
                                            <option value="13">腕時計</option>
                                            <option value="14">スポーツ&アウトドア</option>
                                            <option value="15">車&バイク</option>
                                        </select><br>
                                    </div>
                                    <div class="col-md-12">
                                        シーン:
                                        <select id="scene" name="scene">
                                            <option value="1">誕生日</option>
                                            <option value="2">結婚記念日</option>
                                            <option value="3">クリスマス</option>
                                            <option value="4">出産祝い</option>
                                            <option value="5">結婚祝い</option>
                                            <option value="6">手土産</option>
                                            <option value="7">引っ越し</option>
                                            <option value="8">お中元＆お歳暮</option>
                                            <option value="9">父の日</option>
                                            <option value="10">母の日</option>
                                            <option value="11">敬老の日</option>
                                            <option value="12">卒業＆就職祝い</option>
                                            <option value="13">入学祝い</option>

                                        </select><br>
                                    </div>
                                    <div class="col-md-12">
                                        <style>
                                            label {
                                                margin-left: 0em;
                                            }
                                            .my-file-input {
                                                display: inline-block;
                                                padding: 5px;
                                                width: 200px;
                                                text-align: center;
                                                white-space: nowrap;
                                                overflow: hidden;
                                                font-size: 14px;
                                                text-overflow: ellipsis;
                                                background-color: #ff9393;
                                                color: white;
                                                box-shadow: #888 2px 2px 1px;
                                                cursor: pointer;
                                            }
                                            .my-file-input:hover {
                                                background-color: #fc6c6c;
                                            }
                                            .my-file-input:hover {
                                                background-color: #fc6c6c;
                                            }
                                            .my-file-input:active {
                                                box-shadow: #f75454 1px 1px 1px;
                                                position: relative;
                                                top: 1px; left: 1px;
                                            }
                                            .my-file-input input {
                                                display: none;
                                            }
                                        </style>


                                        <label class="my-file-input"><input type="file" id="image" name="image" accept="image/*">商品画像を選択</label>

                                        <script>
                                            document.getElementById("image").addEventListener("change", function(e){
                                                e.target.nextSibling.nodeValue = e.target.files.length ? e.target.files[0].name : "商品画像を選択";
                                            });
                                        </script>
                                    </div>




                                    {{--<div class="well">--}}
                                    {{--商品のレビューと評価（5段階）を登録します。--}}
                                    {{--</div>--}}




                                    {{ csrf_field() }}

                                    {{--<input type="text" name="name" id="name" readonly="readonly" value="{{ $name }}"><br>--}}



                                    <div class="col-md-6">
                                        <textarea name="comment" id="comment" rows="4" cols="40" placeholder="レビュー（最大100字)" maxlength="100"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <p>評価
                                            <select id="rate" name="rate" size="1">
                                                <option value="5">★★★★★</option>
                                                <option value="4">★★★★☆</option>
                                                <option value="3">★★★☆☆</option>
                                                <option value="2">★★☆☆☆</option>
                                                <option value="1">★☆☆☆☆</option>
                                            </select></p><br>
                                    </div>

                                    @if(Auth::check() == false)

                                        {{--ログインしていない場合（ゲストユーザー）--}}

                                        <div class="col-md-12 well" >
                                            現在ユーザーログインされていません。<br>
                                            商品を登録するにはログインするか、ゲストユーザーとして以下のユーザー情報を入力してください。<br>
                                        </div>
                                        <div class="col-md-3">
                                            性別:
                                            <input type="radio" name="sex" value="1" checked>男
                                            <input type="radio" name="sex" value="2">女
                                        </div>
                                        <div class="col-md-5">
                                            年齢:
                                            <select id="age" name="age">
                                                <option value="1">10歳未満</option>
                                                <option value="2">10代前半</option>
                                                <option value="3">10代後半</option>
                                                <option value="4">20代前半</option>
                                                <option value="5">20代後半</option>
                                                <option value="6">30代前半</option>
                                                <option value="7">30代後半</option>
                                                <option value="8">40代前半</option>
                                                <option value="9">40代後半</option>
                                                <option value="10">50代</option>
                                                <option value="11">60代</option>
                                                <option value="12">70歳以上</option>
                                                <
                                            </select><br>
                                        </div>
                                        <div class="col-md-4">
                                            趣味:
                                            <select id="hobbies_id" name="hobbies_id">
                                                <option value="1">スポーツ</option>
                                                <option value="2">読書</option>
                                                <option value="3">PC</option>
                                                <option value="4">旅行</option>
                                                <option value="5">音楽</option>
                                                <option value="6">映画鑑賞</option>
                                                <option value="7">車＆バイク</option>
                                                <option value="8">ゲーム</option>
                                                <option value="9">料理</option>
                                                <option value="10">お酒</option>
                                                <option value="11">ショッピング</option>
                                                <option value="12">手芸＆裁縫</option>
                                                <option value="13">グルメ</option>
                                                <option value="14">ガーデニング</option>
                                                <option value="15">アイドル</option>
                                                <option value="16">その他</option>
                                            </select><br>
                                        </div>

                                    @endif
                                    <div class="col-md-12">
                                        <label class="my-file-input"><input type="submit">商品とレビューを登録する</label>
                                    </div>
                                </form>
                            </div>




                            <div class="form">
                                <section>


                                    <iframe height="100%" src="search.php">

                                    </iframe>


                                    {{--<div class="well">--}}
                                    {{--商品のレビューと評価（5段階）を登録します。--}}
                                    {{--</div>--}}




                                    {{ csrf_field() }}

                                    {{--<input type="text" name="name" id="name" readonly="readonly" value="{{ $name }}"><br>--}}



                                    <div class="col-md-6">
                                        <textarea name="comment" id="comment" rows="4" cols="40" placeholder="レビュー（最大100字)" maxlength="100"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <p>評価
                                            <select id="rate" name="rate" size="1">
                                                <option value="5">★★★★★</option>
                                                <option value="4">★★★★☆</option>
                                                <option value="3">★★★☆☆</option>
                                                <option value="2">★★☆☆☆</option>
                                                <option value="1">★☆☆☆☆</option>
                                            </select></p><br>
                                    </div>

                                    @if(Auth::check() == false)

                                        {{--ログインしていない場合（ゲストユーザー）--}}

                                        <div class="col-md-12 well" >
                                            現在ユーザーログインされていません。<br>
                                            商品を登録するにはログインするか、ゲストユーザーとして以下のユーザー情報を入力してください。<br>
                                        </div>
                                        <div class="col-md-3">
                                            性別:
                                            <input type="radio" name="sex" value="1" checked>男
                                            <input type="radio" name="sex" value="2">女
                                        </div>
                                        <div class="col-md-5">
                                            年齢:
                                            <select id="age" name="age">
                                                <option value="1">10歳未満</option>
                                                <option value="2">10代前半</option>
                                                <option value="3">10代後半</option>
                                                <option value="4">20代前半</option>
                                                <option value="5">20代後半</option>
                                                <option value="6">30代前半</option>
                                                <option value="7">30代後半</option>
                                                <option value="8">40代前半</option>
                                                <option value="9">40代後半</option>
                                                <option value="10">50代</option>
                                                <option value="11">60代</option>
                                                <option value="12">70歳以上</option>

                                            </select><br>
                                        </div>
                                        <div class="col-md-4">
                                            趣味:
                                            <select id="hobbies_id" name="hobbies_id">
                                                <option value="1">スポーツ</option>
                                                <option value="2">読書</option>
                                                <option value="3">PC</option>
                                                <option value="4">旅行</option>
                                                <option value="5">音楽</option>
                                                <option value="6">映画鑑賞</option>
                                                <option value="7">車＆バイク</option>
                                                <option value="8">ゲーム</option>
                                                <option value="9">料理</option>
                                                <option value="10">お酒</option>
                                                <option value="11">ショッピング</option>
                                                <option value="12">手芸＆裁縫</option>
                                                <option value="13">グルメ</option>
                                                <option value="14">ガーデニング</option>
                                                <option value="15">アイドル</option>
                                                <option value="16">その他</option>
                                            </select><br>
                                        </div>

                                    @endif
                                    <div class="col-md-12">
                                        <label class="my-file-input"><input type="submit">レビューを登録する</label>
                                    </div>

                                </section>

                            </div>

                        </div>
                    </div>
                    {{--</div>--}}
                </section>
            </div>
        </div>
    </div>
    <script>
        $('.toggle').click(function(){
            // Switches the Icon
            $(this).children('i').toggleClass('fa-pencil');
            // Switches the forms
            $('.form').animate({
                height: "toggle",
                'padding-top': 'toggle',
                'padding-bottom': 'toggle',
                opacity: "toggle"
            }, "slow");
        });
    </script>


    <div class="general-agileits-w3l">
        <div class="w3l-medile-movies-grids">

            <!-- /movie-browse-agile -->

            <div class="movie-browse-agile">
                <!--/browse-agile-w3ls -->
                <div class="browse-agile-w3ls general-w3ls">
                    <div class="tittle-head">
                        <h4 class="latest-text">シーン別ランキングTOP20</h4>


                    </div>
                    <div class="Latest-tv-series">

                        <div class="container">
                            <div class="tittle-head">
                                <h2 class="latest-text">TOP3</h2>
                            </div>
                            <ul class="slider">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            @foreach($ranking as $rank)
                                                @if($rank['ranking_no'] < 4)
                                                    <div class="col-md-6 agile_tv_series_grid_left">

                                                        <img src= {{$rank['image']}}  class="img-responsive" />



                                                    </div>
                                                    <div class="col-md-6 agile_tv_series_grid_right">
                                                        <p class="fexi_header">{{$rank['ranking_no']}}位</p>

                                                        <p class="fexi_header_para"><span>商品名<label>:</label></span>{{$rank['name']}}</p>
                                                        <p class="fexi_header_para">
                                                            <span>ジャンル<label>:</label></span>
                                                            {{$rank['genres']}}
                                                        </p>
                                                        {{--<p class="fexi_header_para">--}}
                                                        {{--<span>シーン<label>:</label> </span>--}}
                                                        {{--{{$rank['scenes']}}--}}
                                                        {{--</p>--}}

                                                        <p class="fexi_header_para fexi_header_para1"><span>評価<label>:</label></span>

                                                        {{rateToStar($rank['average_rate'])}}

                                                    </div>
                                                    <div class="clearfix"> </div>
                                        {{--</ul>--}}
                                        {{--</div>--}}
                                        @else
                                    </ul>
                                </div>
                            </ul>
                            @break
                            @endif
                            @endforeach


                            <div class="tittle-head">
                                <h2 class="latest-text">4位〜20位</h2>
                            </div>

                            <div class="agileinfo_flexislider_grids">
                                @foreach($ranking as $rank)
                                    @if($rank['ranking_no'] < 4)
                                        {{--*/$rank['ranking_no'] = 4; /*--}}

                                    @elseif($rank['ranking_no'] < 7)



                                        <div class="col-md-4 w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present1.jpg" title="album-name" class="img-responsive" alt=" " />

                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Test {{$rank['ranking_no']}}位プレゼント</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">
                                                <p>{{$rank['ranking_no']}}位</p>
                                            </div>
                                        </div>


                                    @else

                            </div>
                            </ul>
                            @break
                            @endif
                            @endforeach

                            @foreach($ranking as $rank)
                                @if($rank['ranking_no'] < 7)
                                    {{--*/$rank['ranking_no'] = 7; /*--}}
                                @elseif($rank['ranking_no'] < 15)

                                    <div class="col-md-3 w3l-movie-gride-agile">
                                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present4.jpeg" title="album-name" class="img-responsive-rank" alt=" " />
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html">Test {{$rank['ranking_no']}}位プレゼント</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>{{$rank['ranking_no']}}位</p>
                                        </div>
                                    </div>
                                @else
                        </div>
                        </ul>
                        @break
                        @endif
                        @endforeach

                        @foreach($ranking as $rank)
                            @if($rank['ranking_no'] < 15)
                                {{--*/$rank['ranking_no'] = 7; /*--}}
                            @elseif($rank['ranking_no'] < 21)




                                <div class="col-md-2 w3l-movie-gride-agile">
                                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="/images/present6.jpg" title="album-name" class="img-responsive-rank-low" alt=" " />

                                    </a>
                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                        <div class="w3l-movie-text">
                                            <h6><a href="single.html">Test {{$rank['ranking_no']}}位プレゼント</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">

                                            <div class="block-stars">
                                                <ul class="w3l-ratings">
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>{{$rank['ranking_no']}}位</p>
                                    </div>
                                </div>

                            @else
                    </div>
                    </ul>
                    @break
                    @endif
                    @endforeach






                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        </li>

        </ul>
    </div>
    </section>
    <!-- flexSlider -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <script defer src="/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //flexSlider -->
    </div>
    </div>
    <!-- pop-up-box -->

    <script src="/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!--//pop-up-box -->
    <div id="small-dialog" class="mfp-hide">
        <iframe src="https://player.vimeo.com/video/164819130?title=0&byline=0"></iframe>
    </div>
    <div id="small-dialog1" class="mfp-hide">
        <iframe src="https://player.vimeo.com/video/148284736"></iframe>
    </div>
    <div id="small-dialog2" class="mfp-hide">
        <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
    </div>
    <script>
        $(document).ready(function() {
            $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    @if(Auth::check() == false || Auth::user()->connect == false)
        <script>
            $.magnificPopup.open({
                items: {src: '#test-popup'},
                type: 'inline',
                modal: true,
            }, 0);
        </script>
    @endif

    <!-- //Latest-tv-series -->
    <!-- //movie-browse-agile -->
    <!--body wrapper start-->
    <!--body wrapper start-->

    <!--body wrapper end-->
    </div>
    </div>
    </div>
    <!-- //w3l-medile-movies-grids -->
    </div>
    <!-- //comedy-w3l-agileits -->
@endsection