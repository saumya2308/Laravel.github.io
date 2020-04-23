@extends('layouts.subscriber_layout')

@section('content')
<div class="ms_footer_wrapper">
    <div class="ms_footer_inner">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer_box footer_subscribe">
                    <p>Create An Admin Account</p>
                    <form method="post" action="/adminreg">
                        @csrf
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="save_btn">Create</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_box footer_subscribe">
                    <p></p>
                    <form method="post" action="/adminreg">
                        @csrf
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="save_btn">Create</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_box footer_contacts">
                    <h1 class="footer_title">contact us</h1>
                    <ul class="foo_con_info">
                        <li>
                            <div class="foo_con_icon">
                                <img src="images/svg/phone.svg" alt="">
                            </div>
                            <div class="foo_con_data">
                                <span class="con-title">Call us :</span>
                                <span>(+91) 9036532746</span>
                            </div>
                        </li>
                        <li>
                            <div class="foo_con_icon">
                                <img src="images/svg/message.svg" alt="">
                            </div>
                            <div class="foo_con_data">
                                <span class="con-title">email us :</span>
                                <span><a href="#">info@codemarks.in </a></span>
                            </div>
                        </li>
                        <li>
                            <div class="foo_con_icon">
                                <img src="images/svg/add.svg" alt="">
                            </div>
                            <div class="foo_con_data">
                                <span class="con-title">walk in :</span>
                                <span>6/111A, Lingarajapuram, Bangalore, India.</span>
                            </div>
                        </li>
                    </ul>
                    <div class="foo_sharing">
                        <div class="share_title">follow us :</div>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Copyright---->
</div>
@endsection