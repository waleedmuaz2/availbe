@extends('layouts.app')

@push('styles')

@section('content')
<div class="az-content az-content-app pd-b-0">
      <div class="container">
        <div class="az-content-left az-content-left-chat">

          <nav class="nav az-nav-line az-nav-line-chat">
            <a href="#" data-toggle="tab" class="nav-link active">Recent Chat</a>
            <a href="#" data-toggle="tab" class="nav-link">Groups</a>
            <a href="#" data-toggle="tab" class="nav-link">Calls</a>
          </nav>

          <div class="az-chat-contacts-wrapper">
            <label class="az-content-label az-content-label-sm">Active Contacts (5)</label>
            <div class="lSSlideOuter "><div class="lSSlideWrapper usingCss"><div id="chatActiveContacts" class="az-chat-contacts lightSlider lsGrab lSSlide" style="width: 432px; height: 55px; padding-bottom: 0%; transform: translate3d(0px, 0px, 0px);">
              <div class="lslide active" style="margin-right: 12px;">
                <div class="az-img-user online"><img src="img/img3.jpg" alt=""></div>
                <small>Adrian</small>
              </div>
              <div class="lslide" style="margin-right: 12px;">
                <div class="az-img-user online"><img src="../img/img4.jpg" alt=""></div>
                <small>John</small>
              </div>
              <div class="lslide" style="margin-right: 12px;">
                <div class="az-img-user online"><img src="../img/img5.jpg" alt=""></div>
                <small>Daniel</small>
              </div>
              <div class="lslide" style="margin-right: 12px;">
                <div class="az-img-user online"><img src="../img/img6.jpg" alt=""></div>
                <small>Katherine</small>
              </div>
              <div class="lslide" style="margin-right: 12px;">
                <div class="az-img-user online"><img src="../img/img7.jpg" alt=""></div>
                <small>Raymart</small>
              </div>
              <div class="lslide" style="margin-right: 12px;">
                <div class="az-img-user online"><img src="../img/img8.jpg" alt=""></div>
                <small>Junrisk</small>
              </div>
              <div class="lslide" style="margin-right: 12px;">
                <div class="az-img-user online"><img src="../img/img9.jpg" alt=""></div>
                <small>George</small>
              </div>
              <div class="lslide" style="margin-right: 12px;">
                <div class="az-img-user online"><img src="../img/img10.jpg" alt=""></div>
                <small>Maryjane</small>
              </div>
              <div class="lslide" style="margin-right: 12px;">
                <div class="az-chat-contacts-more">20+</div>
                <small>More</small>
              </div>
            </div></div></div><!-- az-active-contacts -->
          </div><!-- az-chat-active-contacts -->

          <div id="azChatList" class="az-chat-list ps ps--active-y">
            <div class="media new">
              <div class="az-img-user online">
                <img src="../img/img9.jpg" alt="">
                <span>2</span>
              </div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>Socrates Itumay</span>
                  <span>2 hours</span>
                </div>
                <p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media new">
              <div class="az-img-user">
                <img src="../img/img8.jpg" alt="">
                <span>1</span>
              </div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>Dexter dela Cruz</span>
                  <span>3 hours</span>
                </div>
                <p>Maec enas tempus, tellus eget con dime ntum rhoncus, sem quam</p>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media selected">
              <div class="az-img-user online"><img src="../img/img16.jpg" alt=""></div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>Reynante Labares</span>
                  <span>10 hours</span>
                </div>
                <p>Nam quam nunc, bl ndit vel aecenas et ante tincid</p>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
              <div class="az-img-user"><img src="../img/img10.jpg" alt=""></div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>Joyce Chua</span>
                  <span>2 days</span>
                </div>
                <p>Ma ecenas tempus, tellus eget con dimen tum rhoncus, sem quam</p>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
              <div class="az-img-user"><img src="../img/img17.jpg" alt=""></div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>Rolando Paloso</span>
                  <span>2 days</span>
                </div>
                <p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media new">
              <div class="az-img-user">
                <img src="../img/img18.jpg" alt="">
                <span>1</span>
              </div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>Ariana Monino</span>
                  <span>3 days</span>
                </div>
                <p>Maece nas tempus, tellus eget cond imentum rhoncus, sem quam</p>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
              <div class="az-img-user"><img src="../img/img19.jpg" alt=""></div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>Maricel Villalon</span>
                  <span>4 days</span>
                </div>
                <p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
              <div class="az-img-user"><img src="../img/img20.jpg" alt=""></div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>Maryjane Pechon</span>
                  <span>5 days</span>
                </div>
                <p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
              <div class="az-img-user"><img src="../img/img21.jpg" alt=""></div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>Lovely Dela Cruz</span>
                  <span>5 days</span>
                </div>
                <p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
              <div class="az-img-user"><img src="../img/img3.jpg" alt=""></div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>Daniel Padilla</span>
                  <span>5 days</span>
                </div>
                <p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
              <div class="az-img-user"><img src="../img/img4.jpg" alt=""></div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>John Pratts</span>
                  <span>6 days</span>
                </div>
                <p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
              <div class="az-img-user"><img src="../img/img5.jpg" alt=""></div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>Raymart Santiago</span>
                  <span>6 days</span>
                </div>
                <p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
              </div>
            </div>
            <div class="media">
              <div class="az-img-user"><img src="../img/img6.jpg" alt=""></div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>Samuel Lerin</span>
                  <span>7 days</span>
                </div>
                <p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
              </div>
            </div>
          <div class="ps__rail-x" style="left: 0px; top: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 401px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 150px;"></div></div></div>

        </div>
        <div class="az-content-body az-content-body-chat">
          <div class="az-chat-header">
            <div class="az-img-user"><img src="../img/img16.jpg" alt=""></div>
            <div class="az-chat-msg-name">
              <h6>Reynante Labares</h6>
              <small>Last seen: 2 minutes ago</small>
            </div>
            <nav class="nav">
              <a href="#" class="nav-link"><i class="icon ion-md-more"></i></a>
              <a href="#" class="nav-link" data-toggle="tooltip" title="" data-original-title="Call"><i class="icon ion-ios-call"></i></a>
              <a href="#" class="nav-link" data-toggle="tooltip" title="" data-original-title="Archive"><i class="icon ion-ios-filing"></i></a>
              <a href="#" class="nav-link" data-toggle="tooltip" title="" data-original-title="Trash"><i class="icon ion-md-trash"></i></a>
              <a href="#" class="nav-link" data-toggle="tooltip" title="" data-original-title="View Info"><i class="icon ion-md-information-circle"></i></a>
            </nav>
          </div>
          <div id="azChatBody" class="az-chat-body ps ps--active-y">
            <div class="content-inner">
              <label class="az-chat-time"><span>3 days ago</span></label>
              <div class="media flex-row-reverse">
                <div class="az-img-user online"><img src="../img/img5.jpg" alt=""></div>
                <div class="media-body">
                  <div class="az-msg-wrapper">
                    Nulla consequat massa quis enim. Donec pede justo, fringilla vel...
                  </div>
                  <div class="az-msg-wrapper">rhoncus ut, imperdiet a, venenatis vitae, justo...</div>
                  <div class="az-msg-wrapper pd-0">
                    <img src="../img/img12.jpg" class="wd-200" alt="">
                  </div>
                  <div><span>9:48 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
                </div>
              </div>
              <div class="media">
                <div class="az-img-user online"><img src="../img/img16.jpg" alt=""></div>
                <div class="media-body">
                  <div class="az-msg-wrapper">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                  </div>
                  <div><span>9:32 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
                </div>
              </div>
              <div class="media flex-row-reverse">
                <div class="az-img-user online"><img src="../img/img5.jpg" alt=""></div>
                <div class="media-body">
                  <div class="az-msg-wrapper">
                    Nullam dictum felis eu pede mollis pretium
                  </div>
                  <div><span>11:22 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
                </div>
              </div>
              <label class="az-chat-time"><span>Yesterday</span></label>
              <div class="media">
                <div class="az-img-user online"><img src="../img/img16.jpg" alt=""></div>
                <div class="media-body">
                  <div class="az-msg-wrapper">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                  </div>
                  <div><span>9:32 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
                </div>
              </div>
              <div class="media flex-row-reverse">
                <div class="az-img-user online"><img src="../img/img5.jpg" alt=""></div>
                <div class="media-body">
                  <div class="az-msg-wrapper">
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                  </div>
                  <div class="az-msg-wrapper">
                    Nullam dictum felis eu pede mollis pretium
                  </div>
                  <div><span>9:48 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
                </div>
              </div>

              <label class="az-chat-time"><span>Today</span></label>
              <div class="media">
                <div class="az-img-user online"><img src="../img/img16.jpg" alt=""></div>
                <div class="media-body">
                  <div class="az-msg-wrapper">
                    Maecenas tempus, tellus eget condimentum rhoncus
                  </div>
                  <div class="az-msg-wrapper">
                    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
                  </div>
                  <div><span>10:12 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
                </div>
              </div>
              <div class="media flex-row-reverse">
                <div class="az-img-user online"><img src="../img/img5.jpg" alt=""></div>
                <div class="media-body">
                  <div class="az-msg-wrapper">
                    Maecenas tempus, tellus eget condimentum rhoncus
                  </div>
                  <div class="az-msg-wrapper">
                    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
                  </div>
                  <div><span>09:40 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
                </div>
              </div>
            </div>
          <div class="ps__rail-x" style="left: 0px; top: 646px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 646px; height: 429px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 258px; height: 171px;"></div></div></div><!-- az-chat-body -->
          <div class="az-chat-footer">
            <nav class="nav">
              <a href="#" class="nav-link" data-toggle="tooltip" title="" data-original-title="Add Photo"><i class="fas fa-camera"></i></a>
              <a href="#" class="nav-link" data-toggle="tooltip" title="" data-original-title="Attach a File"><i class="fas fa-paperclip"></i></a>
              <a href="#" class="nav-link" data-toggle="tooltip" title="" data-original-title="Add Emoticons"><i class="far fa-smile"></i></a>
              <a href="#" class="nav-link"><i class="fas fa-ellipsis-v"></i></a>
            </nav>
            <input type="text" class="form-control" placeholder="Type your message here...">
            <a href="#" class="az-msg-send"><i class="far fa-paper-plane"></i></a>
          </div><!-- az-chat-footer -->
        </div><!-- az-content-body -->
      </div>
    </div>
@endsection