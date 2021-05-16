<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Review;
use Auth;
class FeedbackController extends Controller {

    public function index()
    {
        return view('pages.feedback');
    }

    public function save(Request $request)
    {
        if(isset(Auth::user()->id)) {
            $userid = Auth::user()->id;
        } else {
            $userid = null;
        }
        Review::insert([
            'userid'=> $userid,
            'team'=> $request->team,
            'firm'=> $request->firm,
            'employer'=> $request->employer,
            'successful'=> $request->successful,
            'recruitment'=> $request->recruitment,
            'regarding'=> $request->regarding,
            'stars' => $request->stars,
            'recomend' => $request->recomend,
            'recomend1'=> $request->recomend1,
            'reviewTitle'=> $request->reviewTitle,
            'reviewtext'=> $request->reviewtext,
            'stars1'=> $request->stars1,
            'stars2'=> $request->stars2,
            'stars3'=> $request->stars3,
            'stars4'=> $request->stars4,
            'status'=> 1,
            'stars5'=> $request->stars5,
            'stars6'=> $request->stars6,
            'added_value'=> $request->added_value,
            'interview_preparation' => $request->interview_preparation,
            'have_gone_better' => $request->have_gone_better,
            'reviewRating'=> $request->reviewRating
        ]);

        return redirect()->back()->with('message', 'Your review has been successfully received. <br>Once its approved it will appear in the website.');
    }
}