<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    //function DashboardPage():View{


      //  return view('pages.dashboard.dashboard-page');
   // }

     function DashboardPage(Request $userId): View {
          $user = User::find($userId);

        //   if ($user && $user->role == 1) {
        //      return view('pages.dashboard.dashboard-page');
        // }

        // return view('userLogin');
        return view('pages.dashboard.dashboard-page');
      }
}
