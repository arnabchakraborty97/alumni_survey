<?php

namespace App\Http\Controllers;

use App\Survey;
use App\Answer;
use App\Question;
use App\Department;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(!Auth::user()) {
            return redirect()->route('login')->with('error', 'Unauthorized');
        }

        $surveys = Survey::all();

        return view('surveys.index')->with('surveys', $surveys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::all();
        $departments = Department::all();

        $context = [
            'questions' => $questions,
            'departments' => $departments
        ];

        return view('surveys.AlumniCreate')->with($context);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $survey = new Survey;
        $survey->name = 'Alumni';
        $survey->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[0];
        $answer->body = $request->input('1');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[1];
        $answer->body = $request->input('2');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[2];
        $answer->body = $request->input('3');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[3];
        $answer->body = $request->input('4');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[4];
        $answer->body = $request->input('5');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[5];
        $answer->body = $request->input('6');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[6];
        $answer->body = $request->input('7');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[7];
        $answer->body = $request->input('8');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[8];
        $answer->body = $request->input('9');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[9];
        $answer->body = $request->input('10');
        $answer->save();

        $eleven = "";
        foreach ($request->input('11') as $e) {
            if ($e != null)
                $eleven .= $e.',';
        }
        $eleven = substr(trim($eleven), 0, -1);
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[10];
        $answer->body = $eleven;
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[11];
        $answer->body = $request->input('12');
        $answer->save();

        $thirteen = "";
        foreach ($request->input('13') as $e) {
            if ($e != null)
                $thirteen .= $e.',';
        }
        $thirteen = substr(trim($thirteen), 0, -1);

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[12];
        $answer->body = $thirteen;
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[13];
        $answer->body = $request->input('14');
        $answer->save();

        $fifteen = "";
        foreach ($request->input('15') as $e) {
            if ($e != null)
                $fifteen .= $e.',';
        }
        $fifteen = substr(trim($fifteen), 0, -1);
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[14];
        $answer->body = $fifteen;
        $answer->save();

        $sixteen = "";
        foreach ($request->input('16') as $e) {
            if ($e != null)
                $sixteen .= $e.',';
        }
        $sixteen = substr(trim($sixteen), 0, -1);
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[15];
        $answer->body = $sixteen;
        $answer->save();

        $seventeen = "";
        foreach ($request->input('17') as $e) {
            if ($e != null)
                $seventeen .= $e.',';
        }
        $seventeen = substr(trim($seventeen), 0, -1);
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[16];
        $answer->body = $seventeen;
        $answer->save();

        $arr = $request->input('18');
        $eighteen = $arr[0].': '.$request->input('18_1').','.$arr[1].': '.$request->input('18_2').','.$arr[2].': '.$request->input('18_3');
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[17];
        $answer->body = $eighteen;
        $answer->save();

        $arr = $request->input('19');
        $nineteen = $arr[0].': '.$request->input('19_1').','.$arr[1].': '.$request->input('19_2').','.$arr[2].': '.$request->input('19_3').','.$arr[3].': '.$request->input('19_4').','.$arr[4].': '.$request->input('19_5').','.$arr[5].': '.$request->input('19_6').','.$arr[6].': '.$request->input('19_7').','.$arr[7].': '.$request->input('19_8').','.$arr[8].': '.$request->input('19_9');
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[18];
        $answer->body = $nineteen;
        $answer->save();

        $arr = $request->input('20');
        $twenty = $arr[0].': '.$request->input('20_1').','.$arr[1].': '.$request->input('20_2').','.$arr[2].': '.$request->input('20_3').','.$arr[3].': '.$request->input('20_4').','.$arr[4].': '.$request->input('20_5').','.$arr[5].': '.$request->input('20_6').','.$arr[6].': '.$request->input('20_7').','.$arr[7].': '.$request->input('20_8');
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[19];
        $answer->body = $twenty;
        $answer->save();

        $arr = $request->input('21');
        $twentyone = $arr[0].': '.$request->input('21_1').','.$arr[1].': '.$request->input('21_2');
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[20];
        $answer->body = $twentyone;
        $answer->save();

        $arr = $request->input('22');
        $twentytwo = $arr[0].': '.$request->input('22_1').','.$arr[1].': '.$request->input('22_2').','.$arr[2].': '.$request->input('22_3').','.$arr[3].': '.$request->input('22_4').','.$arr[4].': '.$request->input('22_5').','.$arr[5].': '.$request->input('22_6').','.$arr[6].': '.$request->input('22_7').','.$arr[7].': '.$request->input('22_8').','.$arr[8].': '.$request->input('22_9').','.$arr[9].': '.$request->input('22_10').','.$arr[10].': '.$request->input('22_11').','.$arr[11].': '.$request->input('22_12');
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[21];
        $answer->body = $twentytwo;
        $answer->save();

        $arr = $request->input('23');
        $twentythree = $arr[0].': '.$request->input('23_1').','.$arr[1].': '.$request->input('23_2').','.$arr[2].': '.$request->input('23_3').', '.$arr[3].': '.$request->input('23_4');
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[22];
        $answer->body = $twentythree;
        $answer->save();

        $twentyfour = "";
        foreach($request->input('24_1') as $e) {
            $twentyfour .= $e.',';
        }
        foreach($request->input('24_2') as $e) {
            $twentyfour .= $e.',';
        }
        foreach($request->input('24_3') as $e) {
            $twentyfour .= $e.',';
        }
        $twentyfour = substr(trim($twentyfour), 0, -1);
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[23];
        $answer->body = $twentyfour;
        $answer->save();

        $twentyfive = "";
        foreach($request->input('25_1') as $e) {
            $twentyfive .= $e.',';
        }
        foreach($request->input('25_2') as $e) {
            $twentyfive .= $e.',';
        }
        foreach($request->input('25_3') as $e) {
            $twentyfive .= $e.',';
        }
        $twentyfive = substr(trim($twentyfive), 0, -1);
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[24];
        $answer->body = $twentyfive;
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[25];
        $answer->body = $request->input('26');
        $answer->save();

        if (Auth::user())
            return redirect()->route('surveys.index')->with('success', 'Survey Added');
        else
            return view('surveys.thankyou')->with('success', 'Survey Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        $questions = Question::all();

        $answers = $survey->answers;

        $context = [
            'questions' => $questions,
            'answers' => $answers
        ];

        return view('surveys.show')->with($context);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
        if(!Auth::user()) {
            return redirect()->route('login')->with('error', 'Unauthorized');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        if ($survey->delete())
            return redirect()->back()->with('success', 'Survey Deleted');
    }

    public function exitCreate() {
        $questions = Question::all();
        $departments = Department::all();

        $context = [
            'questions' => $questions,
            'departments' => $departments
        ];

        return view('surveys.ExitCreate')->with($context);
    }

    public function exitStore(Request $request) {

        $survey = new Survey;
        $survey->name = 'Exit';
        $survey->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[0];
        $answer->body = $request->input('1');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[1];
        $answer->body = $request->input('2');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[2];
        $answer->body = $request->input('3');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[3];
        $answer->body = $request->input('4');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[4];
        $answer->body = $request->input('5');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[5];
        $answer->body = $request->input('6');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[6];
        $answer->body = $request->input('7');
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[7];
        $answer->body = $request->input('9');
        $answer->save();

        $thirteen = "";
        foreach ($request->input('13') as $e) {
            if ($e != null)
                $thirteen .= $e.',';
        }
        $thirteen = substr(trim($thirteen), 0, -1);

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[8];
        $answer->body = $thirteen;
        $answer->save();

        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[9];
        $answer->body = $request->input('14');
        $answer->save();

        $fifteen = "";
        foreach ($request->input('15') as $e) {
            if ($e != null)
                $fifteen .= $e.',';
        }
        $fifteen = substr(trim($fifteen), 0, -1);
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[10];
        $answer->body = $fifteen;
        $answer->save();

        $sixteen = "";
        foreach ($request->input('16') as $e) {
            if ($e != null)
                $sixteen .= $e.',';
        }
        $sixteen = substr(trim($sixteen), 0, -1);
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[11];
        $answer->body = $sixteen;
        $answer->save();

        $seventeen = "";
        foreach ($request->input('17') as $e) {
            if ($e != null)
                $seventeen .= $e.',';
        }
        $seventeen = substr(trim($seventeen), 0, -1);
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[12];
        $answer->body = $seventeen;
        $answer->save();

        $arr = $request->input('18');
        $eighteen = $arr[0].': '.$request->input('18_1').','.$arr[1].': '.$request->input('18_2').','.$arr[2].': '.$request->input('18_3');
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[13];
        $answer->body = $eighteen;
        $answer->save();

        $arr = $request->input('20');
        $twenty = $arr[0].': '.$request->input('20_1').','.$arr[1].': '.$request->input('20_2').','.$arr[2].': '.$request->input('20_3').','.$arr[3].': '.$request->input('20_4').','.$arr[4].': '.$request->input('20_5').','.$arr[5].': '.$request->input('20_6').','.$arr[6].': '.$request->input('20_7').','.$arr[7].': '.$request->input('20_8');
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[14];
        $answer->body = $twenty;
        $answer->save();

        $arr = $request->input('21');
        $twentyone = $arr[0].': '.$request->input('21_1').','.$arr[1].': '.$request->input('21_2');
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[15];
        $answer->body = $twentyone;
        $answer->save();

        $arr = $request->input('22');
        $twentytwo = $arr[0].': '.$request->input('22_1').','.$arr[1].': '.$request->input('22_2').','.$arr[2].': '.$request->input('22_3').','.$arr[3].': '.$request->input('22_4').','.$arr[4].': '.$request->input('22_5').','.$arr[5].': '.$request->input('22_6').','.$arr[6].': '.$request->input('22_7').','.$arr[7].': '.$request->input('22_8').','.$arr[8].': '.$request->input('22_9').','.$arr[9].': '.$request->input('22_10').','.$arr[10].': '.$request->input('22_11').','.$arr[11].': '.$request->input('22_12');
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[16];
        $answer->body = $twentytwo;
        $answer->save();

        $arr = $request->input('23');
        $twentythree = $arr[0].': '.$request->input('23_1').','.$arr[1].': '.$request->input('23_2').','.$arr[2].': '.$request->input('23_3').', '.$arr[3].': '.$request->input('23_4');
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[17];
        $answer->body = $twentythree;
        $answer->save();

        $twentyfour = "";
        foreach($request->input('24_1') as $e) {
            $twentyfour .= $e.',';
        }
        foreach($request->input('24_2') as $e) {
            $twentyfour .= $e.',';
        }
        foreach($request->input('24_3') as $e) {
            $twentyfour .= $e.',';
        }
        $twentyfour = substr(trim($twentyfour), 0, -1);
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[18];
        $answer->body = $twentyfour;
        $answer->save();

        $twentyfive = "";
        foreach($request->input('25_1') as $e) {
            $twentyfive .= $e.',';
        }
        foreach($request->input('25_2') as $e) {
            $twentyfive .= $e.',';
        }
        foreach($request->input('25_3') as $e) {
            $twentyfive .= $e.',';
        }
        $twentyfive = substr(trim($twentyfive), 0, -1);
        $answer = new Answer;
        $answer->survey_id = $survey->id;
        $answer->question_id = $request->question[19];
        $answer->body = $twentyfive;
        $answer->save();

        if (Auth::user())
            return redirect()->route('surveys.index')->with('success', 'Survey Added');
        else
            return view('surveys.thankyou')->with('success', 'Survey Added');

    }

    public function exitShow(Survey $survey) {

        $answers = $survey->answers;

        $context = [
            'answers' => $answers
        ];

        return view('surveys.exitShow')->with($context);

    }

}
