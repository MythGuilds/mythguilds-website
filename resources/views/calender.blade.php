@extends('layouts.app')


@section('main-content')
    <div class="nk-main">
        <link href="calendar.css" type="text/css" rel="stylesheet" />
    <!-- START: Header Title -->

    <div class="nk-header-title nk-header-title-md nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image">
            <img src=" " alt="" class="jarallax-img" >
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container text-center" >

                    <h1 class="nk-title" style="font-size: 70px; text-align:center ;"   > Guild Calender </h1>
                    <h4> guild events, meetings and special dates will be posted here </h4>
            </div>
        </div>


    </div>

        <!-- guild calender-->
        <?php
        include 'calendar.php';

        $calendar = new Calendar();

        echo $calendar->show();
        ?>



    <div class="nk-gap-4"></div>

    <div class="container">
        <!-- The Modal -->
        <div id="myModal" class="modal nk-modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title nk-title queen" id="myModalLabel">Queen</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ion-android-close"></span>
                        </button>
                    </div>



                    <div class="modal-body">
                        <img  src="assets/images/lexi.png" class="img-fluid lexi " alt=" Me ">
                        <p> Alexis Numa  </p>
                        <p> Also known as </p>
                        <p> Lexi Numa </p>

                        <P> This is your guild leader and The Owner of the gaming community of Myth  </P>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="nk-btn" data-dismiss="modal">Close</button>

                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>



    </div>

    <div class="row" style="margin-bottom: 200px">
        <div class="col-md-6  discord-button" >

            <a href="https://discord.gg/xCDyEyQ">
                <img src="assets/images/discord.png" alt="join our discord " width="300">
            </a>
        </div>
    </div>




    <div class="container">
        <!-- The second modal  -->
        <div id="myModal2" class="modal nk-modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title nk-title legend" id="myModalLabel">Legend </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ion-android-close"></span>
                        </button>
                    </div>



                    <div class="modal-body">

                        <p> Legends are your officers </p>
                        <p> they have power in game but not in discord  with few exceptions </p>
                        <p> such as being able to drag people to certain rooms and assigning ranks </p>
                        <p> keep ing mind while they may not be able to ban someone they can assign you the retard ranking</P>
                        <p> this will prevent you from doing any anything asside from talking in Rexarded island.</p>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="nk-btn" data-dismiss="modal">Close</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>


    </div>

    <div class="container">
        <!-- The Third modal  -->
        <div id="myModal3" class="modal nk-modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title nk-title police" id="myModalLabel">Discord Police </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ion-android-close"></span>
                        </button>
                    </div>



                    <div class="modal-body">

                        <p> Whoop Whoop, thats the sound of the beast..... </p>
                        <p> Whoop whoop thats the sound of the discord police  </p>
                        <p> Discord police is a special role only on our discord servers. (note in game)   </p>
                        <p> These officers are able to actually ban you and are here to help protect the community</P>
                        <p> Please note any officer caught abusing powers will be a automatic perma ban </p>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="nk-btn" data-dismiss="modal">Close</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>



    </div>

    <div class="container">
        <!-- The Fourth  modal  -->
        <div id="myModal4" class="modal nk-modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title nk-title traditionlist" id="myModalLabel">Traditionlist </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ion-android-close"></span>
                        </button>
                    </div>


                    <div class="modal-body">

                        <p> This is a role given to either longstanding members who have given alot to our comunity or people who have earned our trust </p>
                        <p> Most people with this role are well respected members of our community  </p>
                        <p> people with this role will have access to the Traditionalist chat room  </p>
                        <p> they will also have access to most open mic rooms as well </p>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="nk-btn" data-dismiss="modal">Close</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>


    </div>
    <div class="container">
        <!-- The Fifth  modal  -->
        <div id="myModal5" class="modal nk-modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title nk-title worshiper" id="myModalLabel">Worshiper </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ion-android-close"></span>
                        </button>
                    </div>



                    <div class="modal-body">

                        <p> this is our standard member role,  </p>
                        <p> given to those who have both joined in a game we play and our discord  </p>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="nk-btn" data-dismiss="modal">Close</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>



    </div>

    <div class="container">
        <!-- The sixth  modal  -->
        <div id="myModal6" class="modal nk-modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title nk-title follower" id="myModalLabel">Follower </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ion-android-close"></span>
                        </button>
                    </div>



                    <div class="modal-body">

                        <p> A role given to people who have only joined our discord, </p>
                        <p> or who have joined in game but not discord </p>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="nk-btn" data-dismiss="modal">Close</button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>


    </div>


    <div class="nk-gap-4"></div>



    <!-- START: Footer -->
    <!--
        Additional Classes:
            .nk-footer-parallax
            .nk-footer-parallax-opacity
    -->
    <footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity">
        <img class="nk-footer-top-corner" src="assets/images/footer-corner.png" alt="">



        <div class="container" >
            <p class="text-center">
                &copy; <script>document.write(new Date().getFullYear())</script>
                All other trademarks or trade names are the property of their respective owners. All Rights Reserved.

            </p>


            <div class="nk-footer-links" style="display: none">
                <a href="#" class="link-effect">Terms of Service</a> <span>|</span> <a href="#" class="link-effect">Privacy Policy</a>
            </div>

            <div class="nk-gap-4"></div>
        </div>
    </footer>
    <!-- END: Footer -->


</div>
@endsection