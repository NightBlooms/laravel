<?php
namespace App\Http\Controllers;

use App\Member;

class MemberController extends Controller
{
      
      public function info($id)
      {

      	  
          //return 'member-info';
      	  //return route('member-info');
      	  //return 'member-info------' .$id;
      	  // return view('member/member-info',[
         //       'name'=>'李柏槿',
         //       'age'=>'21',
         //       'Appearance level'=>'Max'
      	  // 	]);
          return Member::getMember();

      }
}