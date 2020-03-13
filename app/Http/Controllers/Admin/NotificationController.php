<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function mailbox(){
    	return view('admin.notification.mailbox');
    }
    public function chat(){
    	return view('admin.notification.chat');
    }
    public function noticeBoard(){
    	return view('admin.notification.notice_board');
    }
}
